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
class __TwigTemplate_f8183597270a3f4cc1af4a53d101f5cf1c916bcc2e541b8ed052b5892f52d4a0 extends \Twig\Template
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
              <img src=\"/catalog/view/theme/default/images/i-map.svg\">
              <span class=\"prmn-cmngr\" data-confirm=\"false\"></span>
            </div>
          </div>
          <div class=\"header__top-nav\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 63
            echo "              <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 63);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 63);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          </div>
          <div class=\"header__top-right\">
            <a href=\"tel:";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "phone", 1 => ($context["telephone"] ?? null)], "method", false, false, false, 67);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "phone", 1 => ($context["telephone"] ?? null)], "method", false, false, false, 67);
        echo "</a>

            <a href=\"";
        // line 69
        echo ($context["telegram_link"] ?? null);
        echo "\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M21.997 12C21.997 17.5228 17.5198 22 11.997 22C6.47415 22 1.99699 17.5228 1.99699 12C1.99699 6.47715 6.47415 2 11.997 2C17.5198 2 21.997 6.47715 21.997 12ZM12.3553 9.38244C11.3827 9.787 9.43876 10.6243 6.52356 11.8944C6.05018 12.0827 5.8022 12.2669 5.77962 12.4469C5.74147 12.7513 6.12258 12.8711 6.64155 13.0343C6.71214 13.0565 6.78528 13.0795 6.86026 13.1038C7.37085 13.2698 8.05767 13.464 8.41472 13.4717C8.7386 13.4787 9.10009 13.3452 9.49918 13.0711C12.2229 11.2325 13.629 10.3032 13.7172 10.2831C13.7795 10.269 13.8658 10.2512 13.9243 10.3032C13.9828 10.3552 13.977 10.4536 13.9708 10.48C13.9331 10.641 12.4371 12.0318 11.6629 12.7515C11.4216 12.9759 11.2504 13.135 11.2154 13.1714C11.137 13.2528 11.0571 13.3298 10.9803 13.4038C10.506 13.8611 10.1502 14.204 11 14.764C11.4083 15.0331 11.7351 15.2556 12.0611 15.4776C12.4171 15.7201 12.7722 15.9619 13.2317 16.2631C13.3487 16.3398 13.4605 16.4195 13.5694 16.4971C13.9837 16.7925 14.3559 17.0579 14.8158 17.0155C15.083 16.991 15.359 16.7397 15.4992 15.9903C15.8305 14.2193 16.4817 10.382 16.6322 8.80081C16.6454 8.66228 16.6288 8.48498 16.6154 8.40715C16.6021 8.32932 16.5743 8.21842 16.4731 8.13633C16.3533 8.03911 16.1683 8.01861 16.0856 8.02C15.7095 8.0267 15.1324 8.22735 12.3553 9.38244Z\" stroke=\"#ffffffba\" stroke-linejoin=\"round\"/></svg>
            </a>
            <a href=\"";
        // line 72
        echo ($context["whatsapp_link"] ?? null);
        echo "\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 192 192\" fill=\"none\"><path fill=\"#ffffffba\" fill-rule=\"evenodd\" d=\"M96 16c-44.183 0-80 35.817-80 80 0 13.12 3.163 25.517 8.771 36.455l-8.608 36.155a6.002 6.002 0 0 0 7.227 7.227l36.155-8.608C70.483 172.837 82.88 176 96 176c44.183 0 80-35.817 80-80s-35.817-80-80-80ZM28 96c0-37.555 30.445-68 68-68s68 30.445 68 68-30.445 68-68 68c-11.884 0-23.04-3.043-32.747-8.389a6.003 6.003 0 0 0-4.284-.581l-28.874 6.875 6.875-28.874a6.001 6.001 0 0 0-.581-4.284C31.043 119.039 28 107.884 28 96Zm46.023 21.977c11.975 11.974 27.942 20.007 45.753 21.919 11.776 1.263 20.224-8.439 20.224-18.517v-6.996a18.956 18.956 0 0 0-13.509-18.157l-.557-.167-.57-.112-8.022-1.58a18.958 18.958 0 0 0-15.25 2.568 42.144 42.144 0 0 1-7.027-7.027 18.958 18.958 0 0 0 2.569-15.252l-1.582-8.021-.112-.57-.167-.557A18.955 18.955 0 0 0 77.618 52H70.62c-10.077 0-19.78 8.446-18.517 20.223 1.912 17.81 9.944 33.779 21.92 45.754Zm33.652-10.179a6.955 6.955 0 0 1 6.916-1.743l8.453 1.665a6.957 6.957 0 0 1 4.956 6.663v6.996c0 3.841-3.124 6.995-6.943 6.585a63.903 63.903 0 0 1-26.887-9.232 64.594 64.594 0 0 1-11.661-9.241 64.592 64.592 0 0 1-9.241-11.661 63.917 63.917 0 0 1-9.232-26.888C63.626 67.123 66.78 64 70.62 64h6.997a6.955 6.955 0 0 1 6.66 4.957l1.667 8.451a6.956 6.956 0 0 1-1.743 6.917l-1.12 1.12a5.935 5.935 0 0 0-1.545 2.669c-.372 1.403-.204 2.921.603 4.223a54.119 54.119 0 0 0 7.745 9.777 54.102 54.102 0 0 0 9.778 7.746c1.302.806 2.819.975 4.223.603a5.94 5.94 0 0 0 2.669-1.545l1.12-1.12Z\" clip-rule=\"evenodd\"/></svg>
            </a>

            <a href=\"mailto:";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "email", 1 => ($context["email"] ?? null)], "method", false, false, false, 76);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["progroman_citymanager"] ?? null), "getMessage", [0 => "email", 1 => ($context["email"] ?? null)], "method", false, false, false, 76);
        echo "</a>
          </div>
        </div>
        <div class=\"header__bottom\">
          <a class=\"header__logo\" href=\"/\">
            <img class=\"logo-desc\" src=\"/catalog/view/theme/default/images/logo.png\">
            <img class=\"logo-mob\" src=\"/catalog/view/theme/default/images/logo-mob.svg\">
            <img src=\"/catalog/view/theme/default/images/logo-text.svg\">
          </a>
          <a class=\"header__catalog\" href=\"#\">
            <img src=\"/catalog/view/theme/default/images/i-catalog.svg\">
            <span>";
        // line 87
        echo ($context["text_catalog_n"] ?? null);
        echo "</span>
          </a>
          ";
        // line 89
        echo ($context["search"] ?? null);
        echo "
          ";
        // line 90
        echo ($context["formcreator_id42"] ?? null);
        echo "          
          <div class=\"header__bottom-nav\">
            ";
        // line 92
        echo ($context["cart"] ?? null);
        echo "
            <a class=\"header-compare\" href=\"";
        // line 93
        echo ($context["compare"] ?? null);
        echo "\" title=\"";
        echo ($context["title_compare_header"] ?? null);
        echo "\"><img src=\"/catalog/view/theme/default/images/i-graph.svg\"><span id=\"compare-total\">";
        echo ($context["count_compare"] ?? null);
        echo "</span></a>
            <a class=\"header-wishlist\" href=\"";
        // line 94
        echo ($context["wishlist"] ?? null);
        echo "\" title=\"";
        echo ($context["title_wishlist_header"] ?? null);
        echo "\"><img src=\"/catalog/view/theme/default/images/i-bookmark.svg\"><span id=\"wishlist-total\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
            <a href=\"";
        // line 95
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["title_account_header"] ?? null);
        echo "\"><img src=\"/catalog/view/theme/default/images/i-avatar.svg\"></a>
          </div>
          <div class=\"header__mob-nav\"><a href=\"#\"><img src=\"/catalog/view/theme/default/images/i-mob-nav.svg\"></a></div>
        </div>
        ";
        // line 99
        echo ($context["menu"] ?? null);
        echo "
      </div>
    </div>
  </header>
  <main>";
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
        return array (  291 => 99,  282 => 95,  274 => 94,  266 => 93,  262 => 92,  257 => 90,  253 => 89,  248 => 87,  232 => 76,  225 => 72,  219 => 69,  212 => 67,  208 => 65,  197 => 63,  193 => 62,  177 => 48,  168 => 46,  163 => 45,  152 => 43,  148 => 42,  145 => 41,  136 => 39,  131 => 38,  118 => 36,  114 => 35,  107 => 30,  103 => 27,  101 => 26,  99 => 25,  97 => 24,  95 => 23,  93 => 22,  91 => 21,  85 => 19,  82 => 18,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
