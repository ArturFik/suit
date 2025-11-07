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

/* default/template/product/product.twig */
class __TwigTemplate_f36908142e329453f9f2807885109759953015263f8cee9a736a35129ca2d564 extends \Twig\Template
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

";
        // line 4
        echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"breadcrumb\">
    ";
        // line 7
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
            // line 8
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                // line 9
                echo "        <span>";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
      ";
            } else {
                // line 11
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</a><img src=\"/catalog/view/theme/default/images/i-separator.svg\">
      ";
            }
            // line 13
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
        // line 14
        echo "  </div>
  
  <div class=\"prd-card\">
    <div class=\"prd-card__content\">
      ";
        // line 18
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 19
            echo "        <div class=\"prd-card__img\">
          <a class=\"compare-link\" onclick=\"compare.add('";
            // line 20
            echo ($context["product_id"] ?? null);
            echo "'); return false;\" href=\"#\"><img src=\"/catalog/view/theme/default/images/i-graph.svg\"></a>
          <a class=\"wishlist-link\" onclick=\"wishlist.add('";
            // line 21
            echo ($context["product_id"] ?? null);
            echo "'); return false;\" href=\"#\"><img src=\"/catalog/view/theme/default/images/i-bookmark.svg\"></a>
          <div class=\"prd-card__img-big owl-carousel\">
            ";
            // line 23
            if (($context["popup"] ?? null)) {
                // line 24
                echo "              <div class=\"prd-card__big-item\"><img src=\"";
                echo ($context["popup"] ?? null);
                echo "\"></div>
            ";
            }
            // line 26
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 27
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 28
                    echo "                <div class=\"prd-card__big-item\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 28);
                    echo "\"></div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
            }
            // line 31
            echo "          </div>

          <div class=\"prd-card__img-thumbs\">
            <button class=\"thumb-nav thumb-prev\"><img src=\"/catalog/view/theme/default/images/angl-top.svg\"></button>
            <div class=\"prd-card__img-thumb owl-carousel\">
              ";
            // line 36
            if (($context["thumb"] ?? null)) {
                // line 37
                echo "                <div class=\"prd-card__thumb\" data-slide=\"0\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\"></div>
              ";
            }
            // line 39
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 40
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 41
                    echo "                  <div class=\"prd-card__thumb\" data-slide=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 41);
                    echo "\"></div>
                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "              ";
            }
            // line 44
            echo "            </div>
            <button class=\"thumb-nav thumb-next\"><img src=\"/catalog/view/theme/default/images/angl-bottom.svg\"></button>
          </div>
        </div>
      ";
        }
        // line 49
        echo "
      <div class=\"prd-card__info\" id=\"product\">
        <div class=\"prd-card__title\">";
        // line 51
        echo ($context["heading_title"] ?? null);
        echo "</div>
        ";
        // line 53
        echo "        ";
        // line 54
        echo "
        ";
        // line 55
        if (($context["attribute_groups"] ?? null)) {
            // line 56
            echo "          <div class=\"prd-card__description\">
          ";
            // line 57
            $context["loop_index0"] = 0;
            // line 58
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 59
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 60
                    echo "              ";
                    $context["loop_index0"] = (($context["loop_index0"] ?? null) + 1);
                    // line 61
                    echo "              ";
                    if ((($context["loop_index0"] ?? null) < 6)) {
                        // line 62
                        echo "                <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 62);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 62);
                        echo "</span>
              ";
                    }
                    // line 64
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </div>
        ";
        }
        // line 68
        echo "        
        ";
        // line 90
        echo "
        <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 91
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\" />
        <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 92
        echo ($context["product_id"] ?? null);
        echo "\" />
      </div>

      <div class=\"prd-card__price-bl\">
        <div class=\"prd-card__title\">";
        // line 96
        echo ($context["heading_title"] ?? null);
        echo "</div>
        <div class=\"prd-card__price_block\">
          ";
        // line 98
        if ( !($context["special"] ?? null)) {
            // line 99
            echo "            <div class=\"prd-card__price\">";
            echo ($context["price"] ?? null);
            echo "</div>
          ";
        } else {
            // line 101
            echo "            <div class=\"prd-card__price\">";
            echo ($context["special"] ?? null);
            echo "</div>
            <div class=\"prd-card__price old_price\">";
            // line 102
            echo ($context["price"] ?? null);
            echo "</div>
          ";
        }
        // line 104
        echo "        </div>

        <div class=\"item-add-to-cart dpp\">
          <div class=\"item-add-to-cart__input-block dpp\">
            <div class=\"item-add-to-cart__input-block_minus dpp\">-</div>
              <input class=\"item-add-to-cart__input-block_input dpp\" data-product-id=\"";
        // line 109
        echo ($context["product_id"] ?? null);
        echo "\" value=\"1\">
            <div class=\"item-add-to-cart__input-block_plus dpp\">+</div>
          </div>
        </div>
        <button id=\"button-cart\" class=\"btn btn-blue\">
          <img src=\"/catalog/view/theme/default/images/i-bag.svg\">
          <span>";
        // line 115
        echo ($context["button_cart_n"] ?? null);
        echo "</span>
        </button>

        

        ";
        // line 121
        echo "        ";
        // line 122
        echo "        ";
        // line 127
        echo "      </div>

    </div>
    ";
        // line 130
        if (($context["description"] ?? null)) {
            // line 131
            echo "      <div class=\"prd-card__text\">";
            echo ($context["description"] ?? null);
            echo "</div>
    ";
        }
        // line 133
        echo "  </div>
  <div class=\"prd-tab\">
    <div class=\"prd-tab__bl\">
      <div class=\"bl-h-scroll\">
        <div class=\"prd-tab__header\">
          ";
        // line 138
        if (($context["description"] ?? null)) {
            echo "<div class=\"prd-tab__header-item\">";
            echo ($context["tab_description"] ?? null);
            echo "</div>";
        }
        // line 139
        echo "          ";
        if (($context["attribute_groups"] ?? null)) {
            echo "<div class=\"prd-tab__header-item\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</div>";
        }
        // line 140
        echo "          ";
        if (($context["review_status"] ?? null)) {
            echo "<div class=\"prd-tab__header-item\">";
            echo ($context["tab_review"] ?? null);
            echo "</div>";
        }
        // line 141
        echo "          ";
        // line 142
        echo "          ";
        // line 143
        echo "          ";
        // line 144
        echo "        </div>
      </div>
      <div class=\"prd-tab__content\">
        ";
        // line 147
        if (($context["description"] ?? null)) {
            // line 148
            echo "        <div class=\"prd-tab__item\">
          <div class=\"prd-tab__item-text\">";
            // line 149
            echo ($context["description"] ?? null);
            echo "</div>
        </div>
        ";
        }
        // line 152
        echo "
        ";
        // line 153
        if (($context["attribute_groups"] ?? null)) {
            // line 154
            echo "        <div class=\"prd-tab__item\">
          <table class=\"prd-tab__item-table\" cellpadding=\"0\" cellspacing=\"0\">
            ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 157
                echo "            ";
                // line 162
                echo "            <tbody>
              ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 163));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 164
                    echo "              <tr>
                <th>";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 165);
                    echo "</th>
                <td>";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 166);
                    echo "</td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "            </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "          </table>
        </div>
        ";
        }
        // line 174
        echo "
        ";
        // line 175
        if (($context["review_status"] ?? null)) {
            // line 176
            echo "        <div class=\"prd-tab__item\" id=\"tab-review\">

          <div class=\"rating\">
            <p>";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 180
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 181
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('html,body').animate({scrollTop: \$('#form-review').offset().top}, 500); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 183
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            ";
            // line 185
            echo "          </div>
        </div>
        ";
        }
        // line 188
        echo "
        ";
        // line 192
        echo "
      </div>
    </div>
  </div>

  ";
        // line 197
        if (($context["tags"] ?? null)) {
            // line 198
            echo "  <div class=\"prd-hashtag\">
    <div class=\"title\">
      <h2>";
            // line 200
            echo ($context["title_product_tags_n"] ?? null);
            echo "</h2>
    </div>
    <div class=\"prd-hashtag__list\">
      ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 204
                echo "      <a class=\"prd-hashtag__item\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 204);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 204);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "    </div>
  </div>
  ";
        }
        // line 209
        echo "
  ";
        // line 210
        echo ($context["content_top"] ?? null);
        echo "

  ";
        // line 212
        if (($context["products"] ?? null)) {
            // line 213
            echo "  <div class=\"prod\">
    <div class=\"prod__content\">
      <div class=\"title\">
        <h2>";
            // line 216
            echo ($context["title_related_product_n"] ?? null);
            echo "</h2>
      </div>
      <div class=\"prod__list\">
        ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 220
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 220) < 4)) {
                    // line 221
                    echo "        <div class=\"prod__item\" itemscope itemtype=\"https://schema.org/Product\">
          <div class=\"prod__item-top\">
            <a onclick=\"compare.add('";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 223);
                    echo "'); return false;\" href=\"#\"><img src=\"/catalog/view/theme/default/images/i-graph.svg\"></a>
            <a onclick=\"wishlist.add('";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 224);
                    echo "'); return false;\" href=\"#\"><img src=\"/catalog/view/theme/default/images/i-bookmark.svg\"></a>
          </div>
          <div class=\"prod__item-img\">
            <a href=\"";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 227);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 227);
                    echo "\"></a>
          </div>
          <div class=\"prod__item-bottom\">
            <div class=\"prod__item-title\">
              <a href=\"";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
                    echo "\"><b itemprop=\"name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 231);
                    echo "</b></a>
              <span class=\"hidden\" itemprop=\"description\"></span>
            </div>
            <div class=\"prod__item-footer\">
              <div class=\"prod__item-price\">
                        ";
                    // line 236
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 236)) {
                        // line 237
                        echo "                  <span itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
                    ";
                        // line 238
                        echo ($context["text_from_n"] ?? null);
                        echo " <span itemprop=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price_orig", [], "any", false, false, false, 238);
                        echo "</span> ";
                        echo ($context["symbol_right"] ?? null);
                        echo "
                    <span itemprop=\"priceCurrency\" content=\"";
                        // line 239
                        echo ($context["currency"] ?? null);
                        echo "\">";
                        echo ($context["text_sht_n"] ?? null);
                        echo "</span>
                  </span>
                ";
                    } else {
                        // line 242
                        echo "                  <span itemprop=\"offers\" itemscope itemtype=\"https://schema.org/Offer\">
                    ";
                        // line 243
                        echo ($context["text_from_n"] ?? null);
                        echo " <span itemprop=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special_orig", [], "any", false, false, false, 243);
                        echo "</span>";
                        echo ($context["symbol_right"] ?? null);
                        echo "
                    <span itemprop=\"priceCurrency\" content=\"";
                        // line 244
                        echo ($context["currency"] ?? null);
                        echo "\">";
                        echo ($context["text_sht_n"] ?? null);
                        echo "</span>
                  </span>
                ";
                    }
                    // line 247
                    echo "              </div>

              <div class=\"item-add-to-cart\">
                <div class=\"item-add-to-cart__input-block\">
                  <div class=\"item-add-to-cart__input-block_minus\">-</div>
                  <input class=\"item-add-to-cart__input-block_input\" data-product-id=\"";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 252);
                    echo "\" value=\"1\" />
                  <div class=\"item-add-to-cart__input-block_plus\">+</div>
                </div>
                <a onclick=\"cart.add('";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 255);
                    echo "'); return false;\" class=\"prod__item-link\" href=\"#\" itemprop=\"url\">
                  <img src=\"images/i-bag.svg\"><span>";
                    // line 256
                    echo ($context["button_cart_n"] ?? null);
                    echo "</span>
                </a>
              </div>

            </div>
          </div>
        </div>
        ";
                }
                // line 264
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "      </div>
    </div>
  </div>
  ";
        }
        // line 269
        echo "
  ";
        // line 270
        echo ($context["content_bottom"] ?? null);
        echo "

