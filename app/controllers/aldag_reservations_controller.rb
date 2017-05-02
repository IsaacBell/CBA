class AldagReservationsController < ApplicationController
  layout "businessplan"
  
  def new
    @page = Page.find_by_id(185)
    @aldag_reservation = AldagReservation.new
  end
  
  def create
    @aldag_reservation = AldagReservation.new(reservation_params)
    respond_to do |format|
      if verify_recaptcha(model: @aldag_reservation) && @aldag_reservation.save
        AldagMailer.reservation_notification(@aldag_reservation).deliver_later
        format.html { redirect_to ('/businessplan/next-steps'), notice: 'Your registration information was successfully submitted.' }
        format.json { render :show, status: :created, location: @aldag_reservation }
      else
        format.html { render :new }
        format.json { render json: @aldag_reservation.errors, status: :unprocessable_entity }
      end
    end
  end
  
  private
  
  def reservation_params
    params.require(:aldag_reservation).permit(:firstname, :lastname, :email, :phone, :advisor, :idea)
  end
  
end
