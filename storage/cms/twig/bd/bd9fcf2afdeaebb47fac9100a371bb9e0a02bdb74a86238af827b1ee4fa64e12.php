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
        <div class=\"col-md-12 col-lg-6\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/leaking-home-cta.jpg");
        echo "\"
                 class=\"card-img img-fluid\"
                 alt=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Un dégât d'eau? Faites appel à nous dès maintenant!"]);
        echo "\"
            data-aos=\"fade-up\"
            data-aos-anchor-placement=\"top-bottom\">
        </div>
        <div class=\"col-md-12 col-lg-6 py-5 d-flex align-items-center\">
            <div class=\"card-body container text-white mx-sm-5\">
                <h2 class=\"text-uppercase py-0 h2-responsive\">
                    ";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Un dégât d'eau?"]);
        echo "
                </h2>
                <h3 class=\"mt-0 h3-responsive\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Faites appel à nous dès maintenant"]);
        echo "</h3>
                <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contactez-nous rapidement lors d'un dégât d'eau."]);
        echo "
                    ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre équipe vous aidera à distance pendant qu'un plombier se rendra à votre domicile pour limiter les dégâts et réparer le tout."]);
        echo "
                </p>
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
        return array (  70 => 17,  66 => 16,  62 => 15,  57 => 13,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 row-flush\">
    <div class=\"row no-gutters secondary-color\">
        <div class=\"col-md-12 col-lg-6\">
            <img src=\"{{'assets/images/leaking-home-cta.jpg'|theme}}\"
                 class=\"card-img img-fluid\"
                 alt=\"{{ \"Un dégât d'eau? Faites appel à nous dès maintenant!\"|_ }}\"
            data-aos=\"fade-up\"
            data-aos-anchor-placement=\"top-bottom\">
        </div>
        <div class=\"col-md-12 col-lg-6 py-5 d-flex align-items-center\">
            <div class=\"card-body container text-white mx-sm-5\">
                <h2 class=\"text-uppercase py-0 h2-responsive\">
                    {{ \"Un dégât d'eau?\" |_ }}
                </h2>
                <h3 class=\"mt-0 h3-responsive\">{{ \"Faites appel à nous dès maintenant\"|_ }}</h3>
                <p>{{ \"Contactez-nous rapidement lors d'un dégât d'eau.\"|_ }}
                    {{ \"Notre équipe vous aidera à distance pendant qu'un plombier se rendra à votre domicile pour limiter les dégâts et réparer le tout.\"|_ }}
                </p>
            </div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/reusable/cta.htm", "");
    }
}
