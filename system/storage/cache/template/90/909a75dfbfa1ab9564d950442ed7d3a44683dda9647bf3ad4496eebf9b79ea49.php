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
class __TwigTemplate_8016f72386ca577a4297ddb67a7bbfabbde9ccbbf955800be0f2ee9dd24dfe3f extends \Twig\Template
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
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        // line 24
        echo "  ";
        // line 25
        echo "  ";
        // line 26
        echo "  ";
        // line 27
        echo "
  <link rel=\"shortcut icon\" href=\"catalog/view/theme/default/static/favicon.ico\" type=\"image/x-icon\">
  ";
        // line 30
        echo "  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  

  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 43
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 43);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 43);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 46
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</head>




<body class=\"body-main\">
  <header class=\"header\">
    <div class=\"container\">
      <div class=\"header__content\">
        <div class=\"header__top\">
          <div class=\"header__top-left\">
            <div class=\"header__location\">
              <img src=\"images/i-map.svg\">
              <span class=\"prmn-cmngr\" data-confirm=\"false\"></span>
            </div>
          </div>
          <div class=\"header__top-nav\">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 66
            echo "              <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 66);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 66);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "          </div>
          <div class=\"header__top-right\">
            <a href=\"tel:";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "phone", 1 => ($context["telephone"] ?? null)], "method", false, false, false, 70);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "phone", 1 => ($context["telephone"] ?? null)], "method", false, false, false, 70);
        echo "</a>
            <a href=\"mailto:";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "email", 1 => ($context["email"] ?? null)], "method", false, false, false, 71);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "email", 1 => ($context["email"] ?? null)], "method", false, false, false, 71);
        echo "</a>
          </div>
        </div>
        <div class=\"header__bottom\">
          <a class=\"header__logo\" href=\"#\">
            <img class=\"logo-desc\" src=\"images/logo.png\">
            <img class=\"logo-mob\" src=\"images/logo-mob.svg\">
            <img src=\"images/logo-text.svg\">
          </a>
          <a class=\"header__catalog\" href=\"#\">
            <img src=\"images/i-catalog.svg\">
            <span>";
        // line 82
        echo ($context["text_catalog_n"] ?? null);
        echo "</span>
          </a>
          <div class=\"header__search\">
            <input class=\"input\" type=\"text\" placeholder=\"";
        // line 85
        echo ($context["palceholder_search_n"] ?? null);
        echo "\">
            <button type=\"submit\"><img src=\"images/i-search.svg\">
            </button>
          </div><a class=\"toggler header__calc\" href=\"javascript:;\" data-target=\"request-pay\"><img src=\"images/i-calc.svg\"><span>";
        // line 88
        echo ($context["text_payment_request_n"] ?? null);
        echo "</span></a>
          <div class=\"header__bottom-nav\">
            ";
        // line 90
        echo ($context["cart"] ?? null);
        echo "
            <a href=\"";
        // line 91
        echo ($context["compare"] ?? null);
        echo "\"><img src=\"images/i-graph.svg\"></a>
            <a href=\"";
        // line 92
        echo ($context["wishlist"] ?? null);
        echo "\"><img src=\"images/i-bookmark.svg\"></a>
            <a href=\"";
        // line 93
        echo ($context["account"] ?? null);
        echo "\"><img src=\"images/i-avatar.svg\"></a>
          </div>
          <div class=\"header__mob-nav\"><a href=\"#\"><img src=\"images/i-mob-nav.svg\"></a></div>
        </div>
        ";
        // line 97
        echo ($context["menu"] ?? null);
        echo "
      </div>
    </div>
  </header>










  ";
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
        return array (  273 => 97,  266 => 93,  262 => 92,  258 => 91,  254 => 90,  249 => 88,  243 => 85,  237 => 82,  221 => 71,  215 => 70,  211 => 68,  200 => 66,  196 => 65,  177 => 48,  168 => 46,  163 => 45,  152 => 43,  148 => 42,  145 => 41,  136 => 39,  131 => 38,  118 => 36,  114 => 35,  107 => 30,  103 => 27,  101 => 26,  99 => 25,  97 => 24,  95 => 23,  93 => 22,  91 => 21,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
