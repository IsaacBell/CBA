class SpApplication < ActiveRecord::Base
	
	validates :firstname, presence: true, if: :step1?
	validates :lastname, presence: true, if: :step1?
	validates :preferredname, presence: true, if: :step1?
	validates :maddress, presence: true, if: :step1?
	validates :city, presence: true, if: :step1?
	validates :state, presence: true, if: :step1?
	validates	:zipcode, presence: true, if: :step1?
	validates	:studentphone, presence: true, if: :step1?
	validates	:studentemail, presence: true, if: :step1?
	validates	:gender, presence: true, if: :step1?
	validates	:ethnicbackground, presence: true, if: :step1?
	validates :tshirtsize, presence: true, if: :step1?
	validates :poloshirt, presence: true, if: :step1?
	validates :schoolname, presence: true, if: :step1?
	validates :currentgpa, presence: true, if: :step1?
	validates :actscore, presence: true, if: :step1?
	validates :satscore, presence: true, if: :step1?
	validates :currentgrade, presence: true, if: :step1?
	validates :pfirstname, presence: true, if: :step1?
	validates :plastname, presence: true, if: :step1?
	validates :pphonenumber, presence: true, if: :step1?
	validates :pemail, presence: true, if: :step1?
	validates :programinterest, presence: true, if: :step1?
	validates :previouslyapplied, presence: true, if: :step1?
	
	validates :whichprogram, presence: true, if: :step2?
	validates :pastattendance, presence: true, if: :step2?
	
	validates :whichprogramattended, presence: true, if: :step3?
	validates :referral, presence: true, if: :step3?
	validates :parentform, presence: true, if: :step3?
	validates :transcript, presence: true, if: :step3?
	validates :recletter, presence: true, if: :step3?
	validates :rfirstname, presence: true, if: :step3?
	validates :rlastname, presence: true, if: :step3?
	validates :rphone, presence: true, if: :step3?
	validates :remail, presence: true, if: :step3?
	validates :essay, presence: true, if: :step3?
	validates :resume, presence: true, if: :step3?
	
	include MultiStepModel
	
	def self.total_steps
		3
	end
end
