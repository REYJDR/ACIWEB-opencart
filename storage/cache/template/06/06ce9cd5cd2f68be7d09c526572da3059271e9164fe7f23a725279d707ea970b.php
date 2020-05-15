<?php

/* default/template/checkout/register.twig */
class __TwigTemplate_a8c967196b8822445f0e93bf0f54bcc73ea7a66f50b6048d312adc5f9636dd35 extends Twig_Template
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
    <fieldset id=\"account\">
      <legend>";
        // line 4
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
      <div class=\"form-group\" style=\"display:";
        // line 5
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block";
        } else {
            echo " none";
        }
        echo ";\">
        <label class=\"col-form-label\">";
        // line 6
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []) == ($context["customer_group_id"] ?? null))) {
                // line 9
                echo "            <div class=\"form-check\">
              <label><input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</label>
            </div>";
            } else {
                // line 13
                echo "            <div class=\"form-check\">
              <label><input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" class=\"form-check-input\"/>";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</label>
            </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
      <div class=\"form-group required\">
        <label for=\"input-payment-firstname\" class=\"col-form-label\">";
        // line 19
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-lastname\" class=\"col-form-label\">";
        // line 22
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-email\" class=\"col-form-label\">";
        // line 25
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-payment-email\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-telephone\" class=\"col-form-label\">";
        // line 28
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\"/>
      </div>";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []) == "account")) {
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "select")) {
                    // line 33
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 35
                    echo ($context["text_select"] ?? null);
                    echo "</option>";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 37
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</option>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "              </select>
            </div>";
                }
                // line 42
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "radio")) {
                    // line 43
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 47
                        echo "                  <div class=\"form-check\">
                    <label><input type=\"radio\" name=\"custom_field[";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\" class=\"form-check-input\"/>";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</label>
                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "              </div>
            </div>";
                }
                // line 54
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "checkbox")) {
                    // line 55
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 59
                        echo "                  <div class=\"form-check\">
                    <label><input type=\"checkbox\" name=\"custom_field[";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\" class=\"form-check-input\"/>";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</label>
                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "              </div>
            </div>";
                }
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "text")) {
                    // line 67
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
            </div>";
                }
                // line 71
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "textarea")) {
                    // line 72
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "</textarea>
            </div>";
                }
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "file")) {
                    // line 77
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <br/>
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\"/>
            </div>";
                }
                // line 84
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "date")) {
                    // line 85
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "time")) {
                    // line 96
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "datetime")) {
                    // line 107
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "    </fieldset>
    <fieldset>
      <legend>";
        // line 121
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
      <div class=\"form-group required\">
        <label for=\"input-payment-password\" class=\"col-form-label\">";
        // line 123
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-payment-password\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-confirm\" class=\"col-form-label\">";
        // line 126
        echo ($context["entry_confirm"] ?? null);
        echo "</label> <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\"/>
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 132
        echo ($context["text_your_address"] ?? null);
        echo "</legend>
      <div class=\"form-group\">
        <label for=\"input-payment-company\" class=\"col-form-label\">";
        // line 134
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-address-1\" class=\"col-form-label\">";
        // line 137
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
      </div>
      <div class=\"form-group\">
        <label for=\"input-payment-address-2\" class=\"col-form-label\">";
        // line 140
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-city\" class=\"col-form-label\">";
        // line 143
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-postcode\" class=\"col-form-label\">";
        // line 146
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-country\" class=\"col-form-label\">";
        // line 149
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 150
        echo ($context["text_select"] ?? null);
        echo "</option>";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 152
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["country_id"] ?? null))) {
                // line 153
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            } else {
                // line 155
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "        </select>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-zone\" class=\"col-form-label\">";
        // line 161
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\"> </select>
      </div>";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []) == "address")) {
                // line 165
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "select")) {
                    // line 166
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <select name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 168
                    echo ($context["text_select"] ?? null);
                    echo "</option>";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 170
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</option>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    echo "              </select>
            </div>";
                }
                // line 175
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "radio")) {
                    // line 176
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 179
                        echo "                  <div class=\"form-check\">
                    <label><input type=\"radio\" name=\"custom_field[";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\" class=\"form-check-input\"/>";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</label>
                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "              </div>
            </div>";
                }
                // line 186
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "checkbox")) {
                    // line 187
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 190
                        echo "                  <div class=\"form-check\">
                    <label><input type=\"checkbox\" name=\"custom_field[";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                        echo "\" class=\"form-check-input\"/>";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                        echo "</label>
                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "              </div>
            </div>";
                }
                // line 198
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "text")) {
                    // line 199
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
            </div>";
                }
                // line 203
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "textarea")) {
                    // line 204
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "</textarea>
            </div>";
                }
                // line 208
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "file")) {
                    // line 209
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <br/>
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\"/>
            </div>";
                }
                // line 216
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "date")) {
                    // line 217
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
                // line 227
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "time")) {
                    // line 228
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
                // line 238
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "datetime")) {
                    // line 239
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></span>
                </div>
              </div>
            </div>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "    </fieldset>";
        // line 252
        echo ($context["captcha"] ?? null);
        echo "
  </div>
</div>
<div class=\"form-check\">
  <label><input type=\"checkbox\" name=\"newsletter\" value=\"1\" class=\"form-check-input\"/>";
        // line 257
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
</div>";
        // line 259
        if (($context["shipping_required"] ?? null)) {
            // line 260
            echo "  <div class=\"form-check\">
    <label><input type=\"checkbox\" name=\"shipping_address\" value=\"1\" class=\"form-check-input\" checked=\"checked\"/>";
            // line 262
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
  </div>";
        }
        // line 265
        if (($context["text_agree"] ?? null)) {
            // line 266
            echo "  <div class=\"d-inline-block pt-2 pd-2 w-100\">
    <div class=\"float-right\">";
            // line 267
            echo ($context["text_agree"] ?? null);
            echo " &nbsp;<input type=\"checkbox\" name=\"agree\" value=\"1\"/>&nbsp;<button type=\"button\" id=\"button-register\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</button></div>
  </div>";
        } else {
            // line 270
            echo "  <div class=\"d-inline-block pt-2 pd-2 w-100\">
    <div class=\"float-right\">
      <button type=\"button\" id=\"button-register\" data-loading-text=\"";
            // line 272
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</button>
    </div>
  </div>";
        }
        // line 276
        echo "<script type=\"text/javascript\"><!--
\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + \$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').val(),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');

