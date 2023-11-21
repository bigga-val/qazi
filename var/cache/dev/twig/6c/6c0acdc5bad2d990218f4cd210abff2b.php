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

/* elements/infobox.html.twig */
class __TwigTemplate_a1ebfe15c9b0544b65fa92f9c2c2a71f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/infobox.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/infobox.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "elements/infobox.html.twig", 1);
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
                <span>Infobox</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 1</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code1')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6\">
                            <div class=\"text-primary mb-5\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-lg font-semibold mb-3.5 dark:text-white-light\">Layout Package</h5>
                            <p class=\"text-white-dark text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et dolore
                                magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-primary font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                        stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6&quot;&gt;
        &lt;div class=&quot;text-primary mb-5&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-lg font-semibold mb-3.5 dark:text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-dark text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-primary font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 2</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code2')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"bg-dark border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 text-center\">
                            <div
                                class=\"text-white-light bg1-white-dark w-20 h-20 rounded-full flex items-center justify-center mb-5 mx-auto\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-lg font-semibold mb-3.5 text-white-light\">Layout Package</h5>
                            <p class=\"text-white-light text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et
                                dolore magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-info font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;bg-dark border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 text-center&quot;&gt;
        &lt;div class=&quot;text-white-light bg1-white-dark w-20 h-20 rounded-full flex items-center justify-center mb-5 mx-auto&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-lg font-semibold mb-3.5 text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-light text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-info font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 3</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code3')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 pt-12 mt-8 relative\">
                            <div
                                class=\"bg-primary absolute text-white-light ltr:left-6 rtl:right-6 -top-8 w-16 h-16 rounded-md flex items-center justify-center mb-5 mx-auto\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-dark text-lg font-semibold mb-3.5 dark:text-white-light\">Layout Package
                            </h5>
                            <p class=\"text-white-dark text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et dolore
                                magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-primary font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 pt-12 mt-8 relative&quot;&gt;
        &lt;div class=&quot;bg-primary absolute text-white-light left-6 -top-8 w-16 h-16 rounded-md flex items-center justify-center mb-5 mx-auto&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-dark text-lg font-semibold mb-3.5 dark:text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-dark text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-primary font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/highlight.min.js"), "html", null, true);
        echo "\"></script>
    <!-- end hightlight js -->

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"form\", () => ({

                // highlightjs
                codeArr: [],
                toggleCode(name) {
                    if (this.codeArr.includes(name)) {
                        this.codeArr = this.codeArr.filter((d) => d != name);
                    } else {
                        this.codeArr.push(name);

                        setTimeout(() => {
                            document.querySelectorAll('pre.code').forEach(el => {
                                hljs.highlightElement(el);
                            });
                        });
                    }
                }

            }));
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "elements/infobox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 222,  287 => 221,  68 => 4,  58 => 3,  35 => 1,);
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
                <span>Infobox</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 1</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code1')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6\">
                            <div class=\"text-primary mb-5\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-lg font-semibold mb-3.5 dark:text-white-light\">Layout Package</h5>
                            <p class=\"text-white-dark text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et dolore
                                magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-primary font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                        stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6&quot;&gt;
        &lt;div class=&quot;text-primary mb-5&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-lg font-semibold mb-3.5 dark:text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-dark text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-primary font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 2</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code2')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"bg-dark border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 text-center\">
                            <div
                                class=\"text-white-light bg1-white-dark w-20 h-20 rounded-full flex items-center justify-center mb-5 mx-auto\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-lg font-semibold mb-3.5 text-white-light\">Layout Package</h5>
                            <p class=\"text-white-light text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et
                                dolore magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-info font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;bg-dark border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 text-center&quot;&gt;
        &lt;div class=&quot;text-white-light bg1-white-dark w-20 h-20 rounded-full flex items-center justify-center mb-5 mx-auto&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-lg font-semibold mb-3.5 text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-light text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-info font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Infobox 3</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code3')\"><span class=\"flex items-center\">

                            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                                <path
                                    d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\"
                                    stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                <path
                                    d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                                    stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                            </svg>
                            Code</span></a>
                </div>
                <div class=\"mb-5\">
                    <div class=\"flex flex-wrap w-full justify-center\">
                        <div
                            class=\"border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 pt-12 mt-8 relative\">
                            <div
                                class=\"bg-primary absolute text-white-light ltr:left-6 rtl:right-6 -top-8 w-16 h-16 rounded-md flex items-center justify-center mb-5 mx-auto\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 h-12\">
                                    <path
                                        d=\"M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path opacity=\"0.5\" d=\"M21 7.5L12 12M12 12L3 7.5M12 12V21.5\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                            </div>
                            <h5 class=\"text-dark text-lg font-semibold mb-3.5 dark:text-white-light\">Layout Package
                            </h5>
                            <p class=\"text-white-dark text-[15px]  mb-3.5\">Lorem ipsum dolor sit amet, labore et dolore
                                magna aliqua.</p>
                            <a href=\"javascript:;\" class=\"text-primary font-semibold hover:underline group\">Discover

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180\">
                                    <path d=\"M4 12H20M20 12L14 6M20 12L14 18\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- infobox --&gt;
    &lt;div class=&quot;border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 pt-12 mt-8 relative&quot;&gt;
        &lt;div class=&quot;bg-primary absolute text-white-light left-6 -top-8 w-16 h-16 rounded-md flex items-center justify-center mb-5 mx-auto&quot;&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;h5 class=&quot;text-dark text-lg font-semibold mb-3.5 dark:text-white-light&quot;&gt;Layout Package&lt;/h5&gt;
        &lt;p class=&quot;text-white-dark text-[15px]  mb-3.5&quot;&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
        &lt;a href=&quot;javascript:;&quot; class=&quot;text-primary font-semibold hover:underline group&quot;&gt;Discover
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/highlight.min.css') }}\">
    <script src=\"{{ asset('assets/js/highlight.min.js') }}\"></script>
    <!-- end hightlight js -->

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"form\", () => ({

                // highlightjs
                codeArr: [],
                toggleCode(name) {
                    if (this.codeArr.includes(name)) {
                        this.codeArr = this.codeArr.filter((d) => d != name);
                    } else {
                        this.codeArr.push(name);

                        setTimeout(() => {
                            document.querySelectorAll('pre.code').forEach(el => {
                                hljs.highlightElement(el);
                            });
                        });
                    }
                }

            }));
        });
    </script>

{% endblock %}", "elements/infobox.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\elements\\infobox.html.twig");
    }
}
