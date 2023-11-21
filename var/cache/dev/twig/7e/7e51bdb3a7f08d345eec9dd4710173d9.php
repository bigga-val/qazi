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

/* ui-components/countdown.html.twig */
class __TwigTemplate_e148f67af8b3c747b0dd10d0ce15421a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-components/countdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-components/countdown.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "ui-components/countdown.html.twig", 1);
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
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Components</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Countdown</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"countdown\">
            <!-- Simple Countdown -->
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Simple Countdown</h5>
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
                <div class=\"mb-5 grid grid-cols-4 justify-items-center gap-3\" x-init=\"setTimerDemo1\">
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.days\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Days
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.hours\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Hours
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.minutes\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Mins
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.seconds\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Sec
                        </h4>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- simple countdown --&gt;
    &lt;div x-data=&quot;countdown&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot; x-init=&quot;setTimerDemo1&quot;&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.days&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.hours&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.minutes&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.seconds&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
    document.addEventListener(&quot;alpine:init&quot;, () =&gt; {
        Alpine.data(&quot;countdown&quot;, () =&gt; ({
            timer1: null,
            demo1: {
                days: null,
                hours: null,
                minutes: null,
                seconds: null,
            },

            setTimerDemo1() {
                let date = new Date();
                date.setDate(date.getDate() + 3);
                let countDownDate = date.getTime();

                timer1 = setInterval(() =&gt; {
                    let now = new Date().getTime();

                    let distance = countDownDate - now;

                    this.demo1.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.demo1.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.demo1.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.demo1.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance &lt; 0) {
                        clearInterval(this.timer1);
                    }
                }, 500);
            },
        });
     });
     &lt;/script&gt;
    </pre>
                </template>
            </div>
            <!-- Circle Countdown -->
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Circle Countdown</h5>
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
                <div class=\"mb-5 grid grid-cols-4 justify-items-center gap-3\" x-init=\"setTimerDemo2\">
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.days\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Days
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.hours\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Hours
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.minutes\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Mins
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.seconds\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Sec
                        </h4>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- circle countdown --&gt;
    &lt;div x-data=&quot;countdown&quot;&gt;
        &lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot; x-init=&quot;setTimerDemo2&quot;&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.days&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.hours&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mt-5 md:mt-0&quot;&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.minutes&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mt-5 md:mt-0&quot;&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.seconds&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
    document.addEventListener(&quot;alpine:init&quot;, () =&gt; {
        Alpine.data(&quot;countdown&quot;, () =&gt; ({
            timer2: null,
            demo2: {
                days: null,
                hours: null,
                minutes: null,
                seconds: null,
            },

            setTimerDemo2() {
                let date = new Date();
                date.setFullYear(date.getFullYear() + 1);
                let countDownDate = date.getTime();

                this.timer2 = setInterval(() =&gt; {
                    let now = new Date().getTime();

                    let distance = countDownDate - now;

                    this.demo2.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.demo2.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.demo2.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.demo2.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance &lt; 0) {
                        clearInterval(this.timer2);
                    }
                }, 500);
            },
        });
     });
     &lt;/script&gt;
    </pre>
                </template>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/highlight.min.js"), "html", null, true);
        echo "\"></script>
    <!-- end hightlight js -->



    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"countdown\", () => ({
                timer1: null,
                demo1: {
                    days: null,
                    hours: null,
                    minutes: null,
                    seconds: null,
                },
                timer2: null,
                demo2: {
                    days: null,
                    hours: null,
                    minutes: null,
                    seconds: null,
                },

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
                },

                setTimerDemo1() {
                    let date = new Date();
                    date.setDate(date.getDate() + 3);
                    let countDownDate = date.getTime();

                    timer1 = setInterval(() => {
                        let now = new Date().getTime();

                        let distance = countDownDate - now;

                        this.demo1.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        this.demo1.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (
                            1000 * 60 * 60));
                        this.demo1.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        this.demo1.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            clearInterval(this.timer1);
                        }
                    }, 500);
                },

                setTimerDemo2() {
                    let date = new Date();
                    date.setFullYear(date.getFullYear() + 1);
                    let countDownDate = date.getTime();

                    this.timer2 = setInterval(() => {
                        let now = new Date().getTime();

                        let distance = countDownDate - now;

                        this.demo2.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        this.demo2.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (
                            1000 * 60 * 60));
                        this.demo2.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        this.demo2.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            clearInterval(this.timer2);
                        }
                    }, 500);
                },
            }));
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ui-components/countdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 275,  340 => 274,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}


    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Components</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>Countdown</span>
            </li>
        </ul>
        <div class=\"pt-5 grid grid-cols-1 xl:grid-cols-2 gap-6\" x-data=\"countdown\">
            <!-- Simple Countdown -->
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Simple Countdown</h5>
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
                <div class=\"mb-5 grid grid-cols-4 justify-items-center gap-3\" x-init=\"setTimerDemo1\">
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.days\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Days
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.hours\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Hours
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.minutes\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Mins
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo1.seconds\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Sec
                        </h4>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code1')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- simple countdown --&gt;
    &lt;div x-data=&quot;countdown&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot; x-init=&quot;setTimerDemo1&quot;&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.days&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.hours&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.minutes&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo1.seconds&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
    document.addEventListener(&quot;alpine:init&quot;, () =&gt; {
        Alpine.data(&quot;countdown&quot;, () =&gt; ({
            timer1: null,
            demo1: {
                days: null,
                hours: null,
                minutes: null,
                seconds: null,
            },

            setTimerDemo1() {
                let date = new Date();
                date.setDate(date.getDate() + 3);
                let countDownDate = date.getTime();

                timer1 = setInterval(() =&gt; {
                    let now = new Date().getTime();

                    let distance = countDownDate - now;

                    this.demo1.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.demo1.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.demo1.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.demo1.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance &lt; 0) {
                        clearInterval(this.timer1);
                    }
                }, 500);
            },
        });
     });
     &lt;/script&gt;
    </pre>
                </template>
            </div>
            <!-- Circle Countdown -->
            <div class=\"panel\">
                <div class=\"flex items-center justify-between mb-5\">
                    <h5 class=\"font-semibold text-lg dark:text-white-light\">Circle Countdown</h5>
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
                <div class=\"mb-5 grid grid-cols-4 justify-items-center gap-3\" x-init=\"setTimerDemo2\">
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.days\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Days
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.hours\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Hours
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.minutes\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Mins
                        </h4>
                    </div>
                    <div>
                        <div
                            class=\"w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col\">
                            <h1 class=\"text-primary sm:text-3xl text-xl text-center\" x-text=\"demo2.seconds\"></h1>
                        </div>
                        <h4 class=\"text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold\">Sec
                        </h4>
                    </div>
                </div>
                <template x-if=\"codeArr.includes('code2')\">
                    <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- circle countdown --&gt;
    &lt;div x-data=&quot;countdown&quot;&gt;
        &lt;div class=&quot;mb-5 grid grid-cols-4 justify-items-center gap-3&quot; x-init=&quot;setTimerDemo2&quot;&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.days&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Days&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.hours&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Hours&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mt-5 md:mt-0&quot;&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.minutes&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Mins&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class=&quot;mt-5 md:mt-0&quot;&gt;
                &lt;div class=&quot;w-16 h-16 sm:w-[100px] sm:h-[100px] shadow-[1px_2px_12px_0_rgba(31,45,61,0.10)] rounded-full border border-[#e0e6ed] dark:border-[#1b2e4b] flex justify-center flex-col&quot;&gt;
                    &lt;h1 class=&quot;text-primary sm:text-3xl text-xl text-center&quot; x-text=&quot;demo2.seconds&quot;&gt;&lt;/h1&gt;
                &lt;/div&gt;
                &lt;h4 class=&quot;text-[#3b3f5c] text-[15px] mt-4 text-center dark:text-white-dark font-semibold&quot;&gt;Sec&lt;/h4&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
    document.addEventListener(&quot;alpine:init&quot;, () =&gt; {
        Alpine.data(&quot;countdown&quot;, () =&gt; ({
            timer2: null,
            demo2: {
                days: null,
                hours: null,
                minutes: null,
                seconds: null,
            },

            setTimerDemo2() {
                let date = new Date();
                date.setFullYear(date.getFullYear() + 1);
                let countDownDate = date.getTime();

                this.timer2 = setInterval(() =&gt; {
                    let now = new Date().getTime();

                    let distance = countDownDate - now;

                    this.demo2.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.demo2.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.demo2.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.demo2.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance &lt; 0) {
                        clearInterval(this.timer2);
                    }
                }, 500);
            },
        });
     });
     &lt;/script&gt;
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
            Alpine.data(\"countdown\", () => ({
                timer1: null,
                demo1: {
                    days: null,
                    hours: null,
                    minutes: null,
                    seconds: null,
                },
                timer2: null,
                demo2: {
                    days: null,
                    hours: null,
                    minutes: null,
                    seconds: null,
                },

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
                },

                setTimerDemo1() {
                    let date = new Date();
                    date.setDate(date.getDate() + 3);
                    let countDownDate = date.getTime();

                    timer1 = setInterval(() => {
                        let now = new Date().getTime();

                        let distance = countDownDate - now;

                        this.demo1.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        this.demo1.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (
                            1000 * 60 * 60));
                        this.demo1.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        this.demo1.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            clearInterval(this.timer1);
                        }
                    }, 500);
                },

                setTimerDemo2() {
                    let date = new Date();
                    date.setFullYear(date.getFullYear() + 1);
                    let countDownDate = date.getTime();

                    this.timer2 = setInterval(() => {
                        let now = new Date().getTime();

                        let distance = countDownDate - now;

                        this.demo2.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        this.demo2.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (
                            1000 * 60 * 60));
                        this.demo2.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                            60));
                        this.demo2.seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        if (distance < 0) {
                            clearInterval(this.timer2);
                        }
                    }, 500);
                },
            }));
        });
    </script>

{% endblock %}", "ui-components/countdown.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\ui-components\\countdown.html.twig");
    }
}
