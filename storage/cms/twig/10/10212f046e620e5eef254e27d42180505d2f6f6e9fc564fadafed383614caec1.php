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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/mysimplecontact/default.htm */
class __TwigTemplate_6c01405a17d07be404debf7c8b5d1362688880e286a585f7581485ba68729c48 extends \Twig\Template
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
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 1), "text_top_form", [], "any", false, false, false, 1);
        echo "
<form id=\"simpleContactForm\" data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"row\">
        <div class=\"col-12 pt-4\">
            <div class=\"form-group\">
                <input placeholder=\"";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 7), "nameLabel", [], "any", false, false, false, 7)]);
        echo "\" type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-6\">
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 11), "phoneEnabled", [], "any", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"form-group\">
                <input placeholder=\"";
            // line 13
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 13), "phoneLabel", [], "any", false, false, false, 13)]);
            echo "\" type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
            </div>
            ";
        }
        // line 16
        echo "        </div>
        <div class=\"col-6\">
            <div class=\"form-group\">
                <input placeholder=\"";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 19), "emailLabel", [], "any", false, false, false, 19)]);
        echo "\" type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group d-none\">
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" value=\"Question vennant du site Web\" required>
            </div>
        </div>
        <div class=\"col-12\">
    <div class=\"form-group\">
        <textarea placeholder=\"";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 29), "messageLabel", [], "any", false, false, false, 29)]);
        echo "\" id=\"message\" name=\"message\" class=\"form-control\" required style=\"height:150px;resize: none;\"></textarea>
    </div>
        </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 34), "recaptcha_enabled", [], "any", false, false, false, 34)) {
            // line 35
            echo "        <div class=\"col-12\">
        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 38), "recaptcha_site_key", [], "any", false, false, false, 38), "html", null, true);
            echo "\"></div>
        </div>
        </div>
    ";
        }
        // line 42
        echo "    <!-- End reCaptcha -->
                <div class=\"col-12\">
    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right text-uppercase\">
        ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 46), "buttonText", [], "any", false, false, false, 46)]);
        echo "
    </button>
                </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/mysimplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  107 => 42,  100 => 38,  95 => 35,  93 => 34,  85 => 29,  72 => 19,  67 => 16,  61 => 13,  58 => 12,  56 => 11,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ __SELF__.settings.text_top_form|raw}}
<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">
    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"row\">
        <div class=\"col-12 pt-4\">
            <div class=\"form-group\">
                <input placeholder=\"{{__SELF__.properties.nameLabel|_}}\" type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-6\">
            {% if(__SELF__.properties.phoneEnabled) %}
            <div class=\"form-group\">
                <input placeholder=\"{{__SELF__.properties.phoneLabel|_}}\" type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
            </div>
            {% endif %}
        </div>
        <div class=\"col-6\">
            <div class=\"form-group\">
                <input placeholder=\"{{__SELF__.properties.emailLabel|_}}\" type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-12\">
            <div class=\"form-group d-none\">
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" value=\"Question vennant du site Web\" required>
            </div>
        </div>
        <div class=\"col-12\">
    <div class=\"form-group\">
        <textarea placeholder=\"{{__SELF__.properties.messageLabel|_}}\" id=\"message\" name=\"message\" class=\"form-control\" required style=\"height:150px;resize: none;\"></textarea>
    </div>
        </div>

    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
        <div class=\"col-12\">
        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
        </div>
        </div>
    {% endif %}
    <!-- End reCaptcha -->
                <div class=\"col-12\">
    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right text-uppercase\">
        {{__SELF__.properties.buttonText|_}}
    </button>
                </div>
    </div>
</form>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/mysimplecontact/default.htm", "");
    }
}
