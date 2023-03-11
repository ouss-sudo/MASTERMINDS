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

/* constat/show.html.twig */
class __TwigTemplate_b1756714bfd2391528e1c539b64796db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'list' => [$this, 'block_list'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basebackconstat.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/show.html.twig"));

        $this->parent = $this->loadTemplate("basebackconstat.html.twig", "constat/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <title>Gestion des Constats</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 7
        echo "    <h1>Constat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "lastname", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateaccident</th>
                <td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 25, $this->source); })()), "dateaccident", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 25, $this->source); })()), "dateaccident", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 29, $this->source); })()), "lieu", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateconstat</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 33, $this->source); })()), "dateconstat", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 33, $this->source); })()), "dateconstat", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Imageaccident</th>
                <td><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 37, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" width=\"200\" height=\"200\"></td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 41, $this->source); })()), "etat", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>client</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "lastname", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 65
            echo "            <tr>

                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "numContrat", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomagence", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "nomconducteur", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "prenomconducteur", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "adresse", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>

            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "
                <tr>
                    <th>Aucune véhicule ajoutée</th>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </tr>
        </tbody>
    </table>

    <td>  <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
        echo "\" height=\"30\" width=\"30\"></a></td></td>
    <td>  <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["constat"]) || array_key_exists("constat", $context) ? $context["constat"] : (function () { throw new RuntimeError('Variable "constat" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/undo.png"), "html", null, true);
        echo "\" height=\"30\" width=\"30\"></a></td></td>

    ";
        // line 90
        echo twig_include($this->env, $context, "constat/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 90,  244 => 88,  238 => 87,  232 => 83,  221 => 77,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 68,  188 => 67,  184 => 65,  179 => 64,  161 => 49,  154 => 45,  147 => 41,  140 => 37,  133 => 33,  126 => 29,  119 => 25,  112 => 21,  105 => 17,  98 => 13,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basebackconstat.html.twig' %}
{% block title %}
    <title>Gestion des Constats</title>
{% endblock %}

{% block list %}
    <h1>Constat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ constat.id }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ constat.user.lastname }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ constat.user.email }}</td>
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
                <td>{{constat.user.lastname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{constat.user.email }}</td>
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
                    <th>Aucune véhicule ajoutée</th>

                </tr>
            {% endfor %}
            </tr>
        </tbody>
    </table>

    <td>  <a href=\"{{ path('app_constat_edit', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a></td></td>
    <td>  <a href=\"{{ path('app_constat_index', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/undo.png') }}\" height=\"30\" width=\"30\"></a></td></td>

    {{ include('constat/_delete_form.html.twig') }}
{% endblock %}
", "constat/show.html.twig", "E:\\PII\\templates\\constat\\show.html.twig");
    }
}
