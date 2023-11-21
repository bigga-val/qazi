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

/* facture/new.html.twig */
class __TwigTemplate_cec8c1b027c14f00ff4a8256e3fd1e7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        $this->parent = $this->loadTemplate("components/layout/default.html.twig", "facture/new.html.twig", 1);
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

    <div x-data=\"invoiceAdd\">
        <div class=\"flex xl:flex-row flex-col gap-2.5\">
            <div class=\"panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6\">

                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Client</div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Name</label>
                                <select id=\"reciever-name\" type=\"text\" name=\"reciever-name\" class=\"form-input flex-1\"
                                       x-model=\"params.to.name\" placeholder=\"Enter Name\" />
                                    <option value=\"-1\">Choisir un client</option>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 21
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                                </select>

                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-email\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Email</label>
                                <input id=\"reciever-email\" type=\"email\" name=\"reciever-email\"
                                       class=\"form-input flex-1\" x-model=\"params.to.email\" placeholder=\"Enter Email\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-address\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Address</label>
                                <input id=\"reciever-address\" type=\"text\" name=\"reciever-address\"
                                       class=\"form-input flex-1\" x-model=\"params.to.address\" placeholder=\"Enter Address\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-number\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Phone Number</label>
                                <input id=\"reciever-number\" type=\"text\" name=\"reciever-number\"
                                       class=\"form-input flex-1\" x-model=\"params.to.phone\"
                                       placeholder=\"Enter Phone Number\" />
                            </div>
                        </div>
                        <div class=\"lg:w-1/2 w-full\">
                            <div class=\"text-lg font-semibold\">Details de Facture</div>
                            <div class=\"flex items-center\">
                                <label for=\"inv-type\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Type Facture</label>
                                <select id=\"inv-type\" type=\"text\" name=\"inv-type\" class=\"form-input lg:w-[250px] w-2/3\"
                                        placeholder=\"#8801\" x-model=\"params.invoiceType\" />
                                <option value=\"-1\">Choisir le type</option>
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeFactures"]) || array_key_exists("typeFactures", $context) ? $context["typeFactures"] : (function () { throw new RuntimeError('Variable "typeFactures" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "designation", [], "any", false, false, false, 51), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                </select>
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"number\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">No Facture</label>
                                <input id=\"number\" type=\"text\" name=\"inv-num\" class=\"form-input lg:w-[250px] w-2/3\"
                                       placeholder=\"#8801\" x-model=\"params.invoiceNo\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"invoiceLabel\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Designation</label>
                                <input id=\"invoiceLabel\" type=\"text\" name=\"inv-label\"
                                       class=\"form-input lg:w-[250px] w-2/3\" placeholder=\"Enter Invoice Label\"
                                       x-model=\"params.title\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"startDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date Facture</label>
                                <input id=\"startDate\" type=\"date\" name=\"inv-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       x-model=\"params.invoiceDate\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"dueDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date d'expiration</label>
                                <input id=\"dueDate\" type=\"date\" name=\"due-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       x-model=\"params.dueDate\" />
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
                                    <th>Quantity</th>
                                    <th>Prix Unitaire</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class=\"tbody\">
