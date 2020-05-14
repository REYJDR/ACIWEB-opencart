<?php

/* install/step_4.twig */
class __TwigTemplate_3ee513daa9b0bb54255c7e0d5897292f9623658591746089a6f2b16e8abb5289 extends Twig_Template
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
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">4
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "
          <br>
          <small>";
        // line 11
        echo ($context["text_step_4"] ?? null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 19
        echo ($context["error_warning"] ?? null);
        echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 24
        echo ($context["text_catalog"] ?? null);
        echo "</a>
      </div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 28
        echo ($context["text_admin"] ?? null);
        echo "</a>
      </div>
    </div>
  </div>
  <div class=\"core-modules\">";
        // line 32
        echo ($context["promotion"] ?? null);
        echo "</div>
  <div class=\"modules\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&utm_source=opencart_install&utm_medium=store_link&utm_campaign=opencart_install\" target=\"_BLANK\" class=\"btn btn-default\">";
        // line 33
        echo ($context["text_extension"] ?? null);
        echo "</a></div>
  <div class=\"mailing\">
    <div class=\"row\">
      <div class=\"col-sm-12\"><i class=\"fa fa-envelope-o fa-5x\"></i>
        <h3>";
        // line 37
        echo ($context["text_mail"] ?? null);
        echo "
          <br/>
          <small>";
        // line 39
        echo ($context["text_mail_description"] ?? null);
        echo "</small>
        </h3>
        <a href=\"http://newsletter.opencart.com/h/r/B660EBBE4980C85C\" target=\"_BLANK\" class=\"btn btn-secondary\">";
        // line 41
        echo ($context["button_mail"] ?? null);
        echo "</a>
      </div>
    </div>
  </div>
  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <a href=\"https://www.facebook.com/opencart/\" class=\"icon transition\"><i class=\"fa fa-facebook fa-4x\"></i></a>
        <h3>";
        // line 49
        echo ($context["text_facebook"] ?? null);
        echo "</h3>
        <p>";
        // line 50
        echo ($context["text_facebook_description"] ?? null);
        echo "</p>
        <a href=\"https://www.facebook.com/opencart/\">";
        // line 51
        echo ($context["text_facebook_visit"] ?? null);
        echo "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 55
        echo ($context["text_forum"] ?? null);
        echo "</h3>
        <p>";
        // line 56
        echo ($context["text_forum_description"] ?? null);
        echo "</p>
        <a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\">";
        // line 57
        echo ($context["text_forum_visit"] ?? null);
        echo "</a>
      </div>
      <div class=\"col-sm-4\">
        <a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 61
        echo ($context["text_commercial"] ?? null);
        echo "</h3>
        <p>";
        // line 62
        echo ($context["text_commercial_description"] ?? null);
        echo "</p>
        <a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" target=\"_BLANK\">";
        // line 63
        echo ($context["text_commercial_visit"] ?? null);
        echo "</a>
      </div>
    </div>
  </div>
</div>";
        // line 68
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 68,  142 => 63,  138 => 62,  134 => 61,  127 => 57,  123 => 56,  119 => 55,  112 => 51,  108 => 50,  104 => 49,  93 => 41,  88 => 39,  83 => 37,  76 => 33,  72 => 32,  65 => 28,  58 => 24,  50 => 19,  39 => 11,  34 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install/step_4.twig", "");
    }
}
