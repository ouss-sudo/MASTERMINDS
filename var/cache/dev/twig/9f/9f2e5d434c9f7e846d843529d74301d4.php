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

/* constat/new.html.twig */
class __TwigTemplate_fc79d27dc43670a1dd0048bdeaa49f2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'formadd' => [$this, 'block_formadd'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefrontconstat.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/new.html.twig"));

        $this->parent = $this->loadTemplate("basefrontconstat.html.twig", "constat/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <section class=\"w3l-bootstrap-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light py-lg-2 py-2\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\"><!-- <span class=\"fa fa-gg\">--></span> AssurTout</a>
                <!-- if logo is image enable this
              <a class=\"navbar-brand\" href=\"#index.html\">
                  <img src=\"image-path\" alt=\"Your logo\" title=\"Your logo\" style=\"height:35px;\" />
              </a> -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon fa fa-bars\"></span>
                </button>

                <nav class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"services.html\">Services</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                        </li>

                    </ul>
                    <!--search-->
                    <form action=\"search-results.html\" class=\"form-inline position-relative my-2 my-lg-0\">
                        <input class=\"form-control search\" type=\"search\" placeholder=\"Search here...\" aria-label=\"Search\" required=\"\">
                        <button class=\"btn btn-search position-absolute\" type=\"submit\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span></button>
                    </form>
                    <nav class=\"header-nav ms-auto\">
                        <ul class=\"d-flex align-items-center\">
                            <li class=\"nav-item dropdown pe-3\">

                                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                                </a><!-- End Profile Iamge Icon -->

                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                    <li class=\"dropdown-header\">
                                        <h6>Kevin Anderson</h6>
                                        <span>Web Designer</span>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html.twig\">
                                            <i class=\"bi bi-person\"></i>
                                            <span>Mon profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html.twig\">
                                            <i class=\"bi bi-gear\"></i>
                                            <span>Account Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>



                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_indexfront");
        echo "\">
                                            <i class=\"bi bi-question-circle\"></i>
                                            <span>Mes constats</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <i class=\"bi bi-box-arrow-right\"></i>
                                            <span>Sign Out</span>
                                        </a>
                                    </li>

                                </ul>
                                <!-- End Profile Dropdown Items -->
                            </li>
                        </ul>
                    </nav><!-- End Profile Nav -->
                    <!--end search-->
            </div>
            </div>
        </nav>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_formadd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        // line 107
        echo "    <h1>Ajouter un constat</h1>

    ";
        // line 109
        echo twig_include($this->env, $context, "constat/_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constat/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 109,  197 => 107,  187 => 106,  150 => 79,  111 => 43,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefrontconstat.html.twig' %}
{% block header %}
    <section class=\"w3l-bootstrap-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light py-lg-2 py-2\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"index.html\"><!-- <span class=\"fa fa-gg\">--></span> AssurTout</a>
                <!-- if logo is image enable this
              <a class=\"navbar-brand\" href=\"#index.html\">
                  <img src=\"image-path\" alt=\"Your logo\" title=\"Your logo\" style=\"height:35px;\" />
              </a> -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon fa fa-bars\"></span>
                </button>

                <nav class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mx-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"index.html\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about.html\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"services.html\">Services</a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Contact</a>
                        </li>

                    </ul>
                    <!--search-->
                    <form action=\"search-results.html\" class=\"form-inline position-relative my-2 my-lg-0\">
                        <input class=\"form-control search\" type=\"search\" placeholder=\"Search here...\" aria-label=\"Search\" required=\"\">
                        <button class=\"btn btn-search position-absolute\" type=\"submit\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span></button>
                    </form>
                    <nav class=\"header-nav ms-auto\">
                        <ul class=\"d-flex align-items-center\">
                            <li class=\"nav-item dropdown pe-3\">

                                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                    <img src=\"{{ asset('assets/img/profile-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
                                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                                </a><!-- End Profile Iamge Icon -->

                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                    <li class=\"dropdown-header\">
                                        <h6>Kevin Anderson</h6>
                                        <span>Web Designer</span>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html.twig\">
                                            <i class=\"bi bi-person\"></i>
                                            <span>Mon profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html.twig\">
                                            <i class=\"bi bi-gear\"></i>
                                            <span>Account Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>



                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_constat_indexfront') }}\">
                                            <i class=\"bi bi-question-circle\"></i>
                                            <span>Mes constats</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <i class=\"bi bi-box-arrow-right\"></i>
                                            <span>Sign Out</span>
                                        </a>
                                    </li>

                                </ul>
                                <!-- End Profile Dropdown Items -->
                            </li>
                        </ul>
                    </nav><!-- End Profile Nav -->
                    <!--end search-->
            </div>
            </div>
        </nav>
    </section>
{% endblock %}
{% block formadd %}
    <h1>Ajouter un constat</h1>

    {{ include('constat/_form.html.twig') }}
{% endblock %}
", "constat/new.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\FirstProjecttt\\templates\\constat\\new.html.twig");
    }
}
