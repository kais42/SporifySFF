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

/* pages/admin/product/index.html.twig */
class __TwigTemplate_15d554acd20d487cb9ac72ca8966c2898b110d02cbb0d02096437fc8c9cdb520 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/product/index.html.twig", 1);
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
          <h4 class=\"card-title\"> Products</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_search");
        echo "\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Type</label>
                  <select class=\"custom-select rounded-0\" name=\"type\">
                    <option value=\"0\">All Types</option>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 28
            echo "                      ";
            if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("type", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 28, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), $context["type"])))) {
                // line 29
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 31
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</option>
                      ";
            }
            // line 33
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Size</label>
                  <select class=\"custom-select rounded-0\" name=\"size\">
                    <option value=\"0\">All Sizes</option>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 43
            echo "                      ";
            if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("size", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 43, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 43, $this->source); })()), "size", [], "any", false, false, false, 43), $context["size"])))) {
                // line 44
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 46
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "</option>
                      ";
            }
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Color</label>
                  <select class=\"custom-select rounded-0\" name=\"color\">
                    <option value=\"0\">All Colors</option>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 58
            echo "                      ";
            if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("color", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 58, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 58, $this->source); })()), "color", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 58))))) {
                // line 59
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 61
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</option>
                      ";
            }
            // line 63
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                  </select>
                </div>
              </div>
              <div class=\"mb-3 col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary btn-round text-white\">Search</button>
              </div>
            </div>
          </form>
          <div class=\"mb-3\" style=\"float: right;\">
            <a class=\"btn btn-primary btn-round text-white\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_create");
        echo "\">Create Product</a>
          </div>
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead class=\" text-primary\">
                <th>
                  Id
                </th>
                <th>
                  Name
                </th>
                <th>
                  Image
                </th>
                <th>
                  Size
                </th>
                <th>
                  Color
                </th>
                <th>
                  Type
                </th>
                <th>
                  Quantity
                </th>
                <th>
                  Price
                </th>
                <th>
                  Supplier
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 111
            echo "                <tr>
                  <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                  <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                  <td><img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 114)), "html", null, true);
            echo "\" alt=\"Product Image\" style=\"height: 50px;\"></td>
                  <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getSize", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                  <td style=\"color: ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "ocolor", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "ocolor", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                  <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getType", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                  <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                  <td>\$";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 119), "html", null, true);
            echo "</td>
                  <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getSupplier", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\" class=\"mr-3\" title=\"Edit\"><i class=\"fa fa-edit\"></i></a>
                    <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 123)]), "html", null, true);
            echo "\" class=\"\" title=\"Delete\"><i class=\"fa fa-trash\" style=\"color: red;\"></i></a>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        if ((isset($context["less_products"]) || array_key_exists("less_products", $context))) {
            // line 139
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["less_products"]) || array_key_exists("less_products", $context) ? $context["less_products"] : (function () { throw new RuntimeError('Variable "less_products" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 140
                echo "  <script>
    demo.showNotification('top','right', 'Quantity of the product ";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "any", false, false, false, 141), "html", null, true);
                echo " is less than 5');
  </script>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 141,  386 => 140,  381 => 139,  379 => 138,  369 => 137,  351 => 127,  341 => 123,  337 => 122,  332 => 120,  328 => 119,  324 => 118,  320 => 117,  314 => 116,  310 => 115,  306 => 114,  302 => 113,  298 => 112,  295 => 111,  291 => 110,  251 => 73,  240 => 64,  234 => 63,  226 => 61,  218 => 59,  215 => 58,  211 => 57,  201 => 49,  195 => 48,  187 => 46,  179 => 44,  176 => 43,  172 => 42,  162 => 34,  156 => 33,  148 => 31,  140 => 29,  137 => 28,  133 => 27,  123 => 20,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
          <h4 class=\"card-title\"> Products</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"{{ path('admin_product_search') }}\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Type</label>
                  <select class=\"custom-select rounded-0\" name=\"type\">
                    <option value=\"0\">All Types</option>
                    {% for type in types %}
                      {% if (filter is defined) and ('type' in filter|keys) and (filter.type == type) %}
                      <option value=\"{{ type }}\" selected>{{ type }}</option>
                      {% else %}
                      <option value=\"{{ type }}\">{{ type }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Size</label>
                  <select class=\"custom-select rounded-0\" name=\"size\">
                    <option value=\"0\">All Sizes</option>
                    {% for size in sizes %}
                      {% if (filter is defined) and ('size' in filter|keys) and (filter.size == size) %}
                      <option value=\"{{ size }}\" selected>{{ size }}</option>
                      {% else %}
                      <option value=\"{{ size }}\">{{ size }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"name\">Color</label>
                  <select class=\"custom-select rounded-0\" name=\"color\">
                    <option value=\"0\">All Colors</option>
                    {% for color in colors %}
                      {% if (filter is defined) and ('color' in filter|keys) and (filter.color == color.name) %}
                      <option value=\"{{ color.name }}\" selected>{{ color.name }}</option>
                      {% else %}
                      <option value=\"{{ color.name }}\">{{ color.name }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"mb-3 col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary btn-round text-white\">Search</button>
              </div>
            </div>
          </form>
          <div class=\"mb-3\" style=\"float: right;\">
            <a class=\"btn btn-primary btn-round text-white\" href=\"{{ path('admin_product_create') }}\">Create Product</a>
          </div>
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead class=\" text-primary\">
                <th>
                  Id
                </th>
                <th>
                  Name
                </th>
                <th>
                  Image
                </th>
                <th>
                  Size
                </th>
                <th>
                  Color
                </th>
                <th>
                  Type
                </th>
                <th>
                  Quantity
                </th>
                <th>
                  Price
                </th>
                <th>
                  Supplier
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                {% for product in products %}
                <tr>
                  <td>{{ product.getId }}</td>
                  <td>{{ product.getName }}</td>
                  <td><img src=\"{{ asset(product.getImage) }}\" alt=\"Product Image\" style=\"height: 50px;\"></td>
                  <td>{{ product.getSize }}</td>
                  <td style=\"color: {{ product.ocolor.value }}\">{{ product.ocolor.name }}</td>
                  <td>{{ product.getType }}</td>
                  <td>{{ product.getQuantity }}</td>
                  <td>\${{ product.getPrice }}</td>
                  <td>{{ product.getSupplier }}</td>
                  <td>
                    <a href=\"{{ path('admin_product_edit', {'id': product.getId}) }}\" class=\"mr-3\" title=\"Edit\"><i class=\"fa fa-edit\"></i></a>
                    <a href=\"{{ path('admin_product_delete', {'id': product.getId}) }}\" class=\"\" title=\"Delete\"><i class=\"fa fa-trash\" style=\"color: red;\"></i></a>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
{% if less_products is defined %}
  {% for item in less_products %}
  <script>
    demo.showNotification('top','right', 'Quantity of the product {{item.getName}} is less than 5');
  </script>
  {% endfor %}
{% endif %}
{% endblock %}", "pages/admin/product/index.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\pages\\admin\\product\\index.html.twig");
    }
}
