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

/* users/profile_user.html.twig */
class __TwigTemplate_c04be1cd1f716719d00a1333088d3d60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profile_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profile_user.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "users/profile_user.html.twig", 1);
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
    <div>


        <form class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]\">
            <div class=\"flex items-center justify-between mb-5\">
                <h5 class=\"font-semibold text-lg dark:text-white-light\">Profile</h5>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\"
                   class=\"ltr:ml-auto rtl:mr-auto btn btn-primary p-2 rounded-full\">

                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                         xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\">
                        <path opacity=\"0.5\" d=\"M4 22H20\" stroke=\"currentColor\" stroke-width=\"1.5\"
                              stroke-linecap=\"round\" />
                        <path
                                d=\"M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z\"
                                stroke=\"currentColor\" stroke-width=\"1.5\" />
                        <path opacity=\"0.5\"
                              d=\"M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428\"
                              stroke=\"currentColor\" stroke-width=\"1.5\" />
                    </svg>
                </a>
            </div>
            <div class=\"flex flex-col sm:flex-row\">
                <div class=\"ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5\">
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-34.jpeg"), "html", null, true);
        echo "\" alt=\"image\"
                         class=\"w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto\" />
                </div>
                <div class=\"flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5\">
                    <div>
                        <label for=\"name\">Username</label>
                        <span>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <label for=\"profession\">Email</label>
                        <span>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <label for=\"country\">Telephone</label>
                        <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "telephone", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <label for=\"address\">Addresse Physique</label>
                        <span>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "adressephysique", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
                    </div>
                    <div>
                        <label for=\"location\">Role</label>
                        <span>
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "roles", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 53
            echo "                                ";
            echo twig_escape_filter($this->env, twig_replace_filter($context["role"], ["ROLE_" => "-"]), "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </span>

                    </div>
                    <div>
                        <br>
                        <div x-data=\"modal\" class=\"mb-5\">
                            <!-- button -->
                            <div class=\"flex items-center justify-left\">
                                <button type=\"button\" class=\"btn btn-primary mr-2\" @click=\"toggle\">Changer le role</button>
                                <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" class=\"btn btn-primary m-2\">Reinitialiser le mot de passe</a>

                            </div>

                            <!-- modal -->
                            <div class=\"fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto\" :class=\"open && '!block'\">
                                <div class=\"flex items-start justify-center min-h-screen px-4\" @click.self=\"open = false\">
                                    <div x-show=\"open\" x-transition x-transition.duration.300 class=\"panel border-0 p-0 rounded-lg overflow-hidden my-8 w-full max-w-lg\">
                                        <div class=\"flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3\">
                                            <div class=\"font-bold text-lg\">Changer de role</div>

                                        </div>
                                        <form method=\"POST\">

                                            <div class=\"p-5\">
                                                <div class=\"dark:text-white-dark/70 text-base font-medium text-[#1f2937]\">
                                                    <label for=\"\">Choisir le role</label>
                                                    <select class=\"form-input\" name=\"role\" id=\"role\" required>
                                                        <option value=\"ROLE_ADMIN\">Administrateur</option>
                                                        <option value=\"ROLE_RECEPTION\">RECEPTION</option>
                                                    </select>
                                                </div>
                                                <div class=\"flex justify-end items-center mt-8\">
                                                    <button type=\"button\" class=\"btn btn-outline-danger\" @click=\"toggle\">Discard</button>
                                                    <button type=\"submit\" class=\"btn btn-primary ltr:ml-4 rtl:mr-4\" @click=\"toggle\">Save</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/profile_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 64,  149 => 55,  140 => 53,  136 => 52,  128 => 47,  121 => 43,  114 => 39,  107 => 35,  98 => 29,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}

    <div>


        <form class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]\">
            <div class=\"flex items-center justify-between mb-5\">
                <h5 class=\"font-semibold text-lg dark:text-white-light\">Profile</h5>
                <a href=\"{{ path(\"app_user_edit\", {\"id\":user.id}) }}\"
                   class=\"ltr:ml-auto rtl:mr-auto btn btn-primary p-2 rounded-full\">

                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                         xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\">
                        <path opacity=\"0.5\" d=\"M4 22H20\" stroke=\"currentColor\" stroke-width=\"1.5\"
                              stroke-linecap=\"round\" />
                        <path
                                d=\"M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z\"
                                stroke=\"currentColor\" stroke-width=\"1.5\" />
                        <path opacity=\"0.5\"
                              d=\"M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428\"
                              stroke=\"currentColor\" stroke-width=\"1.5\" />
                    </svg>
                </a>
            </div>
            <div class=\"flex flex-col sm:flex-row\">
                <div class=\"ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5\">
                    <img src=\"{{ asset('assets/images/profile-34.jpeg') }}\" alt=\"image\"
                         class=\"w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto\" />
                </div>
                <div class=\"flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5\">
                    <div>
                        <label for=\"name\">Username</label>
                        <span>{{ user.username }}</span>
                    </div>
                    <div>
                        <label for=\"profession\">Email</label>
                        <span>{{ user.email }}</span>
                    </div>
                    <div>
                        <label for=\"country\">Telephone</label>
                        <span>{{ user.telephone }}</span>
                    </div>
                    <div>
                        <label for=\"address\">Addresse Physique</label>
                        <span>{{ user.adressephysique }}</span>
                    </div>
                    <div>
                        <label for=\"location\">Role</label>
                        <span>
                            {% for role in user.roles %}
                                {{ role |replace({'ROLE_': '-'}) }}
                            {% endfor %}
                        </span>

                    </div>
                    <div>
                        <br>
                        <div x-data=\"modal\" class=\"mb-5\">
                            <!-- button -->
                            <div class=\"flex items-center justify-left\">
                                <button type=\"button\" class=\"btn btn-primary mr-2\" @click=\"toggle\">Changer le role</button>
                                <a href=\"{{ path(\"app_reset_password\", {\"id\":user.id}) }}\" class=\"btn btn-primary m-2\">Reinitialiser le mot de passe</a>

                            </div>

                            <!-- modal -->
                            <div class=\"fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto\" :class=\"open && '!block'\">
                                <div class=\"flex items-start justify-center min-h-screen px-4\" @click.self=\"open = false\">
                                    <div x-show=\"open\" x-transition x-transition.duration.300 class=\"panel border-0 p-0 rounded-lg overflow-hidden my-8 w-full max-w-lg\">
                                        <div class=\"flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3\">
                                            <div class=\"font-bold text-lg\">Changer de role</div>

                                        </div>
                                        <form method=\"POST\">

                                            <div class=\"p-5\">
                                                <div class=\"dark:text-white-dark/70 text-base font-medium text-[#1f2937]\">
                                                    <label for=\"\">Choisir le role</label>
                                                    <select class=\"form-input\" name=\"role\" id=\"role\" required>
                                                        <option value=\"ROLE_ADMIN\">Administrateur</option>
                                                        <option value=\"ROLE_RECEPTION\">RECEPTION</option>
                                                    </select>
                                                </div>
                                                <div class=\"flex justify-end items-center mt-8\">
                                                    <button type=\"button\" class=\"btn btn-outline-danger\" @click=\"toggle\">Discard</button>
                                                    <button type=\"submit\" class=\"btn btn-primary ltr:ml-4 rtl:mr-4\" @click=\"toggle\">Save</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>

{% endblock %}", "users/profile_user.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\users\\profile_user.html.twig");
    }
}
