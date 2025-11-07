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

/* default/template/product/compare.twig */
class __TwigTemplate_e59ef6126537b64bbf07926befcbe66741d13102e1813cfadfde49f330f3b4fa extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
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
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "

  <div id=\"content\" class=\"\">
    ";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
    <div class=\"title\"><h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
    ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "    <div class=\"table-block table-block-compare\">
      <table class=\"table-block__table table-order-info-compare\">
        ";
            // line 31
            echo "        <tbody>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 33
            echo ($context["text_name"] ?? null);
            echo "</span></div></td>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 35
                echo "            <td><div class=\"td-block__content\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "</a></div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 39
            echo ($context["text_image"] ?? null);
            echo "</span></div></td>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "            <td class=\"text-left\">
              ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42)) {
                    echo " 
              <div class=\"td-block__content\">
                <img src=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" class=\"img-thumbnail td-block__content_img\" />
              </div>
              ";
                }
                // line 47
                echo "            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 51
            echo ($context["text_price"] ?? null);
            echo "</span></div></td>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "            <td>
              <div class=\"td-block__content\">";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "              ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                        echo "
              ";
                    } else {
                        // line 57
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57);
                        echo "
              ";
                    }
                    // line 59
                    echo "              ";
                }
                // line 60
                echo "              </div>
            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 65
            echo ($context["text_model"] ?? null);
            echo "</span></div></td>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "            <td><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 67);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 71
            echo ($context["text_manufacturer"] ?? null);
            echo "</span></div></td>
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "            <td><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 73);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 77
            echo ($context["text_availability"] ?? null);
            echo "</span></div></td>
            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                echo "            <td><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 79);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          </tr>
          ";
            // line 82
            if (($context["review_status"] ?? null)) {
                // line 83
                echo "          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
                // line 84
                echo ($context["text_rating"] ?? null);
                echo "</span></div></td>
            ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 86
                    echo "            <td class=\"rating\">
              <div class=\"td-block__content\">
              ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 89
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            // line 90
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                    class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 92
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
                ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 93);
                    echo "
              </div>
            </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "          </tr>
          ";
            }
            // line 99
            echo "          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 100
            echo ($context["text_summary"] ?? null);
            echo "</span></div></td>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "            <td class=\"description\"><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 102);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 106
            echo ($context["text_weight"] ?? null);
            echo "</span></div></td>
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "            <td><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 108);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "          </tr>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
            // line 112
            echo ($context["text_dimension"] ?? null);
            echo "</span></div></td>
            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "            <td><div class=\"td-block__content\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 114);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 114);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 114);
                echo "</div></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "          </tr>
        </tbody>

        ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 120
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 122
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><div class=\"td-block__content\"><span class=\"fw600\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 122);
                echo "</span></div></td>
          </tr>
        </thead>
        ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 126
                    echo "        <tbody>
          <tr>
            <td><div class=\"td-block__content\"><span class=\"fw600\">";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 128);
                    echo "</span></div></td>
            ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 130
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 130)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 131
                            echo "            <td><div class=\"td-block__content\">";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 131)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</div></td>
            ";
                        } else {
                            // line 133
                            echo "            <td><div class=\"td-block__content\"></div></td>
            ";
                        }
                        // line 135
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        <tr>
          <td></td>
          ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 143
                echo "          <td>
            <div class=\"td-block__content product-compare-buttons\">
              <input type=\"button\" value=\"";
                // line 145
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-blue\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 145);
                echo "');\" />
              <a href=\"";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 146);
                echo "\" class=\"btn btn-red\">";
                echo ($context["button_remove"] ?? null);
                echo "</a>
            </div>
          </td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "        </tr>
      </table>
    </div>
    ";
        } else {
            // line 154
            echo "    <div class=\"compare-empty\">
      <p>";
            // line 155
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-left\"><a href=\"";
            // line 157
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-blue\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
    </div>
    
    ";
        }
        // line 162
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 164
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 166
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 166,  548 => 164,  542 => 162,  532 => 157,  527 => 155,  524 => 154,  518 => 150,  506 => 146,  498 => 145,  494 => 143,  490 => 142,  486 => 140,  480 => 139,  472 => 136,  466 => 135,  462 => 133,  456 => 131,  453 => 130,  449 => 129,  445 => 128,  441 => 126,  437 => 125,  429 => 122,  425 => 120,  421 => 119,  416 => 116,  403 => 114,  399 => 113,  395 => 112,  391 => 110,  382 => 108,  378 => 107,  374 => 106,  370 => 104,  361 => 102,  357 => 101,  353 => 100,  350 => 99,  346 => 97,  336 => 93,  328 => 92,  324 => 90,  319 => 89,  315 => 88,  311 => 86,  307 => 85,  303 => 84,  300 => 83,  298 => 82,  295 => 81,  286 => 79,  282 => 78,  278 => 77,  274 => 75,  265 => 73,  261 => 72,  257 => 71,  253 => 69,  244 => 67,  240 => 66,  236 => 65,  232 => 63,  224 => 60,  221 => 59,  213 => 57,  207 => 56,  204 => 55,  202 => 54,  199 => 53,  195 => 52,  191 => 51,  187 => 49,  180 => 47,  170 => 44,  165 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 37,  139 => 35,  135 => 34,  131 => 33,  127 => 31,  123 => 24,  121 => 23,  117 => 22,  113 => 21,  107 => 18,  104 => 17,  96 => 13,  94 => 12,  91 => 11,  77 => 10,  69 => 8,  63 => 6,  60 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/compare.twig", "");
    }
}
