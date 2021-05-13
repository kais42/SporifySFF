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

/* pages/admin/coach/liste_coach.html.twig */
class __TwigTemplate_74bbb8443bb59481b340ef98f00d729b7f758f9aef30ce601d88733d47919b45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/coach/liste_coach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/coach/liste_coach.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin/coach/liste_coach.html.twig", 1);
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
        $this->loadTemplate("msg.html.twig", "pages/admin/coach/liste_coach.html.twig", 9)->display($context);
        // line 10
        echo "        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des coachs</h1>
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
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">E-mail</th>
                <th scope=\"col\">Teléphone</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo ">
                <td> <img style=\"width: 100px\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 46))), "html", null, true);
            echo "\"> </td>
                <td >";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td >";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "addr", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "mail", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "num", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 56), "html", null, true);
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
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer lecoach ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 96), "html", null, true);
            echo "</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_coach", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 99)]), "html", null, true);
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
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_coach", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier coach </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo coach</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"no\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "nom", [], "any", false, false, false, 131), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Prenom</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"prenom\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "prenom", [], "any", false, false, false, 138), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Addresse</label>
                                        <textarea name=\"addr\" class=\"form-control\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "addr", [], "any", false, false, false, 147), "html", null, true);
            echo "</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">E-mail</label>
                                        <input type=\"text\" name=\"mail\" value=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "mail", [], "any", false, false, false, 154), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Numéro Télephone</label>
                                        <input type=\"text\" name=\"num\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "num", [], "any", false, false, false, 161), "html", null, true);
            echo "\" class=\"form-control\">
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
        // line 175
        echo "            </div>
            </tbody>

        </table>
    </div>


    </table>

    <div class=\"navigation\">
        ";
        // line 185
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 185, $this->source); })()));
        echo "
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Nouveau coach </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo coach</label>
                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "image", [], "any", false, false, false, 201), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "nom", [], "any", false, false, false, 208), 'widget', ["attr" => ["placeholder" => "Nom  coach", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Prenom</label>
                            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "prenom", [], "any", false, false, false, 215), 'widget', ["attr" => ["placeholder" => "Prenom coach", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Adresse</label>
                            ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "addr", [], "any", false, false, false, 222), 'widget', ["attr" => ["placeholder" => "Adresse coach", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">E-mail</label>
                            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "mail", [], "any", false, false, false, 230), 'widget', ["attr" => ["placeholder" => "E-mail coach", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Telephone</label>
                            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "num", [], "any", false, false, false, 237), 'widget', ["attr" => ["placeholder" => "Telephone coach", "class" => "form-control", "type" => "text"]]);
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
        // line 246
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), 'form_end');
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
        return "pages/admin/coach/liste_coach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 246,  393 => 237,  383 => 230,  372 => 222,  362 => 215,  352 => 208,  342 => 201,  329 => 191,  320 => 185,  308 => 175,  288 => 161,  278 => 154,  268 => 147,  256 => 138,  246 => 131,  226 => 114,  220 => 111,  205 => 99,  199 => 96,  191 => 91,  153 => 56,  148 => 54,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  116 => 45,  86 => 18,  76 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}



    <div class=\"content\">
        {% include 'msg.html.twig' %}
        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des coachs</h1>
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
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">E-mail</th>
                <th scope=\"col\">Teléphone</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr {% for n in coach %}>
                <td> <img style=\"width: 100px\" src=\"{{ asset('uploads/' ~ n.image) }}\"> </td>
                <td >{{ n.nom}}</td>
                <td >{{ n.prenom }}</td>
                <td>{{ n.addr }}</td>
                <td>{{ n.mail }}</td>
                <td>{{ n.num }}</td>
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
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer lecoach {{ n.nom }}</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"{{ path('delete_coach', {'id':n.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
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
                        <form method=\"post\" action=\"{{ path('update_coach', {'id':n.id}) }}\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier coach </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Photo coach</label>
                                        <input type=\"file\" name=\"image\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"no\" value=\"{{ n.nom }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Prenom</label>
                                        <input type=\"text\" min=\"1\" max=\"99\" name=\"prenom\" value=\"{{ n.prenom }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Addresse</label>
                                        <textarea name=\"addr\" class=\"form-control\">{{ n.addr }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">E-mail</label>
                                        <input type=\"text\" name=\"mail\" value=\"{{ n.mail }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Numéro Télephone</label>
                                        <input type=\"text\" name=\"num\" value=\"{{ n.num }}\" class=\"form-control\">
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


    </table>

    <div class=\"navigation\">
        {{ knp_pagination_render(coach) }}
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Nouveau coach </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo coach</label>
                            {{ form_widget(form.image, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom  coach', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Prenom</label>
                            {{ form_widget(form.prenom, {'attr': {'placeholder': 'Prenom coach', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Adresse</label>
                            {{ form_widget(form.addr, {'attr': {'placeholder': 'Adresse coach', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">E-mail</label>
                            {{ form_widget(form.mail, {'attr': {'placeholder': 'E-mail coach', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Telephone</label>
                            {{ form_widget(form.num, {'attr': {'placeholder': 'Telephone coach', 'class':'form-control', 'type':'text'}}) }}
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
", "pages/admin/coach/liste_coach.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\pages\\admin\\coach\\liste_coach.html.twig");
    }
}
