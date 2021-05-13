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

/* pages/admin/exercice/liste_exercice.html.twig */
class __TwigTemplate_b3432179d8977187056e5d0c2f6529c99bd0ef4684294a26c5cbafebcfe87b08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/exercice/liste_exercice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/exercice/liste_exercice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin/exercice/liste_exercice.html.twig", 1);
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
        ";
        // line 9
        $this->loadTemplate("msg.html.twig", "pages/admin/exercice/liste_exercice.html.twig", 9)->display($context);
        // line 10
        echo "        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des Exercices</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <form>
            <div class=\"input-group no-border\">

                <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <div class=\"input-group no-border\">
                    <center><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search \"></center>
                    <div class=\"input-group-text\">
                        <i class=\"nc-icon nc-zoom-split\"></i>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <table class=\"table table-bordered dataTable\" id=\"tableac\" width=\"100%\" cellspacing=\"0\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">


            <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">location</th>
                <th scope=\"col\">duration</th>

                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo ">
                <td> <img style=\"width: 100px\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 45))), "html", null, true);
            echo "\"> </td>
                <td >";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td >";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "duration", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "location", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>

                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 54), "html", null, true);
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
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer Exercice ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 94), "html", null, true);
            echo "</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_exercice", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 97)]), "html", null, true);
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
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_exercice", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Exercice </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"nom\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 124), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Location</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"location\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "location", [], "any", false, false, false, 131), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Duration</label>
                                        <textarea name=\"duration\" class=\"form-control\">";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "duration", [], "any", false, false, false, 140), "html", null, true);
            echo "</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo d'Exercice</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>

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
        // line 161
        echo "            </div>
            </tbody>

        </table>
    </div>


    </table>

    <div class=\"navigation\">
        ";
        // line 171
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 171, $this->source); })()));
        echo "
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Nouvelle Nutritionniste</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo exercice</label>
                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "image", [], "any", false, false, false, 187), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "nom", [], "any", false, false, false, 194), 'widget', ["attr" => ["placeholder" => "Nom  exercice", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">location</label>
                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "location", [], "any", false, false, false, 201), 'widget', ["attr" => ["placeholder" => "location", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">duration</label>
                            ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "duration", [], "any", false, false, false, 208), 'widget', ["attr" => ["placeholder" => "dration", "class" => "form-control", "type" => "text"]]);
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
        // line 219
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'form_end');
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
        return "pages/admin/exercice/liste_exercice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 219,  346 => 208,  336 => 201,  326 => 194,  316 => 187,  303 => 177,  294 => 171,  282 => 161,  255 => 140,  243 => 131,  233 => 124,  218 => 112,  212 => 109,  197 => 97,  191 => 94,  183 => 89,  145 => 54,  140 => 52,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  115 => 44,  86 => 18,  76 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}



    <div class=\"content\">
        {% include 'msg.html.twig' %}
        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des Exercices</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <form>
            <div class=\"input-group no-border\">

                <script src=\"{{ asset('back/js/jquery.min.js') }}\"></script>
                <div class=\"input-group no-border\">
                    <center><input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search \"></center>
                    <div class=\"input-group-text\">
                        <i class=\"nc-icon nc-zoom-split\"></i>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <table class=\"table table-bordered dataTable\" id=\"tableac\" width=\"100%\" cellspacing=\"0\" role=\"grid\" aria-describedby=\"dataTable_info\" style=\"width: 100%;\">


            <thead>
            <tr>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">location</th>
                <th scope=\"col\">duration</th>

                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr {% for n in exercice %}>
                <td> <img style=\"width: 100px\" src=\"{{ asset('uploads/' ~ n.image) }}\"> </td>
                <td >{{ n.nom}}</td>
                <td >{{ n.duration }}</td>
                <td>{{ n.location }}</td>

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
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer Exercice {{ n.nom }}</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"{{ path('delete_exercice', {'id':n.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
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
                        <form method=\"post\" action=\"{{ path('update_exercice', {'id':n.id}) }}\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Exercice </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>

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
                                        <label class=\"form__label\">Location</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"location\" value=\"{{ n.location }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Duration</label>
                                        <textarea name=\"duration\" class=\"form-control\">{{ n.duration }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo d'Exercice</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>

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


    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(exercice) }}
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Nouvelle Nutritionniste</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo exercice</label>
                            {{ form_widget(form.image, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom  exercice', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">location</label>
                            {{ form_widget(form.location, {'attr': {'placeholder': 'location', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">duration</label>
                            {{ form_widget(form.duration, {'attr': {'placeholder': 'dration', 'class':'form-control', 'type':'text'}}) }}
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
", "pages/admin/exercice/liste_exercice.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\exercice\\liste_exercice.html.twig");
    }
}
