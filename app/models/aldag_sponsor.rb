class AldagSponsor < ActiveRecord::Base
	
	
	# Declare the e-mail headers. It accepts anything the mail method
	# in ActionMailer accepts.
	def headers
		{
				:subject => "Aldag Sponsorship Opportunity",
				:to => "tsyx@culverhouse.ua.edu",
				:from => %("#{firstname} #{lastname}" <#{email}>)
		}
	end
end