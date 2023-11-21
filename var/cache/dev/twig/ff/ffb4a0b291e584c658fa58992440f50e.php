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

/* datatables/skin.html.twig */
class __TwigTemplate_d2a1fa55ac88242bbc62817359e5e2f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables/skin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables/skin.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "datatables/skin.html.twig", 1);
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
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/simple-datatables.js"), "html", null, true);
        echo "\"></script>

    <div x-data=\"striped\">
        <div class=\"panel\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Striped
            </h5>
            <table id=\"tableStripe\" class=\"table-striped\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Hover
            </h5>
            <table id=\"tableHover\" class=\"table-hover\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin:
                Bordered</h5>
            <table id=\"tableBorder\" class=\"table-bordered\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Compact
            </h5>
            <table id=\"tableCompact\" class=\"table-compact\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: All
            </h5>
            <table id=\"tableAll\" class=\"table-striped table-hover table-bordered table-compact\"></table>
        </div>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"striped\", () => ({
                init() {
                    const tableOptions = {
                        data: {
                            headings: [\"ID\", \"First Name\", \"Last Name\", \"Email\", \"Phone\"],
                            data: [
                                [1, 'Caroline', 'Jensen', 'carolinejensen@zidant.com',
                                    '+1 (821) 447-3782'
                                ],
                                [2, 'Celeste', 'Grant', 'celestegrant@polarax.com',
                                    '+1 (838) 515-3408'
                                ],
                                [3, 'Tillman', 'Forbes', 'tillmanforbes@manglo.com',
                                    '+1 (969) 496-2892'
                                ],
                                [4, 'Daisy', 'Whitley', 'daisywhitley@applideck.com',
                                    '+1 (861) 564-2877'
                                ],
                                [5, 'Weber', 'Bowman', 'weberbowman@volax.com',
                                    '+1 (962) 466-3483'
                                ],
                                [6, 'Buckley', 'Townsend', 'buckleytownsend@orbaxter.com',
                                    '+1 (884) 595-2643'
                                ],
                                [7, 'Latoya', 'Bradshaw', 'latoyabradshaw@opportech.com',
                                    '+1 (906) 474-3155'
                                ],
                                [8, 'Kate', 'Lindsay', 'katelindsay@gorganic.com',
                                    '+1 (930) 546-2952'
                                ],
                                [9, 'Marva', 'Sandoval', 'marvasandoval@avit.com',
                                    '+1 (927) 566-3600'
                                ],
                                [10, 'Decker', 'Russell', 'deckerrussell@quilch.com',
                                    '+1 (846) 535-3283'
                                ],
                                [11, 'Odom', 'Mills', 'odommills@memora.com',
                                    '+1 (995) 525-3402'
                                ],
                                [12, 'Sellers', 'Walters', 'sellerswalters@zorromop.com',
                                    '+1 (830) 430-3157'
                                ],
                                [13, 'Wendi', 'Powers', 'wendipowers@orboid.com',
                                    '+1 (863) 457-2088'
                                ],
                                [14, 'Sophie', 'Horn', 'sophiehorn@snorus.com',
                                    '+1 (885) 418-3948'
                                ],
                                [15, 'Levine', 'Rodriquez', 'levinerodriquez@xth.com',
                                    '+1 (999) 565-3239'
                                ],
                                [16, 'Little', 'Hatfield', 'littlehatfield@comtract.com',
                                    '+1 (812) 488-3011'
                                ],
                                [17, 'Larson', 'Kelly', 'larsonkelly@zidant.com',
                                    '+1 (892) 484-2162'
                                ],
                                [18, 'Kendra', 'Molina', 'kendramolina@sureplex.com',
                                    '+1 (920) 528-3330'
                                ],
                                [19, 'Ebony', 'Livingston', 'ebonylivingston@danja.com',
                                    '+1 (970) 591-3039'
                                ],
                                [20, 'Kaufman', 'Rush', 'kaufmanrush@euron.com',
                                    '+1 (924) 463-2934'
                                ],
                                [21, 'Frank', 'Hays', 'frankhays@illumity.com',
                                    '+1 (930) 577-2670'
                                ],
                                [22, 'Carmella', 'Mccarty', 'carmellamccarty@sybixtex.com',
                                    '+1 (876) 456-3218'
                                ],
                                [23, 'Massey', 'Owen', 'masseyowen@zedalis.com',
                                    '+1 (917) 567-3786'
                                ],
                                [24, 'Lottie', 'Lowery', 'lottielowery@dyno.com',
                                    '+1 (912) 539-3498'
                                ],
                                [25, 'Addie', 'Luna', 'addieluna@multiflex.com',
                                    '+1 (962) 537-2981'
                                ],
                            ]
                        },
                        sortable: false,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        firstLast: true,
                        firstText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        lastText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        prevText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        nextText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        labels: {
                            perPage: \"{select}\"
                        },
                        layout: {
                            top: \"{search}\",
                            bottom: \"{info}{select}{pager}\",
                        },
                    };

                    const datatable1 = new simpleDatatables.DataTable('#tableStripe', tableOptions);

                    const datatable2 = new simpleDatatables.DataTable('#tableHover', tableOptions);

                    const datatable3 = new simpleDatatables.DataTable('#tableBorder', tableOptions);

                    const datatable4 = new simpleDatatables.DataTable('#tableCompact', tableOptions);

                    const datatable5 = new simpleDatatables.DataTable('#tableAll', tableOptions);
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
        return "datatables/skin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}


    <script src=\"{{ asset('assets/js/simple-datatables.js') }}\"></script>

    <div x-data=\"striped\">
        <div class=\"panel\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Striped
            </h5>
            <table id=\"tableStripe\" class=\"table-striped\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Hover
            </h5>
            <table id=\"tableHover\" class=\"table-hover\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin:
                Bordered</h5>
            <table id=\"tableBorder\" class=\"table-bordered\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: Compact
            </h5>
            <table id=\"tableCompact\" class=\"table-compact\"></table>
        </div>

        <div class=\"panel mt-6\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Skin: All
            </h5>
            <table id=\"tableAll\" class=\"table-striped table-hover table-bordered table-compact\"></table>
        </div>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"striped\", () => ({
                init() {
                    const tableOptions = {
                        data: {
                            headings: [\"ID\", \"First Name\", \"Last Name\", \"Email\", \"Phone\"],
                            data: [
                                [1, 'Caroline', 'Jensen', 'carolinejensen@zidant.com',
                                    '+1 (821) 447-3782'
                                ],
                                [2, 'Celeste', 'Grant', 'celestegrant@polarax.com',
                                    '+1 (838) 515-3408'
                                ],
                                [3, 'Tillman', 'Forbes', 'tillmanforbes@manglo.com',
                                    '+1 (969) 496-2892'
                                ],
                                [4, 'Daisy', 'Whitley', 'daisywhitley@applideck.com',
                                    '+1 (861) 564-2877'
                                ],
                                [5, 'Weber', 'Bowman', 'weberbowman@volax.com',
                                    '+1 (962) 466-3483'
                                ],
                                [6, 'Buckley', 'Townsend', 'buckleytownsend@orbaxter.com',
                                    '+1 (884) 595-2643'
                                ],
                                [7, 'Latoya', 'Bradshaw', 'latoyabradshaw@opportech.com',
                                    '+1 (906) 474-3155'
                                ],
                                [8, 'Kate', 'Lindsay', 'katelindsay@gorganic.com',
                                    '+1 (930) 546-2952'
                                ],
                                [9, 'Marva', 'Sandoval', 'marvasandoval@avit.com',
                                    '+1 (927) 566-3600'
                                ],
                                [10, 'Decker', 'Russell', 'deckerrussell@quilch.com',
                                    '+1 (846) 535-3283'
                                ],
                                [11, 'Odom', 'Mills', 'odommills@memora.com',
                                    '+1 (995) 525-3402'
                                ],
                                [12, 'Sellers', 'Walters', 'sellerswalters@zorromop.com',
                                    '+1 (830) 430-3157'
                                ],
                                [13, 'Wendi', 'Powers', 'wendipowers@orboid.com',
                                    '+1 (863) 457-2088'
                                ],
                                [14, 'Sophie', 'Horn', 'sophiehorn@snorus.com',
                                    '+1 (885) 418-3948'
                                ],
                                [15, 'Levine', 'Rodriquez', 'levinerodriquez@xth.com',
                                    '+1 (999) 565-3239'
                                ],
                                [16, 'Little', 'Hatfield', 'littlehatfield@comtract.com',
                                    '+1 (812) 488-3011'
                                ],
                                [17, 'Larson', 'Kelly', 'larsonkelly@zidant.com',
                                    '+1 (892) 484-2162'
                                ],
                                [18, 'Kendra', 'Molina', 'kendramolina@sureplex.com',
                                    '+1 (920) 528-3330'
                                ],
                                [19, 'Ebony', 'Livingston', 'ebonylivingston@danja.com',
                                    '+1 (970) 591-3039'
                                ],
                                [20, 'Kaufman', 'Rush', 'kaufmanrush@euron.com',
                                    '+1 (924) 463-2934'
                                ],
                                [21, 'Frank', 'Hays', 'frankhays@illumity.com',
                                    '+1 (930) 577-2670'
                                ],
                                [22, 'Carmella', 'Mccarty', 'carmellamccarty@sybixtex.com',
                                    '+1 (876) 456-3218'
                                ],
                                [23, 'Massey', 'Owen', 'masseyowen@zedalis.com',
                                    '+1 (917) 567-3786'
                                ],
                                [24, 'Lottie', 'Lowery', 'lottielowery@dyno.com',
                                    '+1 (912) 539-3498'
                                ],
                                [25, 'Addie', 'Luna', 'addieluna@multiflex.com',
                                    '+1 (962) 537-2981'
                                ],
                            ]
                        },
                        sortable: false,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        firstLast: true,
                        firstText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M13 19L7 12L13 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path opacity=\"0.5\" d=\"M16.9998 19L10.9998 12L16.9998 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        lastText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M11 19L17 12L11 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> <path opacity=\"0.5\" d=\"M6.99976 19L12.9998 12L6.99976 5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        prevText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M15 5L9 12L15 19\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        nextText: '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4.5 h-4.5 rtl:rotate-180\"> <path d=\"M9 5L15 12L9 19\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/> </svg>',
                        labels: {
                            perPage: \"{select}\"
                        },
                        layout: {
                            top: \"{search}\",
                            bottom: \"{info}{select}{pager}\",
                        },
                    };

                    const datatable1 = new simpleDatatables.DataTable('#tableStripe', tableOptions);

                    const datatable2 = new simpleDatatables.DataTable('#tableHover', tableOptions);

                    const datatable3 = new simpleDatatables.DataTable('#tableBorder', tableOptions);

                    const datatable4 = new simpleDatatables.DataTable('#tableCompact', tableOptions);

                    const datatable5 = new simpleDatatables.DataTable('#tableAll', tableOptions);
                }
            }));
        });
    </script>


{% endblock %}", "datatables/skin.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\datatables\\skin.html.twig");
    }
}
