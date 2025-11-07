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
class __TwigTemplate_36ad3e6d4550591277fe6f4611491495a42629f6cb4ea17cb583c1dbd61e41db extends \Twig\Template
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
\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверяем размер файла (максимум 10MB)
\t\t\t\t\t\t\t\t\t\t\t\t\tif (file.size > 10 * 1024 * 1024) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 44
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл слишком большой (максимум 10MB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 45
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверяем тип файла
\t\t\t\t\t\t\t\t\t\t\t\t\tvar allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'text/csv', 'text/plain'];
\t\t\t\t\t\t\t\t\t\t\t\t\tif (allowedTypes.indexOf(file.type) === -1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 54
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Неподдерживаемый тип файла');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 55
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t// Показываем информацию о файле
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 60
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Выбран: ' + file.name + ' (' + Math.round(file.size / 1024) + ' KB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 61
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").removeClass('hasError');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"form_input[";
                            // line 67
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 67);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 67);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                            // line 69
                            echo ($context["field_row"] ?? null);
                            echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 73) == "file")) {
                            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input hidden\" name=\"form_input[";
                            // line 75
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 75);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 75);
                            echo "\" value=\"file\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input button-file\" id=\"button-file";
                            // line 76
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" class=\"input\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                            // line 77
                            echo ($context["text_input_file"] ?? null);
                            echo "</span><span class=\"result-button-file\"></span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"input-file hidden\" onchange=\"infoFileUpload();\" name=\"form_input_file\" id=\"formInputFile";
                            // line 79
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"form_input_file_hidden\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                            // line 82
                            echo ($context["field_row"] ?? null);
                            echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#button-file";
                            // line 84
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").on(\"click\", function(){
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(this).closest(\".form-group\").find(\"input[type='file']\").trigger(\"click\");
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\tfunction infoFileUpload(){
\t\t\t\t\t\t\t\t\t\t\t\t\tvar fileInput = \$(\"#formInputFile";
                            // line 88
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\")[0];
\t\t\t\t\t\t\t\t\t\t\t\t\tvar file = fileInput.files[0];
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\tif (!file) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 92
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл не выбран');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверяем размер файла (максимум 10MB)
\t\t\t\t\t\t\t\t\t\t\t\t\tif (file.size > 10 * 1024 * 1024) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 98
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Файл слишком большой (максимум 10MB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 99
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t// Проверяем тип файла
\t\t\t\t\t\t\t\t\t\t\t\t\tvar allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  'text/csv', 'text/plain'];
\t\t\t\t\t\t\t\t\t\t\t\t\tif (allowedTypes.indexOf(file.type) === -1) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 108
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Неподдерживаемый тип файла');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 109
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").val('');
\t\t\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t// Показываем информацию о файле
\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#button-file";
                            // line 114
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo " .result-button-file').html('Выбран: ' + file.name + ' (' + Math.round(file.size / 1024) + ' KB)');
\t\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#formInputFile";
                            // line 115
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\").removeClass('hasError');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                            // line 121
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 121);
                            echo "]\" id=\"formInput";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 121);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 124
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 125) == "textarea") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 125))) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 126)) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputText";
                        // line 128
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 128);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 129
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 129);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" data-minlength=\"5\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 129);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 131
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"textarea\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputText";
                        // line 135
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 135);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"form_input[";
                        // line 136
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 136);
                        echo "]\" id=\"formInputText";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" rows=\"3\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 136);
                        echo "\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 139) == "select") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 139))) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 140)) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 142
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 142);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"form_input[";
                        // line 143
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 143);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 144
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 144)) - 1);
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>";
                            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["option"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputSelect";
                        // line 152
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 152);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"form_input[";
                        // line 153
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 153);
                        echo "]\" id=\"formInputSelect";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 154
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 154)) - 1);
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 156
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>";
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["option"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 161
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 161) == "radio") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 161))) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form__row required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal__radio\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"label\">";
                        // line 165
                        echo ($context["text_connection_radio"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal__radio-content\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 167)) - 1);
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
                                                        <input class=\"radio__input\" required=\"\" type=\"radio\" name=\"form_input[";
                            // line 170
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 170);
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
                            // line 171
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["field_row"] ?? null);
                            echo "-";
                            echo $context["i"];
                            echo "\">
                                                        ";
                            // line 172
                            if (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["option"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null) == "telegram")) {
                                // line 173
                                echo "                                                            <img src=\"/catalog/view/theme/default/images/i-tg.svg\">
                                                        ";
                            } else {
                                // line 175
                                echo "                                                            <img src=\"/catalog/view/theme/default/images/i-whatsapp.svg\">
                                                        ";
                            }
                            // line 177
                            echo "                                                        </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"toggler btn btn-blue send-form-visible-button\" type=\"submit\">";
                        // line 181
                        echo ($context["text_button_submit_form_raschet_n"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 183
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"radio\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputRadio";
                        // line 187
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 187);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\" id=\"formInputRadio";
                        // line 188
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 189
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 189)) - 1);
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"form_input[";
                            // line 192
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 192);
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
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 198) == "checkbox") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 198))) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 199)) {
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 201
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 202
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 202)) - 1);
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 204
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label ";
                            // line 205
                            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 205) == "approval")) {
                                echo "class=\"approval-label\"";
                            }
                            echo "\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"form_input[";
                            // line 206
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 206);
                            echo "][";
                            echo $context["i"];
                            echo "]\" value=\"";
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["field"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["option"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["i"]] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 207
                            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 207) == "approval")) {
                                // line 208
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"approval-block\">";
                                echo ($context["text_approval_radio"] ?? null);
                                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 210
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["field"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["option"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["i"]] ?? null) : null);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 211
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 217
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"checkbox\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputCheckbox";
                        // line 221
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 221);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\" id=\"formInputCheckbox";
                        // line 222
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 223
                        $context["field_count"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "option", [], "any", false, false, false, 223)) - 1);
                        // line 224
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, ($context["field_count"] ?? null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"form_input[";
                            // line 226
                            echo ($context["field_row"] ?? null);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 226);
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
                        // line 229
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t\t\t\t\t";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 232) == "date") && twig_get_attribute($this->env, $this->source, $context["field"], "field_status", [], "any", false, false, false, 232))) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 234
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["k"] ?? null) == 1)) {
                        // line 235
                        echo "\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js\"></script>
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js\"></script>
\t\t\t\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css\"/>
\t\t\t\t\t\t\t\t";
                    }
                    // line 239
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 239)) {
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"formInputDate";
                        // line 241
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 241);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"form_input[";
                        // line 242
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 242);
                        echo "]\" id=\"formInputDate";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" data-minlength=\"3\" required=\"\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 242);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"form_input[";
                        // line 244
                        echo ($context["field_row"] ?? null);
                        echo "][required]\" value=\"input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 247
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"formInputDate";
                        // line 248
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"control-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 248);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"formInputDate";
                        // line 249
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["field_row"] ?? null);
                        echo "\" class=\"form-control\" name=\"form_input[";
                        echo ($context["field_row"] ?? null);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 249);
                        echo "]\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 249);
                        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 252
                    echo "\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\$(function () {
                                        \$('#formInputDate";
                    // line 254
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["field_row"] ?? null);
                    echo "').datepicker({language: 'ru'});
                                    });
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                }
                // line 258
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "\t\t\t\t\t";
        }
        // line 260
        echo "\t\t\t\t\t<div class=\"hidden-inputs\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"link_page\" value=\"http://";
        // line 261
        echo ($context["domain"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_name\" value=\"";
        // line 262
        echo ($context["module_name"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"module_id\" value=\"";
        // line 263
        echo ($context["module_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"form_success\" value=\"";
        // line 264
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
        // line 279
        echo ($context["title_success_form_42_n"] ?? null);
        echo "</h3>
            <div class=\"form\">
              <div class=\"modal__desc\">";
        // line 281
        echo ($context["sub_title_success_form_42_n"] ?? null);
        echo "</div>
              <div class=\"modal__row _center\">
                <button class=\"btn btn-blue j-close modal__close_button\" type=\"button\">";
        // line 283
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
        // line 293
        echo ($context["module_id"] ?? null);
        echo "').on('submit', function (e) {
    e.preventDefault();
    var that = \$(e.target);
    var \$modal = \$('#feedbackModal";
        // line 296
        echo ($context["module_id"] ?? null);
        echo "');
    var \$modalBody = \$modal.find('.modal__body');

    // Удаляем предыдущие уведомления и индикаторы
    \$modalBody.find('.loading-indicator, .alert-danger, .alert-success, .text-danger').remove();

    // Показываем индикатор загрузки
    var \$loadingHtml = \$('<div class=\"loading-indicator\" style=\"text-align: center; padding: 20px;\">' +
        '<div class=\"spinner-border text-primary\" role=\"status\">' +
        '<span class=\"sr-only\">Обработка...</span>' +
        '</div>' +
        '<p>Обрабатываем ваш файл...</p>' +
        '</div>');

    \$modalBody.prepend(\$loadingHtml);

    // Подготавливаем данные формы с файлом
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

            // Показываем успешное сообщение, если указана ссылка
            if (data['telegram_link']) {
                var successHtml = '' +
                    '<div class=\"alert alert-success\" role=\"alert\">' +
                    '<h4 style=\"margin-top:0;\">Файл успешно обработан!</h4>' +
                    '<p>Ваш расчет готов. Получите его в Telegram:</p>' +
                    '<a href=\"' + data['telegram_link'] + '\" class=\"btn btn-primary\" target=\"_blank\" rel=\"noopener noreferrer\">' +
                    'Получить расчет в Telegram' +
                    '</a>' +
                    '</div>';
                \$modalBody.prepend(\$(successHtml));
            }

            alertForm({ form: that, msg: data['success'] });

            // Очищаем форму
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
    if (window.siteModals && typeof window.siteModals.close === 'function') {
        window.siteModals.close('#feedbackModal";
        // line 366
        echo ($context["module_id"] ?? null);
        echo "');
        window.siteModals.open('#request-pay-msg');
    } else {
        \$('#feedbackModal";
        // line 369
        echo ($context["module_id"] ?? null);
        echo "').removeClass('_active');
        \$('#request-pay-msg').addClass('_active');
    }
}

\$('#request-pay-msg .modal__close, #request-pay-msg .modal__close_button').on('click', function(){
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
        return array (  1022 => 369,  1016 => 366,  943 => 296,  937 => 293,  924 => 283,  919 => 281,  914 => 279,  896 => 264,  892 => 263,  888 => 262,  884 => 261,  881 => 260,  878 => 259,  872 => 258,  863 => 254,  859 => 252,  845 => 249,  837 => 248,  834 => 247,  828 => 244,  815 => 242,  807 => 241,  804 => 240,  801 => 239,  795 => 235,  792 => 234,  789 => 233,  786 => 232,  781 => 229,  764 => 226,  761 => 225,  756 => 224,  754 => 223,  748 => 222,  740 => 221,  737 => 220,  731 => 217,  727 => 215,  718 => 211,  712 => 210,  706 => 208,  704 => 207,  694 => 206,  688 => 205,  685 => 204,  680 => 203,  678 => 202,  672 => 201,  669 => 200,  666 => 199,  663 => 198,  658 => 195,  643 => 192,  640 => 191,  635 => 190,  633 => 189,  627 => 188,  619 => 187,  616 => 186,  610 => 183,  605 => 181,  602 => 180,  594 => 177,  590 => 175,  586 => 173,  584 => 172,  576 => 171,  562 => 170,  559 => 169,  554 => 168,  552 => 167,  547 => 165,  543 => 163,  540 => 162,  537 => 161,  532 => 158,  523 => 156,  518 => 155,  516 => 154,  506 => 153,  498 => 152,  495 => 151,  490 => 148,  481 => 146,  476 => 145,  474 => 144,  464 => 143,  456 => 142,  453 => 141,  450 => 140,  447 => 139,  433 => 136,  425 => 135,  422 => 134,  416 => 131,  403 => 129,  395 => 128,  392 => 127,  389 => 126,  386 => 125,  383 => 124,  369 => 121,  366 => 120,  356 => 115,  350 => 114,  340 => 109,  334 => 108,  320 => 99,  314 => 98,  303 => 92,  294 => 88,  285 => 84,  280 => 82,  272 => 79,  267 => 77,  261 => 76,  249 => 75,  243 => 73,  239 => 71,  233 => 69,  220 => 67,  217 => 66,  207 => 61,  201 => 60,  191 => 55,  185 => 54,  171 => 45,  165 => 44,  154 => 38,  145 => 34,  136 => 30,  131 => 28,  123 => 25,  118 => 23,  112 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  68 => 11,  61 => 9,  50 => 5,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/formcreator_modal_42.twig", "");
    }
}
