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

/* pages/cours/liste_cours_front.html.twig */
class __TwigTemplate_e81d3d7514974bcdfc1f92e5b3af6ca0d810fed7c5cc45f6a0244d4b24028be2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/cours/liste_cours_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/cours/liste_cours_front.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "pages/cours/liste_cours_front.html.twig", 1);
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
            <h3>Liste des cours</h3>

            <div class=\"row\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 25, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "categorie", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
                                <div class=\"post-meta\">
                                    <div class=\"post-date\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "niveau", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                                </div>
                                <button type=\"button\" class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\">
                                    reclamation
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class=\"modal\" id=\"myModal\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Reclamation</h4>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <input type=\"text\" min=\"1\" max=\"60\" name=\"mail_nut_env\" id=\"mail_nut\" class=\"form-control\"  placeholder =\"écrir votre mail...\" >
                                </div>
                                <div class=\"modal-body\">

                                    <input type=\"text area\" min=\"1\" max=\"100\" name=\"message\"  class=\"form-control\"  placeholder =\"écrir votre message... \"}}>
                                </div>
                                <!-- Modal footer -->
                                <div class=\"modal-footer\">
                                    <div align=\"left\" >

                                        <a type=\"button\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail");
            echo "\" class=\"btn btn-success\"  class=\"btn btn-danger\">Envoyer</a>


                                    </div>
                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
                <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

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
        return "pages/cours/liste_cours_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 74,  147 => 63,  115 => 34,  110 => 32,  106 => 31,  100 => 28,  96 => 26,  92 => 25,  68 => 5,  58 => 4,  35 => 1,);
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
            <h3>Liste des cours</h3>

            <div class=\"row\">
                {% for n in cours %}
                    <div class=\"col-md-3\" style=\"margin-bottom: 40px\">
                        <!-- Post-->
                        <div class=\"post post-classic\"><a class=\"post-media\" href=\"#\"><img class=\"post-img\" src=\"{{ asset('uploads/' ~ n.image) }}\" alt=\"\" style=\"width: 200px;height: 200px; object-fit: cover\">
                                <div class=\"post-tag tag tag-secondary\">News</div></a>
                            <div class=\"post-body\">
                                <div class=\"post-title h4\"><a href=\"#\"><span>{{ n.nom }}</span></a></div>
                                <div class=\"post-text\">{{ n.categorie }}</div>
                                <div class=\"post-meta\">
                                    <div class=\"post-date\">{{ n.niveau }}</div>
                                </div>
                                <button type=\"button\" class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\">
                                    reclamation
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class=\"modal\" id=\"myModal\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Reclamation</h4>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <input type=\"text\" min=\"1\" max=\"60\" name=\"mail_nut_env\" id=\"mail_nut\" class=\"form-control\"  placeholder =\"écrir votre mail...\" >
                                </div>
                                <div class=\"modal-body\">

                                    <input type=\"text area\" min=\"1\" max=\"100\" name=\"message\"  class=\"form-control\"  placeholder =\"écrir votre message... \"}}>
                                </div>
                                <!-- Modal footer -->
                                <div class=\"modal-footer\">
                                    <div align=\"left\" >

                                        <a type=\"button\" href=\"{{ path('mail') }}\" class=\"btn btn-success\"  class=\"btn btn-danger\">Envoyer</a>


                                    </div>
                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                {% endfor %}
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
                <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
                <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

            </div>
        </div>
        </div>
    </section>



{% endblock %}", "pages/cours/liste_cours_front.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\cours\\liste_cours_front.html.twig");
    }
}
