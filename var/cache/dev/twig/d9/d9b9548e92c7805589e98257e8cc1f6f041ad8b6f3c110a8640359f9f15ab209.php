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

/* layout/index.html.twig */
class __TwigTemplate_5d94d31f8bdc03c63d2529609f69948b2f3e71310896987c1200ea3c3eb0bdc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
  ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta property=\"og:title\" content=\"Template Monster Admin Template\">
  <meta property=\"og:description\" content=\"brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.\">
  <meta property=\"og:image\" content=\"http://digipunk.netii.net/images/radar.gif\">
  <meta property=\"og:url\" content=\"http://digipunk.netii.net\">
  <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("components/base/base.css"), "html", null, true);
        echo "\">

  <!-- CSS Files -->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/paper-dashboard.css?v=2.0.1"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("components/base/core.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("components/base/script.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
\t<div class=\"page\">
    ";
        // line 28
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "
    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "layout/footer.html.twig");
        echo "
\t</div>
  <!-- Preloader-->
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
  <!--   Core JS Files   -->
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
  
  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 49,  193 => 29,  175 => 20,  157 => 4,  146 => 50,  144 => 49,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  109 => 30,  107 => 29,  103 => 28,  95 => 23,  91 => 22,  88 => 21,  86 => 20,  82 => 19,  77 => 17,  73 => 16,  67 => 13,  63 => 12,  54 => 5,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
  {% block title %}{% endblock %}
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta property=\"og:title\" content=\"Template Monster Admin Template\">
  <meta property=\"og:description\" content=\"brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.\">
  <meta property=\"og:image\" content=\"http://digipunk.netii.net/images/radar.gif\">
  <meta property=\"og:url\" content=\"http://digipunk.netii.net\">
  <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" href=\"{{ asset('components/base/base.css') }}\">

  <!-- CSS Files -->
  <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/paper-dashboard.css?v=2.0.1') }}\" rel=\"stylesheet\" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=\"{{ asset('assets/demo/demo.css') }}\" rel=\"stylesheet\" />
  {% block stylesheets %}{% endblock %}

  <script src=\"{{ asset('components/base/core.min.js') }}\"></script>
  <script src=\"{{ asset('components/base/script.js') }}\"></script>
</head>

<body>
\t<div class=\"page\">
    {{ include('layout/header.html.twig') }}
    {% block body %}{% endblock %}
    {{ include('layout/footer.html.twig') }}
\t</div>
  <!-- Preloader-->
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
  <!--   Core JS Files   -->
  <script src=\"{{ asset('assets/js/core/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}\"></script>
  
  {% block javascripts %}{% endblock %}
</body>
</html>", "layout/index.html.twig", "C:\\xampp\\htdocs\\SporifySF\\templates\\layout\\index.html.twig");
    }
}
