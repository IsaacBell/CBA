class ApplicationController < ActionController::Base
  require 'csv'

  protect_from_forgery with: :exception
  include SessionsHelper

  # def current_corporate_partner
  #   @current_corporate_partner ||= CorporatePartner.find(session[:corporate_partner_id]) if session[:current_corporate_partner_id]
  # end
  helper_method :current_corporate_partner

  def authorize_corporate_partner
    redirect_to '/corporate-partners/login' unless current_corporate_partner
  end

  protected

end