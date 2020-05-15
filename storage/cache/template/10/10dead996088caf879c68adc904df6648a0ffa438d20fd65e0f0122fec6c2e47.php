<?php

/* localisation/geo_zone_form.twig */
class __TwigTemplate_101e59fe60e0b58ba0aaae7b82444a587ec5278f762b7fabcd061ba336954213 extends Twig_Template
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
        <button type=\"submit\" form=\"form-geo-zone\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-geo-zone\">
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
          <div class=\"form-group row required\">
            <label for=\"input-description\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"description\" value=\"";
        // line 38
        echo ($context["description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\"/>";
        // line 39
        if (($context["error_description"] ?? null)) {
            // line 40
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_description"] ?? null);
            echo "</div>";
        }
        // line 42
        echo "            </div>
          </div>
          <fieldset>
            <legend>";
        // line 45
        echo ($context["text_geo_zone"] ?? null);
        echo "</legend>
            <table id=\"zone-to-geo-zone\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 49
        echo ($context["entry_country"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 50
        echo ($context["entry_zone"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>";
        // line 55
        $context["zone_to_geo_zone_row"] = 0;
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_to_geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_geo_zone"]) {
            // line 57
            echo "                  <tr id=\"zone-to-geo-zone-row";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\">
                    <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 58
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][country_id]\" class=\"form-control\" data-zone-to-geo-zone-row=\"";
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "\" data-zone-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "zone_id", []);
            echo "\" disabled>";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == twig_get_attribute($this->env, $this->source, $context["zone_to_geo_zone"], "country_id", []))) {
                    // line 61
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                    echo "</option>";
                } else {
                    // line 63
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                      </select></td>
                    <td class=\"text-left\"><select name=\"zone_to_geo_zone[";
            // line 67
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "][zone_id]\" class=\"form-control\" disabled></select></td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#zone-to-geo-zone-row";
            // line 68
            echo ($context["zone_to_geo_zone_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>
                  </tr>";
            // line 70
            $context["zone_to_geo_zone_row"] = (($context["zone_to_geo_zone_row"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-right\"><button type=\"button\" id=\"button-geo-zone\" data-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["button_geo_zone_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var zone_to_geo_zone_row =";
        // line 87
        echo ($context["zone_to_geo_zone_row"] ?? null);
        echo ";

\$('#button-geo-zone').on('click', function() {
\thtml = '<tr id=\"zone-to-geo-zone-row' + zone_to_geo_zone_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\" class=\"form-control\" data-zone-to-geo-zone-row=\"' + zone_to_geo_zone_row + '\" disabled>';";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 93
            echo "\thtml += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", []), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]\" class=\"form-control\" disabled><option value=\"0\">";
        // line 96
        echo ($context["text_all_zones"] ?? null);
        echo "</option></select></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#zone-to-geo-zone-row' + zone_to_geo_zone_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 97
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#zone-to-geo-zone tbody').append(html);

\t\$('select[name=\\'zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]\\']').trigger('change');

\tzone_to_geo_zone_row++;
});

var zone = [];

\$('#zone-to-geo-zone').on('change', 'select[name\$=\\'[country_id]\\']', function() {
\tvar element = this;

\t\$(element).prop('disabled', true);

    \$('select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

\tif (!zone[\$(element).val()]) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 118
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + \$(element).val(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('button[form=\\'form-geo-zone\\']').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tzone[\$(element).val()] = json;

\t\t\t\thtml = '<option value=\"0\">";
        // line 129
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';

\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}

\t\t\t\t\$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

\t\t\t\t\$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').prop('disabled', false);

\t\t\t\t\$(element).prop('disabled', false);

\t\t\t\t\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t} else {
\t\thtml = '<option value=\"0\">";
        // line 154
        echo ($context["text_all_zones"] ?? null);
        echo "</option>';

\t\tfor (i = 0; i < zone[\$(element).val()]['zone'].length; i++) {
\t\t\thtml += '<option value=\"' + zone[element.value]['zone'][i]['zone_id'] + '\"';

\t\t\tif (zone[\$(element).val()]['zone'][i]['zone_id'] == \$(element).attr('data-zone-id')) {
\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t}

\t\t\thtml += '>' + zone[\$(element).val()]['zone'][i]['name'] + '</option>';
\t\t}

\t\t\$('#zone-to-geo-zone select[name=\\'zone_to_geo_zone[' + \$(element).attr('data-zone-to-geo-zone-row') + '][zone_id]\\']').html(html);

\t\t\$(element).prop('disabled', false);

\t\t\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:disabled:first').trigger('change');
\t}
});

\$('#zone-to-geo-zone select[name\$=\\'[country_id]\\']:first').trigger('change');
//--></script>";
        // line 176
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/geo_zone_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 176,  324 => 154,  296 => 129,  282 => 118,  258 => 97,  254 => 96,  251 => 95,  241 => 93,  237 => 92,  230 => 87,  216 => 76,  210 => 72,  204 => 70,  198 => 68,  194 => 67,  191 => 66,  180 => 63,  173 => 61,  171 => 60,  167 => 59,  160 => 58,  155 => 57,  151 => 56,  149 => 55,  142 => 50,  138 => 49,  131 => 45,  126 => 42,  121 => 40,  119 => 39,  114 => 38,  109 => 36,  104 => 33,  99 => 31,  97 => 30,  92 => 29,  87 => 27,  82 => 25,  77 => 23,  74 => 22,  67 => 18,  65 => 17,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "localisation/geo_zone_form.twig", "");
    }
}
