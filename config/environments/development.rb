Rails.application.configure do

  #config.less.paths << File.join(Rails.root, 'app', 'assets', 'less')


  # config.to_prepare do
  #   Devise::SessionsController.layout "dashboard"
  #   Devise::RegistrationsController.layout proc{ |controller| user_signed_in? ? "application"   : "dashboard" }
  #   Devise::ConfirmationsController.layout "dashboard"
  #   Devise::UnlocksController.layout "dashboard"
  #   Devise::PasswordsController.layout "dashboard"
  # end

  # Settings specified here will take precedence over those in config/application.rb.

  # In the development environment your application's code is reloaded on
  # every request. This slows down response time but is perfect for development
  # since you don't have to restart the web server when you make code changes.
  config.cache_classes = false

  # Do not eager load code on boot.
  config.eager_load = true

  # Show full error reports and disable caching.
  config.consider_all_requests_local       = true # Change to False to use dynamic error pages.
  config.action_controller.perform_caching = true

  # Don't care if the mailer can't send.
  config.action_mailer.raise_delivery_errors = false

  # Print deprecation notices to the Rails logger.
  config.active_support.deprecation = :log

  # Raise an error on page load if there are pending migrations.
  config.active_record.migration_error = :page_load

  # Debug mode disables concatenation and preprocessing of assets.
  # This option may cause significant delays in view rendering with a large
  # number of complex assets.
  config.assets.debug = false

  # Asset digests allow you to set far-future HTTP expiration dates on all assets,
  # yet still be able to expire them through the digest params.
  config.assets.digest = true

  # Adds additional error checking when serving assets at runtime.
  # Checks for improperly declared sprockets dependencies.
  # Raises helpful error messages.
  config.assets.raise_runtime_errors = true

  # Raises error for missing translations
  # config.action_view.raise_on_missing_translations = true

  # config.action_mailer.delivery_method = :smtp
  # config.action_mailer.smtp_settings = {
  #   address:              'smtp.gmail.com',
  #   port:                 587,
  #   domain:               'cba.ua.edu',
  #   user_name:            '<username>',
  #   password:             '<password>',
  #   authentication:       'plain',
  #   enable_starttls_auto: true  }

  config.action_mailer.default_url_options = { host: 'localhost', port: 3000 }
	
end
