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
        echo "<section id=\"top\" class=\"hero-home banner-services py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
             ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oops! La page demandé est introuvable!"]);
        echo "
            </div>
        </div>
    </div>
</section>
<section class=\"intro my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"wow flipInX\" style=\"font-size:10rem;\">
                    404
                </h2>
                <p class=\"wow flipInX\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cette page n'existe plus, vous pouvez retourner à la page d'accueil!"]);
        echo "
                </p>
                <a class=\"btn btn-secondary wow fadeInUp\"
                   href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" role=\"button\">
                    ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retourné à la page d'accueil"]);
        echo "
                </a>
            </div>
        </div>
        <div class=\"row my-5 pb-4\">
            <div class=\"col\">

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
        return array (  69 => 22,  65 => 21,  59 => 18,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"top\" class=\"hero-home banner-services py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
             {{ 'Oops! La page demandé est introuvable!'|_ }}
            </div>
        </div>
    </div>
</section>
<section class=\"intro my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"wow flipInX\" style=\"font-size:10rem;\">
                    404
                </h2>
                <p class=\"wow flipInX\">
                    {{ 'Cette page n\\'existe plus, vous pouvez retourner à la page d\\'accueil!'|_ }}
                </p>
                <a class=\"btn btn-secondary wow fadeInUp\"
                   href=\"{{ 'home'|page }}\" role=\"button\">
                    {{'Retourné à la page d\\'accueil'|_ }}
                </a>
            </div>
        </div>
        <div class=\"row my-5 pb-4\">
            <div class=\"col\">

            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/pages/404.htm", "");
    }
}
