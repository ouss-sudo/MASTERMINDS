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

/* security/login.html.twig */
class __TwigTemplate_4eb8232fabfded5ebc7619371d9f3225 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo " rel=\"icon\">
  <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo " rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo " rel=\"stylesheet\">
  <link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<form method=\"post\">
    ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "userIdentifier", [], "any", false, false, false, 50), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 53
        echo "  <main>
    <div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                    <p class=\"text-center small\">Enter your username & password to login</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate>

                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\">Email</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"email\"  value=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\"required autofocus>
                        <div class=\"invalid-feedback\">Please enter your Email.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input  type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>
<input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    
      
                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"true\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Login</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Don't have account? <a href=\"pages-register.html\">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>

  <!-- Template Main JS File -->
  <script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>

</body>






";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 146,  264 => 143,  260 => 142,  256 => 141,  252 => 140,  248 => 139,  244 => 138,  240 => 137,  236 => 136,  191 => 94,  177 => 83,  145 => 53,  137 => 50,  134 => 49,  132 => 48,  129 => 47,  123 => 45,  121 => 44,  106 => 32,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  69 => 19,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href={{asset (\"assets/img/favicon.png\")}} rel=\"icon\">
  <link href={{asset (\"assets/img/apple-touch-icon.png\")}} rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href={{asset (\"https://fonts.gstatic.com\")}} rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href={{asset (\"assets/vendor/bootstrap/css/bootstrap.min.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/bootstrap-icons/bootstrap-icons.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/boxicons/css/boxicons.min.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/quill/quill.snow.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/quill/quill.bubble.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/remixicon/remixicon.css\")}} rel=\"stylesheet\">
  <link href={{asset (\"assets/vendor/simple-datatables/style.css\")}} rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href={{asset (\"assets/css/style.css\")}} rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
  <main>
    <div class=\"container\">

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Login to Your Account</h5>
                    <p class=\"text-center small\">Enter your username & password to login</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate>

                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\">Email</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"email\"  value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\"required autofocus>
                        <div class=\"invalid-feedback\">Please enter your Email.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input  type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>
<input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    
      
                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"true\" id=\"rememberMe\">
                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Login</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Don't have account? <a href=\"pages-register.html\">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src={{asset(\"assets/vendor/apexcharts/apexcharts.min.js\")}}></script>
  <script src={{asset(\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}></script>
  <script src={{asset(\"assets/vendor/chart.js/chart.umd.js\")}}></script>
  <script src={{asset(\"assets/vendor/echarts/echarts.min.js\")}}></script>
  <script src={{asset(\"assets/vendor/quill/quill.min.js\")}}></script>
  <script src={{asset(\"assets/vendor/simple-datatables/simple-datatables.js\")}}></script>
  <script src={{asset(\"assets/vendor/tinymce/tinymce.min.js\")}}></script>
  <script src={{asset(\"assets/vendor/php-email-form/validate.js\")}}></script>

  <!-- Template Main JS File -->
  <script src={{asset(\"assets/js/main.js\")}}></script>

</body>






", "security/login.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\FirstProjecttt\\templates\\security\\login.html.twig");
    }
}
