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

/* users/new.html.twig */
class __TwigTemplate_a97fe8ecf698154286749431bb71bd28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/new.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "users/new.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
    ";
        // line 6
        echo "    ";
        // line 7
        echo "
    <div>
        <label for=\"\">Nom d'utilisateur</label>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
    </div>

    <div>
        <label for=\"\">Email</label>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Telephone</label>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "telephone", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Adresse Physique</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adressephysique", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Mot de passe</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "default: 123456", "readOnly" => "true"]]);
        echo "

    </div>

    <br>
    <button class=\"btn btn-primary\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    <br>
    <a  href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir la liste</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  124 => 36,  120 => 35,  112 => 30,  104 => 25,  96 => 20,  88 => 15,  80 => 10,  75 => 7,  73 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}
    {{ form_start(form) }}
    {#    {{ form_widget(form) }}#}
    {#    {{ form_widget(form.nom) }}#}

    <div>
        <label for=\"\">Nom d'utilisateur</label>
        {{ form_widget(form.username, {'attr': {'class': 'form-input'}}) }}
    </div>

    <div>
        <label for=\"\">Email</label>
        {{ form_widget(form.email, {'attr': {'class': 'form-input'}}) }}

    </div>
    <div>
        <label for=\"\">Telephone</label>
        {{ form_widget(form.telephone, {'attr': {'class': 'form-input'}}) }}

    </div>
    <div>
        <label for=\"\">Adresse Physique</label>
        {{ form_widget(form.adressephysique, {'attr': {'class': 'form-input'}}) }}

    </div>
    <div>
        <label for=\"\">Mot de passe</label>
        {{ form_widget(form.password, {'attr': {'class': 'form-input', 'placeholder':'default: 123456', 'readOnly':'true'}}) }}

    </div>

    <br>
    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
    {{ form_end(form) }}
    <br>
    <a  href=\"{{ path(\"app_user_index\") }}\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir la liste</a>

{% endblock %}", "users/new.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\users\\new.html.twig");
    }
}
