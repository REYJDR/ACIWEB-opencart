<?php

/* default/template/checkout/checkout.twig */
class __TwigTemplate_ac8b04d3580847c2f6a5dca59b47acfac097eefb43aa312a4802b351fc0e7b8d extends Twig_Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
        echo "  </ul>";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div id=\"accordion\">
        <div class=\"card\">
          <h4 id=\"heading-checkout-option\" data-target=\"#collapse-checkout-option\" class=\"card-header collapsed\">";
        // line 19
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          <div id=\"collapse-checkout-option\" class=\"collapse\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>
        <div class=\"card\">";
        // line 25
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 26
            echo "            <h4 id=\"heading-payment-address\" class=\"card-header collapsed\" data-target=\"#collapse-payment-address\">";
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
            <div id=\"collapse-payment-address\" class=\"collapse\" data-parent=\"#accordion\">
              <div class=\"card-body\"></div>
            </div>";
        } else {
            // line 31
            echo "            <h4 id=\"heading-payment-address\" class=\"card-header collapsed\" data-target=\"#collapse-payment-address\">";
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
            <div id=\"collapse-payment-address\" class=\"collapse\" data-parent=\"#accordion\">
              <div class=\"card-body\"></div>
            </div>";
        }
        // line 36
        echo "        </div>";
        // line 37
        if (($context["shipping_required"] ?? null)) {
            // line 38
            echo "          <div class=\"card\">
            <h4 id=\"heading-shipping-address\" class=\"card-header collapsed\" data-target=\"#collapse-shipping-address\">";
            // line 39
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
            <div id=\"collapse-shipping-address\" class=\"collapse\" data-parent=\"#accordion\">
              <div class=\"card-body\"></div>
            </div>
          </div>
          <div class=\"card\">
            <h4 id=\"heading-shipping-method\" class=\"card-header collapsed\" data-target=\"#collapse-shipping-method\">";
            // line 45
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
            <div id=\"collapse-shipping-method\" class=\"collapse\" data-parent=\"#accordion\">
              <div class=\"card-body\"></div>
            </div>
          </div>";
        }
        // line 51
        echo "        <div class=\"card\">
          <h4 id=\"heading-payment-method\" class=\"card-header collapsed\" data-target=\"#collapse-payment-method\">";
        // line 52
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          <div id=\"collapse-payment-method\" class=\"collapse\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>
        <div class=\"card\">
          <h4 id=\"heading-checkout-confirm\" class=\"card-header collapsed\" data-target=\"#collapse-checkout-confirm\">";
        // line 58
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
          <div id=\"collapse-checkout-confirm\" class=\"collapse\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>
      </div>";
        // line 64
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>";
        // line 66
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#collapse-checkout-option').on('change', 'input[name=\\'account\\']', function() {
\tif (this.value == 'register') {
\t\t\$('#heading-payment-address').html('";
        // line 72
        echo ($context["text_checkout_account"] ?? null);
        echo "');
\t} else {
\t\t\$('#heading-payment-address').html('";
        // line 74
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
\t}
});";
        // line 78
        if ( !($context["logged"] ?? null)) {
            // line 79
            echo "\$(document).ready(function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/login',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-checkout-option .card-body').html(html);

\t\t\t\t\$('#heading-checkout-option').attr('data-toggle', 'collapse');

\t\t\t\t\$('#heading-checkout-option').trigger('click');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});";
        } else {
            // line 98
            echo "\$(document).ready(function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#collapse-payment-address .card-body').html(html);

\t\t\t\t\$('#heading-payment-address').attr('data-toggle', 'collapse');

\t\t\t\t\$('#heading-payment-address').trigger('click');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});";
        }
        // line 117
        echo "//--></script>";
        // line 118
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 118,  203 => 117,  183 => 98,  163 => 79,  161 => 78,  156 => 74,  151 => 72,  142 => 66,  138 => 64,  130 => 58,  121 => 52,  118 => 51,  110 => 45,  101 => 39,  98 => 38,  96 => 37,  94 => 36,  86 => 31,  78 => 26,  76 => 25,  68 => 19,  62 => 16,  58 => 15,  53 => 13,  46 => 9,  44 => 8,  42 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/checkout.twig", "");
    }
}
