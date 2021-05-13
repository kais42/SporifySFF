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

/* pages/order/checkout.html.twig */
class __TwigTemplate_523ad159030c89c75c7af5c4359ae7d666f2d672a6301f7001c8641113af94be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/order/checkout.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/order/checkout.html.twig", 1);
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
        echo "<title>Checkout - All</title>
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
    <h2 class=\"breadcrumb-section-title\">Checkout</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">Checkout</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Checkout-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_store");
        echo "\" method=\"POST\">
      <div class=\"row row-40 justify-content-center\">
        <div class=\"col-md-8\">
          <h3>Shipping details</h3>
          <div class=\"box box-form-simple\">
            <div class=\"rd-form row row-15 row-gutters-14\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"first_name\">First name</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 33
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("first_name", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 33, $this->source); })()))))) {
            // line 34
            echo "                    <input class=\"form-control\" id=\"first_name\" type=\"text\" name=\"first_name\" placeholder=\"Your First name\" data-constraints=\"@Required\"  value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 34, $this->source); })()), "first_name", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 36
            echo "                    <input class=\"form-control\" id=\"first_name\" type=\"text\" name=\"first_name\" placeholder=\"Your First name\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "getFirstName", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                    ";
        }
        // line 38
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("first_name", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 38, $this->source); })()))))) {
            // line 39
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 39, $this->source); })()), "first_name", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                    ";
        }
        // line 41
        echo "                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"last_name\">Last name</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 48
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("last_name", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 48, $this->source); })()))))) {
            // line 49
            echo "                    <input class=\"form-control\" id=\"last_name\" type=\"text\" name=\"last_name\" placeholder=\"Your Last name\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 49, $this->source); })()), "last_name", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 51
            echo "                    <input class=\"form-control\" id=\"last_name\" type=\"text\" name=\"last_name\" placeholder=\"Your Last name\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "getLastName", [], "any", false, false, false, 51), "html", null, true);
            echo "\">
                    ";
        }
        // line 53
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("last_name", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source); })()))))) {
            // line 54
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 54, $this->source); })()), "last_name", [], "any", false, false, false, 54), "html", null, true);
            echo "</span>
                    ";
        }
        // line 56
        echo "                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"email\">E-mail</label>
                  <div class=\"form-validation-wrap\">
                    <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" placeholder=\"Your E-mail\" data-constraints=\"@Email @Required\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "getEmail", [], "any", false, false, false, 63), "html", null, true);
        echo "\" disabled>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"company\">Company</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 71
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("company", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 71, $this->source); })()))))) {
            // line 72
            echo "                    <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" placeholder=\"Last name\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 72, $this->source); })()), "company", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 74
            echo "                    <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" placeholder=\"Last name\" data-constraints=\"@Required\">
                    ";
        }
        // line 76
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("company", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 76, $this->source); })()))))) {
            // line 77
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 77, $this->source); })()), "company", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>
                    ";
        }
        // line 79
        echo "                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"shipping_address\">Shipping Address</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 86
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("shipping_address", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 86, $this->source); })()))))) {
            // line 87
            echo "                    <input class=\"form-control\" id=\"shipping_address\" type=\"text\" name=\"shipping_address\" placeholder=\"Your Address 1\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 87, $this->source); })()), "shipping_address", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 89
            echo "                    <input class=\"form-control\" id=\"shipping_address\" type=\"text\" name=\"shipping_address\" placeholder=\"Your Address 1\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "getAddress", [], "any", false, false, false, 89), "html", null, true);
            echo "\">
                    ";
        }
        // line 91
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("shipping_address", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 91, $this->source); })()))))) {
            // line 92
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 92, $this->source); })()), "shipping_address", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                    ";
        }
        // line 94
        echo "                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group select-wrap\">
                  <label class=\"form-label\" for=\"checkout-country-input\">Country</label>
                  <select class=\"select2\" id=\"checkout-country-input\" name=\"country\" data-select2-options='{\"placeholder\":\"Your Country\"}' value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "getCountry", [], "any", false, false, false, 100), "html", null, true);
        echo "\">
                    <option value=\"Tunisia\">Tunisia</option>
                  </select>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"zip_code\">Zip Code</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 109
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("zip_code", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 109, $this->source); })()))))) {
            // line 110
            echo "                    <input class=\"form-control\" id=\"zip_code\" type=\"text\" name=\"zip_code\" placeholder=\"Your Zip Code\" data-constraints=\"@Required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 110, $this->source); })()), "zip_code", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 112
            echo "                    <input class=\"form-control\" id=\"zip_code\" type=\"text\" name=\"zip_code\" placeholder=\"Your Zip Code\" data-constraints=\"@Required\">
                    ";
        }
        // line 114
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("zip_code", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 114, $this->source); })()))))) {
            // line 115
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 115, $this->source); })()), "zip_code", [], "any", false, false, false, 115), "html", null, true);
            echo "</span>
                    ";
        }
        // line 117
        echo "                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"comment\">Comments</label>
                  <div class=\"form-validation-wrap\">
                    ";
        // line 124
        if (((isset($context["old"]) || array_key_exists("old", $context)) && twig_in_filter("comment", twig_get_array_keys_filter((isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 124, $this->source); })()))))) {
            // line 125
            echo "                    <textarea class=\"form-control\" id=\"comment\" name=\"comment\" placeholder=\"Enter Your Comments\" data-constraints=\"@Required\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 125, $this->source); })()), "comment", [], "any", false, false, false, 125), "html", null, true);
            echo "</textarea>
                    ";
        } else {
            // line 127
            echo "                    <textarea class=\"form-control\" id=\"comment\" name=\"comment\" placeholder=\"Enter Your Comments\" data-constraints=\"@Required\"></textarea>
                    ";
        }
        // line 129
        echo "                    ";
        if (((isset($context["errors"]) || array_key_exists("errors", $context)) && twig_in_filter("comment", twig_get_array_keys_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 129, $this->source); })()))))) {
            // line 130
            echo "                    <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 130, $this->source); })()), "comment", [], "any", false, false, false, 130), "html", null, true);
            echo "</span>
                    ";
        }
        // line 132
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <h3>Your order</h3>
          <div class=\"box box-simple box-simple-2\">
            <div class=\"box-embed\">
              <ul class=\"list list-divided\">
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 144
            echo "                <li class=\"list-item\">
                  <div class=\"list-content\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 145), "getName", [], "any", false, false, false, 145), "html", null, true);
            echo "</div>
                  <div class=\"list-content\">\$";
            // line 146
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "product", [], "any", false, false, false, 146), "getPrice", [], "any", false, false, false, 146) * twig_get_attribute($this->env, $this->source, $context["cart"], "getQuantity", [], "any", false, false, false, 146)), "html", null, true);
            echo "</div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                <li class=\"list-item\">
                  <div class=\"list-content\">Promocode</div>
                  <div class=\"list-content text-success\">-\$";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["promocode_price"]) || array_key_exists("promocode_price", $context) ? $context["promocode_price"] : (function () { throw new RuntimeError('Variable "promocode_price" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "</div>
                </li>
                <li class=\"list-item\">
                  <div class=\"list-content\">Shipping</div>
                  <div class=\"list-content text-warning\">-\$";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["shipping_price"]) || array_key_exists("shipping_price", $context) ? $context["shipping_price"] : (function () { throw new RuntimeError('Variable "shipping_price" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "</div>
                </li>
                <li class=\"list-item h5\">
                  <div class=\"list-content\">Total</div>
                  <div class=\"list-content text-primary\">\$";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "</div>
                </li>
              </ul>
              <div class=\"custom-contro-container\">
                <div class=\"custom-control custom-radio\">
                  <input class=\"custom-control-input\" type=\"radio\" id=\"v7vgo3ckp2q\" name=\"checkout\" checked>
                  <label class=\"custom-control-label\" for=\"v7vgo3ckp2q\">Direct Bank Transfer
                  </label>
                </div>
                <div class=\"custom-control custom-radio\">
                  <input class=\"custom-control-input\" type=\"radio\" id=\"px7baoj7t07\" name=\"checkout\">
                  <label class=\"custom-control-label\" for=\"px7baoj7t07\">PayPal
                  </label>
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-block\">Order now</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/order/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 159,  366 => 155,  359 => 151,  355 => 149,  346 => 146,  342 => 145,  339 => 144,  335 => 143,  322 => 132,  316 => 130,  313 => 129,  309 => 127,  303 => 125,  301 => 124,  292 => 117,  286 => 115,  283 => 114,  279 => 112,  273 => 110,  271 => 109,  259 => 100,  251 => 94,  245 => 92,  242 => 91,  236 => 89,  230 => 87,  228 => 86,  219 => 79,  213 => 77,  210 => 76,  206 => 74,  200 => 72,  198 => 71,  187 => 63,  178 => 56,  172 => 54,  169 => 53,  163 => 51,  157 => 49,  155 => 48,  146 => 41,  140 => 39,  137 => 38,  131 => 36,  125 => 34,  123 => 33,  110 => 23,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Checkout - All</title>
{% endblock %}

{% block body %}
<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Checkout</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"{{ path('checkout') }}\">Checkout</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Checkout-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <form action=\"{{ path('order_store') }}\" method=\"POST\">
      <div class=\"row row-40 justify-content-center\">
        <div class=\"col-md-8\">
          <h3>Shipping details</h3>
          <div class=\"box box-form-simple\">
            <div class=\"rd-form row row-15 row-gutters-14\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"first_name\">First name</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('first_name' in old|keys) %}
                    <input class=\"form-control\" id=\"first_name\" type=\"text\" name=\"first_name\" placeholder=\"Your First name\" data-constraints=\"@Required\"  value=\"{{ old.first_name }}\">
                    {% else %}
                    <input class=\"form-control\" id=\"first_name\" type=\"text\" name=\"first_name\" placeholder=\"Your First name\" data-constraints=\"@Required\" value=\"{{ user.getFirstName }}\">
                    {% endif %}
                    {% if (errors is defined) and ('first_name' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.first_name }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"last_name\">Last name</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('last_name' in old|keys) %}
                    <input class=\"form-control\" id=\"last_name\" type=\"text\" name=\"last_name\" placeholder=\"Your Last name\" data-constraints=\"@Required\" value=\"{{ old.last_name }}\">
                    {% else %}
                    <input class=\"form-control\" id=\"last_name\" type=\"text\" name=\"last_name\" placeholder=\"Your Last name\" data-constraints=\"@Required\" value=\"{{ user.getLastName }}\">
                    {% endif %}
                    {% if (errors is defined) and ('last_name' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.last_name }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"email\">E-mail</label>
                  <div class=\"form-validation-wrap\">
                    <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" placeholder=\"Your E-mail\" data-constraints=\"@Email @Required\" value=\"{{ user.getEmail }}\" disabled>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"company\">Company</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('company' in old|keys) %}
                    <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" placeholder=\"Last name\" data-constraints=\"@Required\" value=\"{{ old.company }}\">
                    {% else %}
                    <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" placeholder=\"Last name\" data-constraints=\"@Required\">
                    {% endif %}
                    {% if (errors is defined) and ('company' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.company }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"shipping_address\">Shipping Address</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('shipping_address' in old|keys) %}
                    <input class=\"form-control\" id=\"shipping_address\" type=\"text\" name=\"shipping_address\" placeholder=\"Your Address 1\" data-constraints=\"@Required\" value=\"{{ old.shipping_address }}\">
                    {% else %}
                    <input class=\"form-control\" id=\"shipping_address\" type=\"text\" name=\"shipping_address\" placeholder=\"Your Address 1\" data-constraints=\"@Required\" value=\"{{ user.getAddress }}\">
                    {% endif %}
                    {% if (errors is defined) and ('shipping_address' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.shipping_address }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group select-wrap\">
                  <label class=\"form-label\" for=\"checkout-country-input\">Country</label>
                  <select class=\"select2\" id=\"checkout-country-input\" name=\"country\" data-select2-options='{\"placeholder\":\"Your Country\"}' value=\"{{ user.getCountry }}\">
                    <option value=\"Tunisia\">Tunisia</option>
                  </select>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"zip_code\">Zip Code</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('zip_code' in old|keys) %}
                    <input class=\"form-control\" id=\"zip_code\" type=\"text\" name=\"zip_code\" placeholder=\"Your Zip Code\" data-constraints=\"@Required\" value=\"{{ old.zip_code }}\">
                    {% else %}
                    <input class=\"form-control\" id=\"zip_code\" type=\"text\" name=\"zip_code\" placeholder=\"Your Zip Code\" data-constraints=\"@Required\">
                    {% endif %}
                    {% if (errors is defined) and ('zip_code' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.zip_code }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"col-12\">
                <div class=\"form-group\">
                  <label class=\"form-label\" for=\"comment\">Comments</label>
                  <div class=\"form-validation-wrap\">
                    {% if (old is defined) and ('comment' in old|keys) %}
                    <textarea class=\"form-control\" id=\"comment\" name=\"comment\" placeholder=\"Enter Your Comments\" data-constraints=\"@Required\">{{ old.comment }}</textarea>
                    {% else %}
                    <textarea class=\"form-control\" id=\"comment\" name=\"comment\" placeholder=\"Enter Your Comments\" data-constraints=\"@Required\"></textarea>
                    {% endif %}
                    {% if (errors is defined) and ('comment' in errors|keys) %}
                    <span style=\"color: red;\">{{ errors.comment }}</span>
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <h3>Your order</h3>
          <div class=\"box box-simple box-simple-2\">
            <div class=\"box-embed\">
              <ul class=\"list list-divided\">
                {% for cart in carts %}
                <li class=\"list-item\">
                  <div class=\"list-content\">{{ cart.product.getName }}</div>
                  <div class=\"list-content\">\${{ cart.product.getPrice * cart.getQuantity }}</div>
                </li>
                {% endfor %}
                <li class=\"list-item\">
                  <div class=\"list-content\">Promocode</div>
                  <div class=\"list-content text-success\">-\${{ promocode_price }}</div>
                </li>
                <li class=\"list-item\">
                  <div class=\"list-content\">Shipping</div>
                  <div class=\"list-content text-warning\">-\${{ shipping_price }}</div>
                </li>
                <li class=\"list-item h5\">
                  <div class=\"list-content\">Total</div>
                  <div class=\"list-content text-primary\">\${{ total_price }}</div>
                </li>
              </ul>
              <div class=\"custom-contro-container\">
                <div class=\"custom-control custom-radio\">
                  <input class=\"custom-control-input\" type=\"radio\" id=\"v7vgo3ckp2q\" name=\"checkout\" checked>
                  <label class=\"custom-control-label\" for=\"v7vgo3ckp2q\">Direct Bank Transfer
                  </label>
                </div>
                <div class=\"custom-control custom-radio\">
                  <input class=\"custom-control-input\" type=\"radio\" id=\"px7baoj7t07\" name=\"checkout\">
                  <label class=\"custom-control-label\" for=\"px7baoj7t07\">PayPal
                  </label>
                </div>
              </div>
              <button type=\"submit\" class=\"btn btn-block\">Order now</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
{% endblock %}", "pages/order/checkout.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\order\\checkout.html.twig");
    }
}
