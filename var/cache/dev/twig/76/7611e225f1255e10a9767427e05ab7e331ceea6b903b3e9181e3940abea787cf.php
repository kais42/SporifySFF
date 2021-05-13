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

/* layout/admin/nav.html.twig */
class __TwigTemplate_403e0bb5fca0efa282180865a731115afaecec73374c52abb4e7144850c339bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'subtitle' => [$this, 'block_subtitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin/nav.html.twig"));

        // line 1
        echo "<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent\">
  <div class=\"container-fluid\">
    <div class=\"navbar-wrapper\">
      <div class=\"navbar-toggle\">
        <button type=\"button\" class=\"navbar-toggler\">
          <span class=\"navbar-toggler-bar bar1\"></span>
          <span class=\"navbar-toggler-bar bar2\"></span>
          <span class=\"navbar-toggler-bar bar3\"></span>
        </button>
      </div>
      ";
        // line 12
        $this->displayBlock('subtitle', $context, $blocks);
        // line 13
        echo "    </div>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
      <form>
        <div class=\"input-group no-border\">
          <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <i class=\"nc-icon nc-zoom-split\"></i>
            </div>
          </div>
        </div>
      </form>
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link btn-magnify\" href=\"javascript:;\">
            <i class=\"nc-icon nc-layout-11\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Stats</span>
            </p>
          </a>
        </li>
        <li class=\"nav-item btn-rotate dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"nc-icon nc-bell-55\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Some Actions</span>
            </p>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link btn-rotate\" href=\"javascript:;\">
            <i class=\"nc-icon nc-settings-gear-65\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Account</span>
            </p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/admin/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 12,  59 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent\">
  <div class=\"container-fluid\">
    <div class=\"navbar-wrapper\">
      <div class=\"navbar-toggle\">
        <button type=\"button\" class=\"navbar-toggler\">
          <span class=\"navbar-toggler-bar bar1\"></span>
          <span class=\"navbar-toggler-bar bar2\"></span>
          <span class=\"navbar-toggler-bar bar3\"></span>
        </button>
      </div>
      {% block subtitle %}{% endblock %}
    </div>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
      <span class=\"navbar-toggler-bar navbar-kebab\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
      <form>
        <div class=\"input-group no-border\">
          <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <i class=\"nc-icon nc-zoom-split\"></i>
            </div>
          </div>
        </div>
      </form>
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link btn-magnify\" href=\"javascript:;\">
            <i class=\"nc-icon nc-layout-11\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Stats</span>
            </p>
          </a>
        </li>
        <li class=\"nav-item btn-rotate dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"nc-icon nc-bell-55\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Some Actions</span>
            </p>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link btn-rotate\" href=\"javascript:;\">
            <i class=\"nc-icon nc-settings-gear-65\"></i>
            <p>
              <span class=\"d-lg-none d-md-block\">Account</span>
            </p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->", "layout/admin/nav.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\layout\\admin\\nav.html.twig");
    }
}
