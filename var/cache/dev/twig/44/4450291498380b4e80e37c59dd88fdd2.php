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

/* elements/color-library.html.twig */
class __TwigTemplate_e1ed68b92fcf6b51a04ea1d413c023f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/color-library.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/color-library.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "elements/color-library.html.twig", 1);
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
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Elements</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Color Library</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\">
            <div>
                <div class=\"w-fit mb-5\">
                    <h5 class=\"font-semibold text-base text-success bg-success/20 rounded px-3 py-1\">Main Colors</h5>
                </div>
                <div class=\"mb-5\">
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark mb-7\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-primary\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Primary</h5>
                                <span class=\"text-white-dark\">#4361ee</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-info\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Info</h5>
                                <span class=\"text-white-dark\">#2196f3</span>
                            </div>
                        </div>

                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-success\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Success</h5>
                                <span class=\"text-white-dark\">#00ab55</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-warning\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Warning</h5>
                                <span class=\"text-white-dark\">#e2a03f</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-danger\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Danger</h5>
                                <span class=\"text-white-dark\">#e7515a</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-secondary\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Secondry</h5>
                                <span class=\"text-white-dark\">#805dca</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-dark\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Dark</h5>
                                <span class=\"text-white-dark\">#3b3f5c</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-white\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">White</h5>
                                <span class=\"text-white-dark\">#ffffff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-black\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Black</h5>
                                <span class=\"text-white-dark\">#0e1726</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-primary-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Primary-Light</h5>
                                <span class=\"text-white-dark\">#eaf1ff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-info-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Info-Light</h5>
                                <span class=\"text-white-dark\">#e7f7ff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-success-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Success-Light</h5>
                                <span class=\"text-white-dark\">#ddf5f0</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-warning-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Warning-Light</h5>
                                <span class=\"text-white-dark\">#fff9ed</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-danger-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Danger-Light</h5>
                                <span class=\"text-white-dark\">#fff5f5</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-secondary-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Secondry-Light</h5>
                                <span class=\"text-white-dark\">#ebe4f7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-dark-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Dark-Light</h5>
                                <span class=\"text-white-dark\">#eaeaec</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-white-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">White-Light</h5>
                                <span class=\"text-white-dark\">#e0e6ed</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-black-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Black-Light</h5>
                                <span class=\"text-white-dark\">#e3e4eb</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"w-fit mb-5\">
                    <h5 class=\"font-semibold text-sm sm:text-base text-success bg-success/20 rounded px-3 py-1\">More
                        Colors</h5>
                </div>
                <div>
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#e3e7fc]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#e3e7fc</span>
                            </div>
                        </div>

                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#deeffd]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#deeffd</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#d9f2e6]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#d9f2e6</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#fbf1e2]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#fbf1e2</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#fbe5e6]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#fbe5e6</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#ece7f7]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#ece7f7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#e2e2e7]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#e2e2e7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#888ea8]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#888ea8</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#dbdcdf]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#dbdcdf</span>
                            </div>
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
        return "elements/color-library.html.twig";
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
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Elements</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Color Library</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\">
            <div>
                <div class=\"w-fit mb-5\">
                    <h5 class=\"font-semibold text-base text-success bg-success/20 rounded px-3 py-1\">Main Colors</h5>
                </div>
                <div class=\"mb-5\">
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark mb-7\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-primary\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Primary</h5>
                                <span class=\"text-white-dark\">#4361ee</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-info\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Info</h5>
                                <span class=\"text-white-dark\">#2196f3</span>
                            </div>
                        </div>

                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-success\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Success</h5>
                                <span class=\"text-white-dark\">#00ab55</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-warning\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Warning</h5>
                                <span class=\"text-white-dark\">#e2a03f</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-danger\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Danger</h5>
                                <span class=\"text-white-dark\">#e7515a</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-secondary\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Secondry</h5>
                                <span class=\"text-white-dark\">#805dca</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-dark\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Dark</h5>
                                <span class=\"text-white-dark\">#3b3f5c</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-white\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">White</h5>
                                <span class=\"text-white-dark\">#ffffff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-black\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Black</h5>
                                <span class=\"text-white-dark\">#0e1726</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-primary-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Primary-Light</h5>
                                <span class=\"text-white-dark\">#eaf1ff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-info-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Info-Light</h5>
                                <span class=\"text-white-dark\">#e7f7ff</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-success-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Success-Light</h5>
                                <span class=\"text-white-dark\">#ddf5f0</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-warning-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Warning-Light</h5>
                                <span class=\"text-white-dark\">#fff9ed</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-danger-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Danger-Light</h5>
                                <span class=\"text-white-dark\">#fff5f5</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-secondary-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Secondry-Light</h5>
                                <span class=\"text-white-dark\">#ebe4f7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-dark-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Dark-Light</h5>
                                <span class=\"text-white-dark\">#eaeaec</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-white-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">White-Light</h5>
                                <span class=\"text-white-dark\">#e0e6ed</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-black-light\">
                            </div>
                            <div>
                                <h5 class=\"text-sm sm:text-base\">Black-Light</h5>
                                <span class=\"text-white-dark\">#e3e4eb</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"w-fit mb-5\">
                    <h5 class=\"font-semibold text-sm sm:text-base text-success bg-success/20 rounded px-3 py-1\">More
                        Colors</h5>
                </div>
                <div>
                    <div class=\"grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-7 font-semibold dark:text-white-dark\">
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#e3e7fc]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#e3e7fc</span>
                            </div>
                        </div>

                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#deeffd]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#deeffd</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#d9f2e6]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#d9f2e6</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#fbf1e2]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#fbf1e2</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#fbe5e6]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#fbe5e6</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#ece7f7]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#ece7f7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#e2e2e7]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#e2e2e7</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#888ea8]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#888ea8</span>
                            </div>
                        </div>
                        <div class=\"panel p-2.5 rounded-md flex items-center group\">
                            <div
                                class=\"w-20 h-[84px] -m-2.5 ltr:mr-4 rtl:ml-4 ltr:rounded-l-md rtl:rounded-r-md transition-all duration-700 group-hover:scale-110 bg-[#dbdcdf]\">
                            </div>
                            <div>
                                <span class=\"text-white-dark\">#dbdcdf</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{% endblock %}", "elements/color-library.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\elements\\color-library.html.twig");
    }
}
