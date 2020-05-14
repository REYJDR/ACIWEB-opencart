<?php

/* default/template/product/thumb.twig */
class __TwigTemplate_63a22a7e7601517dbb867ed441b637d739f0e770191141184a41d3b482ecf55f extends Twig_Template
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
        echo "<div class=\"product-thumb transition\">
  <div class=\"image\"><a href=\"";
        // line 2
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
  <div class=\"caption\">
    <h4><a href=\"";
        // line 4
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
    <p>";
        // line 5
        echo ($context["description"] ?? null);
        echo "</p>";
        // line 6
        if (($context["price"] ?? null)) {
            // line 7
            echo "      <div class=\"price\">";
            // line 8
            if ( !($context["special"] ?? null)) {
                // line 9
                echo ($context["price"] ?? null);
            } else {
                // line 11
                echo "          <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>";
            }
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tax", [])) {
                // line 14
                echo "          <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo ($context["tax"] ?? null);
                echo "</span>";
            }
            // line 16
            echo "      </div>";
        }
        // line 18
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 19
            echo "      <div class=\"rating\">";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", []) < $context["i"])) {
                    // line 22
                    echo "            <span class=\"fas fa-stack\"><i class=\"fas fa-star-o fa-stack-2x\"></i></span>";
                } else {
                    // line 24
                    echo "            <span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-2x\"></i><i class=\"fas fa-star-o fa-stack-2x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </div>";
        }
        // line 29
        echo "  </div>
  <div class=\"button-group\">
    <button type=\"button\" onclick=\"cart.add('";
        // line 31
        echo ($context["product_id"] ?? null);
        echo "', '";
        echo ($context["minimum"] ?? null);
        echo "');\"><i class=\"fas fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
        echo ($context["button_cart"] ?? null);
        echo "</span></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-heart\"></i></button>
    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 33
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  108 => 32,  100 => 31,  96 => 29,  93 => 27,  86 => 24,  83 => 22,  81 => 21,  77 => 20,  75 => 19,  73 => 18,  70 => 16,  64 => 14,  62 => 13,  55 => 11,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  43 => 5,  37 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/thumb.twig", "");
    }
}
