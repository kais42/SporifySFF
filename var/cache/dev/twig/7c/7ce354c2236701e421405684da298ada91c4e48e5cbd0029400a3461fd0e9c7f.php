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

/* pages/admin/product/edit.html.twig */
class __TwigTemplate_aae5ab0ddb94e77926d4a0b7a01af8f1eba82bd3acdab0d1c79c4b57985a2189 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/edit.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/product/edit.html.twig", 1);
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
          <h4 class=\"card-title\"> Edit Product</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "getId", [], "any", false, false, false, 20)]), "html", null, true);
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
            echo "                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "getName", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
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
            echo "                  <textarea class=\"form-control textarea\" name=\"description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "getDescription", [], "any", false, false, false, 41), "html", null, true);
            echo "</textarea>
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
            echo "                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "getQuantity", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
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
            echo "                  <input type=\"number\" class=\"form-control\" name=\"price\" id=\"price\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 67
            echo "                  <input type=\"number\" class=\"form-control\" name=\"price\" id=\"price\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "getPrice", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
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
            echo "                      ";
            if ((0 === twig_compare($context["type"], twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "getType", [], "any", false, false, false, 79)))) {
                // line 80
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 82
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</option>
                      ";
            }
            // line 84
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Size</label>
                  <select name=\"size\" class=\"custom-select\" id=\"size\">
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 93
            echo "                      ";
            if ((0 === twig_compare($context["size"], twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "getSize", [], "any", false, false, false, 93)))) {
                // line 94
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 96
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "</option>
                      ";
            }
            // line 98
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Color</label>
                  <select name=\"color\" class=\"custom-select\" id=\"color\">
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 107
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "getColor", [], "any", false, false, false, 107)))) {
                // line 108
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 108), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 108), "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 110
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 110), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 110), "html", null, true);
                echo "</option>
                      ";
            }
            // line 112
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"supplier\">Supplier</label>
                  ";
        // line 119
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("supplier", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 119, $this->source); })()))))) {
            // line 120
            echo "                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 120, $this->source); })()), "supplier", [], "any", false, false, false, 120), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 122
            echo "                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 122, $this->source); })()), "getSupplier", [], "any", false, false, false, 122), "html", null, true);
            echo "\">
                  ";
        }
        // line 124
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("supplier", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 124, $this->source); })()))))) {
            // line 125
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 125, $this->source); })()), "supplier", [], "any", false, false, false, 125), "html", null, true);
            echo "</span>
                  ";
        }
        // line 127
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"custom-file my-3\">
                  <input type=\"file\" class=\"custom-file-input\" id=\"image\" name=\"image\">
                  <label class=\"custom-file-label\" for=\"image\">Choose file</label>
                  ";
        // line 133
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("image", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 133, $this->source); })()))))) {
            // line 134
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 134, $this->source); })()), "image", [], "any", false, false, false, 134), "html", null, true);
            echo "</span>
                  ";
        }
        // line 136
        echo "                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"d-flex justify-content-center my-3\">
                <a class=\"btn btn-default btn-round text-white\" href=\"";
        // line 141
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

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
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
        return "pages/admin/product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 154,  432 => 153,  411 => 141,  404 => 136,  398 => 134,  396 => 133,  388 => 127,  382 => 125,  379 => 124,  373 => 122,  367 => 120,  365 => 119,  357 => 113,  351 => 112,  343 => 110,  335 => 108,  332 => 107,  328 => 106,  319 => 99,  313 => 98,  305 => 96,  297 => 94,  294 => 93,  290 => 92,  281 => 85,  275 => 84,  267 => 82,  259 => 80,  256 => 79,  252 => 78,  244 => 72,  238 => 70,  235 => 69,  229 => 67,  223 => 65,  221 => 64,  214 => 59,  208 => 57,  205 => 56,  199 => 54,  193 => 52,  191 => 51,  184 => 46,  178 => 44,  175 => 43,  169 => 41,  163 => 39,  161 => 38,  154 => 33,  148 => 31,  145 => 30,  139 => 28,  133 => 26,  131 => 25,  123 => 20,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
          <h4 class=\"card-title\"> Edit Product</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"{{ path('admin_product_update', {'id': product.getId}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"row\">
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Name</label>
                  {% if (old is defined) and ('name' in old|keys) %}
                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"{{ old.name }}\">
                  {% else %}
                  <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"{{ product.getName }}\">
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
                  <textarea class=\"form-control textarea\" name=\"description\">{{product.getDescription}}</textarea>
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
                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"{{ product.getQuantity }}\">
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
                  <input type=\"number\" class=\"form-control\" name=\"price\" id=\"price\" value=\"{{ old.price }}\">
                  {% else %}
                  <input type=\"number\" class=\"form-control\" name=\"price\" id=\"price\" value=\"{{ product.getPrice }}\">
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
                      {% if type == product.getType %}
                        <option value=\"{{ type }}\" selected>{{ type }}</option>
                      {% else %}
                      <option value=\"{{ type }}\">{{ type }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Size</label>
                  <select name=\"size\" class=\"custom-select\" id=\"size\">
                    {% for size in sizes %}
                      {% if size == product.getSize %}
                        <option value=\"{{ size }}\" selected>{{ size }}</option>
                      {% else %}
                      <option value=\"{{ size }}\">{{ size }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Color</label>
                  <select name=\"color\" class=\"custom-select\" id=\"color\">
                    {% for color in colors %}
                      {% if color.name == product.getColor %}
                        <option value=\"{{ color.name }}\" selected>{{ color.name }}</option>
                      {% else %}
                      <option value=\"{{ color.name }}\">{{ color.name }}</option>
                      {% endif %}
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
                  <input type=\"text\" class=\"form-control\" name=\"supplier\" id=\"supplier\" value=\"{{ product.getSupplier }}\">
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
{% endblock %}", "pages/admin/product/edit.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\product\\edit.html.twig");
    }
}
