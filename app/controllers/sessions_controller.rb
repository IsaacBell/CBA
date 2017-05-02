class SessionsController < ApplicationController
  def new
  end

  def create
    corporate_partner = CorporatePartner.find_by(email: params[:session][:email].downcase)
    # If the user exists AND the password entered is correct.
    if corporate_partner && corporate_partner.authenticate(params[:session][:password])
      # Save the user id inside the browser cookie. This is how we keep the user
      # logged in when they navigate around our website.
      #session[:corporate_partner_id] = @corporate_partner.id
      log_in corporate_partner
      redirect_to '/corporate-partners/portal'

    else
      # If user's login doesn't work, send them back to the login form.
      flash[:danger] = 'Login Unsuccessful!'
      redirect_to '/corporate-partners/login'
    end
  end
  

  def destroy
    log_out
    redirect_to '/corporate-partners'
  end

  private

end
