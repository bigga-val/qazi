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

/* components/common/sidebar.html.twig */
class __TwigTemplate_a659f5a6a5ea4b07f7e60d3c08a15611 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/common/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/common/sidebar.html.twig"));

        // line 1
        echo "<div :class=\"{ 'dark text-white-dark': \$store.app.semidark }\">
    <nav x-data=\"sidebar\"
        class=\"sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300\">
        <div class=\"bg-white dark:bg-[#0e1726] h-full\">
            <div class=\"flex justify-between items-center px-4 py-3\">
                <a href=\"/\" class=\"main-logo flex items-center shrink-0\">
                    <img class=\"w-8 ml-[5px] flex-none\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/qazi.svg"), "html", null, true);
        echo "\"
                        alt=\"image\" />
                    <span
                        class=\"text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light\">QAZI</span>
                </a>
                <a href=\"javascript:;\"
                    class=\"collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180\"
                    @click=\"\$store.app.toggleSidebar()\">
                    <svg class=\"w-5 h-5 m-auto\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\"
                        xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                            stroke-linejoin=\"round\" />
                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\" stroke=\"currentColor\"
                            stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                    </svg>
                </a>
            </div>
            <ul class=\"perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0\"
                x-data=\"{ activeDropdown: null }\">
";
        // line 30
        echo "
";
        // line 40
        echo "
";
        // line 45
        echo "
";
        // line 68
        echo "
";
        // line 71
        echo "
";
        // line 78
        echo "                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Client' }\"
                            @click=\"activeDropdown === 'client' ? activeDropdown = null : activeDropdown = 'client'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Client</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'client' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'client'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\">Liste</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        echo "\">Nouveau Client</a>
                        </li>
";
        // line 119
        echo "                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Produit' }\"
                            @click=\"activeDropdown === 'produit' ? activeDropdown = null : activeDropdown = 'produit'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Produit</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'produit' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'produit'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        echo "\">Liste</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        echo "\">Nouveau Produit</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        echo "\">Factures</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        echo "\">Nouvelle Facture</a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Service' }\"
                            @click=\"activeDropdown === 'service' ? activeDropdown = null : activeDropdown = 'service'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Service</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'service' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'service'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        echo "\">Liste</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_new");
        echo "\">Nouveau Service</a>
                        </li>

                        <li>
                            <a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index_service");
        echo "\">Factures</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new_service");
        echo "\">Nouvelle facture</a>
                        </li>

                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\" :class=\"{ 'active': activeDropdown === 'user' }\"
                            @click=\"activeDropdown === 'user' ? activeDropdown = null : activeDropdown = 'user'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\"
                                 fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <circle opacity=\"0.5\" cx=\"15\" cy=\"6\" r=\"3\"
                                        fill=\"currentColor\" />
                                <ellipse opacity=\"0.5\" cx=\"16\" cy=\"17\" rx=\"5\" ry=\"3\"
                                         fill=\"currentColor\" />
                                <circle cx=\"9.00098\" cy=\"6\" r=\"4\" fill=\"currentColor\" />
                                <ellipse cx=\"9.00098\" cy=\"17.001\" rx=\"7\" ry=\"4\"
                                         fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Users</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'user' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'user'\" x-collapse class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Liste des utilisateurs</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 241
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Nouvel utilisateur</a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\" :class=\"{ 'active': activeDropdown === 'facture' }\"
                            @click=\"activeDropdown === 'facture' ? activeDropdown = null : activeDropdown = 'facture'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Facture</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'facture' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'facture'\" x-collapse class=\"sub-menu text-gray-500\">
