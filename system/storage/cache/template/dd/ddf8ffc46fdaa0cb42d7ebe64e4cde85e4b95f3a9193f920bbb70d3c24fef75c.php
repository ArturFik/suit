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

/* extension/module/progroman_citymanager/customer_group.twig */
class __TwigTemplate_9f40de9f9bf3d54e8454ee7b877f2ea7753e9626136e7f5b4d64e96efb1d8dd7 extends \Twig\Template
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
      <input name=\"setting[enable_switch_customer_group]\" value=\"1\" type=\"checkbox\"
      ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_switch_customer_group", [], "any", false, false, false, 5)) ? (" checked=\"checked\"") : (""));
        echo ">
      ";
        // line 6
        echo ($context["entry_sub_enabled"] ?? null);
        echo "
    </label>
  </div>
  <div class=\"form-group\">
    <label class=\"control-label\">
      <input name=\"setting[customer_group_for_new_user]\" value=\"1\" type=\"checkbox\"
      ";
        // line 12
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customer_group_for_new_user", [], "any", false, false, false, 12)) ? (" checked=\"checked\"") : (""));
        echo ">
      ";
        // line 13
        echo ($context["entry_customer_group_for_new_user"] ?? null);
        echo "
    </label>
  </div>
  <div class=\"form-group\">
    <label class=\"control-label\">
      <input name=\"setting[customer_group_high_priority]\" value=\"1\" type=\"checkbox\"
      ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customer_group_high_priority", [], "any", false, false, false, 19)) ? (" checked=\"checked\"") : (""));
        echo ">
      ";
        // line 20
        echo ($context["entry_customer_group_high_priority"] ?? null);
        echo "
    </label>
  </div>
</div>
<form action=\"";
        // line 24
        echo ($context["action_customer_group"] ?? null);
        echo "\" class=\"main-form\" data-submit=\"saveCustomerGroups\">
  <table id=\"customer_groups\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <td>
        <div class=\"row\">
          <div class=\"col-sm-5 col-xs-12\">
            ";
        // line 31
        echo ($context["entry_zone"] ?? null);
        echo "
          </div>
          <div class=\"col-sm-5 col-xs-12\">
            ";
        // line 34
        echo ($context["entry_customer_group"] ?? null);
        echo "
          </div>
        </div>
      </td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 41
        $context["customer_group_row"] = 0;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cm_customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cm_group"]) {
            // line 43
            echo "      <tr id=\"customer-group-row";
            echo ($context["customer_group_row"] ?? null);
            echo "\">
        <td>
          <div class=\"row\">
            <div class=\"col-sm-5 col-xs-12\">
              <input type=\"text\" name=\"\" value=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["cm_group"], "fias_name", [], "any", false, false, false, 47);
            echo "\" class=\"row-fias-name form-control\"/>
              <input type=\"hidden\" name=\"customer_groups[";
            // line 48
            echo ($context["customer_group_row"] ?? null);
            echo "][fias_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cm_group"], "fias_id", [], "any", false, false, false, 48);
            echo "\" class=\"row-fias-id\"/>
            </div>
            <div class=\"col-sm-5 col-xs-12\">
              <select name=\"customer_groups[";
            // line 51
            echo ($context["customer_group_row"] ?? null);
            echo "][customer_group_id]\"
                      class=\"form-control\">
                <option value=\"0\">";
            // line 53
            echo ($context["text_none"] ?? null);
            echo "</option>
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 55
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 55);
                echo "\"
                          ";
                // line 56
                echo (((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56) == twig_get_attribute($this->env, $this->source, $context["cm_group"], "customer_group_id", [], "any", false, false, false, 56))) ? ("selected") : (""));
                echo ">
                    ";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 57);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "              </select>
            </div>
            <div class=\"col-sm-2 col-xs-12\">
              <a onclick=\"\$('#customer-group-row";
            // line 63
            echo ($context["customer_group_row"] ?? null);
            echo "').remove();\" class=\"btn btn-danger\">
                <i class=\"fa fa-remove visible-xs\"></i>
                <span class=\"hidden-xs\">";
            // line 65
            echo ($context["button_remove"] ?? null);
            echo "</span>
              </a>
            </div>
          </div>
        </td>
      </tr>
      ";
            // line 71
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            // line 72
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cm_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tbody>
    <tfoot>
    <tr>
      <th>
        <a class=\"btn btn-success\" onclick=\"addCustomerGroup();\">
          ";
        // line 78
        echo ($context["button_add"] ?? null);
        echo "
        </a>
        <a class=\"btn btn-info\" href=\"";
        // line 80
        echo ($context["url_add_customer_group"] ?? null);
        echo "\" target=\"_blank\">
          ";
        // line 81
        echo ($context["button_customer_group"] ?? null);
        echo "
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</form>
<select id=\"select-customer-group\" class=\"hidden\">
  <option value=\"0\">";
        // line 89
        echo ($context["text_none"] ?? null);
        echo "</option>
  ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 91
            echo "    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 91);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 91);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</select>
