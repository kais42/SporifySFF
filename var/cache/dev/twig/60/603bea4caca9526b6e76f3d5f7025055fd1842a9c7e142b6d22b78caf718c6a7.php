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

/* pages/exercice/liste_exercice_front.html.twig */
class __TwigTemplate_182b0bf01dc131204cc4c5be88c470ec17b7e609976cbce319d5a3934b437db3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/exercice/liste_exercice_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/exercice/liste_exercice_front.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "pages/exercice/liste_exercice_front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <section class=\"section breadcrumb-section\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/image-10-1920x232.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <h2 class=\"breadcrumb-section-title\">News 1</h2>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">News</a></div>
                    <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">News 1</span></div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"section-md bg-transparent\">
        <div class=\"container\">
            <h3>Liste des exercice</h3>

            <div class=\"row\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 26
            echo "                    <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                        <!-- Post-->
                        <div class=\"post post-classic\"><a class=\"post-media\" href=\"#\"><img class=\"post-img\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 28))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                <div class=\"post-tag tag tag-secondary\">News</div></a>
                            <div class=\"post-body\">
                                <div class=\"post-title h4\"><a href=\"#\"><span>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</span></a></div>
                                <div class=\"post-text\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "location", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
                                <div class=\"post-meta\">
                                    <div class=\"post-date\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "duration", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>
                        </div>

                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
        </div>
    </section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/exercice/liste_exercice_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  115 => 34,  110 => 32,  106 => 31,  100 => 28,  96 => 26,  92 => 25,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}


{% block content %}
    <section class=\"section breadcrumb-section\" style=\"background-image: url({{ asset('front/images/image-10-1920x232.jpg') }})\">
        <div class=\"container\">
            <h2 class=\"breadcrumb-section-title\">News 1</h2>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
                    <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">News</a></div>
                    <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">News 1</span></div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"section-md bg-transparent\">
        <div class=\"container\">
            <h3>Liste des exercice</h3>

            <div class=\"row\">
                {% for n in exercice %}
                    <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                        <!-- Post-->
                        <div class=\"post post-classic\"><a class=\"post-media\" href=\"#\"><img class=\"post-img\" src=\"{{ asset('uploads/' ~ n.image) }}\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                <div class=\"post-tag tag tag-secondary\">News</div></a>
                            <div class=\"post-body\">
                                <div class=\"post-title h4\"><a href=\"#\"><span>{{ n.nom }}</span></a></div>
                                <div class=\"post-text\">{{ n.location }}</div>
                                <div class=\"post-meta\">
                                    <div class=\"post-date\">{{ n.duration }}</div>
                                </div>
                            </div>
                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>
                        </div>

                    </div>

                {% endfor %}
            </div>
        </div>
        </div>
    </section>



{% endblock %}", "pages/exercice/liste_exercice_front.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\exercice\\liste_exercice_front.html.twig");
    }
}