";
        // line 276
        echo "                        <li>
                            <a href=\"";
        // line 277
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_new");
        echo "\">Nouvelle Facture</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener(\"alpine:init\", () => {
        Alpine.data(\"sidebar\", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href=\"' + window.location
                    .pathname + '\"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/common/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 277,  317 => 276,  282 => 241,  276 => 238,  239 => 204,  233 => 201,  226 => 197,  220 => 194,  183 => 160,  177 => 157,  171 => 154,  165 => 151,  131 => 119,  126 => 111,  120 => 108,  88 => 78,  85 => 71,  82 => 68,  79 => 45,  76 => 40,  73 => 30,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div :class=\"{ 'dark text-white-dark': \$store.app.semidark }\">
    <nav x-data=\"sidebar\"
        class=\"sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300\">
        <div class=\"bg-white dark:bg-[#0e1726] h-full\">
            <div class=\"flex justify-between items-center px-4 py-3\">
                <a href=\"/\" class=\"main-logo flex items-center shrink-0\">
                    <img class=\"w-8 ml-[5px] flex-none\" src=\"{{ asset('assets/images/qazi.svg') }}\"
                        alt=\"image\" />
                    <span
                        class=\"text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light\">QAZI</span>
                </a>
                <a href=\"javascript:;\"
                    class=\"collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180\"
                    @click=\"\$store.app.toggleSidebar()\">
                    <svg class=\"w-5 h-5 m-auto\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\"
                        xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\"
                            stroke-linejoin=\"round\" />
                        <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\" stroke=\"currentColor\"
                            stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                    </svg>
                </a>
            </div>
            <ul class=\"perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0\"
                x-data=\"{ activeDropdown: null }\">
{#                <li class=\"menu nav-item\">#}
{#                    <button type=\"button\" class=\"nav-link group\" :class=\"{ 'active': activeDropdown === 'dashboard' }\"#}
{#                        @click=\"activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'\">#}
{#                        <div class=\"flex items-center\">#}

{#                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\"#}
{#                                fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">#}
{#                                <path opacity=\"0.5\"#}
{#                                    d=\"M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z\"#}
{#                                    fill=\"currentColor\" />#}
{#                                <path#}
{#                                    d=\"M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z\"#}
{#                                    fill=\"currentColor\" />#}
{#                            </svg>#}

{#                            <span#}
{#                                class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Dashboard</span>#}
{#                        </div>#}
{#                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'dashboard' }\">#}

{#                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"#}
{#                                xmlns=\"http://www.w3.org/2000/svg\">#}
{#                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
{#                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" />#}
{#                            </svg>#}
{#                        </div>#}
{#                    </button>#}
{#                    <ul x-cloak x-show=\"activeDropdown === 'dashboard'\" x-collapse class=\"sub-menu text-gray-500\">#}
{#                        <li>#}
{#                            <a href=\"/\">Sales</a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"/analytics\">Analytics</a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"/finance\">Finance</a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"/crypto\">Crypto</a>#}
{#                        </li>#}
{#                    </ul>#}
{#                </li>#}

{#                <h2#}
{#                    class=\"py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1\">#}

{#                    <svg class=\"w-4 h-5 flex-none hidden\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"1.5\"#}
{#                        fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">#}
{#                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>#}
{#                    </svg>#}
{#                    <span>Apps</span>#}
{#                </h2>#}
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Client' }\"
                            @click=\"activeDropdown === 'client' ? activeDropdown = null : activeDropdown = 'client'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Client</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'client' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'client'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"{{ path('app_client_index') }}\">Liste</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_client_new') }}\">Nouveau Client</a>
                        </li>
{#                        <li>#}
{#                            <a href=\"/apps/invoice/add\">Add</a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"/apps/invoice/edit\">Edit</a>#}
{#                        </li>#}
                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Produit' }\"
                            @click=\"activeDropdown === 'produit' ? activeDropdown = null : activeDropdown = 'produit'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Produit</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'produit' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'produit'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"{{ path('app_produit_index') }}\">Liste</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_produit_new') }}\">Nouveau Produit</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_facture_index') }}\">Factures</a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"app_facture_new\") }}\">Nouvelle Facture</a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\"
                            :class=\"{ 'active': activeDropdown === 'Service' }\"
                            @click=\"activeDropdown === 'service' ? activeDropdown = null : activeDropdown = 'service'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Service</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'service' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'service'\" x-collapse
                        class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"{{ path('app_service_index') }}\">Liste</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_service_new') }}\">Nouveau Service</a>
                        </li>

                        <li>
                            <a href=\"{{ path('app_facture_index_service') }}\">Factures</a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"app_facture_new_service\") }}\">Nouvelle facture</a>
                        </li>

                    </ul>
                </li>
                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\" :class=\"{ 'active': activeDropdown === 'user' }\"
                            @click=\"activeDropdown === 'user' ? activeDropdown = null : activeDropdown = 'user'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\"
                                 fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <circle opacity=\"0.5\" cx=\"15\" cy=\"6\" r=\"3\"
                                        fill=\"currentColor\" />
                                <ellipse opacity=\"0.5\" cx=\"16\" cy=\"17\" rx=\"5\" ry=\"3\"
                                         fill=\"currentColor\" />
                                <circle cx=\"9.00098\" cy=\"6\" r=\"4\" fill=\"currentColor\" />
                                <ellipse cx=\"9.00098\" cy=\"17.001\" rx=\"7\" ry=\"4\"
                                         fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Users</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'user' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'user'\" x-collapse class=\"sub-menu text-gray-500\">
                        <li>
                            <a href=\"{{ path(\"app_user_index\") }}\">Liste des utilisateurs</a>
                        </li>
                        <li>
                            <a href=\"{{ path(\"app_user_new\") }}\">Nouvel utilisateur</a>
                        </li>
                    </ul>
                </li>

                <li class=\"menu nav-item\">
                    <button type=\"button\" class=\"nav-link group\" :class=\"{ 'active': activeDropdown === 'facture' }\"
                            @click=\"activeDropdown === 'facture' ? activeDropdown = null : activeDropdown = 'facture'\">
                        <div class=\"flex items-center\">

                            <svg class=\"group-hover:!text-primary\" width=\"20\" height=\"20\"
                                 viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path opacity=\"0.5\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z\"
                                      fill=\"currentColor\" />
                                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                      d=\"M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z\"
                                      fill=\"currentColor\" />
                            </svg>
                            <span
                                    class=\"ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark\">Facture</span>
                        </div>
                        <div class=\"rtl:rotate-180\" :class=\"{ '!rotate-90': activeDropdown === 'facture' }\">

                            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\"
                                      stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show=\"activeDropdown === 'facture'\" x-collapse class=\"sub-menu text-gray-500\">
{#                        <li>#}
{#                            <a href=\"{{ path(\"app_facture_index\") }}\">Liste des factures</a>#}
{#                        </li>#}
                        <li>
                            <a href=\"{{ path(\"app_facture_new\") }}\">Nouvelle Facture</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener(\"alpine:init\", () => {
        Alpine.data(\"sidebar\", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href=\"' + window.location
                    .pathname + '\"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
", "components/common/sidebar.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\components\\common\\sidebar.html.twig");
    }
}
