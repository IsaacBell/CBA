class AldagJudgesController < ApplicationController
  layout "businessplan"
  
  def registration
    @page = Page.find_by_id(186)
    @aldag_judge = AldagJudge.new
  end
  
  def create
    @aldag_judge = AldagJudge.new(judge_params)
    respond_to do |format|
      if verify_recaptcha(model: @aldag_judge) && @aldag_judge.save
        AldagMailer.judge_reservation_notification(@aldag_judge).deliver_later
        format.html { redirect_to ('/businessplan'), notice: 'Your registration information was successfully submitted.' }
        format.json { render :show, status: :created, location: @aldag_judge }
      else
        format.html { render :new }
        format.json { render json: @aldag_judge.errors, status: :unprocessable_entity }
      end
    end
  end
  
  private
  
  def judge_params
    params.require(:aldag_judge).permit(:firstname, :lastname, :title, :company, :email, :phone, :am, :pm, :attending_lunch, :attending_reception_and_awards, :preferences => [])
  end

end
