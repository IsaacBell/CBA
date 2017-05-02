class SummerProgramsController < ApplicationController
  def new
    @page = Page.find_by_id(191)
    @sp_contact = SpContact.new
  end

  def create
    @sp_contact = SpContact.new(sp_contact_params)
    respond_to do |format|
      if verify_recaptcha(model: @sp_contact) && @sp_contact.save
        SummerprogramsMailer.contact_notification(@sp_contact).deliver_later
        format.html { redirect_to ('/summer-programs'), notice: 'Your information has been sent.' }
        format.json { render :show, status: :created, location: @sp_contact }
      else
        format.html { render :new }
        format.json { render json: @sp_contact.errors, status: :unprocessable_entity }
      end
    end
  end
  
  private

  def sp_contact_params
    params.require(:sp_contact).permit(:first_name, :last_name, :email, :subject, :message)
  end
  
end
