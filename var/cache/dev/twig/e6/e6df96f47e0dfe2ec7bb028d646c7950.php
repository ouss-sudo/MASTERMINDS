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

/* reclamation/index.html.twig */
class __TwigTemplate_dd6d1981ad3019d526938445edb7e07f extends Template
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
        return "basebackreclamation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("basebackreclamation.html.twig", "reclamation/index.html.twig", 1);
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
        echo "    <title>Gestion des Réclamation</title>
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
        echo "    <h1>Liste des réclamation</h1>


    <table class=\"table table-hover\" id=\"t\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Objet</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">DateReclamation</th>
                <th scope=\"col\">DateTraitement</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["reclamation"], "users", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 28
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "objet", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateReclamation", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateTraitement", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dateTraitement", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 35) == "Traitée")) {
                // line 36
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/check.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
$context["reclamation"], "etat", [], "any", false, false, false, 37) == "En attente")) {
                // line 38
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wait.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            } else {
                // line 40
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.png"), "html", null, true);
                echo "\" height=\"40\" width=\"40\"></td>
                ";
            }
            // line 42
            echo "                <td>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/detail.png"), "html", null, true);
            echo "\" height=\"30\" width=\"30\"></a>
                    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 44) == "Traitée")) {
                // line 45
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" onclick=\"return false;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            } else {
                // line 47
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refresh.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\"></a>
                    ";
            }
            // line 49
            echo "

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <tr>
                <td colspan=\"7\">Aucune réclamation</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>
    <div >

      ";
        // line 66
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
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchrec");
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

                                \$('#t tbody#search').append('<tr><td> '+obj.id+'</td><td>'+obj.objet+'</td><td>'+obj.description+'</td><td>'+obj.dateReclamation+'</td><td>'+obj.dateTraitement+'</td><td>'+obj.etat+'</td><td><a href=\"/'+obj.id+'/edit\">Modifier</a></td></tr>');
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
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 79,  231 => 66,  222 => 58,  213 => 54,  204 => 49,  196 => 47,  188 => 45,  186 => 44,  180 => 43,  177 => 42,  171 => 40,  165 => 38,  163 => 37,  158 => 36,  156 => 35,  152 => 34,  148 => 33,  144 => 32,  139 => 31,  131 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  110 => 24,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basebackreclamation.html.twig' %}
{% block title %}
    <title>Gestion des Réclamation</title>
{% endblock %}
{% block list %}
    <h1>Liste des réclamation</h1>


    <table class=\"table table-hover\" id=\"t\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Client</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Objet</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">DateReclamation</th>
                <th scope=\"col\">DateTraitement</th>
                <th scope=\"col\">Etat</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for reclamation in reclamations %}
            <tr>
                <td>{{ reclamation.id }}</td>
                {% for user in reclamation.users %}
                <td>{{ user.lastname}}</td>
                <td>{{ user.email }}</td>
                {% endfor %}
                <td>{{ reclamation.objet }}</td>
                <td>{{ reclamation.description }}</td>
                <td>{{ reclamation.dateReclamation ? reclamation.dateReclamation|date('Y-m-d') : '' }}</td>
                <td>{{ reclamation.dateTraitement ? reclamation.dateTraitement|date('Y-m-d') : '' }}</td>
                {% if reclamation.etat=='Traitée'  %}
                    <td><img src=\"{{ asset('assets/img/check.png') }}\" height=\"40\" width=\"40\"></td>
                {% elseif reclamation.etat=='En attente' %}
                    <td><img src=\"{{ asset('assets/img/wait.png') }}\" height=\"40\" width=\"40\"></td>
                {% else %}
                    <td><img src=\"{{ asset('assets/img/loading.png') }}\" height=\"40\" width=\"40\"></td>
                {% endif %}
                <td>
                    <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\"><img src=\"{{ asset('assets/img/detail.png') }}\" height=\"30\" width=\"30\"></a>
                    {% if reclamation.etat=='Traitée'  %}
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" onclick=\"return false;\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% else %}
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\"><img src=\"{{ asset('assets/img/refresh.png') }}\" height=\"30\" width=\"30\"></a>
                    {% endif %}


                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucune réclamation</td>
            </tr>
        {% endfor %}
        </tbody>
        <tbody id=\"search\">
        </tbody>

    </table>
    <div >

      {#  {{ knp_pagination_render(reclamations) }}#}

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
                    url : \"{{ path('searchrec') }}\",
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

                                \$('#t tbody#search').append('<tr><td> '+obj.id+'</td><td>'+obj.objet+'</td><td>'+obj.description+'</td><td>'+obj.dateReclamation+'</td><td>'+obj.dateTraitement+'</td><td>'+obj.etat+'</td><td><a href=\"/'+obj.id+'/edit\">Modifier</a></td></tr>');
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
", "reclamation/index.html.twig", "E:\\PII\\templates\\reclamation\\index.html.twig");
    }
}
