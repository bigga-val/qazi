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

/* elements/pagination.html.twig */
class __TwigTemplate_c4b226bac67f3a6da5e6283cc05ceb54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/pagination.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "elements/pagination.html.twig", 1);
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
                <span>Pagination</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">First</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Next</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Last</button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;First&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Last&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- default --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Solid</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">First</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Next</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Last</button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- solid --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;First&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Last&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- solid --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icons</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- with icons --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- with icons --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icons and Rounded</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code4')\"><span class=\"flex items-center\">

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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold  p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code4')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- with icons rounded --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- with icons rounded --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold  p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">No Spacing</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code5')\"><span class=\"flex items-center\">

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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">


                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">


                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code5')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- no spacing --&gt;
    &lt;ul class=&quot;inline-flex items-center m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- no spacing --&gt;
    &lt;ul class=&quot;inline-flex items-center m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 750
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
        return "elements/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  819 => 750,  815 => 749,  68 => 4,  58 => 3,  35 => 1,);
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
                <span>Pagination</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"form\">
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">First</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Next</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Last</button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light\">Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;First&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Last&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- default --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-primary border-2 border-primary dark:border-primary dark:text-white-light&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition text-dark hover:text-primary border-2 border-[#e0e6ed] dark:border-[#191e3a] hover:border-primary dark:hover:border-primary dark:text-white-light&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Solid</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">First</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Next</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Last</button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Prev</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li><button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- solid --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;First&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Last&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- solid --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Prev&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;&lt;/li&gt;
        &lt;li&gt;&lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;Next&lt;/button&gt;&lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icons</h5>
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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- with icons --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- with icons --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icons and Rounded</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code4')\"><span class=\"flex items-center\">

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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center space-x-1 rtl:space-x-reverse m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold  p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code4')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- with icons rounded --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- with icons rounded --&gt;
    &lt;ul class=&quot;inline-flex items-center space-x-1 rtl:space-x-reverse m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold  p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">No Spacing</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code5')\"><span class=\"flex items-center\">

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
                    <div class=\"flex justify-center flex-col w-full\">
                        <ul class=\"inline-flex items-center m-auto mb-4\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">


                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\"
                                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <ul class=\"inline-flex items-center m-auto\">
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">

                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">1</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary\">2</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">3</button>
                            </li>
                            <li>
                                <button type=\"button\"
                                    class=\"flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary\">


                                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 rtl:rotate-180\">
                                        <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                            stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code5')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- no spacing --&gt;
    &lt;ul class=&quot;inline-flex items-center m-auto mb-4&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- no spacing --&gt;
    &lt;ul class=&quot;inline-flex items-center m-auto&quot;&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;1&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary&quot;&gt;2&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;3&lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;button type=&quot;button&quot; class=&quot;flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary&quot;&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
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

{% endblock %}", "elements/pagination.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\elements\\pagination.html.twig");
    }
}
