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

/* default/template/extension/module/progroman/citymanager/cities.twig */
class __TwigTemplate_6a4dfaf90e3a481cde8b722d47608b115b46dbe4b82f74c612c9c8e01701f26a extends \Twig\Template
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
        echo "<div class=\"modal fade prmn-cmngr-cities\" id=\"prmn-cmngr-cities\" tabindex=\"-1\" role=\"dialog\" data-show=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"prmn-cmngr-cities__close\" data-dismiss=\"modal\">
          <span>&times;</span>
        </button>
        <h4 class=\"prmn-cmngr-cities__title\">";
        // line 8
        echo ($context["text_your_city"] ?? null);
        echo ": ";
        echo ($context["city"] ?? null);
        echo "</h4>

        <div class=\"prmn-cmngr-cities__search-block\">
          <div class=\"form-group\">
            <input class=\"prmn-cmngr-cities__search form-control\" type=\"text\" placeholder=\"";
        // line 12
        echo ($context["text_search"] ?? null);
        echo "\">
          </div>
        </div>
        <div class=\"row clearfix\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 17
            echo "            <div class=\"col-xs-4 col-sm-4 col-12\">
              ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 19
                echo "                <div class=\"prmn-cmngr-cities__city\">
                  <a class=\"prmn-cmngr-cities__city-name\" data-id=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["city"], "fias_id", [], "any", false, false, false, 20);
                echo "\"
                  ";
                // line 21
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["city"], "url", [], "any", false, false, false, 21))) ? ((("href=\"" . twig_get_attribute($this->env, $this->source, $context["city"], "url", [], "any", false, false, false, 21)) . "\"")) : (""));
                echo ">
                    ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 22);
                echo "
                  </a>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/progroman/citymanager/cities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  94 => 26,  84 => 22,  80 => 21,  76 => 20,  73 => 19,  69 => 18,  66 => 17,  62 => 16,  55 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/progroman/citymanager/cities.twig", "");
    }
}
