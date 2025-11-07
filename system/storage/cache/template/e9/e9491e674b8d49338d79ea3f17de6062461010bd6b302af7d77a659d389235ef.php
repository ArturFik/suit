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

/* default/template/extension/module/formcreator.twig */
class __TwigTemplate_63bd9cdcdb9d8ed96614e7af13eae126cb09525430d9e3a91d1b175a1040a0b2 extends \Twig\Template
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
        echo "<div id=\"form-creator-";
        echo ($context["module_id"] ?? null);
        echo "\" class=\"form-creator box\">
\t";
        // line 2
        if (($context["module_name"] ?? null)) {
            // line 3
            echo "\t<div class=\"box-heading\">
\t\t<h3>";
            // line 4
            echo ($context["module_name"] ?? null);
            echo "</h3>
\t</div>
\t<hr style=\"margin: 8px 0 10px 0\" />
\t";
        }
        // line 8
        echo "\t<div class=\"box-content\">
\t\t\t\t<form role=\"form\" data-toggle=\"validator\" enctype=\"multipart/form-data\" id=\"form-formcreator";
        // line 9
        echo ($context["module_id"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 10
        if (($context["fields"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t";
            $context["k"] = 0;
            // line 12
            echo "\t\t\t\t\t";
            $context["field_row"] = 0;
            // line 13
            echo "\t\t\t\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 14
                echo "\t\t\t\t\t\t ";
                $context["field_row"] = (($context["field_row"] ?? null) + 1);
                // line 15
                echo "\t\t\t\t\t\t\t ";
                if (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 15) == "input") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 15))) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInput";
                        // line 18
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 18);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 19
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 19);
                        echo "]\" id=\"formInput";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 19);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 21
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInput";
                        // line 25
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 25);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 26
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26);
                        echo "]\" id=\"formInput";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 26);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t\t\t\t ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 29) == "textarea") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputText";
                        // line 32
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 32);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 33
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 33);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" data-minlength=\"5\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 33);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 35
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"textarea\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputText";
                        // line 39
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 39);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 40
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 40);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 40);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t ";
                    }
                    // line 42
                    echo " 
\t\t\t\t\t\t\t\t ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 43
$context["field"], "type", [], "any", false, false, false, 43) == "select") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 43))) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 46
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 46);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\"  name=\"form_input[";
                        // line 47
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 47);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 48)) - 1);
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option >";
                            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["option"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 57
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 57);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"form_input[";
                        // line 58
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 58);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 59
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 59)) - 1);
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>";
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["option"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo " 
\t\t\t\t\t\t\t\t ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 66
$context["field"], "type", [], "any", false, false, false, 66) == "radio") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 66))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputRadio";
                        // line 69
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 69);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\" id=\"formInputRadio";
                        // line 70
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" style=\"margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 71)) - 1);
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><label><input required=\"\" type=\"radio\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 73);
                            echo "]\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["option"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["option"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null);
                            echo "</label></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 76
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputRadio";
                        // line 80
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 80);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\" id=\"formInputRadio";
                        // line 81
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" style=\"margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 82
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 82)) - 1);
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><label><input type=\"radio\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 84);
                            echo "]\" value=\"";
                            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["option"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["option"] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["i"]] ?? null) : null);
                            echo "</label></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 89
$context["field"], "type", [], "any", false, false, false, 89) == "checkbox") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 89))) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputCheckbox";
                        // line 92
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 92);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox form-control\" id=\"formInputCheckbox";
                        // line 93
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" style=\"margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 94
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 94)) - 1);
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><label> <input type=\"checkbox\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 96);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["field"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["option"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["field"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["option"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["i"]] ?? null) : null);
                            echo "</label></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 100
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"formInputCheckbox";
                        // line 104
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 104);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 105
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" style=\"margin:0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 106
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 106)) - 1);
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><label><input type=\"checkbox\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 108);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["field"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["option"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["field"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["option"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["i"]] ?? null) : null);
                            echo "</label></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t\t\t ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 113) == "date") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 113))) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["k"] ?? null) == 1)) {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css\" />
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 120)) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputDate";
                        // line 122
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 122);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 123
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 123);
                        echo "]\" id=\"formInputDate";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 123);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 125
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"form_input";
                        // line 129
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 129);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"formInputDate";
                        // line 130
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"form-control\" name=\"form_input[";
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 130);
                        echo "]\"  placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 130);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t <script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\$(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#formInputDate";
                    // line 135
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["field_row"] ?? null);
                    echo "').datepicker({
