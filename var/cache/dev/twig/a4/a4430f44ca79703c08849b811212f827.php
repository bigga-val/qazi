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

/* datatables/multi-column.html.twig */
class __TwigTemplate_23931f2b39b62d5a6d7ab93fb498824e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables/multi-column.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datatables/multi-column.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "datatables/multi-column.html.twig", 1);
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
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/simple-datatables.js"), "html", null, true);
        echo "\"></script>

    <div x-data=\"multicolumn\">
        <div class=\"panel\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Multicolumn
            </h5>
            <table id=\"myTable\" class=\"whitespace-nowrap\"></table>
        </div>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"multicolumn\", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#myTable', {
                        data: {
                            headings: ['User', 'Company', 'Age', 'Start Date', 'Email',
                                'Phone No.'
                            ],
                            data: [
                                ['Caroline Jensen', 'POLARAX', 39, '2004-05-28',
                                    'carolinejensen@zidant.com', '+1 (821) 447-3782'
                                ],
                                ['Celeste Grant', 'MANGLO', 32, '1989-11-19',
                                    'celestegrant@polarax.com', '+1 (838) 515-3408'
                                ],
                                ['Tillman Forbes', 'APPLIDECK', 26, '2016-09-05',
                                    'tillmanforbes@manglo.com', '+1 (969) 496-2892'
                                ],
                                ['Daisy Whitley', 'VOLAX', 21, '1987-03-23',
                                    'daisywhitley@applideck.com', '+1 (861) 564-2877'
                                ],
                                ['Weber Bowman', 'ORBAXTER', 26, '1983-02-24',
                                    'weberbowman@volax.com', '+1 (962) 466-3483'
                                ],
                                ['Buckley Townsend', 'OPPORTECH', 40, '2011-05-29',
                                    'buckleytownsend@orbaxter.com', '+1 (884) 595-2643'
                                ],
                                ['Latoya Bradshaw', 'GORGANIC', 24, '2010-11-23',
                                    'latoyabradshaw@opportech.com', '+1 (906) 474-3155'
                                ],
                                ['Kate Lindsay', 'AVIT', 24, '1987-07-02',
                                    'katelindsay@gorganic.com', '+1 (930) 546-2952'
                                ],
                                ['Marva Sandoval', 'QUILCH', 28, '2010-11-02',
                                    'marvasandoval@avit.com', '+1 (927) 566-3600'
                                ],
                                ['Decker Russell', 'MEMORA', 27, '1994-04-21',
                                    'deckerrussell@quilch.com', '+1 (846) 535-3283'
                                ],
                                ['Odom Mills', 'ZORROMOP', 34, '2010-01-24',
                                    'odommills@memora.com', '+1 (995) 525-3402'
                                ],
                                ['Sellers Walters', 'ORBOID', 28, '1975-11-12',
                                    'sellerswalters@zorromop.com', '+1 (830) 430-3157'
                                ],
                                ['Wendi Powers', 'SNORUS', 31, '1979-06-02',
                                    'wendipowers@orboid.com', '+1 (863) 457-2088'
                                ],
                                ['Sophie Horn', 'XTH', 22, '2018-09-20',
                                    'sophiehorn@snorus.com', '+1 (885) 418-3948'
                                ],
                                ['Levine Rodriquez', 'COMTRACT', 27, '1973-02-08',
                                    'levinerodriquez@xth.com', '+1 (999) 565-3239'
                                ],
                                ['Little Hatfield', 'ZIDANT', 33, '2012-01-03',
                                    'littlehatfield@comtract.com', '+1 (812) 488-3011'
                                ],
                                ['Larson Kelly', 'SUREPLEX', 20, '2010-06-14',
                                    'larsonkelly@zidant.com', '+1 (892) 484-2162'
                                ],
                                ['Kendra Molina', 'DANJA', 31, '2002-07-19',
                                    'kendramolina@sureplex.com', '+1 (920) 528-3330'
                                ],
                                ['Ebony Livingston', 'EURON', 33, '1994-10-18',
                                    'ebonylivingston@danja.com', '+1 (970) 591-3039'
                                ],
                                ['Kaufman Rush', 'ILLUMITY', 39, '2011-07-10',
                                    'kaufmanrush@euron.com', '+1 (924) 463-2934'
                                ],
                                ['Frank Hays', 'SYBIXTEX', 31, '2005-06-15',
                                    'frankhays@illumity.com', '+1 (930) 577-2670'
                                ],
                                ['Carmella Mccarty', 'ZEDALIS', 21, '1980-03-06',
                                    'carmellamccarty@sybixtex.com', '+1 (876) 456-3218'
                                ],
                                ['Massey Owen', 'DYNO', 40, '2012-03-01',
                                    'masseyowen@zedalis.com', '+1 (917) 567-3786'
                                ],
                                ['Lottie Lowery', 'MULTIFLEX', 36, '1982-10-10',
                                    'lottielowery@dyno.com', '+1 (912) 539-3498'
                                ],
                                ['Addie Luna', 'PHARMACON', 32, '1988-05-01',
                                    'addieluna@multiflex.com', '+1 (962) 537-2981'
                                ],
                            ]
                        },
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        columns: [{
                                select: 0,
                                render: (data, cell, row) => {
                                    return `<div class=\"flex items-center w-max\"><img class=\"w-9 h-9 rounded-full ltr:mr-2 rtl:ml-2 object-cover\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile-\${row.dataIndex + 1}.jpeg"), "html", null, true);
        echo "\" />\${data}</div>`;
                                },
                                sort: \"asc\"
                            },
                            {
                                select: 3,
                                render: (data, cell, row) => {
                                    return this.formatDate(data);
                                },
                            }
                        ],
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
                    })
                },
                formatDate(date) {
                    if (date) {
                        const dt = new Date(date);
                        const month = dt.getMonth() + 1 < 10 ? '0' + (dt.getMonth() + 1) : dt
                        .getMonth() + 1;
                        const day = dt.getDate() < 10 ? '0' + dt.getDate() : dt.getDate();
                        return day + '/' + month + '/' + dt.getFullYear();
                    }
                    return '';
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
        return "datatables/multi-column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 109,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}

    <script src=\"{{ asset('assets/js/simple-datatables.js') }}\"></script>

    <div x-data=\"multicolumn\">
        <div class=\"panel\">
            <h5 class=\"md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light\">Multicolumn
            </h5>
            <table id=\"myTable\" class=\"whitespace-nowrap\"></table>
        </div>
    </div>

    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data(\"multicolumn\", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#myTable', {
                        data: {
                            headings: ['User', 'Company', 'Age', 'Start Date', 'Email',
                                'Phone No.'
                            ],
                            data: [
                                ['Caroline Jensen', 'POLARAX', 39, '2004-05-28',
                                    'carolinejensen@zidant.com', '+1 (821) 447-3782'
                                ],
                                ['Celeste Grant', 'MANGLO', 32, '1989-11-19',
                                    'celestegrant@polarax.com', '+1 (838) 515-3408'
                                ],
                                ['Tillman Forbes', 'APPLIDECK', 26, '2016-09-05',
                                    'tillmanforbes@manglo.com', '+1 (969) 496-2892'
                                ],
                                ['Daisy Whitley', 'VOLAX', 21, '1987-03-23',
                                    'daisywhitley@applideck.com', '+1 (861) 564-2877'
                                ],
                                ['Weber Bowman', 'ORBAXTER', 26, '1983-02-24',
                                    'weberbowman@volax.com', '+1 (962) 466-3483'
                                ],
                                ['Buckley Townsend', 'OPPORTECH', 40, '2011-05-29',
                                    'buckleytownsend@orbaxter.com', '+1 (884) 595-2643'
                                ],
                                ['Latoya Bradshaw', 'GORGANIC', 24, '2010-11-23',
                                    'latoyabradshaw@opportech.com', '+1 (906) 474-3155'
                                ],
                                ['Kate Lindsay', 'AVIT', 24, '1987-07-02',
                                    'katelindsay@gorganic.com', '+1 (930) 546-2952'
                                ],
                                ['Marva Sandoval', 'QUILCH', 28, '2010-11-02',
                                    'marvasandoval@avit.com', '+1 (927) 566-3600'
                                ],
                                ['Decker Russell', 'MEMORA', 27, '1994-04-21',
                                    'deckerrussell@quilch.com', '+1 (846) 535-3283'
                                ],
                                ['Odom Mills', 'ZORROMOP', 34, '2010-01-24',
                                    'odommills@memora.com', '+1 (995) 525-3402'
                                ],
                                ['Sellers Walters', 'ORBOID', 28, '1975-11-12',
                                    'sellerswalters@zorromop.com', '+1 (830) 430-3157'
                                ],
                                ['Wendi Powers', 'SNORUS', 31, '1979-06-02',
                                    'wendipowers@orboid.com', '+1 (863) 457-2088'
                                ],
                                ['Sophie Horn', 'XTH', 22, '2018-09-20',
                                    'sophiehorn@snorus.com', '+1 (885) 418-3948'
                                ],
                                ['Levine Rodriquez', 'COMTRACT', 27, '1973-02-08',
                                    'levinerodriquez@xth.com', '+1 (999) 565-3239'
                                ],
                                ['Little Hatfield', 'ZIDANT', 33, '2012-01-03',
                                    'littlehatfield@comtract.com', '+1 (812) 488-3011'
                                ],
                                ['Larson Kelly', 'SUREPLEX', 20, '2010-06-14',
                                    'larsonkelly@zidant.com', '+1 (892) 484-2162'
                                ],
                                ['Kendra Molina', 'DANJA', 31, '2002-07-19',
                                    'kendramolina@sureplex.com', '+1 (920) 528-3330'
                                ],
                                ['Ebony Livingston', 'EURON', 33, '1994-10-18',
                                    'ebonylivingston@danja.com', '+1 (970) 591-3039'
                                ],
                                ['Kaufman Rush', 'ILLUMITY', 39, '2011-07-10',
                                    'kaufmanrush@euron.com', '+1 (924) 463-2934'
                                ],
                                ['Frank Hays', 'SYBIXTEX', 31, '2005-06-15',
                                    'frankhays@illumity.com', '+1 (930) 577-2670'
                                ],
                                ['Carmella Mccarty', 'ZEDALIS', 21, '1980-03-06',
                                    'carmellamccarty@sybixtex.com', '+1 (876) 456-3218'
                                ],
                                ['Massey Owen', 'DYNO', 40, '2012-03-01',
                                    'masseyowen@zedalis.com', '+1 (917) 567-3786'
                                ],
                                ['Lottie Lowery', 'MULTIFLEX', 36, '1982-10-10',
                                    'lottielowery@dyno.com', '+1 (912) 539-3498'
                                ],
                                ['Addie Luna', 'PHARMACON', 32, '1988-05-01',
                                    'addieluna@multiflex.com', '+1 (962) 537-2981'
                                ],
                            ]
                        },
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        columns: [{
                                select: 0,
                                render: (data, cell, row) => {
                                    return `<div class=\"flex items-center w-max\"><img class=\"w-9 h-9 rounded-full ltr:mr-2 rtl:ml-2 object-cover\" src=\"{{ asset('assets/images/profile-\${row.dataIndex + 1}.jpeg') }}\" />\${data}</div>`;
                                },
                                sort: \"asc\"
                            },
                            {
                                select: 3,
                                render: (data, cell, row) => {
                                    return this.formatDate(data);
                                },
                            }
                        ],
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
                    })
                },
                formatDate(date) {
                    if (date) {
                        const dt = new Date(date);
                        const month = dt.getMonth() + 1 < 10 ? '0' + (dt.getMonth() + 1) : dt
                        .getMonth() + 1;
                        const day = dt.getDate() < 10 ? '0' + dt.getDate() : dt.getDate();
                        return day + '/' + month + '/' + dt.getFullYear();
                    }
                    return '';
                }
            }));
        });
    </script>


{% endblock %}", "datatables/multi-column.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\datatables\\multi-column.html.twig");
    }
}
