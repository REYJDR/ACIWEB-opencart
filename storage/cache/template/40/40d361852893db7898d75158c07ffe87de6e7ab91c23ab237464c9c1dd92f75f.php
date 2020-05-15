<?php

/* setting/setting.twig */
class __TwigTemplate_f8a38e56eb4183eae6f3b3b95199f127bd988753219eef7d558c3583c05da54a extends Twig_Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
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
        if (($context["success"] ?? null)) {
            // line 22
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i>";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 26
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 37
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"form-group row required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 42
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 44
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>";
        // line 45
        if (($context["error_meta_title"] ?? null)) {
            // line 46
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>";
        }
        // line 47
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 62
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 66
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", []) == ($context["config_theme"] ?? null))) {
                // line 67
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", []);
                echo "</option>";
            } else {
                // line 69
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\"/></div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []) == ($context["config_layout_id"] ?? null))) {
                // line 82
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                echo "</option>";
            } else {
                // line 84
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"form-group row required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 93
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 95
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>";
        // line 96
        if (($context["error_name"] ?? null)) {
            // line 97
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_name"] ?? null);
            echo "</div>";
        }
        // line 98
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 101
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 103
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>";
        // line 104
        if (($context["error_owner"] ?? null)) {
            // line 105
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>";
        }
        // line 106
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>";
        // line 112
        if (($context["error_address"] ?? null)) {
            // line 113
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_address"] ?? null);
            echo "</div>";
        }
        // line 114
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 117
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 119
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 120
        echo ($context["help_geocode"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 124
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 126
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>";
        // line 127
        if (($context["error_email"] ?? null)) {
            // line 128
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>";
        }
        // line 129
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 132
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 134
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>";
        // line 135
        if (($context["error_telephone"] ?? null)) {
            // line 136
            echo "                    <div class=\"invalid-tooltip\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>";
        }
        // line 137
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-fax\" class=\"col-sm-2 col-form-label\">";
        // line 140
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 142
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 146
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 149
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 151
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
        // line 152
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 158
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 160
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 161
        echo ($context["help_open"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 165
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 167
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <small class=\"form-text text-muted\">";
        // line 168
        echo ($context["help_comment"] ?? null);
        echo "</small>
                </div>
              </div>";
        // line 171
        if (($context["locations"] ?? null)) {
            // line 172
            echo "                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 173
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 177
                echo "                        <label class=\"form-check\">";
                // line 178
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []), ($context["config_location"] ?? null))) {
                    // line 179
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []);
                    echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", []);
                } else {
                    // line 182
                    echo "                            <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", []);
                    echo "\" class=\"form-check-input\"/>";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", []);
                }
                // line 185
                echo "                        </label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                    </div>
                    <small class=\"form-text text-muted\">";
            // line 188
            echo ($context["help_location"] ?? null);
            echo "</small>
                  </div>
                </div>";
        }
        // line 192
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 199
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["config_country_id"] ?? null))) {
                // line 200
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            } else {
                // line 202
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 215
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 219
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []) == ($context["config_timezone"] ?? null))) {
                // line 220
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", []);
                echo "</option>";
            } else {
                // line 222
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 229
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 233
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", []) == ($context["config_language"] ?? null))) {
                // line 234
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>";
            } else {
                // line 236
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-admin-language\" class=\"col-sm-2 col-form-label\">";
        // line 243
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", []) == ($context["config_admin_language"] ?? null))) {
                // line 248
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>";
            } else {
                // line 250
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 257
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 261
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", []) == ($context["config_currency"] ?? null))) {
                // line 262
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", []);
                echo "</option>";
            } else {
                // line 264
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 268
        echo ($context["help_currency"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 272
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 276
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []) == ($context["config_currency_engine"] ?? null))) {
                // line 277
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", []);
                echo "</option>";
            } else {
                // line 279
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 286
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 289
        if (($context["config_currency_auto"] ?? null)) {
            // line 290
            echo "                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\"/>";
            // line 291
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 293
            echo "                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_currency_auto\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\"/>";
            // line 294
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 296
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 297
        echo ($context["help_currency_auto"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 301
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 305
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []) == ($context["config_length_class_id"] ?? null))) {
                // line 306
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>";
            } else {
                // line 308
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 315
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 319
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []) == ($context["config_weight_class_id"] ?? null))) {
                // line 320
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>";
            } else {
                // line 322
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">

              <fieldset>
                <legend><a href=\"#collapse-product\" data-toggle=\"collapse\">";
        // line 332
        echo ($context["text_product"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-product\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 335
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 338
        if (($context["config_product_count"] ?? null)) {
            // line 339
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"0\"/>";
            // line 340
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 342
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_product_count\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\"/>";
            // line 343
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 345
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 346
        echo ($context["help_product_count"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-admin-limit\" class=\"col-sm-2 col-form-label\">";
        // line 350
        echo ($context["entry_limit_admin"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 352
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\"/>";
        // line 353
        if (($context["error_limit_admin"] ?? null)) {
            // line 354
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>";
        }
        // line 356
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_limit_admin"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-review\" data-toggle=\"collapse\">";
        // line 363
        echo ($context["text_review"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-review\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 366
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 369
        if (($context["config_review_status"] ?? null)) {
            // line 370
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"0\"/>";
            // line 371
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 373
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_status\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\"/>";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 376
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 377
        echo ($context["help_review"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 381
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 384
        if (($context["config_review_guest"] ?? null)) {
            // line 385
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\"/>";
            // line 386
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 388
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_review_guest\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\"/>";
            // line 389
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 391
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 392
        echo ($context["help_review_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-voucher\" data-toggle=\"collapse\">";
        // line 399
        echo ($context["text_voucher"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-voucher\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 402
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 404
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>";
        // line 405
        if (($context["error_voucher_min"] ?? null)) {
            // line 406
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>";
        }
        // line 408
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_voucher_min"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row required\">
                    <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 412
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 414
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>";
        // line 415
        if (($context["error_voucher_max"] ?? null)) {
            // line 416
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>";
        }
        // line 418
        echo "                      <small class=\"form-text text-muted\">";
        echo ($context["help_voucher_max"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-legal\" data-toggle=\"collapse\">";
        // line 425
        echo ($context["text_legal"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-legal\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 428
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-control\">
                        <option value=\"0\">";
        // line 431
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 433
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_cookie_id"] ?? null))) {
                // line 434
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 436
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 440
        echo ($context["help_cookie"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 444
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-control\">
                        <option value=\"0\">";
        // line 447
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 449
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_gdpr_id"] ?? null))) {
                // line 450
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 452
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 456
        echo ($context["help_gdpr"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 460
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 462
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 463
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-tax\" data-toggle=\"collapse\">";
        // line 470
        echo ($context["text_tax"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-tax\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 473
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 476
        if (($context["config_tax"] ?? null)) {
            // line 477
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"0\"/>";
            // line 478
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 480
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_tax\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\"/>";
            // line 481
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 483
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 487
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                        <option value=\"\">";
        // line 490
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 491
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 492
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>";
        } else {
            // line 494
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>";
        }
        // line 496
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 497
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>";
        } else {
            // line 499
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>";
        }
        // line 501
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 502
        echo ($context["help_tax_default"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 506
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                        <option value=\"\">";
        // line 509
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 510
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 511
            echo "                          <option value=\"shipping\" selected=\"selected\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>";
        } else {
            // line 513
            echo "                          <option value=\"shipping\">";
            echo ($context["text_shipping"] ?? null);
            echo "</option>";
        }
        // line 515
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 516
            echo "                          <option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>";
        } else {
            // line 518
            echo "                          <option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>";
        }
        // line 520
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 521
        echo ($context["help_tax_customer"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-account\" data-toggle=\"collapse\">";
        // line 528
        echo ($context["text_account"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-account\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 531
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 534
        if (($context["config_customer_online"] ?? null)) {
            // line 535
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\"/>";
            // line 536
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 538
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_online\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\"/>";
            // line 539
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 541
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 542
        echo ($context["help_customer_online"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 546
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 549
        if (($context["config_customer_activity"] ?? null)) {
            // line 550
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\"/>";
            // line 551
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 553
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_activity\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\"/>";
            // line 554
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 556
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 557
        echo ($context["help_customer_activity"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 561
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 564
        if (($context["config_customer_search"] ?? null)) {
            // line 565
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\"/>";
            // line 566
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 568
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_search\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\"/>";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 571
        echo "                      </div>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 575
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 579
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == ($context["config_customer_group_id"] ?? null))) {
                // line 580
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>";
            } else {
                // line 582
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 586
        echo ($context["help_customer_group"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 590
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 594
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []), ($context["config_customer_group_display"] ?? null))) {
                // line 595
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                // line 596
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
            } else {
                // line 598
                echo "                              <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" class=\"form-check-input\"/>";
                // line 599
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
            }
            // line 600
            echo "</label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 603
        echo ($context["help_customer_group_display"] ?? null);
        echo "</small>";
        // line 604
        if (($context["error_customer_group_display"] ?? null)) {
            // line 605
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>";
        }
        // line 606
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 609
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 612
        if (($context["config_customer_price"] ?? null)) {
            // line 613
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\"/>";
            // line 614
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 616
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_customer_price\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\"/>";
            // line 617
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 619
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 620
        echo ($context["help_customer_price"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 624
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 626
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 627
        echo ($context["help_login_attempts"] ?? null);
        echo "</small>";
        // line 628
        if (($context["error_login_attempts"] ?? null)) {
            // line 629
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>";
        }
        // line 630
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 633
        echo ($context["entry_account"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                        <option value=\"0\">";
        // line 636
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 638
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_account_id"] ?? null))) {
                // line 639
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 641
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 645
        echo ($context["help_account"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-checkout\" data-toggle=\"collapse\">";
        // line 652
        echo ($context["text_checkout"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-checkout\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 655
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 657
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 658
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 662
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 665
        if (($context["config_cart_weight"] ?? null)) {
            // line 666
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\"/>";
            // line 667
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 669
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_cart_weight\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\"/>";
            // line 670
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 672
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 673
        echo ($context["help_cart_weight"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 677
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 680
        if (($context["config_checkout_guest"] ?? null)) {
            // line 681
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\"/>";
            // line 682
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 684
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\"/>";
            // line 685
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 687
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 688
        echo ($context["help_checkout_guest"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 692
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                        <option value=\"0\">";
        // line 695
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 697
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_checkout_id"] ?? null))) {
                // line 698
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 700
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 703
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 704
        echo ($context["help_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 708
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 712
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []) == ($context["config_order_status_id"] ?? null))) {
                // line 713
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            } else {
                // line 715
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 719
        echo ($context["help_order_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-process-status\" class=\"col-sm-2 col-form-label\">";
        // line 723
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 727
            echo "                          <label class=\"form-check\">";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []), ($context["config_processing_status"] ?? null))) {
                // line 728
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                // line 729
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
            } else {
                // line 731
                echo "                              <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" class=\"form-check-input\"/>";
                // line 732
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
            }
            // line 734
            echo "                          </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 737
        echo ($context["help_processing_status"] ?? null);
        echo "</small>";
        // line 738
        if (($context["error_processing_status"] ?? null)) {
            // line 739
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>";
        }
        // line 741
        echo "                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-complete-status\" class=\"col-sm-2 col-form-label\">";
        // line 744
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 748
            echo "                          <label class=\"form-check\">";
            // line 749
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []), ($context["config_complete_status"] ?? null))) {
                // line 750
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                // line 751
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
            } else {
                // line 753
                echo "                              <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" class=\"form-check-input\"/>";
                // line 754
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
            }
            // line 756
            echo "                          </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 759
        echo ($context["help_complete_status"] ?? null);
        echo "</small>";
        // line 760
        if (($context["error_complete_status"] ?? null)) {
            // line 761
            echo "                        <div class=\"invalid-tooltip\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>";
        }
        // line 762
        echo "</div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 765
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 769
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []) == ($context["config_fraud_status_id"] ?? null))) {
                // line 770
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            } else {
                // line 772
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 776
        echo ($context["help_fraud_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 780
        echo ($context["entry_api"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                        <option value=\"0\">";
        // line 783
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 784
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 785
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []) == ($context["config_api_id"] ?? null))) {
                // line 786
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", []);
                echo "</option>";
            } else {
                // line 788
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 791
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 792
        echo ($context["help_api"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-stock\" data-toggle=\"collapse\">";
        // line 799
        echo ($context["text_stock"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-stock\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 802
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 805
        if (($context["config_stock_display"] ?? null)) {
            // line 806
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\"/>";
            // line 807
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 809
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_display\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\"/>";
            // line 810
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 812
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 813
        echo ($context["help_stock_display"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 817
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 820
        if (($context["config_stock_warning"] ?? null)) {
            // line 821
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\"/>";
            // line 822
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 824
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_warning\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\"/>";
            // line 825
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 827
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 828
        echo ($context["help_stock_warning"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 832
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 835
        if (($context["config_stock_checkout"] ?? null)) {
            // line 836
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\"/>";
            // line 837
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 839
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\"/>";
            // line 840
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 842
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 843
        echo ($context["help_stock_checkout"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-affiliate\" data-toggle=\"collapse\">";
        // line 850
        echo ($context["text_affiliate"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-affiliate\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 853
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 857
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 858
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>";
            } else {
                // line 860
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 867
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 870
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 871
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\"/>";
            // line 872
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 874
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\"/>";
            // line 875
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 877
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 878
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 882
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 885
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 886
            echo "                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\"/>";
            // line 887
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 889
            echo "                          <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                          <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\"/>";
            // line 890
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 892
        echo "                      </div>
                      <small class=\"form-text text-muted\">";
        // line 893
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 897
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 899
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
        // line 900
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 904
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                        <option value=\"0\">";
        // line 907
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 908
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 909
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_affiliate_id"] ?? null))) {
                // line 910
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 912
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 915
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 916
        echo ($context["help_affiliate"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-return\" data-toggle=\"collapse\">";
        // line 923
        echo ($context["text_return"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-return\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 926
        echo ($context["entry_return"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                        <option value=\"0\">";
        // line 929
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 930
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 931
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []) == ($context["config_return_id"] ?? null))) {
                // line 932
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            } else {
                // line 934
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 937
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 938
        echo ($context["help_return"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 942
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">";
        // line 945
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 946
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []) == ($context["config_return_status_id"] ?? null))) {
                // line 947
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", []);
                echo "</option>";
            } else {
                // line 949
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 952
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 953
        echo ($context["help_return_status"] ?? null);
        echo "</small>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend><a href=\"#collapse-captcha\" data-toggle=\"collapse\">";
        // line 960
        echo ($context["text_captcha"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-captcha\" class=\"collapse\" data-parent=\"#tab-option\">
                  <div class=\"form-group row\">
                    <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 963
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                        <option value=\"\">";
        // line 966
        echo ($context["text_none"] ?? null);
        echo "</option>";
        // line 967
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 968
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []) == ($context["config_captcha"] ?? null))) {
                // line 969
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", []);
                echo "</option>";
            } else {
                // line 971
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 974
        echo "                      </select>
                      <small class=\"form-text text-muted\">";
        // line 975
        echo ($context["help_captcha"] ?? null);
        echo "</small>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 979
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
        // line 982
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 983
            echo "                          <label class=\"form-check\">";
            // line 984
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []), ($context["config_captcha_page"] ?? null))) {
                // line 985
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                // line 986
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", []);
            } else {
                // line 988
                echo "                              <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", []);
                echo "\" class=\"form-check-input\"/>";
                // line 989
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", []);
            }
            // line 991
            echo "                          </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 993
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>

            </div>

            <div id=\"tab-image\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 1003
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1006
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 1008
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-logo\" data-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
        // line 1009
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 1015
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 1018
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-toggle=\"image\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i>";
        // line 1020
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-icon\" data-thumb=\"#thumb-icon\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i>";
        // line 1021
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                  <small class=\"form-text text-muted\">";
        // line 1024
        echo ($context["help_icon"] ?? null);
        echo "</small>
                </div>
              </div>
            </div>

            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1031
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1033
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">";
        // line 1036
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1037
            echo "                        <option value=\"mail\" selected=\"selected\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>";
        } else {
            // line 1039
            echo "                        <option value=\"mail\">";
            echo ($context["text_mail"] ?? null);
            echo "</option>";
        }
        // line 1041
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1042
            echo "                        <option value=\"smtp\" selected=\"selected\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>";
        } else {
            // line 1044
            echo "                        <option value=\"smtp\">";
            echo ($context["text_smtp"] ?? null);
            echo "</option>";
        }
        // line 1046
        echo "                    </select>
                    <small class=\"form-text text-muted\">";
        // line 1047
        echo ($context["help_mail_engine"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1051
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1053
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1054
        echo ($context["help_mail_parameter"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1058
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1060
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1061
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1065
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1067
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1071
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1073
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1074
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1078
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1080
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1084
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1086
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1091
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1093
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">";
        // line 1096
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1097
            echo "                        <label class=\"form-check\">";
            // line 1098
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []), ($context["config_mail_alert"] ?? null))) {
                // line 1099
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>";
                // line 1100
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", []);
            } else {
                // line 1102
                echo "                            <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", []);
                echo "\" class=\"form-check-input\"/>";
                // line 1103
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", []);
            }
            // line 1105
            echo "                        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1107
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1108
        echo ($context["help_mail_alert"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1112
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1114
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1115
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1122
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1124
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1127
        if (($context["config_maintenance"] ?? null)) {
            // line 1128
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\"/>";
            // line 1129
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1131
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_maintenance\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\"/>";
            // line 1132
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1134
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1135
        echo ($context["help_maintenance"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1139
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1142
        if (($context["config_seo_url"] ?? null)) {
            // line 1143
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\"/>";
            // line 1144
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1146
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_seo_url\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\"/>";
            // line 1147
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1149
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1150
        echo ($context["help_seo_url"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1154
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1156
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1157
        echo ($context["help_robots"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1161
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1163
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1164
        echo ($context["help_compression"] ?? null);
        echo "</small>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1169
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1171
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1174
        if (($context["config_password"] ?? null)) {
            // line 1175
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"0\"/>";
            // line 1176
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1178
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_password\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\"/>";
            // line 1179
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1181
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1182
        echo ($context["help_password"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1186
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1189
        if (($context["config_shared"] ?? null)) {
            // line 1190
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"0\"/>";
            // line 1191
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1193
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_shared\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\"/>";
            // line 1194
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1196
        echo "                    </div>
                    <small class=\"form-text text-muted\">";
        // line 1197
        echo ($context["help_shared"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1201
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1203
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1204
        echo ($context["help_encryption"] ?? null);
        echo "</small>";
        // line 1205
        if (($context["error_encryption"] ?? null)) {
            // line 1206
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>";
        }
        // line 1207
        echo "</div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1211
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1213
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1215
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <small class=\"form-text text-muted\">";
        // line 1216
        echo ($context["help_file_max_size"] ?? null);
        echo "</small>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1220
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1222
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1223
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</small>";
        // line 1224
        if (($context["error_extension"] ?? null)) {
            // line 1225
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_extension"] ?? null);
            echo "</div>";
        }
        // line 1227
        echo "                  </div>
                </div>
                <div class=\"form-group row\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1230
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1232
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <small class=\"form-text text-muted\">";
        // line 1233
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</small>";
        // line 1234
        if (($context["error_mime"] ?? null)) {
            // line 1235
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_mime"] ?? null);
            echo "</div>";
        }
        // line 1237
        echo "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1241
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1243
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1246
        if (($context["config_error_display"] ?? null)) {
            // line 1247
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"0\"/>";
            // line 1248
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1250
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_display\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\"/>";
            // line 1251
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1253
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1257
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 1260
        if (($context["config_error_log"] ?? null)) {
            // line 1261
            echo "                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"0\"/>";
            // line 1262
            echo ($context["text_no"] ?? null);
            echo "</label>";
        } else {
            // line 1264
            echo "                        <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"config_error_log\" value=\"1\"/>";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\"/>";
            // line 1265
            echo ($context["text_no"] ?? null);
            echo "</label>";
        }
        // line 1267
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group row required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1271
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1273
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>";
        // line 1274
        if (($context["error_log"] ?? null)) {
            // line 1275
            echo "                      <div class=\"invalid-tooltip\">";
            echo ($context["error_log"] ?? null);
            echo "</div>";
        }
        // line 1276
        echo "</div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1289
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1311
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1320
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1326
        echo ($context["config_zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1333
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);

\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>";
        // line 1348
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3158 => 1348,  3141 => 1333,  3131 => 1326,  3122 => 1320,  3110 => 1311,  3085 => 1289,  3070 => 1276,  3065 => 1275,  3063 => 1274,  3058 => 1273,  3053 => 1271,  3047 => 1267,  3043 => 1265,  3038 => 1264,  3034 => 1262,  3029 => 1261,  3027 => 1260,  3022 => 1257,  3016 => 1253,  3012 => 1251,  3007 => 1250,  3003 => 1248,  2998 => 1247,  2996 => 1246,  2991 => 1243,  2986 => 1241,  2980 => 1237,  2975 => 1235,  2973 => 1234,  2970 => 1233,  2964 => 1232,  2959 => 1230,  2954 => 1227,  2949 => 1225,  2947 => 1224,  2944 => 1223,  2938 => 1222,  2933 => 1220,  2926 => 1216,  2920 => 1215,  2915 => 1213,  2910 => 1211,  2904 => 1207,  2899 => 1206,  2897 => 1205,  2894 => 1204,  2888 => 1203,  2883 => 1201,  2876 => 1197,  2873 => 1196,  2869 => 1194,  2864 => 1193,  2860 => 1191,  2855 => 1190,  2853 => 1189,  2848 => 1186,  2841 => 1182,  2838 => 1181,  2834 => 1179,  2829 => 1178,  2825 => 1176,  2820 => 1175,  2818 => 1174,  2813 => 1171,  2808 => 1169,  2800 => 1164,  2794 => 1163,  2789 => 1161,  2782 => 1157,  2776 => 1156,  2771 => 1154,  2764 => 1150,  2761 => 1149,  2757 => 1147,  2752 => 1146,  2748 => 1144,  2743 => 1143,  2741 => 1142,  2736 => 1139,  2729 => 1135,  2726 => 1134,  2722 => 1132,  2717 => 1131,  2713 => 1129,  2708 => 1128,  2706 => 1127,  2701 => 1124,  2696 => 1122,  2686 => 1115,  2680 => 1114,  2675 => 1112,  2668 => 1108,  2665 => 1107,  2659 => 1105,  2656 => 1103,  2652 => 1102,  2649 => 1100,  2645 => 1099,  2643 => 1098,  2641 => 1097,  2637 => 1096,  2632 => 1093,  2627 => 1091,  2617 => 1086,  2612 => 1084,  2603 => 1080,  2598 => 1078,  2591 => 1074,  2585 => 1073,  2580 => 1071,  2571 => 1067,  2566 => 1065,  2559 => 1061,  2553 => 1060,  2548 => 1058,  2541 => 1054,  2535 => 1053,  2530 => 1051,  2523 => 1047,  2520 => 1046,  2515 => 1044,  2510 => 1042,  2508 => 1041,  2503 => 1039,  2498 => 1037,  2496 => 1036,  2491 => 1033,  2486 => 1031,  2476 => 1024,  2470 => 1021,  2466 => 1020,  2457 => 1018,  2451 => 1015,  2442 => 1009,  2438 => 1008,  2429 => 1006,  2423 => 1003,  2411 => 993,  2405 => 991,  2402 => 989,  2398 => 988,  2395 => 986,  2391 => 985,  2389 => 984,  2387 => 983,  2383 => 982,  2378 => 979,  2371 => 975,  2368 => 974,  2357 => 971,  2350 => 969,  2348 => 968,  2344 => 967,  2341 => 966,  2335 => 963,  2329 => 960,  2319 => 953,  2316 => 952,  2305 => 949,  2298 => 947,  2296 => 946,  2292 => 945,  2287 => 942,  2280 => 938,  2277 => 937,  2266 => 934,  2259 => 932,  2257 => 931,  2253 => 930,  2250 => 929,  2244 => 926,  2238 => 923,  2228 => 916,  2225 => 915,  2214 => 912,  2207 => 910,  2205 => 909,  2201 => 908,  2198 => 907,  2192 => 904,  2185 => 900,  2179 => 899,  2174 => 897,  2167 => 893,  2164 => 892,  2160 => 890,  2155 => 889,  2151 => 887,  2146 => 886,  2144 => 885,  2139 => 882,  2132 => 878,  2129 => 877,  2125 => 875,  2120 => 874,  2116 => 872,  2111 => 871,  2109 => 870,  2104 => 867,  2098 => 863,  2087 => 860,  2080 => 858,  2078 => 857,  2074 => 856,  2069 => 853,  2063 => 850,  2053 => 843,  2050 => 842,  2046 => 840,  2041 => 839,  2037 => 837,  2032 => 836,  2030 => 835,  2025 => 832,  2018 => 828,  2015 => 827,  2011 => 825,  2006 => 824,  2002 => 822,  1997 => 821,  1995 => 820,  1990 => 817,  1983 => 813,  1980 => 812,  1976 => 810,  1971 => 809,  1967 => 807,  1962 => 806,  1960 => 805,  1955 => 802,  1949 => 799,  1939 => 792,  1936 => 791,  1925 => 788,  1918 => 786,  1916 => 785,  1912 => 784,  1909 => 783,  1903 => 780,  1896 => 776,  1893 => 775,  1882 => 772,  1875 => 770,  1873 => 769,  1869 => 768,  1864 => 765,  1859 => 762,  1854 => 761,  1852 => 760,  1849 => 759,  1846 => 758,  1840 => 756,  1837 => 754,  1833 => 753,  1830 => 751,  1826 => 750,  1824 => 749,  1822 => 748,  1818 => 747,  1813 => 744,  1808 => 741,  1803 => 739,  1801 => 738,  1798 => 737,  1795 => 736,  1789 => 734,  1786 => 732,  1782 => 731,  1779 => 729,  1775 => 728,  1772 => 727,  1768 => 726,  1763 => 723,  1756 => 719,  1753 => 718,  1742 => 715,  1735 => 713,  1733 => 712,  1729 => 711,  1724 => 708,  1717 => 704,  1714 => 703,  1703 => 700,  1696 => 698,  1694 => 697,  1690 => 696,  1687 => 695,  1681 => 692,  1674 => 688,  1671 => 687,  1667 => 685,  1662 => 684,  1658 => 682,  1653 => 681,  1651 => 680,  1646 => 677,  1639 => 673,  1636 => 672,  1632 => 670,  1627 => 669,  1623 => 667,  1618 => 666,  1616 => 665,  1611 => 662,  1604 => 658,  1598 => 657,  1593 => 655,  1587 => 652,  1577 => 645,  1574 => 644,  1563 => 641,  1556 => 639,  1554 => 638,  1550 => 637,  1547 => 636,  1541 => 633,  1536 => 630,  1531 => 629,  1529 => 628,  1526 => 627,  1520 => 626,  1515 => 624,  1508 => 620,  1505 => 619,  1501 => 617,  1496 => 616,  1492 => 614,  1487 => 613,  1485 => 612,  1480 => 609,  1475 => 606,  1470 => 605,  1468 => 604,  1465 => 603,  1462 => 602,  1456 => 600,  1453 => 599,  1449 => 598,  1446 => 596,  1442 => 595,  1439 => 594,  1435 => 593,  1430 => 590,  1423 => 586,  1420 => 585,  1409 => 582,  1402 => 580,  1400 => 579,  1396 => 578,  1391 => 575,  1385 => 571,  1381 => 569,  1376 => 568,  1372 => 566,  1367 => 565,  1365 => 564,  1360 => 561,  1353 => 557,  1350 => 556,  1346 => 554,  1341 => 553,  1337 => 551,  1332 => 550,  1330 => 549,  1325 => 546,  1318 => 542,  1315 => 541,  1311 => 539,  1306 => 538,  1302 => 536,  1297 => 535,  1295 => 534,  1290 => 531,  1284 => 528,  1274 => 521,  1271 => 520,  1266 => 518,  1261 => 516,  1259 => 515,  1254 => 513,  1249 => 511,  1247 => 510,  1244 => 509,  1238 => 506,  1231 => 502,  1228 => 501,  1223 => 499,  1218 => 497,  1216 => 496,  1211 => 494,  1206 => 492,  1204 => 491,  1201 => 490,  1195 => 487,  1189 => 483,  1185 => 481,  1180 => 480,  1176 => 478,  1171 => 477,  1169 => 476,  1164 => 473,  1158 => 470,  1148 => 463,  1142 => 462,  1137 => 460,  1130 => 456,  1127 => 455,  1116 => 452,  1109 => 450,  1107 => 449,  1103 => 448,  1100 => 447,  1094 => 444,  1087 => 440,  1084 => 439,  1073 => 436,  1066 => 434,  1064 => 433,  1060 => 432,  1057 => 431,  1051 => 428,  1045 => 425,  1034 => 418,  1029 => 416,  1027 => 415,  1022 => 414,  1017 => 412,  1009 => 408,  1004 => 406,  1002 => 405,  997 => 404,  992 => 402,  986 => 399,  976 => 392,  973 => 391,  969 => 389,  964 => 388,  960 => 386,  955 => 385,  953 => 384,  948 => 381,  941 => 377,  938 => 376,  934 => 374,  929 => 373,  925 => 371,  920 => 370,  918 => 369,  913 => 366,  907 => 363,  896 => 356,  891 => 354,  889 => 353,  884 => 352,  879 => 350,  872 => 346,  869 => 345,  865 => 343,  860 => 342,  856 => 340,  851 => 339,  849 => 338,  844 => 335,  838 => 332,  829 => 325,  818 => 322,  811 => 320,  809 => 319,  805 => 318,  800 => 315,  794 => 311,  783 => 308,  776 => 306,  774 => 305,  770 => 304,  765 => 301,  758 => 297,  755 => 296,  751 => 294,  746 => 293,  742 => 291,  737 => 290,  735 => 289,  730 => 286,  724 => 282,  713 => 279,  706 => 277,  704 => 276,  700 => 275,  695 => 272,  688 => 268,  685 => 267,  674 => 264,  667 => 262,  665 => 261,  661 => 260,  656 => 257,  650 => 253,  639 => 250,  632 => 248,  630 => 247,  626 => 246,  621 => 243,  615 => 239,  604 => 236,  597 => 234,  595 => 233,  591 => 232,  586 => 229,  580 => 225,  569 => 222,  562 => 220,  560 => 219,  556 => 218,  551 => 215,  542 => 209,  536 => 205,  525 => 202,  518 => 200,  516 => 199,  512 => 198,  507 => 195,  502 => 192,  496 => 188,  493 => 187,  487 => 185,  484 => 183,  480 => 182,  477 => 180,  473 => 179,  471 => 178,  469 => 177,  465 => 176,  460 => 173,  457 => 172,  455 => 171,  450 => 168,  444 => 167,  439 => 165,  432 => 161,  426 => 160,  421 => 158,  412 => 152,  408 => 151,  399 => 149,  393 => 146,  384 => 142,  379 => 140,  374 => 137,  369 => 136,  367 => 135,  362 => 134,  357 => 132,  352 => 129,  347 => 128,  345 => 127,  340 => 126,  335 => 124,  328 => 120,  322 => 119,  317 => 117,  312 => 114,  307 => 113,  305 => 112,  300 => 111,  295 => 109,  290 => 106,  285 => 105,  283 => 104,  278 => 103,  273 => 101,  268 => 98,  263 => 97,  261 => 96,  256 => 95,  251 => 93,  243 => 87,  232 => 84,  225 => 82,  223 => 81,  219 => 80,  214 => 77,  207 => 72,  196 => 69,  189 => 67,  187 => 66,  183 => 65,  178 => 62,  169 => 58,  164 => 56,  155 => 52,  150 => 50,  145 => 47,  140 => 46,  138 => 45,  133 => 44,  128 => 42,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  91 => 29,  86 => 27,  83 => 26,  76 => 22,  74 => 21,  67 => 17,  65 => 16,  60 => 13,  50 => 11,  46 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/setting.twig", "");
    }
}
