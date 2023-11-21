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

/* forms/file-upload.html.twig */
class __TwigTemplate_cb8d1d9e29c9f4b4c930207023b2f16b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/file-upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/file-upload.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "forms/file-upload.html.twig", 1);
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


    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-upload-with-preview.min.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/file-upload-with-preview.iife.js"), "html", null, true);
        echo "\"></script>

    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Forms</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>File Upload</span>
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
                <span class=\"ltr:mr-3 rtl:ml-3\">Documentation: </span><a
                    href=\"https://www.npmjs.com/package/file-upload-with-preview\" target=\"_blank\"
                    class=\"block hover:underline\">https://www.npmjs.com/package/file-upload-with-preview</a>
            </div>

            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                <!-- Single File -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Single File Upload</h5>
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
                        <div class=\"custom-file-container\" data-upload-id=\"myFirstImage\"></div>
                    </div>
                    <template x-if=\"codeArr.includes('code1')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- single file --&gt;
    &lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;myFirstImage&quot;&gt;&lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
            images: {
            baseImage: \"&#123;&#123; asset('assets/images/file-preview.svg') &#125;&#125;\",
                backgroundImage: '',
            },
        });
    &lt;/script&gt;
    </pre>
                    </template>
                </div>
                <!-- Multiple File -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Multiple File</h5>
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
                        <div class=\"custom-file-container\" data-upload-id=\"mySecondImage\"></div>
                    </div>
                    <template x-if=\"codeArr.includes('code2')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- multiple file --&gt;
    &lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;mySecondImage&quot;&gt;&lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
            baseImage: \"&#123;&#123; asset('assets/images/file-preview.svg') &#125;&#125;\",
                backgroundImage: '',
            },
            multiple: true,
        });
    &lt;/script&gt;
    </pre>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/highlight.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/highlight.min.js"), "html", null, true);
        echo "\"></script>
    <!-- end hightlight js -->

    <script>
        // single image upload
        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
            images: {
                baseImage: \"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/file-preview.svg"), "html", null, true);
        echo "\",
                backgroundImage: '',
            },
        });

        // multiple image upload
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
                baseImage: \"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/file-preview.svg"), "html", null, true);
        echo "\",
                backgroundImage: '',
            },
            multiple: true,
        });
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
        return "forms/file-upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 147,  217 => 139,  207 => 132,  203 => 131,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}



    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/file-upload-with-preview.min.css') }}\" />
    <script src=\"{{ asset('assets/js/file-upload-with-preview.iife.js') }}\"></script>

    <div>
        <ul class=\"flex space-x-2 rtl:space-x-reverse\">
            <li>
                <a href=\"javascript:;\" class=\"text-primary hover:underline\">Forms</a>
            </li>
            <li class=\"before:content-['/'] ltr:before:mr-1 rtl:before:ml-1\">
                <span>File Upload</span>
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
                <span class=\"ltr:mr-3 rtl:ml-3\">Documentation: </span><a
                    href=\"https://www.npmjs.com/package/file-upload-with-preview\" target=\"_blank\"
                    class=\"block hover:underline\">https://www.npmjs.com/package/file-upload-with-preview</a>
            </div>

            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
                <!-- Single File -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Single File Upload</h5>
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
                        <div class=\"custom-file-container\" data-upload-id=\"myFirstImage\"></div>
                    </div>
                    <template x-if=\"codeArr.includes('code1')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- single file --&gt;
    &lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;myFirstImage&quot;&gt;&lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
            images: {
            baseImage: \"&#123;&#123; asset('assets/images/file-preview.svg') &#125;&#125;\",
                backgroundImage: '',
            },
        });
    &lt;/script&gt;
    </pre>
                    </template>
                </div>
                <!-- Multiple File -->
                <div class=\"panel\">
                    <div class=\"flex items-center justify-between mb-5\">
                        <h5 class=\"font-semibold text-lg dark:text-white-light\">Multiple File</h5>
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
                        <div class=\"custom-file-container\" data-upload-id=\"mySecondImage\"></div>
                    </div>
                    <template x-if=\"codeArr.includes('code2')\">
                        <pre class=\"code overflow-auto !bg-[#191e3a] p-4 rounded-md text-white\">
    &lt;!-- multiple file --&gt;
    &lt;div class=&quot;custom-file-container&quot; data-upload-id=&quot;mySecondImage&quot;&gt;&lt;/div&gt;

    &lt;!-- script --&gt;
    &lt;script&gt;
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
            baseImage: \"&#123;&#123; asset('assets/images/file-preview.svg') &#125;&#125;\",
                backgroundImage: '',
            },
            multiple: true,
        });
    &lt;/script&gt;
    </pre>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/highlight.min.css') }}\">
    <script src=\"{{ asset('assets/js/highlight.min.js') }}\"></script>
    <!-- end hightlight js -->

    <script>
        // single image upload
        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
            images: {
                baseImage: \"{{ asset('assets/images/file-preview.svg') }}\",
                backgroundImage: '',
            },
        });

        // multiple image upload
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
                baseImage: \"{{ asset('assets/images/file-preview.svg') }}\",
                backgroundImage: '',
            },
            multiple: true,
        });
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

{% endblock %}", "forms/file-upload.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\forms\\file-upload.html.twig");
    }
}
