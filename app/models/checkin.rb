class Checkin < ActiveRecord::Base
  belongs_to :user

  include MultiStepModel

  def self.total_steps
    3
  end

end
