<?php

/* default/template/checkout/payment_address.twig */
class __TwigTemplate_1fa54014c2a0f85a40617923ce345c15127067c2704f598fdb0625a45f44aa93 extends Twig_Template
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
        if (($context["addresses"] ?? null)) {
            // line 2
            echo "  <div class=\"form-check\">
    <label><input class=\"form-check-input\" type=\"radio\" name=\"payment_address\" value=\"existing\" checked=\"checked\"/>";
            // line 3
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"payment-existing\">
    <select name=\"address_id\" class=\"form-control\">";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 8
                if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["address"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["address_id"] ?? null) : null) == ($context["address_id"] ?? null))) {
                    // line 9
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", []);
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", []);
                    echo "</option>";
                } else {
                    // line 11
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", []);
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", []);
                    echo ",";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", []);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </select>
  </div>
  <div class=\"form-check\">
    <label><input class=\"form-check-input\" type=\"radio\" name=\"payment_address\" value=\"new\">";
            // line 17
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>";
        }
        // line 20
        echo "<br/>
<div id=\"payment-new\" style=\"display:";
        // line 21
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-firstname\">";
        // line 23
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 25
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-lastname\">";
        // line 29
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-company\">";
        // line 35
        echo ($context["entry_company"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 37
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-address-1\">";
        // line 41
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 43
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-address-2\">";
        // line 47
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 49
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-city\">";
        // line 53
        echo ($context["entry_city"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 55
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-postcode\">";
        // line 59
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 61
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-country\">";
        // line 65
        echo ($context["entry_country"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
        <option value=\"\">";
        // line 68
        echo ($context["text_select"] ?? null);
        echo "</option>";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["country_id"] ?? null))) {
                // line 71
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            } else {
                // line 73
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      </select>
    </div>
  </div>
  <div class=\"form-group row required\">
    <label class=\"col-sm-2 col-form-label\" for=\"input-payment-zone\">";
        // line 80
        echo ($context["entry_zone"] ?? null);
        echo "</label>
    <div class=\"col-sm-10\">
      <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\"> </select>
    </div>
  </div>";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "select")) {
                // line 87
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <select name=\"custom_field[";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "]\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\" class=\"form-control\">
            <option value=\"\">";
                // line 91
                echo ($context["text_select"] ?? null);
                echo "</option>";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 93
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "          </select>
        </div>
      </div>";
            }
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "radio")) {
                // line 100
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <div id=\"input-payment-custom-field";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "              <div class=\"form-check\">
                <label><input type=\"radio\" name=\"custom_field[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                    echo "\"/>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                    echo "</label>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "          </div>
        </div>
      </div>";
            }
            // line 113
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "checkbox")) {
                // line 114
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <div id=\"input-payment-custom-field";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 119
                    echo "              <div class=\"form-check\">
                <label><input type=\"checkbox\" name=\"custom_field[";
                    // line 120
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
                // line 123
                echo "          </div>
        </div>
      </div>";
            }
            // line 127
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "text")) {
                // line 128
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <input type=\"text\" name=\"custom_field[";
                // line 131
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
        </div>
      </div>";
            }
            // line 135
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "textarea")) {
                // line 136
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <textarea name=\"custom_field[";
                // line 139
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
        </div>
      </div>";
            }
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "file")) {
                // line 144
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\">";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <button type=\"button\" id=\"button-payment-custom-field";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i>";
                echo ($context["button_upload"] ?? null);
                echo "</button>
          <input type=\"hidden\" name=\"custom_field[";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "]\" value=\"\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\"/>
        </div>
      </div>";
            }
            // line 152
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "date")) {
                // line 153
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"input-group date\">
            <input type=\"text\" name=\"custom_field[";
                // line 157
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
        </div>
      </div>";
            }
            // line 165
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "time")) {
                // line 166
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"input-group time\">
            <input type=\"text\" name=\"custom_field[";
                // line 170
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
        </div>
      </div>";
            }
            // line 178
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "datetime")) {
                // line 179
                echo "      <div class=\"form-group row";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [])) {
                    echo " required";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                echo "\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-payment-custom-field";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                echo "</label>
        <div class=\"col-sm-10\">
          <div class=\"input-group datetime\">
            <input type=\"text\" name=\"custom_field[";
                // line 183
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
        </div>
      </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "</div>
<div class=\"d-inline-block pt-2 pd-2 w-100\">
  <div class=\"float-right\">
    <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 195
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#payment-existing').hide();
\t\t\$('#payment-new').show();
\t} else {
\t\t\$('#payment-existing').show();
\t\t\$('#payment-new').hide();
\t}
});

// Payment Address
\$('#button-payment-address').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/payment_address/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-payment-address').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-payment-address').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#collapse-payment-address .card-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
\t\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
\t\t\t\t} else {";
        // line 247
        if (($context["shipping_required"] ?? null)) {
            // line 248
            echo "\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address .card-body').html(html);

\t\t\t\t\t\t\t\t\$('#heading-shipping-address').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\$('#heading-shipping-address').trigger('click');

\t\t\t\t\t\t\t\t\$('#heading-shipping-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\$('#heading-payment-method').removeAttr('data-toggle');
\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').removeAttr('data-toggle');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});";
        } else {
            // line 282
            echo "\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-method .card-body').html(html);

\t\t\t\t\t\t\t\t\$('#heading-payment-method').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\$('#heading-payment-method').trigger('click');

\t\t\t\t\t\t\t\t\$('#heading-checkout-confirm').removeAttr('data-toggle');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});";
        }
        // line 314
        echo "\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#collapse-payment-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment-address .form-group').length - 2) {
\t\t\$('#collapse-payment-address .form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-payment-address .form-group').length - 2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-payment-address .form-group').length - 2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-payment-address .form-group').length - 2) {
\t\t\$('#collapse-payment-address .form-group:first').before(this);
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
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

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
        // line 399
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 405
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 411
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
\t\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '<option value=\"\">";
        // line 434
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 440
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 447
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
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  864 => 447,  854 => 440,  845 => 434,  819 => 411,  810 => 405,  801 => 399,  714 => 314,  681 => 282,  646 => 248,  644 => 247,  588 => 195,  583 => 192,  561 => 183,  553 => 180,  544 => 179,  542 => 178,  524 => 170,  516 => 167,  507 => 166,  505 => 165,  487 => 157,  479 => 154,  470 => 153,  468 => 152,  458 => 148,  450 => 147,  445 => 145,  436 => 144,  434 => 143,  420 => 139,  413 => 137,  404 => 136,  402 => 135,  388 => 131,  381 => 129,  372 => 128,  370 => 127,  365 => 123,  351 => 120,  348 => 119,  344 => 118,  341 => 117,  336 => 115,  327 => 114,  325 => 113,  320 => 109,  306 => 106,  303 => 105,  299 => 104,  296 => 103,  291 => 101,  282 => 100,  280 => 99,  275 => 95,  265 => 93,  261 => 92,  258 => 91,  250 => 90,  243 => 88,  234 => 87,  232 => 86,  228 => 85,  221 => 80,  215 => 76,  204 => 73,  197 => 71,  195 => 70,  191 => 69,  188 => 68,  182 => 65,  175 => 61,  170 => 59,  163 => 55,  158 => 53,  151 => 49,  146 => 47,  139 => 43,  134 => 41,  127 => 37,  122 => 35,  115 => 31,  110 => 29,  103 => 25,  98 => 23,  89 => 21,  86 => 20,  81 => 17,  76 => 14,  56 => 11,  40 => 9,  38 => 8,  34 => 7,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/payment_address.twig", "");
    }
}
