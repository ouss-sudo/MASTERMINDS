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

/* constat/pdf.html.twig */
class __TwigTemplate_44b644d3998a7f008f470f5d2919c500 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Constat PDF</title>

    <!-- Favicons -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
    <h1>Constat</h1>

    <table class=\"table\" border=\"1\">
        <tbody>
        <tr>
            <th scope=\"col\">Id</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Dateaccident</th>
            <td>";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 38, $this->source); })()), "dateaccident", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 38, $this->source); })()), "dateaccident", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Lieu</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 42, $this->source); })()), "lieu", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Dateconstat</th>
            <td>";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 46, $this->source); })()), "dateconstat", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 46, $this->source); })()), "dateconstat", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Etat</th>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 50, $this->source); })()), "etat", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"col\">Client</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "lastname", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
        </tr>
            <th scope=\"col\">Email</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "email", [], "any", false, false, false, 57), "html", null, true);
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
        </tr>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 72
            echo "            <tr>

                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "numContrat", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomagence", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomconducteur", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prenomconducteur", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "adresse", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>

            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "
            <tr>
                <th scope=\"col\">Aucune véhicule ajoutée</th>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </tr>
        </tbody>
    </table>
    <!-- Vendor JS Files -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "constat/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 104,  253 => 101,  249 => 100,  245 => 99,  241 => 98,  237 => 97,  233 => 96,  229 => 95,  225 => 94,  219 => 90,  208 => 84,  199 => 80,  195 => 79,  191 => 78,  187 => 77,  183 => 76,  179 => 75,  175 => 74,  171 => 72,  166 => 71,  149 => 57,  143 => 54,  136 => 50,  129 => 46,  122 => 42,  115 => 38,  108 => 34,  96 => 25,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Constat PDF</title>

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
<body>
    <h1>Constat</h1>

    <table class=\"table\" border=\"1\">
        <tbody>
        <tr>
            <th scope=\"col\">Id</th>
            <td>{{ constat.id }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Dateaccident</th>
            <td>{{ constat.dateaccident ? constat.dateaccident|date('Y-m-d') : '' }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Lieu</th>
            <td>{{ constat.lieu }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Dateconstat</th>
            <td>{{ constat.dateconstat ? constat.dateconstat|date('Y-m-d') : '' }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Etat</th>
            <td>{{ constat.etat }}</td>
        </tr>
        <tr>
            <th scope=\"col\">Client</th>
            <td>{{ constat.user.lastname }}</td>
        </tr>
            <th scope=\"col\">Email</th>
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

            </tr>
        {% else %}

            <tr>
                <th scope=\"col\">Aucune véhicule ajoutée</th>

            </tr>
        {% endfor %}
        </tr>
        </tbody>
    </table>
    <!-- Vendor JS Files -->
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
</body>", "constat/pdf.html.twig", "C:\\Users\\miral\\OneDrive\\Bureau\\FirstProjecttt\\templates\\constat\\pdf.html.twig");
    }
}
