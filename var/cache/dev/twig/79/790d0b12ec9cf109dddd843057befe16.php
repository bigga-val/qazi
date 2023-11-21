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

/* client/_form.html.twig */
class __TwigTemplate_b374995d2f7ffedd6152a7c8149cc84b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 3
        echo "    ";
        // line 4
        echo "
    <div>
        <label for=\"\">Nom du Client</label>
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "
    </div>
    <div>
        <label for=\"\">Adresse Physique</label>
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "adressephysique", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Email</label>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Telephone</label>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
    <div>
        <label for=\"\">Site web</label>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "siteweb", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-input"]]);
        echo "

    </div>
<br>
        <button class=\"btn btn-primary\">";
        // line 30
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  92 => 30,  85 => 26,  77 => 21,  69 => 16,  61 => 11,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {#    {{ form_widget(form) }}#}
    {#    {{ form_widget(form.nom) }}#}

    <div>
        <label for=\"\">Nom du Client</label>
        {{ form_widget(form.nom, {'attr': {'class': 'form-input'}}) }}
    </div>
    <div>
        <label for=\"\">Adresse Physique</label>
        {{ form_widget(form.adressephysique, {'attr': {'class': 'form-input'}}) }}

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
        <label for=\"\">Site web</label>
        {{ form_widget(form.siteweb, {'attr': {'class': 'form-input'}}) }}

    </div>
<br>
        <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "client/_form.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\client\\_form.html.twig");
    }
}
