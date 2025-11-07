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

/* default/template/common/footer.twig */
class __TwigTemplate_41a62c81cb3cae7a24cb17475de3f92f5996d07550bb60648e247089114355d5 extends \Twig\Template
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
        echo ($context["popup_newsletter"] ?? null);
        echo "
";
        // line 2
        echo ($context["custom_css"] ?? null);
        echo "

<footer class=\"footer\">
\t";
        // line 5
        echo ($context["footer_newsletter"] ?? null);
        echo "
\t<div class=\"footer__bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__bottom-content\">
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 10
        echo ($context["title_about_us_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
              ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_about_us_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 14
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 14);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 20
        echo ($context["title_catalog_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t<a href=\"#\">Электрика</a>
\t\t\t\t\t\t\t<a href=\"#\">Отопление</a>
\t\t\t\t\t\t\t<a href=\"#\">Водоснабжение</a>
\t\t\t\t\t\t\t<a href=\"#\">Насосы</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t<a href=\"#\">Детали трубопровода</a>
\t\t\t\t\t\t\t<a href=\"#\">Санфаянс</a>
\t\t\t\t\t\t\t<a href=\"#\">Запорная арматура</a>
\t\t\t\t\t\t\t<a href=\"#\">Водонагреватели</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 37
        echo ($context["title_payment_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tДоставка курьером</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tДоставка транспортной компанией</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tСамовывоз</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tСпособы оплаты</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 52
        echo ($context["title_service_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t<a href=\"#\">Сервисный центр</a>
\t\t\t\t\t\t\t<a href=\"#\">Обратная связь</a>
\t\t\t\t\t\t\t<a href=\"#\">Помощь о работе с сайтом</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 62
        echo ($context["title_work_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t<a class=\"footer__title\" href=\"#\">Акции</a>
\t\t\t\t\t\t\t<a href=\"#\">Наши акции</a>
\t\t\t\t\t\t\t<a href=\"#\">Архив акций</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 72
        echo ($context["title_soc_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__soc\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"images/i-fb.svg\"></a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"images/i-vk.svg\"></a>
\t\t\t\t\t\t<a href=\"#\"><img src=\"images/i-youtube.svg\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer__copy\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__copy-content\">
\t\t\t\t<div class=\"footer__copy-left\">";
        // line 85
        echo ($context["text_powered_footer_left"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"footer__copy-right\">";
        // line 86
        echo ($context["text_powered_footer_right"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>


<!--
\t\t\t\t* Ci Newsletter Starts
\t\t\t\t-->
";
        // line 96
        echo ($context["popup_newsletter"] ?? null);
        echo "
";
        // line 97
        echo ($context["custom_css"] ?? null);
        echo "
<!--
\t\t\t\t* Ci Newsletter Ends
\t\t\t\t-->


";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 104
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 104);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 104);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 104);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 107
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
";
        // line 110
        echo ($context["prmn_cmngr_cities"] ?? null);
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 110,  222 => 109,  213 => 107,  209 => 106,  196 => 104,  192 => 103,  183 => 97,  179 => 96,  166 => 86,  162 => 85,  146 => 72,  133 => 62,  120 => 52,  102 => 37,  82 => 20,  76 => 16,  65 => 14,  61 => 13,  55 => 10,  47 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
