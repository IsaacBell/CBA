class CorporatePartnersController < ApplicationController
	
	#before_filter :authenticate_corporate_partner!

  def welcome
    @page = Page.find(params[:id])
  end
  
  def contacts
    @page = Page.find(params[:id])
  end

  def events
    @page = Page.find(params[:id])
  end
  
  def portal
    @page = Page.find(params[:id])
  end
  
  def new_registration
    @corporate_partner = CorporatePartner.new
  end
  
  def create_partner
    @corporate_partner = CorporatePartner.new(registration_params)
      if verify_recaptcha(model: @corporate_partner) && @corporate_partner.save
        CorporatePartnerMailer.corporate_partner_notification(@corporate_partner).deliver_later
        log_in @corporate_partner
        flash[:success] = "Welcome to the Culverhouse Corporate Partner Portal!"
        redirect_to '/corporate-partners/portal'
      else
        redirect_to '/corporate-partners/signup'
      end
  end
  
  def concierge
    @corporate_contact = Concierge.new
  end
  
  def create_concierge
    @corporate_contact = Concierge.new(concierge_params)
    respond_to do |format|
      if verify_recaptcha(model: @corporate_contact) && @corporate_contact.save
        ConciergeMailer.concierge_notification(@corporate_contact).deliver_later
        format.html { redirect_to ('/corporate-partners'), notice: 'Your Information Was Successfully Submitted.' }
        format.json { render :show, status: :created, location: @corporate_contact }
      else
        format.html { render :concierge }
        format.json { render json: @corporate_contact.errors, status: :unprocessable_entity }
      end
    end
  end

  def directory
    if params[:search]
      @profiles = MandersonProfile.search(params[:search]).order("created_at DESC")
    elsif params[:candidate_type]
      @profiles = MandersonProfile.where(:candidate_type => params[:candidate_type]).alphasort
      #flash[:notice] = "There are <b>#{@profiles.count}</b> students in this field of study".html_safe
    else
      @profiles = MandersonProfile.published.alphasort
    end
  end

  def student_profile
    @student = MandersonProfile.find(params[:id])
  end

  def select
    if params[:search]
      @profiles = MandersonProfile.search(params[:search]).order("created_at DESC")
    elsif params[:candidate_type]
      @profiles = MandersonProfile.where(:candidate_type => params[:candidate_type]).alphasort
      #flash[:notice] = "There are <b>#{@profiles.count}</b> students in this field of study".html_safe
    else
      @profiles = MandersonProfile.published.alphasort
    end
  end


  private

    def registration_params
      params.require(:corporate_partner).permit(:firstname, :lastname, :email, :phone, :company, :position, :status, :degrees, :password, :password_confirmation)
    end

    def concierge_params
      params.require(:concierge).permit(:firstname, :lastname, :email, :phone, :company, :position, :degrees, :date_of_fill_position, :type, :educational_details)
    end
  
    def manderson_profile_params
        params.require(:manderson_profile).permit(:id, :first_name, :middle_initial, :last_name, :nickname, :email, :phone, :hometown, :candidate_type, :grad_class, :ug_school, :ug_degree, :ug_year, :work_experience, :activities_honors, :volunteerism, :internship, :cskills, :manderson_profile_photo, :manderson_profile_cv, :favorite_book, :favorite_quote, :three_word_description, :something_unique,  :status, :registered)
    end

end
