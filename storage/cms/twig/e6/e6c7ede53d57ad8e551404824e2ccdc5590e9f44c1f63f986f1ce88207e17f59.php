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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/residentielle.htm */
class __TwigTemplate_7bc054429f73a9b15eb5c6615235a144eeb29259bf17f50cee2acaeb3fdaa089 extends \Twig\Template
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
        echo "<div class=\"jumbotron jumbotron-fluid residentielle-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">Plomberie Résidentielle</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <h3 class=\"text-center h3-responsive text-primary\">
                    Notre services résidentiels</h3>
                <p class=\"text-center\">
                    L’alimentation en eau de votre résidence revêt une importance particulière, pour des raisons de commodité mais aussi de santé. Il n’y a pas de chance à prendre et vous avez besoin de professionnels chevronnés et certifiés pour assurer la conformité des systèmes de plomberie de votre maison.</p>

            </div>
            <div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Réparations aux systèmes de plomberie et tuyaux</h5>
                                <p class=\"card-text\">Si votre plomberie est désuète ou endommagée, des fuites ou micro-fuites peuvent causer des dommages à d’autres éléments de votre propriétés (planchers, armoires, etc.). Nous pouvons faire l’inspection de vos installations actuelles et planifier la mise à jour de votre plomberie.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/residentielle-plomberie.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/salle-de-bain.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:</h5>
                                <ul>
                                    <li>Toilette</li>
                                    <li>Évier et lavabo</li>
                                    <li>Douche</li>
                                    <li>Baignoire</li>
                                    <li>Lave-vaisselle</li>
                                    <li>Valves et robinetterie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center\">
                    <h3 class=\"h3-responsive text-primary\">Plomberie complète pour construction ou rénovation</h3>
                    <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/renovation-plomberie.jpg");
        echo "\"
                         class=\"card-img img-fluid\"
                         alt=\"";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                    <p>
                        Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence? Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison.</p>
                    <p>
                        Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable.</p>
                    <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">Demander une soumission</a>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reusable/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/residentielle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  115 => 62,  110 => 60,  88 => 41,  83 => 39,  73 => 32,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid residentielle-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">Plomberie Résidentielle</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <h3 class=\"text-center h3-responsive text-primary\">
                    Notre services résidentiels</h3>
                <p class=\"text-center\">
                    L’alimentation en eau de votre résidence revêt une importance particulière, pour des raisons de commodité mais aussi de santé. Il n’y a pas de chance à prendre et vous avez besoin de professionnels chevronnés et certifiés pour assurer la conformité des systèmes de plomberie de votre maison.</p>

            </div>
            <div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Réparations aux systèmes de plomberie et tuyaux</h5>
                                <p class=\"card-text\">Si votre plomberie est désuète ou endommagée, des fuites ou micro-fuites peuvent causer des dommages à d’autres éléments de votre propriétés (planchers, armoires, etc.). Nous pouvons faire l’inspection de vos installations actuelles et planifier la mise à jour de votre plomberie.</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/residentielle-plomberie.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
                        </div>
                    </div>
                </div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/salle-de-bain.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:</h5>
                                <ul>
                                    <li>Toilette</li>
                                    <li>Évier et lavabo</li>
                                    <li>Douche</li>
                                    <li>Baignoire</li>
                                    <li>Lave-vaisselle</li>
                                    <li>Valves et robinetterie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 text-center\">
                    <h3 class=\"h3-responsive text-primary\">Plomberie complète pour construction ou rénovation</h3>
                    <img src=\"{{'assets/images/renovation-plomberie.jpg'|theme}}\"
                         class=\"card-img img-fluid\"
                         alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                    <p>
                        Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence? Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison.</p>
                    <p>
                        Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable.</p>
                    <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">Demander une soumission</a>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/residentielle.htm", "");
    }
}
