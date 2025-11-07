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

/* extension/module/progroman_citymanager/redirects.twig */
class __TwigTemplate_55b396e689f5f50fe9bca85ff7983c0a49d23b6e0eb5b2f728f3cc0000f11ff1 extends \Twig\Template
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
  <div class=\"for-general-form\">
    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[enable_switch_redirects]\" value=\"1\"
               type=\"checkbox\"";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_switch_redirects", [], "any", false, false, false, 6)) ? (" checked=\"checked\"") : (""));
        echo "\">
        ";
        // line 7
        echo ($context["entry_enabled_redirects"] ?? null);
        echo "
      </label>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[disable_autoredirect]\" value=\"1\"
               type=\"checkbox\"";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "disable_autoredirect", [], "any", false, false, false, 14)) ? (" checked=\"checked\"") : (""));
        echo "\">
        ";
        // line 15
        echo ($context["entry_disable_autoredirect"] ?? null);
        echo "
      </label>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[bind_subdomain]\" value=\"1\"
               type=\"checkbox\"";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "bind_subdomain", [], "any", false, false, false, 22)) ? (" checked=\"checked\"") : (""));
        echo "\">
        ";
        // line 23
        echo ($context["entry_bind_subdomain"] ?? null);
        echo "
      </label>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label\">
        <input name=\"setting[fias_in_qs]\" value=\"1\"
               type=\"checkbox\"";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fias_in_qs", [], "any", false, false, false, 30)) ? (" checked=\"checked\"") : (""));
        echo "\">
        ";
        // line 31
        echo ($context["entry_fias_in_qs"] ?? null);
        echo "
      </label>
    </div>

    <div class=\"form-group form-inline\">
      <label class=\"control-label\">";
        // line 36
        echo ($context["entry_domain"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"setting[main_domain]\" class=\"form-control\"
             value=\"";
        // line 38
        echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_domain", [], "any", false, false, false, 38))) ? (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_domain", [], "any", false, false, false, 38)) : (""));
        echo "\"/>
    </div>
  </div>
</div>

<h4>";
        // line 43
        echo ($context["tab_redirects"] ?? null);
        echo "</h4>
