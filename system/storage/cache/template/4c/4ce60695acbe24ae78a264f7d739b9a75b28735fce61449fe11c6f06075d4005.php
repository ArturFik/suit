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

/* default/template/extension/module/progroman/citymanager/content.twig */
class __TwigTemplate_3f26c1dde8bff817b598fa0da08c09bf14c2380dbd4d621450788f67f0dbade4 extends \Twig\Template
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
        echo "<div class=\"prmn-cmngr__content\">
  <div class=\"prmn-cmngr__title\">
    <span class=\"prmn-cmngr__title-text\">";
        // line 3
        echo ($context["text_zone"] ?? null);
        echo "</span>
    <a class=\"prmn-cmngr__city\">
      <span class=\"fa fa-map-marker\"></span> <span class=\"prmn-cmngr__city-name\">";
        // line 5
        echo ($context["city"] ?? null);
        echo "</span>
    </a>
  </div>
  ";
        // line 8
        echo ($context["confirm"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/progroman/citymanager/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/progroman/citymanager/content.twig", "");
    }
}
