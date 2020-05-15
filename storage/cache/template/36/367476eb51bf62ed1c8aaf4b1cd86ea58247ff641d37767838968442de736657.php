<?php

/* sale/recurring_list.twig */
class __TwigTemplate_0d78445d8d34ed3a63574ba4fd23d0929fab21b56afe243e26b23a5ab003ce41 extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-recurring').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
      </div>
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
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i>";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 26
        echo "    <div class=\"row\">
      <div id=\"filter-recurring\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i>";
        // line 29
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label for=\"input-order-recurring-id\" class=\"col-form-label\">";
        // line 32
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        echo ($context["filter_order_recurring_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "\" id=\"input-order-recurring-id\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 35
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-order-id\" class=\"col-form-label\">";
        // line 38
        echo ($context["entry_order_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        echo ($context["filter_order_recurring_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-status\" class=\"col-form-label\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurring_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring_status"]) {
            // line 43
            if ((($context["filter_status"] ?? null) == twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", []))) {
                // line 44
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", []);
                echo "</option>";
            } else {
                // line 46
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-reference\" class=\"col-form-label\">";
        // line 52
        echo ($context["entry_reference"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_reference\" value=\"";
        echo ($context["filter_reference"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reference"] ?? null);
        echo "\" id=\"input-reference\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-date_added\" class=\"col-form-label\">";
        // line 55
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 57
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-date_added\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i>";
        // line 64
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i>";
        // line 71
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-right\">";
        // line 78
        if ((($context["sort"] ?? null) == "or.order_recurring_id")) {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 79
        if ((($context["sort"] ?? null) == "or.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 80
        if ((($context["sort"] ?? null) == "or.reference")) {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 81
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 82
        if ((($context["sort"] ?? null) == "or.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 83
        if ((($context["sort"] ?? null) == "or.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 84
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 89
        if (($context["recurrings"] ?? null)) {
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 91
                echo "                        <tr>
                          <td class=\"text-right\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_recurring_id", []);
                echo "</td>
                          <td class=\"text-right\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_id", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "reference", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "customer", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "status", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "date_added", []);
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "view", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order_recurring"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fas fa-shopping-cart\"></i></a></td>
                        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 102
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"7\">";
            // line 103
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>";
        }
        // line 106
        echo "                  </tbody>

                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 112
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 113
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
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/recurring&user_token=";
        // line 123
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_order_recurring_id = \$('input[name=\\'filter_order_recurring_id\\']').val();

\tif (filter_order_recurring_id) {
\t\turl += '&filter_order_recurring_id=' + encodeURIComponent(filter_order_recurring_id);
\t}

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_reference = \$('input[name=\\'filter_reference\\']').val();

\tif (filter_reference) {
\t\turl += '&filter_reference=' + encodeURIComponent(filter_reference);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != 0) {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added != '') {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});

\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});

\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 172
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 180
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>";
        // line 197
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 197,  456 => 180,  445 => 172,  393 => 123,  380 => 113,  376 => 112,  368 => 106,  363 => 103,  360 => 102,  345 => 98,  341 => 97,  337 => 96,  333 => 95,  329 => 94,  325 => 93,  321 => 92,  318 => 91,  314 => 90,  312 => 89,  306 => 84,  288 => 83,  270 => 82,  252 => 81,  234 => 80,  216 => 79,  198 => 78,  188 => 71,  178 => 64,  166 => 57,  161 => 55,  151 => 52,  146 => 49,  135 => 46,  128 => 44,  126 => 43,  122 => 42,  119 => 41,  109 => 38,  99 => 35,  89 => 32,  83 => 29,  78 => 26,  71 => 22,  69 => 21,  62 => 17,  60 => 16,  55 => 13,  45 => 11,  41 => 10,  37 => 8,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sale/recurring_list.twig", "");
    }
}
