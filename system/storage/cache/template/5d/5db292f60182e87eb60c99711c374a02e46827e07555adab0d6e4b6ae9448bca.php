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
class __TwigTemplate_e6294161507c170b2dc1ff5a047912f4b3ea1149ff081f49e9466b1346803837 extends \Twig\Template
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
    <div class=\"footer__top-content\" id=\"footer-newsletter\">
      <div class=\"footer__top-left\">
        <img src=\"images/i-mail.svg\">
        <span>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
      </div>
      <div class=\"footer__top-right\">
        <input type=\"text\" name=\"email\" value=\"\" class=\"input\" placeholder=\"";
        // line 9
        echo ($context["entry_email"] ?? null);
        echo "\" />
        <button class=\"btn btn-white\" type=\"button\" id=\"btn_footer_subscribe\">";
        // line 10
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
      </div>
    </div>
    <div class=\"footer__top-footer__bottom\">
      <div class=\"notify error-notify\"></div>
      <div class=\"notify success-notify\"></div>
    </div>
  </div>
</div>


";
        // line 86
        echo "
  <script type=\"text/javascript\">
    \$('#footer-newsletter #btn_footer_subscribe').click(function() {
      \$.ajax({
        url: 'index.php?route=newsletter/footer/addSubscriber',
        dataType: 'json',
        data: \$('#footer-newsletter input[name=\"name\"], #footer-newsletter input[name=\"email\"]'),
        type: 'post',
        /*beforeSend: function() {
          \$('#footer-newsletter #btn_footer_subscribe').button('loading');
        },
        complete: function() {
          \$('#footer-newsletter #btn_footer_subscribe').button('reset');
        },*/
        success: function(json) {
          console.log(json);
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
  </script>";
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
        return array (  68 => 86,  54 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/newsletter/footer.twig", "");
    }
}
