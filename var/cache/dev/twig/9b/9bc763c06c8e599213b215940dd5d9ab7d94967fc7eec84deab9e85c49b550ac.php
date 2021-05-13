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

/* pages/admin/product/create.html.twig */
class __TwigTemplate_5e3e86a08edfc2fd8b2ed24e4a34c8cce070ab34363426b3f20402064476d36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subtitle' => [$this, 'block_subtitle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/create.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/product/create.html.twig", 1);
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
        echo "<title>Product - Admin</title>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        // line 8
        echo "<a class=\"navbar-brand\" href=\"javascript:;\">Products</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\"> Create Product</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_store");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"row\">
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Name</label>
                  ";
        // line 25
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("name", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 25, $this->source); })()))))) {
            // line 26
            echo "                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 28
            echo "                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
                  ";
        }
        // line 30
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("name", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 30, $this->source); })()))))) {
            // line 31
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
                  ";
        }
        // line 33
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"description\">Description</label>
                  ";
        // line 38
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("description", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 38, $this->source); })()))))) {
            // line 39
            echo "                  <textarea class=\"form-control textarea\" name=\"description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</textarea>
                  ";
        } else {
            // line 41
            echo "                  <textarea class=\"form-control textarea\" name=\"description\"></textarea>
                  ";
        }
        // line 43
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("description", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 43, $this->source); })()))))) {
            // line 44
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"quantity\">Quantity</label>
                  ";
        // line 51
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("quantity", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 51, $this->source); })()))))) {
            // line 52
            echo "                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 52, $this->source); })()), "quantity", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 54
            echo "                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\">
                  ";
        }
        // line 56
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("quantity", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 56, $this->source); })()))))) {
            // line 57
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 57, $this->source); })()), "quantity", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>
                  ";
        }
        // line 59
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"price\">Price</label>
                  ";
        // line 64
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("price", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 64, $this->source); })()))))) {
            // line 65
            echo "                  <input type=\"text\" class=\"form-control\" name=\"price\" id=\"price\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 67
            echo "                  <input type=\"text\" class=\"form-control\" name=\"price\" id=\"price\">
                  ";
        }
        // line 69
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("price", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 69, $this->source); })()))))) {
            // line 70
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 70, $this->source); })()), "price", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
                  ";
        }
        // line 72
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Type</label>
                  <select name=\"type\" class=\"custom-select\" id=\"type\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 79
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Size</label>
                  <select name=\"size\" class=\"custom-select\" id=\"size\">
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 89
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Color</label>
                  <select name=\"color\" class=\"custom-select\" id=\"color\">
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 99
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"supplier\">Supplier</label>
                  ";
        // line 107
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("supplier", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 107, $this->source); })()))))) {
            // line 108
            echo "                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 108, $this->source); })()), "supplier", [], "any", false, false, false, 108), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 110
            echo "                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\">
                  ";
        }
        // line 112
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("supplier", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 112, $this->source); })()))))) {
            // line 113
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 113, $this->source); })()), "supplier", [], "any", false, false, false, 113), "html", null, true);
            echo "</span>
                  ";
        }
        // line 115
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"custom-file my-3\">
                  <input type=\"file\" class=\"custom-file-input\" id=\"image\" name=\"image\">
                  <label class=\"custom-file-label\" for=\"image\">Choose file</label>
                  ";
        // line 121
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("image", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 121, $this->source); })()))))) {
            // line 122
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 122, $this->source); })()), "image", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
                  ";
        }
        // line 124
        echo "                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"d-flex justify-content-center my-3\">
                <a class=\"btn btn-default btn-round text-white\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">Cancel</a>
                <button type=\"submit\" class=\"btn btn-primary btn-round\">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        echo "<script>
  // Add the following code if you want the name of the file appear on select
  \$(\".custom-file-input\").on(\"change\", function() {
    var fileName = \$(this).val().split(\"\\\\\").pop();
    \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
  });
  if (\$(\"#type option:selected\").text() === 'Équipement' || \$(\"#type option:selected\").text() === 'Accessoires') {
    \$(\"#size\").prop('disabled', 'disabled');
    \$(\"#color\").prop('disabled', 'disabled');
  }
  else {
    \$(\"#size\").prop('disabled', false);
    \$(\"#color\").prop('disabled', false);
  }
  \$(document).ready(function(){
    \$(\"#type\").change(function(event){
      console.log(event.target.value);
      if (event.target.value === 'Équipement' || event.target.value === 'Accessoires') {
        \$(\"#size\").prop('disabled', 'disabled');
        \$(\"#color\").prop('disabled', 'disabled');
      }
      else {
        \$(\"#size\").prop('disabled', false);
        \$(\"#color\").prop('disabled', false);
      }
    });
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin/product/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 142,  380 => 141,  359 => 129,  352 => 124,  346 => 122,  344 => 121,  336 => 115,  330 => 113,  327 => 112,  323 => 110,  317 => 108,  315 => 107,  307 => 101,  296 => 99,  292 => 98,  283 => 91,  272 => 89,  268 => 88,  259 => 81,  248 => 79,  244 => 78,  236 => 72,  230 => 70,  227 => 69,  223 => 67,  217 => 65,  215 => 64,  208 => 59,  202 => 57,  199 => 56,  195 => 54,  189 => 52,  187 => 51,  180 => 46,  174 => 44,  171 => 43,  167 => 41,  161 => 39,  159 => 38,  152 => 33,  146 => 31,  143 => 30,  139 => 28,  133 => 26,  131 => 25,  123 => 20,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Product - Admin</title>
{% endblock %}

{% block subtitle %}
<a class=\"navbar-brand\" href=\"javascript:;\">Products</a>
{% endblock %}

{% block body %}
<div class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\"> Create Product</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"{{ path('admin_product_store') }}\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"row\">
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Name</label>
                  {% if (old is defined) and ('name' in old|keys) %}
                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"{{ old.name }}\">
                  {% else %}
                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
                  {% endif %}
                  {% if (errors is defined) and ('name' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.name }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"description\">Description</label>
                  {% if (old is defined) and ('description' in old|keys) %}
                  <textarea class=\"form-control textarea\" name=\"description\">{{old.description}}</textarea>
                  {% else %}
                  <textarea class=\"form-control textarea\" name=\"description\"></textarea>
                  {% endif %}
                  {% if (errors is defined) and ('description' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.description }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"quantity\">Quantity</label>
                  {% if (old is defined) and ('quantity' in old|keys) %}
                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"{{ old.quantity }}\">
                  {% else %}
                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\">
                  {% endif %}
                  {% if (errors is defined) and ('quantity' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.quantity }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"price\">Price</label>
                  {% if (old is defined) and ('price' in old|keys) %}
                  <input type=\"text\" class=\"form-control\" name=\"price\" id=\"price\" value=\"{{ old.price }}\">
                  {% else %}
                  <input type=\"text\" class=\"form-control\" name=\"price\" id=\"price\">
                  {% endif %}
                  {% if (errors is defined) and ('price' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.price }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Type</label>
                  <select name=\"type\" class=\"custom-select\" id=\"type\">
                    {% for type in types %}
                    <option value=\"{{ type }}\">{{ type }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Size</label>
                  <select name=\"size\" class=\"custom-select\" id=\"size\">
                    {% for size in sizes %}
                    <option value=\"{{ size }}\">{{ size }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Color</label>
                  <select name=\"color\" class=\"custom-select\" id=\"color\">
                    {% for color in colors %}
                    <option value=\"{{ color.name }}\">{{ color.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"supplier\">Supplier</label>
                  {% if (old is defined) and ('supplier' in old|keys) %}
                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\" value=\"{{ old.supplier }}\">
                  {% else %}
                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\">
                  {% endif %}
                  {% if (errors is defined) and ('supplier' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.supplier }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"custom-file my-3\">
                  <input type=\"file\" class=\"custom-file-input\" id=\"image\" name=\"image\">
                  <label class=\"custom-file-label\" for=\"image\">Choose file</label>
                  {% if (errors is defined) and ('image' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.image }}</span>
                  {% endif %}
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"d-flex justify-content-center my-3\">
                <a class=\"btn btn-default btn-round text-white\" href=\"{{ path('admin_product') }}\">Cancel</a>
                <button type=\"submit\" class=\"btn btn-primary btn-round\">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
  // Add the following code if you want the name of the file appear on select
  \$(\".custom-file-input\").on(\"change\", function() {
    var fileName = \$(this).val().split(\"\\\\\").pop();
    \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
  });
  if (\$(\"#type option:selected\").text() === 'Équipement' || \$(\"#type option:selected\").text() === 'Accessoires') {
    \$(\"#size\").prop('disabled', 'disabled');
    \$(\"#color\").prop('disabled', 'disabled');
  }
  else {
    \$(\"#size\").prop('disabled', false);
    \$(\"#color\").prop('disabled', false);
  }
  \$(document).ready(function(){
    \$(\"#type\").change(function(event){
      console.log(event.target.value);
      if (event.target.value === 'Équipement' || event.target.value === 'Accessoires') {
        \$(\"#size\").prop('disabled', 'disabled');
        \$(\"#color\").prop('disabled', 'disabled');
      }
      else {
        \$(\"#size\").prop('disabled', false);
        \$(\"#color\").prop('disabled', false);
      }
    });
  });
</script>
{% endblock %}", "pages/admin/product/create.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\product\\create.html.twig");
    }
}
