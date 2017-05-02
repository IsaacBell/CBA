class Category < ActiveRecord::Base
  belongs_to :visitor
  attr_accessor :visitor_id
  # validates :name, presence: true

end
