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

/* extension/module/progroman_citymanager/messages.twig */
class __TwigTemplate_3025fdabc61d132e74e8ff5aa942731c346a11767577acfeced2011a6c80ca2b extends \Twig\Template
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
      <input name=\"setting[enable_switch_messages]\" value=\"1\" type=\"checkbox\"
      ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_switch_messages", [], "any", false, false, false, 5)) ? (" checked=\"checked\"") : (""));
        echo "\">
      ";
        // line 6
        echo ($context["entry_sub_enabled"] ?? null);
        echo "
    </label>
  </div>
</div>
<table id=\"messages\" class=\"table table-striped table-bordered\">
  <thead>
  <tr>
    <th>
      <div class=\"row\">
        <div class=\"col-sm-3 col-xs-12\">
          ";
        // line 16
        echo ($context["entry_key"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-3 col-xs-12\">
          ";
        // line 19
        echo ($context["entry_zone"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-4 col-xs-12\">
          ";
        // line 22
        echo ($context["entry_value"] ?? null);
        echo "
        </div>
      </div>
    </th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 29
        $context["message_row"] = 0;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "    <tr id=\"message-row";
            echo ($context["message_row"] ?? null);
            echo "\">
      <td>
        <div class=\"row\">
          <div class=\"col-sm-3 col-xs-12\">
            <input type=\"text\" class=\"form-control\" name=\"key\" value=\"";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["message"], "key", [], "any", false, false, false, 35);
            echo "\"/>
          </div>
          <div class=\"col-sm-3 col-xs-12\">
            <input type=\"text\" name=\"\" value=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["message"], "fias_name", [], "any", false, false, false, 38);
            echo "\" class=\"row-fias-name form-control\"/>
            <input type=\"hidden\" name=\"fias_id\" value=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["message"], "fias_id", [], "any", false, false, false, 39);
            echo "\" class=\"row-fias-id\"/>
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 40);
            echo "\"/>
          </div>
          <div class=\"col-sm-4 col-xs-12\">
            <textarea class=\"form-control\" name=\"value\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["message"], "value", [], "any", false, false, false, 43);
            echo "</textarea>
          </div>
          <div class=\"col-sm-2 col-xs-12\">
            <a class=\"btn btn-primary save-message\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo ($context["button_save"] ?? null);
            echo "\" onclick=\"saveMessage(";
            echo ($context["message_row"] ?? null);
            echo ")\">
              <i class=\"fa fa-save\"></i>
            </a>
            <a class=\"btn btn-danger remove-message\" data-toggle=\"tooltip\" title=\"";
            // line 49
            echo ($context["button_remove"] ?? null);
            echo "\" onclick=\"removeMessage(";
            echo ($context["message_row"] ?? null);
            echo ")\">
              <i class=\"fa fa-remove\"></i>
            </a>
          </div>
        </div>
      </td>
    </tr>
    ";
            // line 56
            $context["message_row"] = (($context["message_row"] ?? null) + 1);
            // line 57
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  </tbody>
  <tfoot>
  <tr>
    <th>
      <a class=\"btn btn-success\" onclick=\"addMessage();\"> ";
        // line 62
        echo ($context["button_add"] ?? null);
        echo "</a>
    </th>
  </tr>
  </tfoot>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 68
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 69
        echo ($context["results"] ?? null);
        echo "</div>
</div>

<script type=\"text/javascript\">
    var message_row = ";
        // line 73
        echo ($context["message_row"] ?? null);
        echo ";

    function addMessage() {
        var html = '<tr id=\"message-row' + message_row + '\"><td><div class=\"row\"><div class=\"col-sm-3 col-xs-12\">';
        html += '<input type=\"text\" name=\"key\" class=\"form-control\"/>';
        html += '</div><div class=\"col-sm-3 col-xs-12\">';
        html += '<input type=\"text\" name=\"\" class=\"row-fias-name form-control\"/>';
        html += '<input type=\"hidden\" name=\"fias_id\" class=\"row-fias-id\"/>';
        html += '<input type=\"hidden\" name=\"id\" value=\"\"/>';
        html += '</div><div class=\"col-sm-4 col-xs-12\">';
        html += '<textarea class=\"form-control\" name=\"value\"></textarea>';
        html += '</div><div class=\"col-sm-2 col-xs-12\">';
        html += '<a class=\"btn btn-primary save-message\" data-toggle=\"tooltip\" title=\"";
        // line 85
        echo ($context["button_save"] ?? null);
        echo "\" onclick=\"saveMessage(' + message_row + ')\"><i class=\"fa fa-save\"></i></a>';
        html += ' <a class=\"btn btn-danger remove-message\" data-toggle=\"tooltip\" title=\"";
        // line 86
        echo ($context["button_remove"] ?? null);
        echo "\" onclick=\"removeMessage(' + message_row + ')\"><i class=\"fa fa-remove\"></i></a>';
        html += '</div></div></td></tr>';

        \$('#messages').find('tbody').append(html);
        \$('#message-row' + message_row).find('[data-toggle=\"tooltip\"]').tooltip({container: 'body', html: true});

        message_row++;
    }

    function saveMessage(row) {
        var container = \$('#message-row' + row);
        var btn = container.find('.save-message').attr('disabled', 'disabled');
        container.find('.text-danger').remove();

        \$.ajax({
            url: '";
        // line 101
        echo ($context["action_savemessage"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: container.find(':input').serialize(),
            success: function(json) {
                if (json.errors) {
                    if (json.errors.key) {
                        container.find('input[name=\"key\"]').after('<p class=\"text-danger\">' + json.errors.key + '</p>');
                    }

                    if (json.errors.fias) {
                        container.find('.row-fias-name').after('<p class=\"text-danger\">' + json.errors.fias + '</p>');
                    }
                }

                btn.removeAttr('disabled');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    function removeMessage(row) {
        var container = \$('#message-row' + row);
        container.find('.remove-message').attr('disabled', 'disabled');

        \$.ajax({
            url: '";
        // line 129
        echo ($context["action_removemessage"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: container.find(':input').serialize(),
            success: function(json) {
                container.remove();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    \$('#tab-messages').find('.pagination a').click(function() {
        \$('#tab-messages').load(\$(this).attr('href'));
        return false;
    });
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 129,  214 => 101,  196 => 86,  192 => 85,  177 => 73,  170 => 69,  166 => 68,  157 => 62,  151 => 58,  145 => 57,  143 => 56,  131 => 49,  123 => 46,  117 => 43,  111 => 40,  107 => 39,  103 => 38,  97 => 35,  89 => 31,  84 => 30,  82 => 29,  72 => 22,  66 => 19,  60 => 16,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/messages.twig", "");
    }
}