";
        // line 108
        echo "                            </tbody>
                        </table>

                    </div>
                    <div class=\"flex justify-between sm:flex-row flex-col mt-6 px-4\">
                        <div class=\"sm:mb-0 mb-6\">
                            <button id=\"add-row\" class=\"btn btn-primary\">Ajouter</button>
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
    <button type=\"button\" id=\"btnSaveInvoice\" class=\"btn btn-success w-full gap-2\">

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
        Save </button>
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
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script !src=\"\">
        \$(document).ready(function(e){
            let invType = \$(\"#inv-type\")
            let receiverName = \$(\"#reciever-name\")
            \$.ajax({
                url: '/facture/getCountFacture?typeID='+\$(this).val(),
                method: 'GET',
                data: {
                },
                success: function (response) {
                    \$(\"#number\").val(response.count).prop(\"readOnly\", true)
                    if(response){
                        // Redirect to another route with parameters
                    }
                },
                error: function () {
                    alert('Erreur lors de la requête AJAX.');
                    // Autres actions à effectuer en cas d'erreur
                }
            })
            // invType.on(\"change\", function(){
            //     if(\$(this).val() != -1){
            //         console.log(\$(this).val())
            //         \$.ajax({
            //             url: '/facture/getCountFacture?typeID='+\$(this).val(),
            //             method: 'GET',
            //             data: {
            //             },
            //             success: function (response) {
            //                 \$(\"#number\").val(response.count).prop(\"readOnly\", true)
            //                 if(response){
            //                     // Redirect to another route with parameters
            //                 }
            //             },
            //             error: function () {
            //                 alert('Erreur lors de la requête AJAX.');
            //                 // Autres actions à effectuer en cas d'erreur
            //             }
            //         })
            //
            //     }else{
            //         console.log(\"Nada\")
            //     }
            // })


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
                '<td><select class=\"form-input item-product\" name=\"select-'+counter+'\">' +
                '<option value=\"-1\">Choisir un produit</option>'+
                    ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 406, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 407
            echo "                '<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 407), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "designation", [], "any", false, false, false, 407), "html", null, true);
            echo "</option>'+
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "                '</select></td>'+
                '   <td><input type=\"text\" class=\"form-input item-quantity\"></td>'+
                '   <td><input type=\"text\" class=\"form-input item-prix\"></td>'+
                '   <td><span class=\"item-total\">0</span></td>'+
                '   <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>'+
                '</tr>'
            \$('.tbody').append(newRow);
            \$('#add-row').click(function() {
                counter++
                ";
        // line 419
        echo "                ";
        // line 420
        echo "                ";
        // line 421
        echo "                ";
        // line 422
        echo "                ";
        // line 423
        echo "                ";
        // line 424
        echo "                ";
        // line 425
        echo "                ";
        // line 426
        echo "                ";
        // line 427
        echo "                ";
        // line 428
        echo "                ";
        // line 429
        echo "                ";
        // line 430
        echo "                \$('.tbody').append(newRow);
            });

            // Supprimer une ligne
            \$('table').on('click', '.remove-row', function() {
                counter--
                \$(this).closest('tr').remove();
            });

        });
        // \$(document).ajaxStart(function() {
        //     // Changer le curseur en \"wait\" (sablier) lorsque la requête Ajax démarre
        //     \$('body').css('cursor', 'wait');
        // });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 430,  537 => 429,  535 => 428,  533 => 427,  531 => 426,  529 => 425,  527 => 424,  525 => 423,  523 => 422,  521 => 421,  519 => 420,  517 => 419,  506 => 409,  495 => 407,  491 => 406,  326 => 244,  188 => 108,  145 => 53,  134 => 51,  130 => 50,  101 => 23,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}


    <div x-data=\"invoiceAdd\">
        <div class=\"flex xl:flex-row flex-col gap-2.5\">
            <div class=\"panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6\">

                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Client</div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Name</label>
                                <select id=\"reciever-name\" type=\"text\" name=\"reciever-name\" class=\"form-input flex-1\"
                                       x-model=\"params.to.name\" placeholder=\"Enter Name\" />
                                    <option value=\"-1\">Choisir un client</option>
                                {% for client in clients %}
                                    <option value=\"{{ client.id }}\">{{ client.nom }}</option>
                                {% endfor %}
                                </select>

                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-email\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Email</label>
                                <input id=\"reciever-email\" type=\"email\" name=\"reciever-email\"
                                       class=\"form-input flex-1\" x-model=\"params.to.email\" placeholder=\"Enter Email\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-address\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Address</label>
                                <input id=\"reciever-address\" type=\"text\" name=\"reciever-address\"
                                       class=\"form-input flex-1\" x-model=\"params.to.address\" placeholder=\"Enter Address\" />
                            </div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-number\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Phone Number</label>
                                <input id=\"reciever-number\" type=\"text\" name=\"reciever-number\"
                                       class=\"form-input flex-1\" x-model=\"params.to.phone\"
                                       placeholder=\"Enter Phone Number\" />
                            </div>
                        </div>
                        <div class=\"lg:w-1/2 w-full\">
                            <div class=\"text-lg font-semibold\">Details de Facture</div>
                            <div class=\"flex items-center\">
                                <label for=\"inv-type\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Type Facture</label>
                                <select id=\"inv-type\" type=\"text\" name=\"inv-type\" class=\"form-input lg:w-[250px] w-2/3\"
                                        placeholder=\"#8801\" x-model=\"params.invoiceType\" />
                                <option value=\"-1\">Choisir le type</option>
                                {% for type in typeFactures %}
                                    <option value=\"{{ type.id }}\">{{ type.designation }}</option>
                                {% endfor %}
                                </select>
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"number\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">No Facture</label>
                                <input id=\"number\" type=\"text\" name=\"inv-num\" class=\"form-input lg:w-[250px] w-2/3\"
                                       placeholder=\"#8801\" x-model=\"params.invoiceNo\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"invoiceLabel\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Designation</label>
                                <input id=\"invoiceLabel\" type=\"text\" name=\"inv-label\"
                                       class=\"form-input lg:w-[250px] w-2/3\" placeholder=\"Enter Invoice Label\"
                                       x-model=\"params.title\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"startDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date Facture</label>
                                <input id=\"startDate\" type=\"date\" name=\"inv-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       x-model=\"params.invoiceDate\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"dueDate\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Date d'expiration</label>
                                <input id=\"dueDate\" type=\"date\" name=\"due-date\" class=\"form-input lg:w-[250px] w-2/3\"
                                       x-model=\"params.dueDate\" />
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
                                    <th>Quantity</th>
                                    <th>Prix Unitaire</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class=\"tbody\">
{#                                <tr>#}
{#                                    <td>#}
{#                                        <select class=\"form-input input-title\">#}
{#                                            <option value=\"-1\">Choisir un produit</option>#}
{#                                            {% for produit in produits %}#}
{#                                                <option value=\"{{ produit.id }}\">{{ produit.designation }}</option>#}
{#                                            {% endfor %}#}
{#                                        </select>#}
{#                                    </td>#}
{#                                    <td><input type=\"text\" class=\"form-input input-quantity\"></td>#}
{#                                    <td><input type=\"text\" class=\"form-input\"></td>#}
{#                                    <td><span>0</span></td>#}
{#                                    <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>#}
{#                                </tr>#}
                            </tbody>
                        </table>

                    </div>
                    <div class=\"flex justify-between sm:flex-row flex-col mt-6 px-4\">
                        <div class=\"sm:mb-0 mb-6\">
                            <button id=\"add-row\" class=\"btn btn-primary\">Ajouter</button>
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
    <button type=\"button\" id=\"btnSaveInvoice\" class=\"btn btn-success w-full gap-2\">

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
        Save </button>
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
            \$.ajax({
                url: '/facture/getCountFacture?typeID='+\$(this).val(),
                method: 'GET',
                data: {
                },
                success: function (response) {
                    \$(\"#number\").val(response.count).prop(\"readOnly\", true)
                    if(response){
                        // Redirect to another route with parameters
                    }
                },
                error: function () {
                    alert('Erreur lors de la requête AJAX.');
                    // Autres actions à effectuer en cas d'erreur
                }
            })
            // invType.on(\"change\", function(){
            //     if(\$(this).val() != -1){
            //         console.log(\$(this).val())
            //         \$.ajax({
            //             url: '/facture/getCountFacture?typeID='+\$(this).val(),
            //             method: 'GET',
            //             data: {
            //             },
            //             success: function (response) {
            //                 \$(\"#number\").val(response.count).prop(\"readOnly\", true)
            //                 if(response){
            //                     // Redirect to another route with parameters
            //                 }
            //             },
            //             error: function () {
            //                 alert('Erreur lors de la requête AJAX.');
            //                 // Autres actions à effectuer en cas d'erreur
            //             }
            //         })
            //
            //     }else{
            //         console.log(\"Nada\")
            //     }
            // })


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
                '<td><select class=\"form-input item-product\" name=\"select-'+counter+'\">' +
                '<option value=\"-1\">Choisir un produit</option>'+
                    {% for produit in produits %}
                '<option value=\"{{ produit.id }}\">{{ produit.designation }}</option>'+
                    {% endfor %}
                '</select></td>'+
                '   <td><input type=\"text\" class=\"form-input item-quantity\"></td>'+
                '   <td><input type=\"text\" class=\"form-input item-prix\"></td>'+
                '   <td><span class=\"item-total\">0</span></td>'+
                '   <td><button class=\"remove-row btn btn-danger btn-sm\">X</button></td>'+
                '</tr>'
            \$('.tbody').append(newRow);
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

        });
        // \$(document).ajaxStart(function() {
        //     // Changer le curseur en \"wait\" (sablier) lorsque la requête Ajax démarre
        //     \$('body').css('cursor', 'wait');
        // });
    </script>

{% endblock %}", "facture/new.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\facture\\new.html.twig");
    }
}
