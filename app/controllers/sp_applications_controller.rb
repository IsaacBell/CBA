class SpApplicationsController < ApplicationController
	
  def new
    @wizard = ModelWizard.new(SpApplication, session, params).start
    @spapp = @wizard.object
  end

  def submit
	  @wizard = ModelWizard.new(SpApplication, session, params, application_params).continue
	  @spapp = @wizard.object
	  if @wizard.save
		  redirect_to ('/summer-programs'), notice: "Application Sent!"
	  else
		  render :new
	  end
  end
  
  private
  
  def application_params
	  return params unless params[:sp_application]
	
	  params.require(:sp_application).permit(:current_step,
	                                         :firstname,
	                                         :middleinitial,
	                                         :lastname,
	                                         :preferredname,
	                                         :maddress,
	                                         :city,
	                                         :state,
	                                         :zipcode,
	                                         :studentphone,
	                                         :studentemail,
	                                         :gender,
	                                         :ethnicbackground,
	                                         :tshirtsize,
	                                         :poloshirt,
	                                         :schoolname,
	                                         :currentgpa,
	                                         :actscore,
	                                         :satscore,
	                                         :currentgrade,
	                                         :pfirstname,
	                                         :plastname,
	                                         :pphonenumber,
	                                         :pemail,
	                                         :programinterest,
	                                         :previouslyapplied,
	                                         :whichprogram,
	                                         :pastattendance,
	                                         :whichprogram,
	                                         :pastattendance,
	                                         :whichprogramattended,
	                                         :referral,
	                                         :parentform,
	                                         :transcript,
	                                         :recletter,
	                                         :rfirstname,
	                                         :rlastname,
	                                         :rphone,
	                                         :remail,
	                                         :essay,
	                                         :resume
	  )
  end
  
end
