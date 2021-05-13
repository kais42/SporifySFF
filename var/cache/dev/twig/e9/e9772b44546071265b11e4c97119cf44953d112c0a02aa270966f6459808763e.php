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

/* pages/admin/order/pdf.html.twig */
class __TwigTemplate_f4114630df6854a33b0bbec171fe7111619feeaace38a8f0e33410f7cb51a453 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/pdf.html.twig"));

        // line 1
        echo "<html>
<head>
  <style>
    .title {
      text-align: center;
    }
    .card-body {
      display: flex;
      justify-content: center;
    }
    .item {
      padding-top: 10px;
    }
    .item-title {
      padding-right: 20px;
      font-size: 18px;
    }
    .product-header {
      color: green;
      float: left;
      width: 70px;
    }
    .product-item {
      float: left;
      width: 70px;
    }
  </style>
</head>
<body>
  <h4 class=\"title\">Order</h4>
  <div class=\"card-body\">
    <div>
      <div class=\"item\">
        <span class=\"item-title\">Email:</span>
        <span>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "getEmail", [], "any", false, false, false, 35), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">First Name:</span>
        <span>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "getFirstName", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">Last Name:</span>
        <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "getLastName", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">Company:</span>
        <span>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "getCompany", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">Shipping Address:</span>
        <span>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "getAddress", [], "any", false, false, false, 51), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">Country:</span>
        <span>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "getCountry", [], "any", false, false, false, 55), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">ZipCode:</span>
        <span>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 59, $this->source); })()), "getZipCode", [], "any", false, false, false, 59), "html", null, true);
        echo "</span>
      </div>
      <div class=\"item\">
        <span class=\"item-title\">Products:</span>
      </div>
      <div style=\"padding-left: 10px;\">
        <div class=\"product-header\">Id</div>
        <div class=\"product-header\">Product</div>
        <div class=\"product-header\">Quantity</div>
        <div class=\"product-header\">Price</div>
      </div>
      <br>
      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "      <div style=\"padding-left: 10px;\">
        <div class=\"product-item\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "any", false, false, false, 73), "html", null, true);
            echo "</div>
        <div class=\"product-item\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 74), "getName", [], "any", false, false, false, 74), "html", null, true);
            echo "</div>
        <div class=\"product-item\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 75), "html", null, true);
            echo "</div>
        <div class=\"product-item\">\$ ";
            // line 76
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "any", false, false, false, 76) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 76), "getPrice", [], "any", false, false, false, 76)), "html", null, true);
            echo "</div>
      </div>
      <br>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      <div class=\"item\" style=\"text-align: center;\">
        <span class=\"item-title\" style=\"color: blue;\">Total:</span>
        <span>\$ ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "</span>
      </div> 
    </div>
  </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin/order/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 82,  165 => 80,  155 => 76,  151 => 75,  147 => 74,  143 => 73,  140 => 72,  136 => 71,  121 => 59,  114 => 55,  107 => 51,  100 => 47,  93 => 43,  86 => 39,  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
  <style>
    .title {
      text-align: center;
    }
    .card-body {
      display: flex;
      justify-content: center;
    }
    .item {
      padding-top: 10px;
    }
    .item-title {
      padding-right: 20px;
      font-size: 18px;
    }
    .product-header {
      color: green;
      float: left;
      width: 70px;
    }
    .product-item {
      float: left;
      width: 70px;
    }
  </style>
</head>
<body>
  <h4 class=\"title\">Order</h4>
  <div class=\"card-body\">
    <div>
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
      <div style=\"padding-left: 10px;\">
        <div class=\"product-header\">Id</div>
        <div class=\"product-header\">Product</div>
        <div class=\"product-header\">Quantity</div>
        <div class=\"product-header\">Price</div>
      </div>
      <br>
      {% for product in products %}
      <div style=\"padding-left: 10px;\">
        <div class=\"product-item\">{{ product.getId }}</div>
        <div class=\"product-item\">{{ product.product.getName }}</div>
        <div class=\"product-item\">{{ product.getQuantity }}</div>
        <div class=\"product-item\">\$ {{ product.getQuantity * product.product.getPrice }}</div>
      </div>
      <br>
      {% endfor %}
      <div class=\"item\" style=\"text-align: center;\">
        <span class=\"item-title\" style=\"color: blue;\">Total:</span>
        <span>\$ {{ total_price }}</span>
      </div> 
    </div>
  </div>
</body>
</html>", "pages/admin/order/pdf.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\order\\pdf.html.twig");
    }
}
