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

/* basefront.html.twig */
class __TwigTemplate_d0d2d5235d7e11e49c413eda25d6b987 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'slidebar' => [$this, 'block_slidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "
         </head>
          
         <body>  

         ";
        // line 143
        $this->displayBlock('header', $context, $blocks);
        // line 272
        echo " 
         ";
        // line 273
        $this->displayBlock('slidebar', $context, $blocks);
        // line 697
        echo "         ";
        $this->displayBlock('body', $context, $blocks);
        // line 699
        echo " 
  ";
        // line 700
        $this->displayBlock('footer', $context, $blocks);
        // line 786
        echo "         
            </body>
          </html> 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "assurtout!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        
    <!-- web fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/css/style-starter.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "<script>
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
        // line 40
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
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsfront/js/all.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth scrolling -->
<!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
<script src=\"";
        // line 65
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
 <script src=\"assetsfront/js/owl.carousel.js\"></script>
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


         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 144
        echo "  <section class=\"w3l-bootstrap-header\">
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

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mx-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">Home</a>
          </li>
          <li class=\"nav-item\">
         <!--   <a class=\"nav-link\" href=\"about.html\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"services.html\">Services</a>
          </li>
        
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>-->
          <li class=\"nav-item dropdown show\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              stock 
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"services.html\">stock</a>
            
             </div>
          </li>
          <li class=\"nav-item dropdown show\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              sinistre
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"/addrapport\">constat</a>
            
             </div>
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
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              reclamation
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"services.html\">reclamation</a>
            
             </div>
          </li>
        </ul>
        <form action=\"search-results.html\" class=\"form-inline position-relative my-2 my-lg-0\">
          <input class=\"form-control search\" type=\"search\" placeholder=\"Search here...\" aria-label=\"Search\" required=\"\">
          <button class=\"btn btn-search position-absolute\" type=\"submit\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span></button>
        </form>
      </div>
    </div>
    <li class=\"nav-item dropdown pe-3\">
       <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"https://avatars.dicebear.com/api/bottts/";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217), "username", [], "any", false, false, false, 217), "html", null, true);
        echo ".svg\" alt=\"Profile\" class=\"rounded-circle\">
                             ";
        // line 218
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218) != null)) {
            // line 219
            echo "
                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "lastname", [], "any", false, false, false, 220), "html", null, true);
            echo "</span>
                                ";
        }
        // line 221
        echo " -->
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                     <h2>";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "user", [], "any", false, false, false, 226), "lastname", [], "any", false, false, false, 226), "html", null, true);
        echo "</h2>
                                    <span></span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 264
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
            </li>

  </nav>
</section>
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 273
    public function block_slidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slidebar"));

        echo " 
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"/register\"> signup</a>
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"/login\"> login</a>
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\"> Contact Us</a>
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"about.html\"> About Us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class=\"item\">
        <li>
          <div class=\"slider-info banner-view banner-top3 bg bg2\" data-selector=\".bg.bg2\">
            <div class=\"banner-info\">
              <div class=\"container\">
                <div class=\"banner-info-bg mr-auto\">
                  <h5>Conduire en toute sérénité grâce à nous.</h5>
                  <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"services.html\">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


 
  <!-- /main-slider -->
