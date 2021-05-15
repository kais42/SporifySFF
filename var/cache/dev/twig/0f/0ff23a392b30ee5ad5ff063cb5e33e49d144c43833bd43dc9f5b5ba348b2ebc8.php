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

/* layout/header.html.twig */
class __TwigTemplate_68442132f4b147b7066d8943c1e2f3160e0d527cc2a6028ba6cee65a1b34709d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "<!--RD Navbar-->
<header class=\"section\">
  <nav class=\"rd-navbar rd-navbar-extended\" data-rd-navbar='{\"responsive\":{\"1200\":{\"stickUpOffset\":\"110px\"}}}'>
    <div class=\"navbar-container\">
      <div class=\"navbar-inner navbar-inner-subpanel\">
        <button class=\"subpanel-switch linearicons-exit-left novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-subpanel-active\"}'></button>
        <div class=\"navbar-cell\">
          <div class=\"navbar-subpanel\">
            <div class=\"navbar-subpanel-item\">
              <div class=\"navbar-search\">
                <div class=\"navbar-search-container\">
                  <form class=\"navbar-search-form\" action=\"search-results.html\" method=\"GET\" data-rd-search='{\"output\":\".navbar-search-results\",\"mode\":\"live\",\"liveResults\":3,\"template\":\"<h5 class=\\\"search-title\\\"><a target=\\\"_top\\\" href=\\\"#{href}\\\" class=\\\"search-link\\\">#{title}</a></h5><p>...#{token}...</p>\"}'>
                    <input class=\"navbar-search-input\" type=\"text\" placeholder=\"Enter search terms...\" autocomplete=\"off\" name=\"s\"/>
                    <button class=\"navbar-search-btn linearicons-magnifier novi-icon\"></button>
                    <button class=\"navbar-search-close search-switch mdi-close novi-icon\" type=\"button\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-search-active\",\"isolate\":\"[data-multi-switch]:not(.search-switch)\"}'></button>
                  </form>
                </div>
              </div>
              <div class=\"navbar-search-results\">No results</div>
              <button class=\"navbar-button navbar-button-round search-switch linearicons-magnifier novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-search-active\",\"isolate\":\"[data-multi-switch]\"}'></button>
            </div>
            <div class=\"navbar-subpanel-item\">
              <div class=\"navbar-login\">
                <div class=\"navbar-login-item\">
                  <button class=\"navbar-button navbar-button-round navbar-login-switch login-switch mdi-close novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-login-active\",\"isolate\":\"[data-multi-switch]:not(.login-switch)\"}'></button>
                </div>
                <div class=\"navbar-login-item text-center\">
                  <h4 class=\"navbar-login-heading\">Sign In</h4>
                  <p class=\"navbar-login-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                  <div class=\"navbar-login-form\">
                    <div class=\"row row-15 row-gutters-14\">
                      <div class=\"col-12\">
                        <div class=\"form-group\">
                          <label class=\"form-label\" for=\"navbar-login-input\">Your name</label>
                          <input class=\"form-control\" id=\"navbar-login-input\" type=\"text\" name=\"navbar-login-name\" placeholder=\"Your name\"/>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"form-group\">
                          <label class=\"form-label\" for=\"navbar-login-password\">Password</label>
                          <input class=\"form-control\" id=\"navbar-login-password\" type=\"password\" name=\"navbar-login-password\" placeholder=\"Password\"/>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <button class=\"btn btn-block\">Sign in</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"navbar-login-item\">
                  <div class=\"group-20x15\"><a class=\"icon icon-md icon-link icon-600 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-600 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-600 mdi-instagram\" href=\"#\"></a></div>
                </div>
              </div>
              <button class=\"navbar-button navbar-button-round login-switch login-icon novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-login-active\",\"isolate\":\"[data-multi-switch]\"}'>
                <svg class=\"navbar-button-svg\" width=\"42\" height=\"42\" viewbox=\"0 0 42 42\">
                  <path d=\"M12 18H30.8571\" stroke-width=\"1.5\"></path>
                  <path d=\"M16.2858 27.4286H26.5715\" stroke-width=\"1.5\"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class=\"navbar-cell\">
          <div class=\"navbar-panel\">
            <button class=\"navbar-switch mdi-menu novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"isolate\":\"[data-multi-switch]\"}'></button>
            <div class=\"navbar-logo\">
              <!-- Logo-->
              <div class=\"logo\"><a class=\"logo-link\" href=\"index.html\"><img class=\"logo-image-default\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-default-249x52.png"), "html", null, true);
        echo "\" alt=\"Adrive\" width=\"124\" height=\"26\"/><img class=\"logo-image-inverse\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-inverse-249x52.png"), "html", null, true);
        echo "\" alt=\"Adrive\" width=\"124\" height=\"26\"/></a></div>
            </div>
          </div>
        </div>
        <div class=\"navbar-cell\">
          <div class=\"navbar-subpanel\">
            <div class=\"navbar-subpanel-item\">
              <div class=\"select-wrap navbar-select-wrap\">
                <select class=\"select2\" name=\"price\" data-select2-options='{\"theme\":\"lang\"}'>
                  <option>EN</option>
                  <option>RU</option>
                  <option>FR</option>
                </select>
              </div>
            </div>
            <div class=\"navbar-subpanel-item\"><a class=\"navbar-button linearicons-cart novi-icon\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"><span class=\"navbar-button-badge\">0</span></a></div>
          </div>
        </div>
      </div>
      <div class=\"navbar-inner navbar-inner-navigation\">
        <div class=\"navbar-cell navbar-inner-navigation-cell\">
          <div class=\"group-13\"><a class=\"icon icon-md icon-link icon-400 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-400 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-400 mdi-instagram\" href=\"#\"></a></div>
        </div>
        <div class=\"navbar-cell navbar-sidebar\">
          <ul class=\"navbar-navigation rd-navbar-nav\">
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"index.html\">Home</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"home-2.html\">Diving</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"home-3.html\">Motorcycle Racing</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item active\">
              <a class=\"navbar-navigation-root-link\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Product</a>
            </li>

            <li class=\"navbar-navigation-root-item active\"><a class=\"navbar-navigation-root-link\" href=\"#\">nutritionniste et regime</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_nutritionniste_front");
        echo "\">Nutritionniste</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_regime_front");
        echo "\">Regime</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"#\">coachs et info</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_coach_front");
        echo "\">coach</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_info_front");
        echo "\">info</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item active\"><a class=\"navbar-navigation-root-link\" href=\"#\">Shop</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"grid-shop.html\">Grid shop</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"single-product.html\">Single product</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"cart.html\">Cart</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"checkout.html\">Checkout</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"#\">Pages</a>
              <div class=\"navbar-navigation-megamenu rd-navbar-megamenu navbar-dark\">
                <div class=\"navbar-navigation-megamenu-container\">
                  <div class=\"navbar-navigation-back\">
                    <button class=\"navbar-navigation-back-btn\">Back</button>
                  </div>
                  <div class=\"navbar-navigation-megamenu-blog\">
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-24-101x85.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag\">News</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Divers Rejoice as New Attraction Opens</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-02-101x85.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag tag-secondary\">Tips</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Triathlon Training: Outdoor Bootcamp</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image-07-101x85.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag tag-tertiary\">Events</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Yamaha to Organize Racing in Thailand</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"navbar-navigation-megamenu-row\">
                    <div class=\"navbar-navigation-megamenu-column\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Features</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"sports-widgets.html\">Sports Widgets</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"blog-widgets.html\">Blog Widgets</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"shop-widgets.html\">Shop Widgets</a>
                          </li>
                        </ul>
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"short-codes.html\">Short codes</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"search-results.html\">Search results</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"blog-search-results.html\">Blog search results</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-column\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Other pages</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"contacts.html\">Contacts</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"faq.html\">FAQ</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"typography.html\">Typography</a>
                          </li>
                        </ul>
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"log-in.html\">Log In</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"404.html\">404</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"coming-soon.html\">Coming soon</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-column navbar-navigation-megamenu-column-small\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Our Team</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"team.html\">Team</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"team-member.html\">Team member</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"partners.html\">Partners</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class=\"navbar-cell navbar-inner-navigation-cell\">
          ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "session", [], "any", false, false, false, 252), "get", [0 => "user"], "method", false, false, false, 252)) {
            // line 253
            echo "          <a class=\"btn btn-sm btn-outline\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Log out</a>
          ";
        } else {
            // line 255
            echo "          <a class=\"btn btn-sm btn-outline\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Log in</a>
          ";
        }
        // line 257
        echo "        </div>
      </div>
    </div>
  </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 257,  336 => 255,  330 => 253,  328 => 252,  251 => 178,  236 => 166,  221 => 154,  190 => 126,  185 => 124,  173 => 115,  168 => 113,  157 => 105,  132 => 83,  112 => 68,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--RD Navbar-->
