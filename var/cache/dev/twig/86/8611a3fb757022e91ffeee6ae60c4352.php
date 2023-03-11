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

/* back.html.twig */
class __TwigTemplate_91d1451f95013abc1962b923327aa792 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back.html.twig", 1);
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
                    <th scope=\"col\">roles</th>
                    <th scope=\"col\">password</th>
                    <th scope=\"col\">lastname</th>
                    
                  </tr>
                </thead>
                <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 25
            echo "                  <tr>
                    <th scope=\"row\">1</th>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getEmail", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getroles", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getPassword", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "getlastname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-warning\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">modifier</a>
                    </td>
                    <td class=\"hidden-column\">
                      <a class=\"btn btn-danger\"href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">supprimer</a>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  123 => 36,  117 => 33,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
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
                    <th scope=\"col\">roles</th>
                    <th scope=\"col\">password</th>
                    <th scope=\"col\">lastname</th>
                    
                  </tr>
                </thead>
                <tbody>
                {% for users in users %}
                  <tr>
                    <th scope=\"row\">1</th>
                    <td>{{users.getEmail}}</td>
                    <td>{{users.getroles}}</td>
                    <td>{{users.getPassword}}</td>
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
", "back.html.twig", "C:\\Users\\Aziz\\FirstProjecttt\\templates\\back.html.twig");
    }
}
