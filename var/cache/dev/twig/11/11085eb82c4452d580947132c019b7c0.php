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

/* ui-components/counter.html.twig */
class __TwigTemplate_0717eb7206383262420ce56d922065ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-components/counter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-components/counter.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "ui-components/counter.html.twig", 1);
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


    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/countUp.min.js"), "html", null, true);
        echo "\"></script>

    </script>
    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Components</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Counter</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\" x-data=\"form\">
            <div class=\"panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap\">
                <div class=\"ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3\">

                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-3.5 h-3.5\">
                        <path
                            d=\"M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z\"
                            stroke=\"currentColor\" stroke-width=\"1.5\" />
                        <path opacity=\"0.5\"
                            d=\"M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19\"
                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                    </svg>
                </div>
                <span class=\"ltr:mr-3 rtl:ml-3\">Documentation: </span><a href=\"https://www.npmjs.com/package/countup.js\"
                    target=\"_blank\" class=\"block hover:underline\">https://www.npmjs.com/package/countup.js</a>
            </div>

            <div class=\"grid xl:grid-cols-2 grid-cols-1 gap-6\">
                <!-- Simple Counter -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Simple Counter</h5>
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
                    <div class=\"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto\">
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter1\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                HOURS</h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter2\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                TICKETS</h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter3\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                CUSTOMERS</h4>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code1')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
&lt;!-- hours --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter1&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;HOURS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- tickets --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter2&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;TICKETS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- customers --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter3&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;CUSTOMERS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script&gt;
// hours
const counter1 = new countUp.CountUp(&quot;counter1&quot;, 710, {
    startVal: 0,
    duration: 7,
});
counter1.start();

// tickets
const counter2 = new countUp.CountUp(&quot;counter2&quot;, 915, {
    startVal: 0,
    duration: 7,
});
counter2.start();

// customers
const counter3 = new countUp.CountUp(&quot;counter3&quot;, 580, {
    startVal: 0,
    duration: 7,
});
counter3.start();
&lt;/script&gt;
</pre>
                    </template>
                </div>
                <!-- With Icon -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icon</h5>
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
                    <div class=\"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto\">
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter4\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <circle cx=\"9\" cy=\"6\" r=\"4\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M12.5 4.3411C13.0375 3.53275 13.9565 3 15 3C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9C13.9565 9 13.0375 8.46725 12.5 7.6589\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <ellipse cx=\"9\" cy=\"17\" rx=\"7\" ry=\"4\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                                Clients
                            </h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter5\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <path opacity=\"0.5\"
                                        d=\"M6.28571 19C3.91878 19 2 17.1038 2 14.7647C2 12.4256 3.91878 10.5294 6.28571 10.5294C6.56983 10.5294 6.8475 10.5567 7.11616 10.6089M14.381 8.02721C14.9767 7.81911 15.6178 7.70588 16.2857 7.70588C16.9404 7.70588 17.5693 7.81468 18.1551 8.01498M7.11616 10.6089C6.88706 9.9978 6.7619 9.33687 6.7619 8.64706C6.7619 5.52827 9.32028 3 12.4762 3C15.4159 3 17.8371 5.19371 18.1551 8.01498M7.11616 10.6089C7.68059 10.7184 8.20528 10.9374 8.66667 11.2426M18.1551 8.01498C20.393 8.78024 22 10.8811 22 13.3529C22 16.0599 20.0726 18.3221 17.5 18.8722\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path d=\"M12 22V16M12 22L14 20M12 22L10 20\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                                Downloads
                            </h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter6\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <path opacity=\"0.5\"
                                        d=\"M11.1459 7.02251C11.5259 6.34084 11.7159 6 12 6C12.2841 6 12.4741 6.34084 12.8541 7.02251L12.9524 7.19887C13.0603 7.39258 13.1143 7.48944 13.1985 7.55334C13.2827 7.61725 13.3875 7.64097 13.5972 7.68841L13.7881 7.73161C14.526 7.89857 14.895 7.98205 14.9828 8.26432C15.0706 8.54659 14.819 8.84072 14.316 9.42898L14.1858 9.58117C14.0429 9.74833 13.9714 9.83191 13.9392 9.93531C13.9071 10.0387 13.9179 10.1502 13.9395 10.3733L13.9592 10.5763C14.0352 11.3612 14.0733 11.7536 13.8435 11.9281C13.6136 12.1025 13.2682 11.9435 12.5773 11.6254L12.3986 11.5431C12.2022 11.4527 12.1041 11.4075 12 11.4075C11.8959 11.4075 11.7978 11.4527 11.6014 11.5431L11.4227 11.6254C10.7318 11.9435 10.3864 12.1025 10.1565 11.9281C9.92674 11.7536 9.96476 11.3612 10.0408 10.5763L10.0605 10.3733C10.0821 10.1502 10.0929 10.0387 10.0608 9.93531C10.0286 9.83191 9.95713 9.74833 9.81418 9.58117L9.68403 9.42898C9.18097 8.84072 8.92945 8.54659 9.01723 8.26432C9.10501 7.98205 9.47396 7.89857 10.2119 7.73161L10.4028 7.68841C10.6125 7.64097 10.7173 7.61725 10.8015 7.55334C10.8857 7.48944 10.9397 7.39258 11.0476 7.19887L11.1459 7.02251Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path
                                        d=\"M19 9C19 12.866 15.866 16 12 16C8.13401 16 5 12.866 5 9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M7.35111 15L6.71424 17.323C6.0859 19.6148 5.77173 20.7607 6.19097 21.3881C6.3379 21.6079 6.535 21.7844 6.76372 21.9008C7.41635 22.2331 8.42401 21.7081 10.4393 20.658C11.1099 20.3086 11.4452 20.1339 11.8014 20.0959C11.9335 20.0818 12.0665 20.0818 12.1986 20.0959C12.5548 20.1339 12.8901 20.3086 13.5607 20.658C15.576 21.7081 16.5837 22.2331 17.2363 21.9008C17.465 21.7844 17.6621 21.6079 17.809 21.3881C18.2283 20.7607 17.9141 19.6148 17.2858 17.323L16.6489 15\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                                Awards
                            </h4>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code2')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
