class Visitor < ActiveRecord::Base
	belongs_to :user
	has_many :visit_reasons
	accepts_nested_attributes_for :visit_reasons
	
	validates :firstname, presence: true
	validates :lastname, presence: true
	validates :email, presence: true
	
	include MultiStepModel
	
	def self.total_steps
		3
	end
	
end