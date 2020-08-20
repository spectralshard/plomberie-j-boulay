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
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À Propos"]);
        echo "
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10\">
                <h2 class=\"h2-responsive text-center\">Plomberie J. Boulay Inc.</h2>
                <p class=\"text-center\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous sommes une entreprise  spécialisé dans le domaine de la plomberie résidentielle et commerciale."]);
        echo "
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous offrons un service d'urgence de plomberie disponible 24 heures sur 24 afin de répondre rapidement à vos besoins."]);
        echo "
                    </p>
                <p class=\"text-center\">
                    ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour le remplacement et l'installation de tuyauterie ou pour l'installation d'une nouvelle entrée d'eau, vous pouvez compter sur le savoir-faire de l'équipe. Contactez nous dès aujourd'hui!"]);
        echo "
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"py-5 secondary-color text-white\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10\">
                <h2 class=\"h2-responsive text-center\">
                    ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Offrir une qualité exceptionnelle de service"]);
        echo "
                    </h2>
                <p class=\"text-center\">
                    ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre mandat est d’être une entreprise humaine et fiable."]);
        echo "
                    ";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En plus de vous proposer un service rapide et une expertise complète, nous avons à cœur de vous fournir toutes les informations dont vous avez besoin."]);
        echo "
                    ";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre but est de vous aider à prendre les meilleures décisions en fonction de vos enjeux particuliers!"]);
        echo "
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  93 => 37,  89 => 36,  83 => 33,  69 => 22,  63 => 19,  59 => 18,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid about-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">
                    {{ \"À Propos\"|_ }}
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10\">
                <h2 class=\"h2-responsive text-center\">Plomberie J. Boulay Inc.</h2>
                <p class=\"text-center\">
                    {{ \"Nous sommes une entreprise  spécialisé dans le domaine de la plomberie résidentielle et commerciale.\"|_ }}
                    {{ \"Nous offrons un service d'urgence de plomberie disponible 24 heures sur 24 afin de répondre rapidement à vos besoins.\"|_ }}
                    </p>
                <p class=\"text-center\">
                    {{ \"Pour le remplacement et l'installation de tuyauterie ou pour l'installation d'une nouvelle entrée d'eau, vous pouvez compter sur le savoir-faire de l'équipe. Contactez nous dès aujourd'hui!\"|_ }}
                </p>
            </div>
        </div>
    </div>
</section>
<section class=\"py-5 secondary-color text-white\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10\">
                <h2 class=\"h2-responsive text-center\">
                    {{ \"Offrir une qualité exceptionnelle de service\"|_ }}
                    </h2>
                <p class=\"text-center\">
                    {{ \"Notre mandat est d’être une entreprise humaine et fiable.\"|_ }}
                    {{ \"En plus de vous proposer un service rapide et une expertise complète, nous avons à cœur de vous fournir toutes les informations dont vous avez besoin.\"|_ }}
                    {{ \"Notre but est de vous aider à prendre les meilleures décisions en fonction de vos enjeux particuliers!\"|_ }}
                </p>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/a-propos.htm", "");
    }
}
