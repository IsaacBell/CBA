class Stemapp < ActiveRecord::Base

  def name
    "#{firstname} #{middlename} #{lastname}"
  end

  def type
    if self.applicationtype == 0
      "STEM"
    else
      "CREATE"
    end
  end

  def admission
    if self.admitted == 0
      "Not Accepted"
    else
      "Accepted"
    end
  end

end