</section>
<section class=\"w3l-grid-8\" id=\"about\">
\t<div class=\"grid-main py-5\">
\t\t<div class=\"container py-md-3\">
\t\t\t<div class=\"heading text-center mx-auto\">
\t\t\t\t<h3 class=\"head\">What We Do</h3>
\t\t\t\t<p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t\t  </div>
\t\t\t<div class=\"d-grid pb-5 mb-4 pt-5 mt-3\">
\t\t\t\t<div class=\"grid-column1\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<a href=\"services.html\"><img class=\"card-img-top img-fluid img-responsive\"
\t\t\t\t\t\t\t\tsrc=\"assetsfront/images/g1.jpg\" alt=\"image\"></a>
\t\t\t\t\t\t<div class=\"card-grid-column2\">
\t\t\t\t\t\t\t<h4>Company</h4>
\t\t\t\t\t\t\t<p class=\"mt-2\">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer</p>
\t\t\t\t\t\t\t<a class=\"mt-3 read\" href=\"services.html\"> Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-column1\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<a href=\"services.html\"><img class=\"card-img-top img-fluid img-responsive\"
\t\t\t\t\t\t\t\tsrc=\"assetsfront/images/g2.jpg\" alt=\"image\"></a>
\t\t\t\t\t\t<div class=\"card-grid-column2\">
\t\t\t\t\t\t\t<h4>Our Mission</h4>
\t\t\t\t\t\t\t<p class=\"mt-2\">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer</p>
\t\t\t\t\t\t\t<a class=\"mt-3 read\" href=\"services.html\"> Read More </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"w3l-feature-3\" id=\"features\">
\t<div class=\"grid top-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading text-center mx-auto\">
                <h3 class=\"head text-white\">Features</h3>
                <p class=\"my-3 head text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
\t\t\t<div class=\"middle-section grid-column text-center mt-5 pt-3\">
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-paint-brush\"></span>
\t\t\t\t\t<h4>Conceptual Architecture</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-ils\"></span>
\t\t\t\t\t<h4>Plans and Projects</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-wrench\"></span>
\t\t\t\t\t<h4>Apartment Buildings</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

   <!--customers-7-->
    <section class=\"w3l-customers-8\" id=\"testimonials\">
\t\t<div class=\"customers_sur py-5\">
            <div class=\"container py-md-3\">
                <div class=\"heading text-center mx-auto\">
                    <h3 class=\"head\">Happy Clients</h3>
                    <p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                      Nulla mollis dapibus nunc, ut rhoncus
                      turpis sodales quis. Integer sit amet mattis quam.</p>
                  </div>
                <div class=\"customers-top_sur row mt-5 pt-3\">
                    <div class=\"customers-left_sur col-md-6\">
                        <div class=\"customers_grid\">
                            <span class=\"fa fa-quote-left mb-5\"></span>
                            <p class=\"sub-test\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicingelit,</p>
                            <div class=\"customers-bottom_sur row\">
                                <div class=\"custo-img-res col-3\">
                                    <img src=\"assetsfront/images/c2.jpg\" alt=\" \" class=\"img-responsive\">
                                </div>
                                <div class=\"custo_grid col-9\">
                                    <h5>Shane Watson</h5>
                                    <span>Co-founder</span>
                                </div>
\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>
                     <div class=\"customers-middle_sur col-md-6 mt-md-0 mt-4\">
                        <div class=\"customers_grid\">
                            <span class=\"fa fa-quote-left mb-5\"></span>
                            <p class=\"sub-test\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicingelit,</p>
                            <div class=\"customers-bottom_sur row\">
                                <div class=\"custo-img-res col-3\">
                                     <img src=\"assetsfront/images/c1.jpg\" alt=\" \" class=\"img-responsive\">
                                </div>
                                <div class=\"custo_grid col-9\">
                                    <h5>Henry Nicholas</h5>
                                    <span>Client</span>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>\t
                </div>
            </div>
\t\t</div>
    </section>
    <!--//customers-7-->

<!-- specifications -->
<section class=\"w3l-specifications-9\">
    <div class=\"main-w3\" id=\"newsletter\">
        <div class=\"specification-top row no-gutters\">
          
            <div class=\"col-lg-5 main-cont-wthree-fea \">
                <div class=\"main-cont-top row no-gutters\">
                <div class=\"grids-speci1 col-6 text-center\">
                    <div class=\"spec-2 py-5\">
                        <h3 class=\"title-spe\">250</h3>
                        <p>Projects </p>
                    </div>
                </div>
                <div class=\"grids-speci1 midd-eff-spe col-6 text-center\">
                    <div class=\"spec-2 last-three py-5\">
                        <h3 class=\"title-spe\">600</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class=\"grids-speci1 las-but col-6 text-center\">
                    <div class=\"spec-2 last-two py-5\">
                        <h3 class=\"title-spe\">90</h3>
                        <p> Awards</p>
                    </div>
                </div>
                <div class=\"grids-speci1 las-t col-6 text-center\">
                    <div class=\"spec-2 last-one py-5\">
                        <h3 class=\"title-spe\">520 </h3>
                        <p>Coeffee Cups</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"col-lg-7 main-cont-left\">
             
               <div class=\"heading text-center mx-auto\">
                <h3 class=\"head text-white\">Newsletter</h3>
                <p class=\"my-3 head text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
                <div class=\"form\">
                    <form action=\"#\" method=\"post\" class=\"subscribe-form\">
                        <input type=\"email\" name=\"email\" placeholder=\"enter your email\">
                        <button class=\"btn\">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //specifications -->
