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

/* extension/module/cinewsletter.twig */
class __TwigTemplate_afd901d70c120ea4633d1473689d7b46b46eb3adb5d03e075e957fe641ef7e3b extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["template_list"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_html"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-desktop\"></i> ";
        echo ($context["button_html"] ?? null);
        echo "</a>
        <a href=\"";
        // line 7
        echo ($context["quicksendemail"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_quicksendemail"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-envelope\"></i></a>
        <a href=\"";
        // line 8
        echo ($context["subscriber_list"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_list"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-list\"></i> </a>
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_save_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-refresh\"></i></button>
        <button type=\"submit\" name=\"change\" value=\"close\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 33
        echo ($context["text_edit"] ?? null);
        echo "</h3>
        <div class=\"pull-right\">
          <select name=\"store_id\" onchange=\"window.location = 'index.php?route=extension/module/cinewsletter&token=";
        // line 35
        echo ($context["token"] ?? null);
        echo "&store_id='+ this.value;\">
            <option value=\"0\">";
        // line 36
        echo ($context["text_default"] ?? null);
        echo "</option>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 38
            echo "            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38) == ($context["store_id"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 38);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </select>
        </div>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-layout\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_layout"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-footer\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-popup\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_popup"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-verify\" data-toggle=\"tab\">";
        // line 50
        echo ($context["tab_verify"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-unsubscribe\" data-toggle=\"tab\">";
        // line 51
        echo ($context["tab_unsubscribe"] ?? null);
        echo "</a></li></li>
            <li><a href=\"#tab-css\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_css"] ?? null);
        echo "</a></li></li>
            <li><a href=\"#tab-social-links\" data-toggle=\"tab\">";
        // line 53
        echo ($context["tab_social"] ?? null);
        echo "</a></li></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
                <fieldset>
                  <legend>";
        // line 58
        echo ($context["legend_general"] ?? null);
        echo "</legend>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 60
        echo ($context["entry_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"module_cinewsletter_status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 63
        if (($context["module_cinewsletter_status"] ?? null)) {
            // line 64
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\">";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 67
            echo "                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 68
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        }
        // line 70
        echo "                      </select>
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                  <legend>";
        // line 75
        echo ($context["legend_verify_email"] ?? null);
        echo "</legend>
                   <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 77
        echo ($context["help_verify_required"] ?? null);
        echo "\">";
        echo ($context["entry_verify_required"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_cinewsletter_verify_required\" value=\"1\"
                        ";
        // line 81
        echo ((($context["module_cinewsletter_verify_required"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                        ";
        // line 82
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_cinewsletter_verify_required\" value=\"0\" ";
        // line 85
        echo (( !($context["module_cinewsletter_verify_required"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                        ";
        // line 86
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"verify_required_message ";
        // line 90
        echo ((($context["module_cinewsletter_verify_required"] ?? null)) ? ("") : ("hide"));
        echo "\">
                    <ul class=\"nav nav-tabs\" id=\"language\">
                      ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 93
            echo "                      <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\" data-toggle=\"tab\">
                          <img src=\"language/";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 94);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 94);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            echo "</a></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </ul>
                    <div class=\"tab-content col-sm-9\">
                      ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 99
            echo "                      <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            echo "\">
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-subject";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\">";
            echo ($context["entry_subject"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_cinewsletter_verify_required_message[";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "][subject]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_cinewsletter_verify_required_message"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_cinewsletter_verify_required_message"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "subject", [], "any", false, false, false, 103)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_subject"] ?? null);
            echo "\" id=\"input-subject";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            echo "\" class=\"form-control\" />
                            ";
            // line 104
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_subject"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                // line 105
                echo "                            <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_subject"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 107
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-message";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            echo "\">";
            echo ($context["entry_message"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"module_cinewsletter_verify_required_message[";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
            echo "][message]\" placeholder=\"";
            echo ($context["entry_message"] ?? null);
            echo "\" id=\"input-message";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_cinewsletter_verify_required_message"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_cinewsletter_verify_required_message"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112)] ?? null) : null), "message", [], "any", false, false, false, 112)) : (""));
            echo "</textarea>
                            ";
            // line 113
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_message"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null)) {
                // line 114
                echo "                            <div class=\"text-danger\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_message"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 116
            echo "                          </div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                    </div>
                    <div class=\"col-sm-3\">
                      <br/>
                      <table class=\"table table-bordered\">
                        <thead>
                          <tr><td>";
        // line 125
        echo ($context["const_names"] ?? null);
        echo "</td><td>";
        echo ($context["const_short_codes"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>";
        // line 130
        echo ($context["const_logo"] ?? null);
        echo "</td><td>{LOGO}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 133
        echo ($context["const_store_name"] ?? null);
        echo "</td><td>{STORE_NAME}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 136
        echo ($context["const_store_link"] ?? null);
        echo "</td><td>{STORE_LINK}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 139
        echo ($context["const_name"] ?? null);
        echo "</td><td>{NAME}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 142
        echo ($context["const_email"] ?? null);
        echo "</td><td>{EMAIL}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 145
        echo ($context["const_link_confirm"] ?? null);
        echo "</td><td>{CONFIRMATION_LINK}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 148
        echo ($context["const_link_unsubscribe"] ?? null);
        echo "</td><td>{UNSUBSCRIBE_LINK}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                  <legend>";
        // line 156
        echo ($context["legend_confirm_email"] ?? null);
        echo "</legend>
                   <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 158
        echo ($context["help_confirm_required"] ?? null);
        echo "\">";
        echo ($context["entry_confirm_required"] ?? null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_cinewsletter_confirm_required\" value=\"1\"
                        ";
        // line 162
        echo ((($context["module_cinewsletter_confirm_required"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                        ";
        // line 163
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"radio-inline\">
                        <input type=\"radio\" name=\"module_cinewsletter_confirm_required\" value=\"0\" ";
        // line 166
        echo (( !($context["module_cinewsletter_confirm_required"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                        ";
        // line 167
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                  </div>
                  <div class=\"confirm_required_message ";
        // line 171
        echo ((($context["module_cinewsletter_confirm_required"] ?? null)) ? ("") : ("hide"));
        echo "\">
                    <ul class=\"nav nav-tabs\" id=\"confirm-language\">
                      ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 174
            echo "                      <li><a href=\"#confirm-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174);
            echo "\" data-toggle=\"tab\">
                          <img src=\"language/";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 175);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 175);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 175);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 175);
            echo "</a></li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                    </ul>
                    <div class=\"tab-content col-sm-9\">
                      ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 180
            echo "                      <div class=\"tab-pane\" id=\"confirm-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            echo "\">
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\">";
            // line 182
            echo ($context["entry_subject"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_cinewsletter_confirm_required_message[";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
            echo "][subject]\" value=\"";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["module_cinewsletter_confirm_required_message"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_cinewsletter_confirm_required_message"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null), "subject", [], "any", false, false, false, 184)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_subject"] ?? null);
            echo "\" id=\"input-subject";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
            echo "\" class=\"form-control\" />
                            ";
            // line 185
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_confirm_subject"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 185)] ?? null) : null)) {
                // line 186
                echo "                            <div class=\"text-danger\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_confirm_subject"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 186)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 188
            echo "                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\">";
            // line 191
            echo ($context["entry_message"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"module_cinewsletter_confirm_required_message[";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 193);
            echo "][message]\" placeholder=\"";
            echo ($context["entry_message"] ?? null);
            echo "\" id=\"input-confirm-message";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 193);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["module_cinewsletter_confirm_required_message"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 193)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["module_cinewsletter_confirm_required_message"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 193)] ?? null) : null), "message", [], "any", false, false, false, 193)) : (""));
            echo "</textarea>
                            ";
            // line 194
            if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_confirm_message"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194)] ?? null) : null)) {
                // line 195
                echo "                            <div class=\"text-danger\">";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_confirm_message"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195)] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 197
            echo "                          </div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                    </div>
                    <div class=\"col-sm-3\">
                      <br/>
                      <table class=\"table table-bordered\">
                        <thead>
                          <tr><td>";
        // line 206
        echo ($context["const_names"] ?? null);
        echo "</td><td>";
        echo ($context["const_short_codes"] ?? null);
        echo "</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>";
        // line 211
        echo ($context["const_logo"] ?? null);
        echo "</td><td>{LOGO}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 214
        echo ($context["const_store_name"] ?? null);
        echo "</td><td>{STORE_NAME}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 217
        echo ($context["const_store_link"] ?? null);
        echo "</td><td>{STORE_LINK}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 220
        echo ($context["const_name"] ?? null);
        echo "</td><td>{NAME}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 223
        echo ($context["const_email"] ?? null);
        echo "</td><td>{EMAIL}</td>
                          </tr>
                          <tr>
                            <td>";
        // line 226
        echo ($context["const_link_unsubscribe"] ?? null);
        echo "</td><td>{UNSUBSCRIBE_LINK}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-layout\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout-status\">";
        // line 236
        echo ($context["entry_layout_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_cinewsletter_layout_status\" id=\"input-layout-status\" class=\"form-control\">
                    ";
        // line 239
        if (($context["module_cinewsletter_layout_status"] ?? null)) {
            // line 240
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 241
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 243
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 244
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 246
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout-display-title\">";
        // line 250
        echo ($context["entry_layout_display_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_title\" value=\"1\"
                    ";
        // line 254
        echo ((($context["module_cinewsletter_layout_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 255
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_title\" value=\"0\" ";
        // line 258
        echo (( !($context["module_cinewsletter_layout_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 259
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout-display-name\">";
        // line 264
        echo ($context["entry_layout_display_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_name\" value=\"1\"
                    ";
        // line 268
        echo (((($context["module_cinewsletter_layout_display_name"] ?? null) == "1")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 269
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_name\" value=\"2\"
                    ";
        // line 273
        echo (((($context["module_cinewsletter_layout_display_name"] ?? null) == "2")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 274
        echo ($context["text_yes_req"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_name\" value=\"0\" ";
        // line 277
        echo (( !($context["module_cinewsletter_layout_display_name"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 278
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout-display-icon\">";
        // line 283
        echo ($context["entry_layout_display_icon"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_icon\" value=\"1\"
                    ";
        // line 287
        echo ((($context["module_cinewsletter_layout_display_icon"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 288
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_layout_display_icon\" value=\"0\" ";
        // line 291
        echo (( !($context["module_cinewsletter_layout_display_icon"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 292
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group iconclass-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout-display-iconclass\">";
        // line 297
        echo ($context["entry_layout_display_iconclass"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_cinewsletter_layout_display_iconclass\" value=\"";
        // line 299
        echo ($context["module_cinewsletter_layout_display_iconclass"] ?? null);
        echo "\" class=\"form-control\" />
                </div>
              </div>
              <ul class=\"nav nav-tabs\" id=\"layout-language\">
                ";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 304
            echo "                <li><a href=\"#layout-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 304);
            echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
            // line 305
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 305);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 305);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 305);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 305);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 310
            echo "                <div class=\"tab-pane\" id=\"layout-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 310);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-title";
            // line 312
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312);
            echo "\">";
            echo ($context["entry_layout_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_layout_message[";
            // line 314
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 314);
            echo "][title]\" value=\"";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 314)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 314)] ?? null) : null), "title", [], "any", false, false, false, 314)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_layout_title"] ?? null);
            echo "\" id=\"input-layout-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 314);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-desc";
            // line 318
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 318);
            echo "\">";
            echo ($context["entry_layout_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_layout_message[";
            // line 320
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 320);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_layout_description"] ?? null);
            echo "\" id=\"input-layout-desc";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 320);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 320)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 320)] ?? null) : null), "description", [], "any", false, false, false, 320)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-success";
            // line 324
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 324);
            echo "\">";
            echo ($context["entry_layout_success"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_layout_message[";
            // line 326
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 326);
            echo "][success]\" value=\"";
            echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 326)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 326)] ?? null) : null), "success", [], "any", false, false, false, 326)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_layout_success"] ?? null);
            echo "\" id=\"input-layout-success";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 326);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-name";
            // line 330
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 330);
            echo "\">";
            echo ($context["entry_layout_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_layout_message[";
            // line 332
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 332);
            echo "][name]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 332)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 332)] ?? null) : null), "name", [], "any", false, false, false, 332)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_layout_name"] ?? null);
            echo "\" id=\"input-layout-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 332);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-email";
            // line 336
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 336);
            echo "\">";
            echo ($context["entry_layout_email"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_layout_message[";
            // line 338
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 338);
            echo "][email]\" value=\"";
            echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 338)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 338)] ?? null) : null), "email", [], "any", false, false, false, 338)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_layout_email"] ?? null);
            echo "\" id=\"input-layout-email";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 338);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-layout-button";
            // line 342
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 342);
            echo "\">";
            echo ($context["entry_layout_button"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_layout_message[";
            // line 344
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 344);
            echo "][button]\" value=\"";
            echo (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 344)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["module_cinewsletter_layout_message"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 344)] ?? null) : null), "button", [], "any", false, false, false, 344)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_layout_button"] ?? null);
            echo "\" id=\"input-layout-button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 344);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-footer\">
            \t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-footer-status\">";
        // line 353
        echo ($context["entry_footer_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_cinewsletter_footer_status\" id=\"input-footer-status\" class=\"form-control\">
                    ";
        // line 356
        if (($context["module_cinewsletter_footer_status"] ?? null)) {
            // line 357
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 358
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 360
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 361
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 363
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 367
        echo ($context["help_footer_layout"] ?? null);
        echo "\">";
        echo ($context["entry_footer_layout"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 371
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 373
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 373), ($context["module_cinewsletter_footer_layout"] ?? null))) {
                // line 374
                echo "                        <input type=\"checkbox\" name=\"module_cinewsletter_footer_layout[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 374);
                echo "\" checked=\"checked\" />
                        ";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 375);
                echo "
                        ";
            } else {
                // line 377
                echo "                        <input type=\"checkbox\" name=\"module_cinewsletter_footer_layout[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 377);
                echo "\" />
                        ";
                // line 378
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 378);
                echo "
                        ";
            }
            // line 380
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                  </div>
                </div>
              </div>
            \t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-footer-display-title\">";
        // line 387
        echo ($context["entry_footer_display_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_footer_display_title\" value=\"1\"
                    ";
        // line 391
        echo ((($context["module_cinewsletter_footer_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 392
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_footer_display_title\" value=\"0\" ";
        // line 395
        echo (( !($context["module_cinewsletter_footer_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 396
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-footer-display-name\">";
        // line 401
        echo ($context["entry_footer_display_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_footer_display_name\" value=\"1\"
                    ";
        // line 405
        echo (((($context["module_cinewsletter_footer_display_name"] ?? null) == "1")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 406
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_footer_display_name\" value=\"2\"
                    ";
        // line 410
        echo (((($context["module_cinewsletter_footer_display_name"] ?? null) == "2")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 411
        echo ($context["text_yes_req"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_footer_display_name\" value=\"0\" ";
        // line 414
        echo (( !($context["module_cinewsletter_footer_display_name"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 415
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-footer-bgcolor\">";
        // line 420
        echo ($context["entry_footer_bgcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_cinewsletter_footer_bgcolor\" value=\"";
        // line 422
        echo ($context["module_cinewsletter_footer_bgcolor"] ?? null);
        echo "\" class=\"form-control color-picker\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-footer-fontcolor\">";
        // line 426
        echo ($context["entry_footer_fontcolor"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_cinewsletter_footer_fontcolor\" value=\"";
        // line 428
        echo ($context["module_cinewsletter_footer_fontcolor"] ?? null);
        echo "\" class=\"form-control color-picker\" />
                </div>
              </div>
              <ul class=\"nav nav-tabs\" id=\"footer-language\">
                ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 433
            echo "                <li><a href=\"#footer-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 433);
            echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
            // line 434
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 434);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 434);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 434);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 434);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 439
            echo "                <div class=\"tab-pane\" id=\"footer-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 439);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-title";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 441);
            echo "\">";
            echo ($context["entry_footer_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_footer_message[";
            // line 443
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 443);
            echo "][title]\" value=\"";
            echo (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 443)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 443)] ?? null) : null), "title", [], "any", false, false, false, 443)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_footer_title"] ?? null);
            echo "\" id=\"input-footer-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 443);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-desc";
            // line 447
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 447);
            echo "\">";
            echo ($context["entry_footer_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_footer_message[";
            // line 449
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_footer_description"] ?? null);
            echo "\" id=\"input-footer-desc";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449)] ?? null) : null), "description", [], "any", false, false, false, 449)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-success";
            // line 453
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 453);
            echo "\">";
            echo ($context["entry_footer_success"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_footer_message[";
            // line 455
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455);
            echo "][success]\" value=\"";
            echo (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455)] ?? null) : null), "success", [], "any", false, false, false, 455)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_footer_success"] ?? null);
            echo "\" id=\"input-footer-success";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 455);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-name";
            // line 459
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459);
            echo "\">";
            echo ($context["entry_footer_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_footer_message[";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461);
            echo "][name]\" value=\"";
            echo (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461)] ?? null) : null), "name", [], "any", false, false, false, 461)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_footer_name"] ?? null);
            echo "\" id=\"input-footer-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-email";
            // line 465
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 465);
            echo "\">";
            echo ($context["entry_footer_email"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_footer_message[";
            // line 467
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
            echo "][email]\" value=\"";
            echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467)] ?? null) : null), "email", [], "any", false, false, false, 467)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_footer_email"] ?? null);
            echo "\" id=\"input-footer-email";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 467);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-footer-button";
            // line 471
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 471);
            echo "\">";
            echo ($context["entry_footer_button"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_footer_message[";
            // line 473
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473);
            echo "][button]\" value=\"";
            echo (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["module_cinewsletter_footer_message"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473)] ?? null) : null), "button", [], "any", false, false, false, 473)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_footer_button"] ?? null);
            echo "\" id=\"input-footer-button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-popup\">
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-popup-status\">";
        // line 482
        echo ($context["entry_popup_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <select name=\"module_cinewsletter_popup_status\" id=\"input-popup-status\" class=\"form-control\">
                    ";
        // line 485
        if (($context["module_cinewsletter_popup_status"] ?? null)) {
            // line 486
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 487
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 489
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 490
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 492
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 496
        echo ($context["help_layout"] ?? null);
        echo "\">";
        echo ($context["entry_layout"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 499
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 500
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 502
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 502), ($context["module_cinewsletter_popup_layout"] ?? null))) {
                // line 503
                echo "                        <input type=\"checkbox\" name=\"module_cinewsletter_popup_layout[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 503);
                echo "\" checked=\"checked\" />
                        ";
                // line 504
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 504);
                echo "
                        ";
            } else {
                // line 506
                echo "                        <input type=\"checkbox\" name=\"module_cinewsletter_popup_layout[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 506);
                echo "\" />
                        ";
                // line 507
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 507);
                echo "
                        ";
            }
            // line 509
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-logo\">";
        // line 516
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 517
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"module_cinewsletter_popup_logo\" value=\"";
        // line 518
        echo ($context["module_cinewsletter_popup_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-bgimage\">";
        // line 522
        echo ($context["entry_bgimage"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\"><a href=\"\" id=\"thumb-bgimage\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 523
        echo ($context["bgimage"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"module_cinewsletter_popup_bgimage\" value=\"";
        // line 524
        echo ($context["module_cinewsletter_popup_bgimage"] ?? null);
        echo "\" id=\"input-bgimage\" />
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">";
        // line 529
        echo ($context["entry_checkbox_hidepopup"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popupnoagain\" value=\"1\" ";
        // line 532
        echo ((($context["module_cinewsletter_popupnoagain"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 533
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popupnoagain\" value=\"0\" ";
        // line 536
        echo (( !($context["module_cinewsletter_popupnoagain"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 537
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-popup-display-title\">";
        // line 543
        echo ($context["entry_popup_display_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popup_display_title\" value=\"1\"
                    ";
        // line 547
        echo ((($context["module_cinewsletter_popup_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 548
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popup_display_title\" value=\"0\" ";
        // line 551
        echo (( !($context["module_cinewsletter_popup_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 552
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-popup-display-name\">";
        // line 557
        echo ($context["entry_popup_display_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-9\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popup_display_name\" value=\"1\"
                    ";
        // line 561
        echo (((($context["module_cinewsletter_popup_display_name"] ?? null) == "1")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 562
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popup_display_name\" value=\"2\"
                    ";
        // line 566
        echo (((($context["module_cinewsletter_popup_display_name"] ?? null) == "2")) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 567
        echo ($context["text_yes_req"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_popup_display_name\" value=\"0\" ";
        // line 570
        echo (( !($context["module_cinewsletter_popup_display_name"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 571
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 576
        echo ($context["help_popup_reopen"] ?? null);
        echo "\">";
        echo ($context["entry_popup_reopen"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-9\">
                  <label class=\"radio-inline\">
                    ";
        // line 579
        if (($context["module_cinewsletter_popup_reopen"] ?? null)) {
            // line 580
            echo "                    <input type=\"radio\" name=\"module_cinewsletter_popup_reopen\" value=\"1\" checked=\"checked\" />
                    ";
            // line 581
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 583
            echo "                    <input type=\"radio\" name=\"module_cinewsletter_popup_reopen\" value=\"1\" />
                    ";
            // line 584
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 586
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 588
        if ( !($context["module_cinewsletter_popup_reopen"] ?? null)) {
            // line 589
            echo "                    <input type=\"radio\" name=\"module_cinewsletter_popup_reopen\" value=\"0\" checked=\"checked\" />
                    ";
            // line 590
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 592
            echo "                    <input type=\"radio\" name=\"module_cinewsletter_popup_reopen\" value=\"0\" />
                    ";
            // line 593
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 595
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group required minutes-group\">
                <label class=\"col-sm-3 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 599
        echo ($context["help_minutes"] ?? null);
        echo "\">";
        echo ($context["entry_minutes"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"module_cinewsletter_popup_minutes\" class=\"form-control\" value=\"";
        // line 602
        echo ($context["module_cinewsletter_popup_minutes"] ?? null);
        echo "\" />
                    <span class=\"input-group-addon\">";
        // line 603
        echo ($context["text_minutes"] ?? null);
        echo "</span>
                  </div>
                  ";
        // line 605
        if (($context["error_popup_minutes"] ?? null)) {
            // line 606
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_popup_minutes"] ?? null);
            echo "</div>
                  ";
        }
        // line 608
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"input-popup-html\">";
        // line 611
        echo ($context["entry_popup_html"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <select name=\"module_cinewsletter_popup_html\" class=\"form-control\">
                    ";
        // line 614
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popup_htmls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["popup_html"]) {
            // line 615
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["popup_html"], "filename", [], "any", false, false, false, 615) == ($context["module_cinewsletter_popup_html"] ?? null))) {
                // line 616
                echo "                      ";
                $context["sel"] = "selected=\"selected\"";
                // line 617
                echo "                    ";
            } else {
                // line 618
                echo "                      ";
                $context["sel"] = "";
                // line 619
                echo "                    ";
            }
            // line 620
            echo "                    <option ";
            echo ($context["sel"] ?? null);
            echo " value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["popup_html"], "filename", [], "any", false, false, false, 620);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["popup_html"], "title", [], "any", false, false, false, 620);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popup_html'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "                    </select>
                </div>
              </div>
              <ul class=\"nav nav-tabs\" id=\"popup-language\">
                ";
        // line 626
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 627
            echo "                <li><a href=\"#popup-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 627);
            echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
            // line 628
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 628);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 628);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 628);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 628);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 632
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 633
            echo "                <div class=\"tab-pane\" id=\"popup-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 633);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-title";
            // line 635
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 635);
            echo "\">";
            echo ($context["entry_popup_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_popup_message[";
            // line 637
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 637);
            echo "][title]\" value=\"";
            echo (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 637)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 637)] ?? null) : null), "title", [], "any", false, false, false, 637)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_popup_title"] ?? null);
            echo "\" id=\"input-popup-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 637);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-desc";
            // line 641
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 641);
            echo "\">";
            echo ($context["entry_popup_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_popup_message[";
            // line 643
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 643);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_popup_description"] ?? null);
            echo "\" id=\"input-popup-desc";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 643);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 643)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 643)] ?? null) : null), "description", [], "any", false, false, false, 643)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-success";
            // line 647
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 647);
            echo "\">";
            echo ($context["entry_popup_success"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_popup_message[";
            // line 649
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649);
            echo "][success]\" value=\"";
            echo (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649)] ?? null) : null), "success", [], "any", false, false, false, 649)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_popup_success"] ?? null);
            echo "\" id=\"input-popup-success";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-name";
            // line 653
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 653);
            echo "\">";
            echo ($context["entry_popup_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_popup_message[";
            // line 655
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 655);
            echo "][name]\" value=\"";
            echo (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 655)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 655)] ?? null) : null), "name", [], "any", false, false, false, 655)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_popup_name"] ?? null);
            echo "\" id=\"input-popup-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 655);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-email";
            // line 659
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 659);
            echo "\">";
            echo ($context["entry_popup_email"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_popup_message[";
            // line 661
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 661);
            echo "][email]\" value=\"";
            echo (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 661)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 661)] ?? null) : null), "email", [], "any", false, false, false, 661)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_popup_email"] ?? null);
            echo "\" id=\"input-popup-email";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 661);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-popup-button";
            // line 665
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 665);
            echo "\">";
            echo ($context["entry_popup_button"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_popup_message[";
            // line 667
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 667);
            echo "][button]\" value=\"";
            echo (((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 667)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["module_cinewsletter_popup_message"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 667)] ?? null) : null), "button", [], "any", false, false, false, 667)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_popup_button"] ?? null);
            echo "\" id=\"input-popup-button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 667);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-verify\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-verify-display-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 676
        echo ($context["help_verify_display_title"] ?? null);
        echo "\">";
        echo ($context["entry_verify_display_title"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_title\" value=\"1\"
                    ";
        // line 680
        echo ((($context["module_cinewsletter_verify_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 681
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_title\" value=\"0\" ";
        // line 684
        echo (( !($context["module_cinewsletter_verify_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 685
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-verify-display-description\"><span data-toggle=\"tooltip\" title=\"";
        // line 690
        echo ($context["help_verify_display_description"] ?? null);
        echo "\">";
        echo ($context["entry_verify_display_description"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_description\" value=\"1\"
                    ";
        // line 694
        echo ((($context["module_cinewsletter_verify_display_description"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 695
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_description\" value=\"0\" ";
        // line 698
        echo (( !($context["module_cinewsletter_verify_display_description"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 699
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-verify-display-logo\"><span data-toggle=\"tooltip\" title=\"";
        // line 704
        echo ($context["help_verify_display_logo"] ?? null);
        echo "\">";
        echo ($context["entry_verify_display_logo"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_logo\" value=\"1\"
                    ";
        // line 708
        echo ((($context["module_cinewsletter_verify_display_logo"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 709
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_logo\" value=\"0\" ";
        // line 712
        echo (( !($context["module_cinewsletter_verify_display_logo"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 713
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-verify-display-decline\"><span data-toggle=\"tooltip\" title=\"";
        // line 718
        echo ($context["help_verify_display_decline"] ?? null);
        echo "\">";
        echo ($context["entry_verify_display_decline"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_decline\" value=\"1\"
                    ";
        // line 722
        echo ((($context["module_cinewsletter_verify_display_decline"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 723
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_verify_display_decline\" value=\"0\" ";
        // line 726
        echo (( !($context["module_cinewsletter_verify_display_decline"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 727
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <ul class=\"nav nav-tabs\" id=\"verify-language\">
                ";
        // line 732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 733
            echo "                <li><a href=\"#verify-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 733);
            echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
            // line 734
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 734);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 734);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 734);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 734);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 739
            echo "                <div class=\"tab-pane\" id=\"verify-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 739);
            echo "\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-title";
            // line 741
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 741);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_title_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_title_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 743
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 743);
            echo "][title]\" value=\"";
            echo (((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 743)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 743)] ?? null) : null), "title", [], "any", false, false, false, 743)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_verify_title_lang"] ?? null);
            echo "\" id=\"input-verify-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 743);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-desc";
            // line 747
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 747);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_description_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_description_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_verify_message[";
            // line 749
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_verify_description_lang"] ?? null);
            echo "\" id=\"input-verify-desc";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 749)] ?? null) : null), "description", [], "any", false, false, false, 749)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-success_lang";
            // line 753
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 753);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_success_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_success_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 755
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 755);
            echo "][success_lang]\" placeholder=\"";
            echo ($context["entry_verify_success_lang"] ?? null);
            echo "\" id=\"input-verify-success_lang";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 755);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 755)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 755)] ?? null) : null), "success_lang", [], "any", false, false, false, 755)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-decline_lang";
            // line 759
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 759);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_decline_success_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_decline_success_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 761
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761);
            echo "][decline_lang]\" placeholder=\"";
            echo ($context["entry_verify_decline_success_lang"] ?? null);
            echo "\" id=\"input-verify-decline_lang";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 761)] ?? null) : null), "decline_lang", [], "any", false, false, false, 761)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-invalid_lang";
            // line 765
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 765);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_invalid_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_invalid_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 767
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 767);
            echo "][invalid_lang]\" value=\"";
            echo (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 767)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 767)] ?? null) : null), "invalid_lang", [], "any", false, false, false, 767)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_verify_invalid_lang"] ?? null);
            echo "\" id=\"input-verify-invalid_lang";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 767);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-confirm_button";
            // line 771
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 771);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_confirm_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_confirm_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 773
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 773);
            echo "][confirm_button]\" value=\"";
            echo (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 773)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 773)] ?? null) : null), "confirm_button", [], "any", false, false, false, 773)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_verify_confirm_lang"] ?? null);
            echo "\" id=\"input-verify-confirm_button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 773);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-verify-decline_button";
            // line 777
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 777);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_verify_decline_lang"] ?? null);
            echo "\">";
            echo ($context["entry_verify_decline_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_verify_message[";
            // line 779
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779);
            echo "][decline_button]\" value=\"";
            echo (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["module_cinewsletter_verify_message"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779)] ?? null) : null), "decline_button", [], "any", false, false, false, 779)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_verify_decline_lang"] ?? null);
            echo "\" id=\"input-verify-decline_button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 779);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 784
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-unsubscribe\">
              <fieldset>
                <legend>";
        // line 788
        echo ($context["legend_unsubscribe_reasons"] ?? null);
        echo "</legend>
              <div class=\"table-responsive\">
                <table id=\"reasons\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 793
        echo ($context["entry_title"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 794
        echo ($context["entry_custom_field"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 799
        $context["reason_row"] = 0;
        // line 800
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["module_cinewsletter_unsubscribe_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module_cinewsletter_unsubscribe_reason"]) {
            // line 801
            echo "                    <tr id=\"reason-row";
            echo ($context["reason_row"] ?? null);
            echo "\">
                      <td class=\"text-right\">";
            // line 802
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 803
                echo "                        <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 803);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 803);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 803);
                echo "\" /></span>
                          <input type=\"text\" name=\"module_cinewsletter_unsubscribe_reason[";
                // line 804
                echo ($context["reason_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804);
                echo "][title]\" value=\"";
                echo (((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = twig_get_attribute($this->env, $this->source, $context["module_cinewsletter_unsubscribe_reason"], "description", [], "any", false, false, false, 804)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = twig_get_attribute($this->env, $this->source, $context["module_cinewsletter_unsubscribe_reason"], "description", [], "any", false, false, false, 804)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 804)] ?? null) : null), "title", [], "any", false, false, false, 804)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 807
            echo "                      </td>
                      <td class=\"text-right\">
                        <label class=\"radio-inline\"><input type=\"radio\" name=\"module_cinewsletter_unsubscribe_reason[";
            // line 809
            echo ($context["reason_row"] ?? null);
            echo "][custom_field]\" value=\"1\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["module_cinewsletter_unsubscribe_reason"], "custom_field", [], "any", false, false, false, 809) == "1")) ? ("checked=\"checked\"") : (""));
            echo " /> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                        <label class=\"radio-inline\"><input type=\"radio\" name=\"module_cinewsletter_unsubscribe_reason[";
            // line 810
            echo ($context["reason_row"] ?? null);
            echo "][custom_field]\" value=\"0\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["module_cinewsletter_unsubscribe_reason"], "custom_field", [], "any", false, false, false, 810) == "0")) ? ("checked=\"checked\"") : (""));
            echo "/> ";
            echo ($context["text_no"] ?? null);
            echo "</label>
                      </td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#reason-row";
            // line 812
            echo ($context["reason_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                    </tr>
                    ";
            // line 814
            $context["reason_row"] = (($context["reason_row"] ?? null) + 1);
            // line 815
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module_cinewsletter_unsubscribe_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 816
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addReason();\" data-toggle=\"tooltip\" title=\"";
        // line 820
        echo ($context["button_reason_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </fieldset>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-display-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 827
        echo ($context["help_unsubscribe_display_title"] ?? null);
        echo "\">";
        echo ($context["entry_unsubscribe_display_title"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_title\" value=\"1\"
                    ";
        // line 831
        echo ((($context["module_cinewsletter_unsubscribe_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 832
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_title\" value=\"0\" ";
        // line 835
        echo (( !($context["module_cinewsletter_unsubscribe_display_title"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 836
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-display-description\"><span data-toggle=\"tooltip\" title=\"";
        // line 841
        echo ($context["help_unsubscribe_display_description"] ?? null);
        echo "\">";
        echo ($context["entry_unsubscribe_display_description"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_description\" value=\"1\"
                    ";
        // line 845
        echo ((($context["module_cinewsletter_unsubscribe_display_description"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 846
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_description\" value=\"0\" ";
        // line 849
        echo (( !($context["module_cinewsletter_unsubscribe_display_description"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 850
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-display-logo\"><span data-toggle=\"tooltip\" title=\"";
        // line 855
        echo ($context["help_unsubscribe_display_logo"] ?? null);
        echo "\">";
        echo ($context["entry_unsubscribe_display_logo"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_logo\" value=\"1\"
                    ";
        // line 859
        echo ((($context["module_cinewsletter_unsubscribe_display_logo"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 860
        echo ($context["text_yes"] ?? null);
        echo "
                  </label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"module_cinewsletter_unsubscribe_display_logo\" value=\"0\" ";
        // line 863
        echo (( !($context["module_cinewsletter_unsubscribe_display_logo"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " />
                    ";
        // line 864
        echo ($context["text_no"] ?? null);
        echo "
                  </label>
                </div>
              </div>
              <ul class=\"nav nav-tabs\" id=\"unsubscribe-language\">
                ";
        // line 869
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 870
            echo "                <li><a href=\"#unsubscribe-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 870);
            echo "\" data-toggle=\"tab\">
                    <img src=\"language/";
            // line 871
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 871);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 871);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 871);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 871);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 873
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 875
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 876
            echo "                <div class=\"tab-pane\" id=\"unsubscribe-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 876);
            echo "\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-title";
            // line 878
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 878);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_unsubscribe_title_lang"] ?? null);
            echo "\">";
            echo ($context["entry_unsubscribe_title_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_unsubscribe_message[";
            // line 880
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 880);
            echo "][title]\" value=\"";
            echo (((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 880)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 880)] ?? null) : null), "title", [], "any", false, false, false, 880)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_unsubscribe_title_lang"] ?? null);
            echo "\" id=\"input-unsubscribe-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 880);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-desc";
            // line 884
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 884);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_unsubscribe_description_lang"] ?? null);
            echo "\">";
            echo ($context["entry_unsubscribe_description_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_unsubscribe_message[";
            // line 886
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 886);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_unsubscribe_description_lang"] ?? null);
            echo "\" id=\"input-unsubscribe-desc";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 886);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 886)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 886)] ?? null) : null), "description", [], "any", false, false, false, 886)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-success_lang";
            // line 890
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 890);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_unsubscribe_success_lang"] ?? null);
            echo "\">";
            echo ($context["entry_unsubscribe_success_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_cinewsletter_unsubscribe_message[";
            // line 892
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 892);
            echo "][success_lang]\" placeholder=\"";
            echo ($context["entry_unsubscribe_success_lang"] ?? null);
            echo "\" id=\"input-unsubscribe-success_lang";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 892);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 892)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 892)] ?? null) : null), "success_lang", [], "any", false, false, false, 892)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-invalid_lang";
            // line 896
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 896);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_unsubscribe_invalid_lang"] ?? null);
            echo "\">";
            echo ($context["entry_unsubscribe_invalid_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_unsubscribe_message[";
            // line 898
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898);
            echo "][invalid_lang]\" value=\"";
            echo (((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898)] ?? null) : null), "invalid_lang", [], "any", false, false, false, 898)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_unsubscribe_invalid_lang"] ?? null);
            echo "\" id=\"input-unsubscribe-invalid_lang";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 898);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-unsubscribe-submit_button";
            // line 902
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 902);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_unsubscribe_submit_lang"] ?? null);
            echo "\">";
            echo ($context["entry_unsubscribe_submit_lang"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_cinewsletter_unsubscribe_message[";
            // line 904
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904);
            echo "][submit_button]\" value=\"";
            echo (((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["module_cinewsletter_unsubscribe_message"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904)] ?? null) : null), "submit_button", [], "any", false, false, false, 904)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_unsubscribe_submit_lang"] ?? null);
            echo "\" id=\"input-unsubscribe-submit_button";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 904);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-css\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 913
        echo ($context["entry_css"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"module_cinewsletter_css\" rows=\"9\" class=\"form-control\">";
        // line 915
        echo ($context["module_cinewsletter_css"] ?? null);
        echo "</textarea>
                </div>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"tab-social-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 922
        echo ($context["entry_social_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    <label class=\"btn btn-default ";
        // line 925
        echo ((twig_in_filter("popup", ($context["module_cinewsletter_social_status"] ?? null))) ? ("active") : (""));
        echo "\">
                      <input type=\"checkbox\" name=\"module_cinewsletter_social_status[]\" autocomplete=\"off\" value=\"popup\" ";
        // line 926
        echo ((twig_in_filter("popup", ($context["module_cinewsletter_social_status"] ?? null))) ? ("checked=\"checked\"") : (""));
        echo ">";
        echo ($context["text_social_popup"] ?? null);
        echo "
                    </label>
                    <label class=\"btn btn-default ";
        // line 928
        echo ((twig_in_filter("popup", ($context["module_cinewsletter_social_status"] ?? null))) ? ("active") : (""));
        echo "\">
                      <input type=\"checkbox\" name=\"module_cinewsletter_social_status[]\" autocomplete=\"off\" value=\"footer\" ";
        // line 929
        echo ((twig_in_filter("popup", ($context["module_cinewsletter_social_status"] ?? null))) ? ("checked=\"checked\"") : (""));
        echo ">";
        echo ($context["text_social_footer"] ?? null);
        echo "
                    </label>
                  </div>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-sm-4 col-xs-12 col-md-3\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"social-links\">
                  ";
        // line 938
        $context["social_link_row"] = 0;
        // line 939
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social_link"]) {
            // line 940
            echo "                    <li class=\"links-li\"><a href=\"#tab-social-link";
            echo ($context["social_link_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-social-link";
            echo ($context["social_link_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-social-link";
            echo ($context["social_link_row"] ?? null);
            echo "').remove(); \$('#social-links a:first').tab('show');\"></i> ";
            echo (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["social_link"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["description"] ?? null) : null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[($context["config_language_id"] ?? null)] ?? null) : null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["title"] ?? null) : null)) ? ((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["social_link"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["description"] ?? null) : null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[($context["config_language_id"] ?? null)] ?? null) : null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["title"] ?? null) : null)) : ((((($context["tab_link"] ?? null) . "-") . ($context["social_link_row"] ?? null)) + 1)));
            echo " <i class=\"fa fa-arrows pull-right\" aria-hidden=\"true\"></i></a></li>
                    ";
            // line 941
            $context["social_link_row"] = (($context["social_link_row"] ?? null) + 1);
            // line 942
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 943
        echo "                  </ul>
                  <ul class=\"nav nav-pills nav-stacked addlinkbutton\">
                    <li><button type=\"button\" class=\"btn btn-default btn-block\" onclick=\"addSocialLink();\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        // line 945
        echo ($context["button_add_social_link"] ?? null);
        echo "</button></li>
                  </ul>
                </div>
                <div class=\"col-sm-8 col-xs-12 col-md-9\">
                  <div class=\"tab-content\" id=\"tab-content\">
                  ";
        // line 950
        $context["social_link_row"] = 0;
        // line 951
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
        foreach ($context['_seq'] as $context["social_link_key"] => $context["social_link"]) {
            // line 952
            echo "                    <div class=\"tab-pane\" id=\"tab-social-link";
            echo ($context["social_link_row"] ?? null);
            echo "\">
                        <div class=\"link-group\">
                          <ul class=\"nav nav-tabs\" id=\"social-link-language";
            // line 954
            echo ($context["social_link_row"] ?? null);
            echo "\">
                            ";
            // line 955
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 956
                echo "                            <li><a href=\"#social-link-language";
                echo ($context["social_link_row"] ?? null);
                echo "-";
                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["language"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["language_id"] ?? null) : null);
                echo "\" data-toggle=\"tab\">
                            <img src=\"language/";
                // line 957
                echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["language"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["code"] ?? null) : null);
                echo "/";
                echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["language"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["language"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["name"] ?? null) : null);
                echo "\" /> ";
                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["language"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["name"] ?? null) : null);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 959
            echo "                          </ul>
                          <div class=\"tab-content\">
                            ";
            // line 961
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 962
                echo "                            <div class=\"tab-pane\" id=\"social-link-language";
                echo ($context["social_link_row"] ?? null);
                echo "-";
                echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["language"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["language_id"] ?? null) : null);
                echo "\">
                              <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\">";
                // line 964
                echo ($context["entry_title"] ?? null);
                echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"module_cinewsletter_social_link[";
                // line 966
                echo ($context["social_link_row"] ?? null);
                echo "][description][";
                echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["language"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["language_id"] ?? null) : null);
                echo "][title]\" value=\"";
                echo (((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["social_link"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["description"] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[(($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["language"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["title"] ?? null) : null)) ? ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["social_link"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["description"] ?? null) : null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[(($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["language"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["title"] ?? null) : null)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" />
                                  ";
                // line 967
                if ((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["error_social_title"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[$context["social_link_key"]] ?? null) : null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[(($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["language"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["language_id"] ?? null) : null)] ?? null) : null)) {
                    // line 968
                    echo "                                    <div class=\"text-danger\">";
                    echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["error_social_title"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[$context["social_link_key"]] ?? null) : null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[(($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["language"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["language_id"] ?? null) : null)] ?? null) : null);
                    echo "</div>
                                  ";
                }
                // line 970
                echo "                                </div>
                              </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 974
            echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
            // line 977
            echo ($context["entry_link"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_cinewsletter_social_link[";
            // line 979
            echo ($context["social_link_row"] ?? null);
            echo "][link]\" class=\"form-control\" value=\"";
            echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["social_link"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["link"] ?? null) : null);
            echo "\" />
                            ";
            // line 980
            if ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["error_social_link"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[$context["social_link_key"]] ?? null) : null)) {
                // line 981
                echo "                              <div class=\"text-danger\">";
                echo (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["error_social_link"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[$context["social_link_key"]] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 983
            echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
            // line 986
            echo ($context["entry_icon_class"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_cinewsletter_social_link[";
            // line 988
            echo ($context["social_link_row"] ?? null);
            echo "][icon_class]\" class=\"form-control\" value=\"";
            echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["social_link"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["icon_class"] ?? null) : null);
            echo "\" />
                            ";
            // line 989
            if ((($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["error_social_icon_class"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7[$context["social_link_key"]] ?? null) : null)) {
                // line 990
                echo "                              <div class=\"text-danger\">";
                echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["error_social_icon_class"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[$context["social_link_key"]] ?? null) : null);
                echo "</div>
                            ";
            }
            // line 992
            echo "                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">";
            // line 995
            echo ($context["entry_sort_order"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_cinewsletter_social_link[";
            // line 997
            echo ($context["social_link_row"] ?? null);
            echo "][sort_order]\"  value=\"";
            echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["social_link"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["sort_order"] ?? null) : null);
            echo "\" class=\"form-control\" />
                          </div>
                        </div>
                    </div>
                    ";
            // line 1001
            $context["social_link_row"] = (($context["social_link_row"] ?? null) + 1);
            // line 1002
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['social_link_key'], $context['social_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        echo "                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>
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
\$('#confirm-language a:first').tab('show');
\$('#layout-language a:first').tab('show');
\$('#footer-language a:first').tab('show');
\$('#popup-language a:first').tab('show');
\$('#verify-language a:first').tab('show');
\$('#unsubscribe-language a:first').tab('show');

\$('input[name=\"module_cinewsletter_verify_required\"]').click(function() {
  if(\$('input[name=\"module_cinewsletter_verify_required\"]:checked').val() == 1) {
    \$('.verify_required_message').removeClass('hide');
  } else{
    \$('.verify_required_message').addClass('hide');
  }
});

\$('input[name=\"module_cinewsletter_confirm_required\"]').click(function() {
  if(\$('input[name=\"module_cinewsletter_confirm_required\"]:checked').val() == 1) {
    \$('.confirm_required_message').removeClass('hide');
  } else{
    \$('.confirm_required_message').addClass('hide');
  }
});

\$('input[name=\\'module_cinewsletter_popup_reopen\\']').click(function() {
  if(\$('input[name=\\'module_cinewsletter_popup_reopen\\']:checked').val() == 1) {
    \$('.minutes-group').show('slow');
  }else{
    \$('.minutes-group').hide('slow');
  }
});
\$('input[name=\\'module_cinewsletter_popup_reopen\\']:checked').trigger('click');
//--></script>
<script type=\"text/javascript\"><!--
var reason_row = ";
        // line 1058
        echo ($context["reason_row"] ?? null);
        echo ";

function addReason() {
  html  = '<tr id=\"reason-row' + reason_row + '\">';
  html += '  <td class=\"text-right\">';
  ";
        // line 1063
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1064
            echo "  html += '<div class=\"input-group\"><span class=\"input-group-addon\">';
  html += '<img src=\"language/";
            // line 1065
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1065);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1065);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1065);
            echo "\" /> ';
  html += '</span> <input type=\"text\" name=\"module_cinewsletter_unsubscribe_reason[' + reason_row + '][description][";
            // line 1066
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1066);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" /></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1068
        echo "  html += '</td>';
  html += '  <td class=\"text-right\"><label class=\"radio-inline\"><input type=\"radio\" name=\"module_cinewsletter_unsubscribe_reason[' + reason_row + '][custom_field]\" value=\"1\" /> ";
        // line 1069
        echo ($context["text_yes"] ?? null);
        echo "</label><label class=\"radio-inline\"><input type=\"radio\" name=\"module_cinewsletter_unsubscribe_reason[' + reason_row + '][custom_field]\" value=\"0\" checked=\"checked\" /> ";
        echo ($context["text_no"] ?? null);
        echo "</label></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#reason-row' + reason_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1070
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#reasons tbody').append(html);

  reason_row++;
}

\$('input[name=\\'module_cinewsletter_layout_display_icon\\']').click(function() {
  if(\$('input[name=\\'module_cinewsletter_layout_display_icon\\']:checked').val() == 1) {
    \$('.iconclass-group').show('slow');
  }else{
    \$('.iconclass-group').hide('slow');
  }
});
\$('input[name=\\'module_cinewsletter_layout_display_icon\\']:checked').trigger('click');
//--></script>

<script type=\"text/javascript\">
  var element = null;
  \$('.color-picker').ColorPicker({
    curr : '',
    onShow: function (colpkr) {
      \$(colpkr).fadeIn(500);
      return false;
    },
    onHide: function (colpkr) {
      \$(colpkr).fadeOut(500);
    return false;
    },
    onSubmit: function(hsb, hex, rgb, el) {
      \$(el).val('#'+hex);
      \$(el).ColorPickerHide();
    },
    onBeforeShow: function () {
      \$(this).ColorPickerSetColor(this.value);
    },
    onChange: function (hsb, hex, rgb) {
      element.curr.parent().next().find('.preview').css('background', '#' + hex);
      element.curr.val('#'+hex);
    }
  }).bind('keyup', function(){
    \$(this).ColorPickerSetColor(this.value);
  }).click(function(){
    element = this;
    element.curr = \$(this);
  });

  \$.each(\$('.color-picker'),function(key,value) {
    \$(this).parent().next().find('.preview').css({'background': \$(this).val()});
  });
</script>


<script type=\"text/javascript\"><!--
\$('#social-links li:first-child a').tab('show');
";
        // line 1126
        $context["j"] = 0;
        // line 1127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["social_link"]) {
            // line 1128
            echo "\$('#social-link-language";
            echo ($context["j"] ?? null);
            echo " li:first-child a').tab('show');
";
            // line 1129
            $context["j"] = (($context["j"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['social_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1131
        echo "\$('#social-links a:first').tab('show');

var social_link_row = ";
        // line 1133
        echo ($context["social_link_row"] ?? null);
        echo ";

function addSocialLink() {
  html = '<div class=\"tab-pane\" id=\"tab-social-link' + social_link_row + '\">';

      html += '<div class=\"link-group\">';
        html += '<ul class=\"nav nav-tabs\" id=\"social-link-language' + social_link_row + '\">';
          ";
        // line 1140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1141
            echo "          html += '<li><a href=\"#social-link-language' + social_link_row + '-";
            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["language"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\">';
          html += '<img src=\"language/";
            // line 1142
            echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["language"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["code"] ?? null) : null);
            echo "/";
            echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["language"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["language"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["name"] ?? null) : null);
            echo "\" />';
          html += ' ";
            // line 1143
            echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["language"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["name"] ?? null) : null);
            echo "</a></li>';
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1145
        echo "        html += '</ul>';
        html += '<div class=\"tab-content\">';
          ";
        // line 1147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1148
            echo "          html += '<div class=\"tab-pane\" id=\"social-link-language' + social_link_row + '-";
            echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["language"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["language_id"] ?? null) : null);
            echo "\">';
            html += '<div class=\"form-group required\">';
              html += '<label class=\"col-sm-2 control-label\">";
            // line 1150
            echo ($context["entry_title"] ?? null);
            echo "</label>';
              html += '<div class=\"col-sm-10\">';
                html += '<input type=\"text\" name=\"module_cinewsletter_social_link[' + social_link_row + '][description][";
            // line 1152
            echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["language"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["language_id"] ?? null) : null);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" />';
              html += '</div>';
            html += '</div>';
           html += '</div>';
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1157
        echo "        html += '</div>';
      html += '</div>';

      html += '<div class=\"form-group\">';
          html += '<label class=\"col-sm-2 control-label\">";
        // line 1161
        echo ($context["entry_link"] ?? null);
        echo "</label>';
          html += '<div class=\"col-sm-10\">';
            html += '<input type=\"text\" name=\"module_cinewsletter_social_link[' + social_link_row + '][link]\" class=\"form-control\" value=\"\" />';
          html += '</div>';
        html += '</div>';

      html += '<div class=\"form-group\">';
          html += '<label class=\"col-sm-2 control-label\">";
        // line 1168
        echo ($context["entry_icon_class"] ?? null);
        echo "</label>';
          html += '<div class=\"col-sm-10\">';
            html += '<input type=\"text\" name=\"module_cinewsletter_social_link[' + social_link_row + '][icon_class]\" class=\"form-control\" value=\"\" />';
          html += '</div>';
        html += '</div>';
          html += '<div class=\"form-group\">';
            html += '<label class=\"col-sm-2 control-label\">";
        // line 1174
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>';
            html += '<div class=\"col-sm-10\">';
              html += '<input type=\"text\" name=\"module_cinewsletter_social_link[' + social_link_row + '][sort_order]\"  value=\"' + (social_link_row + 1) + '\" class=\"form-control\" />';
            html += '</div>';
          html += '</div>';
    html += '</fieldset>';
  html += '</div>';

  \$('#tab-social-links #tab-content').append(html);

  \$('#social-links').append('<li class=\"links-li\"><a href=\"#tab-social-link' + social_link_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#social-links a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-social-link' + social_link_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-social-link' + social_link_row + '\\').remove();\"></i> ";
        // line 1184
        echo ($context["tab_social_link"] ?? null);
        echo "-'+ (social_link_row + 1)  +' <i class=\"fa fa-arrows pull-right\" aria-hidden=\"true\"></i></a></li>');

  \$('#social-links a[href=\\'#tab-social-link' + social_link_row + '\\']').tab('show');

  \$('#social-link-language'+ social_link_row +' a:first').tab('show');

  \$('[data-toggle=\\'tooltip\\']').tooltip({
    container: 'body',
    html: true
  });

  social_link_row++;
}
//--></script>
</div>
";
        // line 1199
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/cinewsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3083 => 1199,  3065 => 1184,  3052 => 1174,  3043 => 1168,  3033 => 1161,  3027 => 1157,  3014 => 1152,  3009 => 1150,  3003 => 1148,  2999 => 1147,  2995 => 1145,  2987 => 1143,  2979 => 1142,  2974 => 1141,  2970 => 1140,  2960 => 1133,  2956 => 1131,  2950 => 1129,  2945 => 1128,  2941 => 1127,  2939 => 1126,  2880 => 1070,  2874 => 1069,  2871 => 1068,  2861 => 1066,  2853 => 1065,  2850 => 1064,  2846 => 1063,  2838 => 1058,  2781 => 1003,  2775 => 1002,  2773 => 1001,  2764 => 997,  2759 => 995,  2754 => 992,  2748 => 990,  2746 => 989,  2740 => 988,  2735 => 986,  2730 => 983,  2724 => 981,  2722 => 980,  2716 => 979,  2711 => 977,  2706 => 974,  2697 => 970,  2691 => 968,  2689 => 967,  2679 => 966,  2674 => 964,  2666 => 962,  2662 => 961,  2658 => 959,  2644 => 957,  2637 => 956,  2633 => 955,  2629 => 954,  2623 => 952,  2618 => 951,  2616 => 950,  2608 => 945,  2604 => 943,  2598 => 942,  2596 => 941,  2585 => 940,  2580 => 939,  2578 => 938,  2564 => 929,  2560 => 928,  2553 => 926,  2549 => 925,  2543 => 922,  2533 => 915,  2528 => 913,  2522 => 909,  2505 => 904,  2496 => 902,  2483 => 898,  2474 => 896,  2459 => 892,  2450 => 890,  2435 => 886,  2426 => 884,  2413 => 880,  2404 => 878,  2398 => 876,  2394 => 875,  2390 => 873,  2376 => 871,  2371 => 870,  2367 => 869,  2359 => 864,  2355 => 863,  2349 => 860,  2345 => 859,  2336 => 855,  2328 => 850,  2324 => 849,  2318 => 846,  2314 => 845,  2305 => 841,  2297 => 836,  2293 => 835,  2287 => 832,  2283 => 831,  2274 => 827,  2264 => 820,  2258 => 816,  2252 => 815,  2250 => 814,  2243 => 812,  2234 => 810,  2226 => 809,  2222 => 807,  2207 => 804,  2198 => 803,  2194 => 802,  2189 => 801,  2184 => 800,  2182 => 799,  2174 => 794,  2170 => 793,  2162 => 788,  2156 => 784,  2139 => 779,  2130 => 777,  2117 => 773,  2108 => 771,  2095 => 767,  2086 => 765,  2071 => 761,  2062 => 759,  2047 => 755,  2038 => 753,  2023 => 749,  2014 => 747,  2001 => 743,  1992 => 741,  1986 => 739,  1982 => 738,  1978 => 736,  1964 => 734,  1959 => 733,  1955 => 732,  1947 => 727,  1943 => 726,  1937 => 723,  1933 => 722,  1924 => 718,  1916 => 713,  1912 => 712,  1906 => 709,  1902 => 708,  1893 => 704,  1885 => 699,  1881 => 698,  1875 => 695,  1871 => 694,  1862 => 690,  1854 => 685,  1850 => 684,  1844 => 681,  1840 => 680,  1831 => 676,  1825 => 672,  1808 => 667,  1801 => 665,  1788 => 661,  1781 => 659,  1768 => 655,  1761 => 653,  1748 => 649,  1741 => 647,  1726 => 643,  1719 => 641,  1706 => 637,  1699 => 635,  1693 => 633,  1689 => 632,  1685 => 630,  1671 => 628,  1666 => 627,  1662 => 626,  1656 => 622,  1643 => 620,  1640 => 619,  1637 => 618,  1634 => 617,  1631 => 616,  1628 => 615,  1624 => 614,  1618 => 611,  1613 => 608,  1607 => 606,  1605 => 605,  1600 => 603,  1596 => 602,  1588 => 599,  1582 => 595,  1577 => 593,  1574 => 592,  1569 => 590,  1566 => 589,  1564 => 588,  1560 => 586,  1555 => 584,  1552 => 583,  1547 => 581,  1544 => 580,  1542 => 579,  1534 => 576,  1526 => 571,  1522 => 570,  1516 => 567,  1512 => 566,  1505 => 562,  1501 => 561,  1494 => 557,  1486 => 552,  1482 => 551,  1476 => 548,  1472 => 547,  1465 => 543,  1456 => 537,  1452 => 536,  1446 => 533,  1442 => 532,  1436 => 529,  1428 => 524,  1422 => 523,  1418 => 522,  1411 => 518,  1405 => 517,  1401 => 516,  1395 => 512,  1387 => 509,  1382 => 507,  1377 => 506,  1372 => 504,  1367 => 503,  1365 => 502,  1361 => 500,  1357 => 499,  1349 => 496,  1343 => 492,  1338 => 490,  1333 => 489,  1328 => 487,  1323 => 486,  1321 => 485,  1315 => 482,  1309 => 478,  1292 => 473,  1285 => 471,  1272 => 467,  1265 => 465,  1252 => 461,  1245 => 459,  1232 => 455,  1225 => 453,  1210 => 449,  1203 => 447,  1190 => 443,  1183 => 441,  1177 => 439,  1173 => 438,  1169 => 436,  1155 => 434,  1150 => 433,  1146 => 432,  1139 => 428,  1134 => 426,  1127 => 422,  1122 => 420,  1114 => 415,  1110 => 414,  1104 => 411,  1100 => 410,  1093 => 406,  1089 => 405,  1082 => 401,  1074 => 396,  1070 => 395,  1064 => 392,  1060 => 391,  1053 => 387,  1047 => 383,  1039 => 380,  1034 => 378,  1029 => 377,  1024 => 375,  1019 => 374,  1017 => 373,  1013 => 371,  1009 => 370,  1001 => 367,  995 => 363,  990 => 361,  985 => 360,  980 => 358,  975 => 357,  973 => 356,  967 => 353,  961 => 349,  944 => 344,  937 => 342,  924 => 338,  917 => 336,  904 => 332,  897 => 330,  884 => 326,  877 => 324,  862 => 320,  855 => 318,  842 => 314,  835 => 312,  829 => 310,  825 => 309,  821 => 307,  807 => 305,  802 => 304,  798 => 303,  791 => 299,  786 => 297,  778 => 292,  774 => 291,  768 => 288,  764 => 287,  757 => 283,  749 => 278,  745 => 277,  739 => 274,  735 => 273,  728 => 269,  724 => 268,  717 => 264,  709 => 259,  705 => 258,  699 => 255,  695 => 254,  688 => 250,  682 => 246,  677 => 244,  672 => 243,  667 => 241,  662 => 240,  660 => 239,  654 => 236,  641 => 226,  635 => 223,  629 => 220,  623 => 217,  617 => 214,  611 => 211,  601 => 206,  594 => 201,  585 => 197,  579 => 195,  577 => 194,  565 => 193,  560 => 191,  555 => 188,  549 => 186,  547 => 185,  537 => 184,  532 => 182,  526 => 180,  522 => 179,  518 => 177,  504 => 175,  499 => 174,  495 => 173,  490 => 171,  483 => 167,  479 => 166,  473 => 163,  469 => 162,  460 => 158,  455 => 156,  444 => 148,  438 => 145,  432 => 142,  426 => 139,  420 => 136,  414 => 133,  408 => 130,  398 => 125,  391 => 120,  382 => 116,  376 => 114,  374 => 113,  362 => 112,  355 => 110,  350 => 107,  344 => 105,  342 => 104,  332 => 103,  325 => 101,  319 => 99,  315 => 98,  311 => 96,  297 => 94,  292 => 93,  288 => 92,  283 => 90,  276 => 86,  272 => 85,  266 => 82,  262 => 81,  253 => 77,  248 => 75,  241 => 70,  236 => 68,  231 => 67,  226 => 65,  221 => 64,  219 => 63,  213 => 60,  208 => 58,  200 => 53,  196 => 52,  192 => 51,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  172 => 46,  167 => 44,  161 => 40,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  131 => 33,  127 => 31,  119 => 27,  116 => 26,  108 => 22,  106 => 21,  100 => 17,  89 => 15,  85 => 14,  80 => 12,  74 => 11,  70 => 10,  66 => 9,  60 => 8,  54 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/cinewsletter.twig", "");
    }
}
