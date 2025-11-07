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

/* default/template/blog/blog.twig */
class __TwigTemplate_30c3cb29029ce2b9f5e86d9475ec30cc3e07f2462319d0b58a3128d44d3c9986 extends \Twig\Template
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
        // line 16
        echo "     
    <div id=\"content\" class=\"";
        // line 17
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
    <div class=\"blog blog_post\">
    
    ";
        // line 20
        if ((($context["main_thumb"] ?? null) && ($context["blogsetting_post_thumb"] ?? null))) {
            echo " 
    <div class=\"main_thumb\"><img src=\"";
            // line 21
            echo ($context["blogsetting_post_thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" /></div>
    ";
        }
        // line 22
        echo " 
    
  <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <div class=\"blog_stats\">
  ";
        // line 26
        if (($context["post_author_status"] ?? null)) {
            echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
            echo ($context["text_posted_by"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["author"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 27
        if (($context["post_date_added_status"] ?? null)) {
            echo " <span><i class=\"fa fa-clock-o\"></i><b class=\"text\">";
            echo ($context["text_posted_on"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["date_added_full"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 28
        if (($context["post_page_view_status"] ?? null)) {
            echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
            echo ($context["text_read"] ?? null);
            echo "</b> <b class=\"hl\">";
            echo ($context["new_read_counter_value"] ?? null);
            echo "</b></span>";
        }
        echo " 
  ";
        // line 29
        if (($context["post_comments_count_status"] ?? null)) {
            echo " <span><i class=\"fa fa-comments\"></i><b class=\"text\">";
            echo ($context["text_comments"] ?? null);
            echo " :</b> <b class=\"hl\">";
            echo ($context["comment_total"] ?? null);
            echo "</b></span>";
        }
        echo " 
  </div>
    
  <div class=\"main_description\">
  ";
        // line 33
        echo ($context["description"] ?? null);
        echo " 
  </div>
    
  ";
        // line 36
        if (($context["tags"] ?? null)) {
            echo " 
  <p class=\"tags\">
    ";
            // line 38
            echo ($context["text_tags"] ?? null);
            echo " 
  ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "  ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 41
                    echo "  <a href=\"";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["tag"] ?? null) : null);
                    echo "</a>, 
  ";
                } else {
                    // line 42
                    echo "   
  <a href=\"";
                    // line 43
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tags"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tags"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["i"]] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["tag"] ?? null) : null);
                    echo "</a>
  ";
                }
                // line 44
                echo " 
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo " 
  </p>
  ";
        }
        // line 47
        echo "  
  
  ";
        // line 49
        if (($context["share_status"] ?? null)) {
            echo " 
  <div class=\"share\">
    <div class=\"addthis_toolbox addthis_default_style\">
    <a class=\"addthis_button_facebook\"><i class=\"fa fa-facebook\"></i></a>
    <a class=\"addthis_button_twitter\"><i class=\"fa fa-twitter\"></i></a>
    <a class=\"addthis_button_vk\"><i class=\"fa fa-vk\" style=\"background: #4a76a8;\"></i></a>
    <a class=\"addthis_button_odnoklassniki_ru\"><i class=\"fa fa-odnoklassniki\" style=\"background: #ee8208;\"></i></a>
    <style>.blog_post .share .fa-vk:after {content: \"BK\";} .blog_post .share .fa-odnoklassniki:after {content: \"OK\";} </style>
    <a class=\"addthis_button_compact\"><i class=\"fa fa-navicon\"></i></a>
    </div>
    <script src=\"//s7.addthis.com/js/300/addthis_widget.js\"></script>
  </div>
  ";
        }
        // line 61
        echo " 
  
    <!-- Related Products -->
    ";
        // line 64
        if (($context["products"] ?? null)) {
            echo " 
      <h3><i class=\"fa fa-list\"></i>";
            // line 65
            echo ($context["text_related_products"] ?? null);
            echo "</h3>
       <div class=\"blog_grid_holder blog_products column-";
            // line 66
            echo ($context["rel_prod_per_row"] ?? null);
            echo "\">
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
          <div class=\"blog_item blog_product\">
            <div class=\"image\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 69);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" class=\"img-responsive\" /></a></div>
              <a class=\"name\" href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "</a>
              ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 71)) {
                    echo " 
              <div class=\"rating\">
                ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 74
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74) < $context["i"])) {
                            echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                ";
                        } else {
                            // line 76
                            echo "   
                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                ";
                        }
                        // line 79
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "              </div>
              ";
                }
                // line 81
                echo " 

              ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83)) {
                    echo " 
              <p class=\"price\">
                ";
                    // line 85
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85)) {
                        echo " 
                ";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                        echo " 
                ";
                    } else {
                        // line 87
                        echo "   
                <span class=\"price-new\">";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 88);
                        echo "</span>
                ";
                    }
                    // line 89
                    echo " 
                ";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 90)) {
                        echo " 
                <span class=\"price-tax\">";
                        // line 91
                        echo ($context["text_tax"] ?? null);
                        echo "  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91);
                        echo "</span>
                ";
                    }
                    // line 92
                    echo " 
              </p>
              ";
                }
                // line 94
                echo "  
              <a class=\"btn btn-primary\" onclick=\"cart.add('";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
                echo " ', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 95);
                echo " ');\">";
                echo ($context["button_cart"] ?? null);
                echo "</a>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "      </div>
    ";
        }
        // line 99
        echo "    
   <!-- Related Products End -->
     
     
     
  ";
        // line 104
        if (($context["related_blogs"] ?? null)) {
            echo " 
    <h3><i class=\"fa fa-list\"></i>";
            // line 105
            echo ($context["text_related_blog"] ?? null);
            echo "</h3>
    <div class=\"blog_grid_holder related column-";
            // line 106
            echo ($context["rel_per_row"] ?? null);
            echo "\">
      ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
            <div class=\"blog_item\">
                <div class=\"summary\">
                <h2 class=\"blog_title\"><a href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 110);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 110);
                echo "</a></h2>
                <div class=\"blog_stats\">
                ";
                // line 112
                if (($context["author_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-user\"></i><b class=\"text\">";
                    echo ($context["text_posted_by"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "author", [], "any", false, false, false, 112);
                    echo "</b></span>";
                }
                echo " 
                ";
                // line 113
                if (($context["date_added_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-clock-o\"><b class=\"text\"></i>";
                    echo ($context["text_posted_on"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added_full", [], "any", false, false, false, 113);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 114
                if (($context["page_view_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-eye\"></i><b class=\"text\">";
                    echo ($context["text_read"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "count_read", [], "any", false, false, false, 114);
                    echo "</b></span>";
                }
                echo " 
        ";
                // line 115
                if (($context["comments_count_status"] ?? null)) {
                    echo " <span><i class=\"fa fa-comments\"><b class=\"text\"></i>";
                    echo ($context["text_comments"] ?? null);
                    echo "</b> <b class=\"hl\">";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "comment_total", [], "any", false, false, false, 115);
                    echo "</b></span>";
                }
                echo " 
                </div>
                ";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 117) && ($context["rel_thumb_status"] ?? null))) {
                    echo " 
                <div class=\"image\">
                  <a href=\"";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 119);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 119);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 119);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 119);
                    echo "\" /></a>
                </div>
                ";
                }
                // line 121
                echo " 
                <p>";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "short_description", [], "any", false, false, false, 122);
                echo "</p>
                <p><a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 123);
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
            // line 126
            echo "          
    </div>
  ";
        }
        // line 128
        echo "   
   <!-- Related Blog End -->
   
     <!-- Comment Area start -->
      ";
        // line 132
        if (($context["allow_comment"] ?? null)) {
            echo " 
        <h3><i class=\"fa fa-comments\"></i>";
            // line 133
            echo ($context["text_comments"] ?? null);
            echo "</h3>
          <form id=\"comment_form\">
                <div id=\"comment\"></div>
                <h3><i class=\"fa fa-pencil\"></i>";
            // line 136
            echo ($context["text_write_comment"] ?? null);
            echo "</h3>
                <div class=\"row\">
                <div class=\"form-group col-sm-6 required\">
                <label class=\"control-label\" for=\"input-name\">";
            // line 139
            echo ($context["entry_name"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
                </div>
                <div class=\"form-group col-sm-6 required\">
                <label class=\"control-label\" for=\"input-email\">";
            // line 143
            echo ($context["entry_email"] ?? null);
            echo "</label>
                <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\" />
                </div>
                </div>
                
                <div class=\"row\">
                <div class=\"form-group col-sm-12 required\">
                <label class=\"control-label\" for=\"input-review\">";
            // line 150
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\"></textarea>
                </div>
                </div>
                
                
                <div class=\"row\">
                <div class=\"col-sm-12\">
                  ";
            // line 158
            echo ($context["captcha"] ?? null);
            echo "
                </div>
                </div>
                
                <div class=\"row\">
                <div class=\"form-group col-sm-12 text-right\">
                <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
            // line 164
            echo ($context["button_send"] ?? null);
            echo "</button>
                </div>
                </div>
        </form>
      ";
        }
        // line 168
        echo " 
      </div>
      ";
        // line 170
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 171
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--

\$('#comment').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();
  \$(\"html,body\").animate({scrollTop:((\$(\"#comment\").offset().top)-50)},500);
    \$('#comment').fadeOut(50);

    \$('#comment').load(this.href);

    \$('#comment').fadeIn(500);
  
});

\$('#comment').load('index.php?route=blog/blog/comment&blog_id=";
        // line 186
        echo ($context["blog_id"] ?? null);
        echo "');
//--></script>

<script type=\"text/javascript\"><!--

\$('#button-comment').on('click', function() {
  \$.ajax({
    url: 'index.php?route=blog/blog/write&blog_id=";
        // line 193
        echo ($context["blog_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#comment_form\").serialize(),
    
    complete: function() {
      \$('#button-comment').button('reset');
    },
    success: function(json) {
      \$('.alert-success, .alert-danger').remove();
      
      if (json['error']) {
        \$('#comment').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }
      
      if (json['success']) {
        \$('#comment').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
        
        \$('input[name=\\'name\\']').val('');
        \$('input[name=\\'email\\']').val('');
        \$('textarea[name=\\'comment\\']').val('');
        \$('#input-captcha').val('');
      }
    }
  });
});    

</script>
";
        // line 221
        echo ($context["footer"] ?? null);
        echo "  ";
    }

    public function getTemplateName()
    {
        return "default/template/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 221,  592 => 193,  582 => 186,  564 => 171,  560 => 170,  556 => 168,  548 => 164,  539 => 158,  528 => 150,  518 => 143,  511 => 139,  505 => 136,  499 => 133,  495 => 132,  489 => 128,  484 => 126,  472 => 123,  468 => 122,  465 => 121,  453 => 119,  448 => 117,  437 => 115,  427 => 114,  417 => 113,  407 => 112,  400 => 110,  392 => 107,  388 => 106,  384 => 105,  380 => 104,  373 => 99,  369 => 98,  356 => 95,  353 => 94,  348 => 92,  341 => 91,  337 => 90,  334 => 89,  327 => 88,  324 => 87,  319 => 86,  315 => 85,  310 => 83,  306 => 81,  302 => 80,  296 => 79,  291 => 76,  284 => 74,  280 => 73,  275 => 71,  269 => 70,  259 => 69,  252 => 67,  248 => 66,  244 => 65,  240 => 64,  235 => 61,  219 => 49,  215 => 47,  210 => 45,  203 => 44,  196 => 43,  193 => 42,  185 => 41,  182 => 40,  178 => 39,  174 => 38,  169 => 36,  163 => 33,  150 => 29,  140 => 28,  130 => 27,  120 => 26,  115 => 24,  111 => 22,  102 => 21,  98 => 20,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  67 => 9,  63 => 8,  59 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/blog.twig", "");
    }
}
