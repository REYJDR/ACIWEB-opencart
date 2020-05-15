<?php

/* localisation/order_status_form.twig */
class __TwigTemplate_dda4ed928a688e44041b95e9d1f05268e002754d84c12bad7b4252cc65a42e7d extends Twig_Template
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
        <button type=\"submit\" form=\"form-order-status\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-order-status\">
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 27
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 30
            echo "                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><img src=\"language/";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\"/></span>
                  </div>
                  <input type=\"text\" name=\"order_status[";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][name]\" value=\"";
            echo (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["order_status"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["order_status"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "name", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\"/>
                </div>";
            // line 36
            if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_name"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 37
                echo "                  <div class=\"invalid-tooltip\">";
                echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_name"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
        // line 47
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "localisation/order_status_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  127 => 40,  118 => 37,  116 => 36,  108 => 34,  99 => 32,  95 => 30,  91 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/order_status_form.twig", "");
    }
}
