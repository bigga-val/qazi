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

/* users/reset_pwd.html.twig */
class __TwigTemplate_cc652e1a70c1ae5a883b009d3731eeba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/reset_pwd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/reset_pwd.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "users/reset_pwd.html.twig", 1);
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
        echo "    <form method=\"POST\">
        <div >
            <label for=\"\">Nouveau mot de passe *</label>
            <input type=\"text\" placeholder=\"Entrez le nouveau mot de passe\" class=\"form-input\" name=\"nouveau\" id=\"nouveau\">
        </div>
        <div >
            <label for=\"\">Confirmer mot de passe *</label>
            <input required type=\"text\" placeholder=\"Confirmez le nouveau mot de passe\" class=\"form-input\" name=\"confirme\" id=\"confirme\">
        </div>
        <div>
            <br>
            <input required type=\"submit\" id=\"btnResetPassword\" class=\"btn btn-success m-2\" value=\"Confirmer\">
            <br>
            <a  href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir la liste</a>
            <a  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "id"], "method", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir le profile</a>
        </div>
    </form>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(e){
            let nouveauElt = \$(\"#nouveau\")
            let confirmerElt = \$(\"#confirme\")
            \$(\"#btnResetPassword\").prop(\"disabled\", true)
            confirmerElt.on(\"keyup\", function(e){
                let nouveauPWD = nouveauElt.val()
                let confirmerPWD = confirmerElt.val()
                if(nouveauPWD != confirmerPWD){
                    console.log(\"Differentes valeurs entrees\")
                    \$(\"#btnResetPassword\").prop(\"disabled\", true)
                }else{
                    console.log(\"Valeurs identiques entrees\")
                    \$(\"#btnResetPassword\").prop(\"disabled\", false)

                }
            })
        })
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/reset_pwd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}
    <form method=\"POST\">
        <div >
            <label for=\"\">Nouveau mot de passe *</label>
            <input type=\"text\" placeholder=\"Entrez le nouveau mot de passe\" class=\"form-input\" name=\"nouveau\" id=\"nouveau\">
        </div>
        <div >
            <label for=\"\">Confirmer mot de passe *</label>
            <input required type=\"text\" placeholder=\"Confirmez le nouveau mot de passe\" class=\"form-input\" name=\"confirme\" id=\"confirme\">
        </div>
        <div>
            <br>
            <input required type=\"submit\" id=\"btnResetPassword\" class=\"btn btn-success m-2\" value=\"Confirmer\">
            <br>
            <a  href=\"{{ path(\"app_user_index\") }}\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir la liste</a>
            <a  href=\"{{ path(\"app_user_profile\", {\"id\":app.request.get('id') }) }}\" class=\"border-danger text-danger rounded border border-2 m-2 p-2\">Voir le profile</a>
        </div>
    </form>
    <script src=\"{{ asset(\"assets/js/jquery.min.js\") }}\"></script>
    <script>
        \$(document).ready(function(e){
            let nouveauElt = \$(\"#nouveau\")
            let confirmerElt = \$(\"#confirme\")
            \$(\"#btnResetPassword\").prop(\"disabled\", true)
            confirmerElt.on(\"keyup\", function(e){
                let nouveauPWD = nouveauElt.val()
                let confirmerPWD = confirmerElt.val()
                if(nouveauPWD != confirmerPWD){
                    console.log(\"Differentes valeurs entrees\")
                    \$(\"#btnResetPassword\").prop(\"disabled\", true)
                }else{
                    console.log(\"Valeurs identiques entrees\")
                    \$(\"#btnResetPassword\").prop(\"disabled\", false)

                }
            })
        })
    </script>
{% endblock %}

", "users/reset_pwd.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\users\\reset_pwd.html.twig");
    }
}
