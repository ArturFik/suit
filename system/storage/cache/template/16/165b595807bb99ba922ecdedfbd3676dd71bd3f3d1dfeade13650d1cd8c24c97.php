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

/* default/template/extension/module/formcreator_modal_42.twig */
class __TwigTemplate_04f339b9b21a49d2a8b236a272d1872e958ccc2c57018bb610240ac13bb3d9bf extends \Twig\Template
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
        echo "<button type=\"button\" class=\"toggler header__calc\" id=\"feedbackButton";
        echo ($context["module_id"] ?? null);
        echo "\" data-target=\"feedbackModal";
        echo ($context["module_id"] ?? null);
        echo "\">
\t<img src=\"/catalog/view/theme/default/images/i-calc.svg\"><span>";
        // line 2
        echo ($context["button_name"] ?? null);
        echo "</span>
</button>

<div class=\"modal fade\" id=\"feedbackModal";
        // line 5
        echo ($context["module_id"] ?? null);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"feedbackModalLabel";
        echo ($context["module_id"] ?? null);
        echo "\" data-modal-alias=\"request-pay,feedbackModal";
        echo ($context["module_id"] ?? null);
        echo "\">
\t<div class=\"modal-dialog-01\" role=\"document\">
\t\t<div class=\"modal__content\">
\t\t\t<button type=\"button\" class=\"close modal__close\" data-dismiss=\"modal\" aria-label=\"Close\"><img src=\"/catalog/view/theme/default/images/close.svg\"></button>
\t\t\t<h3 class=\"modal-title\" id=\"feedbackModalLabel";
        // line 9
        echo ($context["module_id"] ?? null);
        echo "\">";
        echo ($context["module_name"] ?? null);
        echo "</h3>
