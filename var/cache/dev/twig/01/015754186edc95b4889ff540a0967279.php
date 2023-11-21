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

/* components/layout/default.html.twig */
class __TwigTemplate_e6edeb93c72e329dbb242bcdd45b0989 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/layout/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/layout/default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>VRISTO - Multipurpose Tailwind Dashboard Template</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel=\"icon\" type=\"image/svg\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/favicon.svg"), "html", null, true);
        echo "\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap\"
        rel=\"stylesheet\" />

    <link rel='stylesheet' type='text/css' media='screen'
        href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\" />
    <link rel='stylesheet' type='text/css' media='screen' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
    <link defer rel='stylesheet' type='text/css' media='screen' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" />

    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tippy-bundle.umd.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    
</head>

<body x-data=\"main\" class=\"antialiased relative font-nunito text-sm font-normal overflow-x-hidden\"
    :class=\"[\$store.app.sidebar ? 'toggle-sidebar' : '', \$store.app.theme, \$store.app.menu, \$store.app.layout, \$store.app
        .rtlClass
    ]\">

    <!-- sidebar menu overlay -->
    <div x-cloak class=\"fixed inset-0 bg-[black]/60 z-50 lg:hidden\" :class=\"{ 'hidden': !\$store.app.sidebar }\"
        @click=\"\$store.app.toggleSidebar()\"></div>

    <!-- screen loader -->
    <div
        class=\"screen_loader fixed inset-0 bg-[#fafafa] dark:bg-[#060818] z-[60] grid place-content-center animate__animated\">
        <svg width=\"64\" height=\"64\" viewBox=\"0 0 135 135\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#4361ee\">
            <path
                d=\"M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z\">
                <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"0 67 67\" to=\"-360 67 67\" dur=\"2.5s\"
                    repeatCount=\"indefinite\" />
            </path>
            <path
                d=\"M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z\">
                <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"0 67 67\" to=\"360 67 67\" dur=\"8s\"
                    repeatCount=\"indefinite\" />
            </path>
        </svg>
    </div>

    <div class=\"fixed bottom-6 ltr:right-6 rtl:left-6 z-50\" x-data=\"scrollToTop\">
        <template x-if=\"showTopButton\">
            <button type=\"button\"
                class=\"btn btn-outline-primary rounded-full p-2 animate-pulse bg-[#fafafa] dark:bg-[#060818] dark:hover:bg-primary\"
                @click=\"goToTop\">
                <svg width=\"24\" height=\"24\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" fill=\"none\"
                    xmlns=\"http://www.w3.org/2000/svg\">
                    <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z\"
                        fill=\"currentColor\" />
                    <path
                        d=\"M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z\"
                        fill=\"currentColor\" />
                </svg>
            </button>
        </template>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"scrollToTop\", () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));
        });
    </script>

   ";
        // line 99
        $this->loadTemplate("components/common/theme-customiser.html.twig", "components/layout/default.html.twig", 99)->display($context);
        // line 100
        echo "    

    <div class=\"main-container text-black dark:text-white-dark min-h-screen\" :class=\"[\$store.app.navbar]\">

        ";
        // line 104
        $this->loadTemplate("components/common/sidebar.html.twig", "components/layout/default.html.twig", 104)->display($context);
        // line 105
        echo "
        <div class=\"main-content\">
            ";
        // line 107
        $this->loadTemplate("components/common/header.html.twig", "components/layout/default.html.twig", 107)->display($context);
        // line 108
        echo "
            <div class=\"p-6 animate__animated\" :class=\"[\$store.app.animation]\">
            
                ";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "
                ";
        // line 113
        $this->loadTemplate("components/common/footer.html.twig", "components/layout/default.html.twig", 113)->display($context);
        // line 114
        echo "            </div>
        </div>
    </div>

    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-collaspe.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-persist.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-focus.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                console.log(\"clicked\")
                var value = \$(this).val().toLowerCase();
                console.log(value)
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 111
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "components/layout/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 111,  226 => 124,  222 => 123,  218 => 122,  214 => 121,  210 => 120,  206 => 119,  202 => 118,  196 => 114,  194 => 113,  191 => 112,  189 => 111,  184 => 108,  182 => 107,  178 => 105,  176 => 104,  170 => 100,  168 => 99,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  74 => 20,  70 => 19,  66 => 18,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <title>VRISTO - Multipurpose Tailwind Dashboard Template</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel=\"icon\" type=\"image/svg\" href=\"{{ asset('/favicon.svg') }}\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap\"
        rel=\"stylesheet\" />

    <link rel='stylesheet' type='text/css' media='screen'
        href=\"{{ asset('assets/css/perfect-scrollbar.min.css') }}\" />
    <link rel='stylesheet' type='text/css' media='screen' href=\"{{ asset('assets/css/style.css') }}\" />
    <link defer rel='stylesheet' type='text/css' media='screen' href=\"{{ asset('assets/css/animate.css') }}\" />

    <script src=\"{{ asset('assets/js/perfect-scrollbar.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/tippy-bundle.umd.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/sweetalert.min.js') }}\"></script>
    
</head>

<body x-data=\"main\" class=\"antialiased relative font-nunito text-sm font-normal overflow-x-hidden\"
    :class=\"[\$store.app.sidebar ? 'toggle-sidebar' : '', \$store.app.theme, \$store.app.menu, \$store.app.layout, \$store.app
        .rtlClass
    ]\">

    <!-- sidebar menu overlay -->
    <div x-cloak class=\"fixed inset-0 bg-[black]/60 z-50 lg:hidden\" :class=\"{ 'hidden': !\$store.app.sidebar }\"
        @click=\"\$store.app.toggleSidebar()\"></div>

    <!-- screen loader -->
    <div
        class=\"screen_loader fixed inset-0 bg-[#fafafa] dark:bg-[#060818] z-[60] grid place-content-center animate__animated\">
        <svg width=\"64\" height=\"64\" viewBox=\"0 0 135 135\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#4361ee\">
            <path
                d=\"M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z\">
                <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"0 67 67\" to=\"-360 67 67\" dur=\"2.5s\"
                    repeatCount=\"indefinite\" />
            </path>
            <path
                d=\"M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z\">
                <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"0 67 67\" to=\"360 67 67\" dur=\"8s\"
                    repeatCount=\"indefinite\" />
            </path>
        </svg>
    </div>

    <div class=\"fixed bottom-6 ltr:right-6 rtl:left-6 z-50\" x-data=\"scrollToTop\">
        <template x-if=\"showTopButton\">
            <button type=\"button\"
                class=\"btn btn-outline-primary rounded-full p-2 animate-pulse bg-[#fafafa] dark:bg-[#060818] dark:hover:bg-primary\"
                @click=\"goToTop\">
                <svg width=\"24\" height=\"24\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" fill=\"none\"
                    xmlns=\"http://www.w3.org/2000/svg\">
                    <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                        d=\"M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z\"
                        fill=\"currentColor\" />
                    <path
                        d=\"M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z\"
                        fill=\"currentColor\" />
                </svg>
            </button>
        </template>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"scrollToTop\", () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));
        });
    </script>

   {% include 'components/common/theme-customiser.html.twig' %}
    

    <div class=\"main-container text-black dark:text-white-dark min-h-screen\" :class=\"[\$store.app.navbar]\">

        {% include 'components/common/sidebar.html.twig' %}

        <div class=\"main-content\">
            {% include 'components/common/header.html.twig' %}

            <div class=\"p-6 animate__animated\" :class=\"[\$store.app.animation]\">
            
                {% block content %}{% endblock %}

                {% include 'components/common/footer.html.twig' %}
            </div>
        </div>
    </div>

    <script src=\"{{ asset('assets/js/alpine-collaspe.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/alpine-persist.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine-ui.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine-focus.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                console.log(\"clicked\")
                var value = \$(this).val().toLowerCase();
                console.log(value)
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>
", "components/layout/default.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\components\\layout\\default.html.twig");
    }
}
