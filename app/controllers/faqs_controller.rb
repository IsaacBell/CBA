class FaqsController < ApplicationController
  before_action :set_faq, only: [:show, :edit, :update, :destroy]
  layout "application"

  # GET /faqs
  # GET /faqs.json
  def index
    @faqs = Faq.all
  end

  # GET /faqs/1
  # GET /faqs/1.json
  def show
    @faq = Faq.all.find_by slug: (params[:id])
  end

  private

    # Use callbacks to share common setup or constraints between actions.
    def set_faq
      @faq = Faq.find_by slug: (params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def faq_params
      params.require(:faq).permit(:department_id, :title, :desc, :status, :priority)
    end
end
