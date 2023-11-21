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

/* client/mesfactures.html.twig */
class __TwigTemplate_8e6d29f64a6fc8fd5cf4321f9c87d8c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/mesfactures.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/mesfactures.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "client/mesfactures.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel\">
                <div class=\"panel-header\">
                    <h1 class=\"p-5\">Infos Client </h1>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table table-hover\">
                        <tr class=\"text-left\">
                            <th>Nom Client</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15)), "html", null, true);
        echo "</td>
                            <th>Email</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17)), "html", null, true);
        echo "</td>
                        </tr>
                        <tr class=\"text-left\">
                            <th>Telephone</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                            <th>Addresse Physique</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 23, $this->source); })()), "adressephysique", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"panel\">
                <div class=\"panel-header\">
                    <h1 class=\"p-5\">Liste des factures </h1>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Fature No</th>
                            <th>Type</th>
                            <th>Raison</th>
                            <th>Date Debut</th>
                            <th>Date Fin</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 50
            echo "                            <tr>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 52), "designation", [], "any", false, false, false, 52)), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "typeBien", [], "any", false, false, false, 53)), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "dateDebut", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateDebut", [], "any", false, false, false, 54), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 55
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "dateFin", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateFin", [], "any", false, false, false, 55), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td class=\"flex\">
";
            // line 58
            echo "
                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"hover:text-primary\">
                                        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\">
                                            <path
                                                    opacity=\"0.5\"
                                                    d=\"M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z\"
                                                    stroke=\"currentColor\"
                                                    stroke-width=\"1.5\"
                                            ></path>
                                            <path d=\"M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z\" stroke=\"currentColor\" stroke-width=\"1.5\"></path>
                                        </svg>
                                    </a>

                                    ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["facture"], "typeBien", [], "any", false, false, false, 71) == "produit")) {
                // line 72
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" class=\"hover:text-info\">
                                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5\">
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                        stroke-linecap=\"round\"
                                                ></path>
                                                <path
                                                        d=\"M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                            </svg>
                                        </a>

";
                // line 96
                echo "                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["facture"], "typeBien", [], "any", false, false, false, 96) == "service")) {
                // line 97
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit_service", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\" class=\"hover:text-info\">
                                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5\">
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                        stroke-linecap=\"round\"
                                                ></path>
                                                <path
                                                        d=\"M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                            </svg>
                                        </a>

";
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            echo "                            <tr>
                                <td colspan=\"7\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


    <a class=\"btn btn-primary\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        echo "\">Creer</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/mesfactures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 140,  253 => 130,  244 => 126,  236 => 122,  233 => 121,  206 => 97,  203 => 96,  176 => 72,  174 => 71,  159 => 59,  156 => 58,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  132 => 50,  127 => 49,  98 => 23,  93 => 21,  86 => 17,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel\">
                <div class=\"panel-header\">
                    <h1 class=\"p-5\">Infos Client </h1>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table table-hover\">
                        <tr class=\"text-left\">
                            <th>Nom Client</th>
                            <td>{{ client.nom | capitalize }}</td>
                            <th>Email</th>
                            <td>{{ client.email | capitalize }}</td>
                        </tr>
                        <tr class=\"text-left\">
                            <th>Telephone</th>
                            <td>{{ client.telephone }}</td>
                            <th>Addresse Physique</th>
                            <td>{{ client.adressephysique }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"panel\">
                <div class=\"panel-header\">
                    <h1 class=\"p-5\">Liste des factures </h1>
                </div>
                <div class=\"panel-body\">
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Fature No</th>
                            <th>Type</th>
                            <th>Raison</th>
                            <th>Date Debut</th>
                            <th>Date Fin</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for facture in factures %}
                            <tr>
                                <td>{{ facture.numeroFacture }}</td>
                                <td>{{ facture.type.designation | capitalize}}</td>
                                <td>{{ facture.typeBien | capitalize }}</td>
                                <td>{{ facture.dateDebut ? facture.dateDebut|date('d-m-Y') : '' }}</td>
                                <td>{{ facture.dateFin ? facture.dateFin|date('d-m-Y') : '' }}</td>
                                <td class=\"flex\">
{#                                    <a href=\"{{ path('app_facture_show', {'id': facture.id}) }}\">show</a>#}

                                    <a href=\"{{ path('app_facture_show', {'id': facture.id}) }}\" class=\"hover:text-primary\">
                                        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\">
                                            <path
                                                    opacity=\"0.5\"
                                                    d=\"M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z\"
                                                    stroke=\"currentColor\"
                                                    stroke-width=\"1.5\"
                                            ></path>
                                            <path d=\"M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z\" stroke=\"currentColor\" stroke-width=\"1.5\"></path>
                                        </svg>
                                    </a>

                                    {% if(facture.typeBien == 'produit') %}
                                        <a href=\"{{ path('app_facture_edit', {'id': facture.id}) }}\" class=\"hover:text-info\">
                                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5\">
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                        stroke-linecap=\"round\"
                                                ></path>
                                                <path
                                                        d=\"M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                            </svg>
                                        </a>

{#                                        <a href=\"{{ path('app_facture_edit', {'id': facture.id}) }}\">edit</a>#}
                                    {% elseif facture.typeBien == 'service' %}
                                        <a href=\"{{ path('app_facture_edit_service', {'id': facture.id}) }}\" class=\"hover:text-info\">
                                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5\">
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                        stroke-linecap=\"round\"
                                                ></path>
                                                <path
                                                        d=\"M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                                <path
                                                        opacity=\"0.5\"
                                                        d=\"M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9\"
                                                        stroke=\"currentColor\"
                                                        stroke-width=\"1.5\"
                                                ></path>
                                            </svg>
                                        </a>

{#                                        <a href=\"{{ path('app_facture_edit_service', {'id': facture.id}) }}\">edit</a>#}
                                    {% endif %}

                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


    <a class=\"btn btn-primary\" href=\"{{ path('app_facture_new') }}\">Creer</a>
{% endblock %}
", "client/mesfactures.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\client\\mesfactures.html.twig");
    }
}
