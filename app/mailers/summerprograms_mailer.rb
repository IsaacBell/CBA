class SummerprogramsMailer < ApplicationMailer

	default from: 'webmaster@culverhouse.ua.edu'
	
	def contact_notification(sp_contact)
		@sp_contact = sp_contact
		mail(:to => "summerprograms@culverhouse.ua.edu", :subject => "Summer Programs Contact Request")
	end
	
end