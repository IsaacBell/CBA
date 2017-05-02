class BpCompetitionsController < ApplicationController
  layout "businessplan"

  def competitor_registration
		#Rewrite initial signup process here.
  end

  def judge_registration
	  #Rewrite judge signup process here.
  end

  def sponsor_registration
	  #Rewrite sponsorship signup process here.
  end
  
  def timeline
	  @page = Page.find_by_id(185)
		#i-plan-to-compete
  end
  
  def step_one_thanks
	  @page = Page.find_by_id(185)
		#next-steps
  end
  
  def step_two
    @page = Page.find_by_id(185)
    @summary = BpSummary.new
  end

  def step_two_complete
    @summary = BpSummary.new(summary_params)
    respond_to do |format|
      if verify_recaptcha(model: @summary) && @summary.save
        AldagMailer.bp_summary_notification(@summary).deliver_later
        format.html { redirect_to ('/businessplan/business_summary_sent'), notice: 'Your business summary was successfully submitted.' }
        format.json { render :step_two_thanks, status: :created, location: @summary }
      else
        format.html { render :step_two }
        format.json { render json: @summary.errors, status: :unprocessable_entity }
      end
    end
  end
  
  def step_two_thanks
	  @page = Page.find_by_id(185)
  end

  def step_three
	  @page = Page.find_by_id(185)
	  @preso = BpSummary.new
  end

  def step_three_complete
	  @preso = BpSummary.new(preso_params)
	  respond_to do |format|
		  if verify_recaptcha(model: @preso) && @preso.save
			  AldagMailer.step_three_notification(@preso).deliver_later
			  format.html { redirect_to ('/businessplan/upload_sent'), notice: 'Your presentation was successfully sent.' }
			  format.json { render :step_three_thanks, status: :created, location: @preso }
		  else
			  format.html { render :step_three }
			  format.json { render json: @preso.errors, status: :unprocessable_entity }
		  end
	  end
  end
  
  def step_three_thanks
	  @page = Page.find_by_id(185)
  end

  def step_four
	  @page = Page.find_by_id(185)
	  @preso = BpSummary.new
  end

  def step_four_complete
	  @preso = BpSummary.new(preso_params)
	  respond_to do |format|
		  if verify_recaptcha(model: @preso) && @preso.save
			  AldagMailer.step_four_notification(@preso).deliver_later
			  format.html { redirect_to ('/businessplan/upload_final_sent'), notice: 'Your presentation was successfully sent.' }
			  format.json { render :step_four_thanks, status: :created, location: @preso }
		  else
			  format.html { render :step_four }
			  format.json { render json: @preso.errors, status: :unprocessable_entity }
		  end
	  end
  end

  def step_four_thanks
	  @page = Page.find_by_id(185)
  end

  private

  def summary_params
    params.require(:bp_summary).permit(:pname, :pemail, :pphone, :t1name, :t1phone, :t1email, :t2name, :t2email, :t2phone, :t3name, :t3email, :t3phone, :fname, :fschool, :femail, :fphone, :businessname, :bsummary, :bproblem, :bdesc, :btarget, :bmarketing, :bfinancials, :bhistory, :bwebsite, :bplans, :bgrandprize, :preso)
  end

  def preso_params
	  params.require(:bp_summary).permit(:pname, :pemail, :pphone, :preso, :finalpreso)
  end

end
