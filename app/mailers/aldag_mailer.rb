class AldagMailer < ApplicationMailer
	
	default from: 'webmaster@culverhouse.ua.edu'
	
	def reservation_notification(aldag_reservation)
		@aldag_reservation = aldag_reservation
		mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Reservation Processed")
	end
	
	def judge_reservation_notification(aldag_judge)
		@aldag_judge = aldag_judge
		mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Judge Reservation Processed")
	end
	
	def sponsor_notification(aldag_sponsor)
		@aldag_sponsor = aldag_sponsor
		mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Sponsorship Notice Processed")
	end

	def bp_summary_notification(summary)
    @summary = summary
    mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Business Summary Submission")
	end
	
	def step_three_notification(preso)
		@preso = preso
		mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Business Pla Draft Presentation Upload")
	end
	
	def step_four_notification(preso)
		@preso = preso
		mail(:to => "tsyx@culverhouse.ua.edu", :subject => "Aldag Business Plan Final Presentation Upload")
	end
	
end
