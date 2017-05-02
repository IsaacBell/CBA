class PagesController < ApplicationController
  #before_filter :authenticate_user!, except: [:show, :show_old, :symposium]
  #before_filter :loadmetadata
  #before_filter :set_pagetitle
  before_action :set_page
  #before_action :set_identifier
  #authorize_actions_for Page
  layout :resolve_layout

  def set_pagetitle
    @pagetitle = 'Page Administration'
  end

  # Filters
  def loadmetadata
    @pagetitle = "Page Administration"
  end

  #Legacy Sites are stored in the public folder
  def symposium
    #@sections = @page.sections.published.sorted
    @legacy_url = "/legacy/basymposium_ua/"
    render "layouts/legacy"
  end

  def cldc
    @legacy_url = "/legacy/cldc/"
    render "layouts/legacy"
  end

  # GET /pages/1
  # GET /pages/1.json
  def full_page
  end

  def nolinks
    #@page = Page.friendly.find(params[:id])
  end

  def ibp

    # if params[:id].present?
    #   @page = Page.friendly.find(params[:id])
    # else
    #   @page = Page.friendly.find("101")
    # end

    if @page.parent.present?
      @parent = @page.parent
    end

    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted

  end

  def alumni
    #@page = Page.friendly.find(params[:id])
    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted
  end


  def students
    # if params[:id].present?
    #   @page = Page.friendly.find(params[:id])
    # else
    #   @page = Page.friendly.find("12")
    # end

    if @page.parent.present?
      @parent = @page.parent
    end

    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted

  end

  def mba
    # if params[:id].present?
    #   @page = Page.friendly.find(params[:id])
    # else
    #   @page = Page.friendly.find("73")
    # end

    # if @page.parent.present?
    #   @parent = @page.parent
    # end

    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted

  end

  def full_page

  #  @page = Page.friendly.find(params[:id])

    if @page.parent.present?
      @parent = @page.parent
    end

    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted
  end

  def audience
  #  @page = Page.friendly.find(params[:id])

    respond_to do |format|
      format.html #audience.html.erb
      format.xml  { render :xml => @page }
    end
  end

  def show
    #@page = Page.published.friendly.find(params[:id])

    if @page.parent.present?
      @parent = @page.parent
    end

    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted
  end

  def show2
    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted
  end

  private

  def resolve_layout
    if @page.layout == "Stacked"
      "stacked"
    elsif @page.layout == "Sticky-Stacked"
      "stickystacked"
    else
      "application"
    end
  end

  # Use callbacks to share common setup or constraints between actions.
  def set_page
    @page = Page.published.friendly.find(params[:id])
    @sections = @page.sections.published.sorted
    @subpages = @page.subpages.published.sorted
  end


  def page_params
    params.fetch(:page, {}).permit(:id, :parent_id, :position, :title, :pagehead, :page_url, :external_url, :short_desc, :desc, :meta_title, :meta_keyword, :meta_description, :status, :department_id, :layout, :_destroy,
                                   sections_attributes: [:id, :page_id, :position, :title, :desc, :status, :_destroy],
                                   calltoactions_attributes: [:id, :priority, :title, :color, :url, :target, :page_id, :_destroy ])
  end

end