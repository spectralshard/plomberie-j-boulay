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
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\">Une urgence avec votre plomberie?</h1>
                <a href=\"tel:";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "default_phone", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"btn btn-black text-uppercase\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "default_phone", [], "any", false, false, false, 6), "html", null, true);
        echo "\">Appeler maintenant</a>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Services Complets</h2>
                <p class=\"text-center\">
                    Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoin ou problème ainsi que de vous proposer la solution la mieux adaptée.
                </p>
                <div>
                    <div class=\"mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/residentielle-service.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Résidentielle</h5>
                                    <p class=\"card-text\">De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires, nous offrons l'éventail complet - et même plus - des services de plomberie résidentielle.</p>
                                    <a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("residentielle");
        echo "\" class=\"btn btn-primary text-uppercase\">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Commerciale</h5>
                                    <p class=\"card-text\">Pour l'installation et l'entretien de séparateur de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bain publiques.</p>
                                    <a href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("commerciale");
        echo "\" class=\"btn btn-primary text-uppercase\">En savoir plus</a>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/commercial-service.jpg");
        echo "\"
                                     class=\"card-img img-fluid\"
                                     alt=\"";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 57
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
        return array (  118 => 57,  106 => 48,  101 => 46,  94 => 42,  80 => 31,  71 => 25,  66 => 23,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid home-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow pb-3\">Une urgence avec votre plomberie?</h1>
                <a href=\"tel:{{ this.theme.default_phone }}\" class=\"btn btn-black text-uppercase\" title=\"{{ this.theme.default_phone }}\">Appeler maintenant</a>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Services Complets</h2>
                <p class=\"text-center\">
                    Nos experts de la plomberie sont certifiés et expérimentés pour faire l’analyse de vos besoin ou problème ainsi que de vous proposer la solution la mieux adaptée.
                </p>
                <div>
                    <div class=\"mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6\">
                                <img src=\"{{'assets/images/residentielle-service.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
                            </div>
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Résidentielle</h5>
                                    <p class=\"card-text\">De la réparation des problèmes reliés à la tuyauterie de votre résidence à l'installation des appareils sanitaires, nous offrons l'éventail complet - et même plus - des services de plomberie résidentielle.</p>
                                    <a href=\"{{ 'residentielle'|page }}\" class=\"btn btn-primary text-uppercase\">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <div class=\"row no-gutters\">
                            <div class=\"col-md-6 d-flex align-items-center\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Commerciale</h5>
                                    <p class=\"card-text\">Pour l'installation et l'entretien de séparateur de graisses ou tous vos besoins en plomberie pour votre cuisine commerciale ou vos salles de bain publiques.</p>
                                    <a href=\"{{ 'commerciale'|page }}\" class=\"btn btn-primary text-uppercase\">En savoir plus</a>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <img src=\"{{'assets/images/commercial-service.jpg'|theme}}\"
                                     class=\"card-img img-fluid\"
                                     alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
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
