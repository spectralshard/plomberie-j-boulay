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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/navbar.htm */
class __TwigTemplate_189b3f9d65f4bde34bbb46feb1a9fc51380f7feb06ded9a2acb1bbd6f2c52e30 extends \Twig\Template
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
        echo "<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t<img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-plomberie-jboulay.jpg");
        echo "\"
\t\t\t\t style=\"width:200px;\"
\t\t\t\t alt=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logo de Plomberie J. Boulay inc"]);
        echo "\">
\t\t</a>
\t\t<div class=\"hamburger hamburger--spring d-flex d-md-block d-lg-none float-right\"
\t\t\t data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t<div class=\"hamburger-box\">
\t\t\t\t<div class=\"hamburger-inner\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Accueil"]);
        echo "\">
\t\t\t\t\t\t";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Accueil"]);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("a-propos");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À Propos"]);
        echo "\">
\t\t\t\t\t\t";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["À Propos"]);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("residentielle");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "\">
\t\t\t\t\t\t";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Résidentielle"]);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("commerciale");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "\">
\t\t\t\t\t\t";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Commerciale"]);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 32,  96 => 28,  90 => 27,  83 => 23,  77 => 22,  70 => 18,  64 => 17,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t\t<img src=\"{{'assets/images/logo-plomberie-jboulay.jpg'|theme}}\"
\t\t\t\t style=\"width:200px;\"
\t\t\t\t alt=\"{{ 'Logo de Plomberie J. Boulay inc'|_ }}\">
\t\t</a>
\t\t<div class=\"hamburger hamburger--spring d-flex d-md-block d-lg-none float-right\"
\t\t\t data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t<div class=\"hamburger-box\">
\t\t\t\t<div class=\"hamburger-inner\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"{{ 'home'|page }}\" title=\"{{'Accueil'|_}}\">
\t\t\t\t\t\t{{'Accueil'|_}}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"{{ 'a-propos'|page }}\" title=\"{{'À Propos'|_}}\">
\t\t\t\t\t\t{{'À Propos'|_}}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"{{ 'residentielle'|page }}\" title=\"{{'Résidentielle'|_}}\">
\t\t\t\t\t\t{{'Résidentielle'|_}}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item mx-auto\">
\t\t\t\t\t<a class=\"nav-link d-flex align-items-center\" href=\"{{ 'commerciale'|page }}\" title=\"{{'Commerciale'|_}}\">
\t\t\t\t\t\t{{'Commerciale'|_}}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/partials/navbar.htm", "");
    }
}
