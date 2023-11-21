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

/* pages/maintenence.html.twig */
class __TwigTemplate_449b178da3763ad40c13b318cc7760e7 extends Template
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
        return "components/layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/maintenence.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/maintenence.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/auth.html.twig", "pages/maintenence.html.twig", 1);
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
    <div class=\"flex justify-center items-center min-h-screen bg-gradient-to-t from-[#c39be3] to-[#f2eafa]\">
        <div class=\"text-center p-5\">
            <h2 class=\"text-3xl md:text-5xl mb-10 font-bold\">Under Maintenance</h2>
            <h4 class=\"mb-5 font-semibold text-xl sm:text-2xl text-primary\">Thank you for visiting us.</h4>
            <p class=\"text-base\">We are currently working on making some improvements <br class=\"sm:block hidden\">to give
                you better user experience. <br> <br>Please visit us again shortly.</p>
            <a href=\"/\" class=\"btn btn-primary mt-5 w-max mx-auto\">Home</a>
        </div>
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/maintenence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/auth.html.twig' %}

{% block content %}

    <div class=\"flex justify-center items-center min-h-screen bg-gradient-to-t from-[#c39be3] to-[#f2eafa]\">
        <div class=\"text-center p-5\">
            <h2 class=\"text-3xl md:text-5xl mb-10 font-bold\">Under Maintenance</h2>
            <h4 class=\"mb-5 font-semibold text-xl sm:text-2xl text-primary\">Thank you for visiting us.</h4>
            <p class=\"text-base\">We are currently working on making some improvements <br class=\"sm:block hidden\">to give
                you better user experience. <br> <br>Please visit us again shortly.</p>
            <a href=\"/\" class=\"btn btn-primary mt-5 w-max mx-auto\">Home</a>
        </div>
    </div>
    
{% endblock %}", "pages/maintenence.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\pages\\maintenence.html.twig");
    }
}
