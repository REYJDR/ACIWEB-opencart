<?php

/* default/template/checkout/payment_method.twig */
class __TwigTemplate_1ca81c0c464a206bf0a3c18cbcb843f399594fe5fd43a0195fd37503c2afe779 extends Twig_Template
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
        if (($context["error_warning"] ?? null)) {
            // line 2
            echo "  <div class=\"alert alert-warning alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i>";
            echo ($context["error_warning"] ?? null);
            echo "</div>";
        }
        // line 4
        if (($context["payment_methods"] ?? null)) {
            // line 5
            echo "  <p>";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 7
                echo "    <div class=\"form-check\">
      <label>";
                // line 9
                if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", []) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 10
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", []);
                    // line 11
                    echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", []);
                    echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                } else {
                    // line 13
                    echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", []);
                    echo "\" class=\"form-check-input\"/>";
                }
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", []);
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [])) {
                    // line 17
                    echo "          (";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", []);
                    echo ")";
                }
                // line 19
                echo "      </label>
    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        echo "<br/>
<p><strong>";
        // line 24
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 26
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>";
        // line 28
        if (($context["text_agree"] ?? null)) {
            // line 29
            echo "  <div class=\"d-inline-block pt-2 pd-2 w-100\">
    <div class=\"float-right\">";
            // line 30
            echo ($context["text_agree"] ?? null);
            // line 31
            if (($context["agree"] ?? null)) {
                // line 32
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>";
            } else {
                // line 34
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\"/>";
            }
            // line 36
            echo "      &nbsp;
      <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
            // line 37
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</button>
    </div>
  </div>";
        } else {
            // line 41
            echo "  <div class=\"d-inline-block pt-2 pd-2 w-100\">
    <div class=\"float-right\">
      <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
            // line 43
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</button>
    </div>
  </div>";
        }
        // line 47
        echo "<script type=\"text/javascript\"><!--
// Payment Method
\$('#button-payment-method').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_method/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-payment-method').button('loading');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').button('reset');

\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#collapse-payment-method .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/confirm',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-checkout-confirm .card-body').html(html);

\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').trigger('click');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
//--></script>

";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 47,  116 => 43,  112 => 41,  104 => 37,  101 => 36,  98 => 34,  95 => 32,  93 => 31,  91 => 30,  88 => 29,  86 => 28,  82 => 26,  77 => 24,  74 => 23,  66 => 19,  61 => 17,  59 => 16,  57 => 15,  52 => 13,  47 => 11,  45 => 10,  43 => 9,  40 => 7,  36 => 6,  32 => 5,  30 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/payment_method.twig", "");
    }
}
