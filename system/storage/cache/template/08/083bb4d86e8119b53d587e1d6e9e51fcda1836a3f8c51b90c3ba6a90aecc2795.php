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
class __TwigTemplate_beb0678d7b6c01833c002d61307e2cb228b00334592ad6c54527517cff78c93c extends \Twig\Template
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
  <div class=\"modal-dialog-01\">
    <div class=\"modal__content\">
      <button type=\"button\" class=\"prmn-cmngr-cities__close modal__close\" data-dismiss=\"modal\">
        <img src=\"/catalog/view/theme/default/images/close.svg\">
      </button>
      <div class=\"modal__body modal__form\">
        
        <h3 class=\"prmn-cmngr-cities__title\">";
        // line 9
        echo ($context["text_your_city"] ?? null);
        echo ": ";
        echo ($context["city"] ?? null);
        echo "</h3>

        <div class=\"prmn-cmngr-cities__search-block modal__row\">
          <div class=\"form__row\">
            <input class=\"prmn-cmngr-cities__search form-control input\" type=\"text\" placeholder=\"";
        // line 13
        echo ($context["text_search"] ?? null);
        echo "\">
          </div>
        </div>

        <div class=\"prmn-cmngr-cities__row row clearfix\">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 19
            echo "            <div class=\"col-xs-6 col-sm-6 col-12\">
              ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 21
                echo "                <div class=\"prmn-cmngr-cities__city\">
                  <a class=\"prmn-cmngr-cities__city-name\" data-id=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["city"], "fias_id", [], "any", false, false, false, 22);
                echo "\"
                  ";
                // line 23
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["city"], "url", [], "any", false, false, false, 23))) ? ((("href=\"" . twig_get_attribute($this->env, $this->source, $context["city"], "url", [], "any", false, false, false, 23)) . "\"")) : (""));
                echo ">
                    ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 24);
                echo "
                  </a>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return array (  103 => 30,  96 => 28,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  71 => 20,  68 => 19,  64 => 18,  56 => 13,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/progroman/citymanager/cities.twig", "");
    }
}
