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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/a-propos.htm */
class __TwigTemplate_cc6354f9ccf2dcdc9ae1b2c0bc5ba15d9672813059965ca5631e4334c33ab932 extends \Twig\Template
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
        echo "<div class=\"jumbotron jumbotron-fluid about-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">À Propos</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Plomberie J. Boulay Inc.</h2>
                <p class=\"text-center\">
                    Nous sommes une entreprise  spécialisé dans le domaine de la plomberie résidentielle et commerciale. Nous offrons un service d'urgence de plomberie disponible 24 heures sur 24 afin de répondre rapidement à vos besoins.</p>
                <p class=\"text-center\">
                    Pour le remplacement et l'installation de tuyauterie ou pour l'installation d'une nouvelle entrée d'eau, vous pouvez compter sur le savoir-faire de l'équipe. Contactez nous dès aujourd'hui!
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"py-5 secondary-color text-white\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Offrir une qualité exceptionnelle de service</h2>
                <p class=\"text-center\">
                    Notre mandat est d’être une entreprise humaine et fiable. En plus de vous proposer un service rapide et une expertise complète, nous avons à cœur de vous fournir toutes les informations dont vous avez besoin. Notre but est de vous aider à prendre les meilleures décisions en fonction de vos enjeux particuliers!
                </p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/a-propos.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid about-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-5 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">À Propos</h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Plomberie J. Boulay Inc.</h2>
                <p class=\"text-center\">
                    Nous sommes une entreprise  spécialisé dans le domaine de la plomberie résidentielle et commerciale. Nous offrons un service d'urgence de plomberie disponible 24 heures sur 24 afin de répondre rapidement à vos besoins.</p>
                <p class=\"text-center\">
                    Pour le remplacement et l'installation de tuyauterie ou pour l'installation d'une nouvelle entrée d'eau, vous pouvez compter sur le savoir-faire de l'équipe. Contactez nous dès aujourd'hui!
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"py-5 secondary-color text-white\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-10\">
                <h2 class=\"h2-responsive text-center\">Offrir une qualité exceptionnelle de service</h2>
                <p class=\"text-center\">
                    Notre mandat est d’être une entreprise humaine et fiable. En plus de vous proposer un service rapide et une expertise complète, nous avons à cœur de vous fournir toutes les informations dont vous avez besoin. Notre but est de vous aider à prendre les meilleures décisions en fonction de vos enjeux particuliers!
                </p>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/a-propos.htm", "");
    }
}