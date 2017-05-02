class CorporatePartnerMailer < ApplicationMailer
	
	def corporate_partner_notification(corporate_partner)
		@corporate_partner = corporate_partner
		mail(:to => "fstewart@culverhouse.ua.edu,cchamber@culverhouse.ua.edu", :subject => "Culverhouse Corporate Partner Registration")
	end
	
end
