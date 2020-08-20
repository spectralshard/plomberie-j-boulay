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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/commerciale.htm */
class __TwigTemplate_9080b98c0c6e6efac6741a8bcd60bb463b95babd103702107556d3ac41c828df extends \Twig\Template
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
        echo "<div class=\"jumbotron jumbotron-fluid commerciale-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">plomberie commerciale et industrielle </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <p class=\"text-center\">
                    Nous avons mené à bien des centaines de mandats de plomberie commerciale jusqu’à ce jour pour des entreprises de tailles variées. Aucun projet n’est à notre épreuve.</p>
            </div>
            <div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12\">
                            <h3 class=\"h3-responsive text-primary text-center\">
                                Nous sommes là pour vos défis commerciaux</h3>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    En tant qu’entrepreneur ou commerçant, votre temps est compté et doit être affecté à la bonne marche de votre entreprise. Vous devez donc avoir un partenaire de confiance pour mener à bien vos travaux d’entretien ou de réparation de vos installations de plomberie.</p>
                                <p class=\"card-text\">Vos cuisines commerciales et salles de bains publiques doivent être entretenues selon des normes rigoureuses et nous pouvons livrer la marchandise pour que vos installations soient conformes en tout temps.</p>
                                <p class=\"card-text\">Notre grande expérience fait en sorte que vous pouvez compter sur notre connaissance des normes concernant les bâtiments et locaux commerciaux et industriels. Nos équipes de plombiers peuvent vous assurer des travaux réalisés efficacement, et à la durée de vie optimale.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/commercial-intro.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"col-12\">
                    <h3 class=\"h3-responsive text-primary text-center\">Services offerts pour votre entreprise</h3>
                    <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/renovation-entreprise.jpg");
        echo "\"
                         class=\"card-img img-fluid\"
                         alt=\"";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                    <p>
                        Votre local commercial nécessite un entretien constant et ses installations de plomberie et sa tuyauterie sont hautement sollicitées de façon constante. Vous devez pouvoir faire confiance à une entreprise en plomberie solide qui pourra répondre à vos besoins commerciaux rapidement et efficacement. </p>
                    <p>
                        Voici un petit échantillon des services que vous pouvez nous confier dans votre établissement:</p>
                    <ul>
                        <li>Réparation de fuites dans la tuyauterie </li>
                        <li>Installation de régulateur de pression d’eau </li>
                        <li>Installation de compteur d’eau </li>
                        <li>Installation et remplacement de chauffe-eau </li>
                        <li>Inspection préventive complète de vos installations de plomberie commerciale </li>
                        <li>Installation et entretien de séparateurs de graisses (trappe à graisse) </li>
                    </ul>
                    <p>
                        Contactez-nous dès maintenant pour que nous puissions discuter de vos besoins commerciaux pour la plomberie de votre entreprise.</p>
                    <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">Demander une soumission</a>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reusable/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/commerciale.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 65,  91 => 44,  86 => 42,  77 => 36,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid commerciale-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">plomberie commerciale et industrielle </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12\">
                <p class=\"text-center\">
                    Nous avons mené à bien des centaines de mandats de plomberie commerciale jusqu’à ce jour pour des entreprises de tailles variées. Aucun projet n’est à notre épreuve.</p>
            </div>
            <div>
                <div class=\"mb-3\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12\">
                            <h3 class=\"h3-responsive text-primary text-center\">
                                Nous sommes là pour vos défis commerciaux</h3>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    En tant qu’entrepreneur ou commerçant, votre temps est compté et doit être affecté à la bonne marche de votre entreprise. Vous devez donc avoir un partenaire de confiance pour mener à bien vos travaux d’entretien ou de réparation de vos installations de plomberie.</p>
                                <p class=\"card-text\">Vos cuisines commerciales et salles de bains publiques doivent être entretenues selon des normes rigoureuses et nous pouvons livrer la marchandise pour que vos installations soient conformes en tout temps.</p>
                                <p class=\"card-text\">Notre grande expérience fait en sorte que vous pouvez compter sur notre connaissance des normes concernant les bâtiments et locaux commerciaux et industriels. Nos équipes de plombiers peuvent vous assurer des travaux réalisés efficacement, et à la durée de vie optimale.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"{{'assets/images/commercial-intro.jpg'|theme}}\"
                                 class=\"card-img img-fluid\"
                                 alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
                        </div>
                    </div>
                </div>
                <div class=\"col-12\">
                    <h3 class=\"h3-responsive text-primary text-center\">Services offerts pour votre entreprise</h3>
                    <img src=\"{{'assets/images/renovation-entreprise.jpg'|theme}}\"
                         class=\"card-img img-fluid\"
                         alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                    <p>
                        Votre local commercial nécessite un entretien constant et ses installations de plomberie et sa tuyauterie sont hautement sollicitées de façon constante. Vous devez pouvoir faire confiance à une entreprise en plomberie solide qui pourra répondre à vos besoins commerciaux rapidement et efficacement. </p>
                    <p>
                        Voici un petit échantillon des services que vous pouvez nous confier dans votre établissement:</p>
                    <ul>
                        <li>Réparation de fuites dans la tuyauterie </li>
                        <li>Installation de régulateur de pression d’eau </li>
                        <li>Installation de compteur d’eau </li>
                        <li>Installation et remplacement de chauffe-eau </li>
                        <li>Inspection préventive complète de vos installations de plomberie commerciale </li>
                        <li>Installation et entretien de séparateurs de graisses (trappe à graisse) </li>
                    </ul>
                    <p>
                        Contactez-nous dès maintenant pour que nous puissions discuter de vos besoins commerciaux pour la plomberie de votre entreprise.</p>
                    <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">Demander une soumission</a>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/commerciale.htm", "");
    }
}
