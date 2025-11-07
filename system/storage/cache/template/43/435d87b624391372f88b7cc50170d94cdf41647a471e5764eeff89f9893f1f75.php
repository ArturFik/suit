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

/* default/template/extension/module/storereviews.twig */
class __TwigTemplate_b3ee9c2c0b85b9db23dca42c93e5df29cc22138cdbfda53f69d171ef07ad9c40 extends \Twig\Template
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
        echo "<div class=\"comment-list\">
\t";
        // line 2
        if (($context["module_header"] ?? null)) {
            // line 3
            echo "\t<div class=\"title\"><h2>";
            echo ($context["module_header"] ?? null);
            echo "</h2></div>
\t";
        }
        // line 5
        echo "  
\t<div class=\"comment-list__content\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 8
            echo "\t\t<div class=\"comment__item\">
\t\t\t<div class=\"comment__item-top\">
\t\t\t\t";
            // line 11
            echo "\t\t\t\t<div class=\"comment__item-name\"><b>";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["review"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["author"] ?? null) : null);
            echo "</b><small>";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["review"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["date_added"] ?? null) : null);
            echo "</small></div>
\t\t\t\t<div class=\"comment__rating\">
\t\t\t\t\t<span>";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 13);
            echo "</span>
\t\t\t\t\t<div class=\"star\">
\t\t\t\t\t\t";
            // line 15
            $context["i"] = 1;
            // line 16
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                echo "\t\t\t\t\t\t";
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["review"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["rating"] ?? null) : null) < $context["i"])) {
                    // line 18
                    echo "\t\t\t\t\t\t<img src=\"/catalog/view/theme/default/images/star.svg\">
\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t<img class=\"_active\" src=\"/catalog/view/theme/default/images/star.svg\">
\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"comment__item-text\">";
            // line 26
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["review"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["text"] ?? null) : null);
            echo "</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/storereviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  102 => 26,  97 => 23,  91 => 22,  87 => 20,  83 => 18,  80 => 17,  75 => 16,  73 => 15,  68 => 13,  60 => 11,  56 => 8,  52 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/storereviews.twig", "");
    }
}
