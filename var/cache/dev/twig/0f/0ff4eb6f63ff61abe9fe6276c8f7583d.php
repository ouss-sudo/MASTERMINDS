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

/* constat/showfront.html.twig */
class __TwigTemplate_141194ae766b7b3f0862a584261a30f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'Service' => [$this, 'block_Service'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/showfront.html.twig"));

        // line 1
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>AssurTout</title>
    <!-- web fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/css/style-starter.css"), "html", null, true);
        echo "\">
    <!-- Favicons -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 549
        echo "</html>
<!-- // grids block 5 -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <body>
    <!--header-->
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
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                stock
                            </a>
                            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"services.html\">stock</a>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_new");
        echo "\">
                                sinistre
                            </a>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link dropdown-toggle\" href=\"/addrapport\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                remborsement
                            </a>
                            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/addrapport\">rapport</a>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">
                                Reclamation
                            </a>
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
        // line 96
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
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_indexfront");
        echo "\">
                                            <i class=\"bi bi-question-circle\"></i>
                                            <span>Mes réclamations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 137
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
    <!--end header-->
    ";
        // line 164
        $this->displayBlock('Service', $context, $blocks);
        // line 260
        echo "    <h1>Constat</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 266, $this->source); })()), "id", [], "any", false, false, false, 266), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dateaccident</th>
            <td>";
        // line 270
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 270, $this->source); })()), "dateaccident", [], "any", false, false, false, 270)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 270, $this->source); })()), "dateaccident", [], "any", false, false, false, 270), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th>Lieu</th>
            <td>";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 274, $this->source); })()), "lieu", [], "any", false, false, false, 274), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dateconstat</th>
            <td>";
        // line 278
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 278, $this->source); })()), "dateconstat", [], "any", false, false, false, 278)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 278, $this->source); })()), "dateconstat", [], "any", false, false, false, 278), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th>Imageaccident</th>
            <td><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 282, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" width=\"200\" height=\"200\"></td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 286, $this->source); })()), "etat", [], "any", false, false, false, 286), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>client</th>
            <td>";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 290, $this->source); })()), "user", [], "any", false, false, false, 290), "lastname", [], "any", false, false, false, 290), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td>";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 295, $this->source); })()), "user", [], "any", false, false, false, 295), "email", [], "any", false, false, false, 295), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Les véhicules</th>
        </tr>
        <tr>
            <th scope=\"col\">Identifiant</th>
            <th scope=\"col\">Num contrat</th>
            <th scope=\"col\">Nom agence</th>
            <th scope=\"col\">Nom conducteur</th>
            <th scope=\"col\">Prenom conducteur</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Immatriculation</th>
            <th scope=\"col\">Actions</th>
        </tr>
        ";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 310, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 311
            echo "            <tr>

                <td>";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 313), "html", null, true);
            echo "</td>
                <td>";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "numContrat", [], "any", false, false, false, 314), "html", null, true);
            echo "</td>
                <td>";
            // line 315
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomagence", [], "any", false, false, false, 315), "html", null, true);
            echo "</td>
                <td>";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomconducteur", [], "any", false, false, false, 316), "html", null, true);
            echo "</td>
                <td>";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prenomconducteur", [], "any", false, false, false, 317), "html", null, true);
            echo "</td>
                <td>";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "adresse", [], "any", false, false, false, 318), "html", null, true);
            echo "</td>
                <td>";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 319), "html", null, true);
            echo "</td>

                <td><a href=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 321)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
            echo "\" height=\"30\" width=\"30\"></a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 324
            echo "
            <tr>
                <th>Aucune véhicule ajoutée</th>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "        </tr>
        </tbody>
    </table>


    <a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_indexfront", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/undo.png"), "html", null, true);
        echo "\" height=\"30\" width=\"30\"></a>
    ";
        // line 336
        echo twig_include($this->env, $context, "constat/_delete_form.html.twig");
        echo "
    <section class=\"partners py-5\" id=\"partners\">
        <div class=\"container py-md-3\">
            <div class=\"heading text-center mx-auto\">
                <h3 class=\"head\">Our Partners</h3>
                <p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class=\"inner-sec-w3ls pt-5 mt-3\">
                <div class=\"sponsers-icon text-center\">
                    <ul class=\"list-unstyled partners-icon row\">
                        <li class=\"col-md-2 col-4\">
                            <span class=\"fa fa-codepen\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-left border-right\">
                            <span class=\"fa fa-lastfm\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right\">
                            <span class=\"fa fa-codiepie\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
                            <span class=\"fa fa-drupal\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
                            <span class=\"fa fa-dashcube\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 mt-md-0 mt-3\">
                            <span class=\"fa fa-skyatlas\" aria-hidden=\"true\"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class=\"w3l-footer-29-main\">
        <div class=\"footer-29\">
            <div class=\"container\">
                <div class=\"d-grid grid-col-4 footer-top-29\">
                    <div class=\"footer-list-29 footer-1\">
                        <h6 class=\"footer-title-29\"><a href=\"index.html\"><span class=\"fa fa-gg\"></span> Corporite</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, Cras at nunc sagittis, suscipit dolor nunc sagittis sed do eiusmod tempor incididunt ut., consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>

                    </div>
                    <div class=\"footer-list-29 footer-2\">
                        <ul>
                            <h6 class=\"footer-title-29\">Categories</h6>
                            <li><a href=\"about.html\">Our People </a></li>
                            <li><a href=\"#\">Latest Media</a></li>
                            <li><a href=\"#\">Our Branches</a></li>

                            <li><a href=\"services.html\">Organisations</a></li>
                            <li><a href=\"services.html\">Help</a></li>

                        </ul>
                    </div>

                    <div class=\"footer-list-29 footer-3\">


                        <h6 class=\"footer-title-29\">Latest Posts</h6>
                        <ul class=\"list-unstyled d-flex flex-wrap\">
                            <li class=\"\">
                                <div class=\"row\">
                                    <a class=\"col-md-5 col-4\" href=\"#\">
                                        <img class=\"rounded img-fluid img-responsive\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/images/g4.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                                    </a>
                                    <div class=\"col pl-0\">
                                        <a class=\"footer-small-text\" href=\"#\">Lorem ipsum dolor sit amet adipiscin elit</a>
                                        <div class=\"text-sub-small text-white mt-2\">April 10th, 2020</div>
                                    </div>
                                </div>
                            </li>
                            <li class=\"mt-md-0 mt-2\">
                                <div class=\"row my-2 my-md-3\">
                                    <a class=\"col-md-5 col-4\" href=\"#\">
                                        <img class=\"rounded img-fluid img-responsive\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/images/g5.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                                    </a>
                                    <div class=\"col pl-0\">
                                        <a class=\"footer-small-text\" href=\"#\">Cras at nunc sagittis, suscipit dolor</a>
                                        <div class=\"text-sub-small text-white mt-2\">April 2nd, 2020 </div>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class=\"footer-list-29 footer-4\">
                        <ul>
                            <h6 class=\"footer-title-29\">Quick Links</h6>
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"services.html\">Services</a></li>
                            <li><a href=\"#\"> Blog</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"d-grid grid-col-2 bottom-copies\">
                    <p class=\"copy-footer-29\">© 2020 Corporite. All rights reserved | Designed by <a
                                href=\"https://w3layouts.com\">W3layouts</a></p>
                    <div class=\"main-social-footer-29\">
                        <a href=\"#facebook\" class=\"facebook\"><span class=\"fa fa-facebook\"></span></a>
                        <a href=\"#twitter\" class=\"twitter\"><span class=\"fa fa-twitter\"></span></a>
                        <a href=\"#instagram\" class=\"instagram\"><span class=\"fa fa-instagram\"></span></a>
                        <a href=\"#google-plus\" class=\"google-plus\"><span class=\"fa fa-google-plus\"></span></a>
                        <a href=\"#linkedin\" class=\"linkedin\"><span class=\"fa fa-linkedin\"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick=\"topFunction()\" id=\"movetop\" title=\"Go to top\">
            <span class=\"fa fa-angle-up\"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById(\"movetop\").style.display = \"block\";
                } else {
                    document.getElementById(\"movetop\").style.display = \"none\";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- //footer-28 block -->
    </section>
    <script>
        \$(function () {
            \$('.navbar-toggler').click(function () {
                \$('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
    </script>

    <!-- Template JavaScript -->
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/all.js"), "html", null, true);
        echo "\"></script>
    <!-- Smooth scrolling -->
    <!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
    <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <!-- script for -->
    <script>
        \$(document).ready(function () {
            \$('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    </body>
    <script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 164
    public function block_Service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Service"));

        // line 165
        echo "        <section class=\"w3l-main-slider\" id=\"home\">
            <!-- main-slider -->
            <div class=\"companies20-content\">

                <div class=\"owl-one owl-carousel owl-theme\">
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info banner-view bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg mr-auto\">
                                            <h5>Votre sécurité, notre priorité</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"services.html\"> Nos Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info  banner-view banner-top1 bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg mx-auto text-center\">
                                            <h5>Sécurité, fiabilité, notre assurance automobile</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\">Nous Contactez</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info banner-view banner-top2 bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg ml-auto text-right\">
                                            <h5>Protection sur roues, assurance sur nous</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"about.html\">Qui sommes-Nous?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>

                </div>
            </div>

            </div>


            <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
            <!-- script for -->
            <script>
                \$(document).ready(function () {
                    \$('.owl-one').owlCarousel({
                        loop: true,
                        margin: 0,
                        nav: false,
                        responsiveClass: true,
                        autoplay: false,
                        autoplayTimeout: 5000,
                        autoplaySpeed: 1000,
                        autoplayHoverPause: false,
                        responsive: {
                            0: {
                                items: 1,
                                nav: false
                            },
                            480: {
                                items: 1,
                                nav: false
                            },
                            667: {
                                items: 1,
                                nav: true
                            },
                            1000: {
                                items: 1,
                                nav: true
                            }
                        }
                    })
                })
            </script>
            <!-- //script -->
            <!-- /main-slider -->
        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constat/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 222,  708 => 165,  698 => 164,  686 => 547,  680 => 544,  676 => 543,  672 => 542,  668 => 541,  664 => 540,  660 => 539,  656 => 538,  652 => 537,  612 => 500,  606 => 497,  581 => 475,  516 => 413,  502 => 402,  433 => 336,  427 => 335,  420 => 330,  409 => 324,  399 => 321,  394 => 319,  390 => 318,  386 => 317,  382 => 316,  378 => 315,  374 => 314,  370 => 313,  366 => 311,  361 => 310,  343 => 295,  335 => 290,  328 => 286,  321 => 282,  314 => 278,  307 => 274,  300 => 270,  293 => 266,  285 => 260,  283 => 164,  253 => 137,  244 => 131,  206 => 96,  187 => 80,  170 => 66,  141 => 39,  131 => 38,  119 => 549,  117 => 38,  112 => 36,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  72 => 20,  68 => 19,  63 => 17,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>AssurTout</title>
    <!-- web fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('assetsfront/css/style-starter.css')}}\">
    <!-- Favicons -->
    <link href=\"{{asset('assets/img/favicon.png')}}\" rel=\"icon\">
    <link href=\"{{asset('assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
</head>
{% block body %}
    <body>
    <!--header-->
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
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                stock
                            </a>
                            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"services.html\">stock</a>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link\" href=\"{{ path('app_constat_new') }}\">
                                sinistre
                            </a>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link dropdown-toggle\" href=\"/addrapport\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                remborsement
                            </a>
                            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/addrapport\">rapport</a>

                            </div>
                        </li>
                        <li class=\"nav-item dropdown show\">
                            <a class=\"nav-link\" href=\"{{ path('app_reclamation_new') }}\">
                                Reclamation
                            </a>
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
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_reclamation_indexfront') }}\">
                                            <i class=\"bi bi-question-circle\"></i>
                                            <span>Mes réclamations</span>
                                        </a>
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
    <!--end header-->
    {% block Service %}
        <section class=\"w3l-main-slider\" id=\"home\">
            <!-- main-slider -->
            <div class=\"companies20-content\">

                <div class=\"owl-one owl-carousel owl-theme\">
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info banner-view bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg mr-auto\">
                                            <h5>Votre sécurité, notre priorité</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"services.html\"> Nos Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info  banner-view banner-top1 bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg mx-auto text-center\">
                                            <h5>Sécurité, fiabilité, notre assurance automobile</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\">Nous Contactez</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"item\">
                        <li>
                            <div class=\"slider-info banner-view banner-top2 bg bg2\" data-selector=\".bg.bg2\">
                                <div class=\"banner-info\">
                                    <div class=\"container\">
                                        <div class=\"banner-info-bg ml-auto text-right\">
                                            <h5>Protection sur roues, assurance sur nous</h5>
                                            <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                                            <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"about.html\">Qui sommes-Nous?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>

                </div>
            </div>

            </div>


            <script src=\"{{asset('assetsfront/js/owl.carousel.js')}}\"></script>
            <!-- script for -->
            <script>
                \$(document).ready(function () {
                    \$('.owl-one').owlCarousel({
                        loop: true,
                        margin: 0,
                        nav: false,
                        responsiveClass: true,
                        autoplay: false,
                        autoplayTimeout: 5000,
                        autoplaySpeed: 1000,
                        autoplayHoverPause: false,
                        responsive: {
                            0: {
                                items: 1,
                                nav: false
                            },
                            480: {
                                items: 1,
                                nav: false
                            },
                            667: {
                                items: 1,
                                nav: true
                            },
                            1000: {
                                items: 1,
                                nav: true
                            }
                        }
                    })
                })
            </script>
            <!-- //script -->
            <!-- /main-slider -->
        </section>
    {% endblock %}
    <h1>Constat</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ constat.id }}</td>
        </tr>
        <tr>
            <th>Dateaccident</th>
            <td>{{ constat.dateaccident ? constat.dateaccident|date('Y-m-d') : '' }}</td>
        </tr>
        <tr>
            <th>Lieu</th>
            <td>{{ constat.lieu }}</td>
        </tr>
        <tr>
            <th>Dateconstat</th>
            <td>{{ constat.dateconstat ? constat.dateconstat|date('Y-m-d') : '' }}</td>
        </tr>
        <tr>
            <th>Imageaccident</th>
            <td><img src=\"{{vich_uploader_asset(constat,'imageFile') }}\" width=\"200\" height=\"200\"></td>
        </tr>
        <tr>
            <th>Etat</th>
            <td>{{ constat.etat }}</td>
        </tr>
        <tr>
            <th>client</th>
            <td>{{ constat.user.lastname }}</td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td>{{ constat.user.email }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Les véhicules</th>
        </tr>
        <tr>
            <th scope=\"col\">Identifiant</th>
            <th scope=\"col\">Num contrat</th>
            <th scope=\"col\">Nom agence</th>
            <th scope=\"col\">Nom conducteur</th>
            <th scope=\"col\">Prenom conducteur</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Immatriculation</th>
            <th scope=\"col\">Actions</th>
        </tr>
        {% for vehicule in vehicules %}
            <tr>

                <td>{{ vehicule.id }}</td>
                <td>{{ vehicule.numContrat }}</td>
                <td>{{ vehicule.nomagence }}</td>
                <td>{{ vehicule.nomconducteur }}</td>
                <td>{{ vehicule.prenomconducteur }}</td>
                <td>{{ vehicule.adresse }}</td>
                <td>{{ vehicule.immatriculation }}</td>

                <td><a href=\"{{ path('app_vehicule_edit', {'id':vehicule.id}) }}\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a></td>
            </tr>
        {% else %}

            <tr>
                <th>Aucune véhicule ajoutée</th>

            </tr>
        {% endfor %}
        </tr>
        </tbody>
    </table>


    <a href=\"{{ path('app_constat_indexfront', {'id':constat.id}) }}\"><img src=\"{{ asset('assets/img/undo.png') }}\" height=\"30\" width=\"30\"></a>
    {{ include('constat/_delete_form.html.twig') }}
    <section class=\"partners py-5\" id=\"partners\">
        <div class=\"container py-md-3\">
            <div class=\"heading text-center mx-auto\">
                <h3 class=\"head\">Our Partners</h3>
                <p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <div class=\"inner-sec-w3ls pt-5 mt-3\">
                <div class=\"sponsers-icon text-center\">
                    <ul class=\"list-unstyled partners-icon row\">
                        <li class=\"col-md-2 col-4\">
                            <span class=\"fa fa-codepen\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-left border-right\">
                            <span class=\"fa fa-lastfm\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right\">
                            <span class=\"fa fa-codiepie\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
                            <span class=\"fa fa-drupal\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
                            <span class=\"fa fa-dashcube\" aria-hidden=\"true\"></span>
                        </li>
                        <li class=\"col-md-2 col-4 mt-md-0 mt-3\">
                            <span class=\"fa fa-skyatlas\" aria-hidden=\"true\"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class=\"w3l-footer-29-main\">
        <div class=\"footer-29\">
            <div class=\"container\">
                <div class=\"d-grid grid-col-4 footer-top-29\">
                    <div class=\"footer-list-29 footer-1\">
                        <h6 class=\"footer-title-29\"><a href=\"index.html\"><span class=\"fa fa-gg\"></span> Corporite</a></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, Cras at nunc sagittis, suscipit dolor nunc sagittis sed do eiusmod tempor incididunt ut., consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>

                    </div>
                    <div class=\"footer-list-29 footer-2\">
                        <ul>
                            <h6 class=\"footer-title-29\">Categories</h6>
                            <li><a href=\"about.html\">Our People </a></li>
                            <li><a href=\"#\">Latest Media</a></li>
                            <li><a href=\"#\">Our Branches</a></li>

                            <li><a href=\"services.html\">Organisations</a></li>
                            <li><a href=\"services.html\">Help</a></li>

                        </ul>
                    </div>

                    <div class=\"footer-list-29 footer-3\">


                        <h6 class=\"footer-title-29\">Latest Posts</h6>
                        <ul class=\"list-unstyled d-flex flex-wrap\">
                            <li class=\"\">
                                <div class=\"row\">
                                    <a class=\"col-md-5 col-4\" href=\"#\">
                                        <img class=\"rounded img-fluid img-responsive\" src=\"{{asset('assetsfront/images/g4.jpg')}}\" alt=\"image\">
                                    </a>
                                    <div class=\"col pl-0\">
                                        <a class=\"footer-small-text\" href=\"#\">Lorem ipsum dolor sit amet adipiscin elit</a>
                                        <div class=\"text-sub-small text-white mt-2\">April 10th, 2020</div>
                                    </div>
                                </div>
                            </li>
                            <li class=\"mt-md-0 mt-2\">
                                <div class=\"row my-2 my-md-3\">
                                    <a class=\"col-md-5 col-4\" href=\"#\">
                                        <img class=\"rounded img-fluid img-responsive\" src=\"{{asset('assetsfront/images/g5.jpg')}}\" alt=\"image\">
                                    </a>
                                    <div class=\"col pl-0\">
                                        <a class=\"footer-small-text\" href=\"#\">Cras at nunc sagittis, suscipit dolor</a>
                                        <div class=\"text-sub-small text-white mt-2\">April 2nd, 2020 </div>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class=\"footer-list-29 footer-4\">
                        <ul>
                            <h6 class=\"footer-title-29\">Quick Links</h6>
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"services.html\">Services</a></li>
                            <li><a href=\"#\"> Blog</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"d-grid grid-col-2 bottom-copies\">
                    <p class=\"copy-footer-29\">© 2020 Corporite. All rights reserved | Designed by <a
                                href=\"https://w3layouts.com\">W3layouts</a></p>
                    <div class=\"main-social-footer-29\">
                        <a href=\"#facebook\" class=\"facebook\"><span class=\"fa fa-facebook\"></span></a>
                        <a href=\"#twitter\" class=\"twitter\"><span class=\"fa fa-twitter\"></span></a>
                        <a href=\"#instagram\" class=\"instagram\"><span class=\"fa fa-instagram\"></span></a>
                        <a href=\"#google-plus\" class=\"google-plus\"><span class=\"fa fa-google-plus\"></span></a>
                        <a href=\"#linkedin\" class=\"linkedin\"><span class=\"fa fa-linkedin\"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick=\"topFunction()\" id=\"movetop\" title=\"Go to top\">
            <span class=\"fa fa-angle-up\"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById(\"movetop\").style.display = \"block\";
                } else {
                    document.getElementById(\"movetop\").style.display = \"none\";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <script src=\"{{asset('assetsfront/js/jquery-3.3.1.min.js')}}\"></script>
    <!-- //footer-28 block -->
    </section>
    <script>
        \$(function () {
            \$('.navbar-toggler').click(function () {
                \$('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
    </script>

    <!-- Template JavaScript -->
    <script src=\"{{asset('assetsfront/js/all.js')}}\"></script>
    <!-- Smooth scrolling -->
    <!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
    <script src=\"{{asset('assetsfront/js/owl.carousel.js')}}\"></script>

    <!-- script for -->
    <script>
        \$(document).ready(function () {
            \$('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    </body>
    <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/chart.js/chart.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
{%endblock%}
</html>
<!-- // grids block 5 -->
", "constat/showfront.html.twig", "E:\\PII\\templates\\constat\\showfront.html.twig");
    }
}
