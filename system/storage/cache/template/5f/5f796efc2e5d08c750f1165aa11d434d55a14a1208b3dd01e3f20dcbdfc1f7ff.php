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
class __TwigTemplate_20780ca765bcb58788aaa27cdd7ac826b7f777ed949c432040bc88f1d9c94a64 extends \Twig\Template
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
\t";
        // line 12
        echo ($context["footer_newsletter"] ?? null);
        echo "

\t\t\t\t";
        // line 14
        echo ($context["footer_newsletter"] ?? null);
        echo "
\t\t\t
\t<div class=\"footer__bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__bottom-content\">
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 20
        echo ($context["title_about_us_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_about_us_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 24);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 30
        echo ($context["title_catalog_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">

\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 2), 1, "ceil")));
        foreach ($context['_seq'] as $context["_key"] => $context["categories_row"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["categories_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 43
        echo ($context["title_payment_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_payment_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 47);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 53
        echo ($context["title_service_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_service_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 57);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 57);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 63
        echo ($context["title_work_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__row\">
\t\t\t\t\t\t<div class=\"footer__nav\">
\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_service_footer"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t<a ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) {
                echo "class=\"footer__title\"";
            }
            echo " href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 67);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 67);
            echo "</a>
\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__col\">
\t\t\t\t\t<div class=\"footer__title\">";
        // line 73
        echo ($context["title_soc_footer"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"footer__soc\">
\t\t\t\t\t\t<a href=\"";
        // line 75
        echo ($context["fb_link"] ?? null);
        echo "\"><img src=\"images/i-fb.svg\"></a>
\t\t\t\t\t\t<a href=\"";
        // line 76
        echo ($context["vk_link"] ?? null);
        echo "\"><img src=\"images/i-vk.svg\"></a>
\t\t\t\t\t\t<a href=\"";
        // line 77
        echo ($context["youtube_link"] ?? null);
        echo "\"><img src=\"images/i-youtube.svg\"></a>
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


";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 95
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 95);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 95);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 95);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 98
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
";
        // line 101
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
        return array (  315 => 101,  312 => 100,  303 => 98,  299 => 97,  286 => 95,  282 => 94,  272 => 87,  268 => 86,  256 => 77,  252 => 76,  248 => 75,  243 => 73,  237 => 69,  214 => 67,  197 => 66,  191 => 63,  185 => 59,  174 => 57,  170 => 56,  164 => 53,  158 => 49,  147 => 47,  143 => 46,  137 => 43,  132 => 40,  125 => 38,  114 => 36,  110 => 35,  107 => 34,  103 => 33,  97 => 30,  91 => 26,  80 => 24,  76 => 23,  70 => 20,  61 => 14,  56 => 12,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
