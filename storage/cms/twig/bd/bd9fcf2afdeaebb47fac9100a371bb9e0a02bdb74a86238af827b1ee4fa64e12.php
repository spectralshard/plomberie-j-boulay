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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/reusable/cta.htm */
class __TwigTemplate_68394e8f4f2ccf0d0b3ae0642429e19d50089332f0e8288e3225d87fef2d393e extends \Twig\Template
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
        echo "<div class=\"card mb-3 row-flush\">
    <div class=\"row no-gutters secondary-color\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/leaking-home-cta.jpg");
        echo "\"
                 class=\"card-img img-fluid\"
                 alt=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Service résidentielle de plomberie"]);
        echo "\">
        </div>
        <div class=\"col-md-6 py-5 d-flex align-items-center\">
            <div class=\"card-body container text-white mx-sm-5\">
                <h2 class=\"text-uppercase py-0 h2-responsive\">Un dégât d'eau?</h2>
                <h3 class=\"mt-0 h3-responsive\">Faites appel à nous dès maintenant</h3>
                <p>Contactez-nous rapidement lors d’un dégât d’eau. Notre équipe vous aidera à distance pendant qu’un plombier se rendra à votre domicile pour limiter les dégâts et réparer le tout. </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/reusable/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 row-flush\">
    <div class=\"row no-gutters secondary-color\">
        <div class=\"col-md-6\">
            <img src=\"{{'assets/images/leaking-home-cta.jpg'|theme}}\"
                 class=\"card-img img-fluid\"
                 alt=\"{{ 'Service résidentielle de plomberie'|_ }}\">
        </div>
        <div class=\"col-md-6 py-5 d-flex align-items-center\">
            <div class=\"card-body container text-white mx-sm-5\">
                <h2 class=\"text-uppercase py-0 h2-responsive\">Un dégât d'eau?</h2>
                <h3 class=\"mt-0 h3-responsive\">Faites appel à nous dès maintenant</h3>
                <p>Contactez-nous rapidement lors d’un dégât d’eau. Notre équipe vous aidera à distance pendant qu’un plombier se rendra à votre domicile pour limiter les dégâts et réparer le tout. </p>
            </div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/reusable/cta.htm", "");
    }
}
