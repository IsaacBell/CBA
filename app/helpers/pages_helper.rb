module PagesHelper

  def rendered_content

  end
  
  def bgstylecheck style
    case
      when style == "crimson-banner"
        "0"
      when style== "grey-banner"
        "0"
      when style == "text-center"
        "0"
      when style == "bg-light"
        "0"
      when style == "bg-dark"
        "0"
      when style == "bg-primary"
        "0"
      when style == "bg-alt"
        "0"
    end
  end

  def nav_link(link_text, link_path)
    class_name = current_page?(link_path) ? 'active' : 'nil'

    content_tag(:li, :class => class_name) do
      link_to link_text, link_path
    end
  end

end
