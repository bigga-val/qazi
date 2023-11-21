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

/* elements/jumbotron.html.twig */
class __TwigTemplate_350f086ca49c05f78f62fe7325a08ca0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/jumbotron.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/jumbotron.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "elements/jumbotron.html.twig", 1);
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
                <span>Jumbotron</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Basic</h5>
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
                    <div class=\"w-full\">
                        <div
                            class=\"prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light\">
                            <h2 class=\"text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light\">Hello, world!
                            </h2>
                            <p class=\"lead mt-3 mb-4 dark:text-white-light\">This is a simple hero unit, a simple
                                jumbotron-style component for calling extra attention to featured content or
                                information.</p>
                            <hr class=\"my-4 dark:border-[#191e3a]\">
                            <p class=\"mb-5\">It uses utility classes for typography and spacing to space content out
                                within the larger container.</p>
                            <p class=\"lead\"><button type=\"button\" class=\"btn btn-dark\">Learn more</button></p>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- basic --&gt;
    &lt;div class=&quot;prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light&quot;&gt;
        &lt;h2 class=&quot;text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light&quot;&gt;Hello, world!&lt;/h2&gt;
        &lt;p class=&quot;lead mt-3 mb-4 dark:text-white-light&quot;&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
        &lt;hr class=&quot;my-4 dark:border-[#191e3a]&quot;&gt;
        &lt;p class=&quot;mb-5&quot;&gt;It uses utility classes for typography and spacing to space content out within the larger container.&lt;/p&gt;
        &lt;p class=&quot;lead&quot;&gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Learn more&lt;/button&gt;&lt;/p&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Jumbotron Fluid</h5>
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
                    <div class=\"w-full\">
                        <div
                            class=\"prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light\">
                            <h2 class=\"text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light\">Fluid Jumbotron
                            </h2>
                            <p class=\"lead mt-3 mb-4 dark:text-white-light\">This is a modified jumbotron that occupies
                                the entire horizontal space of its parent.</p>
                            <blockquote
                                class=\"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]\">
                                <div class=\"flex items-start\">
                                    <div class=\"w-14 h-14 ltr:mr-5 rtl:ml-5 flex-none\">
                                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-34.jpeg"), "html", null, true);
        echo "\" alt=\"image\"
                                            class=\"w-14 h-14 rounded-full object-cover m-auto\" />
                                    </div>
                                    <p class=\"not-italic text-[#515365] text-sm dark:text-white-light m-0\">Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                                <small
                                    class=\"ltr:text-right rtl:text-left w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 before:ltr:mr-1 rtl:before:ml-1\">Someone
                                    famous <cite class=\"italic\">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- jumbotron fluid --&gt;
    &lt;div class=&quot;prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light&quot;&gt;
        &lt;h2 class=&quot;text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light&quot;&gt;Fluid Jumbotron&lt;/h2&gt;
        &lt;p class=&quot;lead mt-3 mb-4 dark:text-white-light&quot;&gt;This is a modified jumbotron that occupies the entire horizontal space of its parent.&lt;/p&gt;
        &lt;blockquote class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-14 h-14 ltr:mr-5 rtl:ml-5 flex-none&quot;&gt;
                    &lt;img src=&quot;&#123;&#123; asset('assets/images/profile-34.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; class=&quot;w-14 h-14 rounded-full object-cover m-auto&quot; /&gt;
                &lt;/div&gt;
                &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-light m-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
            &lt;/div&gt;
            &lt;small class=&quot;ltr:text-right rtl:text-left w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 before:ltr:mr-1 rtl:ml-1&quot;&gt;Someone famous &lt;cite class=&quot;italic&quot;&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
        &lt;/blockquote&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 131
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
        return "elements/jumbotron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 131,  199 => 130,  159 => 93,  68 => 4,  58 => 3,  35 => 1,);
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
                <span>Jumbotron</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Basic</h5>
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
                    <div class=\"w-full\">
                        <div
                            class=\"prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light\">
                            <h2 class=\"text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light\">Hello, world!
                            </h2>
                            <p class=\"lead mt-3 mb-4 dark:text-white-light\">This is a simple hero unit, a simple
                                jumbotron-style component for calling extra attention to featured content or
                                information.</p>
                            <hr class=\"my-4 dark:border-[#191e3a]\">
                            <p class=\"mb-5\">It uses utility classes for typography and spacing to space content out
                                within the larger container.</p>
                            <p class=\"lead\"><button type=\"button\" class=\"btn btn-dark\">Learn more</button></p>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- basic --&gt;
    &lt;div class=&quot;prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light&quot;&gt;
        &lt;h2 class=&quot;text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light&quot;&gt;Hello, world!&lt;/h2&gt;
        &lt;p class=&quot;lead mt-3 mb-4 dark:text-white-light&quot;&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
        &lt;hr class=&quot;my-4 dark:border-[#191e3a]&quot;&gt;
        &lt;p class=&quot;mb-5&quot;&gt;It uses utility classes for typography and spacing to space content out within the larger container.&lt;/p&gt;
        &lt;p class=&quot;lead&quot;&gt;&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Learn more&lt;/button&gt;&lt;/p&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Jumbotron Fluid</h5>
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
                    <div class=\"w-full\">
                        <div
                            class=\"prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light\">
                            <h2 class=\"text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light\">Fluid Jumbotron
                            </h2>
                            <p class=\"lead mt-3 mb-4 dark:text-white-light\">This is a modified jumbotron that occupies
                                the entire horizontal space of its parent.</p>
                            <blockquote
                                class=\"text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]\">
                                <div class=\"flex items-start\">
                                    <div class=\"w-14 h-14 ltr:mr-5 rtl:ml-5 flex-none\">
                                        <img src=\"{{ asset('assets/images/profile-34.jpeg') }}\" alt=\"image\"
                                            class=\"w-14 h-14 rounded-full object-cover m-auto\" />
                                    </div>
                                    <p class=\"not-italic text-[#515365] text-sm dark:text-white-light m-0\">Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                </div>
                                <small
                                    class=\"ltr:text-right rtl:text-left w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 before:ltr:mr-1 rtl:before:ml-1\">Someone
                                    famous <cite class=\"italic\">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- jumbotron fluid --&gt;
    &lt;div class=&quot;prose bg-[#f1f2f3] px-4 py-9 sm:px-8 sm:py-16 rounded max-w-full dark:bg-[#1b2e4b] dark:text-white-light&quot;&gt;
        &lt;h2 class=&quot;text-dark mb-5  mt-4 text-center text-5xl dark:text-white-light&quot;&gt;Fluid Jumbotron&lt;/h2&gt;
        &lt;p class=&quot;lead mt-3 mb-4 dark:text-white-light&quot;&gt;This is a modified jumbotron that occupies the entire horizontal space of its parent.&lt;/p&gt;
        &lt;blockquote class=&quot;text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]&quot;&gt;
            &lt;div class=&quot;flex items-start&quot;&gt;
                &lt;div class=&quot;w-14 h-14 ltr:mr-5 rtl:ml-5 flex-none&quot;&gt;
                    &lt;img src=&quot;&#123;&#123; asset('assets/images/profile-34.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; class=&quot;w-14 h-14 rounded-full object-cover m-auto&quot; /&gt;
                &lt;/div&gt;
                &lt;p class=&quot;not-italic text-[#515365] text-sm dark:text-white-light m-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
            &lt;/div&gt;
            &lt;small class=&quot;ltr:text-right rtl:text-left w-full not-italic text-xs text-[#777] block before:w-3 before:h-[1px] before:bg-[#777] before:inline-block before:opacity-50 before:relative before:-top-1 before:ltr:mr-1 rtl:ml-1&quot;&gt;Someone famous &lt;cite class=&quot;italic&quot;&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
        &lt;/blockquote&gt;
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

{% endblock %}", "elements/jumbotron.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\elements\\jumbotron.html.twig");
    }
}
