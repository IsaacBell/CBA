module SessionsHelper
  
  def log_in(corporate_partner)
    session[:corporate_partner_id] = corporate_partner.id
  end

  def current_corporate_partner
    @current_corporate_partner ||= CorporatePartner.find_by(id: session[:corporate_partner_id])
  end
  
  def logged_in?
    !current_corporate_partner.nil?
  end

  def log_out
    session.delete(:corporate_partner_id)
    @current_corporate_partner = nil
  end

end
