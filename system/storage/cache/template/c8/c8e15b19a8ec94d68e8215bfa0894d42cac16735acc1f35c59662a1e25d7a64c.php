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

/* default/template/account/login.twig */
class __TwigTemplate_dc49a5af79363f996d89422451e5a42c381618473718bcc2f6fdc36c7e688aa6 extends \Twig\Template
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
        echo "
<div id=\"account-login\" class=\"container\">
  <div class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                // line 6
                echo "    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
                echo "</span>
    ";
            } else {
                // line 8
                echo "    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</a><img src=\"images/i-separator.svg\">
    ";
            }
            // line 10
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </div>
  ";
        // line 12
        if (($context["success"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 15
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 18
        echo "  ";
        echo ($context["column_left"] ?? null);
        echo "
  <div id=\"content\" class=\"\">
    ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "

    <div class=\"login-autorization-block\">
      <div class=\"login-block\">
        <h2>";
        // line 24
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
        <p><strong>";
        // line 25
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
        <p>";
        // line 26
        echo ($context["text_register_account"] ?? null);
        echo "</p>
        <a href=\"";
        // line 27
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-blue\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
      </div>
      <div class=\"autorization-block\">
        <h2>";
        // line 30
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
        <p><strong>";
        // line 31
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            ";
        // line 35
        echo "            <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"
              class=\"input\" />
          </div>
          <div class=\"form-group\">
            ";
        // line 40
        echo "            <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\"
              id=\"input-password\" class=\"input\" />
            <a class=\"forgotten-link\" href=\"";
        // line 42
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
          </div>
          <input type=\"submit\" value=\"";
        // line 44
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-blue\" />
          ";
        // line 45
        if (($context["redirect"] ?? null)) {
            // line 46
            echo "          <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
          ";
        }
        // line 48
        echo "        </form>
      </div>
    </div>

    ";
        // line 85
        echo "
    ";
        // line 86
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 88
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 90,  208 => 88,  203 => 86,  200 => 85,  194 => 48,  188 => 46,  186 => 45,  182 => 44,  175 => 42,  167 => 40,  157 => 35,  152 => 32,  148 => 31,  144 => 30,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  117 => 20,  111 => 18,  105 => 16,  102 => 15,  96 => 13,  94 => 12,  91 => 11,  77 => 10,  69 => 8,  63 => 6,  60 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
