class ApplicationMailer < ActionMailer::Base

  require "csv"

  default from: "no-reply@culverhouse.ua.edu"
  layout 'mailer'
end
