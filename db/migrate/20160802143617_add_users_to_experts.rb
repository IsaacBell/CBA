class AddUsersToExperts < ActiveRecord::Migration
  def change
    add_reference :experts, :user, index: true
  end
end
