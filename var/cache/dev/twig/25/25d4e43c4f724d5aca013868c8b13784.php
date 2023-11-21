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

/* auth/boxed-lockscreen.html.twig */
class __TwigTemplate_d3b5e64975a189fc72f504c1c7eeeca3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/boxed-lockscreen.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/boxed-lockscreen.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/auth.html.twig", "auth/boxed-lockscreen.html.twig", 1);
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
<div class=\"flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center\">
        <div class=\"panel sm:w-[480px] m-6 max-w-lg w-full\">
            <div class=\"flex items-center mb-10\">
                <div class=\"ltr:mr-4 rtl:ml-4\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-1.jpeg"), "html", null, true);
        echo "\"
                        class=\"w-16 h-16 object-cover rounded-full\" alt=\"images\" />
                </div>
                <div class=\"flex-1\">
                    <h4 class=\"text-2xl\">Shaun Park</h4>
                    <p>Enter your password to unlock your ID</p>
                </div>
            </div>
            <form class=\"space-y-5\" @submit.prevent=\"window.location='/'\">
                <div>
                    <label for=\"password\">Password</label>
                    <input id=\"password\" type=\"password\" class=\"form-input\" placeholder=\"Enter Password\" />
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-full\">UNLOCK</button>
            </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "auth/boxed-lockscreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/auth.html.twig' %}

{% block content %}

<div class=\"flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center\">
        <div class=\"panel sm:w-[480px] m-6 max-w-lg w-full\">
            <div class=\"flex items-center mb-10\">
                <div class=\"ltr:mr-4 rtl:ml-4\">
                <img src=\"{{ asset('assets/images/profile-1.jpeg') }}\"
                        class=\"w-16 h-16 object-cover rounded-full\" alt=\"images\" />
                </div>
                <div class=\"flex-1\">
                    <h4 class=\"text-2xl\">Shaun Park</h4>
                    <p>Enter your password to unlock your ID</p>
                </div>
            </div>
            <form class=\"space-y-5\" @submit.prevent=\"window.location='/'\">
                <div>
                    <label for=\"password\">Password</label>
                    <input id=\"password\" type=\"password\" class=\"form-input\" placeholder=\"Enter Password\" />
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-full\">UNLOCK</button>
            </form>
        </div>
    </div>
{% endblock %}", "auth/boxed-lockscreen.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\auth\\boxed-lockscreen.html.twig");
    }
}