&lt;!-- clients --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter4&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Clients
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- downloads --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter5&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Downloads
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- awards --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter6&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Awards
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script&gt;
// clients
const counter4 = new countUp.CountUp(&quot;counter4&quot;, 105, {
    startVal: 0,
    duration: 7,
});
counter4.start();

// download
const counter5 = new countUp.CountUp(&quot;counter5&quot;, 300, {
    startVal: 0,
    duration: 7,
});
counter5.start();

// awards
const counter6 = new countUp.CountUp(&quot;counter6&quot;, 58, {
    startVal: 0,
    duration: 7,
});
counter6.start();
&lt;/script&gt;
</pre>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/highlight.min.js"), "html", null, true);
        echo "\"></script>
    <!-- end hightlight js -->



    <script>
        // hours
        const counter1 = new countUp.CountUp(\"counter1\", 710, {
            startVal: 0,
            duration: 7,
        });
        counter1.start();

        // tickets
        const counter2 = new countUp.CountUp(\"counter2\", 915, {
            startVal: 0,
            duration: 7,
        });
        counter2.start();

        // customers
        const counter3 = new countUp.CountUp(\"counter3\", 580, {
            startVal: 0,
            duration: 7,
        });
        counter3.start();

        // clients
        const counter4 = new countUp.CountUp(\"counter4\", 105, {
            startVal: 0,
            duration: 7,
        });
        counter4.start();

        // download
        const counter5 = new countUp.CountUp(\"counter5\", 300, {
            startVal: 0,
            duration: 7,
        });
        counter5.start();

        // awards
        const counter6 = new countUp.CountUp(\"counter6\", 58, {
            startVal: 0,
            duration: 7,
        });
        counter6.start();

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
        return "ui-components/counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 303,  371 => 302,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}



    <script src=\"{{ asset('/assets/js/countUp.min.js') }}\"></script>

    </script>
    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Components</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Counter</span>
            </li>
        </ul>
        <div class=\"pt-5 space-y-8\" x-data=\"form\">
            <div class=\"panel p-3 flex items-center text-primary overflow-x-auto whitespace-nowrap\">
                <div class=\"ring-2 ring-primary/30 rounded-full bg-primary text-white p-1.5 ltr:mr-3 rtl:ml-3\">

                    <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                        xmlns=\"http://www.w3.org/2000/svg\" class=\"w-3.5 h-3.5\">
                        <path
                            d=\"M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z\"
                            stroke=\"currentColor\" stroke-width=\"1.5\" />
                        <path opacity=\"0.5\"
                            d=\"M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19\"
                            stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                    </svg>
                </div>
                <span class=\"ltr:mr-3 rtl:ml-3\">Documentation: </span><a href=\"https://www.npmjs.com/package/countup.js\"
                    target=\"_blank\" class=\"block hover:underline\">https://www.npmjs.com/package/countup.js</a>
            </div>

            <div class=\"grid xl:grid-cols-2 grid-cols-1 gap-6\">
                <!-- Simple Counter -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Simple Counter</h5>
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
                    <div class=\"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto\">
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter1\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                HOURS</h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter2\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                TICKETS</h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter3\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">
                                CUSTOMERS</h4>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code1')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
