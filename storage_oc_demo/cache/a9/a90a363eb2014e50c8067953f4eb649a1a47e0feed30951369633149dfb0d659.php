<?php

/* journal3/template/journal3/module/popup.twig */
class __TwigTemplate_7c8ef9a18449e31635ed49991a9301c596218826213b463373c36ca02a24bd32 extends Twig_Template
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
        if ((isset($context["iframe"]) ? $context["iframe"] : null)) {
            // line 2
            if (((isset($context["contentType"]) ? $context["contentType"] : null) == "image")) {
                // line 3
                echo "    <div class=\"popup-content\">
      <img src=\"";
                // line 4
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"\" width=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                echo "\"/>
    </div>";
            } elseif ((            // line 6
(isset($context["contentType"]) ? $context["contentType"] : null) == "text")) {
                // line 7
                echo "    <div class=\"popup-content\">";
                // line 8
                echo (isset($context["text"]) ? $context["text"] : null);
                echo "
    </div>";
            } else {
                // line 11
                echo (isset($context["content"]) ? $context["content"] : null);
            }
        } else {
            // line 14
            echo "  <div class=\"popup-wrapper";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\" data-options='";
            echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
            echo "'>
    <div class=\"popup-container\">";
            // line 16
            if ((isset($context["closeButton"]) ? $context["closeButton"] : null)) {
                // line 17
                echo "        <button class=\"btn popup-close\"></button>";
            }
            // line 19
            echo "      <div class=\"popup-body\">
        <div class=\"popup-inner-body\">";
            // line 21
            if ((isset($context["headerText"]) ? $context["headerText"] : null)) {
                // line 22
                echo "            <div class=\"title popup-header\">";
                echo (isset($context["headerText"]) ? $context["headerText"] : null);
                echo "</div>";
            }
            // line 24
            if (((isset($context["ajax"]) ? $context["ajax"] : null) && ((isset($context["contentType"]) ? $context["contentType"] : null) == "grid"))) {
                // line 25
                echo "            <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>
            <iframe src=\"index.php?route=journal3/popup/page&module_id=";
                // line 26
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo "&popup=module\" width=\"100%\" height=\"100%\" frameborder=\"0\" onload=\"this.height = this.contentWindow.document.querySelector('.site-wrapper').offsetHeight; \$(this).prev('.journal-loading').hide();\"></iframe>";
            } elseif ((            // line 27
(isset($context["contentType"]) ? $context["contentType"] : null) == "image")) {
                // line 28
                echo "            <div class=\"popup-content\">
              <img src=\"";
                // line 29
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"\" width=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                echo "\"/>
            </div>";
            } elseif ((            // line 31
(isset($context["contentType"]) ? $context["contentType"] : null) == "text")) {
                // line 32
                echo "            <div class=\"popup-content\">";
                // line 33
                echo (isset($context["text"]) ? $context["text"] : null);
                echo "
            </div>";
            } else {
                // line 36
                echo (isset($context["content"]) ? $context["content"] : null);
            }
            // line 39
            if ((isset($context["footer"]) ? $context["footer"] : null)) {
                // line 40
                echo "            <div class=\"popup-footer\">";
                // line 41
                if (((isset($context["button1"]) ? $context["button1"] : null) || (isset($context["button2"]) ? $context["button2"] : null))) {
                    // line 42
                    echo "                <div class=\"popup-buttons\">";
                    // line 43
                    if ((isset($context["button1"]) ? $context["button1"] : null)) {
                        // line 44
                        echo "                    <a class=\"btn btn-popup btn-popup-1\"";
                        if ($this->getAttribute((isset($context["button1Link"]) ? $context["button1Link"] : null), "href", array())) {
                            echo " href=\"";
                            echo $this->getAttribute((isset($context["button1Link"]) ? $context["button1Link"] : null), "href", array());
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo (isset($context["button1Text"]) ? $context["button1Text"] : null);
                        echo "</span></a>";
                    }
                    // line 47
                    if ((isset($context["button2"]) ? $context["button2"] : null)) {
                        // line 48
                        echo "                    <a class=\"btn btn-popup btn-popup-2\"";
                        if ($this->getAttribute((isset($context["button2Link"]) ? $context["button2Link"] : null), "href", array())) {
                            echo " href=\"";
                            echo $this->getAttribute((isset($context["button2Link"]) ? $context["button2Link"] : null), "href", array());
                            echo "\"";
                        }
                        echo "><span class=\"btn-text\">";
                        echo (isset($context["button2Text"]) ? $context["button2Text"] : null);
                        echo "</span></a>";
                    }
                    // line 50
                    echo "                </div>";
                }
                // line 52
                if (( !(isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["doNotShowAgain"]) ? $context["doNotShowAgain"] : null))) {
                    // line 53
                    echo "                <label class=\"popup-dont-show\">
                  <input type=\"checkbox\"";
                    // line 54
                    if ((isset($context["doNotShowAgainChecked"]) ? $context["doNotShowAgainChecked"] : null)) {
                        echo "checked";
                    }
                    echo "/>
                  <span>";
                    // line 55
                    echo (isset($context["doNotShowAgainText"]) ? $context["doNotShowAgainText"] : null);
                    echo "</span>
                </label>";
                }
                // line 58
                echo "            </div>";
            }
            // line 60
            echo "        </div>
      </div>
    </div>
    <div class=\"popup-bg";
            // line 63
            if ((isset($context["closeButton"]) ? $context["closeButton"] : null)) {
                echo "popup-bg-closable";
            }
            echo "\"></div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  158 => 60,  155 => 58,  150 => 55,  144 => 54,  141 => 53,  139 => 52,  136 => 50,  125 => 48,  123 => 47,  112 => 44,  110 => 43,  108 => 42,  106 => 41,  104 => 40,  102 => 39,  99 => 36,  94 => 33,  92 => 32,  90 => 31,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  71 => 25,  69 => 24,  64 => 22,  62 => 21,  59 => 19,  56 => 17,  54 => 16,  47 => 14,  43 => 11,  38 => 8,  36 => 7,  34 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if iframe %}*/
/*   {% if contentType == 'image' %}*/
/*     <div class="popup-content">*/
/*       <img src="{{ image }}" alt="" width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}"/>*/
/*     </div>*/
/*   {% elseif contentType == 'text' %}*/
/*     <div class="popup-content">*/
/*       {{ text }}*/
/*     </div>*/
/*   {% else %}*/
/*     {{ content }}*/
/*   {% endif %}*/
/* {% else %}*/
/*   <div class="popup-wrapper {{ j3.classes(classes) }}" data-options='{{ options|json_encode }}'>*/
/*     <div class="popup-container">*/
/*       {% if closeButton %}*/
/*         <button class="btn popup-close"></button>*/
/*       {% endif %}*/
/*       <div class="popup-body">*/
/*         <div class="popup-inner-body">*/
/*           {% if headerText %}*/
/*             <div class="title popup-header">{{ headerText }}</div>*/
/*           {% endif %}*/
/*           {% if ajax and contentType == 'grid' %}*/
/*             <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*             <iframe src="index.php?route=journal3/popup/page&module_id={{ module_id }}&popup=module" width="100%" height="100%" frameborder="0" onload="this.height = this.contentWindow.document.querySelector('.site-wrapper').offsetHeight; $(this).prev('.journal-loading').hide();"></iframe>*/
/*           {% elseif contentType == 'image' %}*/
/*             <div class="popup-content">*/
/*               <img src="{{ image }}" alt="" width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}"/>*/
/*             </div>*/
/*           {% elseif contentType == 'text' %}*/
/*             <div class="popup-content">*/
/*               {{ text }}*/
/*             </div>*/
/*           {% else %}*/
/*             {{ content }}*/
/*           {% endif %}*/
/* */
/*           {% if footer %}*/
/*             <div class="popup-footer">*/
/*               {% if button1 or button2 %}*/
/*                 <div class="popup-buttons">*/
/*                   {% if button1 %}*/
/*                     <a class="btn btn-popup btn-popup-1"{% if button1Link.href %} href="{{ button1Link.href }}"{% endif %}><span class="btn-text">{{ button1Text }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if button2 %}*/
/*                     <a class="btn btn-popup btn-popup-2"{% if button2Link.href %} href="{{ button2Link.href }}"{% endif %}><span class="btn-text">{{ button2Text }}</span></a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if not ajax and doNotShowAgain %}*/
/*                 <label class="popup-dont-show">*/
/*                   <input type="checkbox" {% if doNotShowAgainChecked %}checked{% endif %}/>*/
/*                   <span>{{ doNotShowAgainText }}</span>*/
/*                 </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="popup-bg {% if closeButton %}popup-bg-closable{% endif %}"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
