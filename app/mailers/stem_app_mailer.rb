class StemAppMailer < ApplicationMailer
	
	def stemapp_notification(stemapp)
		@stemapp = stemapp
		
		attachments["applicant_#{Date.today}.csv"] = {  :content_type => "text/csv",
		                                                :content =>
				                                                CSV.generate do |csv|
					                                                csv << ["Date", "First Name", "Middle Name", "Last Name", "Admitted", "CWID", "Major", "UA Email", "Other Email", "Essay"]
					                                                csv << [@stemapp.created_at, @stemapp.firstname, @stemapp.middlename, @stemapp.lastname, @stemapp.admitted, @stemapp.cwid, @stemapp.majors, @stemapp.uaemail, @stemapp.otheremail, @stemapp.essay]
																												end
								                                    }
		mail(:to => "rmorgan@culverhouse.ua.edu", :subject => "New STEM / CRATE Path to the MBA Application")

	end
	
end