// Register
\$('#button-register').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/register/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-register').button('loading');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.is-invalid').removeClass('is-invalid');

\t\t\t\t//element.addClass('is-invalid');

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-register').button('reset');

\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#collapse-payment-address .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t} else {";
        // line 344
        if (($context["shipping_required"] ?? null)) {
            // line 345
            echo "\t\t\t\t\tvar shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-method .card-body').html(html);

\t\t\t\t\t\t\t\t\t// Add the shipping address
\t\t\t\t\t\t\t\t\tchain.attach(function() {
                    return \$.ajax({
                      url: 'index.php?route=checkout/shipping_address',
                      dataType: 'html',
                      success: function(html) {
                        \$('#collapse-shipping-address .card-body').html(html);
                      },
                      error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                      }
                    });
                  });

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').trigger('click');

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\t\$('#heading-payment-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address .card-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-address').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-address').trigger('click');

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\t\$('#heading-payment-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t}";
        } else {
            // line 405
            echo "\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-method .card-body').html(html);

\t\t\t\t\t\t\t\t\$('#heading-payment-address').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\$('#heading-payment-address').trigger('click');

\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').removeAttr('data-toggle');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});";
        }
        // line 424
        echo "
\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\$('#button-register').button('reset');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);

\t\t\t\t\t\t\t\t\$('#heading-payment-address').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\$('#heading-payment-address').trigger('click');
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
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 545
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 551
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 557
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + \$('#collapse-payment-address select[name=\\'country_id\\']').val(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '<option value=\"\">";
        // line 580
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 586
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 593
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1242 => 593,  1232 => 586,  1223 => 580,  1197 => 557,  1188 => 551,  1179 => 545,  1056 => 424,  1036 => 405,  975 => 345,  973 => 344,  904 => 276,  896 => 272,  892 => 270,  883 => 267,  880 => 266,  878 => 265,  873 => 262,  870 => 260,  868 => 259,  864 => 257,  857 => 252,  855 => 251,  833 => 242,  826 => 240,  819 => 239,  817 => 238,  800 => 231,  793 => 229,  786 => 228,  784 => 227,  767 => 220,  760 => 218,  753 => 217,  751 => 216,  742 => 213,  734 => 212,  729 => 210,  722 => 209,  720 => 208,  703 => 205,  696 => 204,  694 => 203,  677 => 200,  670 => 199,  668 => 198,  664 => 195,  656 => 192,  649 => 191,  646 => 190,  640 => 189,  636 => 188,  629 => 187,  627 => 186,  623 => 183,  609 => 180,  606 => 179,  600 => 178,  596 => 177,  589 => 176,  587 => 175,  583 => 172,  573 => 170,  569 => 169,  566 => 168,  554 => 167,  547 => 166,  545 => 165,  543 => 164,  539 => 163,  535 => 161,  530 => 158,  519 => 155,  512 => 153,  510 => 152,  506 => 151,  503 => 150,  499 => 149,  489 => 146,  481 => 143,  473 => 140,  465 => 137,  457 => 134,  452 => 132,  441 => 126,  433 => 123,  428 => 121,  424 => 119,  402 => 110,  395 => 108,  388 => 107,  386 => 106,  369 => 99,  362 => 97,  355 => 96,  353 => 95,  336 => 88,  329 => 86,  322 => 85,  320 => 84,  311 => 81,  303 => 80,  298 => 78,  291 => 77,  289 => 76,  272 => 73,  265 => 72,  263 => 71,  246 => 68,  239 => 67,  237 => 66,  233 => 63,  219 => 60,  216 => 59,  212 => 58,  209 => 57,  205 => 56,  198 => 55,  196 => 54,  192 => 51,  178 => 48,  175 => 47,  171 => 46,  168 => 45,  164 => 44,  157 => 43,  155 => 42,  151 => 39,  141 => 37,  137 => 36,  134 => 35,  122 => 34,  115 => 33,  113 => 32,  111 => 31,  107 => 30,  101 => 28,  93 => 25,  85 => 22,  77 => 19,  73 => 17,  62 => 14,  59 => 13,  52 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/register.twig", "");
    }
}
