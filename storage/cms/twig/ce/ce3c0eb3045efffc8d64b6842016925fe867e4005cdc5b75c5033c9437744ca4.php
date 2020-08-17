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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/header.htm */
class __TwigTemplate_c9ea065a6cbadf7b16c7af09324bb04551ca633fda67bfefedf91191aae1e825 extends \Twig\Template
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
        echo "<section id=\"header\" class=\"elegant-color\">
    <div class=\"container\">
        <div class=\"row justify-content-end\">
\t\t\t<div class=\"col-lg-9 p-1\">
\t\t\t\t<small><span class=\"pr-3 white-text\">
\t\t\t\t<a href=\"tel:";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "default_phone", [], "any", false, false, false, 6), "html", null, true);
        echo "\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "default_phone", [], "any", false, false, false, 8), "html", null, true);
        echo "</a>
\t\t\t\t</span>
\t\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<a href=\"mailto:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "default_email", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"text-uppercase\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>&nbsp;
\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "default_email", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
\t\t\t\t</span>
\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 text-sm-right pt-1\">
\t\t\t\t<span class=\"pr-2\">
\t\t\t\t\t";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "\t\t\t\t</span>
\t\t\t\t<span class=\"d-none d-sm-inline-block\" style=\"padding-top:3px;\">
\t\t\t\t";
        // line 22
        if ((($context["lang"] ?? null) == "fr")) {
            // line 23
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tENGLISH
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFRANÇAIS
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t</span>
\t\t\t\t\t<span class=\"d-inline-block d-sm-none\">
\t\t\t\t";
        // line 39
        if ((($context["lang"] ?? null) == "fr")) {
            // line 40
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tEN
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFR
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t</span>
\t\t\t\t</small>
\t\t\t</div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  112 => 47,  103 => 40,  101 => 39,  97 => 37,  88 => 30,  79 => 23,  77 => 22,  73 => 20,  69 => 19,  60 => 13,  55 => 11,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"header\" class=\"elegant-color\">
    <div class=\"container\">
        <div class=\"row justify-content-end\">
\t\t\t<div class=\"col-lg-9 p-1\">
\t\t\t\t<small><span class=\"pr-3 white-text\">
\t\t\t\t<a href=\"tel:{{ this.theme.default_phone }}\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t\t{{ this.theme.default_phone }}</a>
\t\t\t\t</span>
\t\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<a href=\"mailto:{{ this.theme.default_email }}\" class=\"text-uppercase\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>&nbsp;
\t\t\t\t\t{{ this.theme.default_email }}</a>
\t\t\t\t</span>
\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 text-sm-right pt-1\">
\t\t\t\t<span class=\"pr-2\">
\t\t\t\t\t{% partial 'socials' %}
\t\t\t\t</span>
\t\t\t\t<span class=\"d-none d-sm-inline-block\" style=\"padding-top:3px;\">
\t\t\t\t{% if lang == 'fr' %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tENGLISH
\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFRANÇAIS
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t\t\t<span class=\"d-inline-block d-sm-none\">
\t\t\t\t{% if lang == 'fr' %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tEN
\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFR
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t\t</small>
\t\t\t</div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/header.htm", "");
    }
}
