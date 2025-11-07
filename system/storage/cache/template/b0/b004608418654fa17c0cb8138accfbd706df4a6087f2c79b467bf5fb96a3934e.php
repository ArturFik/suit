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

/* common/header.twig */
class __TwigTemplate_633a01aecdd5dd8ba958608f7a8acf025b853b6666c729e884e22e4adf631d98 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>

\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
\t\t\t\t
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"view/stylesheet/extended_reviews.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t\t<script type=\"text/javascript\" src=\"view/javascript/jquery/translit.js\"></script>

\t\t<style>
\t\t@media (min-width: 768px){
\t\t\t#column-left {width: 260px !important;}
\t\t\t#column-left + #content {margin-left: 260px !important;}
\t\t\t.bimage {margin:0;}
\t\t}
\t\t</style>
\t\t
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 42);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 42);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 53
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 54
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav navbar-nav navbar-right\">

        ";
            // line 57
            if ((array_key_exists("extended_review_settings", $context) || array_key_exists("extended_review_store_settings", $context))) {
                // line 58
                echo "        <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-danger pull-right\">";
                echo ($context["reviews_count"] ?? null);
                echo "</span><i class=\"fa fa-comments-o fa-lg\" aria-hidden=\"true\"></i></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
        ";
                // line 60
                if (array_key_exists("extended_review_settings", $context)) {
                    // line 61
                    echo "            <li class=\"dropdown-header\">Расширенные отзывы</li>
            <li><a href=\"";
                    // line 62
                    echo ($context["extended_review_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы</li>
            <li><a href=\"";
                    // line 65
                    echo ($context["extended_review"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_review_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 66
                    echo ($context["extended_review_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_total"] ?? null);
                    echo "</span>Новые отзывы</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Комментарии</li>
            <li><a href=\"";
                    // line 69
                    echo ($context["extended_review_answer"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["all_answer_total"] ?? null);
                    echo "</span>Все комментарии</a></li>
            <li><a href=\"";
                    // line 70
                    echo ($context["extended_review_answer_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["answer_total"] ?? null);
                    echo "</span>Новые комментарии</a></li>
            ";
                }
                // line 72
                echo "            ";
                if (array_key_exists("extended_review_store_settings", $context)) {
                    // line 73
                    echo "            <li class=\"divider\"></li>
            <li class=\"dropdown-header\">Расширенные отзывы о магазине</li>
            <li><a href=\"";
                    // line 75
                    echo ($context["extended_review_store_settings"] ?? null);
                    echo "\">Настройки</a></li>
    \t\t<li class=\"divider\"></li>
    \t\t<li class=\"dropdown-header\">Отзывы о магазине</li>
            <li><a href=\"";
                    // line 78
                    echo ($context["extended_review_store"] ?? null);
                    echo "\"><span class=\"label label-success pull-right\">";
                    echo ($context["review_store_total"] ?? null);
                    echo "</span>Все отзывы</a></li>
            <li><a href=\"";
                    // line 79
                    echo ($context["extended_review_store_off"] ?? null);
                    echo "\"><span class=\"label label-danger pull-right\">";
                    echo ($context["review_store"] ?? null);
                    echo "</span>Новые отзывы</a></li>
            ";
                }
                // line 81
                echo "          </ul>
        </li>
        ";
            }
            // line 84
            echo "
\t\t\t<!-- AutoSearch3x -->
\t\t\t";
            // line 86
            if (($context["as3x"] ?? null)) {
                // line 87
                echo "\t\t\t<style type=\"text/css\">
\t\t\t.info_table_line2::before,.info_table_line::after{content:\"\";border-bottom:1px dashed #d7dbe9;position:relative;top:.4rem}.info_table{width:100%;border-collapse:collapse;border-spacing:0;table-layout:fixed}.info_table_line::after{display:block;flex:1;margin:0 0 0 .5rem}.info_table_line{display:flex;align-items:center;font-weight:600}.info_table_line2{display:flex;align-items:center}.info_table_line2::before{flex:1;margin:0 .5rem 0 0}.acdn-toggle{outline:0!important}.panel-heading .acdn-toggle:after{content:\"\\f078\";font-family:FontAwesome;float:right;color:grey}.panel-heading .acdn-toggle.collapsed:after{font-family:FontAwesome;float:right;color:grey;content:\"\\f054\"}#as3x_widget .panel-heading a.acdn-toggle{color:inherit;line-height:20px}
\t\t\t</style>
\t\t\t\t<li class=\"dropdown autosearch\" id=\"as3x\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-search fa-lg\"></i></a></li>
\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\$('#as3x').on('click', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\te.stopPropagation();
\t\t\t\tvar as3x_widget = this.name;
\t\t\t\t\$('#as3x_widget .eout').remove();

\t\t\t\tvar \$stats = \$.ajax({
\t\t\t\t\turl : 'index.php?route=extension/module/autosearch/wstats&user_token=' + getURLVar('user_token'),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess : function (json) {
\t\t\t\t\t\treturn json;
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).responseText;
\t\t\tvar stats = JSON.parse(\$stats);

\t\t\t\tvar \$counters = \$.ajax({
\t\t\t\t\turl : 'index.php?route=extension/module/autosearch/wcounters&user_token=' + getURLVar('user_token'),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess : function (json) {
\t\t\t\t\t\treturn json;
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).responseText;
\t\t\tvar counters = JSON.parse(\$counters);

\t\t\tvar htm ='';
\t\t\thtm += '<div id=\"as3x_widget\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\">';
\t\t\thtm += '<div class=\"modal-dialog\"><div class=\"modal-content\">';
\t\t\thtm += '\t<div class=\"modal-header\">";
                // line 127
                echo ($context["autosearch_widget"] ?? null);
                echo "';
\t\t\thtm += '\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>';
\t\t\thtm += '\t</div>';
\t\t\thtm += '\t<div class=\"modal-body\">';
\t\t\thtm += '<div class=\"row\">';
\t\t\thtm += '<div class=\"col-sm-12\">';

\t\t\thtm += '<div class=\"col-sm-12\">';
\t\t\thtm += '<div class=\"panel panel-default\">';
\t\t\thtm += '<div class=\"panel-heading\">";
                // line 136
                echo ($context["text_info"] ?? null);
                echo "</div>';
\t\t\thtm += '<div class=\"panel-body\">';
\t\t\thtm += '<table class=\"info_table counters\">';
\t\t\thtm += '<tbody>';
\t\t\tfor(var i in counters) {
\t\t\thtm += '<tr>';
\t\t\thtm += '<th><span class=\"info_table_line\">' + (counters[i].name) + '</span></th>';
\t\t\thtm += '<td><span class=\"info_table_line2\">' + (counters[i].val) + '</span></td>';
\t\t\thtm += '</tr>';
\t\t\t}
\t\t\thtm += '</tbody>';
\t\t\thtm += '</table>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div><br>';

\t\t\thtm += '<div class=\"col-sm-12\">';
\t\t\thtm += '<div class=\"panel panel-default\">';
\t\t\thtm += '<div class=\"panel-heading\"><a class=\"acdn-toggle collapsed\" data-toggle=\"collapse\" href=\"#as3x_widget_stats\">";
                // line 154
                echo ($context["cache_stat"] ?? null);
                echo "</a></div>';
\t\t\thtm += '<div id=\"as3x_widget_stats\" class=\"panel-collapse collapse\">';
\t\t\thtm += '<div class=\"panel-body\">';
\t\t\thtm += '<table class=\"info_table stats\">';
\t\t\thtm += '<tbody>';
\t\t\tfor(var i in stats) {
\t\t\thtm += '<tr>';
\t\t\thtm += '<th><span class=\"info_table_line\">' + (stats[i].keywords) + '</span></th>';
\t\t\thtm += '<td><span class=\"info_table_line2\">' + (stats[i].freq) + '</span></td>';
\t\t\thtm += '</tr>';
\t\t\t}
\t\t\thtm += '</tbody>';
\t\t\thtm += '</table>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';

\t\t\thtm += '<div class=\"col-sm-12\" id=\"zeout\"></div>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';
\t\t\thtm += '<div class=\"row\" style=\"margin-top:10px;\">';
\t\t\thtm += '<div class=\"col-sm-12 ck_buttons\">';
\t\t\thtm += '\t<div class=\"pull-left\"><button class=\"btn btn-warning\" id=\"as3x_dropcache\">";
                // line 177
                echo ($context["dropcache"] ?? null);
                echo "</button></div><div class=\"pull-right\"><button class=\"btn btn-primary\" id=\"as3x_settings\"><i class=\"fa fa-cogs\"></i> ";
                echo ($context["text_settings"] ?? null);
                echo "</button> <button class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                echo ($context["text_close"] ?? null);
                echo "</button></div>';
\t\t\thtm += '</div>';
\t\t\thtm += '</div>';

\t\t\thtm += '\t</div>';
\t\t\thtm += '</div></div>';
\t\t\thtm += '</div>';
\t\t\tif (!\$('#as3x_widget').length > 0) {
\t\t\t\t\$('body').append(htm);
\t\t\t\t\$('#as3x_widget').modal({show:true, keyboard:true, backdrop:true});

\t\t\t\t\$('#as3x_settings').on('click', function(e) {
\t\t\t\t\tvar url = 'index.php?route=extension/module/autosearch&user_token=' + getURLVar('user_token');
\t\t\t\t\twindow.open(url);
\t\t\t\t});

\t\t\t\t\$('#as3x_dropcache').on('click', function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\t\$('.eout').remove();
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : 'index.php?route=extension/module/autosearch/dropcache&user_token=' + getURLVar('user_token'),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$('#as3x_dropcache').prop('disabled', true);
\t\t\t\t\t\t\t\$('.eout').remove();
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('#as3x_dropcache').prop('disabled', false);
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess : function (json) {
\t\t\t\t\t\t\t\$('.eout').remove();
\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\thtml = '<div class=\"alert alert-warning eout\">' + json['error']['warning'] + '</div>';
\t\t\t\t\t\t\t\t\$('#zeout').append(html).hide().fadeIn(150);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\$('.stats').remove();
\t\t\t\t\t\t\t\t\$('.info_table_line2').last().text('0.00 MB');
\t\t\t\t\t\t\t\thtml = '<div class=\"alert alert-success eout\">' + json['success'] + '</div>';
\t\t\t\t\t\t\t\t\$('#zeout').append(html).hide().fadeIn(150);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t\t\t\$(\"#as3x_widget\").on('hidden.bs.modal', function(){
\t\t\t\t\t\$('#as3x_widget').remove();
\t\t\t\t});
\t\t\t});
\t\t\t//--></script>
\t\t\t";
            }
            // line 231
            echo "\t\t\t<!-- AutoSearch3x -->
\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 233
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 235
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 237
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 239
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 239);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 239);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 242
            echo ($context["text_help"] ?? null);
            echo "</li>
          
\t\t<li><a href=\"http://opencart-russia.ru/\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 244
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
\t\t
          
\t\t<li><a href=\"http://forum.opencart-russia.ru/threads/soderzhanie.6030/\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 247
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
\t\t
          
\t\t<li><a href=\"http://forum.opencart-russia.ru\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 250
            echo ($context["text_support"] ?? null);
            echo "</a></li>
\t\t
        </ul>
      </li>
      <li><a href=\"";
            // line 254
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 256
        echo " </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 256,  487 => 254,  480 => 250,  474 => 247,  468 => 244,  463 => 242,  460 => 241,  449 => 239,  445 => 238,  441 => 237,  434 => 235,  419 => 233,  415 => 231,  354 => 177,  328 => 154,  307 => 136,  295 => 127,  253 => 87,  251 => 86,  247 => 84,  242 => 81,  235 => 79,  229 => 78,  223 => 75,  219 => 73,  216 => 72,  209 => 70,  203 => 69,  195 => 66,  189 => 65,  183 => 62,  180 => 61,  178 => 60,  172 => 58,  170 => 57,  164 => 54,  156 => 53,  149 => 48,  140 => 46,  136 => 45,  133 => 44,  122 => 42,  118 => 41,  105 => 30,  92 => 28,  88 => 27,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
