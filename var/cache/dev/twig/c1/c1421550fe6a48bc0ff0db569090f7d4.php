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

/* components/layout/auth.html.twig */
class __TwigTemplate_cc28ca1a51a9b14160a3cec3b9e17339 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/layout/auth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/layout/auth.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>VRISTO - Multipurpose Tailwind Dashboard Template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/favicon.svg"), "html", null, true);
        echo "\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap\"
            rel=\"stylesheet\">
        <link rel='stylesheet' type='text/css' media='screen'
            href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' type='text/css' media='screen'
            href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link defer rel='stylesheet' type='text/css' media='screen'
            href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tippy-bundle.umd.min.js"), "html", null, true);
        echo "\"></script>
        <script defer src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
</head>


<body x-data=\"main\" class=\"antialiased relative font-nunito text-sm font-normal overflow-x-hidden\"
    :class=\"[\$store.app.sidebar ? 'toggle-sidebar' : '', \$store.app.theme, \$store.app.menu, \$store.app.layout, \$store.app
        .rtlClass
    ]\">

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

    <div class=\"fixed bottom-6 right-6 z-50\" x-data=\"scrollToTop\">
        <template x-if=\"showTopButton\">
            <button type=\"button\" class=\"btn btn-outline-primary rounded-full p-2 animate-pulse\" @click=\"goToTop\">
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

    <div class=\"main-container text-black dark:text-white-dark min-h-screen\">
        ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "    </div>

    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-collaspe.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-persist.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alpine-focus.min.js"), "html", null, true);
        echo "\"></script>


    </body>

    </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 93
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
        return "components/layout/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 93,  188 => 101,  184 => 100,  180 => 99,  176 => 98,  172 => 97,  168 => 96,  164 => 94,  162 => 93,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  73 => 19,  68 => 17,  63 => 15,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>VRISTO - Multipurpose Tailwind Dashboard Template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/favicon.svg') }}\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap\"
            rel=\"stylesheet\">
        <link rel='stylesheet' type='text/css' media='screen'
            href=\"{{ asset('assets/css/perfect-scrollbar.min.css') }}\">
        <link rel='stylesheet' type='text/css' media='screen'
            href=\"{{ asset('assets/css/style.css') }}\">
        <link defer rel='stylesheet' type='text/css' media='screen'
            href=\"{{ asset('assets/css/animate.css') }}\">

        <script src=\"{{ asset('assets/js/perfect-scrollbar.min.js') }}\"></script>
        <script defer src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
        <script defer src=\"{{ asset('assets/js/tippy-bundle.umd.min.js') }}\"></script>
        <script defer src=\"{{ asset('assets/js/sweetalert.min.js') }}\"></script>
</head>


<body x-data=\"main\" class=\"antialiased relative font-nunito text-sm font-normal overflow-x-hidden\"
    :class=\"[\$store.app.sidebar ? 'toggle-sidebar' : '', \$store.app.theme, \$store.app.menu, \$store.app.layout, \$store.app
        .rtlClass
    ]\">

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

    <div class=\"fixed bottom-6 right-6 z-50\" x-data=\"scrollToTop\">
        <template x-if=\"showTopButton\">
            <button type=\"button\" class=\"btn btn-outline-primary rounded-full p-2 animate-pulse\" @click=\"goToTop\">
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

    <div class=\"main-container text-black dark:text-white-dark min-h-screen\">
        {% block content %}{% endblock %}
    </div>

    <script src=\"{{ asset('assets/js/alpine-collaspe.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/alpine-persist.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine-ui.min.js') }}\"></script>
    <script defer src=\"{{ asset('assets/js/alpine-focus.min.js') }}\"></script>


    </body>

    </html>
", "components/layout/auth.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\components\\layout\\auth.html.twig");
    }
}
