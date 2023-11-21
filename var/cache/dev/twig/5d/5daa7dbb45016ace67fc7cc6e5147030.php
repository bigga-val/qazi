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
class __TwigTemplate_7f4b41da1920e92a4c4225b9a3b3e840 extends Template
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
                <div class=\"flex justify-between flex-wrap px-4\">
                    <div class=\"mb-6 lg:w-1/2 w-full\">
                        <div class=\"flex items-center text-black dark:text-white shrink-0\">
                            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"image\" class=\"w-14\" />
                        </div>
                        <div class=\"space-y-1 mt-6 text-gray-500 dark:text-gray-400\">
                            <div>13 Tetrick Road, Cypress Gardens, Florida, 33884, US</div>
                            <div>vristo@gmail.com</div>
                            <div>+1 (070) 123-4567</div>
                        </div>
                    </div>
                    <div class=\"lg:w-1/2 w-full lg:max-w-fit\">
                        <div class=\"flex items-center\">
                            <label for=\"inv-type\" class=\"flex-1 ltr:mr-2 rtl:ml-2 mb-0\">Type Facture</label>
                            <select id=\"inv-type\" type=\"text\" name=\"inv-type\" class=\"form-input lg:w-[250px] w-2/3\"
                                   placeholder=\"#8801\" x-model=\"params.invoiceType\" />
                                <option value=\"-1\">Choisir le type</option>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeFactures"]) || array_key_exists("typeFactures", $context) ? $context["typeFactures"] : (function () { throw new RuntimeError('Variable "typeFactures" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 27
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "designation", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </select>
                        </div>
                        <div class=\"flex items-center\">
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
                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Bill To</div>
                            <div class=\"mt-4 flex items-center\">
                                <label for=\"reciever-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Name</label>
                                <select id=\"reciever-name\" type=\"text\" name=\"reciever-name\" class=\"form-input flex-1\"
                                       x-model=\"params.to.name\" placeholder=\"Enter Name\" />
                                    <option value=\"-1\">Choisir un client</option>
                                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 65
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
                            <div class=\"text-lg font-semibold\">Payment Details</div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"acno\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Account Number</label>
                                <input id=\"acno\" type=\"text\" name=\"acno\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.no\" placeholder=\"Enter Account Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"bank-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Bank Name</label>
                                <input id=\"bank-name\" type=\"text\" name=\"bank-name\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.name\" placeholder=\"Enter Bank Name\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"swift-code\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">SWIFT Number</label>
                                <input id=\"swift-code\" type=\"text\" name=\"swift-code\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.swiftCode\" placeholder=\"Enter SWIFT Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"iban-code\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">IBAN Number</label>
                                <input id=\"iban-code\" type=\"text\" name=\"iban-code\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.ibanNo\" placeholder=\"Enter IBAN Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"country\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Country</label>
                                <select id=\"country\" name=\"country\" class=\"form-select flex-1\"
                                        x-model=\"params.bankInfo.country\">
                                    <option value=\"\">Choose Country</option>
                                    <option value=\"United States\">United States</option>
                                    <option value=\"United Kingdom\">United Kingdom</option>
                                    <option value=\"Canada\">Canada</option>
                                    <option value=\"Australia\">Australia</option>
                                    <option value=\"Germany\">Germany</option>
                                    <option value=\"Sweden\">Sweden</option>
                                    <option value=\"Denmark\">Denmark</option>
                                    <option value=\"Norway\">Norway</option>
                                    <option value=\"New-Zealand\">New Zealand</option>
                                    <option value=\"Afghanistan\">Afghanistan</option>
                                    <option value=\"Albania\">Albania</option>
                                    <option value=\"Algeria\">Algeria</option>
                                    <option value=\"American-Samoa\">Andorra</option>
                                    <option value=\"Angola\">Angola</option>
                                    <option value=\"Antigua Barbuda\">Antigua &amp; Barbuda</option>
                                    <option value=\"Argentina\">Argentina</option>
                                    <option value=\"Armenia\">Armenia</option>
                                    <option value=\"Aruba\">Aruba</option>
                                    <option value=\"Austria\">Austria</option>
                                    <option value=\"Azerbaijan\">Azerbaijan</option>
                                    <option value=\"Bahamas\">Bahamas</option>
                                    <option value=\"Bahrain\">Bahrain</option>
                                    <option value=\"Bangladesh\">Bangladesh</option>
                                    <option value=\"Barbados\">Barbados</option>
                                    <option value=\"Belarus\">Belarus</option>
                                    <option value=\"Belgium\">Belgium</option>
                                    <option value=\"Belize\">Belize</option>
                                    <option value=\"Benin\">Benin</option>
                                    <option value=\"Bermuda\">Bermuda</option>
                                    <option value=\"Bhutan\">Bhutan</option>
                                    <option value=\"Bolivia\">Bolivia</option>
                                    <option value=\"Bosnia\">Bosnia &amp; Herzegovina</option>
                                    <option value=\"Botswana\">Botswana</option>
                                    <option value=\"Brazil\">Brazil</option>
                                    <option value=\"British\">British Virgin Islands</option>
                                    <option value=\"Brunei\">Brunei</option>
                                    <option value=\"Bulgaria\">Bulgaria</option>
                                    <option value=\"Burkina\">Burkina Faso</option>
                                    <option value=\"Burundi\">Burundi</option>
                                    <option value=\"Cambodia\">Cambodia</option>
                                    <option value=\"Cameroon\">Cameroon</option>
                                    <option value=\"Cape\">Cape Verde</option>
                                    <option value=\"Cayman\">Cayman Islands</option>
                                    <option value=\"Central-African\">Central African Republic</option>
                                    <option value=\"Chad\">Chad</option>
                                    <option value=\"Chile\">Chile</option>
                                    <option value=\"China\">China</option>
                                    <option value=\"Colombia\">Colombia</option>
                                    <option value=\"Comoros\">Comoros</option>
                                    <option value=\"Costa-Rica\">Costa Rica</option>
                                    <option value=\"Croatia\">Croatia</option>
                                    <option value=\"Cuba\">Cuba</option>
                                    <option value=\"Cyprus\">Cyprus</option>
                                    <option value=\"Czechia\">Czechia</option>
                                    <option value=\"Côte\">Côte d'Ivoire</option>
                                    <option value=\"Djibouti\">Djibouti</option>
                                    <option value=\"Dominica\">Dominica</option>
                                    <option value=\"Dominican\">Dominican Republic</option>
                                    <option value=\"Ecuador\">Ecuador</option>
                                    <option value=\"Egypt\">Egypt</option>
                                    <option value=\"El-Salvador\">El Salvador</option>
                                    <option value=\"Equatorial-Guinea\">Equatorial Guinea</option>
                                    <option value=\"Eritrea\">Eritrea</option>
                                    <option value=\"Estonia\">Estonia</option>
                                    <option value=\"Ethiopia\">Ethiopia</option>
                                    <option value=\"Fiji\">Fiji</option>
                                    <option value=\"Finland\">Finland</option>
                                    <option value=\"France\">France</option>
                                    <option value=\"Gabon\">Gabon</option>
                                    <option value=\"Georgia\">Georgia</option>
                                    <option value=\"Ghana\">Ghana</option>
                                    <option value=\"Greece\">Greece</option>
                                    <option value=\"Grenada\">Grenada</option>
                                    <option value=\"Guatemala\">Guatemala</option>
                                    <option value=\"Guernsey\">Guernsey</option>
                                    <option value=\"Guinea\">Guinea</option>
                                    <option value=\"Guinea-Bissau\">Guinea-Bissau</option>
                                    <option value=\"Guyana\">Guyana</option>
                                    <option value=\"Haiti\">Haiti</option>
                                    <option value=\"Honduras\">Honduras</option>
                                    <option value=\"Hong-Kong\">Hong Kong SAR China</option>
                                    <option value=\"Hungary\">Hungary</option>
                                    <option value=\"Iceland\">Iceland</option>
                                    <option value=\"India\">India</option>
                                    <option value=\"Indonesia\">Indonesia</option>
                                    <option value=\"Iran\">Iran</option>
                                    <option value=\"Iraq\">Iraq</option>
                                    <option value=\"Ireland\">Ireland</option>
                                    <option value=\"Israel\">Israel</option>
                                    <option value=\"Italy\">Italy</option>
                                    <option value=\"Jamaica\">Jamaica</option>
                                    <option value=\"Japan\">Japan</option>
                                    <option value=\"Jordan\">Jordan</option>
                                    <option value=\"Kazakhstan\">Kazakhstan</option>
                                    <option value=\"Kenya\">Kenya</option>
                                    <option value=\"Kuwait\">Kuwait</option>
                                    <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                                    <option value=\"Laos\">Laos</option>
                                    <option value=\"Latvia\">Latvia</option>
                                    <option value=\"Lebanon\">Lebanon</option>
                                    <option value=\"Lesotho\">Lesotho</option>
                                    <option value=\"Liberia\">Liberia</option>
                                    <option value=\"Libya\">Libya</option>
                                    <option value=\"Liechtenstein\">Liechtenstein</option>
                                    <option value=\"Lithuania\">Lithuania</option>
                                    <option value=\"Luxembourg\">Luxembourg</option>
                                    <option value=\"Macedonia\">Macedonia</option>
                                    <option value=\"Madagascar\">Madagascar</option>
                                    <option value=\"Malawi\">Malawi</option>
                                    <option value=\"Malaysia\">Malaysia</option>
                                    <option value=\"Maldives\">Maldives</option>
                                    <option value=\"Mali\">Mali</option>
                                    <option value=\"Malta\">Malta</option>
                                    <option value=\"Mauritania\">Mauritania</option>
                                    <option value=\"Mauritius\">Mauritius</option>
                                    <option value=\"Mexico\">Mexico</option>
                                    <option value=\"Moldova\">Moldova</option>
                                    <option value=\"Monaco\">Monaco</option>
                                    <option value=\"Mongolia\">Mongolia</option>
                                    <option value=\"Montenegro\">Montenegro</option>
                                    <option value=\"Morocco\">Morocco</option>
                                    <option value=\"Mozambique\">Mozambique</option>
                                    <option value=\"Myanmar\">Myanmar (Burma)</option>
                                    <option value=\"Namibia\">Namibia</option>
                                    <option value=\"Nepal\">Nepal</option>
                                    <option value=\"Netherlands\">Netherlands</option>
                                    <option value=\"Nicaragua\">Nicaragua</option>
                                    <option value=\"Niger\">Niger</option>
                                    <option value=\"Nigeria\">Nigeria</option>
                                    <option value=\"North-Korea\">North Korea</option>
                                    <option value=\"Oman\">Oman</option>
                                    <option value=\"Pakistan\">Pakistan</option>
                                    <option value=\"Palau\">Palau</option>
                                    <option value=\"Palestinian\">Palestinian Territories</option>
                                    <option value=\"Panama\">Panama</option>
                                    <option value=\"Papua\">Papua New Guinea</option>
                                    <option value=\"Paraguay\">Paraguay</option>
                                    <option value=\"Peru\">Peru</option>
                                    <option value=\"Philippines\">Philippines</option>
                                    <option value=\"Poland\">Poland</option>
                                    <option value=\"Portugal\">Portugal</option>
                                    <option value=\"Puerto\">Puerto Rico</option>
                                    <option value=\"Qatar\">Qatar</option>
                                    <option value=\"Romania\">Romania</option>
                                    <option value=\"Russia\">Russia</option>
                                    <option value=\"Rwanda\">Rwanda</option>
                                    <option value=\"Réunion\">Réunion</option>
                                    <option value=\"Samoa\">Samoa</option>
                                    <option value=\"San-Marino\">San Marino</option>
                                    <option value=\"Saudi-Arabia\">Saudi Arabia</option>
                                    <option value=\"Senegal\">Senegal</option>
                                    <option value=\"Serbia\">Serbia</option>
                                    <option value=\"Seychelles\">Seychelles</option>
                                    <option value=\"Sierra-Leone\">Sierra Leone</option>
                                    <option value=\"Singapore\">Singapore</option>
                                    <option value=\"Slovakia\">Slovakia</option>
                                    <option value=\"Slovenia\">Slovenia</option>
                                    <option value=\"Solomon-Islands\">Solomon Islands</option>
                                    <option value=\"Somalia\">Somalia</option>
                                    <option value=\"South-Africa\">South Africa</option>
                                    <option value=\"South-Korea\">South Korea</option>
                                    <option value=\"Spain\">Spain</option>
                                    <option value=\"Sri-Lanka\">Sri Lanka</option>
                                    <option value=\"Sudan\">Sudan</option>
                                    <option value=\"Suriname\">Suriname</option>
                                    <option value=\"Swaziland\">Swaziland</option>
                                    <option value=\"Switzerland\">Switzerland</option>
                                    <option value=\"Syria\">Syria</option>
                                    <option value=\"Sao-Tome-and-Principe\">São Tomé &amp; Príncipe</option>
                                    <option value=\"Tajikistan\">Tajikistan</option>
                                    <option value=\"Tanzania\">Tanzania</option>
                                    <option value=\"Thailand\">Thailand</option>
                                    <option value=\"Timor-Leste\">Timor-Leste</option>
                                    <option value=\"Togo\">Togo</option>
                                    <option value=\"Tonga\">Tonga</option>
                                    <option value=\"Trinidad-and-Tobago\">Trinidad &amp; Tobago</option>
                                    <option value=\"Tunisia\">Tunisia</option>
                                    <option value=\"Turkey\">Turkey</option>
                                    <option value=\"Turkmenistan\">Turkmenistan</option>
                                    <option value=\"Uganda\">Uganda</option>
                                    <option value=\"Ukraine\">Ukraine</option>
                                    <option value=\"UAE\">United Arab Emirates</option>
                                    <option value=\"Uruguay\">Uruguay</option>
                                    <option value=\"Uzbekistan\">Uzbekistan</option>
                                    <option value=\"Vanuatu\">Vanuatu</option>
                                    <option value=\"Venezuela\">Venezuela</option>
                                    <option value=\"Vietnam\">Vietnam</option>
                                    <option value=\"Yemen\">Yemen</option>
                                    <option value=\"Zambia\">Zambia</option>
                                    <option value=\"Zimbabwe\">Zimbabwe</option>
                                </select>
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
        // line 338
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
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script !src=\"\">
        \$(document).ready(function(e){
            let invType = \$(\"#inv-type\")
            let receiverName = \$(\"#reciever-name\")
            invType.on(\"change\", function(){
                if(\$(this).val() != -1){
                    console.log(\$(this).val())
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

                }else{
                    console.log(\"Nada\")
                }
            })


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
                        console.log(response.id)
                        console.log(response.etat)
                        if(response.etat){
                            //window.location.href = \"/facture/\"+response.id;
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
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 591, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 592
            echo "                '<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 592), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "designation", [], "any", false, false, false, 592), "html", null, true);
            echo "</option>'+
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
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
        // line 604
        echo "                ";
        // line 605
        echo "                ";
        // line 606
        echo "                ";
        // line 607
        echo "                ";
        // line 608
        echo "                ";
        // line 609
        echo "                ";
        // line 610
        echo "                ";
        // line 611
        echo "                ";
        // line 612
        echo "                ";
        // line 613
        echo "                ";
        // line 614
        echo "                ";
        // line 615
        echo "                \$('.tbody').append(newRow);
            });

            // Supprimer une ligne
            \$('table').on('click', '.remove-row', function() {
                counter--
                \$(this).closest('tr').remove();
            });
        });
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
        return array (  727 => 615,  725 => 614,  723 => 613,  721 => 612,  719 => 611,  717 => 610,  715 => 609,  713 => 608,  711 => 607,  709 => 606,  707 => 605,  705 => 604,  694 => 594,  683 => 592,  679 => 591,  557 => 472,  421 => 338,  162 => 67,  151 => 65,  147 => 64,  110 => 29,  99 => 27,  95 => 26,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'components/layout/default.html.twig' %}

{% block content %}


    <div x-data=\"invoiceAdd\">
        <div class=\"flex xl:flex-row flex-col gap-2.5\">
            <div class=\"panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6\">
                <div class=\"flex justify-between flex-wrap px-4\">
                    <div class=\"mb-6 lg:w-1/2 w-full\">
                        <div class=\"flex items-center text-black dark:text-white shrink-0\">
                            <img src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"image\" class=\"w-14\" />
                        </div>
                        <div class=\"space-y-1 mt-6 text-gray-500 dark:text-gray-400\">
                            <div>13 Tetrick Road, Cypress Gardens, Florida, 33884, US</div>
                            <div>vristo@gmail.com</div>
                            <div>+1 (070) 123-4567</div>
                        </div>
                    </div>
                    <div class=\"lg:w-1/2 w-full lg:max-w-fit\">
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
                        <div class=\"flex items-center\">
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
                <hr class=\"border-[#e0e6ed] dark:border-[#1b2e4b] my-6\">
                <div class=\"mt-8 px-4\">
                    <div class=\"flex justify-between lg:flex-row flex-col\">
                        <div class=\"lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6\">
                            <div class=\"text-lg font-semibold\">Bill To</div>
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
                            <div class=\"text-lg font-semibold\">Payment Details</div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"acno\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Account Number</label>
                                <input id=\"acno\" type=\"text\" name=\"acno\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.no\" placeholder=\"Enter Account Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"bank-name\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Bank Name</label>
                                <input id=\"bank-name\" type=\"text\" name=\"bank-name\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.name\" placeholder=\"Enter Bank Name\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"swift-code\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">SWIFT Number</label>
                                <input id=\"swift-code\" type=\"text\" name=\"swift-code\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.swiftCode\" placeholder=\"Enter SWIFT Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"iban-code\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">IBAN Number</label>
                                <input id=\"iban-code\" type=\"text\" name=\"iban-code\" class=\"form-input flex-1\"
                                       x-model=\"params.bankInfo.ibanNo\" placeholder=\"Enter IBAN Number\" />
                            </div>
                            <div class=\"flex items-center mt-4\">
                                <label for=\"country\" class=\"ltr:mr-2 rtl:ml-2 w-1/3 mb-0\">Country</label>
                                <select id=\"country\" name=\"country\" class=\"form-select flex-1\"
                                        x-model=\"params.bankInfo.country\">
                                    <option value=\"\">Choose Country</option>
                                    <option value=\"United States\">United States</option>
                                    <option value=\"United Kingdom\">United Kingdom</option>
                                    <option value=\"Canada\">Canada</option>
                                    <option value=\"Australia\">Australia</option>
                                    <option value=\"Germany\">Germany</option>
                                    <option value=\"Sweden\">Sweden</option>
                                    <option value=\"Denmark\">Denmark</option>
                                    <option value=\"Norway\">Norway</option>
                                    <option value=\"New-Zealand\">New Zealand</option>
                                    <option value=\"Afghanistan\">Afghanistan</option>
                                    <option value=\"Albania\">Albania</option>
                                    <option value=\"Algeria\">Algeria</option>
                                    <option value=\"American-Samoa\">Andorra</option>
                                    <option value=\"Angola\">Angola</option>
                                    <option value=\"Antigua Barbuda\">Antigua &amp; Barbuda</option>
                                    <option value=\"Argentina\">Argentina</option>
                                    <option value=\"Armenia\">Armenia</option>
                                    <option value=\"Aruba\">Aruba</option>
                                    <option value=\"Austria\">Austria</option>
                                    <option value=\"Azerbaijan\">Azerbaijan</option>
                                    <option value=\"Bahamas\">Bahamas</option>
                                    <option value=\"Bahrain\">Bahrain</option>
                                    <option value=\"Bangladesh\">Bangladesh</option>
                                    <option value=\"Barbados\">Barbados</option>
                                    <option value=\"Belarus\">Belarus</option>
                                    <option value=\"Belgium\">Belgium</option>
                                    <option value=\"Belize\">Belize</option>
                                    <option value=\"Benin\">Benin</option>
                                    <option value=\"Bermuda\">Bermuda</option>
                                    <option value=\"Bhutan\">Bhutan</option>
                                    <option value=\"Bolivia\">Bolivia</option>
                                    <option value=\"Bosnia\">Bosnia &amp; Herzegovina</option>
                                    <option value=\"Botswana\">Botswana</option>
                                    <option value=\"Brazil\">Brazil</option>
                                    <option value=\"British\">British Virgin Islands</option>
                                    <option value=\"Brunei\">Brunei</option>
                                    <option value=\"Bulgaria\">Bulgaria</option>
                                    <option value=\"Burkina\">Burkina Faso</option>
                                    <option value=\"Burundi\">Burundi</option>
                                    <option value=\"Cambodia\">Cambodia</option>
                                    <option value=\"Cameroon\">Cameroon</option>
                                    <option value=\"Cape\">Cape Verde</option>
                                    <option value=\"Cayman\">Cayman Islands</option>
                                    <option value=\"Central-African\">Central African Republic</option>
                                    <option value=\"Chad\">Chad</option>
                                    <option value=\"Chile\">Chile</option>
                                    <option value=\"China\">China</option>
                                    <option value=\"Colombia\">Colombia</option>
                                    <option value=\"Comoros\">Comoros</option>
                                    <option value=\"Costa-Rica\">Costa Rica</option>
                                    <option value=\"Croatia\">Croatia</option>
                                    <option value=\"Cuba\">Cuba</option>
                                    <option value=\"Cyprus\">Cyprus</option>
                                    <option value=\"Czechia\">Czechia</option>
                                    <option value=\"Côte\">Côte d'Ivoire</option>
                                    <option value=\"Djibouti\">Djibouti</option>
                                    <option value=\"Dominica\">Dominica</option>
                                    <option value=\"Dominican\">Dominican Republic</option>
                                    <option value=\"Ecuador\">Ecuador</option>
                                    <option value=\"Egypt\">Egypt</option>
                                    <option value=\"El-Salvador\">El Salvador</option>
                                    <option value=\"Equatorial-Guinea\">Equatorial Guinea</option>
                                    <option value=\"Eritrea\">Eritrea</option>
                                    <option value=\"Estonia\">Estonia</option>
                                    <option value=\"Ethiopia\">Ethiopia</option>
                                    <option value=\"Fiji\">Fiji</option>
                                    <option value=\"Finland\">Finland</option>
                                    <option value=\"France\">France</option>
                                    <option value=\"Gabon\">Gabon</option>
                                    <option value=\"Georgia\">Georgia</option>
                                    <option value=\"Ghana\">Ghana</option>
                                    <option value=\"Greece\">Greece</option>
                                    <option value=\"Grenada\">Grenada</option>
                                    <option value=\"Guatemala\">Guatemala</option>
                                    <option value=\"Guernsey\">Guernsey</option>
                                    <option value=\"Guinea\">Guinea</option>
                                    <option value=\"Guinea-Bissau\">Guinea-Bissau</option>
                                    <option value=\"Guyana\">Guyana</option>
                                    <option value=\"Haiti\">Haiti</option>
                                    <option value=\"Honduras\">Honduras</option>
                                    <option value=\"Hong-Kong\">Hong Kong SAR China</option>
                                    <option value=\"Hungary\">Hungary</option>
                                    <option value=\"Iceland\">Iceland</option>
                                    <option value=\"India\">India</option>
                                    <option value=\"Indonesia\">Indonesia</option>
                                    <option value=\"Iran\">Iran</option>
                                    <option value=\"Iraq\">Iraq</option>
                                    <option value=\"Ireland\">Ireland</option>
                                    <option value=\"Israel\">Israel</option>
                                    <option value=\"Italy\">Italy</option>
                                    <option value=\"Jamaica\">Jamaica</option>
                                    <option value=\"Japan\">Japan</option>
                                    <option value=\"Jordan\">Jordan</option>
                                    <option value=\"Kazakhstan\">Kazakhstan</option>
                                    <option value=\"Kenya\">Kenya</option>
                                    <option value=\"Kuwait\">Kuwait</option>
                                    <option value=\"Kyrgyzstan\">Kyrgyzstan</option>
                                    <option value=\"Laos\">Laos</option>
                                    <option value=\"Latvia\">Latvia</option>
                                    <option value=\"Lebanon\">Lebanon</option>
                                    <option value=\"Lesotho\">Lesotho</option>
                                    <option value=\"Liberia\">Liberia</option>
                                    <option value=\"Libya\">Libya</option>
                                    <option value=\"Liechtenstein\">Liechtenstein</option>
                                    <option value=\"Lithuania\">Lithuania</option>
                                    <option value=\"Luxembourg\">Luxembourg</option>
                                    <option value=\"Macedonia\">Macedonia</option>
                                    <option value=\"Madagascar\">Madagascar</option>
                                    <option value=\"Malawi\">Malawi</option>
                                    <option value=\"Malaysia\">Malaysia</option>
                                    <option value=\"Maldives\">Maldives</option>
                                    <option value=\"Mali\">Mali</option>
                                    <option value=\"Malta\">Malta</option>
                                    <option value=\"Mauritania\">Mauritania</option>
                                    <option value=\"Mauritius\">Mauritius</option>
                                    <option value=\"Mexico\">Mexico</option>
                                    <option value=\"Moldova\">Moldova</option>
                                    <option value=\"Monaco\">Monaco</option>
                                    <option value=\"Mongolia\">Mongolia</option>
                                    <option value=\"Montenegro\">Montenegro</option>
                                    <option value=\"Morocco\">Morocco</option>
                                    <option value=\"Mozambique\">Mozambique</option>
                                    <option value=\"Myanmar\">Myanmar (Burma)</option>
                                    <option value=\"Namibia\">Namibia</option>
                                    <option value=\"Nepal\">Nepal</option>
                                    <option value=\"Netherlands\">Netherlands</option>
                                    <option value=\"Nicaragua\">Nicaragua</option>
                                    <option value=\"Niger\">Niger</option>
                                    <option value=\"Nigeria\">Nigeria</option>
                                    <option value=\"North-Korea\">North Korea</option>
                                    <option value=\"Oman\">Oman</option>
                                    <option value=\"Pakistan\">Pakistan</option>
                                    <option value=\"Palau\">Palau</option>
                                    <option value=\"Palestinian\">Palestinian Territories</option>
                                    <option value=\"Panama\">Panama</option>
                                    <option value=\"Papua\">Papua New Guinea</option>
                                    <option value=\"Paraguay\">Paraguay</option>
                                    <option value=\"Peru\">Peru</option>
                                    <option value=\"Philippines\">Philippines</option>
                                    <option value=\"Poland\">Poland</option>
                                    <option value=\"Portugal\">Portugal</option>
                                    <option value=\"Puerto\">Puerto Rico</option>
                                    <option value=\"Qatar\">Qatar</option>
                                    <option value=\"Romania\">Romania</option>
                                    <option value=\"Russia\">Russia</option>
                                    <option value=\"Rwanda\">Rwanda</option>
                                    <option value=\"Réunion\">Réunion</option>
                                    <option value=\"Samoa\">Samoa</option>
                                    <option value=\"San-Marino\">San Marino</option>
                                    <option value=\"Saudi-Arabia\">Saudi Arabia</option>
                                    <option value=\"Senegal\">Senegal</option>
                                    <option value=\"Serbia\">Serbia</option>
                                    <option value=\"Seychelles\">Seychelles</option>
                                    <option value=\"Sierra-Leone\">Sierra Leone</option>
                                    <option value=\"Singapore\">Singapore</option>
                                    <option value=\"Slovakia\">Slovakia</option>
                                    <option value=\"Slovenia\">Slovenia</option>
                                    <option value=\"Solomon-Islands\">Solomon Islands</option>
                                    <option value=\"Somalia\">Somalia</option>
                                    <option value=\"South-Africa\">South Africa</option>
                                    <option value=\"South-Korea\">South Korea</option>
                                    <option value=\"Spain\">Spain</option>
                                    <option value=\"Sri-Lanka\">Sri Lanka</option>
                                    <option value=\"Sudan\">Sudan</option>
                                    <option value=\"Suriname\">Suriname</option>
                                    <option value=\"Swaziland\">Swaziland</option>
                                    <option value=\"Switzerland\">Switzerland</option>
                                    <option value=\"Syria\">Syria</option>
                                    <option value=\"Sao-Tome-and-Principe\">São Tomé &amp; Príncipe</option>
                                    <option value=\"Tajikistan\">Tajikistan</option>
                                    <option value=\"Tanzania\">Tanzania</option>
                                    <option value=\"Thailand\">Thailand</option>
                                    <option value=\"Timor-Leste\">Timor-Leste</option>
                                    <option value=\"Togo\">Togo</option>
                                    <option value=\"Tonga\">Tonga</option>
                                    <option value=\"Trinidad-and-Tobago\">Trinidad &amp; Tobago</option>
                                    <option value=\"Tunisia\">Tunisia</option>
                                    <option value=\"Turkey\">Turkey</option>
                                    <option value=\"Turkmenistan\">Turkmenistan</option>
                                    <option value=\"Uganda\">Uganda</option>
                                    <option value=\"Ukraine\">Ukraine</option>
                                    <option value=\"UAE\">United Arab Emirates</option>
                                    <option value=\"Uruguay\">Uruguay</option>
                                    <option value=\"Uzbekistan\">Uzbekistan</option>
                                    <option value=\"Vanuatu\">Vanuatu</option>
                                    <option value=\"Venezuela\">Venezuela</option>
                                    <option value=\"Vietnam\">Vietnam</option>
                                    <option value=\"Yemen\">Yemen</option>
                                    <option value=\"Zambia\">Zambia</option>
                                    <option value=\"Zimbabwe\">Zimbabwe</option>
                                </select>
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
            invType.on(\"change\", function(){
                if(\$(this).val() != -1){
                    console.log(\$(this).val())
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

                }else{
                    console.log(\"Nada\")
                }
            })


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
                        console.log(response.id)
                        console.log(response.etat)
                        if(response.etat){
                            //window.location.href = \"/facture/\"+response.id;
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
    </script>
{% endblock %}", "facture/new.html.twig", "C:\\Users\\TEST\\Downloads\\symfony\\vristo-symfony-main\\templates\\facture\\new.html.twig");
    }
}
