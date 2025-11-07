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

/* default/template/extension/module/account.twig */
class __TwigTemplate_9d0e47a84a1782f52ca207bd28fda980e0336e616a4562f3917657a4fe4bccf0 extends \Twig\Template
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
        echo "<div class=\"bl-h-scroll\">
  <div class=\"prd-tab__header\">
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 3
        if ((($context["current_url"] ?? null) == ($context["edit"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_account_information_account_n"] ?? null);
        echo "</a>
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 4
        if ((($context["current_url"] ?? null) == ($context["password"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_change_password_account_n"] ?? null);
        echo "</a>
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 5
        if (((($context["current_url"] ?? null) == ($context["address"] ?? null)) || (($context["current_url"] ?? null) == ($context["address_insert"] ?? null)))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address_account_n"] ?? null);
        echo "</a>
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 6
        if ((($context["current_url"] ?? null) == ($context["wishlist"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist_account_n"] ?? null);
        echo "</a>
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 7
        if ((($context["current_url"] ?? null) == ($context["order"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order_history_account_n"] ?? null);
        echo "</a>
    <a class=\"prd-tab__header-item prd-tab__link ";
        // line 8
        if ((($context["current_url"] ?? null) == ($context["newsletter"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter_account_n"] ?? null);
        echo "</a>
    <a class=\"lk__logout\" href=\"";
        // line 9
        echo ($context["logout"] ?? null);
        echo "\">";
        echo ($context["text_logout_account_n"] ?? null);
        echo "</a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 9,  91 => 8,  81 => 7,  71 => 6,  61 => 5,  51 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/account.twig", "");
    }
}
