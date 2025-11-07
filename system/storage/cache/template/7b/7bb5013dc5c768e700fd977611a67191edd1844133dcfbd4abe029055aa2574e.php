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

/* default/template/extension/module/progroman/citymanager/confirm.twig */
class __TwigTemplate_7899908416312bf3d035bd698254df3155018b2c85b7a16b3362bec3ad9af6b2 extends \Twig\Template
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
        echo "<div class=\"prmn-cmngr__confirm\">
    ";
        // line 2
        echo ($context["text_your_city"] ?? null);
        echo " &mdash; <span class=\"prmn-cmngr__confirm-city\">";
        echo ($context["city"] ?? null);
        echo "</span>?
    <div class=\"prmn-cmngr__confirm-btns\">
        <input class=\"prmn-cmngr__confirm-btn btn btn-primary\" value=\"";
        // line 4
        echo ($context["text_yes"] ?? null);
        echo "\" type=\"button\" data-value=\"yes\"
               data-redirect=\"";
        // line 5
        echo ($context["confirm_redirect"] ?? null);
        echo "\">
        <input class=\"prmn-cmngr__confirm-btn btn\" value=\"";
        // line 6
        echo ($context["text_no"] ?? null);
        echo "\" type=\"button\" data-value=\"no\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/progroman/citymanager/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  51 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/progroman/citymanager/confirm.twig", "");
    }
}
