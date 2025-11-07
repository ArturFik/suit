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

/* extension/module/progroman_citymanager/support.twig */
class __TwigTemplate_fada11c9d7ba85e405784ca576e14cc34ab02cd55ea1e8beb024de490344f463 extends \Twig\Template
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
  ";
        // line 2
        if (twig_test_empty(($context["valid_license"] ?? null))) {
            // line 3
            echo "    <p>
      <a class=\"btn btn-primary btn-lg\" id=\"get-secret-key\" data-loading-text=\"";
            // line 4
            echo ($context["text_loading"] ?? null);
            echo "...\">";
            echo ($context["button_secret_key"] ?? null);
            echo "</a>
    </p>
    <p>";
            // line 6
            echo ($context["error_license"] ?? null);
            echo "</p>
  ";
        } else {
            // line 8
            echo "    <div class=\"row\">
      <div class=\"col-sm-6\">
        <p class=\"alert alert-success\">
          ";
            // line 11
            echo ($context["text_license_success"] ?? null);
            echo "
        </p>
      </div>
      <div class=\"col-sm-2\">
        <a class=\"btn btn-default\" id=\"clear-secret-key\" data-loading-text=\"";
            // line 15
            echo ($context["text_loading"] ?? null);
            echo "...\">";
            echo ($context["button_reset"] ?? null);
            echo "</a>
      </div>
    </div>
  ";
        }
        // line 19
        echo "</div>
<p>";
        // line 20
        echo ($context["text_support"] ?? null);
        echo "</p>
<p class=\"prmn-cmngr-settings__block\">
  <a href=\"https://liveopencart.ru/progroman\" class=\"btn btn-default\" target=\"_blank\">
    <img src=\"view/image/icon-liveopencart-16x16.ico\"/>
    liveopencart.ru
  </a>
  <a href=\"https://prodelo.biz/progroman\" class=\"btn btn-default\" target=\"_blank\">
    <img src=\"view/image/icon-prodelo-16x16.png\"/>
    prodelo.biz
  </a>
  <a href=\"https://opencart.club/profile/136-progroman/\" class=\"btn btn-default\" target=\"_blank\">
    <img src=\"view/image/icon-opencartclub-16x16.png\"/>
    opencart.club
  </a>
  <a href=\"https://opencartforum.com/profile/28285-progroman/\" class=\"btn btn-default\" target=\"_blank\">
    <img src=\"view/image/icon-opencartforum-16x16.ico\"/>
    opencartforum.com
  </a>
  <a href=\"https://t.me/progroman_ru\" class=\"btn btn-default\" target=\"_blank\">
    <i class=\"fa fa-telegram\"></i>
    t.me/progroman_ru
  </a>
  <a href=\"mailto:mr.progroman@yandex.ru\" class=\"btn btn-default\" target=\"_blank\">
    <i class=\"fa fa-envelope-o\"></i> mr.progroman@yandex.ru
  </a>
</p>

<script type=\"text/javascript\">
    \$(function() {
        \$('#get-secret-key').click(function () {
            var btn = \$(this).button('loading');
            \$.get('";
        // line 51
        echo ($context["url_get_secret"] ?? null);
        echo "', function(json) {
                alert(json.message);
                if (json.success) {
                    \$('#field-secret-key').val(json.key);
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }
                btn.button('reset');
            }, 'json')
        });

        \$('#clear-secret-key').click(function() {
            var btn = \$(this).button('loading');
            \$.get('";
        // line 65
        echo ($context["url_clear_secret"] ?? null);
        echo "', function(json) {
                alert(json.message);
                if (json.success) {
                    \$('#field-secret-key').val('');
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }
                btn.button('reset');
            }, 'json')
        });
    })
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/progroman_citymanager/support.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 65,  115 => 51,  81 => 20,  78 => 19,  69 => 15,  62 => 11,  57 => 8,  52 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/progroman_citymanager/support.twig", "");
    }
}
