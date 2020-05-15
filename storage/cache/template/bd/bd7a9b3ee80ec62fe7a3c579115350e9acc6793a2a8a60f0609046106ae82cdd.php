<?php

/* default/template/mail/register.twig */
class __TwigTemplate_c2b6a04ae6a5d3869d6f71495f7b15427e84dabe95a96d80eab179e534b2a0e4 extends Twig_Template
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
        echo ($context["text_welcome"] ?? null);
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            echo ($context["text_login"] ?? null);
            // line 6
            echo ($context["login"] ?? null);
            // line 8
            echo ($context["text_service"] ?? null);
            // line 10
            echo ($context["text_thanks"] ?? null);
            // line 11
            echo ($context["store"] ?? null);
        } else {
            // line 13
            echo ($context["text_approval"] ?? null);
            // line 15
            echo ($context["login"] ?? null);
            // line 17
            echo ($context["text_thanks"] ?? null);
            // line 18
            echo ($context["store"] ?? null);
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  42 => 17,  40 => 15,  38 => 13,  35 => 11,  33 => 10,  31 => 8,  29 => 6,  27 => 4,  25 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/mail/register.twig", "");
    }
}
