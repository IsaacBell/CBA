class BpSummary < ActiveRecord::Base

  scope :timesorted, lambda { order('created_at DESC') }

  # Declare the e-mail headers. It accepts anything the mail method
  # in ActionMailer accepts.
  def headers
    {
        :subject => "Business Plan Summary",
        :to => "tsyx@culverhouse.ua.edu",
        :from => %("#{pname}" <#{pemail}>)
    }
  end

  mount_uploader :preso, BpPresoUploader
  mount_uploader :finalpreso, BpPresoUploader

end