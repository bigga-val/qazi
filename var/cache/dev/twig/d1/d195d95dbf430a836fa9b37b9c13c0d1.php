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

/* elements/avatar.html.twig */
class __TwigTemplate_ead890836a104b5cfa8b988867911755 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/avatar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/avatar.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "elements/avatar.html.twig", 1);
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
                <span>Avatar</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6\" x-data=\"form\">
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <img class=\"w-20 h-20 rounded-full overflow-hidden object-cover\"
                            src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                            src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-14 h-14 rounded-full overflow-hidden object-cover\"
                            src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover\"
                            src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- basic --&gt;
    &lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Indicators</h5>
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <span class=\"w-20 h-20 relative\">
                            <img class=\"w-20 h-20 rounded-full overflow-hidden object-cover\"
                                src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger\"></span>
                        </span>
                        <span class=\"w-16 h-16 relative\">
                            <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                                src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success\"></span>
                        </span>
                        <span class=\"w-14 h-14 relative\">
                            <img class=\"w-14 h-14 rounded-full overflow-hidden object-cover\"
                                src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary\"></span>
                        </span>
                        <span class=\"w-12 h-12 relative\">
                            <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover\"
                                src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info\"></span>
                        </span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- danger --&gt;
    &lt;span class=&quot;w-20 h-20 relative&quot;&gt;
        &lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- success --&gt;
    &lt;span class=&quot;w-16 h-16 relative&quot;&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- secondary --&gt;
    &lt;span class=&quot;w-14 h-14 relative&quot;&gt;
        &lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- info --&gt;
    &lt;span class=&quot;w-12 h-12 relative&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Shapes</h5>
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <img class=\"w-20 h-20 rounded-md overflow-hidden object-cover\"
                            src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                            src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-14 h-14 rounded-md overflow-hidden object-cover\"
                            src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-10 h-10 overflow-hidden object-cover\"
                            src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- squre rounded large --&gt;
    &lt;img class=&quot;w-20 h-20 rounded-md overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- circle --&gt;
    &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- squre rounded small --&gt;
    &lt;img class=&quot;w-14 h-14 rounded-md overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- squre --&gt;
    &lt;img class=&quot;w-10 h-10 overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

                    </template>
                </div>

                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Initials</h5>
                        <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\" href=\"javascript:;\" @click=\"toggleCode('code4')\"><span class=\"flex items-center\">

                             <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                      <path
                        d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                        stroke=\"currentColor\"
                        stroke-width=\"1.5\"
                        stroke-linecap=\"round\"
                      />
                      <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                      <path
                        d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                        stroke=\"currentColor\"
                        stroke-width=\"1.5\"
                        stroke-linecap=\"round\"
                      />
                    </svg>
                             Code</span></a>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"flex items-center justify-center gap-2 text-white flex-wrap\">
                            <span class=\"flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl\">AG</span>
                            <span class=\"flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl\">AG</span>
                            <span class=\"flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg\">AG</span>
                            <span class=\"flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base\">AG</span>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code4')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- success --&gt;
    &lt;span class=&quot;flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl&quot;&gt;AG&lt;/span&gt;

    &lt;!-- primary --&gt;
    &lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl&quot;&gt;AG&lt;/span&gt;

    &lt;!-- info --&gt;
    &lt;span class=&quot;flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg&quot;&gt;AG&lt;/span&gt;

    &lt;!-- danger --&gt;
    &lt;span class=&quot;flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base&quot;&gt;AG&lt;/span&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Group</h5>
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
                <div class=\"flex items-center justify-around mb-5 gap-10 flex-wrap\">
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark\">AG</span>
                    </div>
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code5')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- large --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;

    &lt;!-- small --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Animate Y-axis</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code6')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code6')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- animate y axis --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
        </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Animate X-axis</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code7')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code7')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- animate x axis --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
        </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Tooltip</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code8')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" /></span>
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" /></span>
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-12.jpeg"), "html", null, true);
        echo "\" alt=\"image\" /></span>
                        <span x-tooltip=\"Alan Green\"><span
                                class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark\">AG</span></span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code8')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- tooltip --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Alan Green&quot;&gt;&lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;&lt;/span&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 433
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
        return "elements/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 433,  579 => 432,  554 => 410,  548 => 407,  542 => 404,  498 => 363,  493 => 361,  488 => 359,  445 => 319,  440 => 317,  435 => 315,  384 => 267,  379 => 265,  374 => 263,  365 => 257,  360 => 255,  355 => 253,  263 => 164,  258 => 162,  253 => 160,  248 => 158,  188 => 101,  179 => 95,  170 => 89,  161 => 83,  118 => 43,  113 => 41,  108 => 39,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
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
                <span>Avatar</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 lg:grid-cols-2 gap-6\" x-data=\"form\">
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <img class=\"w-20 h-20 rounded-full overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-14 h-14 rounded-full overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- basic --&gt;
    &lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Indicators</h5>
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <span class=\"w-20 h-20 relative\">
                            <img class=\"w-20 h-20 rounded-full overflow-hidden object-cover\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger\"></span>
                        </span>
                        <span class=\"w-16 h-16 relative\">
                            <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success\"></span>
                        </span>
                        <span class=\"w-14 h-14 relative\">
                            <img class=\"w-14 h-14 rounded-full overflow-hidden object-cover\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary\"></span>
                        </span>
                        <span class=\"w-12 h-12 relative\">
                            <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                            <span
                                class=\"absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info\"></span>
                        </span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- danger --&gt;
    &lt;span class=&quot;w-20 h-20 relative&quot;&gt;
        &lt;img class=&quot;w-20 h-20 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-7 h-7 rounded-full ring-2 ring-white dark:ring-white-dark bg-danger&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- success --&gt;
    &lt;span class=&quot;w-16 h-16 relative&quot;&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-6 h-6 rounded-full ring-2 ring-white dark:ring-white-dark bg-success&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- secondary --&gt;
    &lt;span class=&quot;w-14 h-14 relative&quot;&gt;
        &lt;img class=&quot;w-14 h-14 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-5 h-5 rounded-full ring-2 ring-white dark:ring-white-dark bg-secondary&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;

    &lt;!-- info --&gt;
    &lt;span class=&quot;w-12 h-12 relative&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;absolute ltr:right-0 rtl:left-0 bottom-0 w-4 h-4 rounded-full ring-2 ring-white dark:ring-white-dark bg-info&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Shapes</h5>
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
                    <div class=\"flex items-center justify-center gap-2 flex-wrap\">
                        <img class=\"w-20 h-20 rounded-md overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-14 h-14 rounded-md overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-10 h-10 overflow-hidden object-cover\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code3')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- squre rounded large --&gt;
    &lt;img class=&quot;w-20 h-20 rounded-md overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- circle --&gt;
    &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- squre rounded small --&gt;
    &lt;img class=&quot;w-14 h-14 rounded-md overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

    &lt;!-- squre --&gt;
    &lt;img class=&quot;w-10 h-10 overflow-hidden object-cover&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;

                    </template>
                </div>

                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Initials</h5>
                        <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\" href=\"javascript:;\" @click=\"toggleCode('code4')\"><span class=\"flex items-center\">

                             <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
                      <path
                        d=\"M17 7.82959L18.6965 9.35641C20.239 10.7447 21.0103 11.4389 21.0103 12.3296C21.0103 13.2203 20.239 13.9145 18.6965 15.3028L17 16.8296\"
                        stroke=\"currentColor\"
                        stroke-width=\"1.5\"
                        stroke-linecap=\"round\"
                      />
                      <path opacity=\"0.5\" d=\"M13.9868 5L10.0132 19.8297\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                      <path
                        d=\"M7.00005 7.82959L5.30358 9.35641C3.76102 10.7447 2.98975 11.4389 2.98975 12.3296C2.98975 13.2203 3.76102 13.9145 5.30358 15.3028L7.00005 16.8296\"
                        stroke=\"currentColor\"
                        stroke-width=\"1.5\"
                        stroke-linecap=\"round\"
                      />
                    </svg>
                             Code</span></a>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"flex items-center justify-center gap-2 text-white flex-wrap\">
                            <span class=\"flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl\">AG</span>
                            <span class=\"flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl\">AG</span>
                            <span class=\"flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg\">AG</span>
                            <span class=\"flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base\">AG</span>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code4')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- success --&gt;
    &lt;span class=&quot;flex justify-center items-center w-20 h-20 text-center rounded-full object-cover bg-success text-2xl&quot;&gt;AG&lt;/span&gt;

    &lt;!-- primary --&gt;
    &lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-primary text-xl&quot;&gt;AG&lt;/span&gt;

    &lt;!-- info --&gt;
    &lt;span class=&quot;flex justify-center items-center w-14 h-14 text-center rounded-full object-cover bg-info text-lg&quot;&gt;AG&lt;/span&gt;

    &lt;!-- danger --&gt;
    &lt;span class=&quot;flex justify-center items-center w-10 h-10 text-center rounded-full object-cover bg-danger text-base&quot;&gt;AG&lt;/span&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Group</h5>
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
                <div class=\"flex items-center justify-around mb-5 gap-10 flex-wrap\">
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark\">AG</span>
                    </div>
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code5')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- large --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-16 h-16 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-16 h-16 text-center rounded-full object-cover bg-info text-xl ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;

    &lt;!-- small --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full overflow-hidden object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
    </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Animate Y-axis</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code6')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code6')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- animate y axis --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:hover:translate-y-2&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
        </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Animate X-axis</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code7')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <img class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\"
                            src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" />
                        <span
                            class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2\">AG</span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code7')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- animate x axis --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;
        &lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark relative transition-all duration-300 hover:translate-x-2&quot;&gt;AG&lt;/span&gt;
    &lt;/div&gt;
        </pre>
                </template>
            </div>

            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Tooltip</h5>
                    <a class=\"font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600\"
                        href=\"javascript:;\" @click=\"toggleCode('code8')\"><span class=\"flex items-center\">

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
                    <div class=\"flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white\">
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" /></span>
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" /></span>
                        <span x-tooltip=\"Judy Holmes\"><img
                                class=\"w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark\"
                                src=\"{{ asset('assets/images/profile-12.jpeg') }}\" alt=\"image\" /></span>
                        <span x-tooltip=\"Alan Green\"><span
                                class=\"flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark\">AG</span></span>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code8')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- tooltip --&gt;
    &lt;div class=&quot;flex items-center justify-center -space-x-4 rtl:space-x-reverse text-white&quot;&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Judy Holmes&quot;&gt;&lt;img class=&quot;w-12 h-12 rounded-full object-cover ring-2 ring-white dark:ring-white-dark&quot; src=&quot;&#123;&#123; asset('assets/images/profile-12.jpeg') &#125;&#125;&quot; alt=&quot;image&quot; /&gt;&lt;/span&gt;
        &lt;span x-tooltip=&quot;Alan Green&quot;&gt;&lt;span class=&quot;flex justify-center items-center w-12 h-12 text-center rounded-full object-cover bg-info text-base ring-2 ring-white dark:ring-white-dark&quot;&gt;AG&lt;/span&gt;&lt;/span&gt;
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

{% endblock %}", "elements/avatar.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\elements\\avatar.html.twig");
    }
}
