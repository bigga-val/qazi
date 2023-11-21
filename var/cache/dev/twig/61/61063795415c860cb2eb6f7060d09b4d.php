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

/* facture/index.html.twig */
class __TwigTemplate_caf70989d9d205470d8e94c2ac594f59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "facture/index.html.twig", 1);
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
        echo "
<div class=\"panel\">
    <div class=\"flex justify-between m-3\">
        <h1>Liste des facture</h1>
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        echo "\">Creer</a>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Fature No</th>
                <th>Type</th>
                <th>Client</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 25
            echo "                <tr>
                    <td>#</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "type", [], "any", false, false, false, 28), "designation", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getClientFacture", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "
                        </a></td>
                    <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "dateDebut", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateDebut", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "dateFin", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateFin", [], "any", false, false, false, 34), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td class=\"flex\">
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 36)]), "html", null, true);
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
            // line 72
            echo "                        ";
            // line 73
            echo "                        ";
            // line 74
            echo "                        ";
            // line 75
            echo "                        ";
            // line 76
            echo "                        ";
            // line 77
            echo "                        ";
            // line 78
            echo "                        ";
            // line 79
            echo "                        ";
            // line 80
            echo "                        ";
            // line 81
            echo "                        ";
            // line 82
            echo "                        ";
            // line 83
            echo "                        ";
            // line 84
            echo "                        ";
            // line 85
            echo "                        ";
            // line 86
            echo "                        ";
            // line 87
            echo "                        ";
            // line 88
            echo "                        ";
            // line 89
            echo "                        ";
            // line 90
            echo "                        ";
            // line 91
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "                <tr>
                    <td colspan=\"7\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </tbody>
        </table>
    </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 98,  215 => 94,  208 => 91,  206 => 90,  204 => 89,  202 => 88,  200 => 87,  198 => 86,  196 => 85,  194 => 84,  192 => 83,  190 => 82,  188 => 81,  186 => 80,  184 => 79,  182 => 78,  180 => 77,  178 => 76,  176 => 75,  174 => 74,  172 => 73,  170 => 72,  155 => 59,  129 => 36,  124 => 34,  120 => 33,  115 => 31,  111 => 30,  106 => 28,  102 => 27,  98 => 25,  93 => 24,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}

<div class=\"panel\">
    <div class=\"flex justify-between m-3\">
        <h1>Liste des facture</h1>
        <a class=\"btn btn-primary\" href=\"{{ path('app_facture_new') }}\">Creer</a>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Fature No</th>
                <th>Type</th>
                <th>Client</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            {% for facture in factures %}
                <tr>
                    <td>#</td>
                    <td>{{ facture.numeroFacture }}</td>
                    <td>{{ facture.type.designation }}</td>
                    <td>
                        <a href=\"{{ path(\"getClientFacture\", {'id':facture.client.id}) }}\">
                            {{ facture.client.nom }}
                        </a></td>
                    <td>{{ facture.dateDebut ? facture.dateDebut|date('d-m-Y') : '' }}</td>
                    <td>{{ facture.dateFin ? facture.dateFin|date('d-m-Y') : '' }}</td>
                    <td class=\"flex\">
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

                        {#                    <a href=\"\">#}
                        {#                        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"#}
                        {#                             xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\">#}
                        {#                            <path opacity=\"0.5\"#}
                        {#                                  d=\"M16.755 2H7.24502C6.08614 2 5.50671 2 5.03939 2.16261C4.15322 2.47096 3.45748 3.18719 3.15795 4.09946C3 4.58055 3 5.17705 3 6.37006V20.3742C3 21.2324 3.985 21.6878 4.6081 21.1176C4.97417 20.7826 5.52583 20.7826 5.8919 21.1176L6.375 21.5597C7.01659 22.1468 7.98341 22.1468 8.625 21.5597C9.26659 20.9726 10.2334 20.9726 10.875 21.5597C11.5166 22.1468 12.4834 22.1468 13.125 21.5597C13.7666 20.9726 14.7334 20.9726 15.375 21.5597C16.0166 22.1468 16.9834 22.1468 17.625 21.5597L18.1081 21.1176C18.4742 20.7826 19.0258 20.7826 19.3919 21.1176C20.015 21.6878 21 21.2324 21 20.3742V6.37006C21 5.17705 21 4.58055 20.842 4.09946C20.5425 3.18719 19.8468 2.47096 18.9606 2.16261C18.4933 2 17.9139 2 16.755 2Z\"#}
                        {#                                  stroke=\"currentColor\" stroke-width=\"1.5\" />#}
                        {#                            <path d=\"M10.5 11L17 11\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                            <path d=\"M7 11H7.5\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                            <path d=\"M7 7.5H7.5\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                            <path d=\"M7 14.5H7.5\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                            <path d=\"M10.5 7.5H17\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                            <path d=\"M10.5 14.5H17\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
                        {#                                  stroke-linecap=\"round\" />#}
                        {#                        </svg>#}
                        {#                    </a>#}
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


{% endblock %}
", "facture/index.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\facture\\index.html.twig");
    }
}
