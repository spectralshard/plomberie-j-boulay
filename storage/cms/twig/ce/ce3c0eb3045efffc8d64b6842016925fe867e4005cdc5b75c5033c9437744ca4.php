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
        echo "<section id=\"header\" class=\"secondary-color-dark\">
    <div class=\"container\">
        <div class=\"row justify-content-end\">
\t\t\t<div class=\"col-sm-2 col-md-4 col-lg-6 d-none d-sm-block\">
\t\t\t\t";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "\t\t\t</div>
            <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 text-sm-right p-2\">
                <small><span class=\"pr-3 white-text\">
\t\t\t\t<a href=\"tel:";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "default_phone", [], "any", false, false, false, 9), "html", null, true);
        echo "\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "default_phone", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "default_email", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"text-uppercase\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>&nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "default_email", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"d-none d-sm-inline-block\">
\t\t\t\t";
        // line 19
        if ((($context["lang"] ?? null) == "fr")) {
            // line 20
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tENGLISH
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFRANÇAIS
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t</span>
\t\t\t\t<span class=\"d-inline-block d-sm-none\">
\t\t\t\t";
        // line 36
        if ((($context["lang"] ?? null) == "fr")) {
            // line 37
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\tEN
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"text-white\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\tFR
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t</span>
\t\t\t\t</small>
            </div>
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
        return array (  118 => 51,  109 => 44,  100 => 37,  98 => 36,  94 => 34,  85 => 27,  76 => 20,  74 => 19,  68 => 16,  63 => 14,  57 => 11,  52 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"header\" class=\"secondary-color-dark\">
    <div class=\"container\">
        <div class=\"row justify-content-end\">
\t\t\t<div class=\"col-sm-2 col-md-4 col-lg-6 d-none d-sm-block\">
\t\t\t\t{% partial 'socials' %}
\t\t\t</div>
            <div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6 text-sm-right p-2\">
                <small><span class=\"pr-3 white-text\">
\t\t\t\t<a href=\"tel:{{ this.theme.default_phone }}\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-phone\"></i>&nbsp;
\t\t\t\t\t{{ this.theme.default_phone }}</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"pr-3 white-text align-top\">
\t\t\t\t<a href=\"mailto:{{ this.theme.default_email }}\" class=\"text-uppercase\" style=\"color:white!important;\">
\t\t\t\t\t<i class=\"fas fa-envelope\"></i>&nbsp;
\t\t\t\t\t{{ this.theme.default_email }}</a>
\t\t\t\t</span>
\t\t\t\t<span class=\"d-none d-sm-inline-block\">
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
\t\t\t\t<span class=\"d-inline-block d-sm-none\">
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
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/header.htm", "");
    }
}