</section>
<section class=\"w3l-price-2\" id=\"news\">
    <div class=\"price-main py-5\">
        <div class=\"container py-md-3\">
             <div class=\"pricing-style-w3ls row py-5\">
              <div class=\"pricing-chart col-lg-5\">
                <h3 class=\"\">Latest News</h3>
                        <div class=\"price-box btn-layout bt6 mt-5\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g5.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                   
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">
                                            Magna pars studiorum</a></h6>
                                       
                                        <h5>April 25, 2019</h5>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class=\"price-box btn-layout bt6 mt-4 mb-4\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g6.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                   
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">Couple Area</a></h6>
                                       
                                        <h5>March 25, 2019</h5>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class=\"price-box btn-layout bt6\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g7.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                  
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">Semper ac dolor vitae</a></h6>
                                       
                                        <h5>February 25, 2019</h5>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\"> View More</a>
                    </div>
                    <div class=\"w3l-faq-page col-lg-7 pl-3 pl-lg-5 mt-lg-0 mt-5\">
                      <h3 class=\"\">Frequently Asked Questions</h3>
                        <div class=\"faq-column mt-5\">
                        
                            <details open=\"\">
                              <summary>
                                Project scheduling and management
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Perform value engineering
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Which finance consulting services you provide?
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Fundamental analysis services
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            
                          </div>
                            </div>
            </div>
        </div>
    </div>
</section>
<section class=\"form-12\" id=\"home\">
\t<div class=\"form-12-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"grid-column-2\">
\t\t\t\t<div class=\"column2 text-center\">
\t\t\t\t\t<div class=\"heading text-center mx-auto\">
\t\t\t\t\t\t<h3 class=\"head text-white\">Looking for a first-class business consultant?</h3>
\t\t\t\t\t\t<p class=\"my-3 text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t\t\t\t  </div>
\t\t\t\t\t<a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\"> Contact Us</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--<section class=\"partners py-5\" id=\"partners\">
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
</section> -->
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 697
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 700
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 701
        echo "  <!-- grids block 5 -->
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
                    <img class=\"rounded img-fluid img-responsive\" src=\"assetsfront/images/g4.jpg\" alt=\"image\">
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
                    <img class=\"rounded img-fluid img-responsive\" src=\"assetsfront/images/g5.jpg\" alt=\"image\">
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
        <p class=\"copy-footer-29\">© 2020 assurtout. All rights reserved | Designed by <a
            href=\"https://w3layouts.com\">MesterMinds</a></p>
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
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  938 => 701,  928 => 700,  907 => 697,  465 => 273,  446 => 264,  405 => 226,  398 => 221,  393 => 220,  390 => 219,  388 => 218,  384 => 217,  309 => 144,  299 => 143,  216 => 65,  210 => 62,  185 => 40,  161 => 18,  151 => 17,  139 => 14,  132 => 9,  122 => 8,  103 => 5,  90 => 786,  88 => 700,  85 => 699,  82 => 697,  80 => 273,  77 => 272,  75 => 143,  68 => 138,  66 => 17,  63 => 16,  60 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}assurtout!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
        
    <!-- web fonts -->
    <link href=\"//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assetsfront/css/style-starter.css') }}\">
        {%  endblock  %}

        {%block javascripts %}
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
<script src=\"{{ asset('assetsfront/js/jquery-3.3.1.min.js') }}\"></script>
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
<script src=\"{{ asset('assetsfront/js/all.js') }}\"></script>
<!-- Smooth scrolling -->
<!-- <script src=\"assetsfront/js/smoothscroll.js\"></script> -->
<script src=\"{{ asset('assetsfront/js/owl.carousel.js') }}\"></script>

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
 <script src=\"assetsfront/js/owl.carousel.js\"></script>
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


         {%  endblock  %}

         </head>
          
         <body>  

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

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mx-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">Home</a>
          </li>
          <li class=\"nav-item\">
         <!--   <a class=\"nav-link\" href=\"about.html\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"services.html\">Services</a>
          </li>
        
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>-->
          <li class=\"nav-item dropdown show\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              stock 
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"services.html\">stock</a>
            
             </div>
          </li>
          <li class=\"nav-item dropdown show\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              sinistre
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"/addrapport\">constat</a>
            
             </div>
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
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"false\" aria-expanded=\"false\">
              reclamation
            </a>
            <div class=\"dropdown-menu \" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item\" href=\"services.html\">reclamation</a>
            
             </div>
          </li>
        </ul>
        <form action=\"search-results.html\" class=\"form-inline position-relative my-2 my-lg-0\">
          <input class=\"form-control search\" type=\"search\" placeholder=\"Search here...\" aria-label=\"Search\" required=\"\">
          <button class=\"btn btn-search position-absolute\" type=\"submit\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span></button>
        </form>
      </div>
    </div>
    <li class=\"nav-item dropdown pe-3\">
       <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"https://avatars.dicebear.com/api/bottts/{{ app. user.username }}.svg\" alt=\"Profile\" class=\"rounded-circle\">
                             {% if app.user !=null %}

                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.lastname }}</span>
                                {% endif %} -->
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                     <h2>{{ app.user.lastname }}</h2>
                                    <span></span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
            </li>

  </nav>
