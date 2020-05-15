<?php

/* sale/order_list.twig */
class __TwigTemplate_522995f6f31b05200af43ed76c23928d1e282249b85d75cd61e53493024e02ed extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-order').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fas fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-truck\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fas fa-print\"></i></button>
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a></div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i>";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-lg-3 col-md-12 order-lg-9 d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i>";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label for=\"input-order-id\" class=\"col-form-label\">";
        // line 35
        echo ($context["entry_order_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_order_id\" value=\"";
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\">";
        // line 38
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-order-status\" class=\"col-form-label\">";
        // line 41
        echo ($context["entry_order_status"] ?? null);
        echo "</label> <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                <option value=\"\"></option>";
        // line 43
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 44
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>";
        } else {
            // line 46
            echo "                  <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>";
        }
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []) == ($context["filter_order_status_id"] ?? null))) {
                // line 50
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            } else {
                // line 52
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label for=\"input-total\" class=\"col-form-label\">";
        // line 58
        echo ($context["entry_total"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_total\" value=\"";
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-added\" class=\"col-form-label\">";
        // line 61
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 63
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" id=\"input-date-added\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"input-date-modified\" class=\"col-form-label\">";
        // line 70
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 72
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" id=\"input-date-modified\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                </div>
              </div>
            </div>
            <div class=\"text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i>";
        // line 79
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i>";
        // line 86
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-right\">";
        // line 94
        if ((($context["sort"] ?? null) == "o.order_id")) {
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
        // line 95
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
        // line 96
        if ((($context["sort"] ?? null) == "order_status")) {
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
                      <td class=\"text-right\">";
        // line 97
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 98
        if ((($context["sort"] ?? null) == "o.date_added")) {
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
                      <td class=\"text-left\">";
        // line 99
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 100
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 104
        if (($context["orders"] ?? null)) {
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 106
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 107
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", []), ($context["selected"] ?? null))) {
                    // line 108
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", []);
                    echo "\" checked=\"checked\"/>";
                } else {
                    // line 110
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", []);
                    echo "\"/>";
                }
                // line 112
                echo "                            <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", []);
                echo "\"/></td>
                          <td class=\"text-right\">";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", []);
                echo "</td>
                          <td class=\"text-right\">";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", []);
                echo "</td>
                          <td class=\"text-right\">
                            <div class=\"btn-group\">
                              <a href=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-eye\"></i></a>
                              <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><i class=\"fas fa-caret-down\"></i></button>
                              <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", []);
                echo "\" class=\"dropdown-item\"><i class=\"fas fa-pencil-alt\"></i>";
                echo ($context["button_edit"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", []);
                echo "\" class=\"dropdown-item delete\"><i class=\"fas fa-trash-alt\"></i>";
                echo ($context["button_delete"] ?? null);
                echo "</a>
                              </div>
                            </div>
                          </td>
                        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 131
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 132
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>";
        }
        // line 135
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 140
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 141
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
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 189
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 196
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
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order a.delete').on('click', function(e) {
\te.preventDefault();

\tvar element = this;

\tif (confirm('";
        // line 246
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 248
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 264
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 277
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>";
        // line 281
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 281,  605 => 277,  589 => 264,  566 => 248,  561 => 246,  508 => 196,  498 => 189,  447 => 141,  443 => 140,  436 => 135,  431 => 132,  428 => 131,  410 => 124,  402 => 121,  396 => 118,  392 => 117,  388 => 116,  384 => 115,  380 => 114,  376 => 113,  371 => 112,  366 => 110,  361 => 108,  359 => 107,  356 => 106,  352 => 105,  350 => 104,  344 => 100,  326 => 99,  308 => 98,  290 => 97,  272 => 96,  254 => 95,  236 => 94,  225 => 86,  215 => 79,  203 => 72,  198 => 70,  186 => 63,  181 => 61,  171 => 58,  166 => 55,  155 => 52,  148 => 50,  146 => 49,  142 => 48,  137 => 46,  132 => 44,  130 => 43,  126 => 41,  116 => 38,  106 => 35,  100 => 32,  95 => 29,  88 => 25,  86 => 24,  79 => 20,  77 => 19,  72 => 15,  62 => 13,  58 => 12,  54 => 10,  48 => 9,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sale/order_list.twig", "");
    }
}
