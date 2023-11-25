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

/* security/login.html.twig */
class __TwigTemplate_2478aa8e435a52cddff3b45d19af8d80 extends Template
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
        return "components/layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/auth.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "    <div class=\"flex min-h-screen\">
        <div
                class=\"bg-gradient-to-t from-[#ff1361bf] to-[#44107A] w-1/2  min-h-screen hidden lg:flex flex-col items-center justify-center text-white dark:text-black p-4\">
            <div class=\"w-full mx-auto mb-5\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/qazi.svg"), "html", null, true);
        echo "\"
                                                  alt=\"coming_soon\" class=\"lg:max-w-[370px] xl:max-w-[500px] mx-auto\" /></div>
            <h3 class=\"text-3xl font-bold mb-4 text-center\">Gerez vos factures avec la plus grande facilite</h3>
        </div>
        <div class=\"w-full lg:w-1/2 relative flex justify-center items-center\">
            <div class=\"max-w-[480px] p-5 md:p-10\">
                <h2 class=\"font-bold text-3xl mb-3\">Sign In</h2>
                <p class=\"mb-7\">Enter your email and password to login</p>
                <form class=\"space-y-5\" method=\"post\">
                    ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 21
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "userIdentifier", [], "any", false, false, false, 23), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                        </div>
                    ";
        }
        // line 26
        echo "
                    <div>
                        <label for=\"email\">Email</label>
";
        // line 30
        echo "                        <input type=\"email\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-input\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div>
                        <label for=\"password\">Password</label>
";
        // line 35
        echo "                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-input\" autocomplete=\"current-password\" required>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"#}>
                    </div>
                    <div>
";
        // line 43
        echo "                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-full\">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  143 => 36,  140 => 35,  132 => 30,  127 => 26,  119 => 23,  116 => 22,  113 => 21,  107 => 19,  105 => 18,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/auth.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block content %}
    <div class=\"flex min-h-screen\">
        <div
                class=\"bg-gradient-to-t from-[#ff1361bf] to-[#44107A] w-1/2  min-h-screen hidden lg:flex flex-col items-center justify-center text-white dark:text-black p-4\">
            <div class=\"w-full mx-auto mb-5\"><img src=\"{{ asset('assets/images/qazi.svg') }}\"
                                                  alt=\"coming_soon\" class=\"lg:max-w-[370px] xl:max-w-[500px] mx-auto\" /></div>
            <h3 class=\"text-3xl font-bold mb-4 text-center\">Gerez vos factures avec la plus grande facilite</h3>
        </div>
        <div class=\"w-full lg:w-1/2 relative flex justify-center items-center\">
            <div class=\"max-w-[480px] p-5 md:p-10\">
                <h2 class=\"font-bold text-3xl mb-3\">Sign In</h2>
                <p class=\"mb-7\">Enter your email and password to login</p>
                <form class=\"space-y-5\" method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    {% if app.user %}
                        <div class=\"mb-3\">
                            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                        </div>
                    {% endif %}

                    <div>
                        <label for=\"email\">Email</label>
{#                        <input id=\"email\" type=\"email\" class=\"form-input\" placeholder=\"Enter Email\" />#}
                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-input\" autocomplete=\"email\" required autofocus>
                    </div>
                    <div>
                        <label for=\"password\">Password</label>
{#                        <input id=\"password\" type=\"password\" class=\"form-input\" placeholder=\"Enter Password\" />#}
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-input\" autocomplete=\"current-password\" required>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"#}>
                    </div>
                    <div>
{#                        <label class=\"cursor-pointer\">#}
{#                            <input type=\"checkbox\" class=\"form-checkbox\" />#}
{#                            <span class=\"text-white-dark\">Remember me</span>#}
{#                        </label>#}
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-full\">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>
{#    <form method=\"post\">#}
{#        {% if error %}#}
{#            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
{#        {% endif %}#}
{#    #}
{#        {% if app.user %}#}
{#            <div class=\"mb-3\">#}
{#                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>#}
{#            </div>#}
{#        {% endif %}#}
{#    #}
{#        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>#}
{#        <label for=\"inputEmail\">Email</label>#}
{#        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>#}
{#        <label for=\"inputPassword\">Password</label>#}
{#        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>#}
{#    #}
{#        <input type=\"hidden\" name=\"_csrf_token\"#}
{#               value=\"{{ csrf_token('authenticate') }}\"#}
{#        >#}
{#    #}
{#        #}{##}
{#            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.#}
{#            See https://symfony.com/doc/current/security/remember_me.html#}
{#    #}
{#            <div class=\"checkbox mb-3\">#}
{#                <label>#}
{#                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me#}
{#                </label>#}
{#            </div>#}
{#        #}
{#    #}
{#        <button class=\"btn btn-lg btn-primary\" type=\"submit\">#}
{#            Sign in#}
{#        </button>#}
{#    </form>#}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\security\\login.html.twig");
    }
}
