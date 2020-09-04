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
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\" data-aos=\"fade-up\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Une urgence avec votre plomberie?"]);
        echo "</h1>
                <a href=\"tel:";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "default_phone", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"btn btn-black text-uppercase\"
                   title=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "default_phone", [], "any", false, false, false, 8), "html", null, true);
        echo "\" data-aos=\"fade-right\">";
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
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services Complets"]);
        echo "</h2>
                <p class=\"text-center\">
                    ";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoins ou problèmes ainsi que de vous proposer la solution la mieux adaptée."]);
        echo "
                </p>
                <div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/residentielle-service-600x.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\"
                                     data-aos=\"fade-up\"
                                     data-aos-anchor-placement=\"top-bottom\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "</h5>
                                    <p class=\"card-text\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires."]);
        echo " -
                                   ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous offrons l’éventail complet des services de plomberie résidentielle."]);
        echo "</p>
                                    <a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("residentielle");
        echo "\"
                                       class=\"btn btn-primary text-uppercase\"
                                    title=\"";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">";
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
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/commercial-service-600x.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\"
                                     data-aos=\"fade-up\"
                                     data-aos-anchor-placement=\"top-bottom\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center order-sm-2 order-lg-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "</h5>
                                    <p class=\"card-text\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour l'installation et l'entretien de séparateurs de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bains publiques."]);
        echo "</p>
                                    <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("commerciale");
        echo "\"
                                       class=\"btn btn-primary text-uppercase\"
                                       title=\"";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">";
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
        // line 69
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
        return array (  167 => 69,  152 => 59,  147 => 57,  143 => 56,  139 => 55,  130 => 49,  125 => 47,  112 => 39,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  86 => 28,  81 => 26,  72 => 20,  67 => 18,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid home-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 py-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\" data-aos=\"fade-up\">
                    {{ \"Une urgence avec votre plomberie?\"|_ }}</h1>
                <a href=\"tel:{{ this.theme.default_phone }}\" class=\"btn btn-black text-uppercase\"
                   title=\"{{ this.theme.default_phone }}\" data-aos=\"fade-right\">{{ \"Appeler maintenant\"|_ }}</a>
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
                    {{ \"Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoins ou problèmes ainsi que de vous proposer la solution la mieux adaptée.\"|_ }}
                </p>
                <div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"{{'assets/images/residentielle-service-600x.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service résidentielle de plomberie'|_ }}\"
                                     data-aos=\"fade-up\"
                                     data-aos-anchor-placement=\"top-bottom\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ \"Résidentielle\"|_ }}</h5>
                                    <p class=\"card-text\">{{ \"De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires.\"|_ }} -
                                   {{ \"Nous offrons l’éventail complet des services de plomberie résidentielle.\"|_ }}</p>
                                    <a href=\"{{ 'residentielle'|page }}\"
                                       class=\"btn btn-primary text-uppercase\"
                                    title=\"{{ 'Service résidentielle de plomberie'|_ }}\">{{ \"En savoir plus\"|_ }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"my-4\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 order-sm-1 order-lg-2\">
                                <img src=\"{{'assets/images/commercial-service-600x.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service commerciale de plomberie'|_ }}\"
                                     data-aos=\"fade-up\"
                                     data-aos-anchor-placement=\"top-bottom\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center order-sm-2 order-lg-1\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ \"Commerciale\"|_ }}</h5>
                                    <p class=\"card-text\">{{ \"Pour l'installation et l'entretien de séparateurs de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bains publiques.\"|_ }}</p>
                                    <a href=\"{{ 'commerciale'|page }}\"
                                       class=\"btn btn-primary text-uppercase\"
                                       title=\"{{ 'Service commerciale de plomberie'|_ }}\">{{ \"En savoir plus\"|_ }}</a>
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