&lt;!-- hours --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter1&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;HOURS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- tickets --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter2&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;TICKETS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- customers --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter3&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;CUSTOMERS&lt;/h4&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script&gt;
// hours
const counter1 = new countUp.CountUp(&quot;counter1&quot;, 710, {
    startVal: 0,
    duration: 7,
});
counter1.start();

// tickets
const counter2 = new countUp.CountUp(&quot;counter2&quot;, 915, {
    startVal: 0,
    duration: 7,
});
counter2.start();

// customers
const counter3 = new countUp.CountUp(&quot;counter3&quot;, 580, {
    startVal: 0,
    duration: 7,
});
counter3.start();
&lt;/script&gt;
</pre>
                    </template>
                </div>
                <!-- With Icon -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">With Icon</h5>
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
                    <div class=\"mb-5 grid grid-cols-3 justify-items-center gap-3 max-w-[900px] mx-auto\">
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter4\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <circle cx=\"9\" cy=\"6\" r=\"4\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M12.5 4.3411C13.0375 3.53275 13.9565 3 15 3C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9C13.9565 9 13.0375 8.46725 12.5 7.6589\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <ellipse cx=\"9\" cy=\"17\" rx=\"7\" ry=\"4\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                                Clients
                            </h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter5\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <path opacity=\"0.5\"
                                        d=\"M6.28571 19C3.91878 19 2 17.1038 2 14.7647C2 12.4256 3.91878 10.5294 6.28571 10.5294C6.56983 10.5294 6.8475 10.5567 7.11616 10.6089M14.381 8.02721C14.9767 7.81911 15.6178 7.70588 16.2857 7.70588C16.9404 7.70588 17.5693 7.81468 18.1551 8.01498M7.11616 10.6089C6.88706 9.9978 6.7619 9.33687 6.7619 8.64706C6.7619 5.52827 9.32028 3 12.4762 3C15.4159 3 17.8371 5.19371 18.1551 8.01498M7.11616 10.6089C7.68059 10.7184 8.20528 10.9374 8.66667 11.2426M18.1551 8.01498C20.393 8.78024 22 10.8811 22 13.3529C22 16.0599 20.0726 18.3221 17.5 18.8722\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                    <path d=\"M12 22V16M12 22L14 20M12 22L10 20\" stroke=\"currentColor\"
                                        stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                </svg>
                                Downloads
                            </h4>
                        </div>
                        <div>
                            <div
                                class=\"w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                                <h1 class=\"text-primary text-xl sm:text-3xl text-center\" id=\"counter6\"></h1>
                            </div>
                            <h4
                                class=\"text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">

                                <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
                                    xmlns=\"http://www.w3.org/2000/svg\"
                                    class=\"w-5 h-5 sm:w-6 sm:h-6 text-primary mx-auto mb-2\">
                                    <path opacity=\"0.5\"
                                        d=\"M11.1459 7.02251C11.5259 6.34084 11.7159 6 12 6C12.2841 6 12.4741 6.34084 12.8541 7.02251L12.9524 7.19887C13.0603 7.39258 13.1143 7.48944 13.1985 7.55334C13.2827 7.61725 13.3875 7.64097 13.5972 7.68841L13.7881 7.73161C14.526 7.89857 14.895 7.98205 14.9828 8.26432C15.0706 8.54659 14.819 8.84072 14.316 9.42898L14.1858 9.58117C14.0429 9.74833 13.9714 9.83191 13.9392 9.93531C13.9071 10.0387 13.9179 10.1502 13.9395 10.3733L13.9592 10.5763C14.0352 11.3612 14.0733 11.7536 13.8435 11.9281C13.6136 12.1025 13.2682 11.9435 12.5773 11.6254L12.3986 11.5431C12.2022 11.4527 12.1041 11.4075 12 11.4075C11.8959 11.4075 11.7978 11.4527 11.6014 11.5431L11.4227 11.6254C10.7318 11.9435 10.3864 12.1025 10.1565 11.9281C9.92674 11.7536 9.96476 11.3612 10.0408 10.5763L10.0605 10.3733C10.0821 10.1502 10.0929 10.0387 10.0608 9.93531C10.0286 9.83191 9.95713 9.74833 9.81418 9.58117L9.68403 9.42898C9.18097 8.84072 8.92945 8.54659 9.01723 8.26432C9.10501 7.98205 9.47396 7.89857 10.2119 7.73161L10.4028 7.68841C10.6125 7.64097 10.7173 7.61725 10.8015 7.55334C10.8857 7.48944 10.9397 7.39258 11.0476 7.19887L11.1459 7.02251Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path
                                        d=\"M19 9C19 12.866 15.866 16 12 16C8.13401 16 5 12.866 5 9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9Z\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" />
                                    <path opacity=\"0.5\"
                                        d=\"M7.35111 15L6.71424 17.323C6.0859 19.6148 5.77173 20.7607 6.19097 21.3881C6.3379 21.6079 6.535 21.7844 6.76372 21.9008C7.41635 22.2331 8.42401 21.7081 10.4393 20.658C11.1099 20.3086 11.4452 20.1339 11.8014 20.0959C11.9335 20.0818 12.0665 20.0818 12.1986 20.0959C12.5548 20.1339 12.8901 20.3086 13.5607 20.658C15.576 21.7081 16.5837 22.2331 17.2363 21.9008C17.465 21.7844 17.6621 21.6079 17.809 21.3881C18.2283 20.7607 17.9141 19.6148 17.2858 17.323L16.6489 15\"
                                        stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" />
                                </svg>
                                Awards
                            </h4>
                        </div>
                    </div>
                    <template x-if=\"codeArr.includes('code2')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
