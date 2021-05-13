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

/* pages/product/detail.html.twig */
class __TwigTemplate_3a49ef7f01856411f88d5430cbe0480c5cb7c4b3a4c11f322ea83567ed5979d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/product/detail.html.twig"));

        $this->parent = $this->loadTemplate("layout/index.html.twig", "pages/product/detail.html.twig", 1);
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
        echo "<title>Product - Detail</title>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Single product</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Shop</a></div>
        <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">Single product</span></div>
      </div>
    </div>
  </div>
</section>
<!-- Single-product-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-30 row-lg-60 justify-content-between\">
      <div class=\"col-md-6\">
        <div class=\"owl-carousel owl-product\" data-owl=\"{&quot;nav&quot;:true}\" data-items=\"1\">
          <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "getImage", [], "any", false, false, false, 27)), "html", null, true);
        echo "\" alt=\"\" width=\"252\" height=\"255\"/>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"product product-overview\">
          <h2 class=\"product-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "getName", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
          <div class=\"product-meta\">
            <div class=\"product-meta-item\">
              <div class=\"h4 text-primary\">\$";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "getPrice", [], "any", false, false, false, 35), "html", null, true);
        echo "</div>
            </div>
            <div class=\"product-meta-item\">
              <div class=\"product-rating\">
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star-half\"></div>
              </div>
            </div>
            <div class=\"product-meta-item\">
              <div class=\"product-meta-text\">5 Reviews</div>
            </div>
          </div>
          <div class=\"product-divider divider divider-1\"></div>
          <div class=\"product-description\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "getDescription", [], "any", false, false, false, 51), "html", null, true);
        echo "</div>
          <div class=\"product-action\">
            <div class=\"product-action-item product-action-item-width\">
              <div class=\"product-action-title product-action-title\">Select color:</div>
            </div>
            <div class=\"product-action-item\">
              <div class=\"group-15 d-flex flex-wrap\">
                <div class=\"checkbox-color\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"7099q8g5upe\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"7099q8g5upe\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-secondary\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"l9l8a95dufl\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"l9l8a95dufl\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-tertiary\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"d6qqd5wkn2\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"d6qqd5wkn2\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-gray-900\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"t2my1qy8hk\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"t2my1qy8hk\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-gray-600\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"z9geirva3pk\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"z9geirva3pk\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"product-action\">
            <div class=\"product-action-item product-action-item-width\">
              <div class=\"product-action-title product-action-title\">Select size:</div>
            </div>
            <div class=\"product-action-item\">
              <div class=\"group-5 d-flex flex-wrap\">
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 88
            echo "                  ";
            if ((0 === twig_compare($context["size"], twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "size", [], "any", false, false, false, 88)))) {
                // line 89
                echo "                  <div class=\"checkbox-tag\">
                    <input class=\"checkbox-tag-input\" type=\"radio\" id=\"";
                // line 90
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\" name=\"productOverviewSize\" checked>
                    <label class=\"checkbox-tag-label\" for=\"";
                // line 91
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\">
                      ";
                // line 92
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "
                    </label>
                  </div>
                  ";
            } else {
                // line 96
                echo "                  <div class=\"checkbox-tag\">
                    <input class=\"checkbox-tag-input\" type=\"radio\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\" name=\"productOverviewSize\">
                    <label class=\"checkbox-tag-label\" for=\"";
                // line 98
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "\">
                      ";
                // line 99
                echo twig_escape_filter($this->env, $context["size"], "html", null, true);
                echo "
                    </label>
                  </div>
                  ";
            }
            // line 103
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "              </div>
            </div>
          </div>
          <div class=\"product-action\">
            <div class=\"product-action-item\">
              <div class=\"product-action-title product-action-title\">QTY:</div>
            </div>
            <div class=\"product-action-item\">
              <input type=\"number\" value=\"1\" name=\"qty\" data-spinner>
            </div>
            <div class=\"product-action-item\">
              <button class=\"btn\">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"tab tab-boxed\">
          <ul class=\"nav nav-line tab-nav\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" data-toggle=\"tab\" href=\"#navLine1-1\" role=\"tab\" aria-selected=\"true\">Description</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#navLine1-2\" role=\"tab\" aria-selected=\"false\">Delivery</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#navLine1-3\" role=\"tab\" aria-selected=\"false\">(3) Reviews</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"navLine1-1\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"navLine1-2\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"navLine1-3\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-02-43x43.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">John Doe</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-04-43x43.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">Alice Jackson</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person-03-43x43.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">Will McMillan</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <h4>Write Your Review</h4>
                <form class=\"rd-form\">
                  <div class=\"row row-15 row-gutters-14\">
                    <div class=\"col-md-6\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-input\">Your name</label>
                        <div class=\"form-validation-wrap\">
                          <input class=\"form-control\" id=\"contact-input\" type=\"text\" name=\"contact-name\" placeholder=\"Enter Your name\" data-constraints=\"@Required\">
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-6\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-email\">Your E-mail</label>
                        <div class=\"form-validation-wrap\">
                          <input class=\"form-control\" id=\"contact-email\" type=\"email\" name=\"contact-email\" placeholder=\"Enter Your E-mail\" data-constraints=\"@Email @Required\">
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-message\">Your Review</label>
                        <div class=\"form-validation-wrap\">
                          <textarea class=\"form-control\" id=\"contact-message\" name=\"textarea\" placeholder=\"Enter Your Review\" data-constraints=\"@Required\"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12 mt-1 mt-xl-0\">
                      <button class=\"btn btn-min-width\" type=\"submit\">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
        return "pages/product/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 187,  299 => 166,  275 => 145,  232 => 104,  226 => 103,  219 => 99,  215 => 98,  211 => 97,  208 => 96,  201 => 92,  197 => 91,  193 => 90,  190 => 89,  187 => 88,  183 => 87,  144 => 51,  125 => 35,  119 => 32,  111 => 27,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/index.html.twig' %}

