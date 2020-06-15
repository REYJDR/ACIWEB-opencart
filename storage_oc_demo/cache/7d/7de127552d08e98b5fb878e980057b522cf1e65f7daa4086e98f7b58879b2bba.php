<?php

/* journal3/template/journal3/module/header_notice.twig */
class __TwigTemplate_2edd59f6179ff364c0557f74eae928ddbd3580ce96b5abcc3b0131ca95141277 extends Twig_Template
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
        echo "<div class=\"notice-module";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\" data-options='";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo "'>
  <div class=\"module-body\">
    <div class=\"hn-body\">
      <div class=\"hn-content\">";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</div>
    </div>";
        // line 6
        if ((isset($context["closeButton"]) ? $context["closeButton"] : null)) {
            // line 7
            echo "      <div class=\"header-notice-close-button\">";
            // line 8
            if ($this->getAttribute((isset($context["closeLink"]) ? $context["closeLink"] : null), "href", array())) {
                // line 9
                echo "          <a class=\"btn hn-close\" href=\"";
                echo $this->getAttribute((isset($context["closeLink"]) ? $context["closeLink"] : null), "href", array());
                echo "\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => (isset($context["closeLink"]) ? $context["closeLink"] : null)), "method");
                echo ">";
                // line 10
                if ((isset($context["closeText"]) ? $context["closeText"] : null)) {
                    // line 11
                    echo "              <span class=\"btn-text\">";
                    echo (isset($context["closeText"]) ? $context["closeText"] : null);
                    echo "</span>";
                }
                // line 13
                echo "          </a>";
            } else {
                // line 15
                echo "          <button class=\"btn hn-close\">";
                // line 16
                if ((isset($context["closeText"]) ? $context["closeText"] : null)) {
                    // line 17
                    echo "              <span class=\"btn-text\">";
                    echo (isset($context["closeText"]) ? $context["closeText"] : null);
                    echo "</span>";
                }
                // line 19
                echo "          </button>";
            }
            // line 21
            echo "      </div>";
        }
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/header_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  66 => 21,  63 => 19,  58 => 17,  56 => 16,  54 => 15,  51 => 13,  46 => 11,  44 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  28 => 4,  19 => 1,);
    }
}
/* <div class="notice-module {{ j3.classes(classes) }}" data-options='{{ options|json_encode }}'>*/
/*   <div class="module-body">*/
/*     <div class="hn-body">*/
/*       <div class="hn-content">{{ content }}</div>*/
/*     </div>*/
/*     {% if closeButton %}*/
/*       <div class="header-notice-close-button">*/
/*         {% if closeLink.href %}*/
/*           <a class="btn hn-close" href="{{ closeLink.href }}" {{ j3.linkAttrs(closeLink) }}>*/
/*             {% if closeText %}*/
/*               <span class="btn-text">{{ closeText }}</span>*/
/*             {% endif %}*/
/*           </a>*/
/*         {% else %}*/
/*           <button class="btn hn-close">*/
/*             {% if closeText %}*/
/*               <span class="btn-text">{{ closeText }}</span>*/
/*             {% endif %}*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
