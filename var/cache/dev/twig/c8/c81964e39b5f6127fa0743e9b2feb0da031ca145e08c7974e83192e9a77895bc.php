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

/* pages/regime/liste_regime_front.html.twig */
class __TwigTemplate_d55d337f0a38f8aac9fdc0af09c1b11388d5df449e27db65d39db8c5e59c9c10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/regime/liste_regime_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/regime/liste_regime_front.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "pages/regime/liste_regime_front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <section class=\"section breadcrumb-section\" style=\"background-image: url(";
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
                <h3>Liste des regime</h3>

                <div class=\"row\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regime"]) || array_key_exists("regime", $context) ? $context["regime"] : (function () { throw new RuntimeError('Variable "regime" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 29
            echo "                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                            <div class=\"post post-classic\"><a class=\"post-media\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"><img class=\"post-img\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["g"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "type", [], "any", false, false, false, 34), "html", null, true);
            echo "</span></a></div>
                                    <td ><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["g"], "description", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">détail regime (PDF)</a>

                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </div>
            </div>
        </section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/regime/liste_regime_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  112 => 35,  108 => 34,  100 => 31,  96 => 29,  92 => 28,  68 => 8,  58 => 7,  35 => 1,);
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
                <h3>Liste des regime</h3>

                <div class=\"row\">
                    {% for g in regime %}
                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                            <div class=\"post post-classic\"><a class=\"post-media\" href=\"{{ asset('uploads/' ~ g.image) }}\"><img class=\"post-img\" src=\"{{ asset('uploads/' ~ g.image) }}\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>{{ g.type }}</span></a></div>
                                    <td ><a href=\"{{ asset('uploads/brochures/' ~ g.description) }}\">détail regime (PDF)</a>

                                </div>
                            </div>
                        </div>

                    {% endfor %}
                </div>
            </div>
            </div>
        </section>



{% endblock %}", "pages/regime/liste_regime_front.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\regime\\liste_regime_front.html.twig");
    }
}
