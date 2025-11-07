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
class __TwigTemplate_c4b6440abe8f4c5dbdf7d2746e6515dee1c9c05fe546409d2ca9e7d6b79d598a extends \Twig\Template
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
        echo "
\t\t\t\t<!--
\t\t\t\t* Ci Newsletter Starts
\t\t\t\t-->
\t\t\t\t";
        // line 5
        echo ($context["popup_newsletter"] ?? null);
        echo "
\t\t\t\t";
        // line 6
        echo ($context["custom_css"] ?? null);
        echo "
\t\t\t\t<!--
\t\t\t\t* Ci Newsletter Ends
\t\t\t\t-->
\t\t\t
<footer class=\"footer\">


\t\t\t\t";
        // line 14
        echo ($context["footer_newsletter"] ?? null);
        echo "
\t\t\t
<div class=\"footer__bottom\">
    <div class=\"container\">
      <div class=\"footer__bottom-content\">
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 20
        echo ($context["title_about_us_footer"] ?? null);
        echo "</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\">
              <a href=\"#\">Реквизиты</a>
              <a href=\"#\">О нас</a>
              <a href=\"#\">Информация для инвесторов</a>
              <a href=\"#\">Производители</a>
            </div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 31
        echo ($context["title_catalog_footer"] ?? null);
        echo "</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\">
              <a href=\"#\">Электрика</a>
              <a href=\"#\">Отопление</a>
              <a href=\"#\">Водоснабжение</a>
              <a href=\"#\">Насосы</a>
            </div>
            <div class=\"footer__nav\">
              <a href=\"#\">Детали трубопровода</a>
              <a href=\"#\">Санфаянс</a>
              <a href=\"#\">Запорная арматура</a>
              <a href=\"#\">Водонагреватели</a>
            </div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 48
        echo ($context["title_payment_footer"] ?? null);
        echo "</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\">
              <a href=\"#\"> Доставка курьером</a>
              <a href=\"#\"> Доставка транспортной компанией</a>
              <a href=\"#\"> Самовывоз</a>
              <a href=\"#\"> Способы оплаты</a>
            </div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 59
        echo ($context["title_service_footer"] ?? null);
        echo "</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\">
              <a href=\"#\">Сервисный центр</a>
              <a href=\"#\">Обратная связь</a>
              <a href=\"#\">Помощь о работе с сайтом</a>
            </div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 69
        echo ($context["title_work_footer"] ?? null);
        echo "</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\">
              <a class=\"footer__title\" href=\"#\">Акции</a>
              <a href=\"#\">Наши акции</a>
              <a href=\"#\">Архив акций</a>
            </div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">";
        // line 79
        echo ($context["title_soc_footer"] ?? null);
        echo "</div>
          <div class=\"footer__soc\">
            <a href=\"#\"><img src=\"images/i-fb.svg\"></a>
            <a href=\"#\"><img src=\"images/i-vk.svg\"></a>
            <a href=\"#\"><img src=\"images/i-youtube.svg\"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer__copy\">
    <div class=\"container\">
      <div class=\"footer__copy-content\">
        <div class=\"footer__copy-left\">";
        // line 92
        echo ($context["text_powered_footer_left"] ?? null);
        echo "</div>
        <div class=\"footer__copy-right\">";
        // line 93
        echo ($context["text_powered_footer_right"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>

</footer>


";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 102
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 102);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 102);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 102);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 105
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
";
        // line 108
        echo ($context["prmn_cmngr_cities"] ?? null);
        echo "
</body>

</html>";
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
        return array (  205 => 108,  202 => 107,  193 => 105,  189 => 104,  176 => 102,  172 => 101,  161 => 93,  157 => 92,  141 => 79,  128 => 69,  115 => 59,  101 => 48,  81 => 31,  67 => 20,  58 => 14,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
