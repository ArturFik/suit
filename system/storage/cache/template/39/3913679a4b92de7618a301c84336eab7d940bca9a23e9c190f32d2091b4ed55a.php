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
class __TwigTemplate_ce213be3c3273d0b9d45751483af993b895ed11a5a857553a4cb3f48564986f6 extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"footer__top\">
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

<!-- <footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 68
        if (($context["informations"] ?? null)) {
            // line 69
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 70
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
          ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 73
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 73);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </ul>
      </div>
      ";
        }
        // line 78
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 79
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 81
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 82
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 83
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 87
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 89
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 90
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 91
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 92
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 96
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 98
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 99
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 100
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 101
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 106
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer> -->

";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 111
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 111);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 111);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 111);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 114
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
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
        return array (  267 => 116,  258 => 114,  254 => 113,  241 => 111,  237 => 110,  230 => 106,  220 => 101,  214 => 100,  208 => 99,  202 => 98,  197 => 96,  188 => 92,  182 => 91,  176 => 90,  170 => 89,  165 => 87,  156 => 83,  150 => 82,  144 => 81,  139 => 79,  136 => 78,  131 => 75,  120 => 73,  116 => 72,  111 => 70,  108 => 69,  106 => 68,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
