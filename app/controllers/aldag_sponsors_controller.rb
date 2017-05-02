class AldagSponsorsController < ApplicationController
  layout "businessplan"
  
  def new
    @page = Page.find_by_id(187)
    @aldag_sponsor = AldagSponsor.new
  end
  
  def create
    @aldag_sponsor = AldagSponsor.new(sponsor_params)
    respond_to do |format|
      if verify_recaptcha(model: @aldag_sponsor) && @aldag_sponsor.save
        AldagMailer.sponsor_notification(@aldag_sponsor).deliver_later
        format.html { redirect_to ('/businessplan'), notice: 'Your Information Was Successfully Submitted.' }
        format.json { render :show, status: :created, location: @aldag_sponsor }
      else
        format.html { render :request }
        format.json { render json: @aldag_sponsor.errors, status: :unprocessable_entity }
      end
    end
  end
  
  private
  
  def sponsor_params
    params.require(:aldag_sponsor).permit(:firstname, :lastname, :email, :phone)
  end
end
