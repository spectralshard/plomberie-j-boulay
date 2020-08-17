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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/footer.htm */
class __TwigTemplate_d0b3f83f1229a16c0c070b9d515da2fa91fffff735cebd1a3cd602c0e69db8b6 extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"py-5 primary-color footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-lg-5\">
            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>PLOMBERIE J. BOULAY inc.</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                    <p class=\"text-white\">
                        Plomberie J. Boulay inc. est une entreprise familiale de plomberie fondée par Jonathan Boulay.
                        Elle offre principalement des services en réparation et en rénovation dans les secteurs résidentiel et commercial.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-lg-3 d-none d-sm-none d-md-block\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Navigation"]);
        echo "</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Accueil"]);
        echo "\">
                            ";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Accueil"]);
        echo "
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("residentielle");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "\">
                            ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("commerciale");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "\">
                            ";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("a-propos");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À Propos"]);
        echo "\">
                            ";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À Propos"]);
        echo "
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            ";
        // line 46
        if ((($context["lang"] ?? null) == "fr")) {
            // line 47
            echo "                            <a href=\"#\"
                               class=\"text-white\"
                               data-request=\"onSwitchLocale\"
                               data-request-data=\"locale: 'en'\" title=\"English\">
                                Enlgish
                            </a>
                            ";
        } else {
            // line 54
            echo "                            <a href=\"#\"
                               class=\"text-white\"
                               data-request=\"onSwitchLocale\"
                               data-request-data=\"locale: 'fr'\" title=\"Français\">
                                Français
                            </a>
                            ";
        }
        // line 61
        echo "                        </p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-2 \">
                        <strong>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                    <p class=\"mb-0\"><a class=\"mr-3 text-white\"
                       href=\"tel:";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 73), "default_phone", [], "any", false, false, false, 73), "html", null, true);
        echo "\"><i class=\"fas fa-phone\"></i>&nbsp;
                            ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 74), "default_phone", [], "any", false, false, false, 74), "html", null, true);
        echo "
                    </a>
                    </p>
                    <p>
                    <a class=\"mt-sm-3 mt-md-3 mt-lg-0 text-white\"
                        href=\"mailto:";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 79), "default_email", [], "any", false, false, false, 79), "html", null, true);
        echo "\"><i class=\"fas fa-envelope\"></i>
                            ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 80), "default_email", [], "any", false, false, false, 80), "html", null, true);
        echo "
                    </a>
                    </p>
                </div>
                <div class=\"col-12\">
                    <p class=\"text-white mb-0\">
                        ";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Suivez nous"]);
        echo "
                    </p>
                    ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials-footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"elegant-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">
                <small>© ";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Droits réservés"]);
        echo " / Plomberie J. Boulay inc.</small>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 99,  190 => 89,  186 => 88,  181 => 86,  172 => 80,  168 => 79,  160 => 74,  156 => 73,  149 => 69,  139 => 61,  130 => 54,  121 => 47,  119 => 46,  112 => 42,  106 => 41,  99 => 37,  93 => 36,  86 => 32,  80 => 31,  73 => 27,  67 => 26,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"py-5 primary-color footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-lg-5\">
            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>PLOMBERIE J. BOULAY inc.</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                    <p class=\"text-white\">
                        Plomberie J. Boulay inc. est une entreprise familiale de plomberie fondée par Jonathan Boulay.
                        Elle offre principalement des services en réparation et en rénovation dans les secteurs résidentiel et commercial.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-lg-3 d-none d-sm-none d-md-block\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>{{ 'Navigation'|_ }}</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"{{ 'home'|page }}\" title=\"{{'Accueil'|_}}\">
                            {{'Accueil'|_}}
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"{{ 'residentielle'|page }}\" title=\"{{'Résidentielle'|_}}\">
                            {{'Résidentielle'|_}}
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"{{ 'commerciale'|page }}\" title=\"{{'Commerciale'|_}}\">
                            {{'Commerciale'|_}}
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            <a class=\"text-white\" href=\"{{ 'a-propos'|page }}\" title=\"{{'À Propos'|_}}\">
                            {{'À Propos'|_}}
                            </a>
                        </p>
                        <p class=\"text-white mb-0\">
                            {% if lang == 'fr' %}
                            <a href=\"#\"
                               class=\"text-white\"
                               data-request=\"onSwitchLocale\"
                               data-request-data=\"locale: 'en'\" title=\"English\">
                                Enlgish
                            </a>
                            {% else %}
                            <a href=\"#\"
                               class=\"text-white\"
                               data-request=\"onSwitchLocale\"
                               data-request-data=\"locale: 'fr'\" title=\"Français\">
                                Français
                            </a>
                            {% endif %}
                        </p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-4 col-lg-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-2 \">
                        <strong>{{ 'Contact'|_ }}</strong>
                    </h6>
                    <hr class=\"footer-divider\">
                    <p class=\"mb-0\"><a class=\"mr-3 text-white\"
                       href=\"tel:{{ this.theme.default_phone }}\"><i class=\"fas fa-phone\"></i>&nbsp;
                            {{ this.theme.default_phone }}
                    </a>
                    </p>
                    <p>
                    <a class=\"mt-sm-3 mt-md-3 mt-lg-0 text-white\"
                        href=\"mailto:{{ this.theme.default_email }}\"><i class=\"fas fa-envelope\"></i>
                            {{ this.theme.default_email }}
                    </a>
                    </p>
                </div>
                <div class=\"col-12\">
                    <p class=\"text-white mb-0\">
                        {{ 'Suivez nous'|_ }}
                    </p>
                    {% partial 'socials-footer' %}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"elegant-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">
                <small>© {{ \"now\"|date(\"Y\") }} {{'Droits réservés'|_ }} / Plomberie J. Boulay inc.</small>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/footer.htm", "");
    }
}