\t\t\t<div class=\"modal__body\">
\t\t\t\t<form role=\"form\" class=\"modal__form\" data-toggle=\"validator\" enctype=\"multipart/form-data\" id=\"form-formcreator";
        // line 11
        echo ($context["module_id"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 12
        if (($context["fields"] ?? null)) {
            // line 13
            echo "\t\t\t\t\t\t";
            $context["k"] = 0;
            // line 14
            echo "\t\t\t\t\t\t";
            $context["field_row"] = 0;
            // line 15
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 16
                echo "\t\t\t\t\t\t\t";
                $context["field_row"] = (($context["field_row"] ?? null) + 1);
                // line 17
                echo "\t\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 17) == "input") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 19) == "file")) {
                            // line 20
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"form_input[";
                            // line 21
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 21);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 21);
                            echo "\" value=\"file\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input button-file\" id=\"button-file";
                            // line 22
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 23
                            echo ($context["text_input_file"] ?? null);
                            echo "</span><span class=\"result-button-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"input-file\" onchange=\"infoFileUpload();\" name=\"form_input_file\" id=\"formInputFile";
                            // line 25
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"form_input_file_hidden\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                            // line 28
                            echo ($context["field_row"] ?? null);
                            echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#button-file";
                            // line 30
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").on(\"click\", function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).closest(\".form-group\").find(\"input[type='file']\").trigger(\"click\");
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\tfunction infoFileUpload(){
\t\t\t\t\t\t\t\t\t\t\t\t\tvar fileInput = \$(\"#formInputFile";
                            // line 34
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\")[0];
\t\t\t\t\t\t\t\t\t\t\t\t\tvar file = fileInput.files[0];
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif (!file) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 38
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл не выбран');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif (file.size > 10 * 1024 * 1024) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 43
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл слишком большой (максимум 10MB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 44
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tvar allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'text/csv', 'text/plain'];
\t\t\t\t\t\t\t\t\t\t\t\t\tif (allowedTypes.indexOf(file.type) === -1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 52
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Неподдерживаемый тип файла');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 53
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 57
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Выбран: ' + file.name + ' (' + Math.round(file.size / 1024) + ' KB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 58
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").removeClass('hasError');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"form_input[";
                            // line 64
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 64);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 64);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                            // line 66
                            echo ($context["field_row"] ?? null);
                            echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70) == "file")) {
                            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input hidden\" name=\"form_input[";
                            // line 72
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 72);
                            echo "\" value=\"file\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input button-file\" id=\"button-file";
                            // line 73
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 74
                            echo ($context["text_input_file"] ?? null);
                            echo "</span><span class=\"result-button-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"input-file hidden\" onchange=\"infoFileUpload();\" name=\"form_input_file\" id=\"formInputFile";
                            // line 76
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"form_input_file_hidden\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                            // line 79
                            echo ($context["field_row"] ?? null);
                            echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#button-file";
                            // line 81
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").on(\"click\", function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).closest(\".form-group\").find(\"input[type='file']\").trigger(\"click\");
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\tfunction infoFileUpload(){
\t\t\t\t\t\t\t\t\t\t\t\t\tvar fileInput = \$(\"#formInputFile";
                            // line 85
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\")[0];
\t\t\t\t\t\t\t\t\t\t\t\t\tvar file = fileInput.files[0];
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif (!file) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 89
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл не выбран');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif (file.size > 10 * 1024 * 1024) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 94
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл слишком большой (максимум 10MB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 95
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tvar allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'text/csv', 'text/plain'];
\t\t\t\t\t\t\t\t\t\t\t\t\tif (allowedTypes.indexOf(file.type) === -1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 103
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Неподдерживаемый тип файла');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 104
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 108
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Выбран: ' + file.name + ' (' + Math.round(file.size / 1024) + ' KB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 109
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").removeClass('hasError');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                            // line 115
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 115);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 115);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 118
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 119) == "textarea") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 119))) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 120)) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputText";
                        // line 122
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 122);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 123
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 123);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" data-minlength=\"5\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 123);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 125
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"textarea\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputText";
                        // line 129
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 129);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 130
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 130);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 130);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 133) == "select") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 133))) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 136
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 136);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"form_input[";
                        // line 137
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 137);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 138
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 138)) - 1);
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 140
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>";
                            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["option"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 146
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 146);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"form_input[";
                        // line 147
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 147);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 148
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 148)) - 1);
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 150
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>";
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["option"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 155) == "radio") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 155))) {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form__row required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal__radio\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">";
                        // line 159
                        echo ($context["text_connection_radio"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal__radio-content\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 161
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 161)) - 1);
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
                                                        <input class=\"radio__input\" required=\"\" type=\"radio\" name=\"form_input[";
                            // line 164
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 164);
                            echo "]\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["option"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null);
                            echo "\" id=\"";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "-";
                            echo $context["i"];
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio__label\" for=\"";
                            // line 165
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "-";
                            echo $context["i"];
                            echo "\">
                                                        ";
                            // line 166
                            if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["option"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null) == "telegram")) {
                                // line 167
                                echo "                                                            <img src=\"/catalog/view/theme/default/images/i-tg.svg\">
                                                            <span>Telegram</span>
                                                        ";
                            } else {
                                // line 170
                                echo "                                                            <img src=\"/catalog/view/theme/default/images/i-mail.svg\">
                                                            <span>E-mail</span>
                                                        ";
                            }
                            // line 173
                            echo "                                                        </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 176
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"toggler btn btn-blue send-form-visible-button\" type=\"submit\">";
                        // line 177
                        echo ($context["text_button_submit_form_raschet_n"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 179
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"radio\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputRadio";
                        // line 183
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 183);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\" id=\"formInputRadio";
                        // line 184
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 185
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 185)) - 1);
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 187
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"form_input[";
                            // line 188
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 188);
                            echo "]\" value=\"";
                            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["option"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["option"] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["i"]] ?? null) : null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 194
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 194) == "checkbox") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 194))) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 197
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 198
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 198)) - 1);
                        // line 199
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label ";
                            // line 201
                            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 201) == "approval")) {
                                echo "class=\"approval-label\"";
                            }
                            echo "\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"form_input[";
                            // line 202
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 202);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["field"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["option"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["i"]] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 203
                            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 203) == "approval")) {
                                // line 204
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"approval-block\">";
                                echo ($context["text_approval_radio"] ?? null);
                                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 206
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["field"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["option"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["i"]] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 207
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 213
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"checkbox\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputCheckbox";
                        // line 217
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 217);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 218
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 219
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 219)) - 1);
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 221
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"form_input[";
                            // line 222
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 222);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["field"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["option"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["i"]] ?? null) : null);
                            echo "\">";
                            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["field"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["option"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["i"]] ?? null) : null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 225
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 228) == "date") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 228))) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 230
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["k"] ?? null) == 1)) {
                        // line 231
                        echo "\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js\"></script>
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js\"></script>
\t\t\t\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css\"/>
\t\t\t\t\t\t\t\t";
                    }
                    // line 235
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 235)) {
                        // line 236
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputDate";
                        // line 237
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 237);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 238
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 238);
                        echo "]\" id=\"formInputDate";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 238);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 240
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 243
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputDate";
                        // line 244
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 244);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"formInputDate";
                        // line 245
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"form-control\" name=\"form_input[";
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 245);
                        echo "]\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 245);
                        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 248
                    echo "\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\$(function () {
                                        \$('#formInputDate";
                    // line 250
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["field_row"] ?? null);
                    echo "').datepicker({language: 'ru'});
                                    });
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                }
                // line 254
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "\t\t\t\t\t";
        }
        // line 256
        echo "\t\t\t\t\t<div class=\"hidden-inputs\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"link_page\" value=\"http://";
        // line 257
        echo ($context["domain"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_name\" value=\"";
        // line 258
        echo ($context["module_name"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_id\" value=\"";
        // line 259
        echo ($context["module_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"form_success\" value=\"";
        // line 260
        echo ($context["form_success"] ?? null);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"modal\" id=\"request-pay-msg\">
    <div class=\"modal__content\">
      <div class=\"modal__close\"><img src=\"/catalog/view/theme/default/images/close.svg\">
      </div>
      <div class=\"modal__body\">
        <div class=\"modal__row\">
          <div class=\"modal__form\">
            <h3>";
        // line 275
        echo ($context["title_success_form_42_n"] ?? null);
        echo "</h3>
            <div class=\"form\">
              <div class=\"modal__desc\">";
        // line 277
        echo ($context["sub_title_success_form_42_n"] ?? null);
        echo "</div>
              <div class=\"modal__row _center\">
                <button class=\"btn btn-blue j-close modal__close_button\" type=\"button\">";
        // line 279
        echo ($context["button_close_success_form_42_n"] ?? null);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<script type=\"text/javascript\">
\$('#form-formcreator";
        // line 289
        echo ($context["module_id"] ?? null);
        echo "').on('submit', function (e) {
    e.preventDefault();
    var that = \$(e.target);
    var \$modal = \$('#feedbackModal";
        // line 292
        echo ($context["module_id"] ?? null);
        echo "');
    var \$modalBody = \$modal.find('.modal__body');

    \$modalBody.find('.loading-indicator, .alert-danger, .alert-success, .text-danger').remove();

    var \$loadingHtml = \$('<div class=\"loading-indicator\" style=\"text-align: center; padding: 20px;\">' +
        '<div class=\"spinner-border text-primary\" role=\"status\">' +
        '<span class=\"sr-only\">Обработка...</span>' +
        '</div>' +
        '<p>Обрабатываем ваш файл...</p>' +
        '</div>');

    \$modalBody.prepend(\$loadingHtml);

    var formData = new FormData(this);

    \$.ajax({
        url: 'index.php?route=extension/module/formcreator/send',
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (data) {
            \$loadingHtml.remove();

            if (data['error']) {
                var \$error = \$('<div class=\"alert alert-danger\" role=\"alert\"></div>').text(data['error']);
                \$modalBody.prepend(\$error);
                return;
            }

            var channel = data['notification_channel'] || 'email';
            var \$successBox = \$('<div class=\"alert alert-success\" role=\"alert\"></div>');
            \$successBox.append('<h4 style=\"margin-top:0;\">Файл успешно обработан!</h4>');

            if (data['telegram_link']) {
                \$successBox.append('<p>Ваш расчет готов. Получите его в Telegram:</p>');
                var \$tgLink = \$('<a class=\"btn btn-primary\" target=\"_blank\" rel=\"noopener noreferrer\">Получить расчет в Telegram</a>');
                \$tgLink.attr('href', data['telegram_link']);
                \$successBox.append(\$tgLink);
                if (data['ttl_seconds']) {
                    var hours = Math.round((data['ttl_seconds'] / 3600) * 10) / 10;
                    \$successBox.append(\$('<p class=\"small text-muted\" style=\"margin-top:8px;\"></p>').text('Ссылка активна около ' + hours + ' ч.'));
                }
            }

            if (channel !== 'telegram' && data['email_sent']) {
                var emailText = 'Мы отправили расчет на вашу почту';
                if (data['recipient_email']) {
                    emailText += ' (' + data['recipient_email'] + ')';
                }
                emailText += '.';
                \$successBox.append(\$('<p></p>').text(emailText));
            } else if (channel === 'telegram') {
                \$successBox.append('<p>Вы выбрали получение расчета в Telegram. Письмо на почту не отправлялось.</p>');
            }

            if (!\$successBox.children().length) {
                \$successBox.append('<p>Запрос успешно обработан.</p>');
            }

            \$modalBody.prepend(\$successBox);

            if (channel !== 'telegram' && !data['email_sent'] && data['recipient_email']) {
                var warningText = 'Не удалось отправить письмо на ' + data['recipient_email'] + '.';
                if (data['email_error']) {
                    warningText += ' Причина: ' + data['email_error'];
                }
                warningText += ' Вы можете получить расчет по ссылке выше.';
                var \$warn = \$('<div class=\"alert alert-warning\" role=\"alert\"></div>').text(warningText);
                \$modalBody.prepend(\$warn);
            } else if (channel !== 'telegram' && !data['recipient_email']) {
                var \$info = \$('<div class=\"alert alert-info\" role=\"alert\"></div>').text('Почтовый адрес не указан, поэтому письмо не отправлено.');
                \$modalBody.prepend(\$info);
            }

            alertForm({ form: that, msg: data['success'] });

            that[0].reset();
            \$modal.find('.result-button-file').html('');
        },
        error: function(xhr, status, error) {
            \$loadingHtml.remove();

            var \$errorHtml = \$('<div class=\"alert alert-danger\" role=\"alert\">' +
                'Произошла ошибка при обработке запроса. Попробуйте еще раз.' +
                '</div>');
            if (xhr && xhr.responseJSON && xhr.responseJSON.error) {
                \$errorHtml.text(xhr.responseJSON.error);
            }
            \$modalBody.prepend(\$errorHtml);
        }
    });
});

function alertForm(alert) {
    \$('#feedbackModal";
        // line 389
        echo ($context["module_id"] ?? null);
        echo "').modal('hide');
    \$('#request-pay-msg').modal('show');
    alert.form.closest('.modal').find('.loading-indicator').remove();
}

\$('#request-pay-msg .modal__close, #request-pay-msg .modal__close_button').on('click', function (e) {
    e.preventDefault();
    \$('#request-pay-msg').modal('hide');
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/formcreator_modal_42.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 389,  939 => 292,  933 => 289,  920 => 279,  915 => 277,  910 => 275,  892 => 260,  888 => 259,  884 => 258,  880 => 257,  877 => 256,  874 => 255,  868 => 254,  859 => 250,  855 => 248,  841 => 245,  833 => 244,  830 => 243,  824 => 240,  811 => 238,  803 => 237,  800 => 236,  797 => 235,  791 => 231,  788 => 230,  785 => 229,  782 => 228,  777 => 225,  760 => 222,  757 => 221,  752 => 220,  750 => 219,  744 => 218,  736 => 217,  733 => 216,  727 => 213,  723 => 211,  714 => 207,  708 => 206,  702 => 204,  700 => 203,  690 => 202,  684 => 201,  681 => 200,  676 => 199,  674 => 198,  668 => 197,  665 => 196,  662 => 195,  659 => 194,  654 => 191,  639 => 188,  636 => 187,  631 => 186,  629 => 185,  623 => 184,  615 => 183,  612 => 182,  606 => 179,  601 => 177,  598 => 176,  590 => 173,  585 => 170,  580 => 167,  578 => 166,  570 => 165,  556 => 164,  553 => 163,  548 => 162,  546 => 161,  541 => 159,  537 => 157,  534 => 156,  531 => 155,  526 => 152,  517 => 150,  512 => 149,  510 => 148,  500 => 147,  492 => 146,  489 => 145,  484 => 142,  475 => 140,  470 => 139,  468 => 138,  458 => 137,  450 => 136,  447 => 135,  444 => 134,  441 => 133,  427 => 130,  419 => 129,  416 => 128,  410 => 125,  397 => 123,  389 => 122,  386 => 121,  383 => 120,  380 => 119,  377 => 118,  363 => 115,  360 => 114,  350 => 109,  344 => 108,  335 => 104,  329 => 103,  316 => 95,  310 => 94,  300 => 89,  291 => 85,  282 => 81,  277 => 79,  269 => 76,  264 => 74,  258 => 73,  246 => 72,  240 => 70,  236 => 68,  230 => 66,  217 => 64,  214 => 63,  204 => 58,  198 => 57,  189 => 53,  183 => 52,  170 => 44,  164 => 43,  154 => 38,  145 => 34,  136 => 30,  131 => 28,  123 => 25,  118 => 23,  112 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  68 => 11,  61 => 9,  50 => 5,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/formcreator_modal_42.twig", "");
    }
}