{% block title %}
<title>Product - Detail</title>
{% endblock %}

{% block body %}
<section class=\"section breadcrumb-section\" style=\"background-image: url(images/image-10-1920x232.jpg)\">
  <div class=\"container\">
    <h2 class=\"breadcrumb-section-title\">Single product</h2>
    <!-- Breadcrumb-->
    <div class=\"breadcrumb\">
      <div class=\"breadcrumb-inner\">
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"index.html\">Home</a></div>
        <div class=\"breadcrumb-item\"><a class=\"breadcrumb-link\" href=\"#\">Shop</a></div>
        <div class=\"breadcrumb-item\"><span class=\"breadcrumb-text breadcrumb-active\">Single product</span></div>
      </div>
    </div>
  </div>
</section>
<!-- Single-product-->
<section class=\"section-md bg-transparent\">
  <div class=\"container\">
    <div class=\"row row-30 row-lg-60 justify-content-between\">
      <div class=\"col-md-6\">
        <div class=\"owl-carousel owl-product\" data-owl=\"{&quot;nav&quot;:true}\" data-items=\"1\">
          <img src=\"{{ asset(product.getImage) }}\" alt=\"\" width=\"252\" height=\"255\"/>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"product product-overview\">
          <h2 class=\"product-title\">{{ product.getName }}</h2>
          <div class=\"product-meta\">
            <div class=\"product-meta-item\">
              <div class=\"h4 text-primary\">\${{ product.getPrice }}</div>
            </div>
            <div class=\"product-meta-item\">
              <div class=\"product-rating\">
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star\"></div>
                <div class=\"product-rating-item mdi-star-half\"></div>
              </div>
            </div>
            <div class=\"product-meta-item\">
              <div class=\"product-meta-text\">5 Reviews</div>
            </div>
          </div>
          <div class=\"product-divider divider divider-1\"></div>
          <div class=\"product-description\">{{ product.getDescription }}</div>
          <div class=\"product-action\">
            <div class=\"product-action-item product-action-item-width\">
              <div class=\"product-action-title product-action-title\">Select color:</div>
            </div>
            <div class=\"product-action-item\">
              <div class=\"group-15 d-flex flex-wrap\">
                <div class=\"checkbox-color\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"7099q8g5upe\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"7099q8g5upe\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-secondary\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"l9l8a95dufl\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"l9l8a95dufl\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-tertiary\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"d6qqd5wkn2\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"d6qqd5wkn2\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-gray-900\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"t2my1qy8hk\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"t2my1qy8hk\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
                <div class=\"checkbox-color checkbox-color-gray-600\">
                  <input class=\"checkbox-color-input\" type=\"radio\" id=\"z9geirva3pk\" name=\"productOverviewColor\">
                  <label class=\"checkbox-color-label\" for=\"z9geirva3pk\"><span class=\"checkbox-color-content int-check novi-icon\"></span></label>
                </div>
              </div>
            </div>
          </div>
          <div class=\"product-action\">
            <div class=\"product-action-item product-action-item-width\">
              <div class=\"product-action-title product-action-title\">Select size:</div>
            </div>
            <div class=\"product-action-item\">
              <div class=\"group-5 d-flex flex-wrap\">
                {% for size in sizes %}
                  {% if size == product.size %}
                  <div class=\"checkbox-tag\">
                    <input class=\"checkbox-tag-input\" type=\"radio\" id=\"{{ size }}\" name=\"productOverviewSize\" checked>
                    <label class=\"checkbox-tag-label\" for=\"{{ size }}\">
                      {{size}}
                    </label>
                  </div>
                  {% else %}
                  <div class=\"checkbox-tag\">
                    <input class=\"checkbox-tag-input\" type=\"radio\" id=\"{{ size }}\" name=\"productOverviewSize\">
                    <label class=\"checkbox-tag-label\" for=\"{{ size }}\">
                      {{size}}
                    </label>
                  </div>
                  {% endif %}
                {% endfor %}
              </div>
            </div>
          </div>
          <div class=\"product-action\">
            <div class=\"product-action-item\">
              <div class=\"product-action-title product-action-title\">QTY:</div>
            </div>
            <div class=\"product-action-item\">
              <input type=\"number\" value=\"1\" name=\"qty\" data-spinner>
            </div>
            <div class=\"product-action-item\">
              <button class=\"btn\">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"tab tab-boxed\">
          <ul class=\"nav nav-line tab-nav\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" data-toggle=\"tab\" href=\"#navLine1-1\" role=\"tab\" aria-selected=\"true\">Description</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#navLine1-2\" role=\"tab\" aria-selected=\"false\">Delivery</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" data-toggle=\"tab\" href=\"#navLine1-3\" role=\"tab\" aria-selected=\"false\">(3) Reviews</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"navLine1-1\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"navLine1-2\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"navLine1-3\" role=\"tabpanel\">
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"{{ asset('images/person-02-43x43.jpg') }}\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">John Doe</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"{{ asset('images/person-04-43x43.jpg') }}\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">Alice Jackson</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <div class=\"comment comment-rating\">
                  <div class=\"comment-header\">
                          <!-- Person-->
                          <div class=\"person person-small person-rating\"><img class=\"person-img\" src=\"{{ asset('images/person-03-43x43.jpg') }}\" alt=\"\" width=\"43\" height=\"43\"/>
                            <div class=\"person-body\">
                              <div class=\"person-title h5\">Will McMillan</div>
                              <div class=\"person-rating\">
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star\"></div>
                                <div class=\"person-rating-item mdi-star-half\"></div>
                              </div>
                            </div>
                          </div>
                    <div class=\"comment-date\">25 mins ago</div>
                  </div>
                  <div class=\"comment-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</div>
                </div>
              </div>
              <div class=\"tab-content-item\">
                <h4>Write Your Review</h4>
                <form class=\"rd-form\">
                  <div class=\"row row-15 row-gutters-14\">
                    <div class=\"col-md-6\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-input\">Your name</label>
                        <div class=\"form-validation-wrap\">
                          <input class=\"form-control\" id=\"contact-input\" type=\"text\" name=\"contact-name\" placeholder=\"Enter Your name\" data-constraints=\"@Required\">
                        </div>
                      </div>
                    </div>
                    <div class=\"col-md-6\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-email\">Your E-mail</label>
                        <div class=\"form-validation-wrap\">
                          <input class=\"form-control\" id=\"contact-email\" type=\"email\" name=\"contact-email\" placeholder=\"Enter Your E-mail\" data-constraints=\"@Email @Required\">
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <div class=\"form-group\">
                        <label class=\"form-label\" for=\"contact-message\">Your Review</label>
                        <div class=\"form-validation-wrap\">
                          <textarea class=\"form-control\" id=\"contact-message\" name=\"textarea\" placeholder=\"Enter Your Review\" data-constraints=\"@Required\"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-12 mt-1 mt-xl-0\">
                      <button class=\"btn btn-min-width\" type=\"submit\">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}", "pages/product/detail.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\pages\\product\\detail.html.twig");
    }
}
