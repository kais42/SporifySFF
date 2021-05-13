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

/* base_front.html.twig */
class __TwigTemplate_00259b4f382a2d66335051bcde1eec9bf8c5c7d34272f707ac353770889553d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>News 1</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta property=\"og:title\" content=\"Template Monster Admin Template\">
    <meta property=\"og:description\" content=\"brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.\">
    <meta property=\"og:image\" content=\"http://digipunk.netii.net/images/radar.gif\">
    <meta property=\"og:url\" content=\"http://digipunk.netii.net\">
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/components/base/base.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/components/base/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/components/base/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"page\">
";
        // line 21
        $this->loadTemplate("navbar_front.html.twig", "base_front.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "    ";
        $this->loadTemplate("footer.html.twig", "base_front.html.twig", 24)->display($context);
        // line 25
        echo "</div>
    <div class=\"preloader\">
        <div class=\"preloader-inner\">
            <svg class=\"preloader-svg\" width=\"200\" height=\"200\" viewbox=\"0 0 100 100\">
                <polyline class=\"line-cornered stroke-still\" points=\"0,0 100,0 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-still\" points=\"0,0 0,100 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-animation\" points=\"0,0 100,0 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-animation\" points=\"0,0 0,100 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
            </svg>
        </div>
    </div>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 23,  110 => 22,  86 => 25,  83 => 24,  80 => 22,  78 => 21,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>News 1</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta property=\"og:title\" content=\"Template Monster Admin Template\">
    <meta property=\"og:description\" content=\"brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.\">
    <meta property=\"og:image\" content=\"http://digipunk.netii.net/images/radar.gif\">
    <meta property=\"og:url\" content=\"http://digipunk.netii.net\">
    <link rel=\"icon\" href=\"{{ asset('front/images/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/components/base/base.css') }}\">
    <script src=\"{{ asset('front/components/base/core.min.js') }}\"></script>
    <script src=\"{{ asset('front/components/base/script.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"page\">
{% include 'navbar_front.html.twig' %}
    {% block content %}
    {% endblock %}
    {% include 'footer.html.twig' %}
</div>
    <div class=\"preloader\">
        <div class=\"preloader-inner\">
            <svg class=\"preloader-svg\" width=\"200\" height=\"200\" viewbox=\"0 0 100 100\">
                <polyline class=\"line-cornered stroke-still\" points=\"0,0 100,0 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-still\" points=\"0,0 0,100 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-animation\" points=\"0,0 100,0 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
                <polyline class=\"line-cornered stroke-animation\" points=\"0,0 0,100 100,100\" stroke-width=\"10\" fill=\"none\"></polyline>
            </svg>
        </div>
    </div>


</body>
</html>", "base_front.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\base_front.html.twig");
    }
}
