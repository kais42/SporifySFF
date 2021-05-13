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

/* pages/admin/regime/liste_regime.html.twig */
class __TwigTemplate_0ded0622458824dffc898a06150c1bdcee6defe053b049530888578742d98941 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/regime/liste_regime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/regime/liste_regime.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/admin/regime/liste_regime.html.twig", 1);
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
        $this->loadTemplate("msg.html.twig", "pages/admin/regime/liste_regime.html.twig", 9)->display($context);
        // line 10
        echo "        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des Regime</h1>
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
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Exemple Regime</th>
                <th scope=\"col\">détail Regime</th>


                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regime"]) || array_key_exists("regime", $context) ? $context["regime"] : (function () { throw new RuntimeError('Variable "regime" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo ">
                <td >";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td> <img style=\"width: 100px\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 46))), "html", null, true);
            echo "\"> </td>
                <td ><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["n"], "description", [], "any", false, false, false, 47))), "html", null, true);
            echo "\">détail regime (PDF)</a>
                </td>
                <td><div style=\"display: flex\">

                        <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                        <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 53), "html", null, true);
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
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">
                            <br>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer regime";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 93), "html", null, true);
            echo "</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_regime", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 96)]), "html", null, true);
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
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <form method=\"post\" action=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_regime", ["id" => twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Regime </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Type regime</label>
                                        <select class=\"custom-select rounded-0\" name=\"type\">
                                            <option value=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 122), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 122), "html", null, true);
            echo "</option>
                                            <option value=\"\" selected> </option>
                                            <option value=\"Mincisseur\" selected>Mincisseur</option>
                                            <option value=\"Prise De Masse\" selected>Prise De Masse</option>
                                        </select>
                                    </div>
                                <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Exemple Regime</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["n"], "description", [], "any", false, false, false, 138))), "html", null, true);
            echo "\">détail regime (PDF)</a>
                                            <input type=\"file\" name=\"description\" class=\"form-control\">
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
        // line 155
        echo "            </div>
            </tbody>

        </table>
    </div>


    </table>

    <div class=\"navigation\">
        ";
        // line 165
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["regime"]) || array_key_exists("regime", $context) ? $context["regime"] : (function () { throw new RuntimeError('Variable "regime" does not exist.', 165, $this->source); })()));
        echo "
    </div>
    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un Nouvelle Nutritionniste</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Type regime</label>
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "type", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Exemple Regime</label>
                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "image", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">détail regime (PDF)</label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "description", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                </div>


                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                </div>
                ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
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
        return "pages/admin/regime/liste_regime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 205,  326 => 195,  316 => 188,  306 => 181,  293 => 171,  284 => 165,  272 => 155,  249 => 138,  228 => 122,  214 => 111,  208 => 108,  193 => 96,  187 => 93,  179 => 88,  141 => 53,  136 => 51,  129 => 47,  125 => 46,  121 => 45,  115 => 44,  86 => 18,  76 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}



    <div class=\"content\">
        {% include 'msg.html.twig' %}
        <div style=\"display: flex; align-items: center; justify-content: space-between\">

            <h1 style=\"margin-right: 20px\">Liste des Regime</h1>
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
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Exemple Regime</th>
                <th scope=\"col\">détail Regime</th>


                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>


            <tr {% for n in regime %}>
                <td >{{ n.type }}</td>
                <td> <img style=\"width: 100px\" src=\"{{ asset('uploads/' ~ n.image) }}\"> </td>
                <td ><a href=\"{{ asset('uploads/brochures/' ~ n.description) }}\">détail regime (PDF)</a>
                </td>
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
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer regime{{ n.type }}</h5>
                            <br>
                            <div style=\"text-align: center\">
                                <a type=\"button\" href=\"{{ path('delete_regime', {'id':n.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
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
                        <form method=\"post\" action=\"{{ path('update_regime', {'id':n.id}) }}\" enctype=\"multipart/form-data\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Regime </h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <br>
                                <div class=\"form-group row\">
                                    <div class=\"col-md-12\">
                                        <label class=\"form__label\">Type regime</label>
                                        <select class=\"custom-select rounded-0\" name=\"type\">
                                            <option value=\"{{  n.type  }}\" selected>{{  n.type  }}</option>
                                            <option value=\"\" selected> </option>
                                            <option value=\"Mincisseur\" selected>Mincisseur</option>
                                            <option value=\"Prise De Masse\" selected>Prise De Masse</option>
                                        </select>
                                    </div>
                                <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Exemple Regime</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <a href=\"{{ asset('uploads/brochures/' ~ n.description) }}\">détail regime (PDF)</a>
                                            <input type=\"file\" name=\"description\" class=\"form-control\">
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
        {{ knp_pagination_render(regime) }}
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
                            <label class=\"form__label\">Type regime</label>
                            {{ form_widget(form.type, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Exemple Regime</label>
                            {{ form_widget(form.image, {'attr': { 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">détail regime (PDF)</label>
                            {{ form_widget(form.description, {'attr': { 'class':'form-control'}}) }}
                        </div>
                    </div>
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
", "pages/admin/regime/liste_regime.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\pages\\admin\\regime\\liste_regime.html.twig");
    }
}
