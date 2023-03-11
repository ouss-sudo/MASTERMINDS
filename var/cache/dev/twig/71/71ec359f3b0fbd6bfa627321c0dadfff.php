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

/* constat/indexfront.html.twig */
class __TwigTemplate_1c9984c5b58db35646072bb8b7a44474 extends Template
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
            'formadd' => [$this, 'block_formadd'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/indexfront.html.twig"));

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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css\" />
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
        // line 430
        echo "</html>
<!-- // grids block 5 -->";
        
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
        // line 227
        echo "

    ";
        // line 229
        $this->displayBlock('formadd', $context, $blocks);
        // line 289
        echo "    <section class=\"partners py-5\" id=\"partners\">
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
                <div id=\"mapid\" style=\"height: 600px;\"></div>
                <script src=\"https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js\"></script>


        <script type=\"text/javascript\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                var map = L.map('mapid').setView([48.8566, 2.3522], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data © <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(map);

                var markers = ";
        // line 338
        echo json_encode((isset($context["markers"]) || array_key_exists("markers", $context) ? $context["markers"] : (function () { throw new RuntimeError('Variable "markers" does not exist.', 338, $this->source); })()));
        echo ";
                var constatsByLieu = ";
        // line 339
        echo json_encode((isset($context["constatsByLieu"]) || array_key_exists("constatsByLieu", $context) ? $context["constatsByLieu"] : (function () { throw new RuntimeError('Variable "constatsByLieu" does not exist.', 339, $this->source); })()));
        echo ";

                for (var i = 0; i < markers.length; i++) {
                    var marker = L.marker([markers[i].lat, markers[i].lng]).addTo(map);
                    var popupContent = markers[i].popupContent;
                    var nbConstats = constatsByLieu[popupContent] ?? 0;
                    popupContent += \"<br>\" + nbConstats + \" accidents\";
                    marker.bindPopup(popupContent);
                }
            });

        </script>

        <!-- move top -->

        <!-- /move top -->
    </section>
    <script src=\"";
        // line 356
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
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/all.js"), "html", null, true);
        echo "\"></script>
    <!-- Smooth scrolling -->
    <!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
    <script src=\"";
        // line 381
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
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 428
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



            <!-- //script -->
            <!-- /main-slider -->
        </section>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 229
    public function block_formadd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        // line 230
        echo "        <h1>Mes Constats</h1>

        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Dateaccident</th>
                <th scope=\"col\">Lieu</th>
                <th scope=\"col\">Dateconstat</th>
                <th scope=\"col\">Imageaccident</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245)) {
            // line 246
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["constats"]) || array_key_exists("constats", $context) ? $context["constats"] : (function () { throw new RuntimeError('Variable "constats" does not exist.', 246, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["constat"]) {
                // line 247
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["constat"], "user", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247))) {
                    // line 248
                    echo "                <tr>
                    <td>";
                    // line 249
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 249), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 250
                    ((twig_get_attribute($this->env, $this->source, $context["constat"], "dateaccident", [], "any", false, false, false, 250)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "dateaccident", [], "any", false, false, false, 250), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</td>
                    <td>";
                    // line 251
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "lieu", [], "any", false, false, false, 251), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 252
                    ((twig_get_attribute($this->env, $this->source, $context["constat"], "dateconstat", [], "any", false, false, false, 252)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "dateconstat", [], "any", false, false, false, 252), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "</td>
                    <td><img src=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["constat"], "imageFile"), "html", null, true);
                    echo "\" width=\"80\" height=\"80\"></td>";
                    // line 254
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["constat"], "etat", [], "any", false, false, false, 254) == "Traitée")) {
                        // line 255
                        echo "                    <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/check.png"), "html", null, true);
                        echo "\" height=\"40\" width=\"40\"></td>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 256
$context["constat"], "etat", [], "any", false, false, false, 256) == "En cours de traitement")) {
                        // line 257
                        echo "                        <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/travail-en-cours.png"), "html", null, true);
                        echo "\" height=\"40\" width=\"40\"></td>
                        ";
                    } else {
                        // line 259
                        echo "                            <td><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/attention.png"), "html", null, true);
                        echo "\" height=\"40\" width=\"40\"></td>
                            ";
                    }
                    // line 261
                    echo "                    <td>
                        <a href=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_showfront", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 262)]), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/detail.png"), "html", null, true);
                    echo "\" height=\"30\" width=\"30\"></a>
                        <a href=\"";
                    // line 263
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pdf.png"), "html", null, true);
                    echo "\" height=\"30\" width=\"30\"></a>
                        ";
                    // line 264
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "vehicules", [], "any", false, false, false, 264)) == 2)) {
                        // line 265
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 265)]), "html", null, true);
                        echo "\" onclick=\"return false;\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/car-crash.png"), "html", null, true);
                        echo "\" height=\"30\" width=\"30\"></a>
                        ";
                    } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 266
$context["constat"], "vehicules", [], "any", false, false, false, 266)) == 1)) {
                        // line 267
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new2", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 267)]), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/car-crash.png"), "html", null, true);
                        echo "\" height=\"30\" width=\"30\"></a>
                        ";
                    } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 268
