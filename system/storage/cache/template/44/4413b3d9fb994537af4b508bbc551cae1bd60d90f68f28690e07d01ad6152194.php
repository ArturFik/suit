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

/* default/template/blog/blog_category.twig */
class __TwigTemplate_5a92e403b4bcbef59467bbaf6dd40cf122d8b75c2325240821fb593d9f5c6950 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        echo " 
     
    <div id=\"content\" class=\"";
        // line 17
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <div class=\"blog\">
      <h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
    ";
        // line 21
        if (($context["blog_category_description"] ?? null)) {
            echo " 
    <div class=\"main_description\">
    ";
            // line 23
            echo ($context["blog_category_description"] ?? null);
            echo " 
    </div>
    ";
        }
        // line 25
        echo " 
        
    ";
        // line 27
        if (($context["blogs"] ?? null)) {
            echo " 
    <div class=\"blog_grid_holder column-";
            // line 28
            echo ($context["list_columns"] ?? null);
            echo "\">
            
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
        <div class=\"blog_item\">
                
                <div class=\"summary\">
                <h2 class=\"blog_title\"><a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 34);
                echo "</a></h2>
                <div class=\"blog_stats\">
                ";
                // line 36
                if (($context["author_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
                    echo ($context["text_posted_by"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 36);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 37
                if (($context["date_added_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-clock-o\"></i><b class=\"text\">";
                    echo ($context["text_posted_on"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added_full", [], "any", false, false, false, 37);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 38
                if (($context["page_view_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
                    echo ($context["text_read"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "count_read", [], "any", false, false, false, 38);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 39
                if (($context["comments_count_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-comments\"></i><b class=\"text\">";
                    echo ($context["text_comments"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "comment_total", [], "any", false, false, false, 39);
                    echo "</b></span>";
                }
                echo " 
                </div>
                ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 41)) {
                    echo " 
                <div class=\"image\">
        <a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 43);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 43);
                    echo "\" /></a>
                </div>
        ";
                }
                // line 45
                echo " 
        <p>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "short_description", [], "any", false, false, false, 46);
                echo "</p>
                <p><a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 47);
                echo "\">";
                echo ($context["text_read_more"] ?? null);
                echo "  <i class=\"fa fa-long-arrow-right\"></i></a></p>
                </div>
               </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
        </div>
      
    <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 55
            echo ($context["results"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 56
            echo ($context["pagination"] ?? null);
            echo "</div>
      </div>
  ";
        } else {
            // line 58
            echo "  
    ";
            // line 59
            echo ($context["text_no_results"] ?? null);
            echo " 
  ";
        }
        // line 60
        echo " 
    </div>
      ";
        // line 62
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 63
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 65
        echo ($context["footer"] ?? null);
        echo "  ";
    }

    public function getTemplateName()
    {
        return "default/template/blog/blog_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 65,  251 => 63,  247 => 62,  243 => 60,  238 => 59,  235 => 58,  229 => 56,  225 => 55,  219 => 51,  207 => 47,  203 => 46,  200 => 45,  188 => 43,  183 => 41,  172 => 39,  162 => 38,  152 => 37,  142 => 36,  135 => 34,  126 => 30,  121 => 28,  117 => 27,  113 => 25,  107 => 23,  102 => 21,  97 => 19,  90 => 17,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/blog_category.twig", "");
    }
}
