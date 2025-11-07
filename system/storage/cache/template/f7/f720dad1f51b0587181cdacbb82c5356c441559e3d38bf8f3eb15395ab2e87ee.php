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

/* extension/module/progroman_citymanager/currencies.twig */
class __TwigTemplate_45cca4d538e035d7cbb3a25fa02e2ae3e7c5a3b60ab7e9c8cf912fe272f95416 extends \Twig\Template
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
        echo "<div class=\"for-general-form\">
  <div class=\"form-group\">
    <label class=\"control-label\">
      <input name=\"setting[enable_switch_currency]\" value=\"1\" type=\"checkbox\"
      ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_switch_currency", [], "any", false, false, false, 5)) ? (" checked=\"checked\"") : (""));
        echo ">
      ";
        // line 6
        echo ($context["entry_sub_enabled"] ?? null);
        echo "
    </label>
  </div>
</div>

<form action=\"";
        // line 11
        echo ($context["action_currencies"] ?? null);
        echo "\" class=\"main-form\" data-submit=\"saveCurrencies\">
  <table id=\"currencies\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <td>
        <div class=\"row\">
          <div class=\"col-sm-5 col-xs-12\">
            ";
        // line 18
        echo ($context["entry_country"] ?? null);
        echo "
          </div>
          <div class=\"col-sm-5 col-xs-12\">
            ";
        // line 21
        echo ($context["entry_currency"] ?? null);
        echo "
          </div>
        </div>
      </td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 28
        $context["currency_row"] = 0;
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cm_currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cm_currency"]) {
            // line 30
            echo "      <tr id=\"currency-row";
            echo ($context["currency_row"] ?? null);
            echo "\">
        <td>
          <div class=\"row\">
            <div class=\"col-sm-5 col-xs-12\">
              <select name=\"currencies[";
            // line 34
            echo ($context["currency_row"] ?? null);
            echo "][country_id]\" class=\"form-control\">
                <option value=\"0\">";
            // line 35
            echo ($context["text_none"] ?? null);
            echo "</option>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 37
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 37);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["cm_currency"], "country_id", [], "any", false, false, false, 37))) ? ("selected") : (""));
                echo ">
                    ";
                // line 38
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["country"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "              </select>
            </div>
            <div class=\"col-sm-5 col-xs-12\">
              <select name=\"currencies[";
            // line 44
            echo ($context["currency_row"] ?? null);
            echo "][code]\" class=\"form-control\">
                <option value=\"0\">";
            // line 45
            echo ($context["text_none"] ?? null);
            echo "</option>
                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 47
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 47);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, $context["cm_currency"], "code", [], "any", false, false, false, 47))) ? (" selected") : (""));
                echo ">
                    ";
                // line 48
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["currency"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "              </select>
            </div>
            <div class=\"col-sm-2 col-xs-12\">
              <a onclick=\"\$('#currency-row";
            // line 54
            echo ($context["currency_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
                <i class=\"fa fa-remove visible-xs\"></i>
                <span class=\"hidden-xs\">";
            // line 56
            echo ($context["button_remove"] ?? null);
            echo "</span>
              </a>
            </div>
          </div>
        </td>
      </tr>
      ";
            // line 62
            $context["currency_row"] = (($context["currency_row"] ?? null) + 1);
            // line 63
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cm_currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </tbody>
    <tfoot>
    <tr>
      <th>
        <a class=\"btn btn-success\" onclick=\"addCurrency();\">
          ";
        // line 69
        echo ($context["button_add"] ?? null);
        echo "
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</form>

<select id=\"select-countries\" class=\"hidden\">
  <option value=\"0\">";
        // line 78
        echo ($context["text_none"] ?? null);
        echo "</option>
  ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 80
            echo "    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 80);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 80);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</select>
<select id=\"select-currencies\" class=\"hidden\">
  <option value=\"0\">";
        // line 84
        echo ($context["text_none"] ?? null);
        echo "</option>
  ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 86
            echo "    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 86);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 86);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</select>

<script type=\"text/javascript\">
    var currency_row = ";
        // line 91
        echo ($context["currency_row"] ?? null);
        echo ";

    function addCurrency() {
        var html = '<tr id=\"currency-row' + currency_row + '\"><td>';
        html += '<div class=\"row\"><div class=\"col-sm-5 col-xs-12\">';
        html += '<select name=\"currencies[' + currency_row + '][country_id]\" class=\"form-control\">';
        html += \$('#select-countries').html();
        html += '</select>';
        html += '</div><div class=\"col-sm-5 col-xs-12\">';
        html += '<select name=\"currencies[' + currency_row + '][code]\" class=\"form-control\">';
        html += \$('#select-currencies').html();
        html += '</select>';
        html += '</div><div class=\"col-sm-2 col-md-12\">';
        html += '<a onclick=\"\$(\\'#currency-row' + currency_row + '\\').remove();\" class=\"btn btn-danger\">';
        html += '<i class=\"fa fa-remove visible-xs\"></i><span class=\"hidden-xs\">";
        // line 105
        echo ($context["button_remove"] ?? null);
        echo "</span></a>';
        html += '</div></div></td></tr>';

        \$('#currencies').find('tbody').append(html);

        currency_row++;
    }

    function saveCurrencies(callback) {
        var form = \$('#tab-currencies').find('form');
        form.find('.text-danger').remove();
        \$.post(form.attr('action'), form.serialize(),
            function(json) {
                if (json.errors) {
                    for (i in json.errors.country) {
                        \$('#currency-row' + i).find('select[name=\"currencies\\[' + i + '\\]\\[country_id\\]\"]')
                            .after('<p class=\"text-danger\">' + json.errors.country[i] + '</p>');
                    }
                    for (i in json.errors.code) {
                        \$('#currency-row' + i).find('select[name=\"currencies\\[' + i + '\\]\\[code\\]\"]')
                            .after('<p class=\"text-danger\">' + json.errors.code[i] + '</p>');
                    }
                    \$('#tabs').find('a[href=\"#tab-currencies\"]').tab('show');
                }

                if (callback) {
                    callback.call(this, !json.errors);
                }
            }, 'json');
    }
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/currencies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 105,  250 => 91,  245 => 88,  234 => 86,  230 => 85,  226 => 84,  222 => 82,  211 => 80,  207 => 79,  203 => 78,  191 => 69,  184 => 64,  178 => 63,  176 => 62,  167 => 56,  162 => 54,  157 => 51,  148 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  124 => 41,  115 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  88 => 30,  83 => 29,  81 => 28,  71 => 21,  65 => 18,  55 => 11,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/currencies.twig", "");
    }
}
