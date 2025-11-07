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

/* extension/module/progroman_citymanager/popup.twig */
class __TwigTemplate_cfa715ec7cee8f4f7e9d3e530c823f3a059cc9000f1f711c9eacedf5d402ecb9 extends \Twig\Template
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
        echo "<div class=\"prmn-cmngr-settings__block\">
  <h4>";
        // line 2
        echo ($context["text_popup_guessed"] ?? null);
        echo "</h4>
  <div class=\"for-general-form\">
    <div class=\"form-group form-inline\">
      <label class=\"control-label\">";
        // line 5
        echo ($context["entry_popup_cookie_time"] ?? null);
        echo "</label>
      <select name=\"setting[popup_cookie_time]\" class=\"form-control\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cookie_time_values"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            echo "          <option value=\"";
            echo $context["key"];
            echo "\" ";
            echo (((($context["popup_cookie_time"] ?? null) === $context["key"])) ? ("selected") : (""));
            echo ">
            ";
            // line 9
            echo $context["value"];
            echo "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </select>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[popup_user_answer]\" value=\"1\" type=\"checkbox\"";
        // line 17
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "popup_user_answer", [], "any", false, false, false, 17)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 18
        echo ($context["entry_popup_user_answer"] ?? null);
        echo "
      </label>
    </div>
  </div>
</div>

<div class=\"prmn-cmngr-settings__block\">
  <h4>";
        // line 25
        echo ($context["text_popup_cities"] ?? null);
        echo "</h4>
  <div class=\"for-general-form\">
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[cities_in_source]\" value=\"1\" type=\"checkbox\"";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "cities_in_source", [], "any", false, false, false, 29)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 30
        echo ($context["entry_cities_in_source"] ?? null);
        echo "
      </label>
    </div>
  </div>

  <form action=\"";
        // line 35
        echo ($context["action_popups"] ?? null);
        echo "\" class=\"main-form\" data-submit=\"savePopups\">
    <table id=\"cities\" class=\"table table-striped table-bordered\">
      <thead>
      <tr>
        <td>
          <div class=\"row\">
            <div class=\"col-xs-6\">
              ";
        // line 42
        echo ($context["entry_city"] ?? null);
        echo "
            </div>
            <div class=\"col-xs-3\">
              ";
        // line 45
        echo ($context["entry_sort"] ?? null);
        echo "
            </div>
          </div>
        </td>
      </tr>
      </thead>
      <tbody>
      ";
        // line 52
        $context["city_row"] = 0;
        // line 53
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 54
            echo "        <tr id=\"city-row";
            echo ($context["city_row"] ?? null);
            echo "\">
          <td>
            <div class=\"row\">
              <div class=\"col-xs-6\">
                <input type=\"text\" name=\"popup_cities[";
            // line 58
            echo ($context["city_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 58);
            echo "\"
                       class=\"row-fias-name form-control\" data-short=\"1\"/>
                <input type=\"hidden\" name=\"popup_cities[";
            // line 60
            echo ($context["city_row"] ?? null);
            echo "][fias_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["city"], "fias_id", [], "any", false, false, false, 60);
            echo "\"
                       class=\"row-fias-id\"/>
                <input type=\"hidden\" name=\"popup_cities[";
            // line 62
            echo ($context["city_row"] ?? null);
            echo "][id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 62);
            echo "\"/>
              </div>
              <div class=\"col-xs-3\">
                <input type=\"text\" name=\"popup_cities[";
            // line 65
            echo ($context["city_row"] ?? null);
            echo "][sort]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["city"], "sort", [], "any", false, false, false, 65);
            echo "\"
                       class=\"form-control\"/>
              </div>
              <div class=\"col-xs-2\">
                <a class=\"btn btn-danger\" onclick=\"\$('#city-row";
            // line 69
            echo ($context["city_row"] ?? null);
            echo "').remove();\">
                  <i class=\"fa fa-remove visible-xs\"></i>
                  <span class=\"hidden-xs\">";
            // line 71
            echo ($context["button_remove"] ?? null);
            echo "</span>
                </a>
              </div>
            </div>
          </td>
        </tr>
        ";
            // line 77
            $context["city_row"] = (($context["city_row"] ?? null) + 1);
            // line 78
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "      </tbody>
      <tfoot>
      <tr>
        <th>
          <a class=\"btn btn-success\" onclick=\"addCity();\">
            ";
        // line 84
        echo ($context["button_add"] ?? null);
        echo "
          </a>
        </th>
      </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type=\"text/javascript\">
    var city_row = ";
        // line 93
        echo ($context["city_row"] ?? null);
        echo ";

    function addCity() {
        var html = '<tr id=\"city-row' + city_row + '\"><td><div class=\"row\">';
        html += '<div class=\"col-xs-6\">';
        html += '<input type=\"text\" name=\"popup_cities[' + city_row + '][name]\" class=\"row-fias-name form-control\" data-short=\"1\"/>';
        html += '<input type=\"hidden\" name=\"popup_cities[' + city_row + '][fias_id]\" class=\"row-fias-id\"/>';
        html += '<input type=\"hidden\" name=\"popup_cities[' + city_row + '][id]\" value=\"\"/></div>';
        html += '<div class=\"col-xs-3\"><input type=\"text\" name=\"popup_cities[' + city_row + '][sort]\" value=\"\" class=\"form-control\"/></div>';
        html += '<div class=\"col-xs-2\"><a class=\"btn btn-danger\" onclick=\"\$(\\'#city-row' + city_row + '\\').remove();\">';
        html += '<i class=\"fa fa-remove visible-xs\"></i><span class=\"hidden-xs\">";
        // line 103
        echo ($context["button_remove"] ?? null);
        echo "</span></a>';
        html += '</div>';
        html += '</div></td></tr>';

        \$('#cities').find('tbody').append(html);

        city_row++;
    }

    function savePopups(callback) {
        var form = \$('#tab-popups').find('form');
        form.find('.text-danger').remove();
        \$.post(form.attr('action'), form.serialize(),
            function(json) {
                if (json.errors) {
                    for (i in json.errors.cities) {
                        \$('#city-row' + i).find('input[name=\"popup_cities\\[' + i + '\\]\\[name\\]\"]')
                            .after('<p class=\"text-danger\">' + json.errors.cities[i] + '</p>');
                    }
                    \$('#tabs').find('a[href=\"#tab-popups\"]').tab('show');
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
        return "extension/module/progroman_citymanager/popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 103,  224 => 93,  212 => 84,  205 => 79,  199 => 78,  197 => 77,  188 => 71,  183 => 69,  174 => 65,  166 => 62,  159 => 60,  152 => 58,  144 => 54,  139 => 53,  137 => 52,  127 => 45,  121 => 42,  111 => 35,  103 => 30,  99 => 29,  92 => 25,  82 => 18,  78 => 17,  71 => 12,  62 => 9,  55 => 8,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/popup.twig", "");
    }
}
