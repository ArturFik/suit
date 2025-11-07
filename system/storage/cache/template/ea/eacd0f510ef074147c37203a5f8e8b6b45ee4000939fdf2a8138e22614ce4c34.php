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

/* default/template/blog/comment.twig */
class __TwigTemplate_5c7d69ec3ce2f53bb14f24a670b9f2f65a3d3c0de4835cd2ee9636a79935a3b9 extends \Twig\Template
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
        if (($context["comments"] ?? null)) {
            echo " 
";
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                echo " 
<div class=\"blog_comment\">
<p><b>";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 4);
                echo "</b> - ";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 4);
                echo "</p>
<p>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 5);
                echo "</p>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "<div class=\"text-right\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 9
            echo "   
<div class=\"blog_comment\">
<p>";
            // line 11
            echo ($context["text_no_comment"] ?? null);
            echo "</p>
</div>
";
        }
        // line 13
        echo " 
 ";
    }

    public function getTemplateName()
    {
        return "default/template/blog/comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 11,  69 => 9,  63 => 8,  54 => 5,  48 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/comment.twig", "");
    }
}
