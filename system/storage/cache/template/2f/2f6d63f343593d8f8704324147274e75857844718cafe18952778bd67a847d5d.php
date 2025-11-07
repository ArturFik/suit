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

/* blog/blog_setting.twig */
class __TwigTemplate_3ec406de11d11e7eaab8bf3917828a884ec6998c324263db1c128f616fb20035 extends \Twig\Template
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

";
        // line 3
        if ( !($context["blogsetting_blogs_per_page"] ?? null)) {
            $context["blogsetting_blogs_per_page"] = 5;
        }
        // line 4
        if ( !($context["blogsetting_post_thumbs_w"] ?? null)) {
            $context["blogsetting_post_thumbs_w"] = 848;
        }
        // line 5
        if ( !($context["blogsetting_post_thumbs_h"] ?? null)) {
            $context["blogsetting_post_thumbs_h"] = 424;
        }
        // line 6
        if ( !($context["blogsetting_thumbs_h"] ?? null)) {
            $context["blogsetting_thumbs_h"] = 424;
        }
        // line 7
        if ( !($context["blogsetting_thumbs_w"] ?? null)) {
            $context["blogsetting_thumbs_w"] = 848;
        }
        // line 8
        if ( !($context["blogsetting_blogs_per_page"] ?? null)) {
            $context["blogsetting_blogs_per_page"] = 5;
        }
        // line 9
        if ( !($context["blogsetting_rel_blog_per_row"] ?? null)) {
            $context["blogsetting_rel_blog_per_row"] = 2;
        }
        // line 10
        if ( !($context["blogsetting_rel_thumbs_w"] ?? null)) {
            $context["blogsetting_rel_thumbs_w"] = 408;
        }
        // line 11
        if ( !($context["blogsetting_rel_thumbs_h"] ?? null)) {
            $context["blogsetting_rel_thumbs_h"] = 204;
        }
        // line 12
        if ( !($context["blogsetting_rel_characters"] ?? null)) {
            $context["blogsetting_rel_characters"] = 100;
        }
        // line 13
        if ( !($context["blogsetting_comment_per_page"] ?? null)) {
            $context["blogsetting_comment_per_page"] = 5;
        }
        // line 14
        if ( !($context["blogsetting_rel_prod_width"] ?? null)) {
            $context["blogsetting_rel_prod_width"] = 266;
        }
        // line 15
        if ( !($context["blogsetting_rel_prod_height"] ?? null)) {
            $context["blogsetting_rel_prod_height"] = 266;
        }
        // line 16
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-settings\" data-toggle=\"tooltip\" title=\"";
        // line 21
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        </div>
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
  
  
    
    ";
        // line 35
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 36
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 39
        echo " 
    ";
        // line 40
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 41
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 44
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      
      <form action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-settings\" class=\"form-horizontal\">

        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h3 style=\"margin-top:20px;\">";
        // line 55
        echo ($context["heading_blog_home"] ?? null);
        echo "</h3></legend></div>
        </div>
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\">
        <ul class=\"nav nav-tabs\" id=\"language\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
        <li><a href=\"#language";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 63);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 63);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 63);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </ul>
        </div>
        </div>
        
        <div class=\"tab-content\">
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
        <div class=\"tab-pane\" id=\"language";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "\">
        <!-- Multilingual start -->
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
            // line 75
            echo ($context["entry_blogsetting_home_title"] ?? null);
            echo "</label>
        <div class=\"col-sm-10\">
         <input type=\"text\" class=\"form-control\" value=\"";
            // line 77
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["blogsetting_home_title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null);
            echo "\" name=\"blogsetting_home_title[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "]\" />
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
            // line 82
            echo ($context["entry_blogsetting_home_page_title"] ?? null);
            echo "</label>
        <div class=\"col-sm-10\">
         <input type=\"text\" class=\"form-control\" value=\"";
            // line 84
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["blogsetting_home_page_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null);
            echo "\" name=\"blogsetting_home_page_title[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "]\" />
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
            // line 89
            echo ($context["entry_blogsetting_home_description"] ?? null);
            echo "</label>
        <div class=\"col-sm-10\">         
         <textarea name=\"blogsetting_home_description[";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "]\" id=\"block";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["blogsetting_home_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null)) {
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["blogsetting_home_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null);
            }
            echo "</textarea>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
            // line 96
            echo ($context["entry_blogsetting_home_meta_description"] ?? null);
            echo "</label>
        <div class=\"col-sm-10\">         
         <textarea name=\"blogsetting_home_meta_description[";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "]\" id=\"block";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98);
            echo "\" class=\"form-control\">";
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["blogsetting_home_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null)) {
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["blogsetting_home_meta_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null);
            }
            echo "</textarea>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
            // line 103
            echo ($context["entry_blogsetting_home_meta_keyword"] ?? null);
            echo "</label>
        <div class=\"col-sm-10\">
         <input type=\"text\" class=\"form-control\" value=\"";
            // line 105
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["blogsetting_home_meta_keyword"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105)] ?? null) : null);
            echo "\" name=\"blogsetting_home_meta_keyword[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
            echo "]\" />
        </div>
        </div>

        <!-- multilingual ends -->
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo " 
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["entry_blogsetting_home_url_h"] ?? null);
        echo "\">";
        echo ($context["entry_blogsetting_home_url"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
            <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 119
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 120
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 125
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 126);
            echo "</td>
                      <td class=\"text-left\">
                        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 129
                echo "                          <div class=\"input-group\">
                            <span class=\"input-group-addon\"><img src=\"language/";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 130);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 130);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 130);
                echo "\" /></span>
                            <input type=\"text\" name=\"bloghome_seo_url[";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 131);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131);
                echo "]\" value=\"";
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["bloghome_seo_url"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 131)] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null)) {
                    echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["bloghome_seo_url"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 131)] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                      </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                  </tbody>
                </table>
        </div>
        </div>
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h3 style=\"margin-top:20px;\">";
        // line 144
        echo ($context["heading_blog_listing"] ?? null);
        echo "</h3></legend>
        ";
        // line 145
        echo ($context["heading_blog_listing_h"] ?? null);
        echo "<br /><br />

        </div>
        
        </div>
       
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 152
        echo ($context["entry_blogsetting_blogs_per_page"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <input name=\"blogsetting_blogs_per_page\" class=\"form-control\" value=\"";
        // line 154
        echo ($context["blogsetting_blogs_per_page"] ?? null);
        echo "\" />
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 159
        echo ($context["entry_blogsetting_layout"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_layout\" class=\"form-control\">
        ";
        // line 162
        if ((($context["blogsetting_layout"] ?? null) == "1")) {
            echo " 
        <option value=\"1\" selected=\"selected\">1</option>
        ";
        } else {
            // line 164
            echo "   
        <option value=\"1\">1</option>
        ";
        }
        // line 166
        echo "  
        ";
        // line 167
        if ((($context["blogsetting_layout"] ?? null) == "2")) {
            echo " 
        <option value=\"2\" selected=\"selected\">2</option>
        ";
        } else {
            // line 169
            echo "   
        <option value=\"2\">2</option>
        ";
        }
        // line 171
        echo "  
        ";
        // line 172
        if ((($context["blogsetting_layout"] ?? null) == "3")) {
            echo " 
        <option value=\"3\" selected=\"selected\">3</option>
        ";
        } else {
            // line 174
            echo "   
        <option value=\"3\">3</option>
        ";
        }
        // line 176
        echo "  
        ";
        // line 177
        if ((($context["blogsetting_layout"] ?? null) == "4")) {
            echo " 
        <option value=\"4\" selected=\"selected\">4</option>
        ";
        } else {
            // line 179
            echo "   
        <option value=\"4\">4</option>
        ";
        }
        // line 181
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 187
        echo ($context["entry_blogsetting_thumb_size"] ?? null);
        echo "</label>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_thumbs_w\" class=\"form-control\" value=\"";
        // line 189
        echo ($context["blogsetting_thumbs_w"] ?? null);
        echo "\" />
        </div>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_thumbs_h\" class=\"form-control\" value=\"";
        // line 192
        echo ($context["blogsetting_thumbs_h"] ?? null);
        echo "\" />
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 197
        echo ($context["entry_blogsetting_date_added"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_date_added\" class=\"form-control\">
        ";
        // line 200
        if (($context["blogsetting_date_added"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 201
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 202
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 203
            echo "   
        <option value=\"1\">";
            // line 204
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 205
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 206
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 212
        echo ($context["entry_blogsetting_comments_count"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_comments_count\" class=\"form-control\">
        ";
        // line 215
        if (($context["blogsetting_comments_count"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 216
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 217
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 218
            echo "   
        <option value=\"1\">";
            // line 219
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 220
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 221
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 227
        echo ($context["entry_blogsetting_page_view"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_page_view\" class=\"form-control\">
        ";
        // line 230
        if (($context["blogsetting_page_view"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 231
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 232
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 233
            echo "   
        <option value=\"1\">";
            // line 234
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 235
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 236
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 242
        echo ($context["entry_blogsetting_author"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_author\" class=\"form-control\">
        ";
        // line 245
        if (($context["blogsetting_author"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 246
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 247
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 248
            echo "   
        <option value=\"1\">";
            // line 249
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 250
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 251
        echo " 
        </select>
        </div>
        </div>
        
        
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h3 style=\"margin-top:20px;\">";
        // line 260
        echo ($context["heading_blog_post"] ?? null);
        echo "</h3></legend></div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 264
        echo ($context["entry_blogsetting_post_date_added"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_post_date_added\" class=\"form-control\">
        ";
        // line 267
        if (($context["blogsetting_post_date_added"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 268
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 269
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 270
            echo "   
        <option value=\"1\">";
            // line 271
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 272
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 273
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 279
        echo ($context["entry_blogsetting_post_comments_count"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_post_comments_count\" class=\"form-control\">
        ";
        // line 282
        if (($context["blogsetting_post_comments_count"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 283
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 284
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 285
            echo "   
        <option value=\"1\">";
            // line 286
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 287
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 288
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 294
        echo ($context["entry_blogsetting_post_page_view"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_post_page_view\" class=\"form-control\">
        ";
        // line 297
        if (($context["blogsetting_post_page_view"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 298
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 299
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 300
            echo "   
        <option value=\"1\">";
            // line 301
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 302
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 303
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 309
        echo ($context["entry_blogsetting_post_author"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_post_author\" class=\"form-control\">
        ";
        // line 312
        if (($context["blogsetting_post_author"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 313
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 314
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 315
            echo "   
        <option value=\"1\">";
            // line 316
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 317
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 318
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 324
        echo ($context["entry_blogsetting_share"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_share\" class=\"form-control\">
        ";
        // line 327
        if (($context["blogsetting_share"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 328
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 329
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 330
            echo "   
        <option value=\"1\">";
            // line 331
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 332
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 333
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 339
        echo ($context["entry_blogsetting_post_thumb"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_post_thumb\" class=\"form-control\">
        ";
        // line 342
        if (($context["blogsetting_post_thumb"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 343
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 344
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 345
            echo "   
        <option value=\"1\">";
            // line 346
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 347
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 348
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 354
        echo ($context["entry_blogsetting_thumb_size"] ?? null);
        echo "</label>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_post_thumbs_w\" class=\"form-control\" value=\"";
        // line 356
        echo ($context["blogsetting_post_thumbs_w"] ?? null);
        echo "\" />
        </div>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_post_thumbs_h\" class=\"form-control\" value=\"";
        // line 359
        echo ($context["blogsetting_post_thumbs_h"] ?? null);
        echo "\" />
        </div>
        </div>
        
        
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h4 style=\"margin-top:20px;\">";
        // line 367
        echo ($context["heading_related"] ?? null);
        echo "</h4></legend></div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 371
        echo ($context["entry_blogsetting_rel_blog_per_row"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">        
        <select name=\"blogsetting_rel_blog_per_row\" class=\"form-control\">
        ";
        // line 374
        if ((($context["blogsetting_rel_blog_per_row"] ?? null) == "1")) {
            echo " 
        <option value=\"1\" selected=\"selected\">1</option>
        ";
        } else {
            // line 376
            echo "   
        <option value=\"1\">1</option>
        ";
        }
        // line 378
        echo "  
        ";
        // line 379
        if ((($context["blogsetting_rel_blog_per_row"] ?? null) == "2")) {
            echo " 
        <option value=\"2\" selected=\"selected\">2</option>
        ";
        } else {
            // line 381
            echo "   
        <option value=\"2\">2</option>
        ";
        }
        // line 383
        echo " 
        ";
        // line 384
        if ((($context["blogsetting_rel_blog_per_row"] ?? null) == "3")) {
            echo " 
        <option value=\"3\" selected=\"selected\">3</option>
        ";
        } else {
            // line 386
            echo "   
        <option value=\"3\">3</option>
        ";
        }
        // line 388
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 394
        echo ($context["entry_blogsetting_rel_thumb"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_rel_thumb\" class=\"form-control\">
        ";
        // line 397
        if (($context["blogsetting_rel_thumb"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 398
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 399
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 400
            echo "   
        <option value=\"1\">";
            // line 401
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 402
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 403
        echo " 
        </select>
        </div>
        </div>
        
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 409
        echo ($context["entry_blogsetting_rel_thumbs"] ?? null);
        echo "</label>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_rel_thumbs_w\" class=\"form-control\" value=\"";
        // line 411
        echo ($context["blogsetting_rel_thumbs_w"] ?? null);
        echo "\" />
        </div>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_rel_thumbs_h\" class=\"form-control\" value=\"";
        // line 414
        echo ($context["blogsetting_rel_thumbs_h"] ?? null);
        echo "\" />
        </div>
        </div>
        
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 419
        echo ($context["entry_blogsetting_rel_characters"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">         
        <input name=\"blogsetting_rel_characters\" class=\"form-control\" value=\"";
        // line 421
        echo ($context["blogsetting_rel_characters"] ?? null);
        echo "\" />
        </div>
        </div>
        
        
        
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h4 style=\"margin-top:20px;\">";
        // line 430
        echo ($context["heading_related_products"] ?? null);
        echo "</h4></legend></div>
        </div>
        
        
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 436
        echo ($context["entry_blogsetting_rel_prod_per_row"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\">        
        <select name=\"blogsetting_rel_prod_per_row\" class=\"form-control\">
        ";
        // line 439
        if ((($context["blogsetting_rel_prod_per_row"] ?? null) == "2")) {
            echo " 
        <option value=\"2\" selected=\"selected\">2</option>
        ";
        } else {
            // line 441
            echo "   
        <option value=\"2\">2</option>
        ";
        }
        // line 443
        echo " 
        ";
        // line 444
        if ((($context["blogsetting_rel_prod_per_row"] ?? null) == "3")) {
            echo " 
        <option value=\"3\" selected=\"selected\">3</option>
        ";
        } else {
            // line 446
            echo "   
        <option value=\"3\">3</option>
        ";
        }
        // line 448
        echo "  
        ";
        // line 449
        if ((($context["blogsetting_rel_prod_per_row"] ?? null) == "4")) {
            echo " 
        <option value=\"4\" selected=\"selected\">4</option>
        ";
        } else {
            // line 451
            echo "   
        <option value=\"4\">4</option>
        ";
        }
        // line 454
        echo "        </select>
        </div>
        </div>
        
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 459
        echo ($context["entry_blogsetting_rel_prod_thumbs_size"] ?? null);
        echo "</label>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_rel_prod_width\" class=\"form-control\" value=\"";
        // line 461
        echo ($context["blogsetting_rel_prod_width"] ?? null);
        echo "\" />
        </div>
        <div class=\"col-sm-5\">
        <input name=\"blogsetting_rel_prod_height\" class=\"form-control\" value=\"";
        // line 464
        echo ($context["blogsetting_rel_prod_height"] ?? null);
        echo "\" />
        </div>
        </div>
        




        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h3 style=\"margin-top:20px;\">";
        // line 474
        echo ($context["heading_comments"] ?? null);
        echo "</h3></legend></div>
        </div>
 
        <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
        // line 478
        echo ($context["entry_blogsetting_comment_per_page"] ?? null);
        echo "</label>
        <div class=\"col-sm-10\"> 
        <input name=\"blogsetting_comment_per_page\" class=\"form-control\" value=\"";
        // line 480
        echo ($context["blogsetting_comment_per_page"] ?? null);
        echo "\" />        
        </div>
        </div>

        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 485
        echo ($context["entry_blogsetting_comment_approve_h"] ?? null);
        echo "\">";
        echo ($context["entry_blogsetting_comment_approve"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_comment_approve\" class=\"form-control\">
        ";
        // line 488
        if (($context["blogsetting_comment_approve"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 489
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 490
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 491
            echo "   
        <option value=\"1\">";
            // line 492
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 493
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 494
        echo "  
        </select>
        </div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 500
        echo ($context["entry_blogsetting_comment_notification_h"] ?? null);
        echo "\">";
        echo ($context["entry_blogsetting_comment_notification"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_comment_notification\" class=\"form-control\">
        ";
        // line 503
        if (($context["blogsetting_comment_notification"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 504
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 505
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 506
            echo "   
        <option value=\"1\">";
            // line 507
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 508
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 509
        echo "  
        </select>
        </div>
        </div>
        
        
        
        
        <div class=\"row\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\"><legend><h3 style=\"margin-top:20px;\">";
        // line 519
        echo ($context["heading_author"] ?? null);
        echo "</h3></legend></div>
        </div>
        
        <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 523
        echo ($context["entry_blogsetting_author_change_h"] ?? null);
        echo "\">";
        echo ($context["entry_blogsetting_author_change"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
        <select name=\"blogsetting_author_change\" class=\"form-control\">
        ";
        // line 526
        if (($context["blogsetting_author_change"] ?? null)) {
            echo " 
        <option value=\"1\" selected=\"selected\">";
            // line 527
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\">";
            // line 528
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        } else {
            // line 529
            echo "   
        <option value=\"1\">";
            // line 530
            echo ($context["text_yes"] ?? null);
            echo "</option>
        <option value=\"0\" selected=\"selected\">";
            // line 531
            echo ($context["text_no"] ?? null);
            echo "</option>
        ";
        }
        // line 532
        echo "  
        </select>
        </div>
        </div>

    </form>
      </div>
    </div>
  </div>
  </div>
 
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 

<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>

";
        // line 557
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "blog/blog_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1340 => 557,  1313 => 532,  1308 => 531,  1304 => 530,  1301 => 529,  1296 => 528,  1292 => 527,  1288 => 526,  1280 => 523,  1273 => 519,  1261 => 509,  1256 => 508,  1252 => 507,  1249 => 506,  1244 => 505,  1240 => 504,  1236 => 503,  1228 => 500,  1220 => 494,  1215 => 493,  1211 => 492,  1208 => 491,  1203 => 490,  1199 => 489,  1195 => 488,  1187 => 485,  1179 => 480,  1174 => 478,  1167 => 474,  1154 => 464,  1148 => 461,  1143 => 459,  1136 => 454,  1131 => 451,  1125 => 449,  1122 => 448,  1117 => 446,  1111 => 444,  1108 => 443,  1103 => 441,  1097 => 439,  1091 => 436,  1082 => 430,  1070 => 421,  1065 => 419,  1057 => 414,  1051 => 411,  1046 => 409,  1038 => 403,  1033 => 402,  1029 => 401,  1026 => 400,  1021 => 399,  1017 => 398,  1013 => 397,  1007 => 394,  999 => 388,  994 => 386,  988 => 384,  985 => 383,  980 => 381,  974 => 379,  971 => 378,  966 => 376,  960 => 374,  954 => 371,  947 => 367,  936 => 359,  930 => 356,  925 => 354,  917 => 348,  912 => 347,  908 => 346,  905 => 345,  900 => 344,  896 => 343,  892 => 342,  886 => 339,  878 => 333,  873 => 332,  869 => 331,  866 => 330,  861 => 329,  857 => 328,  853 => 327,  847 => 324,  839 => 318,  834 => 317,  830 => 316,  827 => 315,  822 => 314,  818 => 313,  814 => 312,  808 => 309,  800 => 303,  795 => 302,  791 => 301,  788 => 300,  783 => 299,  779 => 298,  775 => 297,  769 => 294,  761 => 288,  756 => 287,  752 => 286,  749 => 285,  744 => 284,  740 => 283,  736 => 282,  730 => 279,  722 => 273,  717 => 272,  713 => 271,  710 => 270,  705 => 269,  701 => 268,  697 => 267,  691 => 264,  684 => 260,  673 => 251,  668 => 250,  664 => 249,  661 => 248,  656 => 247,  652 => 246,  648 => 245,  642 => 242,  634 => 236,  629 => 235,  625 => 234,  622 => 233,  617 => 232,  613 => 231,  609 => 230,  603 => 227,  595 => 221,  590 => 220,  586 => 219,  583 => 218,  578 => 217,  574 => 216,  570 => 215,  564 => 212,  556 => 206,  551 => 205,  547 => 204,  544 => 203,  539 => 202,  535 => 201,  531 => 200,  525 => 197,  517 => 192,  511 => 189,  506 => 187,  498 => 181,  493 => 179,  487 => 177,  484 => 176,  479 => 174,  473 => 172,  470 => 171,  465 => 169,  459 => 167,  456 => 166,  451 => 164,  445 => 162,  439 => 159,  431 => 154,  426 => 152,  416 => 145,  412 => 144,  403 => 137,  395 => 134,  378 => 131,  370 => 130,  367 => 129,  363 => 128,  358 => 126,  355 => 125,  351 => 124,  344 => 120,  340 => 119,  330 => 114,  325 => 111,  310 => 105,  305 => 103,  291 => 98,  286 => 96,  270 => 91,  265 => 89,  255 => 84,  250 => 82,  240 => 77,  235 => 75,  228 => 71,  222 => 70,  215 => 65,  199 => 63,  193 => 62,  183 => 55,  176 => 51,  169 => 47,  164 => 44,  157 => 41,  153 => 40,  150 => 39,  143 => 36,  139 => 35,  129 => 27,  119 => 26,  113 => 25,  108 => 23,  103 => 21,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/blog_setting.twig", "");
    }
}
