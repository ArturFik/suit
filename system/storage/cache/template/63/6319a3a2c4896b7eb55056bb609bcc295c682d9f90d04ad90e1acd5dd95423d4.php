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
class __TwigTemplate_8804a5b7dac565312a653759e8937511c9a53cb523eb68d732b0e0873be340c1 extends \Twig\Template
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
          <div class=\"footer__title\">О компании</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\"><a href=\"#\">Реквизиты</a><a href=\"#\">О нас</a><a href=\"#\">Информация для инвесторов</a><a href=\"#\">Производители</a></div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">Каталог</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\"><a href=\"#\">Электрика</a><a href=\"#\">Отопление</a><a href=\"#\">Водоснабжение</a><a href=\"#\">Насосы</a></div>
            <div class=\"footer__nav\"><a href=\"#\">Детали трубопровода</a><a href=\"#\">Санфаянс</a><a href=\"#\">Запорная арматура</a><a href=\"#\">Водонагреватели</a></div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">Получение и оплата</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\"><a href=\"#\"> Доставка курьером</a><a href=\"#\"> Доставка транспортной компанией</a><a href=\"#\"> Самовывоз</a><a href=\"#\"> Способы оплаты</a></div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">Сервис и поддержка</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\"><a href=\"#\">Сервисный центр</a><a href=\"#\">Обратная связь</a><a href=\"#\">Помощь о работе с сайтом</a></div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">Работа у нас</div>
          <div class=\"footer__row\">
            <div class=\"footer__nav\"><a class=\"footer__title\" href=\"#\">Акции</a><a href=\"#\">Наши акции</a><a href=\"#\">Архив акций</a></div>
          </div>
        </div>
        <div class=\"footer__col\">
          <div class=\"footer__title\">Давайте дружить</div>
          <div class=\"footer__soc\"><a href=\"#\"><img src=\"images/i-fb.svg\"></a><a href=\"#\"><img src=\"images/i-vk.svg\"></a><a href=\"#\"><img src=\"images/i-youtube.svg\"></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer__copy\">
    <div class=\"container\">
      <div class=\"footer__copy-content\">
        <div class=\"footer__copy-left\"><span>Вы принимаете условия <a href=\"#\">политики в отношении обработки персональных данных</a> и <a href=\"#\">пользовательского соглашения</a> каждый раз, когда оставляете свои данные в любой форме обратной связи</span></div>
        <div class=\"footer__copy-right\"><span>2010 - 2025. Все права защищены</span></div>
      </div>
    </div>
  </div>
</footer>


\t\t\t\t<!--
\t\t\t\t* Ci Newsletter Starts
\t\t\t\t-->
\t\t\t\t";
        // line 71
        echo ($context["popup_newsletter"] ?? null);
        echo "
\t\t\t\t";
        // line 72
        echo ($context["custom_css"] ?? null);
        echo "
\t\t\t\t<!--
\t\t\t\t* Ci Newsletter Ends
\t\t\t\t-->
\t\t\t
";
        // line 121
        echo "
";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 123
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 123);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 123);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 123);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 126
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
";
        // line 132
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
        return array (  169 => 132,  163 => 128,  154 => 126,  150 => 125,  137 => 123,  133 => 122,  130 => 121,  122 => 72,  118 => 71,  58 => 14,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
