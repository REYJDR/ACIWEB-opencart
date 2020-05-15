<?php

/* localisation/location_form.twig */
class __TwigTemplate_77f2315a594f84dfd4834dd45fefb1b15da26e8c0f8ce2097e77acdfe16e469e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">
        <button type=\"submit\" form=\"form-location\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 22
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-location\">
          <div class=\"form-group row required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 27
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 29
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>";
        // line 30
        if (($context["error_name"] ?? null)) {
            // line 31
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>";
        }
        // line 33
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_address"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea type=\"text\" name=\"address\" placeholder=\"";
        // line 38
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["address"] ?? null);
        echo "</textarea>";
        // line 39
        if (($context["error_address"] ?? null)) {
            // line 40
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_address"] ?? null);
            echo "</div>";
        }
        // line 42
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"geocode\" value=\"";
        // line 47
        echo ($context["geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
              <small class=\"form-text text-muted\">";
        // line 48
        echo ($context["help_geocode"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row required\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 52
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 54
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>";
        // line 55
        if (($context["error_telephone"] ?? null)) {
            // line 56
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>";
        }
        // line 58
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-fax\" class=\"col-sm-2 col-form-label\">";
        // line 61
        echo ($context["entry_fax"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"fax\" value=\"";
        // line 63
        echo ($context["fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 67
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"card image\">
                <img src=\"";
        // line 70
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                <div class=\"card-body\">
                  <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 72
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
        // line 73
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 79
        echo ($context["entry_open"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"open\" rows=\"5\" placeholder=\"";
        // line 81
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["open"] ?? null);
        echo "</textarea>
              <small class=\"form-text text-muted\">";
        // line 82
        echo ($context["help_open"] ?? null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 86
        echo ($context["entry_comment"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 88
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
              <small class=\"form-text text-muted\">";
        // line 89
        echo ($context["help_comment"] ?? null);
        echo "</small>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/location_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 97,  242 => 89,  236 => 88,  231 => 86,  224 => 82,  218 => 81,  213 => 79,  204 => 73,  200 => 72,  191 => 70,  185 => 67,  176 => 63,  171 => 61,  166 => 58,  161 => 56,  159 => 55,  154 => 54,  149 => 52,  142 => 48,  136 => 47,  131 => 45,  126 => 42,  121 => 40,  119 => 39,  114 => 38,  109 => 36,  104 => 33,  99 => 31,  97 => 30,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/location_form.twig", "");
    }
}
