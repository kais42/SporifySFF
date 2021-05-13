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

/* pages/admin/order/edit.html.twig */
class __TwigTemplate_cf4845761cc69c09e765a79eccc707188b3e3d20de312e156d60c518f4301d4f extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/edit.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/order/edit.html.twig", 1);
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
        echo "<title>Order - Admin</title>
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
        echo "<a class=\"navbar-brand\" href=\"javascript:;\">Orders</a>
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
          <h4 class=\"card-title\"> Edit Order</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "getId", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Product</label>
                  <select name=\"product_id\" class=\"custom-select\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                      ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "getProductId", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 28), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 28), "html", null, true);
                echo "</option>
                      ";
            } else {
                // line 30
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 30), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "any", false, false, false, 30), "html", null, true);
                echo "</option>
                      ";
            }
            // line 32
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"shipping_address\">Shipping Address</label>
                  ";
        // line 39
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("shipping_address", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 39, $this->source); })()))))) {
            // line 40
            echo "                  <input type=\"text\" class=\"form-control\" name=\"shipping_address\" id=\"shipping_address\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 40, $this->source); })()), "shipping_address", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 42
            echo "                  <input type=\"text\" class=\"form-control\" name=\"shipping_address\" id=\"shipping_address\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "getShippingAddress", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                  ";
        }
        // line 44
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("shipping_address", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 44, $this->source); })()))))) {
            // line 45
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 45, $this->source); })()), "shipping_address", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                  ";
        }
        // line 47
        echo "                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"quantity\">Quantity</label>
                  ";
        // line 52
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("quantity", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 52, $this->source); })()))))) {
            // line 53
            echo "                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 53, $this->source); })()), "quantity", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 55
            echo "                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "getQuantity", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
                  ";
        }
        // line 57
        echo "                  ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("quantity", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 57, $this->source); })()))))) {
            // line 58
            echo "                  <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 58, $this->source); })()), "quantity", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
                  ";
        }
        // line 60
        echo "                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"update ml-auto mr-auto my-3\">
                <a class=\"btn btn-default btn-round text-white\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
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

    // line 77
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 78
        echo "<script>
  // Add the following code if you want the name of the file appear on select
  \$(\".custom-file-input\").on(\"change\", function() {
    var fileName = \$(this).val().split(\"\\\\\").pop();
    \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
  });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin/order/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 78,  250 => 77,  229 => 65,  222 => 60,  216 => 58,  213 => 57,  207 => 55,  201 => 53,  199 => 52,  192 => 47,  186 => 45,  183 => 44,  177 => 42,  171 => 40,  169 => 39,  161 => 33,  155 => 32,  147 => 30,  139 => 28,  136 => 27,  132 => 26,  123 => 20,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Order - Admin</title>
{% endblock %}

{% block subtitle %}
<a class=\"navbar-brand\" href=\"javascript:;\">Orders</a>
{% endblock %}

{% block body %}
<div class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\"> Edit Order</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"{{ path('admin_order_update', {'id': order.getId}) }}\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label>Product</label>
                  <select name=\"product_id\" class=\"custom-select\">
                    {% for product in products %}
                      {% if product.getId == order.getProductId %}
                        <option value=\"{{ product.getId }}\" selected>{{ product.getName }}</option>
                      {% else %}
                      <option value=\"{{ product.getId }}\">{{ product.getName }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"shipping_address\">Shipping Address</label>
                  {% if (old is defined) and ('shipping_address' in old|keys) %}
                  <input type=\"text\" class=\"form-control\" name=\"shipping_address\" id=\"shipping_address\" value=\"{{ old.shipping_address }}\">
                  {% else %}
                  <input type=\"text\" class=\"form-control\" name=\"shipping_address\" id=\"shipping_address\" value=\"{{ order.getShippingAddress }}\">
                  {% endif %}
                  {% if (errors is defined) and ('shipping_address' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.shipping_address }}</span>
                  {% endif %}
                </div>
              </div>
              <div class=\"col-lg-6 offset-lg-3 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"quantity\">Quantity</label>
                  {% if (old is defined) and ('quantity' in old|keys) %}
                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"{{ old.quantity }}\">
                  {% else %}
                  <input type=\"number\" class=\"form-control\" name=\"quantity\" id=\"quantity\" value=\"{{ order.getQuantity }}\">
                  {% endif %}
                  {% if (errors is defined) and ('quantity' in errors|keys) %}
                  <span style=\"color: red;\">{{ errors.quantity }}</span>
                  {% endif %}
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"update ml-auto mr-auto my-3\">
                <a class=\"btn btn-default btn-round text-white\" href=\"{{ path('admin_order') }}\">Cancel</a>
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

{% block javascript %}
<script>
  // Add the following code if you want the name of the file appear on select
  \$(\".custom-file-input\").on(\"change\", function() {
    var fileName = \$(this).val().split(\"\\\\\").pop();
    \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
  });
  </script>
{% endblock %}", "pages/admin/order/edit.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\order\\edit.html.twig");
    }
}
