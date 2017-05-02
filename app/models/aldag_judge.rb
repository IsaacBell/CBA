class AldagJudge < ActiveRecord::Base
	# Declare the e-mail headers. It accepts anything the mail method
	# in ActionMailer accepts.
	def headers
		{
				:subject => "Aldag Judge Reservation",
				:to => "tsyx@culverhouse.ua.edu",
				:from => %("#{firstname} #{lastname}" <#{email}>)
		}
	end
end
