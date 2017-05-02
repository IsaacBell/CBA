class CorporatePartner < ActiveRecord::Base
  # # Include default devise modules. Others available are:
  # # :confirmable, :lockable, :timeoutable and :omniauthable
  # devise :database_authenticatable, :registerable,
  #        :recoverable, :rememberable, :trackable, :validatable
	
	
  before_save { self.email = email.downcase }
  validates :firstname, presence: true
  validates :lastname, presence: true
  VALID_EMAIL_REGEX = /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i
  validates :email, presence: true, format: { with: VALID_EMAIL_REGEX }, uniqueness: { case_sensitive: false }

  has_secure_password

  has_many :list_memberships
  has_many :manderson_profiles, through: :list_memberships
  
  def headers
    {
        :subject => "Corporate Partners",
        :to => "fstewart@culverhouse.ua.edu",
        :from => %("#{firstname} #{lastname}" <#{email}>)
    }
  end

	def fullname
		"#{self.firstname} #{self.lastname}"
	end
  
end
