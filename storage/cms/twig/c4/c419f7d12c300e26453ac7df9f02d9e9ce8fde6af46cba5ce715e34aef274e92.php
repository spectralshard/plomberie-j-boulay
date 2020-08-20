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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/contact.htm */
class __TwigTemplate_e8736684d13cf689a1f84781df07e72e177b47746c7157d4f7a39294c89657ad extends \Twig\Template
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
        echo "<div class=\"container pb-5\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-8 col-sm-12 my-5\">
            <h2 class=\"text-uppercase text-primary text-center\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous joindre"]);
        echo "
            </h2>
            <p class=\"text-center\">
                ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous sommes disponibles 24 heures sur 24, 7 jours sur 7, écrivez-nous dès maintenant!"]);
        echo "
            </p>
            ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Mysimplecontact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pb-5\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-lg-8 col-sm-12 my-5\">
            <h2 class=\"text-uppercase text-primary text-center\">
                {{ \"Nous joindre\"|_ }}
            </h2>
            <p class=\"text-center\">
                {{ \"Nous sommes disponibles 24 heures sur 24, 7 jours sur 7, écrivez-nous dès maintenant!\"|_ }}
            </p>
            {% component 'Mysimplecontact' %}
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/contact.htm", "");
    }
}
