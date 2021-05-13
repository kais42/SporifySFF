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

/* pages/admin/event/liste_event.html.twig */
class __TwigTemplate_ca05fa8b5b368f01007b33f33f802e666b68b394c0d99427c4185352f8f1376c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/event/liste_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/event/liste_event.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/event/liste_event.html.twig", 1);
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
        echo "<title>Event - Admin</title>
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
        echo "<a class=\"navbar-brand\" href=\"javascript:;\">Events</a>
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
        echo "
    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Evenements</h1>
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri_event");
        echo "\">Trier par ordre décroissant</a>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div class=\"form-group row\">
            <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\", method=\"post\">
            <div class=\"col-md-12\">
                <label class=\"form__label\">Recherche par titre ou description</label>
                <input type=\"text\"  name=\"search\"  class=\"form-control\">
            </div>
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
            </form>
        </div>
        <br>
        ";
        // line 31
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31))) {
            // line 32
            echo "            <div class=\"col-sm-12 alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'errors');
            echo "</div>
        ";
        }
        // line 34
        echo "        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 48
            echo "                <tr>
                    <td> <img style=\"width: 100px\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/events/" . twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 49))), "html", null, true);
            echo "\"> </td>
                    <td >";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 52), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 53), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!--  Delete Modal -->
                <div class=\"modal fade\" id=\"deleteModal";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le event ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 69), "html", null, true);
            echo "</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 72)]), "html", null, true);
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
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_event", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier le evenement</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"title\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 97), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Emplacement</label>
                                            <input type=\"text\"  name=\"location\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 104), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 111), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 118), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 125), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Photo du couverture</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau evenement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Emplacement</label>
                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "location", [], "any", false, false, false, 165), 'widget', ["attr" => ["placeholder" => "Emplacement du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "titre", [], "any", false, false, false, 172), 'widget', ["attr" => ["placeholder" => "Titre du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "description", [], "any", false, false, false, 180), 'widget', ["attr" => ["placeholder" => "Description du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "dateDebut", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "dateFin", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du couverture</label>
                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "image", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control"]]);
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
        // line 211
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), 'form_end');
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
        return "pages/admin/event/liste_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 211,  396 => 202,  386 => 195,  376 => 188,  365 => 180,  354 => 172,  344 => 165,  332 => 156,  321 => 147,  293 => 125,  283 => 118,  273 => 111,  263 => 104,  253 => 97,  240 => 87,  234 => 84,  219 => 72,  213 => 69,  205 => 64,  196 => 58,  191 => 56,  185 => 53,  181 => 52,  177 => 51,  173 => 50,  169 => 49,  166 => 48,  162 => 47,  147 => 34,  141 => 32,  139 => 31,  125 => 20,  118 => 16,  112 => 12,  102 => 11,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Event - Admin</title>
{% endblock %}

{% block subtitle %}
<a class=\"navbar-brand\" href=\"javascript:;\">Events</a>
{% endblock %}

{% block body %}

    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Evenements</h1>
            <a href=\"{{ path('tri_event') }}\">Trier par ordre décroissant</a>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <div class=\"form-group row\">
            <form action=\"{{ path('search') }}\", method=\"post\">
            <div class=\"col-md-12\">
                <label class=\"form__label\">Recherche par titre ou description</label>
                <input type=\"text\"  name=\"search\"  class=\"form-control\">
            </div>
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
            </form>
        </div>
        <br>
        {% if form.titre.vars.errors|length %}
            <div class=\"col-sm-12 alert alert-danger\">{{ form_errors(form.titre) }}</div>
        {% endif %}
        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Photo</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for event in events %}
                <tr>
                    <td> <img style=\"width: 100px\" src=\"{{ asset('upload/events/' ~ event.image) }}\"> </td>
                    <td >{{ event.titre }}</td>
                    <td>{{ event.description }}</td>
                    <td>{{ event.dateDebut|date(\"m-d-Y\") }}</td>
                    <td>{{ event.dateFin|date(\"m-d-Y\") }}</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ event.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ event.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!--  Delete Modal -->
                <div class=\"modal fade\" id=\"deleteModal{{ event.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer le event {{ event.titre }}</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"{{ path('delete_event', {'id':event.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                    <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


               <!--  Update Modal -->
                <div class=\"modal fade\" id=\"updateModal{{ event.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"{{ path('update_event', {'id':event.id}) }}\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier le evenement</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"title\" value=\"{{ event.titre }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Emplacement</label>
                                            <input type=\"text\"  name=\"location\" value=\"{{ event.location }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">{{ event.description }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"{{ event.dateDebut|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"{{ event.dateFin|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Photo du couverture</label>
                                            <input type=\"file\" name=\"image\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            {% endfor %}
            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un nouveau evenement</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Emplacement</label>
                            {{ form_widget(form.location, {'attr': {'placeholder': 'Emplacement du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            {{ form_widget(form.titre, {'attr': {'placeholder': 'Titre du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            {{ form_widget(form.description, {'attr': {'placeholder': 'Description du projet', 'class':'form-control', 'type':'text'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            {{ form_widget(form.dateDebut, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            {{ form_widget(form.dateFin, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Photo du couverture</label>
                            {{ form_widget(form.image, {'attr': {'class':'form-control'}}) }}
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


{% endblock %}", "pages/admin/event/liste_event.html.twig", "E:\\WorkSpace\\task\\web\\symfony\\Anas S\\integ1\\templates\\pages\\admin\\event\\liste_event.html.twig");
    }
}
