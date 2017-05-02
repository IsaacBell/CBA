json.extract! checkin, :id, :user_id, :firstname, :lastname, :email, :phone, :phone, :created_at, :updated_at
json.url checkin_url(checkin, format: :json)