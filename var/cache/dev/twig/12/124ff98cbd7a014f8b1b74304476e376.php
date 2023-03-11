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

/* constat/index.html.twig */
class __TwigTemplate_5cf33cd3eff7da5053ee0af029df0c07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constat/index.html.twig"));

        $this->parent = $this->loadTemplate("basebackconstat.html.twig", "constat/index.html.twig", 1);
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
        echo "<title>Gestion des Constats</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 6
        echo "    <h1>Liste des Constats</h1>

    <table class=\"table\" id=\"t\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Dateaccident</th>
                <th scope=\"col\">Lieu</th>
                <th scope=\"col\">Dateconstat</th>
                <th scope=\"col\">Imageaccident</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>

            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constats"]) || array_key_exists("constats", $context) ? $context["constats"] : (function () { throw new RuntimeError('Variable "constats" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["constat"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["constat"], "user", [], "any", false, false, false, 27), "lastname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["constat"], "user", [], "any", false, false, false, 28), "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["constat"], "dateaccident", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "dateaccident", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "lieu", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["constat"], "dateconstat", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constat"], "dateconstat", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["constat"], "imageFile"), "html", null, true);
            echo "\" width=\"80\" height=\"80\"></td>";
            // line 33
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["constat"], "etat", [], "any", false, false, false, 33) == "Traitée")) {
                // line 34
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/check.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 35
$context["constat"], "etat", [], "any", false, false, false, 35) == "En cours de traitement")) {
                // line 36
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/travail-en-cours.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            } else {
                // line 38
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/attention.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            }
            // line 40
            echo "
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/detail.png"), "html", null, true);
            echo "\" height=\"30\" width=\"30\"></a>
                    ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["constat"], "etat", [], "any", false, false, false, 43) == "Traitée")) {
                // line 44
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" onclick=\"return false;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            } else {
                // line 46
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["constat"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            }
            // line 48
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"11\">Aucun Constat</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>
    <div >

       ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["constats"]) || array_key_exists("constats", $context) ? $context["constats"] : (function () { throw new RuntimeError('Variable "constats" does not exist.', 62, $this->source); })()));
        echo "

    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */

                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchconstat");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'search' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();

                                \$('#t tbody#search').append('<tr><td> '+obj.id+'</td><td>'+obj.dateaccident+'</td><td>'+obj.lieu+'</td><td>'+obj.dateconstat+'</td><td>'+obj.imageaccident+'</td><td>'+obj.etat+'</td><td><a href=\"/constat/'+obj.id+'/edit\">Modifier</a></td></tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 76,  220 => 62,  211 => 55,  202 => 51,  195 => 48,  187 => 46,  179 => 44,  177 => 43,  171 => 42,  167 => 40,  161 => 38,  155 => 36,  153 => 35,  148 => 34,  145 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  110 => 24,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basebackconstat.html.twig' %}
{% block title %}
<title>Gestion des Constats</title>
{% endblock %}
{% block list %}
    <h1>Liste des Constats</h1>

    <table class=\"table\" id=\"t\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Dateaccident</th>
                <th scope=\"col\">Lieu</th>
                <th scope=\"col\">Dateconstat</th>
                <th scope=\"col\">Imageaccident</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>

            </tr>
        </thead>
        <tbody id=\"all\">
        {% for constat in constats %}
            <tr>
                <td>{{ constat.id }}</td>
                <td>{{ constat.user.lastname }}</td>
                <td>{{ constat.user.email }}</td>
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
                    <a href=\"{{ path('app_constat_show', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/detail.png') }}\" height=\"30\" width=\"30\"></a>
                    {% if constat.etat=='Traitée'  %}
                        <a href=\"{{ path('app_constat_edit', {'id': constat.id}) }}\" onclick=\"return false;\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% else %}
                        <a href=\"{{ path('app_constat_edit', {'id': constat.id}) }}\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">Aucun Constat</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>
    <div >

       {{ knp_pagination_render(constats) }}

    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */

                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('searchconstat') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'search' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();

                                \$('#t tbody#search').append('<tr><td> '+obj.id+'</td><td>'+obj.dateaccident+'</td><td>'+obj.lieu+'</td><td>'+obj.dateconstat+'</td><td>'+obj.imageaccident+'</td><td>'+obj.etat+'</td><td><a href=\"/constat/'+obj.id+'/edit\">Modifier</a></td></tr>');
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>

{% endblock %}
", "constat/index.html.twig", "E:\\PII\\templates\\constat\\index.html.twig");
    }
}
