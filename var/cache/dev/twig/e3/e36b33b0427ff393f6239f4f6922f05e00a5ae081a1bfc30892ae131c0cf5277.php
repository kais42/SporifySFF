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

/* pages/admin/cours/liste_cours.html.twig */
class __TwigTemplate_04b98f7948a88657db82650d2462a2aed88945fb01a300cea5d57c7628181ec9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/cours/liste_cours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/cours/liste_cours.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin/cours/liste_cours.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Cours</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div style=\"margin-left: 200px\">

            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <center><input type=\"text\" id=\"search\" placeholder=\"CHERCHER Cours...\"></center>

        </div>

        <br>
        <table class=\"table table-bordered dataTable\" id=\"tableac\" width=\"100%\" cellspacing=\"0\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
            <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Categorie</th>
                <th scope=\"col\">Niveau</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo ">
                <td> <img style=\"width: 100px\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\"> </td>
                <td >";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td >";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "categorie", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "niveau", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                    </div>
                </td>
            </tr>
            <script>
                \$(document).ready(function(){
                    \$('#search').keyup(function(){
                        search_table(\$(this).val());
                    });
                    function search_table(value){
                        \$('#tableac tbody tr').each(function(){
                            var found = 'false';
                            \$(this).each(function(){
                                if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                {
                                    found = 'true';
                                }
                            });
                            if(found == 'true')
                            {
                                \$(this).show();

                            }
                            else
                            {
                                \$(this).hide();

                            }
                        });
                    }
                });
            </script>

            <!-- Delete Modal -->
            <div class=\"modal fade\" id=\"deleteModal";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le cours ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 82), "html", null, true);
            echo "</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                                <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>


            <!--  Update Modal -->
            <div class=\"modal fade\" id=\"updateModal";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_cours", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Cours </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo du couverture</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"nom\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 117), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Categorie</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"categorie\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "categorie", [], "any", false, false, false, 124), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Niveau</label>
                                        <textarea name=\"niveau\" class=\"form-control\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "niveau", [], "any", false, false, false, 133), "html", null, true);
            echo "</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">Fermer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </div>
            </tbody>

        </table>
    </div>


    <div class=\"navigation\">
        ";
        // line 155
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 155, $this->source); })()));
        echo "
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau cours</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du Cours</label>
                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "image", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), 'widget', ["attr" => ["placeholder" => "Nom  cours", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Categorie</label>
                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "categorie", [], "any", false, false, false, 185), 'widget', ["attr" => ["placeholder" => "Categorie cours", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Niveau</label>
                            ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "niveau", [], "any", false, false, false, 192), 'widget', ["attr" => ["placeholder" => "Niveau cours", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                ";
        // line 201
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/admin/cours/liste_cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 201,  327 => 192,  317 => 185,  307 => 178,  297 => 171,  284 => 161,  275 => 155,  265 => 147,  245 => 133,  233 => 124,  223 => 117,  203 => 100,  197 => 97,  182 => 85,  176 => 82,  168 => 77,  130 => 42,  125 => 40,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  101 => 33,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Cours</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div style=\"margin-left: 200px\">

            <script src=\"{{ asset('back/js/jquery.min.js') }}\"></script>
            <center><input type=\"text\" id=\"search\" placeholder=\"CHERCHER Cours...\"></center>

        </div>

        <br>
        <table class=\"table table-bordered dataTable\" id=\"tableac\" width=\"100%\" cellspacing=\"0\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">
            <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Categorie</th>
                <th scope=\"col\">Niveau</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr {% for n in cours %}>
                <td> <img style=\"width: 100px\" src=\"{{ asset('uploads/' ~ n.image) }}\"> </td>
                <td >{{ n.nom}}</td>
                <td >{{ n.categorie }}</td>
                <td>{{ n.niveau }}</td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ n.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ n.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                    </div>
                </td>
            </tr>
            <script>
                \$(document).ready(function(){
                    \$('#search').keyup(function(){
                        search_table(\$(this).val());
                    });
                    function search_table(value){
                        \$('#tableac tbody tr').each(function(){
                            var found = 'false';
                            \$(this).each(function(){
                                if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                {
                                    found = 'true';
                                }
                            });
                            if(found == 'true')
                            {
                                \$(this).show();

                            }
                            else
                            {
                                \$(this).hide();

                            }
                        });
                    }
                });
            </script>

            <!-- Delete Modal -->
            <div class=\"modal fade\" id=\"deleteModal{{ n.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le cours {{ n.nom }}</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"{{ path('delete_cours', {'id':n.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>


            <!--  Update Modal -->
            <div class=\"modal fade\" id=\"updateModal{{ n.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"{{ path('update_cours', {'id':n.id}) }}\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Cours </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo du couverture</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"nom\" value=\"{{ n.nom }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Categorie</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"categorie\" value=\"{{ n.categorie }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Niveau</label>
                                        <textarea name=\"niveau\" class=\"form-control\">{{ n.niveau }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\">Fermer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {% endfor %}
            </div>
            </tbody>

        </table>
    </div>


    <div class=\"navigation\">
        {{ knp_pagination_render(cours) }}
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau cours</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du Cours</label>
                            {{ form_widget(form.image, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom  cours', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Categorie</label>
                            {{ form_widget(form.categorie, {'attr': {'placeholder': 'Categorie cours', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Niveau</label>
                            {{ form_widget(form.niveau, {'attr': {'placeholder': 'Niveau cours', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>


{% endblock %}
", "pages/admin/cours/liste_cours.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\cours\\liste_cours.html.twig");
    }
}
