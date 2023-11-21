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

/* forms/switches.html.twig */
class __TwigTemplate_cfebb231e4960c348c402033d2db4553 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/switches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/switches.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "forms/switches.html.twig", 1);
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
    <div x-data=\"form\">
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Forms</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Switches</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\">
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Icon</h4>
                <!-- Icons -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code1')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox1\" />
                                <span for=\"custom_switch_checkbox1\"
                                    class=\"outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code1')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox1&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox1&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code2')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox2\" />
                                <span for=\"custom_switch_checkbox2\"
                                    class=\"outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code2')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox2&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox2&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
            </div>
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Solid</h4>
                <!-- Solid -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code3')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox3\" />
                                <span for=\"custom_switch_checkbox3\"
                                    class=\"bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300 \"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code3')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox3&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox3&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300 &quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code4')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox4\" />
                                <span for=\"custom_switch_checkbox4\"
                                    class=\"bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code4')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox4&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox4&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
            </div>
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Outline</h4>
                <!-- Outline -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code5')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox5\" />
                                <span for=\"custom_switch_checkbox5\"
                                    class=\"outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code5')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- outline --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox5&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox5&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code6')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox6\" />
                                <span for=\"custom_switch_checkbox6\"
                                    class=\"outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code6')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox6&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox6&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 284
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
        return "forms/switches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 284,  349 => 283,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}

    <div x-data=\"form\">
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Forms</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Switches</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\">
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Icon</h4>
                <!-- Icons -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code1')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox1\" />
                                <span for=\"custom_switch_checkbox1\"
                                    class=\"outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code1')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox1&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox1&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code2')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox2\" />
                                <span for=\"custom_switch_checkbox2\"
                                    class=\"outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code2')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox2&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox2&quot; class=&quot;outline_checkbox bg-icon border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full before:bg-[url(/assets/images/close.svg)] before:bg-no-repeat before:bg-center peer-checked:before:left-7 peer-checked:before:bg-[url(/assets/images/checked.svg)] peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
            </div>
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Solid</h4>
                <!-- Solid -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code3')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox3\" />
                                <span for=\"custom_switch_checkbox3\"
                                    class=\"bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300 \"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code3')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- default --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox3&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox3&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300 &quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code4')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox4\" />
                                <span for=\"custom_switch_checkbox4\"
                                    class=\"bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code4')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox4&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox4&quot; class=&quot;bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
            </div>
            <div class=\"space-y-8\">
                <h4 class=\"badge bg-primary inline-block hover:top-0 text-base\">Outline</h4>
                <!-- Outline -->
                <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Default</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code5')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox5\" />
                                <span for=\"custom_switch_checkbox5\"
                                    class=\"outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code5')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- outline --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox5&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox5&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                    <div class=\"panel\">
                        <div class=\"flex items-center justify-between mb-5\">
                            <h5 class=\"font-semibold text-lg dark:text-white-light\">Rounded</h5>
                            <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                                href=\"javascript:;\" @click=\"toggleCode('code6')\">
                                <span class=\"flex items-center\">

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
                                    Code
                                </span>
                            </a>
                        </div>
                        <div class=\"mb-5\">
                            <label class=\"w-12 h-6 relative\">
                                <input type=\"checkbox\"
                                    class=\"custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer\"
                                    id=\"custom_switch_checkbox6\" />
                                <span for=\"custom_switch_checkbox6\"
                                    class=\"outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300\"></span>
                            </label>
                        </div>
                        <template x-if=\"codeArr.includes('code6')\">
                            <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- rounded --&gt;
    &lt;label class=&quot;w-12 h-6 relative&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer&quot; id=&quot;custom_switch_checkbox6&quot; /&gt;
        &lt;span for=&quot;custom_switch_checkbox6&quot; class=&quot;outline_checkbox border-2 border-[#ebedf2] dark:border-white-dark block h-full rounded-full before:absolute before:left-1 before:bg-[#ebedf2] dark:before:bg-white-dark before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:border-primary peer-checked:before:bg-primary before:transition-all before:duration-300&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
    </pre>
                        </template>
                    </div>
                </div>
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


{% endblock %}", "forms/switches.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\forms\\switches.html.twig");
    }
}
