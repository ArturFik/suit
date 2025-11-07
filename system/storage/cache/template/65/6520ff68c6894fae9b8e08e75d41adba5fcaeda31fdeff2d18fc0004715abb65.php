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

/* extension/module/progroman_citymanager/general.twig */
class __TwigTemplate_6f20c0b711b03215d874c5d734df10244817461da3690dcfbd18c42e6bfd3788 extends \Twig\Template
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
  <form action=\"";
        // line 2
        echo ($context["action_general"] ?? null);
        echo "\" class=\"main-form for-general-form\" data-submit=\"saveGeneral\">
    <div class=\"form-group form-inline\">
      <label>";
        // line 4
        echo ($context["entry_status"] ?? null);
        echo "</label>
      <select name=\"status\" class=\"form-control\">
        <option value=\"1\"";
        // line 6
        echo ((($context["status"] ?? null)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
        <option value=\"0\"";
        // line 7
        echo ((twig_test_empty(($context["status"] ?? null))) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
      </select>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[use_geoip]\" value=\"1\" type=\"checkbox\"";
        // line 12
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "use_geoip", [], "any", false, false, false, 12)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 13
        echo ($context["entry_use_geoip"] ?? null);
        echo "
      </label>
      ";
        // line 15
        if (twig_test_empty(($context["is_loaded_ip2fias"] ?? null))) {
            // line 16
            echo "      <p class=\"text-danger\">";
            echo ($context["text_ip2fias_not_loaded"] ?? null);
            echo "</p>
      ";
        }
        // line 18
        echo "    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[use_ajax]\" value=\"1\" type=\"checkbox\"";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "use_ajax", [], "any", false, false, false, 21)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 22
        echo ($context["entry_use_ajax"] ?? null);
        echo "
      </label>
    </div>
    <div class=\"form-group form-inline\">
      <label>";
        // line 26
        echo ($context["entry_default_city"] ?? null);
        echo "</label>
      <div class=\"input-group\" style=\"margin-right: 10px;\">
        <input type=\"text\" class=\"form-control row-fias-name\" id=\"field-default-city-name\"
               value=\"";
        // line 29
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "default_city_name", [], "any", false, false, false, 29))) ? (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "default_city_name", [], "any", false, false, false, 29)) : (""));
        echo "\"/>
        <input type=\"hidden\" name=\"setting[default_city]\" class=\"row-fias-id\" id=\"field-default-city\"
               value=\"";
        // line 31
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "default_city", [], "any", false, false, false, 31))) ? (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "default_city", [], "any", false, false, false, 31)) : (""));
        echo "\"/>
        <i class=\"fa fa-remove clear-input-btn\" onclick=\"\$('#field-default-city-name, #field-default-city').val('');\" title=\"";
        // line 32
        echo ($context["button_clear"] ?? null);
        echo "\"></i>
      </div>

      <label class=\"control-label\">";
        // line 35
        echo ($context["entry_use_default_city"] ?? null);
        echo "</label>
      <select name=\"setting[use_default_city]\" class=\"form-control\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["use_default_city_values"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 38
            echo "        <option value=\"";
            echo $context["key"];
            echo "\"";
            echo (((($context["use_default_city"] ?? null) == $context["key"])) ? (" selected") : (""));
            echo ">";
            echo $context["value"];
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </select>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[use_fullname_city]\" value=\"1\" type=\"checkbox\"";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "use_fullname_city", [], "any", false, false, false, 44)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 45
        echo ($context["entry_use_fullname_city"] ?? null);
        echo "
      </label>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[replace_blanks]\" value=\"1\" type=\"checkbox\"";
        // line 50
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "replace_blanks", [], "any", false, false, false, 50)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 51
        echo ($context["entry_replace_blanks"] ?? null);
        echo "
        </label>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[not_fill_fields]\" value=\"1\" type=\"checkbox\"";
        // line 56
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "not_fill_fields", [], "any", false, false, false, 56)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 57
        echo ($context["entry_not_fill_fields"] ?? null);
        echo "
        </label>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[integration_simple]\" value=\"1\" type=\"checkbox\"";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "integration_simple", [], "any", false, false, false, 62)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 63
        echo ($context["entry_integration_simple"] ?? null);
        echo "
      </label>
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[replace_input_city]\" value=\"1\" type=\"checkbox\"";
        // line 68
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "replace_input_city", [], "any", false, false, false, 68)) ? (" checked=\"checked\"") : (""));
        echo ">
        ";
        // line 69
        echo ($context["entry_replace_input_city"] ?? null);
        echo "
      </label>
    </div>
  </form>
</div>

<script type=\"text/javascript\">
  function saveGeneral(callback) {
      var form = \$('#tab-general').find('form');
      var data = '';
      \$('.for-general-form :input').each(function() {
          var el = \$(this);
          if (el.attr('name')) {
              var value = el.is(':checkbox') ? (el.is(':checked') ? 1 : 0) : el.val();
              data += encodeURIComponent(el.attr('name')) + '=' + value + '&';
          }
      });

      \$.post(form.attr('action'), data,
          function(json) {
              if (json.warning) {
                  \$('#warning').removeClass('hidden').find('span').text(json.warning);
                  \$('#tabs').find('a[href=\"#tab-general\"]').tab('show');
              }

              if (json.license) {
                  \$('#alert-license').addClass('hidden');
              } else {
                  \$('#alert-license').removeClass('hidden');
              }

              if (callback) {
                  callback.call(this, !json.warning);
              }
          }, 'json');
  }
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  196 => 68,  188 => 63,  184 => 62,  176 => 57,  172 => 56,  164 => 51,  160 => 50,  152 => 45,  148 => 44,  142 => 40,  129 => 38,  125 => 37,  120 => 35,  114 => 32,  110 => 31,  105 => 29,  99 => 26,  92 => 22,  88 => 21,  83 => 18,  77 => 16,  75 => 15,  70 => 13,  66 => 12,  56 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/general.twig", "");
    }
}
