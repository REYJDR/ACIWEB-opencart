<?php

/* default/template/checkout/guest.twig */
class __TwigTemplate_062ee33633fb523f15e8a2381ede2a355c3882e31855d30cab97686d4ccf80d9 extends Twig_Template
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
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</label>
            </div>";
            } else {
                // line 14
                echo "            <div class=\"form-check\">
              <label><input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", []);
                echo "\" class=\"form-check-input\"/>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", []);
                echo "</label>
            </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
      <div class=\"form-group required\">
        <label for=\"input-payment-firstname\" class=\"col-form-label\">";
        // line 21
        echo ($context["entry_firstname"] ?? null);
        echo "</label> <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-lastname\" class=\"col-form-label\">";
        // line 24
        echo ($context["entry_lastname"] ?? null);
        echo "</label> <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-email\" class=\"col-form-label\">";
        // line 27
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-payment-email\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-telephone\" class=\"col-form-label\">";
        // line 30
        echo ($context["entry_telephone"] ?? null);
        echo "</label> <input type=\"text\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\"/>
      </div>";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []) == "account")) {
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "select")) {
                    // line 35
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 36
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
                    // line 37
                    echo ($context["text_select"] ?? null);
                    echo "</option>";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 39
                        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []) == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["guest_custom_field"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 40
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</option>";
                        } else {
                            // line 42
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</option>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "              </select>
            </div>";
                }
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "radio")) {
                    // line 49
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 52
                        echo "                  <div class=\"form-check\">";
                        // line 53
                        if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []) == (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 54
                            echo "                      <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                            // line 55
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        } else {
                            // line 57
                            echo "                      <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\"/>";
                            // line 58
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        }
                        // line 60
                        echo "                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "              </div>
            </div>";
                }
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "checkbox")) {
                    // line 66
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        echo "                  <div class=\"form-check\">";
                        // line 70
                        if (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []), (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 71
                            echo "                      <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                            // line 72
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        } else {
                            // line 74
                            echo "                      <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\"/>";
                            // line 75
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        }
                        // line 77
                        echo "                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "              </div>
            </div>";
                }
                // line 82
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "text")) {
                    // line 83
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
            </div>";
                }
                // line 87
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "textarea")) {
                    // line 88
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 89
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
                    if ((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
                    echo "</textarea>
            </div>";
                }
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "file")) {
                    // line 93
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <br/>
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    }
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\"/>
            </div>";
                }
                // line 100
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "date")) {
                    // line 101
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
                // line 111
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "time")) {
                    // line 112
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
                // line 122
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "datetime")) {
                    // line 123
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["guest_custom_field"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
        // line 135
        echo "    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 139
        echo ($context["text_your_address"] ?? null);
        echo "</legend>
      <div class=\"form-group\">
        <label for=\"input-payment-company\" class=\"col-form-label\">";
        // line 141
        echo ($context["entry_company"] ?? null);
        echo "</label> <input type=\"text\" name=\"company\" value=\"";
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-address-1\" class=\"col-form-label\">";
        // line 144
        echo ($context["entry_address_1"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_1\" value=\"";
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\"/>
      </div>
      <div class=\"form-group\">
        <label for=\"input-payment-address-2\" class=\"col-form-label\">";
        // line 147
        echo ($context["entry_address_2"] ?? null);
        echo "</label> <input type=\"text\" name=\"address_2\" value=\"";
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-city\" class=\"col-form-label\">";
        // line 150
        echo ($context["entry_city"] ?? null);
        echo "</label> <input type=\"text\" name=\"city\" value=\"";
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-postcode\" class=\"col-form-label\">";
        // line 153
        echo ($context["entry_postcode"] ?? null);
        echo "</label> <input type=\"text\" name=\"postcode\" value=\"";
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-country\" class=\"col-form-label\">";
        // line 156
        echo ($context["entry_country"] ?? null);
        echo "</label> <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 157
        echo ($context["text_select"] ?? null);
        echo "</option>";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 159
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []) == ($context["country_id"] ?? null))) {
                // line 160
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", []);
                echo "</option>";
            } else {
                // line 162
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
        // line 165
        echo "        </select>
      </div>
      <div class=\"form-group required\">
        <label for=\"input-payment-zone\" class=\"col-form-label\">";
        // line 168
        echo ($context["entry_zone"] ?? null);
        echo "</label> <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\"> </select>
      </div>";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []) == "address")) {
                // line 172
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "select")) {
                    // line 173
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label for=\"input-payment-custom-field";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
\t\t\t\t<select name=\"custom_field[";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 176
                    echo ($context["text_select"] ?? null);
                    echo "</option>";
                    // line 177
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 178
                        if (((($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []) == (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 179
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</option>";
                        } else {
                            // line 181
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</option>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "              </select>
            </div>";
                }
                // line 187
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "radio")) {
                    // line 188
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 192
                        echo "                  <div class=\"form-check\">";
                        // line 193
                        if (((($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []) == (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["guest_custom_field"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 194
                            echo "                      <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                            // line 195
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        } else {
                            // line 197
                            echo "                      <label><input type=\"radio\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\"/>";
                            // line 198
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        }
                        // line 200
                        echo "                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "              </div>
            </div>";
                }
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "checkbox")) {
                    // line 206
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div id=\"input-payment-custom-field";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    // line 209
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 210
                        echo "                  <div class=\"form-check\">";
                        if (((($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []), (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["guest_custom_field"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)))) {
                            // line 211
                            echo "                      <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\" checked=\"checked\"/>";
                            // line 212
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        } else {
                            // line 214
                            echo "                      <label><input type=\"checkbox\" name=\"custom_field[";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", []);
                            echo "\" class=\"form-check-input\"/>";
                            // line 215
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", []);
                            echo "</label>";
                        }
                        // line 217
                        echo "                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "              </div>
            </div>";
                }
                // line 222
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "text")) {
                    // line 223
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label> <input type=\"text\" name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\"/>
            </div>";
                }
                // line 227
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "textarea")) {
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
                    echo "</label> <textarea name=\"custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e) || $__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e instanceof ArrayAccess ? ($__internal_ea7a33ac6d8a26ad47921e376e6221ddcc8585c46ced0d814217a4f86de9974e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe = ($context["guest_custom_field"] ?? null)) && is_array($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe) || $__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe instanceof ArrayAccess ? ($__internal_9522a6cebeae41b694ef7a2cdef578aec938dae7d5acf43b2efd8c4c9bc5dabe[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
                    echo "</textarea>
            </div>";
                }
                // line 232
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "file")) {
                    // line 233
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\">";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <br/>
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-light\"><i class=\"fas fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf = ($context["guest_custom_field"] ?? null)) && is_array($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf) || $__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf instanceof ArrayAccess ? ($__internal_9e736303ccc6dbec54334717fdf66a3c6c7a4ed563e8a9c6a92ccdbb773e19bf[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40) || $__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40 instanceof ArrayAccess ? ($__internal_8acdbb41833471eddc4b3c5a5c648038762a0ba2347958dbb7f312bec87c3d40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    }
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\"/>
            </div>";
                }
                // line 240
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "date")) {
                    // line 241
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad = ($context["guest_custom_field"] ?? null)) && is_array($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad) || $__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad instanceof ArrayAccess ? ($__internal_0668ed57f15eabeed8d9c4a45059ac93dfae05f7fa406a2dc49ae0ccb4f55bad[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323) || $__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323 instanceof ArrayAccess ? ($__internal_e13139c4be4e2ff1c777544a2594638fcc3ca4c2221fe00c2149da0ddd1cc323[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
                // line 251
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "time")) {
                    // line 252
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c = ($context["guest_custom_field"] ?? null)) && is_array($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c) || $__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c instanceof ArrayAccess ? ($__internal_abb62d7ada56c0cfc1a0dee78771b583349487dffc67903f3895606a65c3577c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3) || $__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3 instanceof ArrayAccess ? ($__internal_c0905adf98cd1533a675c4106b3846093815c41a83169ae22d4b915e0fcb70c3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
                // line 262
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", []) == "datetime")) {
                    // line 263
                    echo "            <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", []);
                    echo "\">
              <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", []);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", []);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", []);
                    echo "]\" value=\"";
                    if ((($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b) || $__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b instanceof ArrayAccess ? ($__internal_ec4b59f7be5e729f308b6e48c4483f79749dedb9a482762b64ba149aecfac14b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null)) {
                        echo (($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f) || $__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f instanceof ArrayAccess ? ($__internal_4abb1b337c0ef25ef376bdea173e8ce13160d926e1bcb921fd263a0c3744dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [])] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", []);
                    }
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
        // line 275
        echo "    </fieldset>";
        // line 276
        echo ($context["captcha"] ?? null);
        echo "</div>
</div>";
        // line 278
        if (($context["shipping_required"] ?? null)) {
            // line 279
            echo "  <div class=\"form-check\">
    <label>";
            // line 281
            if (($context["shipping_address"] ?? null)) {
                // line 282
                echo "        <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\"/>";
            } else {
                // line 284
                echo "        <input type=\"checkbox\" name=\"shipping_address\" value=\"1\"/>";
            }
            // line 286
            echo ($context["entry_shipping"] ?? null);
            echo "
    </label>
  </div>";
        }
        // line 290
        echo "<div class=\"d-inline-block pt-2 pd-2 w-100\">
  <div class=\"float-right\">
    <button type=\"button\" id=\"button-guest\" data-loading-text=\"";
        // line 292
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
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
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
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

// Guest
\$('#button-guest').on('click', function() {
\tchain.attach(function() {
\t\treturn \$.ajax({
\t\t\turl: 'index.php?route=checkout/guest/save',
\t\t\ttype: 'post',
\t\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-guest').button('loading');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-guest').button('reset');

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
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t} else {";
        // line 363
        if (($context["shipping_required"] ?? null)) {
            // line 364
            echo "\t\t\t\t\tvar shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-method .card-body').html(html);

\t\t\t\t\t\t\t\t\t// Add the shipping address
\t\t\t\t\t\t\t\t\tchain.attach(function() {
                    return \$.ajax({
                      url: 'index.php?route=checkout/guest_shipping',
                      dataType: 'html',
                      success: function(html) {
                        \$('#collapse-shipping-address .card-body').html(html);

                        \$('#heading-shipping-address').attr('data-toggle', 'collapse');
                      },
                      error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                      }
                    });
                  });

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').attr('data-toggle', 'collapse');

\t\t\t\t\t\t\t\t\t\$('#heading-shipping-method').trigger('click');

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
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t\t\t\t},
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
            // line 431
            echo "\t\t\t\t\tchain.attach(function() {
\t\t\t\t\t\treturn \$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t\t\t},
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
\t\t\t\t\t});";
        }
        // line 453
        echo "\t\t\t\t}
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
        // line 555
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.time').datetimepicker({
\t'format': 'HH:mm',
\t'locale': '";
        // line 561
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});

