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

/* default/template/common/header.twig */
class __TwigTemplate_a0f6ca9bb40f9738143042cbccfd896ceb7a1cf3869c1ef05978fe7cced03fcc extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 13
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 14
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 15
        if (($context["description"] ?? null)) {
            // line 16
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 18
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 19
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 21
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>

<body class=\"body-main\">

  <header class=\"header\">
    <div class=\"container\">
      <div class=\"header__content\">
        <div class=\"header__top\">
          <div class=\"header__top-left\">
            <div class=\"header__location\"><img src=\"images/i-map.svg\"><span>Екатеринбург</span>
            </div>
          </div>
          <div class=\"header__top-nav\"><a href=\"#\">О компании</a><a href=\"#\">Акции</a><a href=\"#\">Оплата</a><a href=\"#\">Сервис</a><a href=\"#\">Статьи</a><a href=\"#\">Контакты</a></div>
          <div class=\"header__top-right\"><a href=\"tel:+7 (000) 000 - 00 - 00\">+7 (000) 000 - 00 - 00</a><a href=\"mailto:mail@mail.ru\">mail@mail.ru</a></div>
        </div>
        <div class=\"header__bottom\"><a class=\"header__logo\" href=\"#\"><img class=\"logo-desc\" src=\"images/logo.png\"><img class=\"logo-mob\" src=\"images/logo-mob.svg\"><img src=\"images/logo-text.svg\"></a><a class=\"header__catalog\" href=\"#\"><img src=\"images/i-catalog.svg\"><span>Каталог</span></a>
          <div class=\"header__search\">
            <input class=\"input\" type=\"text\" placeholder=\"Найти на сайте или подгрузите счет конкурента\">
            <button type=\"submit\"><img src=\"images/i-search.svg\">
            </button>
          </div><a class=\"toggler header__calc\" href=\"javascript:;\" data-target=\"request-pay\"><img src=\"images/i-calc.svg\"><span>Заявка на расчет</span></a>
          <div class=\"header__bottom-nav\"><a href=\"#\"><img src=\"images/i-bag.svg\"></a><a href=\"#\"><img src=\"images/i-graph.svg\"></a><a href=\"#\"><img src=\"images/i-bookmark.svg\"></a><a href=\"#\"><img src=\"images/i-avatar.svg\"></a></div>
          <div class=\"header__mob-nav\"><a href=\"#\"><img src=\"images/i-mob-nav.svg\"></a></div>
        </div>
        <div class=\"header__catalog-content\">
          <div class=\"header__catalog-title\">Каталог продукции</div>
          <div class=\"header__catalog-nav bl_scroll\">
            <ul>
              <li><a href=\"#\"><span>Электрика</span><img src=\"images/angl-right.svg\"></a>
                <ul class=\"sub-menu\" style=\"display: none;\">
                  <li><a href=\"#\">Аксессуары и комплектующие</a></li>
                  <li><a href=\"#\">Датчики</a></li>
                  <li><a href=\"#\">Источники бемперебойного питания</a></li>
                  <li><a href=\"#\">Кабеленесущие системы</a></li>
                  <li><a href=\"#\">Кабель и провод</a></li>
                  <li><a href=\"#\">Комплектующие для ПК</a></li>
                </ul>
              </li>
              <li><a href=\"#\"><span>Отопление</span><img src=\"images/angl-right.svg\"></a>
                <ul class=\"sub-menu\" style=\"display: none;\">
                  <li><a href=\"#\">1Аксессуары и комплектующие</a></li>
                  <li><a href=\"#\">1Датчики</a></li>
                  <li><a href=\"#\">1Источники бемперебойного питания</a></li>
                  <li><a href=\"#\">1Кабеленесущие системы</a></li>
                  <li><a href=\"#\">1Кабель и провод</a></li>
                  <li><a href=\"#\">1Комплектующие для ПК</a></li>
                </ul>
              </li>
              <li><a href=\"#\"><span>Водоснабжение</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Насосы</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Детали трубопровода</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Санфаянс</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Запорная арматура</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Водонагреватели</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Отопление</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Водоснабжение</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Насосы</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Детали трубопровода</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Санфаянс</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Запорная арматура</span><img src=\"images/angl-right.svg\"></a></li>
              <li><a href=\"#\"><span>Водонагреватели</span><img src=\"images/angl-right.svg\"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>










  <!-- <nav id=\"top\">
    <div class=\"container\">";
        // line 118
        echo ($context["currency"] ?? null);
        echo "
      ";
        // line 119
        echo ($context["language"] ?? null);
        echo "
      <div id=\"top-links\" class=\"nav pull-right\">
        <ul class=\"list-inline\">
          <li><a href=\"";
        // line 122
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
          <li class=\"dropdown\"><a href=\"";
        // line 123
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 125
        if (($context["logged"] ?? null)) {
            // line 126
            echo "              <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 127
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 128
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 129
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 130
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 132
            echo "              <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 133
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              ";
        }
        // line 135
        echo "            </ul>
          </li>
          <li><a href=\"";
        // line 137
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
          <li><a href=\"";
        // line 138
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
          <li><a href=\"";
        // line 139
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <div id=\"logo\">";
        // line 148
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 149
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
            ";
        }
        // line 151
        echo "          </div>
        </div>
        <div class=\"col-sm-5\">";
        // line 153
        echo ($context["search"] ?? null);
        echo "</div>
        <div class=\"col-sm-3\">";
        // line 154
        echo ($context["cart"] ?? null);
        echo "</div>
      </div>
    </div>
  </header>
  ";
        // line 158
        echo ($context["menu"] ?? null);
        echo " -->";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 158,  379 => 154,  375 => 153,  371 => 151,  363 => 149,  351 => 148,  335 => 139,  327 => 138,  319 => 137,  315 => 135,  308 => 133,  301 => 132,  294 => 130,  288 => 129,  282 => 128,  276 => 127,  269 => 126,  267 => 125,  258 => 123,  252 => 122,  246 => 119,  242 => 118,  162 => 40,  153 => 38,  148 => 37,  137 => 35,  133 => 34,  130 => 33,  121 => 31,  116 => 30,  103 => 28,  99 => 27,  91 => 21,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