</section>
         {% endblock %} 
         {% block slidebar %} 
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"/register\"> signup</a>
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"/login\"> login</a>
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\"> Contact Us</a>
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
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"about.html\"> About Us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class=\"item\">
        <li>
          <div class=\"slider-info banner-view banner-top3 bg bg2\" data-selector=\".bg.bg2\">
            <div class=\"banner-info\">
              <div class=\"container\">
                <div class=\"banner-info-bg mr-auto\">
                  <h5>Conduire en toute sérénité grâce à nous.</h5>
                  <p>Protégez votre avenir avec une assurance fiable et adaptée à vos besoins.</p>
                  <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"services.html\">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


 
  <!-- /main-slider -->
</section>
<section class=\"w3l-grid-8\" id=\"about\">
\t<div class=\"grid-main py-5\">
\t\t<div class=\"container py-md-3\">
\t\t\t<div class=\"heading text-center mx-auto\">
\t\t\t\t<h3 class=\"head\">What We Do</h3>
\t\t\t\t<p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t\t  </div>
\t\t\t<div class=\"d-grid pb-5 mb-4 pt-5 mt-3\">
\t\t\t\t<div class=\"grid-column1\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<a href=\"services.html\"><img class=\"card-img-top img-fluid img-responsive\"
\t\t\t\t\t\t\t\tsrc=\"assetsfront/images/g1.jpg\" alt=\"image\"></a>
\t\t\t\t\t\t<div class=\"card-grid-column2\">
\t\t\t\t\t\t\t<h4>Company</h4>
\t\t\t\t\t\t\t<p class=\"mt-2\">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer</p>
\t\t\t\t\t\t\t<a class=\"mt-3 read\" href=\"services.html\"> Read More</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"grid-column1\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<a href=\"services.html\"><img class=\"card-img-top img-fluid img-responsive\"
\t\t\t\t\t\t\t\tsrc=\"assetsfront/images/g2.jpg\" alt=\"image\"></a>
\t\t\t\t\t\t<div class=\"card-grid-column2\">
\t\t\t\t\t\t\t<h4>Our Mission</h4>
\t\t\t\t\t\t\t<p class=\"mt-2\">Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer</p>
\t\t\t\t\t\t\t<a class=\"mt-3 read\" href=\"services.html\"> Read More </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"w3l-feature-3\" id=\"features\">
\t<div class=\"grid top-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading text-center mx-auto\">
                <h3 class=\"head text-white\">Features</h3>
                <p class=\"my-3 head text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
