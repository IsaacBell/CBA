class SpContact < ActiveRecord::Base
	
	# Declare the e-mail headers. It accepts anything the mail method
	# in ActionMailer accepts.
	def headers
		{
				:subject => "Culverhouse Summer Programs",
				:to => "summerprograms@culverhouse.ua.edu",
				:from => %("#{first_name} #{last_name}" <#{email}>)
		}
	end

end