</div>


<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');
\t\t\t\t\$('#cart').load('index.php?route=common/cart/info');

        \$('.item-add-to-cart__input-block_input[data-product-id=\"' + product_id + '\"]').closest('.item-add-to-cart').find('.item-add-to-cart__input-block').removeClass('hidden');
\t\t\t\t\$('.item-add-to-cart__input-block_input[data-product-id=\"' + product_id + '\"]').closest('.item-add-to-cart').find('.prod__item-link span').addClass('hidden');

        if(json['product_id']){
          \$('.item-add-to-cart__input-block_input[data-product-id=\"' + json['product_id'] + '\"]').closest('.item-add-to-cart').find('.item-add-to-cart__input-block_minus').attr('onclick', \"cart.update('\" + json['cart_id'] + \"', '\" + Number(Number(json['quantity']) - 1) + \"');\");
          \$('.item-add-to-cart__input-block_input[data-product-id=\"' + json['product_id'] + '\"]').closest('.item-add-to-cart').find('.item-add-to-cart__input-block_plus').attr('onclick', \"cart.update('\" + json['cart_id'] + \"', '\" + Number(Number(json['quantity']) + 1) + \"');\");

          \$('.item-add-to-cart__input-block_input[data-product-id=\"' + product_id + '\"]').val(Number(json['quantity']));
          \$('.item-add-to-cart__input-block_input[data-product-id=\"' + product_id + '\"]').attr('value', Number(json['quantity']));
        }
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 352
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 357
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 363
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 430
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 434
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 472
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 472,  877 => 434,  870 => 430,  800 => 363,  791 => 357,  783 => 352,  698 => 270,  695 => 269,  689 => 265,  675 => 264,  664 => 256,  660 => 255,  654 => 252,  647 => 247,  639 => 244,  631 => 243,  628 => 242,  620 => 239,  612 => 238,  609 => 237,  607 => 236,  597 => 231,  588 => 227,  582 => 224,  578 => 223,  574 => 221,  571 => 220,  554 => 219,  548 => 216,  543 => 213,  541 => 212,  536 => 210,  533 => 209,  528 => 206,  517 => 204,  513 => 203,  507 => 200,  503 => 198,  501 => 197,  494 => 192,  491 => 188,  486 => 185,  482 => 183,  469 => 181,  462 => 180,  458 => 179,  453 => 176,  451 => 175,  448 => 174,  443 => 171,  436 => 169,  427 => 166,  423 => 165,  420 => 164,  416 => 163,  413 => 162,  411 => 157,  407 => 156,  403 => 154,  401 => 153,  398 => 152,  392 => 149,  389 => 148,  387 => 147,  382 => 144,  380 => 143,  378 => 142,  376 => 141,  369 => 140,  362 => 139,  356 => 138,  349 => 133,  343 => 131,  341 => 130,  336 => 127,  334 => 122,  332 => 121,  324 => 115,  315 => 109,  308 => 104,  303 => 102,  298 => 101,  292 => 99,  290 => 98,  285 => 96,  278 => 92,  274 => 91,  271 => 90,  268 => 68,  264 => 66,  258 => 65,  252 => 64,  244 => 62,  241 => 61,  238 => 60,  233 => 59,  228 => 58,  226 => 57,  223 => 56,  221 => 55,  218 => 54,  216 => 53,  212 => 51,  208 => 49,  201 => 44,  198 => 43,  179 => 41,  161 => 40,  158 => 39,  152 => 37,  150 => 36,  143 => 31,  140 => 30,  131 => 28,  126 => 27,  123 => 26,  117 => 24,  115 => 23,  110 => 21,  106 => 20,  103 => 19,  101 => 18,  95 => 14,  81 => 13,  73 => 11,  67 => 9,  64 => 8,  47 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
