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

/* layout/admin/footer.html.twig */
class __TwigTemplate_57527828e5b28ff29ad07de3e1ffc779917055f1893d648aa17c1f2dbbabe22b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer footer-black  footer-white \">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <nav class=\"footer-nav\">
        <ul>
          <li><a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a></li>
          <li><a href=\"https://www.creative-tim.com/blog\" target=\"_blank\">Blog</a></li>
          <li><a href=\"https://www.creative-tim.com/license\" target=\"_blank\">Licenses</a></li>
        </ul>
      </nav>
      <div class=\"credits ml-auto\">
        <span class=\"copyright\">
          © <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class=\"fa fa-heart heart\"></i> by Creative Tim
        </span>
      </div>
    </div>
  </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/admin/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer footer-black  footer-white \">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <nav class=\"footer-nav\">
        <ul>
          <li><a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a></li>
          <li><a href=\"https://www.creative-tim.com/blog\" target=\"_blank\">Blog</a></li>
          <li><a href=\"https://www.creative-tim.com/license\" target=\"_blank\">Licenses</a></li>
        </ul>
      </nav>
      <div class=\"credits ml-auto\">
        <span class=\"copyright\">
          © <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class=\"fa fa-heart heart\"></i> by Creative Tim
        </span>
      </div>
    </div>
  </div>
</footer>", "layout/admin/footer.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\layout\\admin\\footer.html.twig");
    }
}
