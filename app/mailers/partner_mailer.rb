class PartnerMailer < ActionMailer::Base
	default from: "no-reply@culverhouse.ua.edu"
	
	def welcome_email(partner)
		@partner = partner
		@url  = 'https://culverhouse.ua.edu/corporate-partners/login'
		mail(to: @partner.email, subject: 'Welcome to the Culverhouse Corporate Partner Program')
	end

end