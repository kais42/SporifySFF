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

/* pages/product/index.html.twig */
class __TwigTemplate_db96344c098b45b692952779c91f319b0728b641851461077dc4eaab87513128 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/product/index.html.twig", 1);
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
        echo "<title>Product - All</title>
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
    <h2 class=\"breadcrumb-section-title\">Products</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Product</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Product-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-40 flex-md-row-reverse\">
      <div class=\"col-md-8\">
        <div class=\"group-15 d-flex flex-wrap justify-content-between align-items-center\">
          <div>
            <h3>Product</h3>
          </div>
          <div>
          </div>
        </div>
        <div class=\"row row-30 row-lg-45 row-content\">
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "          <div class=\"col-sm-6\">
            <!-- Product-->
            <div class=\"product product-simple\">
              <div class=\"product-media\"><img class=\"product-img\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 37)), "html", null, true);
            echo "\" alt=\"\" width=\"252\" height=\"255\"/>
                <div class=\"product-btns\">
                  <a class=\"product-btn mdi-cart\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"></a>
                  <a class=\"product-btn product-btn-tertiary mdi-magnify\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"></a>
                </div>
              </div>
              <div class=\"product-title h4\">
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
              </div>
              <div class=\"product-price\">\$";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"widget\">
          <h3 class=\"widget-title title-2\">Types</h3>
          <div class=\"widget-body\">
            <div class=\"widget-list\">
              <a class=\"widget-list-link link link-dark\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">
                <span>All Products</span><span>";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 58, $this->source); })())), "html", null, true);
        echo "</span>
              </a>
              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 61
            echo "              <a class=\"widget-list-link link link-dark\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_filter_by_type", ["type" => twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                <span>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "product_count", [], "any", false, false, false, 62), "html", null, true);
            echo "</span>
              </a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          </div>
        </div>
        <form action=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_search");
        echo "\" method=\"POST\">
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Filter by price</h3>
            <div class=\"widget-body widget-body-bordered\">
              <!-- RD Range-->
              ";
        // line 72
        if (((isset($context["max_price"]) || array_key_exists("max_price", $context)) && (isset($context["min_price"]) || array_key_exists("min_price", $context)))) {
            // line 73
            echo "              <div class=\"rd-range\" data-min=\"0\" data-max=\"999\" data-min-diff=\"10\" data-start=\"[";
            echo twig_escape_filter($this->env, (isset($context["min_price"]) || array_key_exists("min_price", $context) ? $context["min_price"] : (function () { throw new RuntimeError('Variable "min_price" does not exist.', 73, $this->source); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["max_price"]) || array_key_exists("max_price", $context) ? $context["max_price"] : (function () { throw new RuntimeError('Variable "max_price" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "]\" data-step=\"1\" data-input=\".rd-range-input-value-1\" data-input-2=\".rd-range-input-value-2\"></div>
              ";
        } else {
            // line 75
            echo "              <div class=\"rd-range\" data-min=\"0\" data-max=\"999\" data-min-diff=\"10\" data-start=\"[0, 999]\" data-step=\"1\" data-input=\".rd-range-input-value-1\" data-input-2=\".rd-range-input-value-2\"></div>
              ";
        }
        // line 77
        echo "              <div class=\"rd-range-meta\">
                <div class=\"rd-range-value\">
                  <div class=\"rd-range-form-wrap\">
                    <div class=\"rd-range-label\">Price:</div>
                  </div>
                  <div class=\"rd-range-form-wrap\"><span>\$</span>
                    ";
        // line 83
        if ((isset($context["min_price"]) || array_key_exists("min_price", $context))) {
            // line 84
            echo "                    <input class=\"rd-range-input rd-range-input-value-1 rd-range-input-2-symbol\" type=\"text\" name=\"min_price\" size=\"1\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["min_price"]) || array_key_exists("min_price", $context) ? $context["min_price"] : (function () { throw new RuntimeError('Variable "min_price" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 86
            echo "                    <input class=\"rd-range-input rd-range-input-value-1 rd-range-input-2-symbol\" type=\"text\" name=\"min_price\" size=\"1\">
                    ";
        }
        // line 88
        echo "                  </div>
                  <div class=\"rd-range-form-wrap\"><span class=\"mx-1\"> - </span></div>
                  <div class=\"rd-range-form-wrap\"><span>\$</span>
                    ";
        // line 91
        if ((isset($context["max_price"]) || array_key_exists("max_price", $context))) {
            // line 92
            echo "                    <input class=\"rd-range-input rd-range-input-value-2\" type=\"text\" name=\"max_price\" size=\"1\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["max_price"]) || array_key_exists("max_price", $context) ? $context["max_price"] : (function () { throw new RuntimeError('Variable "max_price" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 94
            echo "                    <input class=\"rd-range-input rd-range-input-value-2\" type=\"text\" name=\"max_price\" size=\"1\">
                    ";
        }
        // line 96
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Sizes</h3>
            <div class=\"widget-body widget-body-bordered\">
              <div class=\"group-20x15 d-flex flex-wrap\">
                <div>
                  <div class=\"custom-control custom-radio\">
                    <input class=\"custom-control-input\" type=\"radio\" id=\"all\" value=\"0\" name=\"size\" checked>
                    <label class=\"custom-control-label\" for=\"all\">See All
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    ";
        // line 114
        if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("size", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 114, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 114, $this->source); })()), "size", [], "any", false, false, false, 114), "l")))) {
            // line 115
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"l\" value=\"l\" name=\"size\" checked>
                    ";
        } else {
            // line 117
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"l\" value=\"l\" name=\"size\">
                    ";
        }
        // line 119
        echo "                    <label class=\"custom-control-label\" for=\"l\">Large
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    ";
        // line 125
        if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("size", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 125, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 125, $this->source); })()), "size", [], "any", false, false, false, 125), "m")))) {
            // line 126
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"m\" value=\"m\" name=\"size\" checked>
                    ";
        } else {
            // line 128
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"m\" value=\"m\" name=\"size\">
                    ";
        }
        // line 130
        echo "                    <label class=\"custom-control-label\" for=\"m\">Medium
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    ";
        // line 136
        if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("size", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 136, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 136, $this->source); })()), "size", [], "any", false, false, false, 136), "s")))) {
            // line 137
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"s\" value=\"s\" name=\"size\" checked>
                    ";
        } else {
            // line 139
            echo "                    <input class=\"custom-control-input\" type=\"radio\" id=\"s\" value=\"s\" name=\"size\">
                    ";
        }
        // line 141
        echo "                    <label class=\"custom-control-label\" for=\"s\">Small
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Colors</h3>
            <div class=\"widget-body widget-body-bordered\">
              <div class=\"group-15 d-flex flex-wrap\">
                <div class=\"checkbox-color\">
                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"all-color\" value=\"0\" checked>
                  <label class=\"checkbox-color-label\" style=\"background-color: white\" for=\"all-color\">All</label>
                </div>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 157
            echo "                <div class=\"checkbox-color\">
                  ";
            // line 158
            if ((((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("color", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 158, $this->source); })())))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 158, $this->source); })()), "color", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 158))))) {
                // line 159
                echo "                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 159), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 159), "html", null, true);
                echo "\" checked>
                  ";
            } else {
                // line 161
                echo "                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 161), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 161), "html", null, true);
                echo "\">
                  ";
            }
            // line 163
            echo "                  <label class=\"checkbox-color-label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "value", [], "any", false, false, false, 163), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 163), "html", null, true);
            echo "\"></label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-sm btn-outline float-right\">filter</button>
          </div>
        </form>
        <div class=\"widget pt-5\">
          <h3 class=\"widget-title title-2\">Popular products</h3>
          <div class=\"widget-body\">
            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 175
            echo "            <!-- Product-->
            <!-- <div class=\"product product-small-rating\">
              <div class=\"product-media\"><img class=\"product-img\" src=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "any", false, false, false, 177), "html", null, true);
            echo "\" alt=\"\" width=\"52\" height=\"52\"/>
              </div>
              <div class=\"product-body\">
                <div class=\"product-title h4\"><a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 180)]), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 180), "html", null, true);
            echo "</span></a></div>
                <div class=\"product-rating\"><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star-half\"></span>
                </div>
                <div class=\"product-price\">\$";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "any", false, false, false, 183), "html", null, true);
            echo "</div>
              </div>
            </div> -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "          </div>
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
        return "pages/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 187,  415 => 183,  407 => 180,  401 => 177,  397 => 175,  393 => 174,  383 => 166,  371 => 163,  363 => 161,  355 => 159,  353 => 158,  350 => 157,  346 => 156,  329 => 141,  325 => 139,  321 => 137,  319 => 136,  311 => 130,  307 => 128,  303 => 126,  301 => 125,  293 => 119,  289 => 117,  285 => 115,  283 => 114,  263 => 96,  259 => 94,  253 => 92,  251 => 91,  246 => 88,  242 => 86,  236 => 84,  234 => 83,  226 => 77,  222 => 75,  214 => 73,  212 => 72,  204 => 67,  200 => 65,  189 => 62,  184 => 61,  180 => 60,  175 => 58,  171 => 57,  162 => 50,  152 => 46,  145 => 44,  138 => 40,  134 => 39,  129 => 37,  124 => 34,  120 => 33,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Product - All</title>
{% endblock %}