\$('.datetime').datetimepicker({
\t'format': 'YYYY-MM-DD HH:mm',
\t'locale': '";
        // line 567
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\tconsole.log('=' + \$('#collapse-payment-address select[name=\\'country_id\\']').val());

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
        // line 592
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 598
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 605
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
        return "default/template/checkout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1353 => 605,  1343 => 598,  1334 => 592,  1306 => 567,  1297 => 561,  1288 => 555,  1184 => 453,  1161 => 431,  1093 => 364,  1091 => 363,  1016 => 292,  1012 => 290,  1006 => 286,  1003 => 284,  1000 => 282,  998 => 281,  995 => 279,  993 => 278,  989 => 276,  987 => 275,  961 => 266,  954 => 264,  947 => 263,  945 => 262,  924 => 255,  917 => 253,  910 => 252,  908 => 251,  887 => 244,  880 => 242,  873 => 241,  871 => 240,  858 => 237,  850 => 236,  845 => 234,  838 => 233,  836 => 232,  815 => 229,  808 => 228,  806 => 227,  785 => 224,  778 => 223,  776 => 222,  772 => 219,  766 => 217,  762 => 215,  754 => 214,  750 => 212,  742 => 211,  739 => 210,  735 => 209,  732 => 208,  728 => 207,  721 => 206,  719 => 205,  715 => 202,  709 => 200,  705 => 198,  697 => 197,  693 => 195,  685 => 194,  683 => 193,  681 => 192,  677 => 191,  674 => 190,  670 => 189,  663 => 188,  661 => 187,  657 => 184,  646 => 181,  639 => 179,  637 => 178,  633 => 177,  630 => 176,  622 => 175,  616 => 174,  609 => 173,  607 => 172,  605 => 171,  601 => 170,  597 => 168,  592 => 165,  581 => 162,  574 => 160,  572 => 159,  568 => 158,  565 => 157,  561 => 156,  551 => 153,  541 => 150,  531 => 147,  521 => 144,  511 => 141,  506 => 139,  500 => 135,  474 => 126,  467 => 124,  460 => 123,  458 => 122,  437 => 115,  430 => 113,  423 => 112,  421 => 111,  400 => 104,  393 => 102,  386 => 101,  384 => 100,  371 => 97,  363 => 96,  358 => 94,  351 => 93,  349 => 92,  328 => 89,  321 => 88,  319 => 87,  298 => 84,  291 => 83,  289 => 82,  285 => 79,  279 => 77,  275 => 75,  267 => 74,  263 => 72,  255 => 71,  253 => 70,  251 => 69,  245 => 68,  241 => 67,  234 => 66,  232 => 65,  228 => 62,  222 => 60,  218 => 58,  210 => 57,  206 => 55,  198 => 54,  196 => 53,  194 => 52,  188 => 51,  184 => 50,  177 => 49,  175 => 48,  171 => 45,  160 => 42,  153 => 40,  151 => 39,  147 => 38,  144 => 37,  132 => 36,  125 => 35,  123 => 34,  121 => 33,  117 => 32,  109 => 30,  99 => 27,  89 => 24,  79 => 21,  75 => 19,  66 => 16,  63 => 15,  60 => 14,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/guest.twig", "");
    }
}
