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
class __TwigTemplate_b6a79130f2f28faa03e811f972cd87bf8f697edaccd89b8923e70e929676a68f extends \Twig\Template
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
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Электрика</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t\t<ul class=\"sub-menu\" style=\"display: none;\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Аксессуары и комплектующие</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Датчики</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Источники бемперебойного питания</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Кабеленесущие системы</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Кабель и провод</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Комплектующие для ПК</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Отопление</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t\t<ul class=\"sub-menu\" style=\"display: none;\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Аксессуары и комплектующие</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Датчики</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Источники бемперебойного питания</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Кабеленесущие системы</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Кабель и провод</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">1Комплектующие для ПК</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Водоснабжение</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Насосы</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Детали трубопровода</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Санфаянс</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Запорная арматура</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Водонагреватели</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Отопление</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Водоснабжение</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Насосы</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Детали трубопровода</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Санфаянс</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Запорная арматура</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span>Водонагреватели</span><img src=\"images/angl-right.svg\"></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

";
        }
        // line 111
        echo "
";
        // line 112
        if (($context["categories"] ?? null)) {
            // line 113
            echo "\t<div class=\"container\">
\t\t<nav id=\"menu\" class=\"navbar\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span id=\"category\" class=\"visible-xs\">";
            // line 116
            echo ($context["text_category"] ?? null);
            echo "</span>
\t\t\t\t<button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 124
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 126);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 126);
                    echo "</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 129), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 129)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 129), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 131
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 132
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 133
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 133);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 133);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 139);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 140);
                    echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                } else {
                    // line 144
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 145);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 145);
                    echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
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
        return array (  256 => 149,  250 => 148,  242 => 145,  239 => 144,  232 => 140,  226 => 139,  223 => 138,  216 => 136,  205 => 133,  202 => 132,  198 => 131,  195 => 130,  191 => 129,  183 => 126,  180 => 125,  177 => 124,  173 => 123,  163 => 116,  158 => 113,  156 => 112,  153 => 111,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
