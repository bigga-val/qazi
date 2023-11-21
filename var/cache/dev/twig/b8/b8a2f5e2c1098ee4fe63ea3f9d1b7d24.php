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
class __TwigTemplate_e36b3b8732def1c5b88361ca07a74807 extends Template
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
    <div class=\"panel m-2\">
        <div class=\"card-header flex justify-between\">
            <div>
                <h1>Details du client</h1>

            </div>
            <div class=\"flex\">
                <a class=\" btn btn-sm  btn-outline-danger mr-3\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\">Voir la liste</a>

                <a class=\"btn btn-sm btn-primary m-3\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Modifier</a>

            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-responsive table-hover\">
                <tbody>

                <tr>
                    <th>Nom du client</th>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Adresse Physique</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 30, $this->source); })()), "adressephysique", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Telephone</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 38, $this->source); })()), "telephone", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Site web</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 42, $this->source); })()), "siteweb", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date d'enregistrement</th>
                    <td>";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "createdDate", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 46, $this->source); })()), "createdDate", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class=\"panel m-2\">
        <div class=\"card-header bg-\">
            <h1>Factures de produits</h1>
        </div>
        <div class=\"table-striped\">
            <table>
                <thead>
                    <tr>
                        <th>No Facture</th>
                        <th>Date Facture</th>
                        <th>Expiration</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["FacturesProduits"]) || array_key_exists("FacturesProduits", $context) ? $context["FacturesProduits"] : (function () { throw new RuntimeError('Variable "FacturesProduits" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 68
            echo "                    <tr>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "datedebut", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "DateFin", [], "any", false, false, false, 71), "d-m-Y"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class=\"panel m-2\">
        <div class=\"card-header bg-\">
            <h5>Factures des Services</h5>
        </div>
        <div class=\"table-responsive\">
            <table>
                <thead>
                <tr>
                    <th>No Facture</th>
                    <th>Date Facture</th>
                    <th>Expiration</th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["FacturesServices"]) || array_key_exists("FacturesServices", $context) ? $context["FacturesServices"] : (function () { throw new RuntimeError('Variable "FacturesServices" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 94
            echo "                        <tr>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "datedebut", [], "any", false, false, false, 96), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "DateFin", [], "any", false, false, false, 97), "d-m-Y"), "html", null, true);
            echo "</td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tbody>
            </table>
        </div>
    </div>

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
        return array (  245 => 101,  235 => 97,  231 => 96,  227 => 95,  224 => 94,  220 => 93,  199 => 74,  190 => 71,  186 => 70,  182 => 69,  179 => 68,  175 => 67,  151 => 46,  144 => 42,  137 => 38,  130 => 34,  123 => 30,  116 => 26,  103 => 16,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block title %}Details du client{% endblock %}

{% block content %}

    <div class=\"panel m-2\">
        <div class=\"card-header flex justify-between\">
            <div>
                <h1>Details du client</h1>

            </div>
            <div class=\"flex\">
                <a class=\" btn btn-sm  btn-outline-danger mr-3\" href=\"{{ path('app_client_index') }}\">Voir la liste</a>

                <a class=\"btn btn-sm btn-primary m-3\" href=\"{{ path('app_client_edit', {'id': client.id}) }}\">Modifier</a>

            </div>
        </div>
        <div class=\"table-responsive\">
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
    <br>
    <div class=\"panel m-2\">
        <div class=\"card-header bg-\">
            <h1>Factures de produits</h1>
        </div>
        <div class=\"table-striped\">
            <table>
                <thead>
                    <tr>
                        <th>No Facture</th>
                        <th>Date Facture</th>
                        <th>Expiration</th>
                    </tr>
                </thead>
                <tbody>
                {% for facture in FacturesProduits %}
                    <tr>
                        <td>{{ facture.numeroFacture }}</td>
                        <td>{{ facture.datedebut | date('d-m-Y') }}</td>
                        <td>{{ facture.DateFin | date('d-m-Y') }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class=\"panel m-2\">
        <div class=\"card-header bg-\">
            <h5>Factures des Services</h5>
        </div>
        <div class=\"table-responsive\">
            <table>
                <thead>
                <tr>
                    <th>No Facture</th>
                    <th>Date Facture</th>
                    <th>Expiration</th>
                </tr>
                </thead>
                <tbody>
                    {% for facture in FacturesServices %}
                        <tr>
                            <td>{{ facture.numeroFacture }}</td>
                            <td>{{ facture.datedebut | date('d-m-Y') }}</td>
                            <td>{{ facture.DateFin | date('d-m-Y') }}</td>
                        </tr>

                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

{#    {{ include('client/_delete_form.html.twig') }}#}
{% endblock %}
", "client/show.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\client\\show.html.twig");
    }
}
