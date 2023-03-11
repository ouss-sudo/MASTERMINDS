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

/* home/show.html.twig */
class __TwigTemplate_b7508e3728feda2fb2e6d765668d8d59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"section\">
<div style=\"display: flex;align-items: center;justify-content: center;margin-top: 80px; padding:45px;\">
<div class=\"card\">
<div class=\"row\">
<div class=\"col-lg-6\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Default Table</h5>

              <!-- Default Table -->
              <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">email</th>
          
                    <th scope=\"col\">lastname</th>
                    
                  </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 24
            echo "                  <tr>
                    <th scope=\"row\">1</th>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getemail", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
             
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getlastname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-warning\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">modifier</a>
                    </td>
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-danger\"href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">supprimer</a>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
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
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  115 => 34,  109 => 31,  103 => 28,  98 => 26,  94 => 24,  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<section class=\"section\">
<div style=\"display: flex;align-items: center;justify-content: center;margin-top: 80px; padding:45px;\">
<div class=\"card\">
<div class=\"row\">
<div class=\"col-lg-6\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Default Table</h5>

              <!-- Default Table -->
              <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">email</th>
          
                    <th scope=\"col\">lastname</th>
                    
                  </tr>
                </thead>
                <tbody>
                {% for users in users %}
                  <tr>
                    <th scope=\"row\">1</th>
                    <td>{{users.getemail}}</td>
             
                    <td>{{users.getlastname}}</td>
                    
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-warning\" href=\"{{ path('app_user_edit',{'id':users.id})}}\">modifier</a>
                    </td>
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-danger\"href=\"{{ path('app_user_delete',{'id':users.id})}}\">supprimer</a>
                    </td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
</div>
</div>
</div>
</div>
</section> 
{% endblock %}
", "home/show.html.twig", "C:\\Users\\Aziz\\FirstProjecttt\\templates\\home\\show.html.twig");
    }
}
