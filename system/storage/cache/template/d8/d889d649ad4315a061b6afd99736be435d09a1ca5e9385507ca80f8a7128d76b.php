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

/* extension/module/progroman_citymanager/index.twig */
class __TwigTemplate_c6a061134efd4eafe4d66f91cd28582d4c109e8bfe57265e5886ca43a593cba7 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\" id=\"submit-forms\">
          <i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "          <li>
            <a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["text"] ?? null) : null);
            echo "</a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"prmn-cmngr-settings\">
        <div id=\"warning\" class=\"alert alert-danger hidden\"><i class=\"fa fa-exclamation-circle\"></i>
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <span></span>
        </div>
        <div id=\"success\" class=\"alert alert-success hidden\"><i class=\"fa fa-exclamation-circle\"></i>
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <span></span>
        </div>
        <div id=\"message\" class=\"alert alert-info";
        // line 31
        echo ((twig_test_empty(($context["message"] ?? null))) ? (" hidden") : (""));
        echo "\"><i class=\"fa fa-exclamation-circle\"></i>
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <span>";
        // line 33
        echo ($context["message"] ?? null);
        echo "</span>
        </div>

        <ul id=\"tabs\" class=\"nav nav-tabs\">
          <li>
            <a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_general"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-redirects\" data-toggle=\"tab\" data-url=\"";
        // line 41
        echo ($context["url_redirects"] ?? null);
        echo "\">";
        echo ($context["tab_redirects"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-popups\" data-toggle=\"tab\" data-url=\"";
        // line 44
        echo ($context["url_popups"] ?? null);
        echo "\">";
        echo ($context["tab_popup"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-messages\" data-toggle=\"tab\" data-url=\"";
        // line 47
        echo ($context["url_messages"] ?? null);
        echo "\">";
        echo ($context["tab_messages"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-currencies\" data-toggle=\"tab\" data-url=\"";
        // line 50
        echo ($context["url_currencies"] ?? null);
        echo "\">";
        echo ($context["tab_currencies"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-customer-group\" data-toggle=\"tab\" data-url=\"";
        // line 53
        echo ($context["url_customer_group"] ?? null);
        echo "\">";
        echo ($context["tab_groups"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-bases\" data-toggle=\"tab\" data-url=\"";
        // line 56
        echo ($context["url_bases"] ?? null);
        echo "\">";
        echo ($context["tab_bases"] ?? null);
        echo "</a>
          </li>
          <li>
            <a href=\"#tab-support\" data-toggle=\"tab\" data-url=\"";
        // line 59
        echo ($context["url_support"] ?? null);
        echo "\">
              ";
        // line 60
        if (($context["valid_license"] ?? null)) {
            // line 61
            echo "                ";
            echo ($context["tab_support"] ?? null);
            echo "
              ";
        } else {
            // line 63
            echo "                <span class=\"text-danger\">";
            echo ($context["tab_support"] ?? null);
            echo "</span>
              ";
        }
        // line 65
        echo "            </a>
          </li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane\" id=\"tab-general\">";
        // line 69
        echo ($context["general"] ?? null);
        echo "</div>
          <div class=\"tab-pane\" id=\"tab-redirects\">";
        // line 70
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-popups\">";
        // line 71
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-messages\">";
        // line 72
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-currencies\">";
        // line 73
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-customer-group\">";
        // line 74
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-support\">";
        // line 75
        echo ($context["text_loading"] ?? null);
        echo "...</div>
          <div class=\"tab-pane\" id=\"tab-bases\">";
        // line 76
        echo ($context["text_loading"] ?? null);
        echo "...</div>
        </div>
    </div>
  </div>
</div>
<div class=\"modal\" tabindex=\"-1\" role=\"dialog\" id=\"prmn-alert\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4>";
        // line 86
        echo ($context["heading_title"] ?? null);
        echo "</h4>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 90
        echo ($context["button_close"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
    function saveTab(index) {
        var tabs = \$('.tab-pane');

        if (index >= tabs.length) {
            \$('#success').removeClass('hidden').find('span').text('";
        // line 100
        echo ($context["text_success"] ?? null);
        echo "');
            \$('#submit-forms').removeAttr('disabled');
            return;
        }

        var tab = tabs.eq(index);
        var form = tab.find('form.main-form');
        if (form.length) {
            window[form.data('submit')](function(result) {
                if (result) {
                    saveTab(index + 1);
                } else {
                    \$('#submit-forms').removeAttr('disabled');
                }
            });
        } else {
            saveTab(index + 1);
        }
    }

    function prmnRunAction(action) {
        \$.ajax({
            url: '";
        // line 122
        echo ($context["url_base_action"] ?? null);
        echo "',
            type: 'get',
            dataType: 'json',
            data: {action: action},
            success: function(json) {
                if (json.success) {
                    if (json['next_step']) {
                        if (json['btn_text']) {
                            \$('#prmn-alert').modal('show').find('.modal-body').text(json['btn_text'] + '...');
                        }

                        if (action.indexOf('step=') > 0) {
                            action = action.replace(/step=[a-z-]+/, 'step=' + json['next_step']);
                        } else {
                            action += ',step=' + json['next_step'];
                        }

                        if (json['iteration'] !== undefined) {
                            if (action.indexOf('iteration=') > 0) {
                                action = action.replace(/iteration=\\d+/, 'iteration=' + json['iteration']);
                            } else {
                                action += ',iteration=' + json['iteration'];
                            }
                        }

                        prmnRunAction(action);
                    } else {
                        \$('#prmn-alert').modal('show').find('.modal-body').html('<p class=\"text-success\">' + json.text + '</p>');
                        \$('#tab-bases').load('";
        // line 150
        echo ($context["url_bases"] ?? null);
        echo "');
                    }
                } else {
                    \$('#prmn-alert').modal('show').find('.modal-body').html('<p class=\"text-danger\">' + json.error + '</p>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                \$('#prmn-alert').modal('show').find('.modal-body').html(thrownError + \"<br>\" + xhr.statusText + \"<br>\" + xhr.responseText);
            }
        });
    }

    var xhr;
    \$(function() {
        \$('#tabs').find('a[data-toggle=\"tab\"]').on('shown.bs.tab', function(e) {
            var tab = \$(\$(this).attr('href'));
            if (!tab.find('div').length) {
                tab.load(\$(this).data('url'), function() {
                    tab.find('[data-toggle=\"tooltip\"]').tooltip({container: 'body', html: true});
                });
            }
        });

        ";
        // line 173
        if ( !($context["valid_license"] ?? null)) {
            // line 174
            echo "        \$('#tabs a[href=\"#tab-support\"]').tab('show');
        ";
        } elseif ( !        // line 175
($context["is_loaded_fias"] ?? null)) {
            // line 176
            echo "        \$('#tabs a[href=\"#tab-bases\"]').tab('show');
        ";
        } else {
            // line 178
            echo "        \$('#tabs a:first').tab('show');
        ";
        }
        // line 180
        echo "
        \$('#submit-forms').click(function() {
            \$('#warning, #success').addClass('hidden').find('span').text('');
            \$(this).attr('disabled', 'disabled');

            // Валидация форм
            var validate = true;
            \$('.tab-pane').each(function(i, el) {
                var form = \$(this).find('form.main-form');
                if (form.data('validate') && !(window[form.data('validate')]())) {
                    validate = false;
                    return false;
                }
            });

            if (!validate) {
                return false;
            }

            // Сохраняем данные
            saveTab(0);
        });

        \$('form').submit(function(e) {
            e.preventDefault();
        });

        \$(document).on('focus', '.row-fias-name', function() {
            if (!\$(this).data('autocomplete')) {
                var el = \$(this);
                el.prmnAutocomplete({
                    'source': '";
        // line 211
        echo ($context["url_search"] ?? null);
        echo "&short=' + (el.data('short') ? 1 : 0),
                    'select': function(item) {
                        el.val(item.name);
                        el.siblings('.row-fias-id').val(item.value);
                    }
                });
                el.data('autocomplete', true);
                el.siblings('ul.dropdown-menu').css({'maxHeight': 300, 'overflowY': 'auto', 'overflowX': 'hidden'});
            }
        });

        \$('#tab-bases').on('click', '.base-action', function() {
            var btn = \$(this);
            btn.attr('disabled', 'disabled');
            \$('#prmn-alert').modal('show').find('.modal-body').text(btn.data('text'));
            prmnRunAction(btn.data('action'));
        });
        ";
        // line 228
        if (($context["check_update"] ?? null)) {
            // line 229
            echo "        \$.ajax({
            url: '";
            // line 230
            echo ($context["url_check_update"] ?? null);
            echo "',
            type: 'get',
            dataType: 'json',
            success: function(json) {
                if (json.success) {
                    if (json.message) {
                        \$('#message').removeClass('hidden').find('span').html(json.message);
                    }
                } else if (json.error) {
                    \$('#warning').removeClass('hidden').find('span').append(json.error);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"<br>\" + xhr.statusText + \"<br>\" + xhr.responseText);
            }
        });
        ";
        }
        // line 247
        echo "
        \$('#message').find('button').click(function() {
            \$.ajax({
                url: '";
        // line 250
        echo ($context["url_remove_data_message"] ?? null);
        echo "',
                type: 'get',
                dataType: 'json',
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"<br>\" + xhr.statusText + \"<br>\" + xhr.responseText);
                }
            });
        });
    });
//--></script>
";
        // line 260
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 260,  429 => 250,  424 => 247,  404 => 230,  401 => 229,  399 => 228,  379 => 211,  346 => 180,  342 => 178,  338 => 176,  336 => 175,  333 => 174,  331 => 173,  305 => 150,  274 => 122,  249 => 100,  236 => 90,  229 => 86,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  200 => 72,  196 => 71,  192 => 70,  188 => 69,  182 => 65,  176 => 63,  170 => 61,  168 => 60,  164 => 59,  156 => 56,  148 => 53,  140 => 50,  132 => 47,  124 => 44,  116 => 41,  110 => 38,  102 => 33,  97 => 31,  82 => 18,  71 => 15,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/index.twig", "");
    }
}
