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

/* pages/faq.html.twig */
class __TwigTemplate_ee427367641629532efc35766611933d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/faq.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "pages/faq.html.twig", 1);
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
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Users</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>FAQ</span>
            </li>
        </ul>
        <div class=\"pt-5\">
            <h2 class=\"text-center text-xl md:text-3xl font-bold\">Frequently Asked <span
                    class=\"text-primary\">Questions</span></h2>
            <div class=\"space-y-5 mt-5\" x-data=\"{ active: null }\">
                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726] \">
                    <div class=\"flex font-semibold p-5 rounded-t-md  cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 1 }\"
                        x-on:click=\"active === 1 ? active = null : active = 1\">
                        <span class=\"text-primary\">Getting started</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 1 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 1\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 2 }\"
                        x-on:click=\"active === 2 ? active = null : active = 2\">
                        <span class=\"text-primary\">How can I unzip product files</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 2 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 2\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 3 }\"
                        x-on:click=\"active === 3 ? active = null : active = 3\">
                        <span class=\"text-primary\">Sidebar not rendering CSS</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 3 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 3\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 4 }\"
                        x-on:click=\"active === 4 ? active = null : active = 4\">
                        <span class=\"text-primary\">Production Level Built</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 4 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 4\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 5 }\"
                        x-on:click=\"active === 5 ? active = null : active = 5\">
                        <span class=\"text-primary\">Compilation Issue</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 5 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 5\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 6 }\"
                        x-on:click=\"active === 6 ? active = null : active = 6\">
                        <span class=\"text-primary\">Getting started with starter kits</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 6 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 6\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/faq.html.twig";
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
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}

    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Users</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>FAQ</span>
            </li>
        </ul>
        <div class=\"pt-5\">
            <h2 class=\"text-center text-xl md:text-3xl font-bold\">Frequently Asked <span
                    class=\"text-primary\">Questions</span></h2>
            <div class=\"space-y-5 mt-5\" x-data=\"{ active: null }\">
                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726] \">
                    <div class=\"flex font-semibold p-5 rounded-t-md  cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 1 }\"
                        x-on:click=\"active === 1 ? active = null : active = 1\">
                        <span class=\"text-primary\">Getting started</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 1 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 1\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 2 }\"
                        x-on:click=\"active === 2 ? active = null : active = 2\">
                        <span class=\"text-primary\">How can I unzip product files</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 2 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 2\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 3 }\"
                        x-on:click=\"active === 3 ? active = null : active = 3\">
                        <span class=\"text-primary\">Sidebar not rendering CSS</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 3 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 3\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 4 }\"
                        x-on:click=\"active === 4 ? active = null : active = 4\">
                        <span class=\"text-primary\">Production Level Built</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 4 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 4\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 5 }\"
                        x-on:click=\"active === 5 ? active = null : active = 5\">
                        <span class=\"text-primary\">Compilation Issue</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 5 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 5\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>

                <div class=\"border border-[#ebedf2] dark:border-[#191e3a] rounded-md bg-white dark:bg-[#0e1726]\">
                    <div class=\"flex font-semibold p-5 rounded-t-md cursor-pointer\"
                        :class=\"{ 'bg-primary/20 text-primary': active === 6 }\"
                        x-on:click=\"active === 6 ? active = null : active = 6\">
                        <span class=\"text-primary\">Getting started with starter kits</span>
                        <div class=\"ltr:ml-auto  rtl:mr-auto flex\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\"
                                :class=\"{ 'rotate-180': active === 6 }\">
                                <path d=\"M19 9L12 15L5 9\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </div>
                    <div x-cloak x-show=\"active === 6\" x-collapse>
                        <div class=\"p-5 text-white-dark font-semibold\">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "pages/faq.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\pages\\faq.html.twig");
    }
}
