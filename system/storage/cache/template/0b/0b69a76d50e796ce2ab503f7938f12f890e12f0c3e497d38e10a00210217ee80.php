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

/* default/template/extension/module/cookie_notice.twig */
class __TwigTemplate_22e1c9aab091b6996ddf6112f3cc51f3f590e40afba2c5f2964ff3059489307e extends \Twig\Template
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
        if ( !($context["cookie_consent"] ?? null)) {
            // line 2
            echo "    <style>
        .cookie_notice_block {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: ";
            // line 12
            echo ($context["block_color"] ?? null);
            echo ";
            color: ";
            // line 13
            echo ($context["text_color"] ?? null);
            echo ";
            font-size: 15px;
            z-index: 1;
        }
        .cookie_notice_block > p { margin: 0; }
        .cookie_notice_block > button {
            background-color: ";
            // line 19
            echo ($context["button_color"] ?? null);
            echo ";
            background-repeat: no-repeat;
            margin-left: 10px;
            padding: 5px 10px;
            border-color: ";
            // line 23
            echo ($context["button_color"] ?? null);
            echo ";
            color: ";
            // line 24
            echo ($context["button_color"] ?? null);
            echo ";

            border: none;
        }
        .cookie_notice_block > button:hover {
            border-color: ";
            // line 29
            echo ($context["button_color_on_hover"] ?? null);
            echo ";
            color: ";
            // line 30
            echo ($context["button_color_on_hover"] ?? null);
            echo ";
        }
        @media only screen and (max-width: 767px) {
            .cookie_notice_block {
                font-size: 16px;
                padding: 0 10px;
            }
            .cookie_notice_block > p {
                text-align: center;
            }
            .cookie_notice_block > button {
                white-space: nowrap;
            }
        }
    </style>

    <script>
        \$(document).ready(function() {
            \$('.cookie_notice_block > button').click(function() {
                var currentDate = new Date();
                var expires = new Date(
                    currentDate.getFullYear() + 1,
                    currentDate.getMonth(),
                    currentDate.getDay()
                ).toString();

                document.cookie = 'cookie_consent=1; expires=' + expires + '; path=/';
                \$(this).parent().remove();
            })
        });
    </script>

    <div class=\"cookie_notice_block\">
        <p>";
            // line 63
            echo ($context["consent_text"] ?? null);
            echo "</p>
        <button class=\"prod__item-link\">";
            // line 64
            echo ($context["consent_button"] ?? null);
            echo "</button>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/cookie_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 64,  123 => 63,  87 => 30,  83 => 29,  75 => 24,  71 => 23,  64 => 19,  55 => 13,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/cookie_notice.twig", "");
    }
}
