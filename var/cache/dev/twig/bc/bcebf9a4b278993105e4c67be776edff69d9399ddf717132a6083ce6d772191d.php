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

/* pages/order/cart.html.twig */
class __TwigTemplate_fd128c83fdde0295eb6a4a36001117e5161f3d656c18f07fbc6ffb78deec218a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order/cart.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/order/cart.html.twig", 1);
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
        echo "<title>Cart - All</title>
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
    <h2 class=\"breadcrumb-section-title\">Cart</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"\">Cart</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Cart-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" method=\"POST\">
          <div class=\"table-responsive-xl\">
            <table class=\"table table-layout-1\">
              <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 30
            echo "                <tr>
                  <td style=\"width: 140px\">
                    <div class=\"image-box image-box-2\"><img class=\"image\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 32), "getImage", [], "any", false, false, false, 32)), "html", null, true);
            echo "\" alt=\"\" width=\"79\" height=\"79\"/>
                    </div>
                  </td>
                  <td style=\"width: 370px; min-width: 370px\">
                    <h5><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 36), "getId", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 36), "getName", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></h5>
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 37), "getDescription", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                  </td>
                  <td class=\"h5\">\$";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 39), "getPrice", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                  <td>
                    <input type=\"number\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "getQuantity", [], "any", false, false, false, 41), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "getId", [], "any", false, false, false, 41), "html", null, true);
            echo "\" data-spinner>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              </tbody>
            </table>
          </div>
          <div class=\"group-15 group-offset-1 d-flex flex-wrap\">
            <div class=\"form-group select-wrap\">
              <label class=\"form-label\" for=\"promocode\">Promocode</label>
              <select class=\"select2\" id=\"promocode\" name=\"promocode\" data-select2-options='{\"placeholder\":\"Your Country\"}'>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 53
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "getId", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "getTitre", [], "any", false, false, false, 53), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
          </div>
          <button type=\"submit\" class=\"btn\">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "<script>
\$(document).ready(function(){
  
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/order/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 67,  203 => 66,  184 => 55,  173 => 53,  169 => 52,  160 => 45,  148 => 41,  143 => 39,  138 => 37,  132 => 36,  125 => 32,  121 => 30,  117 => 29,  110 => 25,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Cart - All</title>
{% endblock %}

{% block body %}
<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Cart</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"\">Cart</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Cart-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        <form action=\"{{ path('checkout') }}\" method=\"POST\">
          <div class=\"table-responsive-xl\">
            <table class=\"table table-layout-1\">
              <tbody>
                {% for cart in carts %}
                <tr>
                  <td style=\"width: 140px\">
                    <div class=\"image-box image-box-2\"><img class=\"image\" src=\"{{asset(cart.product.getImage)}}\" alt=\"\" width=\"79\" height=\"79\"/>
                    </div>
                  </td>
                  <td style=\"width: 370px; min-width: 370px\">
                    <h5><a href=\"{{ path('product_detail', {'id': cart.product.getId}) }}\">{{ cart.product.getName }}</a></h5>
                    <p>{{ cart.product.getDescription }}</p>
                  </td>
                  <td class=\"h5\">\${{ cart.product.getPrice }}</td>
                  <td>
                    <input type=\"number\" value=\"{{cart.getQuantity}}\" name=\"{{cart.getId}}\" data-spinner>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
          <div class=\"group-15 group-offset-1 d-flex flex-wrap\">
            <div class=\"form-group select-wrap\">
              <label class=\"form-label\" for=\"promocode\">Promocode</label>
              <select class=\"select2\" id=\"promocode\" name=\"promocode\" data-select2-options='{\"placeholder\":\"Your Country\"}'>
                {% for promotion in promotions %}
                <option value=\"{{promotion.getId}}\">{{ promotion.getTitre }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <button type=\"submit\" class=\"btn\">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</section>
{% endblock %}

{% block javascripts %}
<script>
\$(document).ready(function(){
  
});
</script>
{% endblock %}
", "pages/order/cart.html.twig", "C:\\xampp\\htdocs\\SporifySF\\templates\\pages\\order\\cart.html.twig");
    }
}
