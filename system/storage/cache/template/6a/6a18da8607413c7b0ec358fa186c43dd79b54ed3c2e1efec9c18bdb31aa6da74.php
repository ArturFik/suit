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
class __TwigTemplate_7a454c43247cf1603dcd3a6a1a9899251839232a77a7e4c8c0cf30eb70867327 extends \Twig\Template
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
        echo "    </main>

\t\t\t\t<!--
\t\t\t\t* Ci Newsletter Starts
\t\t\t\t-->
\t\t\t\t";
        // line 6
        echo ($context["popup_newsletter"] ?? null);
        echo "
\t\t\t\t";
        // line 7
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
                  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_about_us_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 24
            echo "                    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 24);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </div>
              </div>
            </div>
            <div class=\"footer__col\">
              <div class=\"footer__title\">";
        // line 30
        echo ($context["title_catalog_footer"] ?? null);
        echo "</div>
              <div class=\"footer__row\">

                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 2), 1, "ceil")));
        foreach ($context['_seq'] as $context["_key"] => $context["categories_row"]) {
            // line 34
            echo "                  <div class=\"footer__nav\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["categories_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "                      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </div>
            </div>
            <div class=\"footer__col\">
              <div class=\"footer__title\">";
        // line 43
        echo ($context["title_payment_footer"] ?? null);
        echo "</div>
              <div class=\"footer__row\">
                <div class=\"footer__nav\">
                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_payment_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 47
            echo "                    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 47);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>
              </div>
            </div>
            <div class=\"footer__col\">
              <div class=\"footer__title\">";
        // line 53
        echo ($context["title_service_footer"] ?? null);
        echo "</div>
              <div class=\"footer__row\">
                <div class=\"footer__nav\">
                  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_service_footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 57
            echo "                    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 57);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 57);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
              </div>
            </div>
            <div class=\"footer__col\">
              <div class=\"footer__title\">";
        // line 63
        echo ($context["title_work_footer"] ?? null);
        echo "</div>
              <div class=\"footer__row\">
                <div class=\"footer__nav\">
                  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations_special_footer"] ?? null));
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
            echo "                    <a ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) {
                echo "class=\"footer__title\"";
            }
            echo " href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 67);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 67);
            echo "</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>
              </div>
            </div>
            <div class=\"footer__col\">
              ";
        // line 79
        echo "            </div>
          </div>
        </div>
      </div>
      <div class=\"footer__copy\">
        <div class=\"container\">
          <div class=\"footer__copy-content\">
            <div class=\"footer__copy-left\">";
        // line 86
        echo ($context["text_powered_footer_left"] ?? null);
        echo "</div>
            <div class=\"footer__copy-right\">";
        // line 87
        echo ($context["text_powered_footer_right"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </footer>


    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 95
            echo "    <link href=\"";
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 98
            echo "    <script src=\"";
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
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "status", [], "any", false, false, false, 102)) {
            // line 103
            echo "            <script type=\"text/javascript\">var ocpoc_params = {\"list_selector\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "list_selector", [], "any", false, false, false, 103);
            echo "\",\"product_btn_block_class\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_class", [], "any", false, false, false, 103);
            echo "\",\"product_btn_class\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_class", [], "any", false, false, false, 103);
            echo "\",\"show_in_cat\":";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "show_in_cat", [], "any", false, false, false, 103);
            echo ",\"show_in_prod\":";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "show_in_prod", [], "any", false, false, false, 103);
            echo ",\"button_text\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "oc_button_text", [], "any", false, false, false, 103);
            echo "\",\"close_button_text\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "close_button_text", [], "any", false, false, false, 103);
            echo "\",\"descr_show_text\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "description_show_text", [], "any", false, false, false, 103);
            echo "\",\"descr_hide_text\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "description_hide_text", [], "any", false, false, false, 103);
            echo "\",\"order_button_text_loading\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "order_button_text_loading", [], "any", false, false, false, 103);
            echo "\",\"order_button_text\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_localisation"] ?? null), "order_button_text", [], "any", false, false, false, 103);
            echo "\",\"list_btns\":[";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ocpoc_list_btns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["btn"]) {
                echo "{\"list_element\":\"";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_element", [], "any", false, false, false, 103);
                echo "\",\"list_product_block\":\"";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_product_block", [], "any", false, false, false, 103);
                echo "\",\"list_position\":";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_position", [], "any", false, false, false, 103);
                echo ",\"list_btn_class\":\"";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_class", [], "any", false, false, false, 103);
                echo "\",\"list_btn_block_class\":\"";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_class", [], "any", false, false, false, 103);
                echo "\"},";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "],\"product_position\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_position", [], "any", false, false, false, 103);
            echo "\",\"product_element\":\"";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_element", [], "any", false, false, false, 103);
            echo "\"};</script>
            ";
        }
        // line 105
        echo "            <style>";
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "wrapper_bg", [], "any", false, false, false, 105)) {
            echo ".mfpocp-bg{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "wrapper_bg", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "wrapper_opacity", [], "any", false, false, false, 105)) {
            echo ".mfpocp-bg{opacity:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "wrapper_opacity", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "head_footer_bg", [], "any", false, false, false, 105)) {
            echo ".ocpoc-head,.ocpoc-footer{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "head_footer_bg", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "form_bg", [], "any", false, false, false, 105)) {
            echo ".ocpoc-body{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "form_bg", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-success{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg", [], "any", false, false, false, 105);
            echo ";border-color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg", [], "any", false, false, false, 105);
            echo ";}";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg_hover", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-success:hover,.ocpoc .btn-success:focus{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg_hover", [], "any", false, false, false, 105);
            echo ";border-color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_bg_hover", [], "any", false, false, false, 105);
            echo ";}";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_color", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-success{color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "checkout_button_color", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-danger{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg", [], "any", false, false, false, 105);
            echo ";border-color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg", [], "any", false, false, false, 105);
            echo ";}";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg_hover", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-danger:hover,.ocpoc .btn-danger:focus{background:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg_hover", [], "any", false, false, false, 105);
            echo ";border-color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_bg_hover", [], "any", false, false, false, 105);
            echo ";}";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_color", [], "any", false, false, false, 105)) {
            echo ".ocpoc .btn-danger{color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "close_button_color", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "heading_font_color", [], "any", false, false, false, 105)) {
            echo ".ocpoc-head,.mfpocp-close-btn-in .ocpoc .mfpocp-close{color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "heading_font_color", [], "any", false, false, false, 105);
            echo " }";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "body_font_color", [], "any", false, false, false, 105)) {
            echo ".ocpoc,.ocpoc-pname,a.ocpoc-show-descr{color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "body_font_color", [], "any", false, false, false, 105);
            echo " }a.ocpoc-show-descr{border-color:";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "body_font_color", [], "any", false, false, false, 105);
            echo " }";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ocpoc_list_btns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["btn"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_css", [], "any", false, false, false, 105) && twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_class", [], "any", false, false, false, 105))) {
                echo ".";
                echo twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_class", [], "any", false, false, false, 105);
                echo " { ";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_css", [], "any", false, false, false, 105), ["
" => ""]);
                echo " }";
            }
            if (((twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_css", [], "any", false, false, false, 105) && twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_class", [], "any", false, false, false, 105)) && twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_class", [], "any", false, false, false, 105))) {
                echo " .";
                echo ((twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_block_class", [], "any", false, false, false, 105) . " button.") . twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_class", [], "any", false, false, false, 105));
                echo " { ";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["btn"], "list_btn_css", [], "any", false, false, false, 105), ["
" => ""]);
                echo " }";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_css", [], "any", false, false, false, 105) && twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_class", [], "any", false, false, false, 105))) {
            echo ".";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_class", [], "any", false, false, false, 105);
            echo " { ";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_css", [], "any", false, false, false, 105);
            echo " }";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_css", [], "any", false, false, false, 105) && twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_class", [], "any", false, false, false, 105)) && twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_class", [], "any", false, false, false, 105))) {
            echo ".";
            echo ((twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_block_class", [], "any", false, false, false, 105) . " button.") . twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_class", [], "any", false, false, false, 105));
            echo " { ";
            echo twig_get_attribute($this->env, $this->source, ($context["ocpoc_settings"] ?? null), "product_btn_css", [], "any", false, false, false, 105);
            echo " }";
        }
        echo "</style>
            
";
        // line 107
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
        return array (  461 => 107,  349 => 105,  300 => 103,  298 => 102,  294 => 100,  285 => 98,  280 => 97,  267 => 95,  263 => 94,  253 => 87,  249 => 86,  240 => 79,  234 => 69,  211 => 67,  194 => 66,  188 => 63,  182 => 59,  171 => 57,  167 => 56,  161 => 53,  155 => 49,  144 => 47,  140 => 46,  134 => 43,  129 => 40,  122 => 38,  111 => 36,  107 => 35,  104 => 34,  100 => 33,  94 => 30,  88 => 26,  77 => 24,  73 => 23,  67 => 20,  58 => 14,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