$context["constat"], "vehicules", [], "any", false, false, false, 268)) == 0)) {
                        // line 269
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 269)]), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/car-crash.png"), "html", null, true);
                        echo "\" height=\"30\" width=\"30\"></a>
                        ";
                    } else {
                        // line 271
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_new", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 271)]), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/car-crash.png"), "html", null, true);
                        echo "\" height=\"30\" width=\"30\"></a></td>
                            ";
                    }
                    // line 273
                    echo "                </tr>
                ";
                }
                // line 275
                echo "            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 276
                echo "                <tr>
                    <td colspan=\"11\">Aucun Constat</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "            ";
        }
        // line 281
        echo "            </tbody>
        </table>
        <div >

            ";
        // line 285
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["constats"]) || array_key_exists("constats", $context) ? $context["constats"] : (function () { throw new RuntimeError('Variable "constats" does not exist.', 285, $this->source); })()));
        echo "

        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constat/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 285,  718 => 281,  715 => 280,  706 => 276,  701 => 275,  697 => 273,  689 => 271,  681 => 269,  679 => 268,  672 => 267,  670 => 266,  663 => 265,  661 => 264,  655 => 263,  649 => 262,  646 => 261,  640 => 259,  634 => 257,  632 => 256,  627 => 255,  624 => 254,  621 => 253,  617 => 252,  613 => 251,  609 => 250,  605 => 249,  602 => 248,  599 => 247,  593 => 246,  591 => 245,  574 => 230,  564 => 229,  493 => 165,  483 => 164,  471 => 428,  465 => 425,  461 => 424,  457 => 423,  453 => 422,  449 => 421,  445 => 420,  441 => 419,  437 => 418,  397 => 381,  391 => 378,  366 => 356,  346 => 339,  342 => 338,  291 => 289,  289 => 229,  285 => 227,  283 => 164,  253 => 137,  244 => 131,  206 => 96,  187 => 80,  170 => 66,  141 => 39,  131 => 38,  120 => 430,  118 => 38,  113 => 36,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  73 => 20,  69 => 19,  64 => 17,  46 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css\" />
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



            <!-- //script -->
            <!-- /main-slider -->
        </section>
    {% endblock %}


    {% block formadd %}
        <h1>Mes Constats</h1>

        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Dateaccident</th>
                <th scope=\"col\">Lieu</th>
                <th scope=\"col\">Dateconstat</th>
                <th scope=\"col\">Imageaccident</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>
            </tr>
            </thead>
            <tbody>
            {% if app.user %}{# verifier si user est connecté #}
            {% for constat in constats %}
                {% if app.user.id==constat.user.id %}
                <tr>
                    <td>{{ constat.id }}</td>
                    <td>{{ constat.dateaccident ? constat.dateaccident|date('Y-m-d') : '' }}</td>
                    <td>{{ constat.lieu }}</td>
                    <td>{{ constat.dateconstat ? constat.dateconstat|date('Y-m-d') : '' }}</td>
                    <td><img src=\"{{vich_uploader_asset(constat,'imageFile') }}\" width=\"80\" height=\"80\"></td>{# image display #}
                    {% if constat.etat=='Traitée'  %}
                    <td><img src=\"{{ asset('assets/img/check.png') }}\" height=\"40\" width=\"40\"></td>
                    {% elseif constat.etat=='En cours de traitement' %}
                        <td><img src=\"{{ asset('assets/img/travail-en-cours.png') }}\" height=\"40\" width=\"40\"></td>
                        {% else %}
                            <td><img src=\"{{ asset('assets/img/attention.png') }}\" height=\"40\" width=\"40\"></td>
                            {% endif %}
                    <td>
                        <a href=\"{{ path('app_constat_showfront', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/detail.png') }}\" height=\"30\" width=\"30\"></a>
                        <a href=\"{{ path('app_constat_pdf', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/pdf.png') }}\" height=\"30\" width=\"30\"></a>
                        {% if (((constat.vehicules)|length) ==2) %}
                        <a href=\"{{ path('app_vehicule_new', {'id': constat.id}) }}\" onclick=\"return false;\"><img src=\"{{ asset('assets/img/car-crash.png') }}\" height=\"30\" width=\"30\"></a>
                        {% elseif (((constat.vehicules)|length) ==1)%}
                        <a href=\"{{ path('app_vehicule_new2', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/car-crash.png') }}\" height=\"30\" width=\"30\"></a>
                        {% elseif (((constat.vehicules)|length) ==0)%}
                        <a href=\"{{ path('app_vehicule_new', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/car-crash.png') }}\" height=\"30\" width=\"30\"></a>
                        {% else %}
                            <a href=\"{{ path('app_vehicule_new', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/car-crash.png') }}\" height=\"30\" width=\"30\"></a></td>
                            {% endif %}
                </tr>
                {% endif %}
            {% else %}
                <tr>
                    <td colspan=\"11\">Aucun Constat</td>
                </tr>
            {% endfor %}
            {% endif %}
            </tbody>
        </table>
        <div >

            {{ knp_pagination_render(constats) }}

        </div>
    {% endblock %}
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
                <div id=\"mapid\" style=\"height: 600px;\"></div>
                <script src=\"https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js\"></script>


        <script type=\"text/javascript\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                var map = L.map('mapid').setView([48.8566, 2.3522], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data © <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(map);

                var markers = {{ markers|json_encode()|raw }};
                var constatsByLieu = {{ constatsByLieu|json_encode()|raw }};

                for (var i = 0; i < markers.length; i++) {
                    var marker = L.marker([markers[i].lat, markers[i].lng]).addTo(map);
                    var popupContent = markers[i].popupContent;
                    var nbConstats = constatsByLieu[popupContent] ?? 0;
                    popupContent += \"<br>\" + nbConstats + \" accidents\";
                    marker.bindPopup(popupContent);
                }
            });

        </script>

        <!-- move top -->

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
<!-- // grids block 5 -->", "constat/indexfront.html.twig", "E:\\PII\\templates\\constat\\indexfront.html.twig");
    }
}
