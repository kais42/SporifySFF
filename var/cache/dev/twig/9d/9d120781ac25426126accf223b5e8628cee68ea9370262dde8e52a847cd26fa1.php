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

/* pages/admin/promo/liste_promo.html.twig */
class __TwigTemplate_c3f7ff59fe7b866c2981b1a72d7df33b67d38c0eb4a755645b57c662eab33685 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/promo/liste_promo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/admin/promo/liste_promo.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin/index.html.twig", "pages/admin/promo/liste_promo.html.twig", 1);
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
        echo "<title>Promo - Admin</title>
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
        echo "<a class=\"navbar-brand\" href=\"javascript:;\">Promos</a>
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
        echo "    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Promotions</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <br>
        ";
        // line 18
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "pourcentage", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <div class=\"col-sm-12 alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "pourcentage", [], "any", false, false, false, 19), 'errors');
            echo "</div>
        ";
        }
        // line 21
        echo "        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Pourcentage</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Type produit</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promos"]) || array_key_exists("promos", $context) ? $context["promos"] : (function () { throw new RuntimeError('Variable "promos" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 36
            echo "                <tr>
                    <td >";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "pourcentage", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td >";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "DateDebut", [], "any", false, false, false, 40), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "DateFin", [], "any", false, false, false, 41), "m-d-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!-- Delete Modal -->
              <div class=\"modal fade\" id=\"deleteModal";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer la promotion ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 58), "html", null, true);
            echo "</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_promo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 61)]), "html", null, true);
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
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_promo", ["id" => twig_get_attribute($this->env, $this->source, $context["promo"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier la promotion </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"titre\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "titre", [], "any", false, false, false, 86), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Type de produit</label>
                                            <select name=\"type_produit\" class=\"form-control\">
                                                <option value=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 95), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "typeProduit", [], "any", false, false, false, 95), "html", null, true);
            echo "</option>
                                                <option value=\"Tshirts\">Tshirts</option>
                                                <option value=\"Vestes\">Vestes</option>
                                                <option value=\"Equipement\">Equipement</option>
                                                <option value=\"Pantalons\">Pantalons</option>
                                                <option value=\"Accessoires\">Accessoires</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Pourcentage</label>
                                            <input type=\"number\" min=\"1\" max=\"99\" name=\"pourcentage\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "pourcentage", [], "any", false, false, false, 109), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "description", [], "any", false, false, false, 118), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "dateDebut", [], "any", false, false, false, 125), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promo"], "dateFin", [], "any", false, false, false, 132), "Y-m-d"), "html", null, true);
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                </div>
                                </div>
                            </form>
                        </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>
            </tbody>

        </table>
    </div>


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une nouvelle Promotion</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Titre</label>
                            ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "titre", [], "any", false, false, false, 167), 'widget', ["attr" => ["placeholder" => "Titre du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Pourcentage</label>
                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "pourcentage", [], "any", false, false, false, 174), 'widget', ["attr" => ["placeholder" => "Pourcentage du projet", "class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Type de produit</label>
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "typeProduit", [], "any", false, false, false, 180), 'widget', ["class" => "form-control"]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Description</label>
                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "description", [], "any", false, false, false, 187), 'widget', ["attr" => ["placeholder" => "Description du projet", "class" => "form-control", "type" => "text"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">

                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date debut</label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "date_debut", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "date_fin", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control"]]);
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
        return "pages/admin/promo/liste_promo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 211,  398 => 202,  388 => 195,  377 => 187,  367 => 180,  358 => 174,  348 => 167,  335 => 157,  322 => 146,  302 => 132,  292 => 125,  282 => 118,  270 => 109,  251 => 95,  239 => 86,  226 => 76,  220 => 73,  205 => 61,  199 => 58,  191 => 53,  182 => 47,  177 => 45,  171 => 42,  167 => 41,  163 => 40,  159 => 39,  155 => 38,  151 => 37,  148 => 36,  144 => 35,  128 => 21,  122 => 19,  120 => 18,  112 => 12,  102 => 11,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin/index.html.twig' %}

{% block title %}
<title>Promo - Admin</title>
{% endblock %}

{% block subtitle %}
<a class=\"navbar-brand\" href=\"javascript:;\">Promos</a>
{% endblock %}

{% block body %}
    <div class=\"content\">
        <div style=\"display: flex; align-items: center; justify-content: space-between\">
            <h1 style=\"margin-right: 20px\">Liste des Promotions</h1>
            <button data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" class=\"btn btn-outline-success\" style=\"width: 100px\"><i class=\"nc-icon nc-simple-add\" style=\"font-size: 28px\"></i></button>
        </div>
        <br>
        {% if form.pourcentage.vars.errors|length %}
            <div class=\"col-sm-12 alert alert-danger\">{{ form_errors(form.pourcentage) }}</div>
        {% endif %}
        <br>
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">Pourcentage</th>
                <th scope=\"col\">Titre</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Date debut</th>
                <th scope=\"col\">Date fin</th>
                <th scope=\"col\">Type produit</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for promo in promos %}
                <tr>
                    <td >{{ promo.pourcentage }}</td>
                    <td >{{ promo.titre }}</td>
                    <td>{{ promo.description }}</td>
                    <td>{{ promo.DateDebut|date(\"m-d-Y\") }}</td>
                    <td>{{ promo.DateFin|date(\"m-d-Y\") }}</td>
                    <td>{{ promo.typeProduit }}</td>
                    <td><div style=\"display: flex\">

                            <button class=\"btn btn-outline-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#updateModal{{ promo.id }}\" style=\"margin-right: 10px\"><i class=\"nc-icon nc-settings\"></i></button>

                            <button class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ promo.id }}\"><i class=\"nc-icon nc-simple-delete\"></i></button>

                        </div>
                    </td>
                </tr>
                <!-- Delete Modal -->
              <div class=\"modal fade\" id=\"deleteModal{{ promo.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <br>
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez vous supprimer la promotion {{ promo.titre }}</h5>
                                <br>
                                <div style=\"text-align: center\">
                                    <a type=\"button\" href=\"{{ path('delete_promo', {'id':promo.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                                    <a type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


                <!--  Update Modal -->
                <div class=\"modal fade\" id=\"updateModal{{ promo.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <form method=\"post\" action=\"{{ path('update_promo', {'id':promo.id}) }}\" enctype=\"multipart/form-data\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier la promotion </h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Titre</label>
                                            <input type=\"text\" maxlength=\"30\" name=\"titre\" value=\"{{ promo.titre }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Type de produit</label>
                                            <select name=\"type_produit\" class=\"form-control\">
                                                <option value=\"{{ promo.typeProduit }}\" selected>{{ promo.typeProduit }}</option>
                                                <option value=\"Tshirts\">Tshirts</option>
                                                <option value=\"Vestes\">Vestes</option>
                                                <option value=\"Equipement\">Equipement</option>
                                                <option value=\"Pantalons\">Pantalons</option>
                                                <option value=\"Accessoires\">Accessoires</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Pourcentage</label>
                                            <input type=\"number\" min=\"1\" max=\"99\" name=\"pourcentage\" value=\"{{ promo.pourcentage }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>

                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Description</label>
                                            <textarea name=\"description\" class=\"form-control\">{{ promo.description }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date debut</label>
                                            <input type=\"date\" name=\"DateDebut\" value=\"{{ promo.dateDebut|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <label class=\"form__label\">Date fin</label>
                                            <input type=\"date\" name=\"DateFin\" value=\"{{ promo.dateFin|date('Y-m-d') }}\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <br>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
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


    <!-- Add Modal -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                {{ form_start(form, {'attr': {'enctype':'multipart/form-data'}}) }}
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une nouvelle Promotion</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
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
                            <label class=\"form__label\">Pourcentage</label>
                            {{ form_widget(form.pourcentage, {'attr': {'placeholder': 'Pourcentage du projet', 'class':'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Type de produit</label>
                            {{ form_widget(form.typeProduit, {'class':'form-control'}) }}
                        </div>
                    </div>
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
                            {{ form_widget(form.date_debut, {'attr': {'class':'form-control'}}) }}
                        </div>
                    </div>
                    <br>
                    <div class=\"form-group row\">
                        <div class=\"col-md-12\">
                            <label class=\"form__label\">Date fin</label>
                            {{ form_widget(form.date_fin, {'attr': {'class':'form-control'}}) }}
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
", "pages/admin/promo/liste_promo.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\admin\\promo\\liste_promo.html.twig");
    }
}
