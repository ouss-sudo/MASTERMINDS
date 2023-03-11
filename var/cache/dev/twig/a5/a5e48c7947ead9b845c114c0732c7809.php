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

/* basefrontconstat.html.twig */
class __TwigTemplate_8c8f7a28eff1180478e9b7297d17cb2a extends Template
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
            'header' => [$this, 'block_header'],
            'Service' => [$this, 'block_Service'],
            'formadd' => [$this, 'block_formadd'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefrontconstat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefrontconstat.html.twig"));

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
        // line 485
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
        echo "  <body>
<!--header-->
";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 164
        echo "<!--end header-->
";
        // line 165
        $this->displayBlock('Service', $context, $blocks);
        // line 261
        echo "

";
        // line 263
        $this->displayBlock('formadd', $context, $blocks);
        // line 284
        echo "<section class=\"partners py-5\" id=\"partners\">
\t<div class=\"container py-md-3\">
\t\t<div class=\"heading text-center mx-auto\">
\t\t\t<h3 class=\"head\">Our Partners</h3>
\t\t\t<p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t  </div>
\t\t<div class=\"inner-sec-w3ls pt-5 mt-3\">
\t\t\t<div class=\"sponsers-icon text-center\">
\t\t\t\t<ul class=\"list-unstyled partners-icon row\">
\t\t\t\t\t<li class=\"col-md-2 col-4\">
\t\t\t\t\t\t<span class=\"fa fa-codepen\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-left border-right\">
\t\t\t\t\t\t<span class=\"fa fa-lastfm\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right\">
\t\t\t\t\t\t<span class=\"fa fa-codiepie\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-drupal\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-dashcube\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-skyatlas\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
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
            <li><a href=\"contact.html\">Our Branches</a></li>
            
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
        // line 349
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
        // line 360
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
            <li><a href=\"contact.html\">Contact</a></li>
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
        // line 422
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
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/all.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth scrolling -->
<!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
<script src=\"";
        // line 447
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "<section class=\"w3l-bootstrap-header\">
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
        // line 67
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
        // line 81
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
        // line 97
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 165
    public function block_Service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Service"));

        // line 166
        echo "    <section class=\"w3l-main-slider\" id=\"home\">
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
                                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\">Nous Contactez</a>
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
        // line 223
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

    // line 263
    public function block_formadd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formadd"));

        // line 264
        echo "    <section class=\"form-12\" id=\"home\">
        <div class=\"form-12-content\">
            <div class=\"container\">
                <div class=\"grid-column-2\">
                    <div class=\"column2 text-center\">
                        <div class=\"heading text-center mx-auto\">
                            <h3 class=\"head text-white\">Looking for a first-class business consultant?</h3>
                            <p class=\"my-3 text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Nulla mollis dapibus nunc, ut rhoncus
                                turpis sodales quis. Integer sit amet mattis quam.</p>
                        </div>
                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\">Nous Contacter</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "basefrontconstat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 264,  657 => 263,  609 => 223,  550 => 166,  540 => 165,  503 => 137,  494 => 131,  457 => 97,  438 => 81,  421 => 67,  394 => 42,  384 => 41,  336 => 447,  330 => 444,  305 => 422,  240 => 360,  226 => 349,  159 => 284,  157 => 263,  153 => 261,  151 => 165,  148 => 164,  146 => 41,  142 => 39,  132 => 38,  121 => 485,  119 => 38,  114 => 36,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  74 => 20,  70 => 19,  65 => 17,  47 => 1,);
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
{% endblock %}
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
                                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\">Nous Contactez</a>
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


{% block formadd %}
    <section class=\"form-12\" id=\"home\">
        <div class=\"form-12-content\">
            <div class=\"container\">
                <div class=\"grid-column-2\">
                    <div class=\"column2 text-center\">
                        <div class=\"heading text-center mx-auto\">
                            <h3 class=\"head text-white\">Looking for a first-class business consultant?</h3>
                            <p class=\"my-3 text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Nulla mollis dapibus nunc, ut rhoncus
                                turpis sodales quis. Integer sit amet mattis quam.</p>
                        </div>
                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\">Nous Contacter</a>
                    </div>


                </div>
            </div>
        </div>
    </section>
{% endblock %}
<section class=\"partners py-5\" id=\"partners\">
\t<div class=\"container py-md-3\">
\t\t<div class=\"heading text-center mx-auto\">
\t\t\t<h3 class=\"head\">Our Partners</h3>
\t\t\t<p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t  </div>
\t\t<div class=\"inner-sec-w3ls pt-5 mt-3\">
\t\t\t<div class=\"sponsers-icon text-center\">
\t\t\t\t<ul class=\"list-unstyled partners-icon row\">
\t\t\t\t\t<li class=\"col-md-2 col-4\">
\t\t\t\t\t\t<span class=\"fa fa-codepen\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-left border-right\">
\t\t\t\t\t\t<span class=\"fa fa-lastfm\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right\">
\t\t\t\t\t\t<span class=\"fa fa-codiepie\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-drupal\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 border-right mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-dashcube\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"col-md-2 col-4 mt-md-0 mt-3\">
\t\t\t\t\t\t<span class=\"fa fa-skyatlas\" aria-hidden=\"true\"></span>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
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
            <li><a href=\"contact.html\">Our Branches</a></li>
            
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
            <li><a href=\"contact.html\">Contact</a></li>
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
{%endblock%}
</html>
<!-- // grids block 5 -->", "basefrontconstat.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\FirstProjecttt\\templates\\basefrontconstat.html.twig");
    }
}