&lt;!-- clients --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter4&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Clients
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- downloads --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter5&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Downloads
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- awards --&gt;
&lt;div&gt;
    &lt;div class=&quot;w-[70px] h-[70px] sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
        &lt;h1 class=&quot;text-primary text-xl sm:text-3xl text-center&quot; id=&quot;counter6&quot;&gt;&lt;/h1&gt;
    &lt;/div&gt;
    &lt;h4 class=&quot;text-[#3b3f5c] text-xs sm:text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
        Awards
    &lt;/h4&gt;
&lt;/div&gt;

&lt;!-- script --&gt;
&lt;script&gt;
// clients
const counter4 = new countUp.CountUp(&quot;counter4&quot;, 105, {
    startVal: 0,
    duration: 7,
});
counter4.start();

// download
const counter5 = new countUp.CountUp(&quot;counter5&quot;, 300, {
    startVal: 0,
    duration: 7,
});
counter5.start();

// awards
const counter6 = new countUp.CountUp(&quot;counter6&quot;, 58, {
    startVal: 0,
    duration: 7,
});
counter6.start();
&lt;/script&gt;
</pre>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/highlight.min.css') }}\">
    <script src=\"{{ asset('/assets/js/highlight.min.js') }}\"></script>
    <!-- end hightlight js -->



    <script>
        // hours
        const counter1 = new countUp.CountUp(\"counter1\", 710, {
            startVal: 0,
            duration: 7,
        });
        counter1.start();

        // tickets
        const counter2 = new countUp.CountUp(\"counter2\", 915, {
            startVal: 0,
            duration: 7,
        });
        counter2.start();

        // customers
        const counter3 = new countUp.CountUp(\"counter3\", 580, {
            startVal: 0,
            duration: 7,
        });
        counter3.start();

        // clients
        const counter4 = new countUp.CountUp(\"counter4\", 105, {
            startVal: 0,
            duration: 7,
        });
        counter4.start();

        // download
        const counter5 = new countUp.CountUp(\"counter5\", 300, {
            startVal: 0,
            duration: 7,
        });
        counter5.start();

        // awards
        const counter6 = new countUp.CountUp(\"counter6\", 58, {
            startVal: 0,
            duration: 7,
        });
        counter6.start();

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

{% endblock %}", "ui-components/counter.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\ui-components\\counter.html.twig");
    }
}
