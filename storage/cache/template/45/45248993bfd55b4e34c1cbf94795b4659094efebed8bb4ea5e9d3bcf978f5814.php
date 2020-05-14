<?php

/* catalog/product_list.twig */
class __TwigTemplate_202d5e8b9990287526659d88be23a51c4811e03a4b425c7fa7c4358788548e12 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"far fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 25
        if (($context["success"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i>";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i>";
        // line 33
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 39
        echo ($context["entry_model"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_model\" value=\"";
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-price\" class=\"col-form-label\">";
        // line 42
        echo ($context["entry_price"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_price\" value=\"";
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-quantity\" class=\"col-form-label\">";
        // line 45
        echo ($context["entry_quantity"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_quantity\" value=\"";
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>";
        // line 50
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 51
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>";
        } else {
            // line 53
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>";
        }
        // line 55
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 56
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>";
        } else {
            // line 58
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>";
        }
        // line 60
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i>";
        // line 63
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i>";
        // line 70
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 72
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-center\">";
        // line 78
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 79
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 80
        if ((($context["sort"] ?? null) == "p.model")) {
            echo "<a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 81
        if ((($context["sort"] ?? null) == "p.price")) {
            echo "<a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 82
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo "<a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 83
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 87
        if (($context["products"] ?? null)) {
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "                        <tr";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "variant", [])) {
                    echo " class=\"table-warning\"";
                }
                echo ">
                          <td class=\"text-center\">";
                // line 90
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []), ($context["selected"] ?? null))) {
                    // line 91
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []);
                    echo "\" checked=\"checked\"/>";
                } else {
                    // line 93
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []);
                    echo "\"/>";
                }
                // line 94
                echo "</td>
                          <td class=\"text-center\"><img src=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", []);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", []);
                echo "\" class=\"img-thumbnail\"/></td>
                          <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", []);
                echo "
                            <br/>";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["product"], "status", [])) {
                    // line 99
                    echo "                              <small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>";
                } else {
                    // line 101
                    echo "                              <small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>";
                }
                // line 102
                echo "</td>
                          <td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", []);
                echo "</td>
                          <td class=\"text-right\">";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [])) {
                    echo "<span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", []);
                    echo "</span>
                              <br/>
                              <div class=\"text-danger\">";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", []);
                    echo "</div>";
                } else {
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", []);
                }
                // line 110
                echo "</td>
                          <td class=\"text-right\">";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", []) <= 0)) {
                    // line 113
                    echo "                              <span class=\"badge badge-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", []);
                    echo "</span>";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["product"], "quantity", []) <= 5)) {
                    // line 115
                    echo "                              <span class=\"badge badge-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", []);
                    echo "</span>";
                } else {
                    // line 117
                    echo "                              <span class=\"badge badge-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", []);
                    echo "</span>";
                }
                // line 118
                echo "</td>
                          <td class=\"text-right\">";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "variant", [])) {
                    // line 121
                    echo "                              <div class=\"btn-group\">
                                <a href=\"";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", []);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a>
                                <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"><i class=\"fas fa-caret-down\"></i></button>
                                <div class=\"dropdown-menu dropdown-menu-right\"><a href=\"";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "variant", []);
                    echo "\" class=\"dropdown-item\"><i class=\"fas fa-plus\"></i>";
                    echo ($context["text_variant_add"] ?? null);
                    echo "</a></div>
                              </div>";
                } else {
                    // line 127
                    echo "                              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", []);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pencil-alt\"></i></a>";
                }
                // line 129
                echo "                          </td>
                        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 133
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 134
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>";
        }
        // line 137
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 142
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 143
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});

\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 190
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 197
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 217
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script>";
        // line 234
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 234,  519 => 217,  496 => 197,  486 => 190,  436 => 143,  432 => 142,  425 => 137,  420 => 134,  417 => 133,  409 => 129,  402 => 127,  395 => 124,  388 => 122,  385 => 121,  383 => 120,  380 => 118,  375 => 117,  370 => 115,  368 => 114,  364 => 113,  362 => 112,  359 => 110,  356 => 109,  352 => 107,  345 => 105,  341 => 103,  338 => 102,  333 => 101,  328 => 99,  326 => 98,  322 => 96,  316 => 95,  313 => 94,  308 => 93,  303 => 91,  301 => 90,  294 => 89,  290 => 88,  288 => 87,  282 => 83,  264 => 82,  246 => 81,  228 => 80,  210 => 79,  206 => 78,  197 => 72,  192 => 70,  182 => 63,  177 => 60,  172 => 58,  167 => 56,  165 => 55,  160 => 53,  155 => 51,  153 => 50,  149 => 48,  139 => 45,  129 => 42,  119 => 39,  109 => 36,  103 => 33,  98 => 30,  91 => 26,  89 => 25,  82 => 21,  80 => 20,  75 => 16,  65 => 14,  61 => 13,  57 => 11,  48 => 9,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/product_list.twig", "");
    }
}
