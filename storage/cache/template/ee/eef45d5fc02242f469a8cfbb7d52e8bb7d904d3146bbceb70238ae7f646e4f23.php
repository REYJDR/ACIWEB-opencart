<?php

/* user/api_form.twig */
class __TwigTemplate_33b3c176db531272632cd15a04c56e20923eaae29f4425acfbe798cecc7d13fa extends Twig_Template
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
        <button type=\"submit\" form=\"form-api\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 22
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 24
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-api\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_ip"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-session\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_session"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group row required\">
                <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 33
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 35
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>";
        // line 36
        if (($context["error_username"] ?? null)) {
            // line 37
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_username"] ?? null);
            echo "</div>";
        }
        // line 38
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_key"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 43
        echo ($context["entry_key"] ?? null);
        echo "\" rows=\"5\" id=\"input-key\" class=\"form-control\">";
        echo ($context["key"] ?? null);
        echo "</textarea>
                  <br/>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fas fa-sync\"></i>";
        // line 45
        echo ($context["button_generate"] ?? null);
        echo "</button>";
        // line 46
        if (($context["error_key"] ?? null)) {
            // line 47
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_key"] ?? null);
            echo "</div>";
        }
        // line 48
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 54
        if (($context["status"] ?? null)) {
            // line 55
            echo "                      <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      <option value=\"1\" selected=\"selected\">";
            // line 56
            echo ($context["text_enabled"] ?? null);
            echo "</option>";
        } else {
            // line 58
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      <option value=\"1\">";
            // line 59
            echo ($context["text_enabled"] ?? null);
            echo "</option>";
        }
        // line 61
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i>";
        // line 66
        echo ($context["text_ip"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 71
        echo ($context["entry_ip"] ?? null);
        echo "</td>
                      <td class=\"text-right\"></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 76
        $context["ip_row"] = 0;
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["api_ips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 78
            echo "                      <tr id=\"ip-row";
            echo ($context["ip_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 79
            echo $context["api_ip"];
            echo "\" placeholder=\"";
            echo ($context["entry_ip"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#ip-row";
            // line 80
            echo ($context["ip_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 82
            $context["ip_row"] = (($context["ip_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_ip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-right\"><button type=\"button\" id=\"button-ip\" data-toggle=\"tooltip\" title=\"";
        // line 88
        echo ($context["button_ip_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-session\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"session\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 99
        echo ($context["column_token"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 100
        echo ($context["column_ip"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 101
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 102
        echo ($context["column_date_modified"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 103
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 107
        if (($context["api_sessions"] ?? null)) {
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["api_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api_session"]) {
                // line 109
                echo "                        <tr>
                          <td class=\"text-left\">";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "session_id", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "ip", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_added", []);
                echo "</td>
                          <td class=\"text-left\">";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_modified", []);
                echo "</td>
                          <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "api_session_id", []);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 118
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 119
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>";
        }
        // line 122
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
\trand = '';

\tstring = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

\tfor (i = 0; i < 256; i++) {
\t\trand += string[Math.floor(Math.random() * (string.length - 1))];
\t}

\t\$('#input-key').val(rand);
});
//--></script>
<script type=\"text/javascript\"><!--
var ip_row =";
        // line 146
        echo ($context["ip_row"] ?? null);
        echo ";

\$('#button-ip').on('click', function() {
\thtml = '<tr id=\"ip-row' + ip_row + '\">';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 150
        echo ($context["entry_ip"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#ip-row' + ip_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 151
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#ip tbody').append(html);

\tip_row++;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#session button').on('click', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=user/api/deletesession&user_token=";
        // line 166
        echo ($context["user_token"] ?? null);
        echo "&api_session_id=' + \$(element).val(),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parent().parent().remove();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>";
        // line 194
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "user/api_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 194,  369 => 166,  351 => 151,  347 => 150,  340 => 146,  314 => 122,  309 => 119,  306 => 118,  295 => 114,  291 => 113,  287 => 112,  283 => 111,  279 => 110,  276 => 109,  272 => 108,  270 => 107,  264 => 103,  260 => 102,  256 => 101,  252 => 100,  248 => 99,  234 => 88,  228 => 84,  222 => 82,  216 => 80,  210 => 79,  205 => 78,  201 => 77,  199 => 76,  192 => 71,  184 => 66,  177 => 61,  173 => 59,  168 => 58,  164 => 56,  159 => 55,  157 => 54,  152 => 51,  147 => 48,  142 => 47,  140 => 46,  137 => 45,  130 => 43,  125 => 41,  120 => 38,  115 => 37,  113 => 36,  108 => 35,  103 => 33,  95 => 28,  91 => 27,  87 => 26,  82 => 24,  77 => 22,  74 => 21,  67 => 17,  65 => 16,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/api_form.twig", "");
    }
}
