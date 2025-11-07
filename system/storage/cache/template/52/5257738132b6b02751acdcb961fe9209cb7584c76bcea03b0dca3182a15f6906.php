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

/* default/template/extension/module/formcreator_modal.twig */
class __TwigTemplate_7d52ec50574f03299cb3273add0a7aaa1e4ceb9c747e42742ae30242b825ffc8 extends \Twig\Template
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
        echo "<button type=\"button\" class=\"btn btn-primary\" id=\"feedbackButton";
        echo ($context["module_id"] ?? null);
        echo "\" data-toggle=\"modal\" data-target=\"#feedbackModal";
        echo ($context["module_id"] ?? null);
        echo "\">
  ";
        // line 2
        echo ($context["button_name"] ?? null);
        echo "
</button>
<div class=\"modal fade\" id=\"feedbackModal";
        // line 4
        echo ($context["module_id"] ?? null);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"feedbackModalLabel";
        echo ($context["module_id"] ?? null);
        echo "\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content col-md-12\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h3 class=\"modal-title\" id=\"feedbackModalLabel";
        // line 9
        echo ($context["module_id"] ?? null);
        echo "\">";
        echo ($context["module_name"] ?? null);
        echo "</h3>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" data-toggle=\"validator\" enctype=\"multipart/form-data\" id=\"form-formcreator";
        // line 12
        echo ($context["module_id"] ?? null);
        echo "\">
          ";
        // line 13
        if (($context["fields"] ?? null)) {
            // line 14
            echo "          ";
            $context["k"] = 0;
            // line 15
            echo "          ";
            $context["field_row"] = 0;
            // line 16
            echo "             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 17
                echo "             ";
                $context["field_row"] = (($context["field_row"] ?? null) + 1);
                // line 18
                echo "               ";
                if (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 18) == "input") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "                 ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "                    <div class=\"form-group required\">
                      <label class=\"control-label\" for=\"formInput";
                        // line 21
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 21);
                        echo "</label>
                      <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 22
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 22);
                        echo "]\" id=\"formInput";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 22);
                        echo "\">
                      <div class=\"help-block with-errors\"></div>
                      <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 24
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
                    </div>
                  ";
                    } else {
                        // line 27
                        echo "                    <div class=\"form-group\">
                      <label for=\"formInput";
                        // line 28
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 28);
                        echo "</label>
                      <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 29
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 29);
                        echo "]\" id=\"formInput";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 29);
                        echo "\">
                    </div>
                   ";
                    }
                    // line 32
                    echo "               ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 32) == "textarea") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "                      <div class=\"form-group required\">
                        <label class=\"control-label\" for=\"formInputText";
                        // line 35
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 35);
                        echo "</label>
                        <textarea class=\"form-control\" name=\"form_input[";
                        // line 36
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 36);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" data-minlength=\"5\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 36);
                        echo "\"></textarea>
                        <div class=\"help-block with-errors\"></div>
                        <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 38
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"textarea\">
                      </div>
                     ";
                    } else {
                        // line 41
                        echo "                        <div class=\"form-group\">
                          <label for=\"formInputText";
                        // line 42
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 42);
                        echo "</label>
                          <textarea class=\"form-control\" name=\"form_input[";
                        // line 43
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 43);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 43);
                        echo "\"></textarea>
                       </div>
                      ";
                    }
                    // line 46
                    echo "                 ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 46) == "select") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 46))) {
                    // line 47
                    echo "                       ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputSelect";
                        // line 49
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 49);
                        echo "</label>
                            <select class=\"form-control\"  name=\"form_input[";
                        // line 50
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 50);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                               ";
                        // line 51
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 51)) - 1);
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 53
                            echo "                                <option >";
                            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["option"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null);
                            echo "</option>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                            </select>
                           
                          </div>
                        ";
                    } else {
                        // line 59
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputSelect";
                        // line 60
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 60);
                        echo "</label>
                            <select class=\"form-control\" name=\"form_input[";
                        // line 61
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 61);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                               ";
                        // line 62
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 62)) - 1);
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 64
                            echo "                                <option>";
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["option"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null);
                            echo "</option>
                                 ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                            </select>
                          </div>
                        ";
                    }
                    // line 69
                    echo "                 ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 69) == "radio") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 69))) {
                    // line 70
                    echo "                       ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputRadio";
                        // line 72
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72);
                        echo "</label>
                            <div class=\"radio\" id=\"formInputRadio";
                        // line 73
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                               ";
                        // line 74
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 74)) - 1);
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 76
                            echo "                                <div><label><input required=\"\" type=\"radio\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 76);
                            echo "]\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["option"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["option"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null);
                            echo "</label></div>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 78
                        echo "                            </div>
                            <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 79
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"radio\">
                          </div>
                        ";
                    } else {
                        // line 82
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputRadio";
                        // line 83
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 83);
                        echo "</label>
                            <div class=\"radio\" id=\"formInputRadio";
                        // line 84
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                               ";
                        // line 85
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 85)) - 1);
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 87
                            echo "                                <div><label><input type=\"radio\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 87);
                            echo "]\" value=\"";
                            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["option"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["option"] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["i"]] ?? null) : null);
                            echo "</label></div>
                               ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                            </div>
                          </div>
                         ";
                    }
                    // line 92
                    echo "                    ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 92) == "checkbox") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 92))) {
                    // line 93
                    echo "                       ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                          <div class=\"form-group required\">
                            <label for=\"formInputCheckbox";
                        // line 95
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 95);
                        echo "</label>
                            <div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 96
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                               ";
                        // line 97
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 97)) - 1);
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 99
                            echo "                                <div><label> <input type=\"checkbox\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 99);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["field"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["option"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["field"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["option"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["i"]] ?? null) : null);
                            echo "</label></div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                            </div>
                            <div class=\"help-block with-errors\"></div>
                            <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 103
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"checkbox\">
                          </div>
                        ";
                    } else {
                        // line 106
                        echo "                          <div class=\"form-group\">
                            <label for=\"formInputCheckbox";
                        // line 107
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 107);
                        echo "</label>
                            <div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 108
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
                              ";
                        // line 109
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 109)) - 1);
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 111
                            echo "                                <div><label><input type=\"checkbox\" name=\"form_input[";
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 111);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["field"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["option"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["field"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["option"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["i"]] ?? null) : null);
                            echo "</label></div>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                            </div>
                          </div>
                       ";
                    }
                    // line 116
                    echo "                 ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 116) == "date") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 116))) {
                    // line 117
                    echo "                    ";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 118
                    echo "                    ";
                    if ((($context["k"] ?? null) == 1)) {
                        // line 119
                        echo "                      <script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js\"></script>
                      <script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js\"></script>
                      <link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css\" />
                    ";
                    }
                    // line 123
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 123)) {
                        // line 124
                        echo "                    <div class=\"form-group required\">
                      <label class=\"control-label\" for=\"formInputDate";
                        // line 125
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 125);
                        echo "</label>
                        <input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 126
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 126);
                        echo "]\" id=\"formInputDate";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 126);
                        echo "\">
                        <div class=\"help-block with-errors\"></div>
                      <input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 128
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
                    </div>
                  ";
                    } else {
                        // line 131
                        echo "                    <div class=\"form-group\">
                      <label for=\"formInputDate";
                        // line 132
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 132);
                        echo "</label>
                        <input type=\"text\" id=\"formInputDate";
                        // line 133
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"form-control\" name=\"form_input[";
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 133);
                        echo "]\"  placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 133);
                        echo "\">
                    </div>
                  ";
                    }
                    // line 135
                    echo " 
                   <script type=\"text/javascript\">
                      \$(function () {
                          \$('#formInputDate";
                    // line 138
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["field_row"] ?? null);
                    echo "').datepicker({
                            language: 'ru',
                          });
                      });
                  </script>
              ";
                }
                // line 143
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "          ";
        }
        echo " 
          <div class=\"hidden-inputs\">
            <input type=\"hidden\" name=\"link_page\" value=\"http://";
        // line 147
        echo ($context["domain"] ?? null);
        echo "\" />
            <input type=\"hidden\" name=\"module_name\" value=\"";
        // line 148
        echo ($context["module_name"] ?? null);
        echo "\" />
            <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 149
        echo ($context["module_id"] ?? null);
        echo "\" />
            <input type=\"hidden\" name=\"form_success\" value=\"";
        // line 150
        echo ($context["form_success"] ?? null);
        echo "\" />
          </div>
          <div class=\"col-sm-12 form-group text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 153
        echo ($context["button_send"] ?? null);
        echo "</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
      \$('#form-formcreator";
        // line 162
        echo ($context["module_id"] ?? null);
        echo "').on('submit', function(e) {
        e.preventDefault(); 
        var that = \$(e.target);          
        \$.ajax({                 
          url: 'index.php?route=extension/module/formcreator/send',
          type: 'post', 
          data: \$(this).serialize(), 
          dataType:'json', 
          success: function(data) {
            if (data['error']) {
              \$('#feedbackModal .text-danger').remove();
              if (data['error']) {
                var error = \$('<span class=\"text-danger\">'+ data['error'] +'</span>');
                \$('#feedbackModal .modal-body').prepend(error);
              }
              return;
            }
            \$('#feedbackModal .text-danger').remove();
            alertForm({form: that, msg: data['success']});
            that.find('input[type=\\'text\\']').val('');
            that.find('textarea').val('');
          }, 
        });
      });
      function alertForm(alert) {
        var div = \$('<div class=\"text-left alert alert-success\" style=\"display: none;\">' + alert.msg + '</div>');        
        alert.form.prepend(div);
        div.slideDown(400).delay(3000).slideUp(400, function() {
          alert.form.closest('.modal').modal('hide');
          div.remove();    
        });
      }
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/formcreator_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 162,  621 => 153,  615 => 150,  611 => 149,  607 => 148,  603 => 147,  597 => 145,  590 => 143,  579 => 138,  574 => 135,  560 => 133,  552 => 132,  549 => 131,  543 => 128,  530 => 126,  522 => 125,  519 => 124,  516 => 123,  510 => 119,  507 => 118,  504 => 117,  501 => 116,  496 => 113,  479 => 111,  474 => 110,  472 => 109,  466 => 108,  458 => 107,  455 => 106,  449 => 103,  445 => 101,  428 => 99,  423 => 98,  421 => 97,  415 => 96,  407 => 95,  404 => 94,  401 => 93,  398 => 92,  393 => 89,  378 => 87,  373 => 86,  371 => 85,  365 => 84,  357 => 83,  354 => 82,  348 => 79,  345 => 78,  330 => 76,  325 => 75,  323 => 74,  317 => 73,  309 => 72,  306 => 71,  303 => 70,  300 => 69,  295 => 66,  286 => 64,  281 => 63,  279 => 62,  269 => 61,  261 => 60,  258 => 59,  252 => 55,  243 => 53,  238 => 52,  236 => 51,  226 => 50,  218 => 49,  215 => 48,  212 => 47,  209 => 46,  195 => 43,  187 => 42,  184 => 41,  178 => 38,  165 => 36,  157 => 35,  154 => 34,  151 => 33,  148 => 32,  134 => 29,  126 => 28,  123 => 27,  117 => 24,  104 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  67 => 12,  59 => 9,  49 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/formcreator_modal.twig", "");
    }
}
