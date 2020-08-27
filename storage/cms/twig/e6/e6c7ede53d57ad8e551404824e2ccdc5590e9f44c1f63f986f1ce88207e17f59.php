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
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\" data-aos=\"fade-up\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plomberie Résidentielle"]);
        echo "</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10 pb-5\">
                <h3 class=\"text-center h3-responsive text-primary\">
                    ";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre services résidentiels"]);
        echo "</h3>
                <p class=\"text-center\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["L’alimentation en eau de votre résidence revêt une importance particulière, pour des raisons de commodité mais aussi de santé."]);
        echo "
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Il n’y a pas de chance à prendre et vous avez besoin de professionnels chevronnés et certifiés pour assurer la conformité des systèmes de plomberie de votre maison."]);
        echo " </p>

            </div>
            <div class=\"col-sm-12 col-lg-10 pb-5\">
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">
                                    ";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plomberie commerciale et industrielle"]);
        echo "Réparations aux systèmes de plomberie et tuyaux</h5>
                                <p class=\"card-text\">
                                    ";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Si votre plomberie est désuète ou endommagée, des fuites ou micro-fuites peuvent causer des dommages à d’autres éléments de votre propriétés (planchers, armoires, etc.)."]);
        echo "
                                    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous pouvons faire l’inspection de vos installations actuelles et planifier la mise à jour de votre plomberie."]);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/residentielle-plomberie.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pièces de plomberie brisées"]);
        echo "\"
                                 data-aos=\"fade-up\"
                                 data-aos-anchor-placement=\"top-bottom\">
                        </div>
                    </div>
                </div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/salle-de-bain.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation de plomberie neuve dans une salle de bain résidentielle"]);
        echo "\"
                                 data-aos=\"fade-up\"
                                 data-aos-anchor-placement=\"top-bottom\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">
                                    ";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:"]);
        echo "
                                </h5>
                                <ul>
                                    <li>";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Toilette"]);
        echo "</li>
                                    <li>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Évier et lavabo"]);
        echo "</li>
                                    <li>";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Douche"]);
        echo "</li>
                                    <li>";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Baignoire"]);
        echo "</li>
                                    <li>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Lave-vaisselle"]);
        echo "</li>
                                    <li>";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Valves et robinetterie"]);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-12 px-0\">
                    <h3 class=\"h3-responsive text-primary text-center\">
                        ";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plomberie complète pour construction ou rénovation"]);
        echo "
                    </h3>
                    <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/renovation-plomberie.jpg");
        echo "\"
                         class=\"card-img img-fluid\"
                         alt=\"";
        // line 76
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service de rénovation de plomberie résidentielle"]);
        echo "\"
                         data-aos=\"fade-up\"
                         data-aos-anchor-placement=\"top-bottom\">
                    <p>
                        ";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence?"]);
        echo "
                        ";
        // line 81
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison."]);
        echo "
                        </p>
                    <p>
                        ";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise"]);
        echo "
                        ";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable."]);
        echo "
                    </p>
                        <div class=\"text-center pt-3\">
                            <a href=\"#contact\"
                               class=\"btn btn-primary text-uppercase\"
                               title=\"";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demander une soumission"]);
        echo "\"
                               data-aos=\"fade-up\">
                                ";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demander une soumission"]);
        echo "
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 101
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
        return array (  220 => 101,  208 => 92,  203 => 90,  195 => 85,  191 => 84,  185 => 81,  181 => 80,  174 => 76,  169 => 74,  164 => 72,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  126 => 55,  116 => 48,  111 => 46,  99 => 37,  94 => 35,  87 => 31,  83 => 30,  78 => 28,  66 => 19,  62 => 18,  57 => 16,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid residentielle-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\" data-aos=\"fade-up\">
                    {{ \"Plomberie Résidentielle\"|_ }}</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10 pb-5\">
                <h3 class=\"text-center h3-responsive text-primary\">
                    {{ \"Notre services résidentiels\"|_ }}</h3>
                <p class=\"text-center\">
                    {{ \"L’alimentation en eau de votre résidence revêt une importance particulière, pour des raisons de commodité mais aussi de santé.\"|_ }}
                    {{ \"Il n’y a pas de chance à prendre et vous avez besoin de professionnels chevronnés et certifiés pour assurer la conformité des systèmes de plomberie de votre maison.\"|_ }} </p>

            </div>
            <div class=\"col-sm-12 col-lg-10 pb-5\">
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">
                                    {{ \"Plomberie commerciale et industrielle\"|_ }}Réparations aux systèmes de plomberie et tuyaux</h5>
                                <p class=\"card-text\">
                                    {{ \"Si votre plomberie est désuète ou endommagée, des fuites ou micro-fuites peuvent causer des dommages à d’autres éléments de votre propriétés (planchers, armoires, etc.).\"|_ }}
                                    {{ \"Nous pouvons faire l’inspection de vos installations actuelles et planifier la mise à jour de votre plomberie.\"|_ }}</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/residentielle-plomberie.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Pièces de plomberie brisées'|_ }}\"
                                 data-aos=\"fade-up\"
                                 data-aos-anchor-placement=\"top-bottom\">
                        </div>
                    </div>
                </div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/salle-de-bain.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Installation de plomberie neuve dans une salle de bain résidentielle'|_ }}\"
                                 data-aos=\"fade-up\"
                                 data-aos-anchor-placement=\"top-bottom\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">
                                    {{ \"Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:\"|_ }}
                                </h5>
                                <ul>
                                    <li>{{ \"Toilette\"|_ }}</li>
                                    <li>{{ \"Évier et lavabo\"|_ }}</li>
                                    <li>{{ \"Douche\"|_ }}</li>
                                    <li>{{ \"Baignoire\"|_ }}</li>
                                    <li>{{ \"Lave-vaisselle\"|_ }}</li>
                                    <li>{{ \"Valves et robinetterie\"|_ }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-12 px-0\">
                    <h3 class=\"h3-responsive text-primary text-center\">
                        {{ \"Plomberie complète pour construction ou rénovation\"|_ }}
                    </h3>
                    <img src=\"{{'assets/images/renovation-plomberie.jpg'|theme}}\"
                         class=\"card-img img-fluid\"
                         alt=\"{{ 'Service de rénovation de plomberie résidentielle'|_ }}\"
                         data-aos=\"fade-up\"
                         data-aos-anchor-placement=\"top-bottom\">
                    <p>
                        {{ \"Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence?\"|_ }}
                        {{ \"Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison.\"|_ }}
                        </p>
                    <p>
                        {{ \"Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise\"|_ }}
                        {{ \"et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable.\"|_ }}
                    </p>
                        <div class=\"text-center pt-3\">
                            <a href=\"#contact\"
                               class=\"btn btn-primary text-uppercase\"
                               title=\"{{ 'Demander une soumission'|_ }}\"
                               data-aos=\"fade-up\">
                                {{ \"Demander une soumission\"|_ }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/residentielle.htm", "");
    }
}
