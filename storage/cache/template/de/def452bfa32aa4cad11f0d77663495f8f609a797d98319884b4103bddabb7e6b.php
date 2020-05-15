<?php

/* localisation/zone_form.twig */
class __TwigTemplate_84a96b2eff565ef889ef7febd5855fc8f91e9be3600ede17175ed1a63411d75e extends Twig_Template
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
        <button type=\"submit\" form=\"form-zone\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-zone\">
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
          <div class=\"form-group row\">
            <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 38
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_country"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"country_id\" id=\"input-country\" class=\"form-control\">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["country_id"] ?? null))) {
                // line 47
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            } else {
                // line 49
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 59
        if (($context["status"] ?? null)) {
            // line 60
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 61
            echo ($context["text_disabled"] ?? null);
            echo "</option>";
        } else {
            // line 63
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>";
        }
        // line 66
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
        // line 74
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/zone_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 74,  183 => 66,  179 => 64,  174 => 63,  170 => 61,  165 => 60,  163 => 59,  158 => 56,  152 => 52,  141 => 49,  134 => 47,  132 => 46,  128 => 45,  123 => 42,  114 => 38,  109 => 36,  104 => 33,  99 => 31,  97 => 30,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/zone_form.twig", "");
    }
}
