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

/* pages/info/liste_info_front.html.twig */
class __TwigTemplate_e0e0c70593dfe9d94c3b58eb51390b690359512b1db35096a4ee27a427979ae0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/info/liste_info_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/info/liste_info_front.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "pages/info/liste_info_front.html.twig", 1);
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
                <h3>Liste des coachs:</h3>

                <div class=\"row\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 29
            echo "                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</span></a></div>
                                    <div class=\"post-text\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                                    <div class=\"post-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "age", [], "any", false, false, false, 35), "html", null, true);
            echo "</div>
                                    <div class=\"post-text\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "mail", [], "any", false, false, false, 36), "html", null, true);
            echo "</div>
                                    <div>class=\"post-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "date", [], "any", false, false, false, 37), "m-d-Y"), "html", null, true);
            echo "</div>


                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return "pages/info/liste_info_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  96 => 29,  92 => 28,  68 => 8,  58 => 7,  35 => 1,);
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
                <h3>Liste des coachs:</h3>

                <div class=\"row\">
                    {% for g in info %}
                        <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                            <!-- Post-->
                                    <div class=\"post-tag tag tag-secondary\">News</div></a>
                                <div class=\"post-body\">
                                    <div class=\"post-title h4\"><a href=\"#\"><span>{{ g.nom }}</span></a></div>
                                    <div class=\"post-text\">{{ g.prenom }}</div>
                                    <div class=\"post-text\">{{ g.age }}</div>
                                    <div class=\"post-text\">{{ g.mail }}</div>
                                    <div>class=\"post-text\">{{ g.date|date(\"m-d-Y\") }}</div>


                                </div>
                            </div>
                        </div>

                    {% endfor %}
                </div>
            </div>
            </div>
        </section>



    {% endblock %}", "pages/info/liste_info_front.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\info\\liste_info_front.html.twig");
    }
}
