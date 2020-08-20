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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/home.htm */
class __TwigTemplate_d91fd18de074995da554ad693cc806b5d695ada399253f79d63cb32829ccca0d extends \Twig\Template
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
        echo "<div class=\"jumbotron jumbotron-fluid home-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 py-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Une urgence avec votre plomberie?"]);
        echo "</h1>
                <a href=\"tel:";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "default_phone", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"btn btn-black text-uppercase\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "default_phone", [], "any", false, false, false, 7), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Appeler maintenant"]);
        echo "</a>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center pb-3\">
            <div class=\"col-lg-10 col-sm-12\">
                <h2 class=\"h2-responsive text-center\">
                    ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services Complets"]);
        echo "</h2>
                <p class=\"text-center\">
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoin ou problème ainsi que de vous proposer la solution la mieux adaptée."]);
        echo "
                </p>
                <div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/residentielle-service-600x.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "</h5>
                                    <p class=\"card-text\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires, nous offrons l'éventail complet"]);
        echo " -
                                   ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["et même plus - des services de plomberie résidentielle."]);
        echo "</p>
                                    <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("residentielle");
        echo "\" class=\"btn btn-primary text-uppercase\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En savoir plus"]);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-sm-1 order-lg-2\">
                                <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/commercial-service-600x.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center order-sm-2 order-lg-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "</h5>
                                    <p class=\"card-text\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour l'installation et l'entretien de séparateur de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bain publiques."]);
        echo "</p>
                                    <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("commerciale");
        echo "\" class=\"btn btn-primary text-uppercase\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En savoir plus"]);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reusable/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  136 => 50,  132 => 49,  128 => 48,  121 => 44,  116 => 42,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  84 => 27,  79 => 25,  70 => 19,  65 => 17,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid home-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 py-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\">
                    {{ \"Une urgence avec votre plomberie?\"|_ }}</h1>
                <a href=\"tel:{{ this.theme.default_phone }}\" class=\"btn btn-black text-uppercase\" title=\"{{ this.theme.default_phone }}\">{{ \"Appeler maintenant\"|_ }}</a>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center pb-3\">
            <div class=\"col-lg-10 col-sm-12\">
                <h2 class=\"h2-responsive text-center\">
                    {{ \"Services Complets\"|_ }}</h2>
                <p class=\"text-center\">
                    {{ \"Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoin ou problème ainsi que de vous proposer la solution la mieux adaptée.\"|_ }}
                </p>
                <div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"{{'assets/images/residentielle-service-600x.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ \"Résidentielle\"|_ }}</h5>
                                    <p class=\"card-text\">{{ \"De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires, nous offrons l'éventail complet\"|_ }} -
                                   {{ \"et même plus - des services de plomberie résidentielle.\"|_ }}</p>
                                    <a href=\"{{ 'residentielle'|page }}\" class=\"btn btn-primary text-uppercase\">{{ \"En savoir plus\"|_ }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-sm-1 order-lg-2\">
                                <img src=\"{{'assets/images/commercial-service-600x.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center order-sm-2 order-lg-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ \"Commerciale\"|_ }}</h5>
                                    <p class=\"card-text\">{{ \"Pour l'installation et l'entretien de séparateur de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bain publiques.\"|_ }}</p>
                                    <a href=\"{{ 'commerciale'|page }}\" class=\"btn btn-primary text-uppercase\">{{ \"En savoir plus\"|_ }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/home.htm", "");
    }
}
