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
class __TwigTemplate_593508041ba80b0aeed0928ba9959d3308f0f0253920fcf291552c3da852c2ba extends \Twig\Template
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
\t\t\t\t\t\t\t<a href=\"#\">Реквизиты</a>
\t\t\t\t\t\t\t<a href=\"#\">О нас</a>
\t\t\t\t\t\t\t<a href=\"#\">Информация для инвесторов</a>
\t\t\t\t\t\t\t<a href=\"#\">Производители</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 21
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
        // line 38
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
        // line 53
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
        // line 63
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
        // line 73
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
        // line 86
        echo ($context["text_powered_footer_left"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"footer__copy-right\">";
        // line 87
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
        // line 97
        echo ($context["popup_newsletter"] ?? null);
        echo "
";
        // line 98
        echo ($context["custom_css"] ?? null);
        echo "
<!--
\t\t\t\t* Ci Newsletter Ends
\t\t\t\t-->


";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 105
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 105);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 105);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 105);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 108
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
";
        // line 111
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
        return array (  212 => 111,  209 => 110,  200 => 108,  196 => 107,  183 => 105,  179 => 104,  170 => 98,  166 => 97,  153 => 87,  149 => 86,  133 => 73,  120 => 63,  107 => 53,  89 => 38,  69 => 21,  55 => 10,  47 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
