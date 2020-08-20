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
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Plomberie commerciale et industrielle"]);
        echo "
                    </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center pb-5\">
            <div class=\"col-12\">
                <p class=\"text-center\">
                    ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous avons mené à bien des centaines de mandats de plomberie commerciale jusqu’à ce jour pour des entreprises de tailles variées."]);
        echo "
                    <br>
                    ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Aucun projet n’est à notre épreuve."]);
        echo "</p>
            </div>
            <div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12 pb-2\">
                            <h3 class=\"h3-responsive text-primary text-center\">
                                ";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous sommes là pour vos défis commerciaux"]);
        echo "</h3>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["En tant qu’entrepreneur ou commerçant, votre temps est compté et doit être affecté à la bonne marche de votre entreprise."]);
        echo "
                                    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vous devez donc avoir un partenaire de confiance pour mener à bien vos travaux d’entretien ou de réparation de vos installations de plomberie."]);
        echo "
                                </p>
                                <p class=\"card-text\">
                                    ";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vos cuisines commerciales et salles de bains publiques doivent être entretenues selon des normes rigoureuses"]);
        echo "
                                    ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["et nous pouvons livrer la marchandise pour que vos installations soient conformes en tout temps."]);
        echo "
                                </p>
                                <p class=\"card-text\">
                                    ";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre grande expérience fait en sorte que vous pouvez compter sur notre connaissance des normes concernant les bâtiments et locaux commerciaux et industriels."]);
        echo "
                                    ";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos équipes de plombiers peuvent vous assurer des travaux réalisés efficacement, et à la durée de vie optimale."]);
        echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/commercial-intro.jpg");
        echo "\"
                                 class=\"card-img img-fluid\"
                                 alt=\"";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"col-12\">
                    <h3 class=\"h3-responsive text-primary text-center pb-2\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services offerts pour votre entreprise"]);
        echo "</h3>
                    <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/renovation-entreprise.jpg");
        echo "\"
                         class=\"card-img img-fluid\"
                         alt=\"";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service commerciale de plomberie"]);
        echo "\">
                    <p>
                        ";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Votre local commercial nécessite un entretien constant et ses installations de plomberie et sa tuyauterie sont hautement sollicitées de façon constante."]);
        echo "
                    ";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Vous devez pouvoir faire confiance à une entreprise en plomberie solide qui pourra répondre à vos besoins commerciaux rapidement et efficacement."]);
        echo "
                    </p>
                    <p>
                        ";
        // line 61
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Voici un petit échantillon des services que vous pouvez nous confier dans votre établissement:"]);
        echo "</p>
                    <ul>
                        <li>";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Réparation de fuites dans la tuyauterie"]);
        echo " </li>
                        <li>";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation de régulateur de pression d’eau"]);
        echo " </li>
                        <li>";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation de compteur d’eau"]);
        echo " </li>
                        <li>";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation et remplacement de chauffe-eau"]);
        echo " </li>
                        <li>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Inspection préventive complète de vos installations de plomberie commerciale"]);
        echo " </li>
                        <li>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Installation et entretien de séparateurs de graisses (trappe à graisse)"]);
        echo " </li>
                    </ul>
                    <p>
                        ";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contactez-nous dès maintenant pour que nous puissions discuter de vos besoins commerciaux pour la plomberie de votre entreprise."]);
        echo "
                        </p>
                    <div class=\"text-center pt-3\"> <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demander une soumission"]);
        echo "</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 79
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
        return array (  195 => 79,  186 => 73,  181 => 71,  175 => 68,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  150 => 61,  144 => 58,  140 => 57,  135 => 55,  130 => 53,  126 => 52,  118 => 47,  113 => 45,  105 => 40,  101 => 39,  95 => 36,  91 => 35,  85 => 32,  81 => 31,  73 => 26,  63 => 19,  58 => 17,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid commerciale-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-lg-5 col-sm-12 my-5 text-white\">
                <h1 class=\"display-6 text-uppercase text-shadow\">
                    {{ \"Plomberie commerciale et industrielle\"|_ }}
                    </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center pb-5\">
            <div class=\"col-12\">
                <p class=\"text-center\">
                    {{ \"Nous avons mené à bien des centaines de mandats de plomberie commerciale jusqu’à ce jour pour des entreprises de tailles variées.\"|_ }}
                    <br>
                    {{ \"Aucun projet n’est à notre épreuve.\"|_ }}</p>
            </div>
            <div>
                <div class=\"my-4\">
                    <div class=\"row no-gutters\">
                        <div class=\"col-12 pb-2\">
                            <h3 class=\"h3-responsive text-primary text-center\">
                                {{ \"Nous sommes là pour vos défis commerciaux\"|_ }}</h3>
                        </div>
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    {{ \"En tant qu’entrepreneur ou commerçant, votre temps est compté et doit être affecté à la bonne marche de votre entreprise.\"|_ }}
                                    {{ \"Vous devez donc avoir un partenaire de confiance pour mener à bien vos travaux d’entretien ou de réparation de vos installations de plomberie.\"|_ }}
                                </p>
                                <p class=\"card-text\">
                                    {{ \"Vos cuisines commerciales et salles de bains publiques doivent être entretenues selon des normes rigoureuses\"|_ }}
                                    {{ \"et nous pouvons livrer la marchandise pour que vos installations soient conformes en tout temps.\"|_ }}
                                </p>
                                <p class=\"card-text\">
                                    {{ \"Notre grande expérience fait en sorte que vous pouvez compter sur notre connaissance des normes concernant les bâtiments et locaux commerciaux et industriels.\"|_ }}
                                    {{ \"Nos équipes de plombiers peuvent vous assurer des travaux réalisés efficacement, et à la durée de vie optimale.\"|_ }}
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
                    <h3 class=\"h3-responsive text-primary text-center pb-2\">{{ \"Services offerts pour votre entreprise\"|_ }}</h3>
                    <img src=\"{{'assets/images/renovation-entreprise.jpg'|theme}}\"
                         class=\"card-img img-fluid\"
                         alt=\"{{ 'Service commerciale de plomberie'|_ }}\">
                    <p>
                        {{ \"Votre local commercial nécessite un entretien constant et ses installations de plomberie et sa tuyauterie sont hautement sollicitées de façon constante.\"|_ }}
                    {{ \"Vous devez pouvoir faire confiance à une entreprise en plomberie solide qui pourra répondre à vos besoins commerciaux rapidement et efficacement.\"|_ }}
                    </p>
                    <p>
                        {{ \"Voici un petit échantillon des services que vous pouvez nous confier dans votre établissement:\"|_ }}</p>
                    <ul>
                        <li>{{ \"Réparation de fuites dans la tuyauterie\"|_ }} </li>
                        <li>{{ \"Installation de régulateur de pression d’eau\"|_ }} </li>
                        <li>{{ \"Installation de compteur d’eau\"|_ }} </li>
                        <li>{{ \"Installation et remplacement de chauffe-eau\"|_ }} </li>
                        <li>{{ \"Inspection préventive complète de vos installations de plomberie commerciale\"|_ }} </li>
                        <li>{{ \"Installation et entretien de séparateurs de graisses (trappe à graisse)\"|_ }} </li>
                    </ul>
                    <p>
                        {{ \"Contactez-nous dès maintenant pour que nous puissions discuter de vos besoins commerciaux pour la plomberie de votre entreprise.\"|_ }}
                        </p>
                    <div class=\"text-center pt-3\"> <a href=\"#contact\" class=\"btn btn-primary text-uppercase\">{{ \"Demander une soumission\"|_ }}</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
{% partial 'reusable/cta' %}", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/commerciale.htm", "");
    }
}
