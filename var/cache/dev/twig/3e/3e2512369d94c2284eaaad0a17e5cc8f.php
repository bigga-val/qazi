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

/* ligne_facture/show.html.twig */
class __TwigTemplate_0402497ae80e7df08a275afbdbc72ea2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_facture/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_facture/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>LigneFacture</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>LigneFacture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 16, $this->source); })()), "quantite", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>CreatedBy</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_facture_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_facture_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ligne_facture"]) || array_key_exists("ligne_facture", $context) ? $context["ligne_facture"] : (function () { throw new RuntimeError('Variable "ligne_facture" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "ligne_facture/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ligne_facture/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  118 => 35,  113 => 33,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>LigneFacture</title>

{% block body %}
    <h1>LigneFacture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ligne_facture.id }}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ ligne_facture.quantite }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ ligne_facture.prix }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ ligne_facture.createdAt ? ligne_facture.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>CreatedBy</th>
                <td>{{ ligne_facture.createdBy }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_ligne_facture_index') }}\">back to list</a>

    <a href=\"{{ path('app_ligne_facture_edit', {'id': ligne_facture.id}) }}\">edit</a>

    {{ include('ligne_facture/_delete_form.html.twig') }}
{% endblock %}
", "ligne_facture/show.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\ligne_facture\\show.html.twig");
    }
}
