json.extract! cldc_team, :id, :team_name, :team_captain, :team_captain_email, :team_captain_phone, :second_member_name, :second_member_email, :third_member_name, :third_member_email, :advisor_title, :advisor_name, :advisor_phone, :advisor_email, :advisor_affiliation, :resume1, :resume2, :resume3, :created_at, :updated_at
json.url cldc_team_url(cldc_team, format: :json)