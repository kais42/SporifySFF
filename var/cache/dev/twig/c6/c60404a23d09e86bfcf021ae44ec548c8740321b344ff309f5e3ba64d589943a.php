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

/* footer.html.twig */
class __TwigTemplate_45da11c49c2730b278afaa74586a191977a4d7d79655919d66d4558db889dea9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"footer-default section footer context-dark bg-800\">
    <div class=\"footer-row\">
        <div class=\"container\">
            <div class=\"owl-carousel\" data-owl=\"{&quot;dots&quot;:true}\" data-items=\"2\" data-sm-items=\"3\" data-md-items=\"4\" data-lg-items=\"5\" data-xl-items=\"6\">
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-01-51x17.png\" alt=\"\" width=\"51\" height=\"17\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-02-86x14.png\" alt=\"\" width=\"86\" height=\"14\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-03-47x17.png\" alt=\"\" width=\"47\" height=\"17\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-04-57x28.png\" alt=\"\" width=\"57\" height=\"28\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-05-65x28.png\" alt=\"\" width=\"65\" height=\"28\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-06-86x17.png\" alt=\"\" width=\"86\" height=\"17\"/>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-row footer-row-2\">
        <div class=\"container\">
            <div class=\"row row-40\">
                <div class=\"col-sm-6 col-md-4 mt-xl-n1\">
                    <!-- Logo-->
                    <div class=\"logo\"><a class=\"logo-link\" href=\"index.html\"><img class=\"logo-image-default\" src=\"images/logo-default-249x52.png\" alt=\"Adrive\" width=\"124\" height=\"26\"/><img class=\"logo-image-inverse\" src=\"images/logo-inverse-249x52.png\" alt=\"Adrive\" width=\"124\" height=\"26\"/></a></div>
                    <ul class=\"list list-sm\">
                        <li class=\"list-item\"><a class=\"link link-inherit\" href=\"tel:#\">800.567.1234</a></li>
                        <li class=\"list-item\"><a class=\"link link-inherit\" href=\"mailto:#\">info@demolink.org</a></li>
                        <li class=\"list-item\">355 S Grand Ave, Los Angeles, <br>CA 90071</li>
                    </ul>
                    <div class=\"group-13 group-offset-1\"><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-instagram\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-twitter\" href=\"#\"></a></div>
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"footer-title\">Recent news</div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-51-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">Ducati contract talks with Dovizioso at a standstill</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">June 11, 2020</div>
                            </div>
                        </div>
                    </div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-52-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">Pirro thinks Honda may be behind wildcard ban</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">January 11, 20</div>
                            </div>
                        </div>
                    </div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-31-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">When Stoner denied Honda the ultimate 'dream team'</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">January 11, 20</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"footer-title\">Get in touch</div>
                    <form class=\"footer-form rd-form rd-mailform row row-15 row-gutters-14\" data-form-output=\"footer-default-form\" data-form-type=\"subscribe\" method=\"post\" action=\"components/rd-mailform/rd-mailform.php\">
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <div class=\"form-validation-wrap\">
                                    <input class=\"form-control\" type=\"email\" name=\"footer-default-email\" placeholder=\"Your E-mail\" data-constraints=\"@Email @Required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <div class=\"form-validation-wrap\">
                                    <textarea class=\"form-control\" name=\"footer-default-textarea\" placeholder=\"Message\" data-constraints=\"@Required\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 mt-1 mt-xl-0\">
                            <button class=\"btn btn-block\" type=\"submit\">Send</button>
                        </div>
                    </form>
                    <div class=\"form-output snackbar snackbar-primary\" id=\"footer-default-form\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-row footer-row-accent\">
        <div class=\"container\">
            <div class=\"group-15 d-flex flex-wrap justify-content-center align-items-center\">
                <div>
                    <!-- Copyright-->
                    <p class=\"rights\"><span>&copy; 2020&nbsp;</span><span>Adrive</span><span>. All rights reserved.&nbsp;</span>
                        <!--a.rights-link( href='privacy-policy.html' ) Privacy Policy-->
                    </p>
                </div>
                <div class=\"flex-grow-1\">
                    <div class=\"footer-menu\"><a class=\"footer-menu-link\" href=\"news-2.html\">News</a><a class=\"footer-menu-link\" href=\"news-3.html\">Events</a><a class=\"footer-menu-link\" href=\"team.html\">Our team</a><a class=\"footer-menu-link\" href=\"about-us.html\">About club</a><a class=\"footer-menu-link\" href=\"grid-shop.html\">Shop</a><a class=\"footer-menu-link\" href=\"contacts.html\">Contact</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-default section footer context-dark bg-800\">
    <div class=\"footer-row\">
        <div class=\"container\">
            <div class=\"owl-carousel\" data-owl=\"{&quot;dots&quot;:true}\" data-items=\"2\" data-sm-items=\"3\" data-md-items=\"4\" data-lg-items=\"5\" data-xl-items=\"6\">
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-01-51x17.png\" alt=\"\" width=\"51\" height=\"17\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-02-86x14.png\" alt=\"\" width=\"86\" height=\"14\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-03-47x17.png\" alt=\"\" width=\"47\" height=\"17\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-04-57x28.png\" alt=\"\" width=\"57\" height=\"28\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-05-65x28.png\" alt=\"\" width=\"65\" height=\"28\"/>
                </div>
                <div class=\"logo-hovered\"><img class=\"logo\" src=\"images/logo-06-86x17.png\" alt=\"\" width=\"86\" height=\"17\"/>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-row footer-row-2\">
        <div class=\"container\">
            <div class=\"row row-40\">
                <div class=\"col-sm-6 col-md-4 mt-xl-n1\">
                    <!-- Logo-->
                    <div class=\"logo\"><a class=\"logo-link\" href=\"index.html\"><img class=\"logo-image-default\" src=\"images/logo-default-249x52.png\" alt=\"Adrive\" width=\"124\" height=\"26\"/><img class=\"logo-image-inverse\" src=\"images/logo-inverse-249x52.png\" alt=\"Adrive\" width=\"124\" height=\"26\"/></a></div>
                    <ul class=\"list list-sm\">
                        <li class=\"list-item\"><a class=\"link link-inherit\" href=\"tel:#\">800.567.1234</a></li>
                        <li class=\"list-item\"><a class=\"link link-inherit\" href=\"mailto:#\">info@demolink.org</a></li>
                        <li class=\"list-item\">355 S Grand Ave, Los Angeles, <br>CA 90071</li>
                    </ul>
                    <div class=\"group-13 group-offset-1\"><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-youtube-play\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-instagram\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-facebook\" href=\"#\"></a><a class=\"icon icon-sm icon-round icon-link icon-700 mdi-twitter\" href=\"#\"></a></div>
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"footer-title\">Recent news</div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-51-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">Ducati contract talks with Dovizioso at a standstill</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">June 11, 2020</div>
                            </div>
                        </div>
                    </div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-52-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">Pirro thinks Honda may be behind wildcard ban</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">January 11, 20</div>
                            </div>
                        </div>
                    </div>
                    <!-- Post-->
                    <div class=\"post post-small footer-post\"><a class=\"post-media\" href=\"blog-post.html\"><img class=\"post-img\" src=\"images/image-31-90x76.jpg\" alt=\"\" width=\"90\" height=\"76\"/></a>
                        <div class=\"post-body\">
                            <div class=\"post-title h6\"><a href=\"blog-post.html\">When Stoner denied Honda the ultimate 'dream team'</a></div>
                            <div class=\"post-meta\">
                                <div class=\"post-date\">January 11, 20</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"footer-title\">Get in touch</div>
                    <form class=\"footer-form rd-form rd-mailform row row-15 row-gutters-14\" data-form-output=\"footer-default-form\" data-form-type=\"subscribe\" method=\"post\" action=\"components/rd-mailform/rd-mailform.php\">
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <div class=\"form-validation-wrap\">
                                    <input class=\"form-control\" type=\"email\" name=\"footer-default-email\" placeholder=\"Your E-mail\" data-constraints=\"@Email @Required\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <div class=\"form-validation-wrap\">
                                    <textarea class=\"form-control\" name=\"footer-default-textarea\" placeholder=\"Message\" data-constraints=\"@Required\"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 mt-1 mt-xl-0\">
                            <button class=\"btn btn-block\" type=\"submit\">Send</button>
                        </div>
                    </form>
                    <div class=\"form-output snackbar snackbar-primary\" id=\"footer-default-form\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-row footer-row-accent\">
        <div class=\"container\">
            <div class=\"group-15 d-flex flex-wrap justify-content-center align-items-center\">
                <div>
                    <!-- Copyright-->
                    <p class=\"rights\"><span>&copy; 2020&nbsp;</span><span>Adrive</span><span>. All rights reserved.&nbsp;</span>
                        <!--a.rights-link( href='privacy-policy.html' ) Privacy Policy-->
                    </p>
                </div>
                <div class=\"flex-grow-1\">
                    <div class=\"footer-menu\"><a class=\"footer-menu-link\" href=\"news-2.html\">News</a><a class=\"footer-menu-link\" href=\"news-3.html\">Events</a><a class=\"footer-menu-link\" href=\"team.html\">Our team</a><a class=\"footer-menu-link\" href=\"about-us.html\">About club</a><a class=\"footer-menu-link\" href=\"grid-shop.html\">Shop</a><a class=\"footer-menu-link\" href=\"contacts.html\">Contact</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
", "footer.html.twig", "C:\\xampp\\htdocs\\integ1 (1)\\templates\\footer.html.twig");
    }
}
