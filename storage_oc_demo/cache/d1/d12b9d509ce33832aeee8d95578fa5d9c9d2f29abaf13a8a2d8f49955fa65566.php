<?php

/* catalog/product_form.twig */
class __TwigTemplate_77503c9eab08a91750354078c93437a654ad29ead399ad044ea3a0caa0e4ea0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                  <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/>";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>";
            // line 54
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 55
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 56
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 59
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 65
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 67
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>";
            // line 68
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 69
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
            // line 70
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 73
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 87
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 95
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 97
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\"/>";
        // line 98
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 99
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>";
        }
        // line 100
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 103
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 105
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 111
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 117
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 123
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 127
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 129
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 135
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 139
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 141
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 145
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 147
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 151
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 154
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 158
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 159
                echo "

                        <option value=\"";
                // line 161
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>";
            } else {
                // line 165
                echo "

                        <option value=\"";
                // line 167
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 178
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 180
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 184
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 186
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 190
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">";
        // line 195
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 196
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 198
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 199
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>";
        } else {
            // line 203
            echo "

                      <option value=\"1\">";
            // line 205
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 206
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>";
        }
        // line 210
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 216
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 222
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 223
                echo "

                        <option value=\"";
                // line 225
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>";
            } else {
                // line 229
                echo "

                        <option value=\"";
                // line 231
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 242
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 244
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 245
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>";
            // line 246
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 248
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>";
            // line 249
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 250
        echo " </label> <label class=\"radio-inline\">";
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 251
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>";
            // line 252
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 254
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>";
            // line 255
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 256
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 260
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 263
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 269
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 273
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 276
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 279
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 285
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 291
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 292
                echo "

                        <option value=\"";
                // line 294
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            } else {
                // line 298
                echo "

                        <option value=\"";
                // line 300
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 311
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 313
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 317
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 323
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 324
                echo "

                        <option value=\"";
                // line 326
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            } else {
                // line 330
                echo "

                        <option value=\"";
                // line 332
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 343
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">";
        // line 348
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 349
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 351
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 352
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        } else {
            // line 356
            echo "

                      <option value=\"1\">";
            // line 358
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 359
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>";
        }
        // line 363
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 369
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 371
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 377
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 379
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 383
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 385
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 387
            echo "                      <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 388
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"/>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 394
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 396
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 398
            echo "                      <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 399
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"/>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 405
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 408
            echo "                      <div class=\"checkbox\">
                        <label>";
            // line 409
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 410
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\"/>";
                // line 411
                echo $this->getAttribute($context["store"], "name", array());
            } else {
                // line 413
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\"/>";
                // line 414
                echo $this->getAttribute($context["store"], "name", array());
            }
            // line 415
            echo " </label>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 421
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 423
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 425
            echo "                      <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 426
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"/>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 432
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 434
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 436
            echo "                      <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i>";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 437
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"/>
                      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 448
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 449
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 455
        $context["attribute_row"] = 0;
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 457
            echo "                      <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 458
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 459
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 460
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 463
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 465
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 472
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">";
        // line 482
        $context["option_row"] = 0;
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 484
            echo "                      <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>";
            // line 485
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 488
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">";
        // line 493
        $context["option_row"] = 0;
        // line 494
        $context["option_value_row"] = 0;
        // line 495
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 496
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 497
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 499
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 501
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">";
            // line 504
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 505
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 507
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                <option value=\"0\">";
                // line 508
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>";
            } else {
                // line 512
                echo "

                                <option value=\"1\">";
                // line 514
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 515
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>";
            }
            // line 519
            echo "

                            </select>
                          </div>
                        </div>";
            // line 524
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 525
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 526
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 528
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>";
            }
            // line 532
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 533
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 534
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 536
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                            </div>
                          </div>";
            }
            // line 540
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 541
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 542
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 544
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>";
            }
            // line 548
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 549
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 550
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 553
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>";
            }
            // line 559
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 560
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 561
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 564
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>";
            }
            // line 570
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 571
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 572
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 575
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>";
            }
            // line 581
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 582
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 583
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 586
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 587
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 588
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 589
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 590
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 591
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>";
                // line 597
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 598
                    echo "                                  <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 599
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">";
                    // line 602
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 604
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 606
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 607
                                echo "

                                              <option value=\"";
                                // line 609
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>";
                            } else {
                                // line 613
                                echo "

                                              <option value=\"";
                                // line 615
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 621
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 623
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 624
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 625
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">";
                    // line 628
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 629
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 631
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 632
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>";
                    } else {
                        // line 636
                        echo "

                                          <option value=\"1\">";
                        // line 638
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 639
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>";
                    }
                    // line 643
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 646
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">";
                    // line 649
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 650
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>";
                    } else {
                        // line 656
                        echo "

                                          <option value=\"+\">+</option>";
                    }
                    // line 662
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 663
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>";
                    } else {
                        // line 669
                        echo "

                                          <option value=\"-\">-</option>";
                    }
                    // line 675
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 677
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 678
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">";
                    // line 681
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 682
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>";
                    } else {
                        // line 688
                        echo "

                                          <option value=\"+\">+</option>";
                    }
                    // line 694
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 695
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>";
                    } else {
                        // line 701
                        echo "

                                          <option value=\"-\">-</option>";
                    }
                    // line 707
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 709
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 710
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">";
                    // line 713
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 714
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>";
                    } else {
                        // line 720
                        echo "

                                          <option value=\"+\">+</option>";
                    }
                    // line 726
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 727
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>";
                    } else {
                        // line 733
                        echo "

                                          <option value=\"-\">-</option>";
                    }
                    // line 739
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 741
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 742
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>";
                    // line 744
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 746
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 751
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 756
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">";
                // line 759
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 760
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 761
                        echo "

                                <option value=\"";
                        // line 763
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 768
                echo "

                          </select>";
            }
            // line 771
            echo " </div>";
            // line 772
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 773
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 782
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 783
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 789
        $context["recurring_row"] = 0;
        // line 790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 791
            echo "                      <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 792
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">";
            // line 795
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 796
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 797
                    echo "

                                <option value=\"";
                    // line 799
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>";
                } else {
                    // line 803
                    echo "

                                <option value=\"";
                    // line 805
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 810
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 813
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">";
            // line 816
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 817
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 818
                    echo "

                                <option value=\"";
                    // line 820
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                } else {
                    // line 824
                    echo "

                                <option value=\"";
                    // line 826
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 831
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 834
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 836
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 838
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 843
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 854
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 855
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 856
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 857
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 858
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 859
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 865
        $context["discount_row"] = 0;
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 867
            echo "                      <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 868
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">";
            // line 869
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 870
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 871
                    echo "                                <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                } else {
                    // line 873
                    echo "                                <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 876
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 877
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 878
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 879
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 882
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 888
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 892
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 894
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 901
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 912
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 913
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 914
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 915
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 916
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 922
        $context["special_row"] = 0;
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 924
            echo "                      <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 925
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">";
            // line 928
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 929
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 930
                    echo "

                                <option value=\"";
                    // line 932
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                } else {
                    // line 936
                    echo "

                                <option value=\"";
                    // line 938
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 943
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 946
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 947
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 950
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 956
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 960
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 962
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 969
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 980
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 985
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 994
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 995
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 1001
        $context["image_row"] = 0;
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1003
            echo "                      <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1004
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1005
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1006
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>";
            // line 1008
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1010
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1023
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1025
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1032
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1033
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 1038
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1039
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1040
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1041
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1044
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>";
        // line 1050
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1055
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1056
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 1060
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1061
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1062
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                        <td class=\"text-left\">";
            // line 1063
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1064
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\"/>
                            </div>";
                // line 1066
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1067
                    echo "                              <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1069
            echo "</td>
                      </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1072
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1082
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1083
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>";
        // line 1087
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1088
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1089
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1090
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>";
            // line 1094
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1095
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1096
                    echo "

                                <option value=\"";
                    // line 1098
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>";
                } else {
                    // line 1102
                    echo "

                                <option value=\"";
                    // line 1104
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1109
            echo "

                          </select></td>
                      </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1114
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1137
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1142
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1164
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1193
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1222
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1251
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row =";
        // line 1277
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1281
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';";
        // line 1283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1284
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1286
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1287
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1301
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row =";
        // line 1326
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1331
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1354
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1356
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1357
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1363
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1364
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1370
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1371
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1377
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1378
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1384
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1385
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1391
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1392
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1398
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1399
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1408
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1409
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1410
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1411
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1412
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1413
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1422
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1450
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1455
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1460
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row =";
        // line 1470
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1477
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1479
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1480
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1486
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1491
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1496
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1497
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row =";
        // line 1508
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';";
        // line 1513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1514
            echo "\t  html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1516
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1517
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1518
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1519
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1520
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1521
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1522
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row =";
        // line 1536
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';";
        // line 1541
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1542
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1544
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1545
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1546
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1547
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1548
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1549
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1555
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row =";
        // line 1564
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1568
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1569
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1570
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row =";
        // line 1580
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';";
        // line 1586
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1587
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1589
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';";
        // line 1593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1594
            echo "\t  html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1596
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1599
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1611
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1616
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1621
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>";
        // line 1631
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3299 => 1631,  3287 => 1621,  3279 => 1616,  3271 => 1611,  3256 => 1599,  3251 => 1596,  3241 => 1594,  3237 => 1593,  3232 => 1589,  3222 => 1587,  3218 => 1586,  3210 => 1580,  3197 => 1570,  3193 => 1569,  3187 => 1568,  3180 => 1564,  3168 => 1555,  3159 => 1549,  3155 => 1548,  3151 => 1547,  3147 => 1546,  3143 => 1545,  3140 => 1544,  3130 => 1542,  3126 => 1541,  3119 => 1536,  3102 => 1522,  3098 => 1521,  3094 => 1520,  3090 => 1519,  3086 => 1518,  3082 => 1517,  3079 => 1516,  3069 => 1514,  3065 => 1513,  3058 => 1508,  3044 => 1497,  3040 => 1496,  3032 => 1491,  3024 => 1486,  3015 => 1480,  3011 => 1479,  3006 => 1477,  2996 => 1470,  2983 => 1460,  2975 => 1455,  2967 => 1450,  2936 => 1422,  2924 => 1413,  2920 => 1412,  2916 => 1411,  2912 => 1410,  2908 => 1409,  2904 => 1408,  2892 => 1399,  2888 => 1398,  2879 => 1392,  2875 => 1391,  2866 => 1385,  2862 => 1384,  2853 => 1378,  2849 => 1377,  2840 => 1371,  2836 => 1370,  2827 => 1364,  2823 => 1363,  2814 => 1357,  2810 => 1356,  2805 => 1354,  2779 => 1331,  2771 => 1326,  2743 => 1301,  2726 => 1287,  2723 => 1286,  2707 => 1284,  2703 => 1283,  2699 => 1281,  2692 => 1277,  2663 => 1251,  2631 => 1222,  2599 => 1193,  2567 => 1164,  2542 => 1142,  2534 => 1137,  2509 => 1114,  2500 => 1109,  2490 => 1104,  2486 => 1102,  2480 => 1098,  2476 => 1096,  2474 => 1095,  2470 => 1094,  2466 => 1090,  2462 => 1089,  2459 => 1088,  2455 => 1087,  2449 => 1083,  2445 => 1082,  2433 => 1072,  2426 => 1069,  2417 => 1067,  2415 => 1066,  2396 => 1064,  2392 => 1063,  2388 => 1062,  2385 => 1061,  2381 => 1060,  2375 => 1056,  2371 => 1055,  2363 => 1050,  2355 => 1044,  2345 => 1041,  2341 => 1040,  2338 => 1039,  2334 => 1038,  2328 => 1033,  2324 => 1032,  2312 => 1025,  2305 => 1023,  2294 => 1015,  2287 => 1010,  2281 => 1008,  2275 => 1006,  2267 => 1005,  2253 => 1004,  2248 => 1003,  2244 => 1002,  2242 => 1001,  2235 => 995,  2231 => 994,  2215 => 985,  2207 => 980,  2193 => 969,  2186 => 964,  2180 => 962,  2174 => 960,  2163 => 956,  2150 => 950,  2140 => 947,  2132 => 946,  2127 => 943,  2117 => 938,  2113 => 936,  2107 => 932,  2103 => 930,  2101 => 929,  2097 => 928,  2094 => 925,  2089 => 924,  2085 => 923,  2083 => 922,  2076 => 916,  2072 => 915,  2068 => 914,  2064 => 913,  2060 => 912,  2046 => 901,  2039 => 896,  2033 => 894,  2027 => 892,  2016 => 888,  2003 => 882,  1993 => 879,  1985 => 878,  1977 => 877,  1974 => 876,  1963 => 873,  1956 => 871,  1954 => 870,  1950 => 869,  1947 => 868,  1942 => 867,  1938 => 866,  1936 => 865,  1929 => 859,  1925 => 858,  1921 => 857,  1917 => 856,  1913 => 855,  1909 => 854,  1895 => 843,  1888 => 838,  1882 => 836,  1876 => 834,  1871 => 831,  1861 => 826,  1857 => 824,  1851 => 820,  1847 => 818,  1845 => 817,  1841 => 816,  1838 => 813,  1833 => 810,  1823 => 805,  1819 => 803,  1813 => 799,  1809 => 797,  1807 => 796,  1803 => 795,  1800 => 792,  1795 => 791,  1791 => 790,  1789 => 789,  1782 => 783,  1778 => 782,  1767 => 773,  1761 => 772,  1759 => 771,  1754 => 768,  1744 => 763,  1740 => 761,  1736 => 760,  1734 => 759,  1731 => 756,  1721 => 751,  1714 => 746,  1708 => 744,  1702 => 742,  1692 => 741,  1688 => 739,  1683 => 733,  1678 => 727,  1676 => 726,  1671 => 720,  1666 => 714,  1664 => 713,  1659 => 710,  1649 => 709,  1645 => 707,  1640 => 701,  1635 => 695,  1633 => 694,  1628 => 688,  1623 => 682,  1621 => 681,  1616 => 678,  1606 => 677,  1602 => 675,  1597 => 669,  1592 => 663,  1590 => 662,  1585 => 656,  1580 => 650,  1578 => 649,  1573 => 646,  1568 => 643,  1564 => 639,  1560 => 638,  1556 => 636,  1552 => 632,  1548 => 631,  1544 => 629,  1542 => 628,  1537 => 625,  1527 => 624,  1519 => 623,  1515 => 621,  1504 => 615,  1500 => 613,  1494 => 609,  1490 => 607,  1488 => 606,  1484 => 604,  1482 => 602,  1477 => 599,  1472 => 598,  1468 => 597,  1461 => 591,  1457 => 590,  1453 => 589,  1449 => 588,  1445 => 587,  1441 => 586,  1435 => 583,  1432 => 582,  1430 => 581,  1416 => 575,  1408 => 572,  1405 => 571,  1403 => 570,  1389 => 564,  1381 => 561,  1378 => 560,  1376 => 559,  1362 => 553,  1354 => 550,  1351 => 549,  1349 => 548,  1337 => 544,  1330 => 542,  1327 => 541,  1325 => 540,  1313 => 536,  1306 => 534,  1303 => 533,  1301 => 532,  1289 => 528,  1282 => 526,  1279 => 525,  1277 => 524,  1271 => 519,  1267 => 515,  1263 => 514,  1259 => 512,  1255 => 508,  1251 => 507,  1247 => 505,  1245 => 504,  1240 => 501,  1233 => 499,  1214 => 497,  1209 => 496,  1205 => 495,  1203 => 494,  1201 => 493,  1193 => 488,  1190 => 487,  1184 => 485,  1174 => 484,  1170 => 483,  1168 => 482,  1156 => 472,  1149 => 467,  1143 => 465,  1137 => 463,  1134 => 462,  1113 => 460,  1109 => 459,  1097 => 458,  1092 => 457,  1088 => 456,  1086 => 455,  1079 => 449,  1075 => 448,  1064 => 439,  1056 => 437,  1049 => 436,  1045 => 435,  1041 => 434,  1034 => 432,  1028 => 428,  1020 => 426,  1013 => 425,  1009 => 424,  1005 => 423,  998 => 421,  992 => 417,  985 => 415,  982 => 414,  978 => 413,  975 => 411,  971 => 410,  969 => 409,  966 => 408,  962 => 407,  957 => 405,  951 => 401,  943 => 399,  936 => 398,  932 => 397,  928 => 396,  921 => 394,  915 => 390,  907 => 388,  900 => 387,  896 => 386,  892 => 385,  885 => 383,  874 => 379,  867 => 377,  856 => 371,  851 => 369,  843 => 363,  839 => 359,  835 => 358,  831 => 356,  827 => 352,  823 => 351,  819 => 349,  817 => 348,  812 => 343,  804 => 337,  794 => 332,  790 => 330,  784 => 326,  780 => 324,  778 => 323,  774 => 322,  769 => 317,  760 => 313,  755 => 311,  747 => 305,  737 => 300,  733 => 298,  727 => 294,  723 => 292,  721 => 291,  717 => 290,  712 => 285,  701 => 279,  693 => 276,  685 => 273,  678 => 269,  667 => 263,  661 => 260,  655 => 256,  652 => 255,  650 => 254,  647 => 252,  645 => 251,  642 => 250,  639 => 249,  637 => 248,  634 => 246,  632 => 245,  630 => 244,  625 => 242,  617 => 236,  607 => 231,  603 => 229,  597 => 225,  593 => 223,  591 => 222,  587 => 221,  580 => 216,  572 => 210,  568 => 206,  564 => 205,  560 => 203,  556 => 199,  552 => 198,  548 => 196,  546 => 195,  541 => 190,  532 => 186,  525 => 184,  516 => 180,  511 => 178,  503 => 172,  493 => 167,  489 => 165,  483 => 161,  479 => 159,  477 => 158,  473 => 157,  470 => 154,  464 => 151,  455 => 147,  450 => 145,  441 => 141,  436 => 139,  427 => 135,  420 => 133,  411 => 129,  404 => 127,  395 => 123,  388 => 121,  379 => 117,  372 => 115,  363 => 111,  356 => 109,  347 => 105,  340 => 103,  335 => 100,  330 => 99,  328 => 98,  323 => 97,  318 => 95,  312 => 91,  296 => 87,  287 => 85,  274 => 81,  267 => 79,  254 => 75,  247 => 73,  242 => 70,  237 => 69,  235 => 68,  226 => 67,  219 => 65,  204 => 61,  197 => 59,  192 => 56,  187 => 55,  185 => 54,  176 => 53,  169 => 51,  163 => 49,  159 => 48,  156 => 47,  140 => 45,  136 => 44,  129 => 39,  125 => 38,  121 => 37,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  80 => 26,  74 => 23,  70 => 21,  63 => 17,  61 => 16,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*           <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                   <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                   <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                         {% if error_name[language.language_id] %}*/
/*                           <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                         {% endif %} </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control"/>*/
/*                         {% if error_meta_title[language.language_id] %}*/
/*                           <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                         {% endif %} </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                       <div class="col-sm-10">*/
/*                         <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                       <div class="col-sm-10">*/
/*                         <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control"/>*/
/*                   {% if error_model %}*/
/*                     <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/* */
/* */
/*                     {% for tax_class in tax_classes %}*/
/*                       {% if tax_class.tax_class_id == tax_class_id %}*/
/* */
/* */
/*                         <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/* */
/* */
/*                     {% if subtract %}*/
/* */
/* */
/*                       <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                       <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                     {% else %}*/
/* */
/* */
/*                       <option value="1">{{ text_yes }}</option>*/
/*                       <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                     {% endif %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/* */
/* */
/*                     {% for stock_status in stock_statuses %}*/
/*                       {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/* */
/*                         <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                       <input type="radio" name="shipping" value="1" checked="checked"/>*/
/*                       {{ text_yes }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="1"/>*/
/*                       {{ text_yes }}*/
/*                     {% endif %} </label> <label class="radio-inline"> {% if not shipping %}*/
/*                       <input type="radio" name="shipping" value="0" checked="checked"/>*/
/*                       {{ text_no }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="0"/>*/
/*                       {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control"/> <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/* */
/* */
/*                     {% for length_class in length_classes %}*/
/*                       {% if length_class.length_class_id == length_class_id %}*/
/* */
/* */
/*                         <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/* */
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                       {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/* */
/*                         <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/* */
/* */
/*                       {% else %}*/
/* */
/* */
/*                         <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/* */
/* */
/*                       {% endif %}*/
/*                     {% endfor %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/* */
/* */
/*                     {% if status %}*/
/* */
/* */
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/* */
/* */
/*                     {% else %}*/
/* */
/* */
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* */
/* */
/*                     {% endif %}*/
/* */
/* */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control"/> <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control"/>*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_category in product_categories %}*/
/*                       <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                         <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control"/>*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                       <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                         <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                       <div class="checkbox">*/
/*                         <label> {% if store.store_id in product_store %}*/
/*                             <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked"/>*/
/*                             {{ store.name }}*/
/*                           {% else %}*/
/*                             <input type="checkbox" name="product_store[]" value="{{ store.store_id }}"/>*/
/*                             {{ store.name }}*/
/*                           {% endif %} </label>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control"/>*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                       <div id="product-download{{ product_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                         <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control"/>*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                       <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                         <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set attribute_row = 0 %}*/
/*                     {% for product_attribute in product_attributes %}*/
/*                       <tr id="attribute-row{{ attribute_row }}">*/
/*                         <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control"/> <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}"/></td>*/
/*                         <td class="text-left">{% for language in languages %}*/
/*                             <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span> <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                             </div>*/
/*                           {% endfor %}</td>*/
/*                         <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set attribute_row = attribute_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                       <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                       {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li>*/
/*                       <input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control"/>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content"> {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                       <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                         <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}"/> <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}"/> <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}"/>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/* */
/* */
/*                               {% if product_option.required %}*/
/* */
/* */
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/* */
/* */
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         {% if product_option.type == 'text' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'textarea' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'file' %}*/
/*                           <div class="form-group" style="display: none;">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control"/>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'date' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-3">*/
/*                               <div class="input-group date">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'time' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <div class="input-group time">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'datetime' %}*/
/*                           <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                             <div class="col-sm-10">*/
/*                               <div class="input-group datetime">*/
/*                                 <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control"/> <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                         {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                           <div class="table-responsive">*/
/*                             <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                               <thead>*/
/*                                 <tr>*/
/*                                   <td class="text-left">{{ entry_option_value }}</td>*/
/*                                   <td class="text-right">{{ entry_quantity }}</td>*/
/*                                   <td class="text-left">{{ entry_subtract }}</td>*/
/*                                   <td class="text-right">{{ entry_price }}</td>*/
/*                                   <td class="text-right">{{ entry_option_points }}</td>*/
/*                                   <td class="text-right">{{ entry_weight }}</td>*/
/*                                   <td></td>*/
/*                                 </tr>*/
/*                               </thead>*/
/*                               <tbody>*/
/* */
/*                                 {% for product_option_value in product_option.product_option_value %}*/
/*                                   <tr id="option-value-row{{ option_value_row }}">*/
/*                                     <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/* */
/* */
/*                                         {% if option_values[product_option.option_id] %}*/
/* */
/*                                           {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                             {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/* */
/*                                               <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/* */
/* */
/*                                             {% else %}*/
/* */
/* */
/*                                               <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                                             {% endif %}*/
/*                                           {% endfor %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}"/></td>*/
/*                                     <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                                     <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.subtract %}*/
/* */
/* */
/*                                           <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                           <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="1">{{ text_yes }}</option>*/
/*                                           <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.price_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.price_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.points_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.points_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/* */
/* */
/*                                         {% if product_option_value.weight_prefix == '+' %}*/
/* */
/* */
/*                                           <option value="+" selected="selected">+</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="+">+</option>*/
/* */
/* */
/*                                         {% endif %}*/
/*                                         {% if product_option_value.weight_prefix == '-' %}*/
/* */
/* */
/*                                           <option value="-" selected="selected">-</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                           <option value="-">-</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                       </select> <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control"/></td>*/
/*                                     <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                                   </tr>*/
/*                                   {% set option_value_row = option_value_row + 1 %}*/
/*                                 {% endfor %}*/
/*                               </tbody>*/
/* */
/*                               <tfoot>*/
/*                                 <tr>*/
/*                                   <td colspan="6"></td>*/
/*                                   <td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                                 </tr>*/
/*                               </tfoot>*/
/*                             </table>*/
/*                           </div>*/
/*                           <select id="option-values{{ option_row }}" style="display: none;">*/
/* */
/* */
/*                             {% if option_values[product_option.option_id] %}*/
/*                               {% for option_value in option_values[product_option.option_id] %}*/
/* */
/* */
/*                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                               {% endfor %}*/
/*                             {% endif %}*/
/* */
/* */
/*                           </select>*/
/*                         {% endif %} </div>*/
/*                       {% set option_row = option_row + 1 %}*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set recurring_row = 0 %}*/
/*                     {% for product_recurring in product_recurrings %}*/
/*                       <tr id="recurring-row{{ recurring_row }}">*/
/*                         <td class="text-left"><select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/* */
/* */
/*                             {% for recurring in recurrings %}*/
/*                               {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/* */
/*                                 <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-left"><select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/* */
/* */
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set recurring_row = recurring_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set discount_row = 0 %}*/
/*                     {% for product_discount in product_discounts %}*/
/*                       <tr id="discount-row{{ discount_row }}">*/
/*                         <td class="text-left"><select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </select></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set discount_row = discount_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set special_row = 0 %}*/
/*                     {% for product_special in product_specials %}*/
/*                       <tr id="special-row{{ special_row }}">*/
/*                         <td class="text-left"><select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/* */
/* */
/*                             {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                         <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control"/></td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left" style="width: 20%;">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control"/> <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                         </td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set special_row = special_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="image" value="{{ image }}" id="input-image"/></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set image_row = 0 %}*/
/*                     {% for product_image in product_images %}*/
/*                       <tr id="image-row{{ image_row }}">*/
/*                         <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}"/></a> <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}"/></td>*/
/*                         <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control"/></td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set image_row = image_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% for customer_group in customer_groups %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ customer_group.name }}</td>*/
/*                         <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control"/></td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ store.name }}</td>*/
/*                         <td class="text-left">{% for language in languages %}*/
/*                             <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"/></span> <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control"/>*/
/*                             </div>*/
/*                             {% if error_keyword[store.store_id][language.language_id] %}*/
/*                               <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                             {% endif %}*/
/*                           {% endfor %}</td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for store in stores %}*/
/*                       <tr>*/
/*                         <td class="text-left">{{ store.name }}</td>*/
/*                         <td class="text-left"><select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                             <option value=""></option>*/
/* */
/* */
/*                             {% for layout in layouts %}*/
/*                               {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/* */
/*                                 <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/* */
/* */
/*                               {% else %}*/
/* */
/* */
/*                                 <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/* */
/* */
/*                               {% endif %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                           </select></td>*/
/*                       </tr>*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   <script type="text/javascript"><!--*/
/*   // Manufacturer*/
/*   $('input[name=\'manufacturer\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  json.unshift({*/
/* 					  manufacturer_id: 0,*/
/* 					  name: '{{ text_none }}'*/
/* 				  });*/
/* */
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['manufacturer_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'manufacturer\']').val(item['label']);*/
/* 		  $('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	  }*/
/*   });*/
/* */
/*   // Category*/
/*   $('input[name=\'category\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['category_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'category\']').val('');*/
/* */
/* 		  $('#product-category' + item['value']).remove();*/
/* */
/* 		  $('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Filter*/
/*   $('input[name=\'filter\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['filter_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'filter\']').val('');*/
/* */
/* 		  $('#product-filter' + item['value']).remove();*/
/* */
/* 		  $('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Downloads*/
/*   $('input[name=\'download\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['download_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'download\']').val('');*/
/* */
/* 		  $('#product-download' + item['value']).remove();*/
/* */
/* 		  $('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/* */
/*   // Related*/
/*   $('input[name=\'related\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['product_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  $('input[name=\'related\']').val('');*/
/* */
/* 		  $('#product-related' + item['value']).remove();*/
/* */
/* 		  $('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var attribute_row = {{ attribute_row }};*/
/* */
/*   function addAttribute() {*/
/* 	  html = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-left">';*/
/*     {% for language in languages %}*/
/* 	  html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#attribute tbody').append(html);*/
/* */
/* 	  attributeautocomplete(attribute_row);*/
/* */
/* 	  attribute_row++;*/
/*   }*/
/* */
/*   function attributeautocomplete(attribute_row) {*/
/* 	  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		  'source': function(request, response) {*/
/* 			  $.ajax({*/
/* 				  url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 				  dataType: 'json',*/
/* 				  success: function(json) {*/
/* 					  response($.map(json, function(item) {*/
/* 						  return {*/
/* 							  category: item.attribute_group,*/
/* 							  label: item.name,*/
/* 							  value: item.attribute_id*/
/* 						  }*/
/* 					  }));*/
/* 				  }*/
/* 			  });*/
/* 		  },*/
/* 		  'select': function(item) {*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			  $('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		  }*/
/* 	  });*/
/*   }*/
/* */
/*   $('#attribute tbody tr').each(function(index, element) {*/
/* 	  attributeautocomplete(index);*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var option_row = {{ option_row }};*/
/* */
/*   $('input[name=\'option\']').autocomplete({*/
/* 	  'source': function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  category: item['category'],*/
/* 						  label: item['name'],*/
/* 						  value: item['option_id'],*/
/* 						  type: item['type'],*/
/* 						  option_value: item['option_value']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  'select': function(item) {*/
/* 		  html = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		  html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		  html += '	<div class="form-group">';*/
/* 		  html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		  html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		  html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		  html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		  html += '	  </select></div>';*/
/* 		  html += '	</div>';*/
/* */
/* 		  if (item['type'] == 'text') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'textarea') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'file') {*/
/* 			  html += '	<div class="form-group" style="display: none;">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'date') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'time') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'datetime') {*/
/* 			  html += '	<div class="form-group">';*/
/* 			  html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			  html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			  html += '	</div>';*/
/* 		  }*/
/* */
/* 		  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			  html += '<div class="table-responsive">';*/
/* 			  html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			  html += '  	 <thead>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			  html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_price }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/* 			  html += '        <td class="text-right">{{ entry_weight }}</td>';*/
/* 			  html += '        <td></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '  	 </thead>';*/
/* 			  html += '  	 <tbody>';*/
/* 			  html += '    </tbody>';*/
/* 			  html += '    <tfoot>';*/
/* 			  html += '      <tr>';*/
/* 			  html += '        <td colspan="6"></td>';*/
/* 			  html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			  html += '      </tr>';*/
/* 			  html += '    </tfoot>';*/
/* 			  html += '  </table>';*/
/* 			  html += '</div>';*/
/* */
/* 			  html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/* 			  for (i = 0; i < item['option_value'].length; i++) {*/
/* 				  html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/* 			  }*/
/* */
/* 			  html += '  </select>';*/
/* 			  html += '</div>';*/
/* 		  }*/
/* */
/* 		  $('#tab-option .tab-content').append(html);*/
/* */
/* 		  $('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		  $('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		  $('[data-toggle=\'tooltip\']').tooltip({*/
/* 			  container: 'body',*/
/* 			  html: true*/
/* 		  });*/
/* */
/* 		  $('.date').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickTime: false*/
/* 		  });*/
/* */
/* 		  $('.time').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: false*/
/* 		  });*/
/* */
/* 		  $('.datetime').datetimepicker({*/
/* 			  language: '{{ datepicker }}',*/
/* 			  pickDate: true,*/
/* 			  pickTime: true*/
/* 		  });*/
/* */
/* 		  option_row++;*/
/* 	  }*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var option_value_row = {{ option_value_row }};*/
/* */
/*   function addOptionValue(option_row) {*/
/* 	  html = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	  html += $('#option-values' + option_row).html();*/
/* 	  html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	  html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	  html += '    <option value="0">{{ text_no }}</option>';*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	  html += '    <option value="+">+</option>';*/
/* 	  html += '    <option value="-">-</option>';*/
/* 	  html += '  </select>';*/
/* 	  html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#option-value' + option_row + ' tbody').append(html);*/
/* 	  $('[rel=tooltip]').tooltip();*/
/* */
/* 	  option_value_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var discount_row = {{ discount_row }};*/
/* */
/*   function addDiscount() {*/
/* 	  html = '<tr id="discount-row' + discount_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#discount tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  discount_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var special_row = {{ special_row }};*/
/* */
/*   function addSpecial() {*/
/* 	  html = '<tr id="special-row' + special_row + '">';*/
/* 	  html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '  </select></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#special tbody').append(html);*/
/* */
/* 	  $('.date').datetimepicker({*/
/* 		  language: '{{ datepicker }}',*/
/* 		  pickTime: false*/
/* 	  });*/
/* */
/* 	  special_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var image_row = {{ image_row }};*/
/* */
/*   function addImage() {*/
/* 	  html = '<tr id="image-row' + image_row + '">';*/
/* 	  html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	  html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	  html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#images tbody').append(html);*/
/* */
/* 	  image_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   var recurring_row = {{ recurring_row }};*/
/* */
/*   function addRecurring() {*/
/* 	  html = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/*     {% for recurring in recurrings %}*/
/* 	  html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    </select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/*     {% for customer_group in customer_groups %}*/
/* 	  html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/*     {% endfor %}*/
/* 	  html += '    <select>';*/
/* 	  html += '  </td>';*/
/* 	  html += '  <td class="left">';*/
/* 	  html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	  html += '  </td>';*/
/* 	  html += '</tr>';*/
/* */
/* 	  $('#tab-recurring table tbody').append(html);*/
/* */
/* 	  recurring_row++;*/
/*   }*/
/* */
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickTime: false*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/* 	  language: '{{ datepicker }}',*/
/* 	  pickDate: true,*/
/* 	  pickTime: true*/
/*   });*/
/*   //--></script>*/
/*   <script type="text/javascript"><!--*/
/*   $('#language a:first').tab('show');*/
/*   $('#option a:first').tab('show');*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }} */
/* */
