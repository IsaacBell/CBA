class CreateCheckins < ActiveRecord::Migration
  def change
    create_table :checkins do |t|
      t.references :user, index: true, foreign_key: true
      t.string :firstname
      t.string :lastname
      t.string :email
      t.string :phone
      t.string :phone

      t.timestamps null: false
    end
  end
end