\t\t\t<div class=\"middle-section grid-column text-center mt-5 pt-3\">
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-paint-brush\"></span>
\t\t\t\t\t<h4>Conceptual Architecture</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-ils\"></span>
\t\t\t\t\t<h4>Plans and Projects</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"three-grids-columns\">
\t\t\t\t\t<span class=\"fa fa-wrench\"></span>
\t\t\t\t\t<h4>Apartment Buildings</h4>
\t\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
\t\t\t\t\t<a href=\"services.html\" class=\"actionbg\">Read More </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

   <!--customers-7-->
    <section class=\"w3l-customers-8\" id=\"testimonials\">
\t\t<div class=\"customers_sur py-5\">
            <div class=\"container py-md-3\">
                <div class=\"heading text-center mx-auto\">
                    <h3 class=\"head\">Happy Clients</h3>
                    <p class=\"my-3 head\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                      Nulla mollis dapibus nunc, ut rhoncus
                      turpis sodales quis. Integer sit amet mattis quam.</p>
                  </div>
                <div class=\"customers-top_sur row mt-5 pt-3\">
                    <div class=\"customers-left_sur col-md-6\">
                        <div class=\"customers_grid\">
                            <span class=\"fa fa-quote-left mb-5\"></span>
                            <p class=\"sub-test\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicingelit,</p>
                            <div class=\"customers-bottom_sur row\">
                                <div class=\"custo-img-res col-3\">
                                    <img src=\"assetsfront/images/c2.jpg\" alt=\" \" class=\"img-responsive\">
                                </div>
                                <div class=\"custo_grid col-9\">
                                    <h5>Shane Watson</h5>
                                    <span>Co-founder</span>
                                </div>
\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>
                     <div class=\"customers-middle_sur col-md-6 mt-md-0 mt-4\">
                        <div class=\"customers_grid\">
                            <span class=\"fa fa-quote-left mb-5\"></span>
                            <p class=\"sub-test\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicingelit,</p>
                            <div class=\"customers-bottom_sur row\">
                                <div class=\"custo-img-res col-3\">
                                     <img src=\"assetsfront/images/c1.jpg\" alt=\" \" class=\"img-responsive\">
                                </div>
                                <div class=\"custo_grid col-9\">
                                    <h5>Henry Nicholas</h5>
                                    <span>Client</span>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                        </div>
                    </div>\t
                </div>
            </div>
\t\t</div>
    </section>
    <!--//customers-7-->

<!-- specifications -->
<section class=\"w3l-specifications-9\">
    <div class=\"main-w3\" id=\"newsletter\">
        <div class=\"specification-top row no-gutters\">
          
            <div class=\"col-lg-5 main-cont-wthree-fea \">
                <div class=\"main-cont-top row no-gutters\">
                <div class=\"grids-speci1 col-6 text-center\">
                    <div class=\"spec-2 py-5\">
                        <h3 class=\"title-spe\">250</h3>
                        <p>Projects </p>
                    </div>
                </div>
                <div class=\"grids-speci1 midd-eff-spe col-6 text-center\">
                    <div class=\"spec-2 last-three py-5\">
                        <h3 class=\"title-spe\">600</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class=\"grids-speci1 las-but col-6 text-center\">
                    <div class=\"spec-2 last-two py-5\">
                        <h3 class=\"title-spe\">90</h3>
                        <p> Awards</p>
                    </div>
                </div>
                <div class=\"grids-speci1 las-t col-6 text-center\">
                    <div class=\"spec-2 last-one py-5\">
                        <h3 class=\"title-spe\">520 </h3>
                        <p>Coeffee Cups</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"col-lg-7 main-cont-left\">
             
               <div class=\"heading text-center mx-auto\">
                <h3 class=\"head text-white\">Newsletter</h3>
                <p class=\"my-3 head text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
                <div class=\"form\">
                    <form action=\"#\" method=\"post\" class=\"subscribe-form\">
                        <input type=\"email\" name=\"email\" placeholder=\"enter your email\">
                        <button class=\"btn\">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //specifications -->