<script type=\"text/javascript\">
    var customer_group_row = ";
        // line 95
        echo ($context["customer_group_row"] ?? null);
        echo ";

    function addCustomerGroup() {
        var html = '<tr id=\"customer-group-row' + customer_group_row + '\"><td><div class=\"row\"><div class=\"col-sm-5 col-xs-12\">';
        html += '<input type=\"text\" name=\"\" class=\"row-fias-name form-control\"/>';
        html += '<input type=\"hidden\" name=\"customer_groups[' + customer_group_row + '][fias_id]\" class=\"row-fias-id\"/>';
        html += '</div><div class=\"col-sm-5 col-xs-12\">';
        html += '<select name=\"customer_groups[' + customer_group_row + '][customer_group_id]\" class=\"form-control\">';
        html += \$('#select-customer-group').html();
        html += '</select>';
        html += '</div><div class=\"col-sm-2 col-xs-12\">';
        html += '<a onclick=\"\$(\\'#customer-group-row' + customer_group_row + '\\').remove();\" class=\"btn btn-danger\">';
        html += '<i class=\"fa fa-remove visible-xs\"></i><span class=\"hidden-xs\">";
        // line 107
        echo ($context["button_remove"] ?? null);
        echo "</span></a>';
        html += '</div></div></td></tr>';

        \$('#customer_groups').find('tbody').append(html);
        customer_group_row++;
    }

    function saveCustomerGroups(callback) {
        var form = \$('#tab-customer-group').find('form');
        form.find('.text-danger').remove();
        \$.post(form.attr('action'), form.serialize(),
            function(json) {
                if (json.errors) {
                    for (i in json.errors.fias) {
                        \$('#customer-group-row' + i).find('.row-fias-name').after('<p class=\"text-danger\">' + json.errors.fias[i] + '</p>');
                    }
                    for (i in json.errors.customer_group) {
                        \$('#customer-group-row' + i).find('select[name=\"customer_groups\\[' + i + '\\]\\[customer_group_id\\]\"]')
                            .after('<p class=\"text-danger\">' + json.errors.customer_group[i] + '</p>');
                    }
                    \$('#tabs').find('a[href=\"#tab-customer-group\"]').tab('show');
                }

                if (callback) {
                    callback.call(this, !json.errors);
                }
            }, 'json');
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/customer_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 107,  241 => 95,  237 => 93,  226 => 91,  222 => 90,  218 => 89,  207 => 81,  203 => 80,  198 => 78,  191 => 73,  185 => 72,  183 => 71,  174 => 65,  169 => 63,  164 => 60,  155 => 57,  151 => 56,  146 => 55,  142 => 54,  138 => 53,  133 => 51,  125 => 48,  121 => 47,  113 => 43,  108 => 42,  106 => 41,  96 => 34,  90 => 31,  80 => 24,  73 => 20,  69 => 19,  60 => 13,  56 => 12,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/customer_group.twig", "");
    }
}
