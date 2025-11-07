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

/* default/template/common/cart.twig */
class __TwigTemplate_b9adae7ff2fe6d73dce9f3f43030d2293f32f3550164b0b7f6aa025596a0fdaf extends \Twig\Template
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
        echo "<div id=\"cart\">
\t<a href=\"#\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" title=\"";
        echo ($context["title_cart_header"] ?? null);
        echo "\" class=\"dropdown-toggle\">
\t\t";
        // line 4
        echo "\t\t<img src=\"images/i-bag.svg\">
\t\t<span id=\"cart-total\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</span>
\t</a>
\t<ul class=\"dropdown-menu pull-right\">
\t\t";
        // line 8
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 9
            echo "\t\t\t<li>
\t\t\t\t<div class=\"cart-block\">
\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "\t\t\t\t\t\t<div class=\"cart-row\">
\t\t\t\t\t\t\t<div class=\"cart-row__name\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 17
                        echo "\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t<small>";
                        // line 19
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 19);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 19);
                        echo "</small>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t<small>";
                    // line 25
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 25);
                    echo "</small>
\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t</div>
              <div class=\"cart-row__thumb-quantity-remove\">
                ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                <div class=\"cart-row__thumb\">
                  <a href=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                    echo "\">
                    <img src=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-thumbnail\"/>
                  </a>
                </div>
                <div class=\"cart-row__quantity\">x";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
                    echo "</div>
                <div class=\"cart-row__total\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 36);
                    echo "</div>
                <div class=\"cart-row__remove\">
                  <button class=\"cart-row__remove_button\" onclick=\"cart.remove('";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 38);
                    echo "');\"><img src=\"/catalog/view/theme/default/images/i-trash.svg\"></button>
                </div>
                ";
                }
                // line 41
                echo "              </div>
\t\t\t\t\t\t</div>


            ";
                // line 77
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 80
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"text-center\"></div>
\t\t\t\t\t\t\t<div class=\"text-left\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 82);
                echo "</div>
\t\t\t\t\t\t\t<div class=\"text-right\">x&nbsp;1</div>
\t\t\t\t\t\t\t<div class=\"text-right\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 84);
                echo "</div>
\t\t\t\t\t\t\t<div class=\"text-center text-danger\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 86);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"cart-footer\">

          <div class=\"cart-footer__totals\">
          ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 99
                echo "            <div class=\"cart-footer__totals_row\">
              <div class=\"cart-footer__totals_left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 100);
                echo "</div>
              <div class=\"cart-footer__totals_right\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 101);
                echo "</div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "          </div>

\t\t\t\t\t";
            // line 116
            echo "
\t\t\t\t\t<div class=\"cart-buttons\">
\t\t\t\t\t\t";
            // line 119
            echo "            <a class=\"btn btn-blue\" href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i>";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        } else {
            // line 124
            echo "\t\t\t<li>
\t\t\t\t<p class=\"text-center\">";
            // line 125
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t</li>
\t\t";
        }
        // line 128
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 128,  247 => 125,  244 => 124,  233 => 119,  229 => 116,  225 => 104,  216 => 101,  212 => 100,  209 => 99,  205 => 98,  197 => 92,  183 => 86,  178 => 84,  173 => 82,  169 => 80,  164 => 79,  157 => 77,  151 => 41,  145 => 38,  140 => 36,  136 => 35,  126 => 32,  122 => 31,  119 => 30,  117 => 29,  113 => 27,  106 => 25,  102 => 23,  99 => 22,  96 => 21,  86 => 19,  82 => 17,  77 => 16,  75 => 15,  69 => 14,  65 => 12,  61 => 11,  57 => 9,  55 => 8,  49 => 5,  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}
