class ElevatorDirectoryController < ApplicationController
  layout 'elevator'
  
  def alston
	  #@deanpalan = User.where(:id => 748)
	  #@faculty_profiles = User.active.faculty.alphasort
	  #@allfaculties = @deanpalan + @faculty_profiles
		@departments = Department.dselection.directory.order('priority ASC')
  end

  def bidgood
  end

  def bruno
  end
  
end