<form action=\"";
        // line 44
        echo ($context["action_redirects"] ?? null);
        echo "\" class=\"main-form\" data-submit=\"saveRedirects\">
  <table id=\"redirects\" class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <td>
        <div class=\"row\">
          <div class=\"col-sm-4 col-xs-12\">
            ";
        // line 51
        echo ($context["entry_zone"] ?? null);
        echo "
          </div>
          <div class=\"col-sm-5 col-xs-12\">
            ";
        // line 54
        echo ($context["entry_subdomain"] ?? null);
        echo "
          </div>
        </div>
      </td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 61
        $context["redirect_row"] = 0;
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["redirects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["redirect"]) {
            // line 63
            echo "      <tr id=\"redirect-row";
            echo ($context["redirect_row"] ?? null);
            echo "\">
        <td>
          <div class=\"row\">
            <div class=\"col-sm-4 col-xs-12\">
              <input type=\"text\" name=\"\" value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["redirect"], "fias_name", [], "any", false, false, false, 67);
            echo "\" class=\"row-fias-name form-control\"/>
              <input type=\"hidden\" name=\"redirects[";
            // line 68
            echo ($context["redirect_row"] ?? null);
            echo "][fias_id]\"
                     value=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["redirect"], "fias_id", [], "any", false, false, false, 69);
            echo "\" class=\"row-fias-id\"/>
              <input type=\"hidden\" name=\"redirects[";
            // line 70
            echo ($context["redirect_row"] ?? null);
            echo "][id]\"
                     value=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["redirect"], "id", [], "any", false, false, false, 71);
            echo "\"/>
            </div>
            <div class=\"col-sm-5 col-xs-12\">
              <input type=\"text\" name=\"redirects[";
            // line 74
            echo ($context["redirect_row"] ?? null);
            echo "][url]\" class=\"form-control\"
                     value=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["redirect"], "url", [], "any", false, false, false, 75);
            echo "\" placeholder=\"http://site.com\"/>
            </div>
            <div class=\"col-sm-2 col-xs-12\">
              <a class=\"btn btn-danger\" onclick=\"\$('#redirect-row";
            // line 78
            echo ($context["redirect_row"] ?? null);
            echo "').remove();\">
                <i class=\"fa fa-remove visible-xs\"></i>
                <span class=\"hidden-xs\">";
            // line 80
            echo ($context["button_remove"] ?? null);
            echo "</span>
              </a>
            </div>
          </div>
        </td>
      </tr>
      ";
            // line 86
            $context["redirect_row"] = (($context["redirect_row"] ?? null) + 1);
            // line 87
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </tbody>
    <tfoot>
    <tr>
      <th>
        <a class=\"btn btn-success\" onclick=\"addRedirect();\">
          ";
        // line 93
        echo ($context["button_add"] ?? null);
        echo "
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</form>
<script type=\"text/javascript\">
    var redirect_row = ";
        // line 101
        echo ($context["redirect_row"] ?? null);
        echo ";

    function addRedirect() {
        var html = '<tr id=\"redirect-row' + redirect_row + '\"><td><div class=\"row\">';
        html += '<div class=\"col-sm-4 col-xs-12\">';
        html += '<input type=\"text\" name=\"\" class=\"row-fias-name form-control\"/>';
        html += '<input type=\"hidden\" name=\"redirects[' + redirect_row + '][fias_id]\" class=\"row-fias-id\"/>';
        html += '<input type=\"hidden\" name=\"redirects[' + redirect_row + '][id]\" value=\"\"/>';
        html += '</div><div class=\"col-sm-5 col-xs-12\">';
        html += '<input type=\"text\" name=\"redirects[' + redirect_row + '][url]\" value=\"\" class=\"form-control\" placeholder=\"http://site.com\"/>';
        html += '</div><div class=\"col-sm-2 col-xs-12\">';
        html += '<a class=\"btn btn-danger\" onclick=\"\$(\\'#redirect-row' + redirect_row + '\\').remove();\">';
        html += '<i class=\"fa fa-remove visible-xs\"></i><span class=\"hidden-xs\">";
        // line 113
        echo ($context["button_remove"] ?? null);
        echo "</span></a>';
        html += '</div></div></td></tr>';

        \$('#redirects').find('tbody').append(html);

        redirect_row++;
    }

    function saveRedirects(callback) {
        var form = \$('#tab-redirects').find('form');
        form.find('.text-danger').remove();
        \$.post(form.attr('action'), form.serialize(),
            function(json) {
                if (json.errors) {
                    for (i in json.errors.fias) {
                        \$('#redirect-row' + i).find('.row-fias-name').after('<p class=\"text-danger\">' + json.errors.fias[i] + '</p>');
                    }
                    for (i in json.errors.subdomain) {
                        \$('#redirect-row' + i).find('input[name=\"redirects\\[' + i + '\\]\\[url\\]\"]')
                            .after('<p class=\"text-danger\">' + json.errors.subdomain[i] + '</p>');
                    }
                    \$('#tabs').find('a[href=\"#tab-redirects\"]').tab('show');
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
        return "extension/module/progroman_citymanager/redirects.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 113,  228 => 101,  217 => 93,  210 => 88,  204 => 87,  202 => 86,  193 => 80,  188 => 78,  182 => 75,  178 => 74,  172 => 71,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  148 => 63,  143 => 62,  141 => 61,  131 => 54,  125 => 51,  115 => 44,  111 => 43,  103 => 38,  98 => 36,  90 => 31,  86 => 30,  76 => 23,  72 => 22,  62 => 15,  58 => 14,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/redirects.twig", "");
    }
}
