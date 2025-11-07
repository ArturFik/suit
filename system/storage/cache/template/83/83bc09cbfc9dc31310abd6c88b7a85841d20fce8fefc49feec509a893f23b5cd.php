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

/* default/template/common/menu.twig */
class __TwigTemplate_53a428cd9c92a39e2084c74e2642ae6563f10d3a66d9aa995f7a3f2c630f85d4 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<div class=\"header__catalog-content\">
\t\t<div class=\"header__catalog-title\">";
            // line 3
            echo ($context["text_catalog_02_n"] ?? null);
            echo "</div>
\t\t<div class=\"header__catalog-nav bl_scroll\">
\t\t\t<ul>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "          <li>
\t\t\t\t\t  <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t\t\t  <span>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "</span>
              ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) {
                    echo "<img src=\"images/angl-right.svg\">";
                }
                // line 11
                echo "            </a>
            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "              <ul class=\"sub-menu\" style=\"display: none;\">
                ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        echo "                  <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["children"], "href", [], "any", false, false, false, 15);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["children"], "name", [], "any", false, false, false, 15);
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "              </ul>
            ";
                }
                // line 19
                echo "\t\t\t\t  </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</ul>
\t\t</div>
    <div class=\"menu-information\">Если чего-то нет на сайте, <strong>свяжитесь с нами, найдем!</strong></div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  94 => 19,  90 => 17,  79 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
