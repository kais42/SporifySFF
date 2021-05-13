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

/* pages/admin/order/index.html.twig */
class __TwigTemplate_e996f1bd358167c7dd59d220958b81cb0f2559681374da0a19b4971bc3de6384 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/order/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/order/index.html.twig", 1);
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
          <h4 class=\"card-title\"> Orders</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_search");
        echo "\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"id\">Order Id</label>
                  ";
        // line 25
        if (((isset($context["filter"]) || array_key_exists("filter", $context)) && twig_in_filter("id", twig_get_array_keys_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 25, $this->source); })()))))) {
            // line 26
            echo "                  <input type=\"text\" id=\"id\" class=\"form-control\" placeholder=\"Search id\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 28
            echo "                  <input type=\"text\" id=\"id\" class=\"form-control\" placeholder=\"Search id\" name=\"id\">
                  ";
        }
        // line 30
        echo "                </div>
              </div>
              <div class=\"mb-3 col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary btn-round text-white\">Search</button>
              </div>
            </div>
          </form>
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead class=\" text-primary\">
                <th>
                  Id
                </th>
                <th>
                  Shipping Address
                </th>
                <th>
                  Total Price
                </th>
                <th>
                  Total Number
                </th>
                <th>
                  Delivery Date
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 61
            echo "                <tr>
                  <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                  <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 63), "getAddress", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                  <td>\$ ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total_price", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                  <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total_number", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                  <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "str_date", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"mr-3\" title=\"Detail\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"\" title=\"Delete\"><i class=\"fa fa-trash\" style=\"color: red;\"></i></a>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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

    public function getTemplateName()
    {
        return "pages/admin/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  206 => 69,  202 => 68,  197 => 66,  193 => 65,  189 => 64,  185 => 63,  181 => 62,  178 => 61,  174 => 60,  142 => 30,  138 => 28,  132 => 26,  130 => 25,  122 => 20,  112 => 12,  102 => 11,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Product - Admin</title>
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
          <h4 class=\"card-title\"> Orders</h4>
        </div>
        <div class=\"card-body\">
          <form action=\"{{ path('admin_order_search') }}\" method=\"POST\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-12\">
                <div class=\"form-group\">
                  <label for=\"id\">Order Id</label>
                  {% if (filter is defined) and ('id' in filter|keys) %}
                  <input type=\"text\" id=\"id\" class=\"form-control\" placeholder=\"Search id\" name=\"id\" value=\"{{ filter.id }}\">
                  {% else %}
                  <input type=\"text\" id=\"id\" class=\"form-control\" placeholder=\"Search id\" name=\"id\">
                  {% endif %}
                </div>
              </div>
              <div class=\"mb-3 col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary btn-round text-white\">Search</button>
              </div>
            </div>
          </form>
          <div class=\"table-responsive\">
            <table class=\"table\">
              <thead class=\" text-primary\">
                <th>
                  Id
                </th>
                <th>
                  Shipping Address
                </th>
                <th>
                  Total Price
                </th>
                <th>
                  Total Number
                </th>
                <th>
                  Delivery Date
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                {% for order in orders %}
                <tr>
                  <td>{{ order.getId }}</td>
                  <td>{{ order.user.getAddress }}</td>
                  <td>\$ {{ order.total_price }}</td>
                  <td>{{ order.total_number }}</td>
                  <td>{{ order.str_date }}</td>
                  <td>
                    <a href=\"{{ path('admin_order_detail', {'id': order.getId}) }}\" class=\"mr-3\" title=\"Detail\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"{{ path('admin_order_delete', {'id': order.getId}) }}\" class=\"\" title=\"Delete\"><i class=\"fa fa-trash\" style=\"color: red;\"></i></a>
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
{% endblock %}", "pages/admin/order/index.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\order\\index.html.twig");
    }
}