{% block body %}
<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Products</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"{{ path('product') }}\">Product</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Product-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-40 flex-md-row-reverse\">
      <div class=\"col-md-8\">
        <div class=\"group-15 d-flex flex-wrap justify-content-between align-items-center\">
          <div>
            <h3>Product</h3>
          </div>
          <div>
          </div>
        </div>
        <div class=\"row row-30 row-lg-45 row-content\">
          {% for product in products %}
          <div class=\"col-sm-6\">
            <!-- Product-->
            <div class=\"product product-simple\">
              <div class=\"product-media\"><img class=\"product-img\" src=\"{{ asset(product.getImage) }}\" alt=\"\" width=\"252\" height=\"255\"/>
                <div class=\"product-btns\">
                  <a class=\"product-btn mdi-cart\" href=\"{{ path('cart_add', {'id': product.getId}) }}\"></a>
                  <a class=\"product-btn product-btn-tertiary mdi-magnify\" href=\"{{ path('product_detail', {'id': product.getId}) }}\"></a>
                </div>
              </div>
              <div class=\"product-title h4\">
                <a href=\"{{ path('product_detail', {'id': product.getId}) }}\">{{ product.getName }}</a>
              </div>
              <div class=\"product-price\">\${{ product.getPrice }}</div>
            </div>
          </div>
          {% endfor %}
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"widget\">
          <h3 class=\"widget-title title-2\">Types</h3>
          <div class=\"widget-body\">
            <div class=\"widget-list\">
              <a class=\"widget-list-link link link-dark\" href=\"{{ path('product') }}\">
                <span>All Products</span><span>{{ products|length }}</span>
              </a>
              {% for type in types %}
              <a class=\"widget-list-link link link-dark\" href=\"{{ path('product_filter_by_type', {'type': type.name}) }}\">
                <span>{{type.name}}</span><span>{{type.product_count}}</span>
              </a>
              {% endfor %}
          </div>
        </div>
        <form action=\"{{ path('product_search') }}\" method=\"POST\">
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Filter by price</h3>
            <div class=\"widget-body widget-body-bordered\">
              <!-- RD Range-->
              {% if (max_price is defined) and (min_price is defined) %}
              <div class=\"rd-range\" data-min=\"0\" data-max=\"999\" data-min-diff=\"10\" data-start=\"[{{min_price}}, {{max_price}}]\" data-step=\"1\" data-input=\".rd-range-input-value-1\" data-input-2=\".rd-range-input-value-2\"></div>
              {% else %}
              <div class=\"rd-range\" data-min=\"0\" data-max=\"999\" data-min-diff=\"10\" data-start=\"[0, 999]\" data-step=\"1\" data-input=\".rd-range-input-value-1\" data-input-2=\".rd-range-input-value-2\"></div>
              {% endif %}
              <div class=\"rd-range-meta\">
                <div class=\"rd-range-value\">
                  <div class=\"rd-range-form-wrap\">
                    <div class=\"rd-range-label\">Price:</div>
                  </div>
                  <div class=\"rd-range-form-wrap\"><span>\$</span>
                    {% if min_price is defined %}
                    <input class=\"rd-range-input rd-range-input-value-1 rd-range-input-2-symbol\" type=\"text\" name=\"min_price\" size=\"1\" value=\"{{min_price}}\">
                    {% else %}
                    <input class=\"rd-range-input rd-range-input-value-1 rd-range-input-2-symbol\" type=\"text\" name=\"min_price\" size=\"1\">
                    {% endif %}
                  </div>
                  <div class=\"rd-range-form-wrap\"><span class=\"mx-1\"> - </span></div>
                  <div class=\"rd-range-form-wrap\"><span>\$</span>
                    {% if max_price is defined %}
                    <input class=\"rd-range-input rd-range-input-value-2\" type=\"text\" name=\"max_price\" size=\"1\" value=\"{{ max_price }}\">
                    {% else %}
                    <input class=\"rd-range-input rd-range-input-value-2\" type=\"text\" name=\"max_price\" size=\"1\">
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Sizes</h3>
            <div class=\"widget-body widget-body-bordered\">
              <div class=\"group-20x15 d-flex flex-wrap\">
                <div>
                  <div class=\"custom-control custom-radio\">
                    <input class=\"custom-control-input\" type=\"radio\" id=\"all\" value=\"0\" name=\"size\" checked>
                    <label class=\"custom-control-label\" for=\"all\">See All
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    {% if (filter is defined) and ('size' in filter|keys) and filter.size == 'l' %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"l\" value=\"l\" name=\"size\" checked>
                    {% else %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"l\" value=\"l\" name=\"size\">
                    {% endif %}
                    <label class=\"custom-control-label\" for=\"l\">Large
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    {% if (filter is defined) and ('size' in filter|keys) and filter.size == 'm' %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"m\" value=\"m\" name=\"size\" checked>
                    {% else %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"m\" value=\"m\" name=\"size\">
                    {% endif %}
                    <label class=\"custom-control-label\" for=\"m\">Medium
                    </label>
                  </div>
                </div>
                <div>
                  <div class=\"custom-control custom-radio\">
                    {% if (filter is defined) and ('size' in filter|keys) and filter.size == 's' %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"s\" value=\"s\" name=\"size\" checked>
                    {% else %}
                    <input class=\"custom-control-input\" type=\"radio\" id=\"s\" value=\"s\" name=\"size\">
                    {% endif %}
                    <label class=\"custom-control-label\" for=\"s\">Small
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"widget\">
            <h3 class=\"widget-title title-2\">Colors</h3>
            <div class=\"widget-body widget-body-bordered\">
              <div class=\"group-15 d-flex flex-wrap\">
                <div class=\"checkbox-color\">
                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"all-color\" value=\"0\" checked>
                  <label class=\"checkbox-color-label\" style=\"background-color: white\" for=\"all-color\">All</label>
                </div>
                {% for color in colors %}
                <div class=\"checkbox-color\">
                  {% if (filter is defined) and ('color' in filter|keys) and (filter.color == color.name) %}
                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"{{ color.name }}\" value=\"{{ color.name }}\" checked>
                  {% else %}
                  <input class=\"checkbox-color-input\" type=\"radio\" name=\"color\" id=\"{{ color.name }}\" value=\"{{ color.name }}\">
                  {% endif %}
                  <label class=\"checkbox-color-label\" style=\"background-color: {{ color.value }}\" for=\"{{ color.name }}\"></label>
                </div>
                {% endfor %}
              </div>
            </div>
            <button type=\"submit\" class=\"btn btn-sm btn-outline float-right\">filter</button>
          </div>
        </form>
        <div class=\"widget pt-5\">
          <h3 class=\"widget-title title-2\">Popular products</h3>
          <div class=\"widget-body\">
            {% for product in products %}
            <!-- Product-->
            <!-- <div class=\"product product-small-rating\">
              <div class=\"product-media\"><img class=\"product-img\" src=\"{{product.getImage}}\" alt=\"\" width=\"52\" height=\"52\"/>
              </div>
              <div class=\"product-body\">
                <div class=\"product-title h4\"><a href=\"{{ path('product_detail', {'id': product.getId}) }}\"><span>{{ product.getName }}</span></a></div>
                <div class=\"product-rating\"><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star\"></span><span class=\"product-rating-item mdi-star-half\"></span>
                </div>
                <div class=\"product-price\">\${{ product.getPrice }}</div>
              </div>
            </div> -->
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}
", "pages/product/index.html.twig", "C:\\xampp\\htdocs\\SporifySF\\templates\\pages\\product\\index.html.twig");
    }
}
