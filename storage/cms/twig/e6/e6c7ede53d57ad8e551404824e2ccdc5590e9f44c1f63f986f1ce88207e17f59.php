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
                <h1 class=\"display-6 text-uppercase text-shadow\">
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/salle-de-bain.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:"]);
        echo "</h5>
                                <ul>
                                    <li>";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Toilette"]);
        echo "</li>
                                    <li>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Évier et lavabo"]);
        echo "</li>
                                    <li>";
        // line 54
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Douche"]);
        echo "</li>
                                    <li>";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Baignoire"]);
        echo "</li>
                                    <li>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Lave-vaisselle"]);
        echo "</li>
                                    <li>";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Valves et robinetterie"]);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row d-flex justify-content-center\">
                    <div class=\"col-12 px-0\">
                    <h3 class=\"h3-responsive text-primary text-center\">";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plomberie complète pour construction ou rénovation"]);
        echo "</h3>
                    <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/renovation-plomberie.jpg");
        echo "\"
                         class=\"card-img img-fluid\"
                         alt=\"";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                    <p>
                        ";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence?"]);
        echo "
                        ";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison."]);
        echo "
                        </p>
                    <p>
                        ";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise"]);
        echo "
                        ";
        // line 75
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable."]);
        echo "
                    </p>
                        <div class=\"text-center pt-3\"> <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demander une soumission"]);
        echo "</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 84
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
        return array (  200 => 84,  190 => 77,  185 => 75,  181 => 74,  175 => 71,  171 => 70,  166 => 68,  161 => 66,  157 => 65,  146 => 57,  142 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  121 => 50,  114 => 46,  109 => 44,  99 => 37,  94 => 35,  87 => 31,  83 => 30,  78 => 28,  66 => 19,  62 => 18,  57 => 16,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid residentielle-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">
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
                                 alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
                        </div>
                    </div>
                </div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/salle-de-bain.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ \"Installation et réparation d’appareils sanitaires de cuisine et de salle de bain:\"|_ }}</h5>
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
                    <h3 class=\"h3-responsive text-primary text-center\">{{ \"Plomberie complète pour construction ou rénovation\"|_ }}</h3>
                    <img src=\"{{'assets/images/renovation-plomberie.jpg'|theme}}\"
                         class=\"card-img img-fluid\"
                         alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                    <p>
                        {{ \"Vous entreprenez des rénovations majeures ou avez un projet de construction de résidence?\"|_ }}
                        {{ \"Nous sommes la référence pour planifier et exécuter les travaux d’installation pour la plomberie de votre maison.\"|_ }}
                        </p>
                    <p>
                        {{ \"Il s’agit d’une opération coûteuse qui s’ajoute au coût total de vos travaux, et vous pouvez compter sur notre expertise\"|_ }}
                        {{ \"et notre transparence pour vous présenter une soumission raisonnable à un rapport qualité-prix incomparable.\"|_ }}
                    </p>
                        <div class=\"text-center pt-3\"> <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">{{ \"Demander une soumission\"|_ }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/residentielle.htm", "");
    }
}
