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

/* blog/blog_category_list.twig */
class __TwigTemplate_5357ea3b8e60c883175062aa3b7fdbfc7fdf164956db07d66c925665f557475b extends \Twig\Template
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
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo " 
    ";
        // line 22
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 23
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["heading_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      
  
      <form action=\"";
        // line 34
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
        <div class=\"table-responsive\">
         <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td width=\"1\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
              <td>";
        // line 40
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 41
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 42
        echo ($context["column_status"] ?? null);
        echo "</td>
              <td width=\"1\">";
        // line 43
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 47
        if (($context["blog_categories"] ?? null)) {
            echo " 
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_category"]) {
                echo " 
            <tr>
              <td style=\"text-align: center;\">
                ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["blog_category"], "selected", [], "any", false, false, false, 51)) {
                    echo " 
                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "blog_category_id", [], "any", false, false, false, 52);
                    echo "\" checked=\"checked\" />
                ";
                } else {
                    // line 53
                    echo "   
                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "blog_category_id", [], "any", false, false, false, 54);
                    echo "\" />
                ";
                }
                // line 56
                echo "              </td>
              <td>";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "name", [], "any", false, false, false, 57);
                echo "</td>
              <td class=\"text-right\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "sort_order", [], "any", false, false, false, 58);
                echo "</td>
              <td class=\"text-right\">
              ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["blog_category"], "status", [], "any", false, false, false, 60)) {
                    echo " 
              <span class=\"label label-success\" style=\"font-size:100%;\">";
                    // line 61
                    echo ($context["text_enabled"] ?? null);
                    echo "</span>
              ";
                } else {
                    // line 62
                    echo "  
              <span class=\"label label-danger\" style=\"font-size:100%;\">";
                    // line 63
                    echo ($context["text_disabled"] ?? null);
                    echo "</span>
              ";
                }
                // line 64
                echo " 
            </td>
              <td class=\"text-right\">
                <a href=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["blog_category"], "edit", [], "any", false, false, false, 67);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo " 
            ";
        } else {
            // line 71
            echo "   
            <tr>
              <td class=\"text-center\" colspan=\"5\">";
            // line 73
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 75
        echo " 
          </tbody>
        </table>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
";
        // line 84
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "blog/blog_category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 84,  242 => 75,  236 => 73,  232 => 71,  228 => 70,  216 => 67,  211 => 64,  206 => 63,  203 => 62,  198 => 61,  194 => 60,  189 => 58,  185 => 57,  182 => 56,  177 => 54,  174 => 53,  169 => 52,  165 => 51,  157 => 48,  153 => 47,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  125 => 34,  117 => 29,  112 => 26,  105 => 23,  101 => 22,  98 => 21,  91 => 18,  87 => 17,  80 => 12,  70 => 11,  64 => 10,  59 => 8,  52 => 6,  46 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/blog_category_list.twig", "");
    }
}
