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

/* /Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/layouts/default.htm */
class __TwigTemplate_a6d85e86fbf2aab13f61116ef9bbea1ca8ec39a7f59e53586d0119cab255da60 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_title", [], "any", false, false, false, 6), "html", null, true);
        echo " | Plomberie J. Boulay inc.</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo " | Plomberie J. Boulay inc.\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta name=\"google-site-verification\" content=\"hNRQrKF0XaqxR5fLnc4pEupRThpDYRySao7qRKdkExs\" />
    <meta property=\"og:title\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "meta_title", [], "any", false, false, false, 13), "html", null, true);
        echo " | Plomberie J. Boulay inc.\" />
    <meta property=\"og:url\" content=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    ";
        // line 15
        if (($context["image_url"] ?? null)) {
            // line 16
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\">
    ";
        } else {
            // line 20
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\">
    ";
        }
        // line 24
        echo "    <meta property=\"og:image:height\" content=\"1200\">
    <meta property=\"og:image:width\" content=\"800\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "settings", [], "any", false, false, false, 27), "meta_description", [], "any", false, false, false, 27), "html", null, true);
        echo "\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Plomberie J. Boulay inc.\" />
    <meta name=\"twitter:title\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 30), "meta_title", [], "any", false, false, false, 30), "html", null, true);
        echo " | Plomberie J. Boulay inc.\">
    <meta name=\"twitter:description\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 31), "settings", [], "any", false, false, false, 31), "meta_description", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 39
        echo "\" rel=\"stylesheet\">
    ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 41
        echo "</head>
<body>
<header>
    ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</header>
<main id=\"page\">
    ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "</main>
<section id=\"contact\">
    ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "</section>
<footer class=\"footer\">
    ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 56
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 57
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 59
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/vendor/aos/js/aos.js", 3 => "assets/js/main.js"]);
        // line 64
        echo "\"></script>
";
        // line 65
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 67
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 67,  210 => 66,  199 => 65,  196 => 64,  193 => 59,  184 => 57,  181 => 56,  178 => 55,  174 => 54,  170 => 52,  166 => 51,  162 => 49,  160 => 48,  156 => 46,  151 => 45,  147 => 44,  142 => 41,  139 => 40,  136 => 39,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  116 => 31,  112 => 30,  106 => 27,  101 => 24,  96 => 22,  92 => 21,  87 => 20,  82 => 18,  78 => 17,  73 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ this.page.meta_title }} | Plomberie J. Boulay inc.</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }} | Plomberie J. Boulay inc.\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\"/>
    <meta name=\"google-site-verification\" content=\"hNRQrKF0XaqxR5fLnc4pEupRThpDYRySao7qRKdkExs\" />
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }} | Plomberie J. Boulay inc.\" />
    <meta property=\"og:url\" content=\"{{ ''|page }}\" />
    {% if image_url %}
    <meta property=\"og:image:secure_url\" content=\"{{ image_url }}\" />
    <meta property=\"og:image\" content=\"{{ image_url }}\" />
    <meta name=\"twitter:image\" content=\"{{ image_url }}\">
    {% else %}
    <meta property=\"og:image:secure_url\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\" />
    <meta property=\"og:image\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\" />
    <meta name=\"twitter:image\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\">
    {% endif %}
    <meta property=\"og:image:height\" content=\"1200\">
    <meta property=\"og:image:width\" content=\"800\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"{{ this.page.settings.meta_description }}\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Plomberie J. Boulay inc.\" />
    <meta name=\"twitter:title\" content=\"{{ this.page.meta_title }} | Plomberie J. Boulay inc.\">
    <meta name=\"twitter:description\" content=\"{{ this.page.settings.meta_description }}\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.png'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>
<header>
    {% partial 'header' %}
    {% partial 'navbar' %}
</header>
<main id=\"page\">
    {% page %}
</main>
<section id=\"contact\">
    {% partial 'contact' %}
</section>
<footer class=\"footer\">
    {% partial 'footer' %}
</footer>
{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}
<script src=\"{{ [
'assets/vendor/jquery/jquery-3.4.1.min.js',
'assets/vendor/bootstrap/js/bootstrap.min.js',
'assets/vendor/aos/js/aos.js',
'assets/js/main.js',
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/Users/alexandrefoisy/web sites/plomberie-j-boulay/themes/plomberie/layouts/default.htm", "");
    }
}
