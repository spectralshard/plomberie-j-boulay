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
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-8 my-5\">
            <h2 class=\"text-uppercase text-primary text-center\">Nous joindre</h2>
            <p class=\"text-center\">Nous sommes disponibles 24 heures sur 24, 7 jours sur 7, <br> écrivez-nous dès maintenant!</p>
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Mysimplecontact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
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
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-8 my-5\">
            <h2 class=\"text-uppercase text-primary text-center\">Nous joindre</h2>
            <p class=\"text-center\">Nous sommes disponibles 24 heures sur 24, 7 jours sur 7, <br> écrivez-nous dès maintenant!</p>
            {% component 'Mysimplecontact' %}
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/contact.htm", "");
    }
}