<header class=\"section\">
  <nav class=\"rd-navbar rd-navbar-extended\" data-rd-navbar='{\"responsive\":{\"1200\":{\"stickUpOffset\":\"110px\"}}}'>
    <div class=\"navbar-container\">
      <div class=\"navbar-inner navbar-inner-subpanel\">
        <button class=\"subpanel-switch linearicons-exit-left novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-subpanel-active\"}'></button>
        <div class=\"navbar-cell\">
          <div class=\"navbar-subpanel\">
            <div class=\"navbar-subpanel-item\">
              <div class=\"navbar-search\">
                <div class=\"navbar-search-container\">
                  <form class=\"navbar-search-form\" action=\"search-results.html\" method=\"GET\" data-rd-search='{\"output\":\".navbar-search-results\",\"mode\":\"live\",\"liveResults\":3,\"template\":\"<h5 class=\\\"search-title\\\"><a target=\\\"_top\\\" href=\\\"#{href}\\\" class=\\\"search-link\\\">#{title}</a></h5><p>...#{token}...</p>\"}'>
                    <input class=\"navbar-search-input\" type=\"text\" placeholder=\"Enter search terms...\" autocomplete=\"off\" name=\"s\"/>
                    <button class=\"navbar-search-btn linearicons-magnifier novi-icon\"></button>
                    <button class=\"navbar-search-close search-switch mdi-close novi-icon\" type=\"button\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-search-active\",\"isolate\":\"[data-multi-switch]:not(.search-switch)\"}'></button>
                  </form>
                </div>
              </div>
              <div class=\"navbar-search-results\">No results</div>
              <button class=\"navbar-button navbar-button-round search-switch linearicons-magnifier novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-search-active\",\"isolate\":\"[data-multi-switch]\"}'></button>
            </div>
            <div class=\"navbar-subpanel-item\">
              <div class=\"navbar-login\">
                <div class=\"navbar-login-item\">
                  <button class=\"navbar-button navbar-button-round navbar-login-switch login-switch mdi-close novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-login-active\",\"isolate\":\"[data-multi-switch]:not(.login-switch)\"}'></button>
                </div>
                <div class=\"navbar-login-item text-center\">
                  <h4 class=\"navbar-login-heading\">Sign In</h4>
                  <p class=\"navbar-login-text\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                  <div class=\"navbar-login-form\">
                    <div class=\"row row-15 row-gutters-14\">
                      <div class=\"col-12\">
                        <div class=\"form-group\">
                          <label class=\"form-label\" for=\"navbar-login-input\">Your name</label>
                          <input class=\"form-control\" id=\"navbar-login-input\" type=\"text\" name=\"navbar-login-name\" placeholder=\"Your name\"/>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"form-group\">
                          <label class=\"form-label\" for=\"navbar-login-password\">Password</label>
                          <input class=\"form-control\" id=\"navbar-login-password\" type=\"password\" name=\"navbar-login-password\" placeholder=\"Password\"/>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <button class=\"btn btn-block\">Sign in</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"navbar-login-item\">
                  <div class=\"group-20x15\"><a class=\"icon icon-md icon-link icon-600 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-600 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-600 mdi-instagram\" href=\"#\"></a></div>
                </div>
              </div>
              <button class=\"navbar-button navbar-button-round login-switch login-icon novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"class\":\"navbar-login-active\",\"isolate\":\"[data-multi-switch]\"}'>
                <svg class=\"navbar-button-svg\" width=\"42\" height=\"42\" viewbox=\"0 0 42 42\">
                  <path d=\"M12 18H30.8571\" stroke-width=\"1.5\"></path>
                  <path d=\"M16.2858 27.4286H26.5715\" stroke-width=\"1.5\"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class=\"navbar-cell\">
          <div class=\"navbar-panel\">
            <button class=\"navbar-switch mdi-menu novi-icon\" data-multi-switch='{\"targets\":\".rd-navbar\",\"scope\":\".rd-navbar\",\"isolate\":\"[data-multi-switch]\"}'></button>
            <div class=\"navbar-logo\">
              <!-- Logo-->
              <div class=\"logo\"><a class=\"logo-link\" href=\"index.html\"><img class=\"logo-image-default\" src=\"{{ asset('images/logo-default-249x52.png') }}\" alt=\"Adrive\" width=\"124\" height=\"26\"/><img class=\"logo-image-inverse\" src=\"{{ asset('images/logo-inverse-249x52.png') }}\" alt=\"Adrive\" width=\"124\" height=\"26\"/></a></div>
            </div>
          </div>
        </div>
        <div class=\"navbar-cell\">
          <div class=\"navbar-subpanel\">
            <div class=\"navbar-subpanel-item\">
              <div class=\"select-wrap navbar-select-wrap\">
                <select class=\"select2\" name=\"price\" data-select2-options='{\"theme\":\"lang\"}'>
                  <option>EN</option>
                  <option>RU</option>
                  <option>FR</option>
                </select>
              </div>
            </div>
            <div class=\"navbar-subpanel-item\"><a class=\"navbar-button linearicons-cart novi-icon\" href=\"{{ path('cart') }}\"><span class=\"navbar-button-badge\">0</span></a></div>
          </div>
        </div>
      </div>
      <div class=\"navbar-inner navbar-inner-navigation\">
        <div class=\"navbar-cell navbar-inner-navigation-cell\">
          <div class=\"group-13\"><a class=\"icon icon-md icon-link icon-400 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-400 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-md icon-link icon-400 mdi-instagram\" href=\"#\"></a></div>
        </div>
        <div class=\"navbar-cell navbar-sidebar\">
          <ul class=\"navbar-navigation rd-navbar-nav\">
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"index.html\">Home</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"home-2.html\">Diving</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"home-3.html\">Motorcycle Racing</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item active\">
              <a class=\"navbar-navigation-root-link\" href=\"{{ path('product') }}\">Product</a>
            </li>

            <li class=\"navbar-navigation-root-item active\"><a class=\"navbar-navigation-root-link\" href=\"#\">nutritionniste et regime</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"{{ path('liste_nutritionniste_front') }}\">Nutritionniste</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"{{ path('liste_regime_front') }}\">Regime</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"#\">coachs et info</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"{{ path('liste_coach_front') }}\">coach</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"{{ path('liste_info_front') }}\">info</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item active\"><a class=\"navbar-navigation-root-link\" href=\"#\">Shop</a>
              <ul class=\"navbar-navigation-dropdown rd-navbar-dropdown\">
                <li class=\"navbar-navigation-back\">
                  <button class=\"navbar-navigation-back-btn\">Back</button>
                </li>
                <li class=\"navbar-navigation-dropdown-item active\"><a class=\"navbar-navigation-dropdown-link\" href=\"grid-shop.html\">Grid shop</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"single-product.html\">Single product</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"cart.html\">Cart</a>
                </li>
                <li class=\"navbar-navigation-dropdown-item\"><a class=\"navbar-navigation-dropdown-link\" href=\"checkout.html\">Checkout</a>
                </li>
              </ul>
            </li>
            <li class=\"navbar-navigation-root-item\"><a class=\"navbar-navigation-root-link\" href=\"#\">Pages</a>
              <div class=\"navbar-navigation-megamenu rd-navbar-megamenu navbar-dark\">
                <div class=\"navbar-navigation-megamenu-container\">
                  <div class=\"navbar-navigation-back\">
                    <button class=\"navbar-navigation-back-btn\">Back</button>
                  </div>
                  <div class=\"navbar-navigation-megamenu-blog\">
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"{{ asset('images/image-24-101x85.jpg') }}\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag\">News</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Divers Rejoice as New Attraction Opens</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"{{ asset('images/image-02-101x85.jpg') }}\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag tag-secondary\">Tips</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Triathlon Training: Outdoor Bootcamp</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-post\">
                      <!-- Post-->
                      <div class=\"post post-small\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"{{ asset('images/image-07-101x85.jpg') }}\" alt=\"\" width=\"101\" height=\"85\"/></a>
                        <div class=\"post-body\">
                          <div class=\"post-tag tag tag-tertiary\">Events</div>
                          <div class=\"post-title h6\"><a href=\"blog-post.html\">Yamaha to Organize Racing in Thailand</a></div>
                          <div class=\"post-meta\">
                            <div class=\"post-date\">June 11, 2020</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"navbar-navigation-megamenu-row\">
                    <div class=\"navbar-navigation-megamenu-column\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Features</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"sports-widgets.html\">Sports Widgets</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"blog-widgets.html\">Blog Widgets</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"shop-widgets.html\">Shop Widgets</a>
                          </li>
                        </ul>
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"short-codes.html\">Short codes</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"search-results.html\">Search results</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"blog-search-results.html\">Blog search results</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-column\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Other pages</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"contacts.html\">Contacts</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"faq.html\">FAQ</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"typography.html\">Typography</a>
                          </li>
                        </ul>
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"log-in.html\">Log In</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"404.html\">404</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"coming-soon.html\">Coming soon</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"navbar-navigation-megamenu-column navbar-navigation-megamenu-column-small\">
                      <h4 class=\"navbar-navigation-megamenu-heading\">Our Team</h4>
                      <div class=\"navbar-navigation-megamenu-column-inner\">
                        <ul class=\"navbar-navigation-megamenu-block\">
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"team.html\">Team</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"team-member.html\">Team member</a>
                          </li>
                          <li class=\"navbar-navigation-megamenu-item\"><a class=\"navbar-navigation-megamenu-link\" href=\"partners.html\">Partners</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class=\"navbar-cell navbar-inner-navigation-cell\">
          {% if app.session.get('user') %}
          <a class=\"btn btn-sm btn-outline\" href=\"{{path('logout')}}\">Log out</a>
          {% else %}
          <a class=\"btn btn-sm btn-outline\" href=\"{{path('login')}}\">Log in</a>
          {% endif %}
        </div>
      </div>
    </div>
  </nav>
</header>", "layout/header.html.twig", "C:\\xampp\\htdocs\\SporifySF\\templates\\layout\\header.html.twig");
    }
}
