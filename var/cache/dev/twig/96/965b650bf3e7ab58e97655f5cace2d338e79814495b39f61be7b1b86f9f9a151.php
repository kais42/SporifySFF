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

/* pages/user/login.html.twig */
class __TwigTemplate_65f4a0238430566842bba96c24442167eb55f53ec65cc86939de6b93b2817bf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/login.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "<title>Login</title>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Log in or register</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Pages</a></div>
        <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">Log In</span></div>
      </div>
    </div>
  </div>
</section>
<!-- Login/Register-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-content\">
      <div class=\"col-md-6\">
        <div class=\"box box-form\">
          <div class=\"box-form-header\">
            <div class=\"box-form-title h2\">Log In</div>
            <div class=\"box-form-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</div>
          </div>
          <div class=\"box-form-body box-form-body-primary\">
            <div class=\"row row-15 row-gutters-14\">
              <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        echo "\" method=\"POST\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email</label>
                    <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" placeholder=\"Email\">
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">Password</label>
                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"password\" placeholder=\"Password\">
                  </div>
                </div>
                <div class=\"col-12 mt-1\">
                  <div class=\"d-flex flex-wrap justify-content-between\">
                    <div class=\"custom-control custom-checkbox mr-2\">
                      <input class=\"custom-control-input\" type=\"checkbox\" id=\"r4l30md9md\" name=\"login-check\" checked>
                      <label class=\"custom-control-label\" for=\"r4l30md9md\">Remember Me
                      </label>
                    </div>
                    <div><span>Forgot your password? </span><a href=\"#\">Click Here</a></div>
                  </div>
                </div>
                <div class=\"col-12 mt-xl-2\">
                  <button class=\"btn btn-block\">Sign in</button>
                </div>
              </form>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-facebook\"><span class=\"btn-icon mdi-facebook\"></span><span>Sing in via facebook</span></button>
              </div>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-twitter\"><span class=\"btn-icon mdi-twitter\"></span><span>Sing in via twitter</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"box box-form box-form-tertiary\">
          <div class=\"box-form-header\">
            <div class=\"box-form-title h2\">Register Now</div>
            <div class=\"box-form-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
          </div>
          <div class=\"box-form-body box-form-body-primary\">
            <div class=\"row row-15 row-gutters-14\">
              <form action=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\" method=\"POST\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email</label>
                    <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" placeholder=\"Email\">
                    ";
        // line 83
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("email", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 83, $this->source); })()))))) {
            // line 84
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>
                    ";
        }
        // line 86
        echo "                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">Password</label>
                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"password\" placeholder=\"Password\">
                    ";
        // line 92
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("password", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 92, $this->source); })()))))) {
            // line 93
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 93, $this->source); })()), "password", [], "any", false, false, false, 93), "html", null, true);
            echo "</span>
                    ";
        }
        // line 95
        echo "                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"confirm_password\">Confirm Password</label>
                    <input class=\"form-control\" id=\"confirm_password\" type=\"password\" name=\"confirm_password\" placeholder=\"Confirm Password\">
                    ";
        // line 101
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("confirm_password", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 101, $this->source); })()))))) {
            // line 102
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 102, $this->source); })()), "confirm_password", [], "any", false, false, false, 102), "html", null, true);
            echo "</span>
                    ";
        }
        // line 104
        echo "                  </div>
                </div>
                <div class=\"col-12 mt-2\">
                  <button class=\"btn btn-block btn-success\">Register</button>
                </div>
              </form>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-facebook\"><span class=\"btn-icon mdi-facebook\"></span><span>Sing in via facebook</span></button>
              </div>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-twitter\"><span class=\"btn-icon mdi-twitter\"></span><span>Sing in via twitter</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 104,  207 => 102,  205 => 101,  197 => 95,  191 => 93,  189 => 92,  181 => 86,  175 => 84,  173 => 83,  165 => 78,  117 => 33,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Login</title>
{% endblock %}

{% block body %}
<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Log in or register</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Pages</a></div>
        <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">Log In</span></div>
      </div>
    </div>
  </div>
</section>
<!-- Login/Register-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-content\">
      <div class=\"col-md-6\">
        <div class=\"box box-form\">
          <div class=\"box-form-header\">
            <div class=\"box-form-title h2\">Log In</div>
            <div class=\"box-form-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</div>
          </div>
          <div class=\"box-form-body box-form-body-primary\">
            <div class=\"row row-15 row-gutters-14\">
              <form action=\"{{ path('signin') }}\" method=\"POST\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email</label>
                    <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" placeholder=\"Email\">
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">Password</label>
                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"password\" placeholder=\"Password\">
                  </div>
                </div>
                <div class=\"col-12 mt-1\">
                  <div class=\"d-flex flex-wrap justify-content-between\">
                    <div class=\"custom-control custom-checkbox mr-2\">
                      <input class=\"custom-control-input\" type=\"checkbox\" id=\"r4l30md9md\" name=\"login-check\" checked>
                      <label class=\"custom-control-label\" for=\"r4l30md9md\">Remember Me
                      </label>
                    </div>
                    <div><span>Forgot your password? </span><a href=\"#\">Click Here</a></div>
                  </div>
                </div>
                <div class=\"col-12 mt-xl-2\">
                  <button class=\"btn btn-block\">Sign in</button>
                </div>
              </form>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-facebook\"><span class=\"btn-icon mdi-facebook\"></span><span>Sing in via facebook</span></button>
              </div>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-twitter\"><span class=\"btn-icon mdi-twitter\"></span><span>Sing in via twitter</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-6\">
        <div class=\"box box-form box-form-tertiary\">
          <div class=\"box-form-header\">
            <div class=\"box-form-title h2\">Register Now</div>
            <div class=\"box-form-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</div>
          </div>
          <div class=\"box-form-body box-form-body-primary\">
            <div class=\"row row-15 row-gutters-14\">
              <form action=\"{{ path('signup') }}\" method=\"POST\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"email\">Email</label>
                    <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" placeholder=\"Email\">
                    {% if (errors is defined) and ('email' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.email }}</span>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">Password</label>
                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"password\" placeholder=\"Password\">
                    {% if (errors is defined) and ('password' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.password }}</span>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\" for=\"confirm_password\">Confirm Password</label>
                    <input class=\"form-control\" id=\"confirm_password\" type=\"password\" name=\"confirm_password\" placeholder=\"Confirm Password\">
                    {% if (errors is defined) and ('confirm_password' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.confirm_password }}</span>
                    {% endif %}
                  </div>
                </div>
                <div class=\"col-12 mt-2\">
                  <button class=\"btn btn-block btn-success\">Register</button>
                </div>
              </form>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-facebook\"><span class=\"btn-icon mdi-facebook\"></span><span>Sing in via facebook</span></button>
              </div>
              <div class=\"col-xl-6 mt-xl-2\">
                <button class=\"btn btn-block btn-twitter\"><span class=\"btn-icon mdi-twitter\"></span><span>Sing in via twitter</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}
", "pages/user/login.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\user\\login.html.twig");
    }
}
