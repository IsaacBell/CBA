class HorizontalImagebox < ActiveRecord::Base
	belongs_to :section
	mount_uploader :image, ImageBoxUploader
end
