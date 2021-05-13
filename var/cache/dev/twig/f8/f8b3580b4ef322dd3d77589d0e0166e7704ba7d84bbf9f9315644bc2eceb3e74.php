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

/* pages/admin/info/liste_info.html.twig */
class __TwigTemplate_b62d66f8c25e273afa44ff28c8ed36d3f487f39df33a197a80613d981cfef3c2 extends Template
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
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/info/liste_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/info/liste_info.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin/info/liste_info.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "


    <div class=\"content\">
        ";
        // line 16
        $this->loadTemplate("msg.html.twig", "pages/admin/info/liste_info.html.twig", 16)->display($context);
        // line 17
        echo "        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des info</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <form>
            <div class=\"input-group no-border\">

                <script src=\"";
        // line 25
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
                <th scope=\"col\">nom</th>
                <th scope=\"col\">prenon</th>
                <th scope=\"col\">mail</th>
                <th scope=\"col\">age</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">experience</th>
            </tr>
            </thead>
            <tbody>


            <tr ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo ">
                <td >";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td >";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "mail", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "age", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 56), "m-d-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "experience", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 62), "html", null, true);
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
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer info ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 102), "html", null, true);
            echo "</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_info", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 105)]), "html", null, true);
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
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_info", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier info </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"nom\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">prenom</label>
                                        <input type=\"text\" name=\"prenom\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prenom", [], "any", false, false, false, 137), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">mail</label>
                                        <input type=\"text\" name=\"mail\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "mail", [], "any", false, false, false, 146), "html", null, true);
            echo "\" class=\"form-control\">                                        </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">age</label>
                                        <input type=\"number\" name=\"age\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "age", [], "any", false, false, false, 152), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Date </label>
                                        <input type=\"date\" name=\"date\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 159), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">experience</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"experience\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "experience", [], "any", false, false, false, 165), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "            </div>
            </tbody>

        </table>
    </div>


    </table>

    <div class=\"navigation\">
        ";
        // line 189
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 189, $this->source); })()));
        echo "
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 195
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter info</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "nom", [], "any", false, false, false, 205), 'widget', ["attr" => ["placeholder" => "nom", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Prenom</label>
                            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "prenom", [], "any", false, false, false, 212), 'widget', ["attr" => ["placeholder" => "prenom", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">E-mail</label>
                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "mail", [], "any", false, false, false, 219), 'widget', ["attr" => ["placeholder" => "mail", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Age</label>
                            ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "age", [], "any", false, false, false, 227), 'widget', ["attr" => ["placeholder" => "age", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date </label>
                            ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "date", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Experience </label>
                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "experience", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                </div>
                    <br>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                ";
        // line 251
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), 'form_end');
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
        return "pages/admin/info/liste_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 251,  393 => 241,  383 => 234,  373 => 227,  362 => 219,  352 => 212,  342 => 205,  329 => 195,  320 => 189,  308 => 179,  288 => 165,  279 => 159,  269 => 152,  260 => 146,  248 => 137,  238 => 130,  225 => 120,  219 => 117,  204 => 105,  198 => 102,  190 => 97,  152 => 62,  147 => 60,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  115 => 51,  86 => 25,  76 => 17,  74 => 16,  68 => 12,  58 => 11,  35 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("






{% extends 'base.html.twig' %}


{% block body %}



    <div class=\"content\">
        {% include 'msg.html.twig' %}
        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des info</h1>
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
                <th scope=\"col\">nom</th>
                <th scope=\"col\">prenon</th>
                <th scope=\"col\">mail</th>
                <th scope=\"col\">age</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">experience</th>
            </tr>
            </thead>
            <tbody>


            <tr {% for i in info %}>
                <td >{{ i.nom }}</td>
                <td >{{ i.prenom }}</td>
                <td>{{ i.mail }}</td>
                <td>{{ i.age}}</td>
                <td>{{ i.date|date(\"m-d-Y\") }}</td>
                <td>{{ i.experience }}</td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ i.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ i.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

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
            <div class=\"modal fade\" id=\"deleteModal{{ i.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer info {{ i.nom }}</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"{{ path('delete_info', {'id':i.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>


            <!--  Update Modal -->
            <div class=\"modal fade\" id=\"updateModal{{ i.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"{{ path('update_info', {'id':i.id}) }}\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier info </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">nom</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"nom\" value=\"{{ i.nom }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">prenom</label>
                                        <input type=\"text\" name=\"prenom\" value=\"{{ i.prenom }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">mail</label>
                                        <input type=\"text\" name=\"mail\" value=\"{{ i.mail }}\" class=\"form-control\">                                        </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">age</label>
                                        <input type=\"number\" name=\"age\" value=\"{{ i.age }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Date </label>
                                        <input type=\"date\" name=\"date\" value=\"{{ i.date|date('Y-m-d') }}\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">experience</label>
                                        <input type=\"text\" maxlength=\"30\" name=\"experience\" value=\"{{ i.experience }}\" class=\"form-control\">
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
        {{ knp_pagination_render(info) }}
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter info</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Nom</label>
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'nom', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Prenom</label>
                            {{ form_widget(form.prenom, {'attr': {'placeholder': 'prenom', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">E-mail</label>
                            {{ form_widget(form.mail, {'attr': {'placeholder': 'mail', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Age</label>
                            {{ form_widget(form.age, {'attr': {'placeholder': 'age', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date </label>
                            {{ form_widget(form.date, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Experience </label>
                            {{ form_widget(form.experience, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                </div>
                    <br>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}












", "pages/admin/info/liste_info.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\pages\\admin\\info\\liste_info.html.twig");
    }
}
