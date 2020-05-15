<?php

/* default/template/product/search.twig */
class __TwigTemplate_a0e2fc95c7de597b3aed9d51d360ffa0b2b5cbf6badd714c789db3db61ff3d3f extends Twig_Template
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
        echo "
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label for=\"input-search\" class=\"col-form-label\">";
        // line 12
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 15
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
        </div>
        <div class=\"col-md-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 19
        echo ($context["text_category"] ?? null);
        echo "</option>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", []) == ($context["category_id"] ?? null))) {
                // line 22
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", []);
                echo "</option>";
            } else {
                // line 24
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", []);
                echo "</option>";
            }
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", []) == ($context["category_id"] ?? null))) {
                    // line 28
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", []);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", []);
                    echo "</option>";
                } else {
                    // line 30
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", []);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", []);
                    echo "</option>";
                }
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", []) == ($context["category_id"] ?? null))) {
                        // line 34
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", []);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", []);
                        echo "</option>";
                    } else {
                        // line 36
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", []);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", []);
                        echo "</option>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          </select>
        </div>
        <div class=\"col-md-3\">
          <div class=\"form-check form-check-inline\">
            <div class=\"form-check-input\">";
        // line 46
        if (($context["sub_category"] ?? null)) {
            // line 47
            echo "                <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\" checked=\"checked\"/>";
        } else {
            // line 49
            echo "                <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"/>";
        }
        // line 51
        echo "            </div>
            <label for=\"input-sub-category\" class=\"form-check-label\">";
        // line 52
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
        </div>
      </div>
      <div class=\"form-check mb-3\">";
        // line 57
        if (($context["description"] ?? null)) {
            // line 58
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\" checked=\"checked\"/>";
        } else {
            // line 60
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"/>";
        }
        // line 62
        echo "        <label for=\"input-description\" class=\"form-check-label\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </div>
      <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 64
        echo ($context["button_search"] ?? null);
        echo "</button>
      <hr/>
      <h2>";
        // line 66
        echo ($context["text_search"] ?? null);
        echo "</h2>";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 71
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fas fa-exchange-alt\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 76
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fas fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fas fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label for=\"input-sort\" class=\"input-group-text\">";
            // line 83
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", []) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 88
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                    echo "</option>";
                } else {
                    // line 90
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label for=\"input-limit\" class=\"input-group-text\">";
            // line 99
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 103
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", []) == ($context["limit"] ?? null))) {
                    // line 104
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", []);
                    echo "</option>";
                } else {
                    // line 106
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", []);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 115
                echo "            <div class=\"product-layout product-list col-lg-3 col-md-3 col-sm-6 col-12\">";
                echo $context["product"];
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 119
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 120
            echo ($context["results"] ?? null);
            echo "</div>
        </div>";
        } else {
            // line 123
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>";
        }
        // line 125
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>";
        // line 127
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>";
        // line 177
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 177,  329 => 127,  325 => 125,  320 => 123,  315 => 120,  311 => 119,  307 => 117,  299 => 115,  295 => 114,  289 => 109,  278 => 106,  271 => 104,  269 => 103,  265 => 102,  260 => 99,  252 => 93,  241 => 90,  234 => 88,  232 => 87,  228 => 86,  223 => 83,  214 => 77,  210 => 76,  200 => 71,  195 => 68,  193 => 67,  190 => 66,  185 => 64,  179 => 62,  176 => 60,  173 => 58,  171 => 57,  164 => 52,  161 => 51,  158 => 49,  155 => 47,  153 => 46,  147 => 41,  128 => 36,  121 => 34,  119 => 33,  115 => 32,  108 => 30,  101 => 28,  99 => 27,  95 => 26,  88 => 24,  81 => 22,  79 => 21,  75 => 20,  72 => 19,  63 => 15,  57 => 12,  53 => 11,  49 => 10,  45 => 8,  42 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/search.twig", "");
    }
}
