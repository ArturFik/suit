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

/* default/template/extension/module/blog_latest.twig */
class __TwigTemplate_fd0f3229909ebc7dadb907fb80d6747704bba0e3af0cc2e2f1836612a4fdad1a extends \Twig\Template
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
        echo "<div class=\"article-list\">
    <div class=\"title\">
      <h2>";
        // line 3
        echo ($context["heading_title_latest"] ?? null);
        echo "</h2>
    </div>
    <div class=\"article-list__content\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
      <a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 7);
            echo "\" class=\"article-list__item\">
        ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 8) && ($context["thumb"] ?? null))) {
                echo " 
        <div class=\"article-list__img\"><img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 9);
                echo "\"></div>
        ";
            }
            // line 10
            echo " 
        <div class=\"article-list__title\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 11);
            echo "</div>
        ";
            // line 12
            if (( !($context["characters"] ?? null) == "0")) {
                echo " 
        <div class=\"article-list__text\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 13);
                echo "</div>
        ";
            }
            // line 14
            echo " 
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
    </div>
  </div>



";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  82 => 14,  77 => 13,  73 => 12,  69 => 11,  66 => 10,  61 => 9,  57 => 8,  53 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/blog_latest.twig", "");
    }
}
