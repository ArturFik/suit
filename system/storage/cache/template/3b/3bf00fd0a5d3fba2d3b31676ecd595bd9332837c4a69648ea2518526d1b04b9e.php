<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/featured.twig */
class __TwigTemplate_2dcda6a2d886dc7eeb35507a265d47ad34101e918eda786b268f06428a828a05 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"prod\">
\t<div class=\"prod__content\">
\t\t<div class=\"title\">
\t\t\t<h2>";
        // line 4
        echo ($context["title_module"] ?? null);
        echo "</h2>
\t\t\t<a class=\"hidden\" href=\"\">";
        // line 5
        echo ($context["link_category_featured"] ?? null);
        echo "</a>
\t\t</div>
\t\t<div class=\"prod__list\">
      \t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "\t\t\t<div class=\"prod__item\" itemscope itemtype=\"https://schema.org/Product\">
\t\t\t\t<div class=\"prod__item-top\">
\t\t\t\t\t<a onclick=\"compare.add('";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 11);
            echo "'); return false;\" href=\"#\"><img src=\"images/i-graph.svg\"></a>
\t\t\t\t\t<a onclick=\"wishlist.add('";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 12);
            echo "'); return false;\" href=\"#\"><img src=\"images/i-bookmark.svg\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"prod__item-img\">
\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
            echo "\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"prod__item-bottom\">
\t\t\t\t\t<div class=\"prod__item-title\">
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
            echo "\"><b itemprop=\"name\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "</b></a>
\t\t\t\t\t\t<span class=\"hidden\" itemprop=\"description\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"prod__item-footer\">
\t\t\t\t\t\t<div class=\"prod__item-price\">
              \t\t\t\t";
            // line 24
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<span itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
\t\t\t\t\t\t\t\t  ";
                // line 26
                echo ($context["text_from_n"] ?? null);
                echo " <span itemprop=\"price\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price_orig", [], "any", false, false, false, 26);
                echo "</span> ";
                echo ($context["symbol_right"] ?? null);
                echo "
\t\t\t\t\t\t\t\t  <span itemprop=\"priceCurrency\" content=\"";
                // line 27
                echo ($context["currency"] ?? null);
                echo "\">";
                echo ($context["text_sht_n"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t  </span>
\t\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t\t<span itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
\t\t\t\t\t\t\t\t  ";
                // line 31
                echo ($context["text_from_n"] ?? null);
                echo " <span itemprop=\"price\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "special_orig", [], "any", false, false, false, 31);
                echo "</span>";
                echo ($context["symbol_right"] ?? null);
                echo "
\t\t\t\t\t\t\t\t  <span itemprop=\"priceCurrency\" content=\"";
                // line 32
                echo ($context["currency"] ?? null);
                echo "\">";
                echo ($context["text_sht_n"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t  </span>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-add-to-cart\">
\t\t\t\t\t\t\t<div class=\"item-add-to-cart__input-block ";
            // line 37
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 37)) {
                echo "hidden";
            }
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"item-add-to-cart__input-block_minus\" ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 38)) {
                echo "onclick=\"cart.update('";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 38), "cart_id", [], "any", false, false, false, 38);
                echo "', '";
                echo (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 38), "quantity", [], "any", false, false, false, 38) - 1);
                echo "');\"";
            }
            echo ">-</div>
\t\t\t\t\t\t\t\t<input disabled=\"disabled\" class=\"item-add-to-cart__input-block_input\" data-product-id=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 39);
            echo "\" value=\"";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 39)) {
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 39), "quantity", [], "any", false, false, false, 39);
            } else {
                echo "1";
            }
            echo "\" />
\t\t\t\t\t\t\t\t<div class=\"item-add-to-cart__input-block_plus\" ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 40)) {
                echo "onclick=\"cart.update('";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 40), "cart_id", [], "any", false, false, false, 40);
                echo "', '";
                echo (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 40), "quantity", [], "any", false, false, false, 40) + 1);
                echo "');\"";
            }
            echo ">+</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a onclick=\"cart.add('";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 42);
            echo "'); return false;\" class=\"prod__item-link\" href=\"#\" itemprop=\"url\">
\t\t\t\t\t\t\t\t<img src=\"images/i-bag.svg\"><span ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "product_info_in_cart", [], "any", false, false, false, 43)) {
                echo "class=\"hidden\"";
            }
            echo ">";
            echo ($context["button_cart_n"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</div>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 51,  174 => 43,  170 => 42,  159 => 40,  149 => 39,  139 => 38,  133 => 37,  129 => 35,  121 => 32,  113 => 31,  110 => 30,  102 => 27,  94 => 26,  91 => 25,  89 => 24,  79 => 19,  70 => 15,  64 => 12,  60 => 11,  56 => 9,  52 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}