</section>
<section class=\"w3l-price-2\" id=\"news\">
    <div class=\"price-main py-5\">
        <div class=\"container py-md-3\">
             <div class=\"pricing-style-w3ls row py-5\">
              <div class=\"pricing-chart col-lg-5\">
                <h3 class=\"\">Latest News</h3>
                        <div class=\"price-box btn-layout bt6 mt-5\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g5.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                   
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">
                                            Magna pars studiorum</a></h6>
                                       
                                        <h5>April 25, 2019</h5>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class=\"price-box btn-layout bt6 mt-4 mb-4\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g6.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                   
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">Couple Area</a></h6>
                                       
                                        <h5>March 25, 2019</h5>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class=\"price-box btn-layout bt6\">
                            <div class=\"grid grid-column-2\">
                                    <div class=\"column-6\">
                                            <img src=\"assetsfront/images/g7.jpg\" alt=\"\" class=\"img-fluid\">
                                        </div>
                                <div class=\"column1\">
                                  
                                    <div class=\"job-info\">
                                        <h6 class=\"pricehead\"><a href=\"#\">Semper ac dolor vitae</a></h6>
                                       
                                        <h5>February 25, 2019</h5>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"#\"> View More</a>
                    </div>
                    <div class=\"w3l-faq-page col-lg-7 pl-3 pl-lg-5 mt-lg-0 mt-5\">
                      <h3 class=\"\">Frequently Asked Questions</h3>
                        <div class=\"faq-column mt-5\">
                        
                            <details open=\"\">
                              <summary>
                                Project scheduling and management
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Perform value engineering
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Which finance consulting services you provide?
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            <details>
                              <summary>
                                Fundamental analysis services
                                <span class=\"fa control-icon-expand fa-chevron-down\"></span>
                                <span class=\"fa control-icon-close fa-times\"></span>
                              </summary>
                              <p>Curabitur dapibus non massa sed maximus. Nam venenatis justo vitae sodales mattis. Vestibulum at
                                ullamcorper
                                neque,
                                vel lobortis tellus. consectetur vitae fringilla eu, ornare eu augue. Aliquam in tincidunt dui, nec mattis
                                velit.
                                Mauris at mauris erat. </p>
                            </details>
                            
                          </div>
                            </div>
            </div>
        </div>
    </div>
</section>
<section class=\"form-12\" id=\"home\">
\t<div class=\"form-12-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"grid-column-2\">
\t\t\t\t<div class=\"column2 text-center\">
\t\t\t\t\t<div class=\"heading text-center mx-auto\">
\t\t\t\t\t\t<h3 class=\"head text-white\">Looking for a first-class business consultant?</h3>
\t\t\t\t\t\t<p class=\"my-3 text-white\"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
\t\t\t\t\t\t  Nulla mollis dapibus nunc, ut rhoncus
\t\t\t\t\t\t  turpis sodales quis. Integer sit amet mattis quam.</p>
\t\t\t\t\t  </div>
\t\t\t\t\t<a class=\"btn btn-secondary btn-theme2 mt-5\" href=\"contact.html\"> Contact Us</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--<section class=\"partners py-5\" id=\"partners\">
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
</section> -->
         {% endblock %}
         {%  block body  %} 

          {%  endblock  %} 
  {% block footer %}
  <!-- grids block 5 -->
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
                    <img class=\"rounded img-fluid img-responsive\" src=\"assetsfront/images/g4.jpg\" alt=\"image\">
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
                    <img class=\"rounded img-fluid img-responsive\" src=\"assetsfront/images/g5.jpg\" alt=\"image\">
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
        <p class=\"copy-footer-29\">© 2020 assurtout. All rights reserved | Designed by <a
            href=\"https://w3layouts.com\">MesterMinds</a></p>
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
         {% endblock %}
         
            </body>
          </html> 
", "basefront.html.twig", "C:\\Users\\Aziz\\FirstProjecttt\\templates\\basefront.html.twig");
    }
}
