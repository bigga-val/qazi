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

/* client/show.html.twig */
class __TwigTemplate_cdc6db22520cbe81ed93cfa7832968e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "components/layout/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "client/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Details du client";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Details du client</h1>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-responsive table-hover\">
                <tbody>

                <tr>
                    <th>Nom du client</th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adresse Physique</th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 21, $this->source); })()), "adressephysique", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Telephone</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Site web</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 33, $this->source); })()), "siteweb", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date d'enregistrement</th>
                    <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 37, $this->source); })()), "createdDate", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 37, $this->source); })()), "createdDate", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Invoices de produits</h1>
        </div>
        <div class=\"card-body\">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Facture</th>
                        <th>Date Facture</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <br>
    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Invoices des Services</h1>
        </div>
        <div class=\"card-body\">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>No Facture</th>
                    <th>Date Facture</th>
                    <th>Status</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <a class=\"border border-2 p-3 m-4 text-danger rounded bg-outline-danger\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\">Voir la liste</a>

    <a class=\"border border-2 p-3 m-3 text-white rounded bg-primary\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\">Modifier</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 80,  180 => 78,  136 => 37,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block title %}Details du client{% endblock %}

{% block content %}

    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Details du client</h1>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-responsive table-hover\">
                <tbody>

                <tr>
                    <th>Nom du client</th>
                    <td>{{ client.nom }}</td>
                </tr>
                <tr>
                    <th>Adresse Physique</th>
                    <td>{{ client.adressephysique }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ client.email }}</td>
                </tr>
                <tr>
                    <th>Telephone</th>
                    <td>{{ client.telephone }}</td>
                </tr>
                <tr>
                    <th>Site web</th>
                    <td>{{ client.siteweb }}</td>
                </tr>
                <tr>
                    <th>Date d'enregistrement</th>
                    <td>{{ client.createdDate ? client.createdDate|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Invoices de produits</h1>
        </div>
        <div class=\"card-body\">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Facture</th>
                        <th>Date Facture</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <br>
    <div class=\"card\">
        <div class=\"card-header bg-info\">
            <h1>Invoices des Services</h1>
        </div>
        <div class=\"card-body\">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>No Facture</th>
                    <th>Date Facture</th>
                    <th>Status</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <a class=\"border border-2 p-3 m-4 text-danger rounded bg-outline-danger\" href=\"{{ path('app_client_index') }}\">Voir la liste</a>

    <a class=\"border border-2 p-3 m-3 text-white rounded bg-primary\" href=\"{{ path('app_client_edit', {'id': client.id}) }}\">Modifier</a>

{#    {{ include('client/_delete_form.html.twig') }}#}
{% endblock %}
", "client/show.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\client\\show.html.twig");
    }
}
