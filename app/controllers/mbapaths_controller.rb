class MbapathsController < ApplicationController
  
  def stemapp
    @stemapp = Stemapp.new
    @reference = 'STEM'
  end

  def createapp
    @stemapp = Stemapp.new
    @reference = 'CREATE'
  end

  def createstemapp
    @stemapp = Stemapp.new(stemapp_params)
    #application = send_data @stemapp.to_csv
    respond_to do |format|
      if verify_recaptcha(model: @stemapp) && @stemapp.save
        StemAppMailer.stemapp_notification(@stemapp).deliver_later
        format.html { render :thanks, notice: 'Your application was successfully sent.' }
        format.json { render :thanks, status: :created, location: @stemapp }
        #format.csv { send_data @stemapp.to_csv, filename: "application-#{Date.today}.csv" }
        
      else
        format.html { render :stemapp }
        format.json { render json: @stemapp.errors, status: :unprocessable_entity }
      end
    end
  end

  # def createcreateapp
  #   @stemapp = Stemapp.new(stemapp_params)
  #   respond_to do |format|
  #     if verify_recaptcha(model: @stemapp) && @stemapp.save
  #       AppMailer.appnotification(@stemapp).deliver_later
  #       format.html { redirect_to ('/stemapp/thanks'), notice: 'Your application was successfully sent.' }
  #       format.json { render :thanks, status: :created, location: @stemapp }
  #     else
  #       format.html { render :createapp }
  #       format.json { render json: @stemapp.errors, status: :unprocessable_entity }
  #     end
  #   end
  # end

  def thanks
  end
  
  private

  def stemapp_params
    params.require(:stemapp).permit(:applicationtype, :firstname, :middlename, :lastname, :admitted, :cwid, :majors, :uaemail, :otheremail, :essay)
  end
  
end
