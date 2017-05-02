class MandersonProfilesController < ApplicationController
  #before_action :authenticate_grad_user!
  #before_action :set_manderson_profile, only: [:show_old, :edit, :update, :destroy]
  #layout "launch"
  
  before_filter :authorize_corporate_partner

  # GET /manderson_profiles
  # GET /manderson_profiles.json
  
  def directory
    if params[:search]
      @profiles = MandersonProfile.search(params[:search]).order("created_at DESC").paginate(:page => params[:page], :per_page => 12)
    elsif params[:candidate_type]
      @profiles = MandersonProfile.where(:candidate_type => params[:candidate_type]).alphasort.paginate(:page => params[:page], :per_page => 12)
      #flash[:notice] = "There are <b>#{@profiles.count}</b> students in this field of study".html_safe
    else
      @profiles = MandersonProfile.published.alphasort.paginate(:page => params[:page], :per_page => 12)
    end
  end
  
  def student_profile
    @student = MandersonProfile.find(params[:id])
  end
  
  def list
    if params[:candidate_type]
      @profiles = MandersonProfile.where(:candidate_type => params[:candidate_type]).alphasort.paginate(:page => params[:page], :per_page => 12)
      #flash[:notice] = "There are <b>#{@profiles.count}</b> students in this field of study".html_safe
    else
      @profiles = MandersonProfile.published.alphasort.paginate(:page => params[:page], :per_page => 12)
    end
    
  end
  
  def create_contact_sheet
  end
  
  private

  

end
