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

/* blog/blog_list.twig */
class __TwigTemplate_6c330e8d94276d5f2887ec99caa1348c083e9dfad84fd11dfef7bef80d179576 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_ebee4faeec7a349762be97196107c02cda36e353f0b023db4fb6395ed66285f1' => [$this, 'block___internal_ebee4faeec7a349762be97196107c02cda36e353f0b023db4fb6395ed66285f1'],
            '__internal_1baa63a5295c5ed481dbaa00dd241e5cebcd0166f8a1f8767b23e9dbd0fa4a32' => [$this, 'block___internal_1baa63a5295c5ed481dbaa00dd241e5cebcd0166f8a1f8767b23e9dbd0fa4a32'],
            '__internal_66eedfa9cf38a249a1826305284376ca9272b58f9a056e0e545418abdecd511e' => [$this, 'block___internal_66eedfa9cf38a249a1826305284376ca9272b58f9a056e0e545418abdecd511e'],
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
        echo " ') ? \$('#form').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">

      <div class=\"table-responsive\">
         <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td width=\"1\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\" /></td>
            <td>";
        // line 39
        if ((($context["sort"] ?? null) == "id.title")) {
            echo " 
              <a href=\"";
            // line 40
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env,             $this->renderBlock("__internal_ebee4faeec7a349762be97196107c02cda36e353f0b023db4fb6395ed66285f1", $context, $blocks));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
              ";
        } else {
            // line 41
            echo "   
              <a href=\"";
            // line 42
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
              ";
        }
        // line 43
        echo "</td>
            <td>";
        // line 44
        if ((($context["sort"] ?? null) == "i.date_added")) {
            echo " 
              <a href=\"";
            // line 45
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env,             $this->renderBlock("__internal_1baa63a5295c5ed481dbaa00dd241e5cebcd0166f8a1f8767b23e9dbd0fa4a32", $context, $blocks));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
              ";
        } else {
            // line 46
            echo "   
              <a href=\"";
            // line 47
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
              ";
        }
        // line 48
        echo "</td>
            <td class=\"text-right\">";
        // line 49
        echo ($context["column_comments"] ?? null);
        echo "</td>
            <td class=\"text-right\">";
        // line 50
        echo ($context["column_count_read"] ?? null);
        echo "</td>
      <td class=\"text-right\">";
        // line 51
        if ((($context["sort"] ?? null) == "i.sort_order")) {
            echo " 
              <a href=\"";
            // line 52
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env,             $this->renderBlock("__internal_66eedfa9cf38a249a1826305284376ca9272b58f9a056e0e545418abdecd511e", $context, $blocks));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
              ";
        } else {
            // line 53
            echo "   
              <a href=\"";
            // line 54
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
              ";
        }
        // line 55
        echo "</td>
              <td class=\"text-right\">";
        // line 56
        echo ($context["column_status"] ?? null);
        echo "</td>
            <td width=\"1\">";
        // line 57
        echo ($context["column_action"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          ";
        // line 61
        if (($context["blogs"] ?? null)) {
            echo " 
          ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
          <tr>
            <td style=\"text-align: center;\">";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "selected", [], "any", false, false, false, 64)) {
                    echo " 
              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blog_id", [], "any", false, false, false, 65);
                    echo "\" checked=\"checked\" />
             ";
                } else {
                    // line 66
                    echo "   
              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "blog_id", [], "any", false, false, false, 67);
                    echo "\" />
              ";
                }
                // line 68
                echo " </td>
            <td>";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 69);
                echo "</td>
            <td>";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 70);
                echo "</td>

            <td class=\"text-right\">";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "comment_total", [], "any", false, false, false, 72);
                echo "</td>
            <td class=\"text-right\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "count_read", [], "any", false, false, false, 73);
                echo "</td>
            <td class=\"text-right\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "sort_order", [], "any", false, false, false, 74);
                echo "</td>
            <td class=\"text-right\">
            ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "status", [], "any", false, false, false, 76)) {
                    echo " 
            <span class=\"label label-success\" style=\"font-size:100%;\">";
                    // line 77
                    echo ($context["text_enabled"] ?? null);
                    echo "</span>
            ";
                } else {
                    // line 78
                    echo "  
            <span class=\"label label-danger\" style=\"font-size:100%;\">";
                    // line 79
                    echo ($context["text_disabled"] ?? null);
                    echo "</span>
            ";
                }
                // line 81
                echo "            </td>
            <td class=\"text-right\"><a href=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "edit", [], "any", false, false, false, 82);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo " 
          ";
        } else {
            // line 85
            echo "   
          <tr>
            <td class=\"text-center\" colspan=\"8\">";
            // line 87
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
           ";
        }
        // line 89
        echo "  
        </tbody>
      </table>
      </div>
    
    </form>
    <div class=\"row\">
     <div class=\"col-sm-6 text-left\">";
        // line 96
        echo ($context["pagination"] ?? null);
        echo "</div>
     <div class=\"col-sm-6 text-right\">";
        // line 97
        echo ($context["results"] ?? null);
        echo "</div>
    </div>
    </div>
    </div>
  </div>
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo " ";
    }

    // line 40
    public function block___internal_ebee4faeec7a349762be97196107c02cda36e353f0b023db4fb6395ed66285f1($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["order"] ?? null);
    }

    // line 45
    public function block___internal_1baa63a5295c5ed481dbaa00dd241e5cebcd0166f8a1f8767b23e9dbd0fa4a32($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["order"] ?? null);
    }

    // line 52
    public function block___internal_66eedfa9cf38a249a1826305284376ca9272b58f9a056e0e545418abdecd511e($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["order"] ?? null);
    }

    public function getTemplateName()
    {
        return "blog/blog_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 52,  365 => 45,  358 => 40,  353 => 103,  344 => 97,  340 => 96,  331 => 89,  325 => 87,  321 => 85,  317 => 84,  306 => 82,  303 => 81,  298 => 79,  295 => 78,  290 => 77,  286 => 76,  281 => 74,  277 => 73,  273 => 72,  268 => 70,  264 => 69,  261 => 68,  256 => 67,  253 => 66,  248 => 65,  244 => 64,  237 => 62,  233 => 61,  226 => 57,  222 => 56,  219 => 55,  212 => 54,  209 => 53,  200 => 52,  196 => 51,  192 => 50,  188 => 49,  185 => 48,  178 => 47,  175 => 46,  166 => 45,  162 => 44,  159 => 43,  152 => 42,  149 => 41,  140 => 40,  136 => 39,  126 => 32,  120 => 29,  115 => 26,  108 => 23,  104 => 22,  101 => 21,  94 => 18,  90 => 17,  83 => 12,  73 => 11,  67 => 10,  62 => 8,  55 => 6,  49 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/blog_list.twig", "");
    }
}
