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

/* extension/module/progroman_citymanager/bases.twig */
class __TwigTemplate_da9ca36e0246524635aef9f5e8ac549b5ab15d8d2243a0374e8eb0b44c327cfe extends \Twig\Template
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
        echo "<table class=\"table table-striped table-bordered\">
  <tbody>
    <tr>
      <td><b>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["base_ip"] ?? null), "getName", [], "method", false, false, false, 4);
        echo "</b></td>
      <td>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["base_ip"] ?? null), "getStatus", [], "method", false, false, false, 5);
        echo "</td>
      <td>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["base_ip"] ?? null), "getActions", [], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 8
            echo "          <a class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getCssClass", [], "method", false, false, false, 8);
            echo " base-action btn\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getName", [], "method", false, false, false, 8);
            echo "\" data-action=\"";
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getActionId", [], "method", false, false, false, 8);
            echo "\"
            data-text=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getLoadingText", [], "method", false, false, false, 9);
            echo "...\">
            <i class=\"fa fa-";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 10);
            echo "\"></i>
          </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </td>
    </tr>
  </tbody>
</table>

<h4>";
        // line 18
        echo ($context["text_database_cities"] ?? null);
        echo "</h4>
";
        // line 19
        if (twig_test_empty(($context["is_loaded_fias"] ?? null))) {
            // line 20
            echo "<p class=\"text-danger\">";
            echo ($context["text_fias_not_loaded"] ?? null);
            echo "</p>
";
        }
        // line 22
        echo "<table class=\"table table-striped table-bordered\">
  <tbody>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["download_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["download_file"]) {
            // line 25
            echo "    <tr>
      <td><b>";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["download_file"], "getName", [], "method", false, false, false, 26);
            echo "</b></td>
      <td>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["download_file"], "getStatus", [], "method", false, false, false, 27);
            echo "</td>
      <td>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["download_file"], "getActions", [], "method", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 30
                echo "          <a class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getCssClass", [], "method", false, false, false, 30);
                echo " base-action btn\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getName", [], "method", false, false, false, 30);
                echo "\" data-action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getActionId", [], "method", false, false, false, 30);
                echo "\"
             data-text=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getLoadingText", [], "method", false, false, false, 31);
                echo "...\">
            <i class=\"fa fa-";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["action"], "getIcon", [], "method", false, false, false, 32);
                echo "\"></i>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </tbody>
</table>

";
        // line 41
        if ((($context["countries_not_found"] ?? null) || ($context["zones_not_found"] ?? null))) {
            // line 42
            echo "  <div class=\"alert alert-warning col-xs-12\">
      ";
            // line 43
            echo ($context["text_regions_info"] ?? null);
            echo "
  </div>
";
        }
        // line 46
        if (($context["countries_not_found"] ?? null)) {
            // line 47
            echo "  <h4>";
            echo ($context["text_no_relative_countries"] ?? null);
            echo "</h4>
  ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries_not_found"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 49
                echo "    <div class=\"col-sm-6 col-xs-12\">";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["country"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["offname"] ?? null) : null);
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  <br><br>
";
        }
        // line 53
        if (($context["zones_not_found"] ?? null)) {
            // line 54
            echo "  <h4>";
            echo ($context["text_no_relative_zones"] ?? null);
            echo "</h4>
  ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["zones_not_found"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
                // line 56
                echo "    <div class=\"col-sm-6 col-xs-12\">";
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "offname", [], "any", false, false, false, 56);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "shortname", [], "any", false, false, false, 56);
                echo ",  ";
                echo twig_get_attribute($this->env, $this->source, $context["zone"], "parent_name", [], "any", false, false, false, 56);
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/bases.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 56,  197 => 55,  192 => 54,  190 => 53,  186 => 51,  177 => 49,  173 => 48,  168 => 47,  166 => 46,  160 => 43,  157 => 42,  155 => 41,  150 => 38,  142 => 35,  133 => 32,  129 => 31,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  104 => 25,  100 => 24,  96 => 22,  90 => 20,  88 => 19,  84 => 18,  77 => 13,  68 => 10,  64 => 9,  55 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/bases.twig", "");
    }
}
