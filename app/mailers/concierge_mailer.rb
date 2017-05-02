class ConciergeMailer < ApplicationMailer
	
	def concierge_notification(corporate_contact)
		@corporate_contact = corporate_contact
		mail(:to => "fstewart@culverhouse.ua.edu", :subject => "Culverhouse Concierge Request")
	end
	
end
