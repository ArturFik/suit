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

/* default/template/newsletter/footer.twig */
class __TwigTemplate_dab4967b1872b3f065be15145ed8c5ff8c4a472688d8066b240a0a1537524cb9 extends \Twig\Template
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
        echo "<div class=\"footer__top\">
  <div class=\"container\">
    <div class=\"footer__top-content\">
      <div class=\"footer__top-left\"><img src=\"images/i-mail.svg\"><span>Подпишитесь на рассылку и будьте в курсе! Акции, скидки, распродажи ждут!</span>
      </div>
      <div class=\"footer__top-right\">
        <input class=\"input\" type=\"text\" placeholder=\"Введите email\">
        <button class=\"btn btn-white\" type=\"submit\">Подписаться</button>
      </div>
    </div>
  </div>
</div>

<div class=\"main_newsletter\">
  <div id=\"container\" class=\"container j-container\">
    <div class=\"footer-newsletter padding_section\" id=\"footer-newsletter\">

      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 20
        if (($context["display_title"] ?? null)) {
            // line 21
            echo "          <h3>";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
          ";
        }
        // line 23
        echo "
          ";
        // line 24
        if (twig_trim_filter(($context["text_description"] ?? null))) {
            // line 25
            echo "          <p class=\"text-left\">";
            echo ($context["text_description"] ?? null);
            echo "</p>
          ";
        }
        // line 27
        echo "
          ";
        // line 28
        if (($context["social_links"] ?? null)) {
            // line 29
            echo "          <div class=\"social_icons\">
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social_link"]) {
                // line 31
                echo "            <a href=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["social_link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["link"] ?? null) : null);
                echo "\" target=\"_blank\" title=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["social_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null);
                echo "\">
              <i class=\"fa ";
                // line 32
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["social_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null);
                echo "\"></i>
            </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "          </div>
          ";
        }
        // line 37
        echo "        </div>
        <div class=\"col-sm-6\">
          <div class=\"row inputs\">
            ";
        // line 40
        if (($context["display_name"] ?? null)) {
            // line 41
            echo "            <div class=\"col-sm-5 name-field\">
              <input type=\"text\" name=\"name\" value=\"\" class=\"form-control\" placeholder=\"";
            // line 42
            echo ($context["entry_name"] ?? null);
            echo "\" />
            </div>
            ";
        }
        // line 45
        echo "
            ";
        // line 46
        if (($context["display_name"] ?? null)) {
            // line 47
            echo "            ";
            $context["right_class"] = "col-sm-7";
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "            ";
            $context["right_class"] = "col-sm-12";
            // line 50
            echo "            ";
        }
        // line 51
        echo "
            <div class=\"";
        // line 52
        echo ($context["right_class"] ?? null);
        echo " email-field\">
              <div class=\"input-group\">
                <input type=\"text\" name=\"email\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 54
        echo ($context["entry_email"] ?? null);
        echo "\" />
                <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-primary button\" id=\"btn_footer_subscribe\">";
        // line 56
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
                </span>
              </div>
              <div class=\"notify error-notify\"></div>
            </div>
          </div>
          <div class=\"notify success-notify\"></div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\">
    \$('#footer-newsletter #btn_footer_subscribe').click(function() {
      \$.ajax({
        url: 'index.php?route=newsletter/footer/addSubscriber',
        dataType: 'json',
        data: \$('#footer-newsletter input[name=\"name\"], #footer-newsletter input[name=\"email\"]'),
        type: 'post',
        beforeSend: function() {
          \$('#footer-newsletter #btn_footer_subscribe').button('loading');
        },
        complete: function() {
          \$('#footer-newsletter #btn_footer_subscribe').button('reset');
        },
        success: function(json) {
          \$('#footer-newsletter .text-danger, #footer-newsletter .text-success, #footer-newsletter .alert').remove();

          if (json['error']) {
            if (json['error']['name']) {
              \$('#footer-newsletter input[name=\"name\"]').after('<div class=\"text-danger txt-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['name'] + '<button type=\"button\" class=\"close\" onclick=\"\$(\\'.txt-danger\\').remove();\"> &times; </button></div>');
            }

            if (json['error']['warning']) {
              \$('#footer-newsletter .error-notify').html('<div class=\"text-danger txt-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" onclick=\"\$(\\'.txt-danger\\').remove();\"> &times; </button></div>');
            }
          }

          if (json['success']) {
            \$('#footer-newsletter input[name=\"name\"], #footer-newsletter input[name=\"email\"]').val('');

            \$('#footer-newsletter .success-notify').html('<div class=\"text-success txt-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" onclick=\"\$(\\'.txt-success\\').remove();\"> &times; </button></div>');
          }
        }
      });
    });
  </script>
  <style>
    .footer-newsletter {
      ";
        // line 104
        if (($context["bgcolor"] ?? null)) {
            // line 105
            echo "        background: ";
            echo ($context["bgcolor"] ?? null);
            echo ";
      ";
        }
        // line 107
        echo "      ";
        if (($context["fontcolor"] ?? null)) {
            // line 108
            echo "        color: ";
            echo ($context["fontcolor"] ?? null);
            echo ";
      ";
        }
        // line 110
        echo "    }
  </style>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/newsletter/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 110,  217 => 108,  214 => 107,  208 => 105,  206 => 104,  155 => 56,  150 => 54,  145 => 52,  142 => 51,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  128 => 46,  125 => 45,  119 => 42,  116 => 41,  114 => 40,  109 => 37,  105 => 35,  96 => 32,  89 => 31,  85 => 30,  82 => 29,  80 => 28,  77 => 27,  71 => 25,  69 => 24,  66 => 23,  60 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/newsletter/footer.twig", "");
    }
}
