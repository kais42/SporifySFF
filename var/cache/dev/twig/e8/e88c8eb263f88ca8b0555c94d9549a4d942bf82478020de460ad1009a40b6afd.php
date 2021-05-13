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

/* pages/admin/order/detail.html.twig */
class __TwigTemplate_d520c7a46222769bd961c6dee1d257e00d855e01d4e3ae7cb30cd926697f0037 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/detail.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/order/detail.html.twig", 1);
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
        echo "<a class=\"navbar-brand\" href=\"javascript:;\">Order Detail</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "<style>
  .item {
    padding-top: 10px;
  }
  .item-title {
    padding-right: 20px;
    font-size: 18px;
  }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "<div class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\"> Order Detail</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3 col-md-12\" style=\"padding: 50px 10px\">
              <div class=\"item\">
                <span class=\"item-title\">Email:</span>
                <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "getEmail", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">First Name:</span>
                <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "getFirstName", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Last Name:</span>
                <span>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "getLastName", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Company:</span>
                <span>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "getCompany", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Shipping Address:</span>
                <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "getAddress", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Country:</span>
                <span>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "getCountry", [], "any", false, false, false, 56), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">ZipCode:</span>
                <span>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 60, $this->source); })()), "getZipCode", [], "any", false, false, false, 60), "html", null, true);
        echo "</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Products:</span>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead class=\" text-primary\">
                    <th>
                      Id
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Quantity
                    </th>
                    <th>
                      Price
                    </th>
                  </thead>
                  <tbody>
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 83
            echo "                    <tr>
                      <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                      <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 85), "getName", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                      <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                      <td>\$ ";
            // line 87
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 87) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 87), "getPrice", [], "any", false, false, false, 87)), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                  </tbody>
                </table>
              </div>
              <div class=\"item text-center my-3\">
                <span class=\"item-title\" style=\"color: blue;\">Total:</span>
                <span>\$ ";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "</span>
              </div>
              <a class=\"btn btn-primary btn-round text-white float-right ml-2\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order");
        echo "\">Go to the Order</a>
              <a class=\"btn btn-primary btn-round text-white float-right\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_download", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 98, $this->source); })()), "getId", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">Download</a>
            </div>
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

    public function getTemplateName()
    {
        return "pages/admin/order/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 98,  263 => 97,  258 => 95,  251 => 90,  242 => 87,  238 => 86,  234 => 85,  230 => 84,  227 => 83,  223 => 82,  198 => 60,  191 => 56,  184 => 52,  177 => 48,  170 => 44,  163 => 40,  156 => 36,  142 => 24,  132 => 23,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Product - Admin</title>
{% endblock %}

{% block subtitle %}
<a class=\"navbar-brand\" href=\"javascript:;\">Order Detail</a>
{% endblock %}

{% block stylesheets %}
<style>
  .item {
    padding-top: 10px;
  }
  .item-title {
    padding-right: 20px;
    font-size: 18px;
  }
</style>
{% endblock %}

{% block body %}
<div class=\"content\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card\">
        <div class=\"card-header\">
          <h4 class=\"card-title\"> Order Detail</h4>
        </div>
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3 col-md-12\" style=\"padding: 50px 10px\">
              <div class=\"item\">
                <span class=\"item-title\">Email:</span>
                <span>{{order.user.getEmail}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">First Name:</span>
                <span>{{order.user.getFirstName}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Last Name:</span>
                <span>{{order.user.getLastName}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Company:</span>
                <span>{{order.getCompany}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Shipping Address:</span>
                <span>{{order.user.getAddress}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Country:</span>
                <span>{{order.user.getCountry}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">ZipCode:</span>
                <span>{{order.getZipCode}}</span>
              </div>
              <div class=\"item\">
                <span class=\"item-title\">Products:</span>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table\">
                  <thead class=\" text-primary\">
                    <th>
                      Id
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Quantity
                    </th>
                    <th>
                      Price
                    </th>
                  </thead>
                  <tbody>
                    {% for product in products %}
                    <tr>
                      <td>{{ product.getId }}</td>
                      <td>{{ product.product.getName }}</td>
                      <td>{{ product.getQuantity }}</td>
                      <td>\$ {{ product.getQuantity * product.product.getPrice }}</td>
                    </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
              <div class=\"item text-center my-3\">
                <span class=\"item-title\" style=\"color: blue;\">Total:</span>
                <span>\$ {{ total_price }}</span>
              </div>
              <a class=\"btn btn-primary btn-round text-white float-right ml-2\" href=\"{{ path('admin_order') }}\">Go to the Order</a>
              <a class=\"btn btn-primary btn-round text-white float-right\" href=\"{{ path('admin_order_download', {'id': order.getId}) }}\">Download</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "pages/admin/order/detail.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\order\\detail.html.twig");
    }
}