\t\t\t\t\t\t\t\t\t\t\t\t\t\tlanguage: 'ru',
\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t ";
                }
                // line 141
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t";
        }
        echo " 
\t\t\t\t\t<div class=\"hidden-inputs\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"link_page\" value=\"http://";
        // line 144
        echo ($context["domain"] ?? null);
        echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_name\" value=\"";
        // line 145
        echo ($context["module_name"] ?? null);
        echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_id\" value=\"";
        // line 146
        echo ($context["module_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"form_success\" value=\"";
        // line 147
        echo ($context["form_success"] ?? null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-primary\">";
        // line 150
        echo ($context["button_send"] ?? null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t</form>
\t</div>
</div>

<script type=\"text/javascript\">
\t\t\t\$('#form-formcreator";
        // line 157
        echo ($context["module_id"] ?? null);
        echo "').on('submit', function(e) {
\t\t\t\te.preventDefault(); 
\t\t\t\tvar that = \$(e.target);      
\t\t\t\t\$.ajax({                 
\t\t\t\t\turl: 'index.php?route=extension/module/formcreator/send',
\t\t\t\t\ttype: 'post', 
\t\t\t\t\tdata: \$(this).serialize(), 
\t\t\t\t\tdataType:'json', 
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\tif (data['error']) {
\t\t\t\t\t\t\t\$('.form-creator .text-danger').remove();
\t\t\t\t\t\t\tif (data['error']) {
\t\t\t\t\t\t\t\tvar error = \$('<div class=\"text-left alert alert-danger\">'+ data['error'] +'</div>');
\t\t\t\t\t\t\t\tthat.prepend(error);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('.form-creator .alert-danger').remove();
\t\t\t\t\t\talertForm({form: that, msg: data['success']});
\t\t\t\t\t\tthat.find('input[type=\\'text\\']').val('');
\t\t\t\t\t\tthat.find('textarea').val('');
\t\t\t\t\t}, 
\t\t\t\t});
\t\t\t});
\t\t\tfunction alertForm(alert) {
\t\t\t\tvar div = \$('<div class=\"text-left alert alert-success\" style=\"display: none;\">' + alert.msg + '</div>');        
\t\t\t\talert.form.prepend(div);
\t\t\t\tdiv.slideDown(400).delay(3000).slideUp(400, function() {
\t\t\t\t\talert.form.closest('.modal').modal('hide');
\t\t\t\t\tdiv.remove();    
\t\t\t\t});
\t\t\t}
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/formcreator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 157,  615 => 150,  609 => 147,  605 => 146,  601 => 145,  597 => 144,  591 => 142,  585 => 141,  574 => 135,  570 => 133,  556 => 130,  550 => 129,  547 => 128,  541 => 125,  528 => 123,  518 => 122,  515 => 121,  512 => 120,  506 => 116,  503 => 115,  500 => 114,  497 => 113,  492 => 110,  475 => 108,  470 => 107,  468 => 106,  462 => 105,  454 => 104,  451 => 103,  445 => 100,  441 => 98,  424 => 96,  419 => 95,  417 => 94,  411 => 93,  403 => 92,  400 => 91,  397 => 90,  395 => 89,  392 => 88,  387 => 86,  372 => 84,  367 => 83,  365 => 82,  359 => 81,  351 => 80,  348 => 79,  342 => 76,  339 => 75,  324 => 73,  319 => 72,  317 => 71,  311 => 70,  303 => 69,  300 => 68,  297 => 67,  295 => 66,  292 => 65,  287 => 63,  278 => 61,  273 => 60,  271 => 59,  261 => 58,  253 => 57,  250 => 56,  244 => 52,  235 => 50,  230 => 49,  228 => 48,  218 => 47,  210 => 46,  207 => 45,  204 => 44,  202 => 43,  199 => 42,  185 => 40,  177 => 39,  174 => 38,  168 => 35,  155 => 33,  147 => 32,  144 => 31,  141 => 30,  138 => 29,  124 => 26,  116 => 25,  113 => 24,  107 => 21,  94 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  69 => 13,  66 => 12,  63 => 11,  61 => 10,  57 => 9,  54 => 8,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/formcreator.twig", "");
    }
}
