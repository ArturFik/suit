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

/* default/template/information/contact.twig */
class __TwigTemplate_6c89b0c459f10d9cfbf10d28c4483bb08a916584665c83bccc66fdd88b1b5a1d extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>

\t\t";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t";
        }
        // line 12
        echo "\t\t
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 23
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 27
        if (($context["image"] ?? null)) {
            // line 28
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 30
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 32
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 34
        if (($context["geocode"] ?? null)) {
            // line 35
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 37
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 38
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 39
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 41
        if (($context["fax"] ?? null)) {
            // line 42
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 43
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 45
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 47
        if (($context["open"] ?? null)) {
            // line 48
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 49
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 52
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 53
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 54
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 56
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 60
        if (($context["locations"] ?? null)) {
            // line 61
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 64
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 66);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 66);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 68);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 72);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 74
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 74);
                echo "</strong><br />
                  <address>
                  ";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 76);
                echo "
                  </address>
                  ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 79));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 81
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 82
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 83);
                echo "<br />
                  <br />
                  ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 87);
                    echo "
                  ";
                }
                // line 89
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 93);
                    echo "<br />
                  <br />
                  ";
                }
                // line 96
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 98);
                    echo "
                  ";
                }
                // line 100
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </div>
      ";
        }
        // line 108
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 110
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 112
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 114
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 115
        if (($context["error_name"] ?? null)) {
            // line 116
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 118
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 121
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 123
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 124
        if (($context["error_email"] ?? null)) {
            // line 125
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 127
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 130
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 132
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 133
        if (($context["error_enquiry"] ?? null)) {
            // line 134
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 136
        echo "            </div>
          </div>
          ";
        // line 138
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>

\t\t";
        // line 141
        if (($context["text_agree"] ?? null)) {
            // line 142
            echo "\t\t<div class=\"buttons\">
\t\t  <div class=\"pull-right\">";
            // line 143
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t";
            // line 144
            if (($context["agree"] ?? null)) {
                // line 145
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t";
            } else {
                // line 147
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t";
            }
            // line 149
            echo "\t\t\t&nbsp;
\t\t\t<input type=\"submit\" value=\"";
            // line 150
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t  </div>
\t\t</div>
\t\t";
        } else {
            // line 154
            echo "\t\t
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 157
            echo ($context["button_submit"] ?? null);
            echo "\" />
          </div>
        </div>

\t\t";
        }
        // line 162
        echo "\t\t
      </form>
      ";
        // line 164
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 165
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 167
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 167,  475 => 165,  471 => 164,  467 => 162,  459 => 157,  454 => 154,  447 => 150,  444 => 149,  440 => 147,  436 => 145,  434 => 144,  430 => 143,  427 => 142,  425 => 141,  419 => 138,  415 => 136,  409 => 134,  407 => 133,  403 => 132,  398 => 130,  393 => 127,  387 => 125,  385 => 124,  381 => 123,  376 => 121,  371 => 118,  365 => 116,  363 => 115,  359 => 114,  354 => 112,  349 => 110,  343 => 108,  339 => 106,  328 => 100,  323 => 98,  318 => 97,  315 => 96,  309 => 93,  304 => 92,  302 => 91,  298 => 89,  293 => 87,  288 => 86,  286 => 85,  281 => 83,  277 => 82,  274 => 81,  264 => 79,  262 => 78,  257 => 76,  251 => 74,  241 => 72,  239 => 71,  233 => 68,  226 => 66,  222 => 64,  218 => 63,  212 => 61,  210 => 60,  204 => 56,  199 => 54,  194 => 53,  191 => 52,  185 => 49,  180 => 48,  178 => 47,  174 => 45,  169 => 43,  164 => 42,  162 => 41,  157 => 39,  153 => 38,  150 => 37,  140 => 35,  138 => 34,  133 => 32,  127 => 30,  117 => 28,  115 => 27,  108 => 23,  104 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  77 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
