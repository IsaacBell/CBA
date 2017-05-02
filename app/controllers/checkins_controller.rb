class CheckinsController < ApplicationController
  layout "checkin"
  
  def manderson
    @wizard = ModelWizard.new(Visitor, session, params).start
    @visitor = @wizard.object
  end

  def create
    @wizard = ModelWizard.new(Visitor, session, params, visitor_params).continue
    @product = @wizard.object
    if @wizard.save
      redirect_to @visitor, notice: "Visit recorded!"
    else
      render :new
    end
  end

  def edit
    @wizard = ModelWizard.new(Visitor, session, params).start
  end

  def update
    @wizard = ModelWizard.new(@visitor, session, params, visitor_params).continue
    if @wizard.save
      redirect_to @visitor, notice: 'Visit details updated.'
    else
      render :edit
    end
  end

  def verify
  end

  def thanks
  end
  
  private

  def load_visitor
    @visitor = Visitor.find_by(id: params[:id])
  end

  def visitor_params
    return params unless params[:visitor]
  
    params.require(:visitor).permit(:current_step,
                                    :firstname,
                                    :lastname,
                                    :email,
                                    :"available_at(1i)",
                                    :"available_at(2i)",
                                    :"available_at(3i)",
                                    :"available_at(4i)",
                                    :"available_at(5i)",
                                    :visit_reasons_attributes => [:title, :description]
    )
  end
  
end
