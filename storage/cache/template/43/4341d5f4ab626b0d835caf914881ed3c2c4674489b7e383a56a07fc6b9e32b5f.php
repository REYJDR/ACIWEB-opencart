<?php

/* default/template/checkout/login.twig */
class __TwigTemplate_8dd2bfb6ae71f34c880d7dca2ec581e9b88473833f10932b8ae4e1ed63178ef9 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 4
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"form-check\">
      <label>";
        // line 7
        if ((($context["account"] ?? null) == "register")) {
            // line 8
            echo "          <input type=\"radio\" name=\"account\" value=\"register\" class=\"form-check-input\" checked=\"checked\"/>";
        } else {
            // line 10
            echo "          <input type=\"radio\" name=\"account\" value=\"register\" class=\"form-check-input\"/>";
        }
        // line 12
        echo ($context["text_register"] ?? null);
        echo "
      </label>
    </div>";
        // line 15
        if (($context["checkout_guest"] ?? null)) {
            // line 16
            echo "      <div class=\"form-check\">
        <label>";
            // line 18
            if ((($context["account"] ?? null) == "guest")) {
                // line 19
                echo "            <input type=\"radio\" name=\"account\" value=\"guest\" class=\"form-check-input\" checked=\"checked\"/>";
            } else {
                // line 21
                echo "            <input type=\"radio\" name=\"account\" value=\"guest\" class=\"form-check-input\"/>";
            }
            // line 23
            echo ($context["text_guest"] ?? null);
            echo "
        </label>
      </div>";
        }
        // line 27
        echo "    <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
    <button type=\"button\" id=\"button-account\" data-loading-text=\"";
        // line 28
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 31
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 32
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
    <div class=\"form-group\">
      <label for=\"input-email\" class=\"col-form-label\">";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
      <label for=\"input-password\" class=\"col-form-label\">";
        // line 37
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/> <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
    <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 38
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-account').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-account').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-account').button('reset');
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\t\$('#collapse-payment-address .card-body').html(html);

\t\t\t\t\$('#heading-payment-address').attr('data-toggle', 'collapse');

\t\t\t\t\$('#heading-payment-address').trigger('click');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

// Login
\$('#button-login').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/login/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-checkout-option :input'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$(':input').removeClass('is-invalid');

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t}

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#collapse-checkout-option .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('#collapse-checkout-option input[name=\\'email\\']').addClass('is-invalid');
\t\t\t\t\t\$('#collapse-checkout-option input[name=\\'password\\']').addClass('is-invalid');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  98 => 37,  90 => 34,  85 => 32,  81 => 31,  73 => 28,  68 => 27,  62 => 23,  59 => 21,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  44 => 12,  41 => 10,  38 => 8,  36 => 7,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/login.twig", "");
    }
}
