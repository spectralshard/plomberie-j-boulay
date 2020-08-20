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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/404.htm */
class __TwigTemplate_2fb4fb8bb41571e7534994f3a7fe31cead67fdc100b57001e725ccb597b71867 extends \Twig\Template
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
            <div class=\"col-sm-12 my-5 text-white text-center\">
                <h1 class=\"display-6 text-uppercase text-shadow\" style=\"font-size:10rem;\">
                    404
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10 text-center\">
                <h2 class=\"wow flipInX\">
                    ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oops! La page demandé est introuvable!"]);
        echo "
                </h2>
                <p class=\"wow flipInX\">
                    ";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cette page n'existe plus, vous pouvez retourner à la page d'accueil!"]);
        echo "
                </p>
                <a class=\"btn btn-primary wow fadeInUp\"
                   href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" role=\"button\">
                    ";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retourné à la page d'accueil"]);
        echo "
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 23,  61 => 20,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron jumbotron-fluid about-bg-header\">
    <div class=\"container my-5\">
        <div class=\"row my-5 py-5\">
            <div class=\"col-sm-12 my-5 text-white text-center\">
                <h1 class=\"display-6 text-uppercase text-shadow\" style=\"font-size:10rem;\">
                    404
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-12 col-lg-10 text-center\">
                <h2 class=\"wow flipInX\">
                    {{ 'Oops! La page demandé est introuvable!'|_ }}
                </h2>
                <p class=\"wow flipInX\">
                    {{ 'Cette page n\\'existe plus, vous pouvez retourner à la page d\\'accueil!'|_ }}
                </p>
                <a class=\"btn btn-primary wow fadeInUp\"
                   href=\"{{ 'home'|page }}\" role=\"button\">
                    {{'Retourné à la page d\\'accueil'|_ }}
                </a>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/404.htm", "");
    }
}
