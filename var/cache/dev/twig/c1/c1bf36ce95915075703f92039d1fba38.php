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

/* facture/edit.html.twig */
class __TwigTemplate_a54c152828ff62217f380d5029555ef3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/edit.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "facture/edit.html.twig", 1);
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
        echo "    <h1>Modifier Facture No: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 4, $this->source); })()), "numeroFacture", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <br>
";
        // line 7
        echo "    <div x-data=\"invoiceAdd\">
        <div class=\"flex xl:flex-row flex-col gap-2.5\">
            <div class=\"panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6\">
                <div class=\"flex justify-between flex-wrap px-4\">

                </div>
                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Client</div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Nom client</label>
                                <select id=\"reciever-name\" type=\"text\" name=\"reciever-name\" class=\"form-input flex-1\"
                                        x-model=\"params.to.name\" placeholder=\"Enter Name\" />
                                <option value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 22, $this->source); })()), "client", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 22, $this->source); })()), "client", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo "</option>

                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 25
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                </select>

                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-email\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Email</label>
                                <input id=\"reciever-email\" type=\"email\" name=\"reciever-email\" readOnly
                                       class=\"form-input flex-1\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 33, $this->source); })()), "client", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "\" placeholder=\"Enter Email\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-address\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Addresse</label>
                                <input id=\"reciever-address\" type=\"text\" name=\"reciever-address\" readOnly
                                       class=\"form-input flex-1\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 38, $this->source); })()), "client", [], "any", false, false, false, 38), "adressephysique", [], "any", false, false, false, 38), "html", null, true);
        echo "\" placeholder=\"Enter Address\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-number\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\"> Numero telephone</label>
                                <input id=\"reciever-number\" type=\"text\" name=\"reciever-number\" readOnly
                                       class=\"form-input flex-1\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 43, $this->source); })()), "client", [], "any", false, false, false, 43), "telephone", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
                                       placeholder=\"Enter Phone Number\" />
                            </div>
                        </div>
                        <div class=\"lg:w-1/2 w-full\">
                            <div class=\"text-lg font-semibold\">Details de facture</div>
                            <input type=\"hidden\" id=\"factureID\" name=\"factureID\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                            <div class=\"flex items-center\">
                                <label for=\"inv-type\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Type Facture</label>
                                <select id=\"inv-type\" type=\"text\" name=\"inv-type\" class=\"form-input lg:w-[250px] w-2/3\"
                                        placeholder=\"#8801\" x-model=\"params.invoiceType\" />
                                <option value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "designation", [], "any", false, false, false, 54), "html", null, true);
        echo "</option>
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeFactures"]) || array_key_exists("typeFactures", $context) ? $context["typeFactures"] : (function () { throw new RuntimeError('Variable "typeFactures" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 56
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "designation", [], "any", false, false, false, 56), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </select>
                            </div>

                            <div class=\"flex items-center mt-4\">
                                <label for=\"invoiceLabel\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Designation</label>
                                <input id=\"invoiceLabel\" type=\"text\" name=\"inv-label\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 63, $this->source); })()), "designation", [], "any", false, false, false, 63), "html", null, true);
        echo "\"
                                       class=\"form-input lg:w-[250px] w-2/3\"
                                />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"startDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date Facture</label>
                                <input id=\"startDate\" type=\"text\" name=\"inv-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 70, $this->source); })()), "dateDebut", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
        echo "\"/>
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"dueDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date d'expiration</label>
                                <input id=\"dueDate\" type=\"text\" name=\"due-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 75, $this->source); })()), "dateFin", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-8\">
                    <div class=\"table-responsive\">
                        <table>
                            <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Quantite</th>
                                <th>Prix Unitaire</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class=\"tbody\">

                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) || array_key_exists("lignes", $context) ? $context["lignes"] : (function () { throw new RuntimeError('Variable "lignes" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 102
            echo "                                <tr>
                                    <td>
                                        <select class=\"form-input input-product\">
                                            <option value=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", [], "any", false, false, false, 105), "designation", [], "any", false, false, false, 105), "html", null, true);
            echo "</option>
                                            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 107
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 107), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "designation", [], "any", false, false, false, 107), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                                        </select>
                                    </td>
                                    <td><input type=\"text\" class=\"form-input input-quantity\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 111), "html", null, true);
            echo "\"></td>
                                    <td><input type=\"text\" class=\"form-input input-price\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "prix", [], "any", false, false, false, 112), "html", null, true);
            echo "\"></td>
                                    <td><span>0</span></td>
                                    <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                            </tbody>
                        </table>

                    </div>
                    <div class=\"flex justify-between sm:flex-row flex-col mt-6 px-4\">
                        <div class=\"sm:mb-0 mb-6 \">
                            <button id=\"add-row\" class=\"btn btn-primary m-2\">Ajouter</button>
                            <button id=\"btnReset\" class=\"btn btn-outline-danger m-2\">Reset</button>
                        </div>
                        <div class=\"sm:w-2/5\">
                            <div class=\"flex items-center justify-between\">
                                <div>Subtotal</div>
                                <div>\$0.00</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Tax(%)</div>
                                <div>0%</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Shipping Rate(\$)</div>
                                <div>\$0.00</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Discount(%)</div>
                                <div>0%</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4 font-semibold\">
                                <div>Total</div>
                                <div>\$0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-8 px-4\">
                    <div>
                        <label for=\"notes\">Notes</label>
                        <textarea id=\"notes\" name=\"notes\" class=\"form-textarea min-h-[130px]\" placeholder=\"Notes....\"
                                  x-model=\"params.notes\"></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <button type=\"button\" id=\"btnEditInvoice\" class=\"btn btn-success w-full gap-2\">

        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
             xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
            <path
                    d=\"M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z\"
                    stroke=\"currentColor\" stroke-width=\"1.5\" />
            <path
                    d=\"M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22\"
                    stroke=\"currentColor\" stroke-width=\"1.5\" />
            <path opacity=\"0.5\" d=\"M7 8H13\" stroke=\"currentColor\" stroke-width=\"1.5\"
                  stroke-linecap=\"round\" />
        </svg>
        Modifier les changements </button>
";
        // line 176
        echo "
";
        // line 178
        echo "


    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data('invoiceAdd', () => ({
                items: [],
                selectedFile: null,
                params: {
                    title: '',
                    invoiceNo: '',
                    to: {
                        name: '',
                        email: '',
                        address: '',
                        phone: ''
                    },

                    invoiceDate: '',
                    dueDate: '',
                    bankInfo: {
                        no: '',
                        name: '',
                        swiftCode: '',
                        country: '',
                        ibanNo: ''
                    },
                    notes: '',
                },
                currencyList: [
                    'USD - US Dollar',
                    'GBP - British Pound',
                    'IDR - Indonesian Rupiah',
                    'INR - Indian Rupee',
                    'BRL - Brazilian Real',
                    'EUR - Germany (Euro)',
                    'TRY - Turkish Lira',
                ],
                selectedCurrency: 'USD - US Dollar',
                tax: null,
                discount: null,
                shippingCharge: null,
                paymentMethod: '',

                init() {
                    //set default data
                    this.items.push({
                        id: 1,
                        title: '',
                        description: '',
                        rate: 0,
                        quantity: 0,
                        amount: 0
                    });
                },

                addItem() {
                    let maxId = 0;
                    if (this.items && this.items.length) {
                        maxId = this.items.reduce((max, character) => (character.id > max ? character
                            .id : max), this.items[0].id);
                    }
                    this.items.push({
                        id: maxId + 1,
                        title: '',
                        description: '',
                        rate: 0,
                        quantity: 0,
                        amount: 0
                    });
                },

                removeItem(item) {
                    this.items = this.items.filter((d) => d.id != item.id);
                }
            }));
        });
    </script>


    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script !src=\"\">
        \$(document).ready(function(e){
            let invType = \$(\"#inv-type\")
            let receiverName = \$(\"#reciever-name\")

            ///On change the client select option value
            receiverName.on(\"change\", function(e){
                if(\$(this).val() != -1){
                    console.log(\$(this).val())
                    \$(\"#reciever-email\").val()
                    \$.ajax({
                        url: '/client/getClient/'+\$(this).val(),
                        method: 'GET',
                        data: {
                        },
                        success: function (response) {
                            console.log(response)
                            // Traitement de la réponse JSON
                            \$(\"#reciever-email\").val(response.clientEmail).prop(\"readOnly\", true)
                            \$(\"#reciever-address\").val(response.clientAdresse).prop(\"readOnly\", true)
                            \$(\"#reciever-number\").val(response.clientTelephone).prop(\"readOnly\", true)
                        },
                        error: function () {
                            alert('Erreur lors de la requête AJAX.');
                            // Autres actions à effectuer en cas d'erreur
                        }
                    })
                }else{
                }
            })

            \$(\"#btnSaveInvoice\").click(function(e) {
                console.log(\"clicled\")
                \$(\".tbody\").find(\"tr\").each(function(e, i){
                    console.log(\$(this).find(\"td\").eq(0).find(\".item-product\").val())
                    console.log(\$(this).find(\"td\").eq(1).find(\".item-quantity\").val())
                    console.log(\$(this).find(\"td\").eq(2).find(\".item-prix\").val())
                })
                let client = \$(\"#reciever-name\").val()
                let invType = \$(\"#inv-type\").val()
                let numberFacture = \$(\"#number\")
                let designation = \$(\"#invoiceLabel\").val()
                let startDate = \$(\"#startDate\").val()
                let endDate = \$(\"#dueDate\").val()
                console.log('debut')
                \$.ajax({
                    url: '/facture/jsonSaveFacture?' +
                        'client=' +\$(\"#reciever-name\").val()+
                        '&invType='+ \$(\"#inv-type\").val()+
                        '&numeroFacture='+ \$(\"#number\").val()+
                        '&designation='+ \$(\"#invoiceLabel\").val()+
                        '&startDate='+ \$(\"#startDate\").val()+
                        '&endDate='+ \$(\"#dueDate\").val()+
                        '&notes'+\$('#notes').val(),
                    method: 'GET',
                    data: {
                    },
                    success: function (response) {
                        console.log(response.factID)
                        console.log(response.etat)
                        if(response.etat){

                            \$(\".tbody\").find(\"tr\").each(function(e, i){
                                let factureID = response.factID
                                let productID = \$(this).find(\"td\").eq(0).find(\".item-product\").val()
                                let quantity = \$(this).find(\"td\").eq(1).find(\".item-quantity\").val()
                                let price = \$(this).find(\"td\").eq(2).find(\".item-prix\").val()
                                if(productID != -1){
                                    console.log(\"produit:\"+productID+\"-quantite:\"+quantity+\"-prix:\"+price)
                                    \$.ajax({
                                        url: '/ligne/facture/jsonSaveLigneFacture?' +
                                            'fatureID=' +factureID+
                                            '&produitID='+ productID+
                                            '&quantity='+ quantity+
                                            '&prix='+ price,
                                        method: 'GET',
                                        data: {
                                        },
                                        success: function (response) {
                                            console.log(\"bien ajoute\")
                                            window.location.href = \"/facture/\"+response.id;
                                        },
                                        error: function () {
                                            alert('Erreur lors de la requête AJAX.');
                                            // Autres actions à effectuer en cas d'erreur
                                        }
                                    })
                                }
                            })
                        }
                    },
                    error: function () {
                        alert('Erreur lors de la requête AJAX.');
                        // Autres actions à effectuer en cas d'erreur
                    }
                })
                console.log('fin')

            })
            let selectElement = \$('select[name^=\"select-]');
            selectElement.on(\"change\", function(e){
                console.log(\"changed\")
                console.log(\$(this).val())
                if(\$(this).val() != -1){
                    let qty = \$(this).parent(\"td\").siblings(\"td\").children(\"item-quantity\")
                    console.log(qty.val())
                    let amount = \$(this).parent(\"td\").siblings(\"td\").children(\"item-prix\")
                    //let qty = \$(this).parent(\"td\").siblings(\"td\").children(\"input[x-model='item.quantity']\")

                }
            })
        })
    </script>
    <script>

        \$(document).ready(function() {
            // Ajouter une ligne
            let counter = 0
            var newRow = '<tr class=\"prod_Line\">'+
                '<td><select class=\"form-input input-product\" name=\"select-'+counter+'\">' +
                '<option value=\"-1\">Choisir un produit</option>'+
                    ";
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 380, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 381
            echo "                '<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 381), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "designation", [], "any", false, false, false, 381), "html", null, true);
            echo "</option>'+
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                '</select></td>'+
                '   <td><input type=\"text\" class=\"form-input input-quantity\"></td>'+
                '   <td><input type=\"text\" class=\"form-input input-price\"></td>'+
                '   <td><span class=\"input-total\">0</span></td>'+
                '   <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>'+
                '</tr>'
            //\$('.tbody').append(newRow);
            \$('#add-row').click(function() {
                counter++
                ";
        // line 393
        echo "                ";
        // line 394
        echo "                ";
        // line 395
        echo "                ";
        // line 396
        echo "                ";
        // line 397
        echo "                ";
        // line 398
        echo "                ";
        // line 399
        echo "                ";
        // line 400
        echo "                ";
        // line 401
        echo "                ";
        // line 402
        echo "                ";
        // line 403
        echo "                ";
        // line 404
        echo "                \$('.tbody').append(newRow);
            });

            // Supprimer une ligne
            \$('table').on('click', '.remove-row', function() {
                counter--
                \$(this).closest('tr').remove();
            });

            //to Reload the entire page and abort changes
            \$(\"#btnReset\").click(function(e){
                if (confirm(\"Êtes-vous sûr de vouloir recommencer les modifications ?\")) {

                } else {
                    // Code à exécuter si l'utilisateur clique sur \"Annuler\"
                    // Par exemple, annuler l'action de suppression
                   // cancelDelete();
                }
            })
            ///to save modifications
            \$(\"#btnEditInvoice\").click(function(e){
                console.log(\"clicked\")
                let invType = \$(\"#inv-type\").val()
                let client = \$(\"#reciever-name\").val()
                let startDate = \$(\"#startDate\")
                let endDate = \$(\"#endDate\")
                \$.ajax({
                    url: '/facture/jsonEditFacture?' +
                        'factureID=' +\$(\"#factureID\").val()+
                        '&client=' +\$(\"#reciever-name\").val()+
                        '&invType='+ \$(\"#inv-type\").val()+
                        '&designation='+ \$(\"#invoiceLabel\").val()+
                        '&startDate='+ \$(\"#startDate\").val()+
                        '&endDate='+ \$(\"#dueDate\").val()+
                        '&notes'+\$('#notes').val(),
                    method: 'GET',
                    data: {
                    },
                    success: function (response) {
                        console.log(response)
                        if(response.etat){
                            console.log(\"suppression des lignes invoices pour No: \"+\$(\"#factureID\").val())
                            //supprimer toutes les lignes pour enregistrer de nouvelles
                            \$.ajax({
                                url: '/ligne/facture/jsonSupprimerLigneFacture?' +
                                    'factureID=' +\$(\"#factureID\").val(),
                                method: 'GET',
                                data: {
                                },
                                success: function (response) {
                                    console.log(response)
                                    console.log(response.etat)
                                    if(response.etat){
                                        //enregistrer les nouvelles lignes de la factures
                                        console.log(\"enregistrement de nouvelles lignes\")
                                        try {
                                            console.log(\$(\".tbody\").find(\"tr\").length)
                                            if(\$(\".tbody\").find(\"tr\").length == 0){
                                                window.location.href = \"/facture/\"+\$(\"#factureID\").val();

                                            }
                                            \$(\".tbody\").find(\"tr\").each(function(e, i){
                                                let factureID = response.factID

                                                let productID = \$(this).find(\"td\").eq(0).find(\".input-product\").val()

                                                let quantity = \$(this).find(\"td\").eq(1).find(\".input-quantity\").val()
                                                let price = \$(this).find(\"td\").eq(2).find(\".input-price\").val()
                                                console.log(\"check product availabilitys\")
                                                if(productID != -1){
                                                    console.log(\"produit:\"+productID+\"-quantite:\"+quantity+\"-prix:\"+price)
                                                    \$.ajax({
                                                        url: '/ligne/facture/jsonSaveLigneFacture?' +
                                                            'fatureID=' +\$(\"#factureID\").val()+
                                                            '&produitID='+ productID+
                                                            '&quantity='+ quantity+
                                                            '&prix='+ price,
                                                        method: 'GET',
                                                        data: {
                                                        },
                                                        success: function (response) {
                                                            console.log(\"bien ajoute\")
                                                            console.log(response)
                                                            window.location.href = \"/facture/\"+\$(\"#factureID\").val();
                                                        },
                                                        error: function () {
                                                            alert('Erreur lors de la requête AJAX.');
                                                            // Autres actions à effectuer en cas d'erreur
                                                        }
                                                    })
                                                }else{
                                                    console.log(\"Aucune ligne trouvee\")
                                                    window.location.href = \"/facture/\"+\$(\"#factureID\").val();

                                                }
                                            })
                                        }catch (e){
                                            console.log(e)
                                        }
                                    }
                                },
                                error: function () {
                                    alert('Erreur lors de la requête AJAX.');
                                    // Autres actions à effectuer en cas d'erreur
                                }
                            })
                        }

                    },
                    error: function () {
                        alert('Erreur lors de la requête AJAX.');
                        // Autres actions à effectuer en cas d'erreur
                    }
                })

            })
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 404,  587 => 403,  585 => 402,  583 => 401,  581 => 400,  579 => 399,  577 => 398,  575 => 397,  573 => 396,  571 => 395,  569 => 394,  567 => 393,  556 => 383,  545 => 381,  541 => 380,  416 => 258,  334 => 178,  331 => 176,  271 => 117,  260 => 112,  256 => 111,  252 => 109,  241 => 107,  237 => 106,  231 => 105,  226 => 102,  222 => 94,  200 => 75,  192 => 70,  182 => 63,  175 => 58,  164 => 56,  160 => 55,  154 => 54,  146 => 49,  137 => 43,  129 => 38,  121 => 33,  113 => 27,  102 => 25,  98 => 24,  91 => 22,  74 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}
    <h1>Modifier Facture No: {{ facture.numeroFacture }}</h1>
    <br>
{#    {{ include('facture/_form.html.twig', {'button_label': 'Update'}) }}#}
    <div x-data=\"invoiceAdd\">
        <div class=\"flex xl:flex-row flex-col gap-2.5\">
            <div class=\"panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6\">
                <div class=\"flex justify-between flex-wrap px-4\">

                </div>
                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Client</div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Nom client</label>
                                <select id=\"reciever-name\" type=\"text\" name=\"reciever-name\" class=\"form-input flex-1\"
                                        x-model=\"params.to.name\" placeholder=\"Enter Name\" />
                                <option value=\"{{ facture.client.id }}\">{{ facture.client.nom }}</option>

                                {% for client in clients %}
                                    <option value=\"{{ client.id }}\">{{ client.nom }}</option>
                                {% endfor %}
                                </select>

                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-email\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Email</label>
                                <input id=\"reciever-email\" type=\"email\" name=\"reciever-email\" readOnly
                                       class=\"form-input flex-1\" value=\"{{ facture.client.email }}\" placeholder=\"Enter Email\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-address\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Addresse</label>
                                <input id=\"reciever-address\" type=\"text\" name=\"reciever-address\" readOnly
                                       class=\"form-input flex-1\" value=\"{{ facture.client.adressephysique }}\" placeholder=\"Enter Address\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-number\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\"> Numero telephone</label>
                                <input id=\"reciever-number\" type=\"text\" name=\"reciever-number\" readOnly
                                       class=\"form-input flex-1\" value=\"{{ facture.client.telephone }}\"
                                       placeholder=\"Enter Phone Number\" />
                            </div>
                        </div>
                        <div class=\"lg:w-1/2 w-full\">
                            <div class=\"text-lg font-semibold\">Details de facture</div>
                            <input type=\"hidden\" id=\"factureID\" name=\"factureID\" value=\"{{ facture.id }}\">
                            <div class=\"flex items-center\">
                                <label for=\"inv-type\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Type Facture</label>
                                <select id=\"inv-type\" type=\"text\" name=\"inv-type\" class=\"form-input lg:w-[250px] w-2/3\"
                                        placeholder=\"#8801\" x-model=\"params.invoiceType\" />
                                <option value=\"{{ facture.type.id }}\">{{ facture.type.designation }}</option>
                                {% for type in typeFactures %}
                                    <option value=\"{{ type.id }}\">{{ type.designation }}</option>
                                {% endfor %}
                                </select>
                            </div>

                            <div class=\"flex items-center mt-4\">
                                <label for=\"invoiceLabel\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Designation</label>
                                <input id=\"invoiceLabel\" type=\"text\" name=\"inv-label\" value=\"{{ facture.designation }}\"
                                       class=\"form-input lg:w-[250px] w-2/3\"
                                />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"startDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date Facture</label>
                                <input id=\"startDate\" type=\"text\" name=\"inv-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       value=\"{{ facture.dateDebut |date('d-m-Y') }}\"/>
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"dueDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date d'expiration</label>
                                <input id=\"dueDate\" type=\"text\" name=\"due-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       value=\"{{ facture.dateFin | date('d-m-Y') }}\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-8\">
                    <div class=\"table-responsive\">
                        <table>
                            <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Quantite</th>
                                <th>Prix Unitaire</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class=\"tbody\">

                            {% for ligne in lignes %}
{#                                <tr>#}
{#                                    <td>{{ ligne.produit.designation }}</td>#}
{#                                    <td>{{ ligne.quantite }}</td>#}
{#                                    <td>{{ ligne.prix }}</td>#}
{#                                    <td>{{ ligne.prix * ligne.quantite }}</td>#}
{#                                    #}
{#                                </tr>#}
                                <tr>
                                    <td>
                                        <select class=\"form-input input-product\">
                                            <option value=\"{{ ligne.produit.id }}\">{{ ligne.produit.designation }}</option>
                                            {% for produit in produits %}
                                                <option value=\"{{ produit.id }}\">{{ produit.designation }}</option>
                                            {% endfor %}
                                        </select>
                                    </td>
                                    <td><input type=\"text\" class=\"form-input input-quantity\" value=\"{{ ligne.quantite }}\"></td>
                                    <td><input type=\"text\" class=\"form-input input-price\" value=\"{{ ligne.prix }}\"></td>
                                    <td><span>0</span></td>
                                    <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                    </div>
                    <div class=\"flex justify-between sm:flex-row flex-col mt-6 px-4\">
                        <div class=\"sm:mb-0 mb-6 \">
                            <button id=\"add-row\" class=\"btn btn-primary m-2\">Ajouter</button>
                            <button id=\"btnReset\" class=\"btn btn-outline-danger m-2\">Reset</button>
                        </div>
                        <div class=\"sm:w-2/5\">
                            <div class=\"flex items-center justify-between\">
                                <div>Subtotal</div>
                                <div>\$0.00</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Tax(%)</div>
                                <div>0%</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Shipping Rate(\$)</div>
                                <div>\$0.00</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4\">
                                <div>Discount(%)</div>
                                <div>0%</div>
                            </div>
                            <div class=\"flex items-center justify-between mt-4 font-semibold\">
                                <div>Total</div>
                                <div>\$0.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"mt-8 px-4\">
                    <div>
                        <label for=\"notes\">Notes</label>
                        <textarea id=\"notes\" name=\"notes\" class=\"form-textarea min-h-[130px]\" placeholder=\"Notes....\"
                                  x-model=\"params.notes\"></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <button type=\"button\" id=\"btnEditInvoice\" class=\"btn btn-success w-full gap-2\">

        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\"
             xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ltr:mr-2 rtl:ml-2\">
            <path
                    d=\"M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z\"
                    stroke=\"currentColor\" stroke-width=\"1.5\" />
            <path
                    d=\"M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22\"
                    stroke=\"currentColor\" stroke-width=\"1.5\" />
            <path opacity=\"0.5\" d=\"M7 8H13\" stroke=\"currentColor\" stroke-width=\"1.5\"
                  stroke-linecap=\"round\" />
        </svg>
        Modifier les changements </button>
{#    <a href=\"{{ path('app_facture_index') }}\">back to list</a>#}

{#    {{ include('facture/_delete_form.html.twig') }}#}



    <script>
        document.addEventListener(\"alpine:init\", () => {
            Alpine.data('invoiceAdd', () => ({
                items: [],
                selectedFile: null,
                params: {
                    title: '',
                    invoiceNo: '',
                    to: {
                        name: '',
                        email: '',
                        address: '',
                        phone: ''
                    },

                    invoiceDate: '',
                    dueDate: '',
                    bankInfo: {
                        no: '',
                        name: '',
                        swiftCode: '',
                        country: '',
                        ibanNo: ''
                    },
                    notes: '',
                },
                currencyList: [
                    'USD - US Dollar',
                    'GBP - British Pound',
                    'IDR - Indonesian Rupiah',
                    'INR - Indian Rupee',
                    'BRL - Brazilian Real',
                    'EUR - Germany (Euro)',
                    'TRY - Turkish Lira',
                ],
                selectedCurrency: 'USD - US Dollar',
                tax: null,
                discount: null,
                shippingCharge: null,
                paymentMethod: '',

                init() {
                    //set default data
                    this.items.push({
                        id: 1,
                        title: '',
                        description: '',
                        rate: 0,
                        quantity: 0,
                        amount: 0
                    });
                },

                addItem() {
                    let maxId = 0;
                    if (this.items && this.items.length) {
                        maxId = this.items.reduce((max, character) => (character.id > max ? character
                            .id : max), this.items[0].id);
                    }
                    this.items.push({
                        id: maxId + 1,
                        title: '',
                        description: '',
                        rate: 0,
                        quantity: 0,
                        amount: 0
                    });
                },

                removeItem(item) {
                    this.items = this.items.filter((d) => d.id != item.id);
                }
            }));
        });
    </script>


    <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
    <script !src=\"\">
        \$(document).ready(function(e){
            let invType = \$(\"#inv-type\")
            let receiverName = \$(\"#reciever-name\")

            ///On change the client select option value
            receiverName.on(\"change\", function(e){
                if(\$(this).val() != -1){
                    console.log(\$(this).val())
                    \$(\"#reciever-email\").val()
                    \$.ajax({
                        url: '/client/getClient/'+\$(this).val(),
                        method: 'GET',
                        data: {
                        },
                        success: function (response) {
                            console.log(response)
                            // Traitement de la réponse JSON
                            \$(\"#reciever-email\").val(response.clientEmail).prop(\"readOnly\", true)
                            \$(\"#reciever-address\").val(response.clientAdresse).prop(\"readOnly\", true)
                            \$(\"#reciever-number\").val(response.clientTelephone).prop(\"readOnly\", true)
                        },
                        error: function () {
                            alert('Erreur lors de la requête AJAX.');
                            // Autres actions à effectuer en cas d'erreur
                        }
                    })
                }else{
                }
            })

            \$(\"#btnSaveInvoice\").click(function(e) {
                console.log(\"clicled\")
                \$(\".tbody\").find(\"tr\").each(function(e, i){
                    console.log(\$(this).find(\"td\").eq(0).find(\".item-product\").val())
                    console.log(\$(this).find(\"td\").eq(1).find(\".item-quantity\").val())
                    console.log(\$(this).find(\"td\").eq(2).find(\".item-prix\").val())
                })
                let client = \$(\"#reciever-name\").val()
                let invType = \$(\"#inv-type\").val()
                let numberFacture = \$(\"#number\")
                let designation = \$(\"#invoiceLabel\").val()
                let startDate = \$(\"#startDate\").val()
                let endDate = \$(\"#dueDate\").val()
                console.log('debut')
                \$.ajax({
                    url: '/facture/jsonSaveFacture?' +
                        'client=' +\$(\"#reciever-name\").val()+
                        '&invType='+ \$(\"#inv-type\").val()+
                        '&numeroFacture='+ \$(\"#number\").val()+
                        '&designation='+ \$(\"#invoiceLabel\").val()+
                        '&startDate='+ \$(\"#startDate\").val()+
                        '&endDate='+ \$(\"#dueDate\").val()+
                        '&notes'+\$('#notes').val(),
                    method: 'GET',
                    data: {
                    },
                    success: function (response) {
                        console.log(response.factID)
                        console.log(response.etat)
                        if(response.etat){

                            \$(\".tbody\").find(\"tr\").each(function(e, i){
                                let factureID = response.factID
                                let productID = \$(this).find(\"td\").eq(0).find(\".item-product\").val()
                                let quantity = \$(this).find(\"td\").eq(1).find(\".item-quantity\").val()
                                let price = \$(this).find(\"td\").eq(2).find(\".item-prix\").val()
                                if(productID != -1){
                                    console.log(\"produit:\"+productID+\"-quantite:\"+quantity+\"-prix:\"+price)
                                    \$.ajax({
                                        url: '/ligne/facture/jsonSaveLigneFacture?' +
                                            'fatureID=' +factureID+
                                            '&produitID='+ productID+
                                            '&quantity='+ quantity+
                                            '&prix='+ price,
                                        method: 'GET',
                                        data: {
                                        },
                                        success: function (response) {
                                            console.log(\"bien ajoute\")
                                            window.location.href = \"/facture/\"+response.id;
                                        },
                                        error: function () {
                                            alert('Erreur lors de la requête AJAX.');
                                            // Autres actions à effectuer en cas d'erreur
                                        }
                                    })
                                }
                            })
                        }
                    },
                    error: function () {
                        alert('Erreur lors de la requête AJAX.');
                        // Autres actions à effectuer en cas d'erreur
                    }
                })
                console.log('fin')

            })
            let selectElement = \$('select[name^=\"select-]');
            selectElement.on(\"change\", function(e){
                console.log(\"changed\")
                console.log(\$(this).val())
                if(\$(this).val() != -1){
                    let qty = \$(this).parent(\"td\").siblings(\"td\").children(\"item-quantity\")
                    console.log(qty.val())
                    let amount = \$(this).parent(\"td\").siblings(\"td\").children(\"item-prix\")
                    //let qty = \$(this).parent(\"td\").siblings(\"td\").children(\"input[x-model='item.quantity']\")

                }
            })
        })
    </script>
    <script>

        \$(document).ready(function() {
            // Ajouter une ligne
            let counter = 0
            var newRow = '<tr class=\"prod_Line\">'+
                '<td><select class=\"form-input input-product\" name=\"select-'+counter+'\">' +
                '<option value=\"-1\">Choisir un produit</option>'+
                    {% for produit in produits %}
                '<option value=\"{{ produit.id }}\">{{ produit.designation }}</option>'+
                    {% endfor %}
                '</select></td>'+
                '   <td><input type=\"text\" class=\"form-input input-quantity\"></td>'+
                '   <td><input type=\"text\" class=\"form-input input-price\"></td>'+
                '   <td><span class=\"input-total\">0</span></td>'+
                '   <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>'+
                '</tr>'
            //\$('.tbody').append(newRow);
            \$('#add-row').click(function() {
                counter++
                {#newRow = '<tr>'+#}
                {#    '<td><select class=\"form-input item-product\" name=\"select-'+counter+'\">' +#}
                {#    '<option value=\"-1\">Choisir un produit</option>'+#}
                {#        {% for produit in produits %}#}
                {#    '<option value=\"{{ produit.id }}\">{{ produit.designation }}</option>'+#}
                {#        {% endfor %}#}
                {#    '</select></td>'+#}
                {#    '   <td><input type=\"text\" class=\"form-input item-quantity\"></td>'+#}
                {#    '   <td><input type=\"text\" class=\"form-input item-prix\"></td>'+#}
                {#    '   <td><span class=\"item-total\">0</span></td>'+#}
                {#    '   <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>'+#}
                {#    '</tr>'#}
                \$('.tbody').append(newRow);
            });

            // Supprimer une ligne
            \$('table').on('click', '.remove-row', function() {
                counter--
                \$(this).closest('tr').remove();
            });

            //to Reload the entire page and abort changes
            \$(\"#btnReset\").click(function(e){
                if (confirm(\"Êtes-vous sûr de vouloir recommencer les modifications ?\")) {

                } else {
                    // Code à exécuter si l'utilisateur clique sur \"Annuler\"
                    // Par exemple, annuler l'action de suppression
                   // cancelDelete();
                }
            })
            ///to save modifications
            \$(\"#btnEditInvoice\").click(function(e){
                console.log(\"clicked\")
                let invType = \$(\"#inv-type\").val()
                let client = \$(\"#reciever-name\").val()
                let startDate = \$(\"#startDate\")
                let endDate = \$(\"#endDate\")
                \$.ajax({
                    url: '/facture/jsonEditFacture?' +
                        'factureID=' +\$(\"#factureID\").val()+
                        '&client=' +\$(\"#reciever-name\").val()+
                        '&invType='+ \$(\"#inv-type\").val()+
                        '&designation='+ \$(\"#invoiceLabel\").val()+
                        '&startDate='+ \$(\"#startDate\").val()+
                        '&endDate='+ \$(\"#dueDate\").val()+
                        '&notes'+\$('#notes').val(),
                    method: 'GET',
                    data: {
                    },
                    success: function (response) {
                        console.log(response)
                        if(response.etat){
                            console.log(\"suppression des lignes invoices pour No: \"+\$(\"#factureID\").val())
                            //supprimer toutes les lignes pour enregistrer de nouvelles
                            \$.ajax({
                                url: '/ligne/facture/jsonSupprimerLigneFacture?' +
                                    'factureID=' +\$(\"#factureID\").val(),
                                method: 'GET',
                                data: {
                                },
                                success: function (response) {
                                    console.log(response)
                                    console.log(response.etat)
                                    if(response.etat){
                                        //enregistrer les nouvelles lignes de la factures
                                        console.log(\"enregistrement de nouvelles lignes\")
                                        try {
                                            console.log(\$(\".tbody\").find(\"tr\").length)
                                            if(\$(\".tbody\").find(\"tr\").length == 0){
                                                window.location.href = \"/facture/\"+\$(\"#factureID\").val();

                                            }
                                            \$(\".tbody\").find(\"tr\").each(function(e, i){
                                                let factureID = response.factID

                                                let productID = \$(this).find(\"td\").eq(0).find(\".input-product\").val()

                                                let quantity = \$(this).find(\"td\").eq(1).find(\".input-quantity\").val()
                                                let price = \$(this).find(\"td\").eq(2).find(\".input-price\").val()
                                                console.log(\"check product availabilitys\")
                                                if(productID != -1){
                                                    console.log(\"produit:\"+productID+\"-quantite:\"+quantity+\"-prix:\"+price)
                                                    \$.ajax({
                                                        url: '/ligne/facture/jsonSaveLigneFacture?' +
                                                            'fatureID=' +\$(\"#factureID\").val()+
                                                            '&produitID='+ productID+
                                                            '&quantity='+ quantity+
                                                            '&prix='+ price,
                                                        method: 'GET',
                                                        data: {
                                                        },
                                                        success: function (response) {
                                                            console.log(\"bien ajoute\")
                                                            console.log(response)
                                                            window.location.href = \"/facture/\"+\$(\"#factureID\").val();
                                                        },
                                                        error: function () {
                                                            alert('Erreur lors de la requête AJAX.');
                                                            // Autres actions à effectuer en cas d'erreur
                                                        }
                                                    })
                                                }else{
                                                    console.log(\"Aucune ligne trouvee\")
                                                    window.location.href = \"/facture/\"+\$(\"#factureID\").val();

                                                }
                                            })
                                        }catch (e){
                                            console.log(e)
                                        }
                                    }
                                },
                                error: function () {
                                    alert('Erreur lors de la requête AJAX.');
                                    // Autres actions à effectuer en cas d'erreur
                                }
                            })
                        }

                    },
                    error: function () {
                        alert('Erreur lors de la requête AJAX.');
                        // Autres actions à effectuer en cas d'erreur
                    }
                })

            })
        });
    </script>
{% endblock %}
", "facture/edit.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\facture\\edit.html.twig");
    }
}
