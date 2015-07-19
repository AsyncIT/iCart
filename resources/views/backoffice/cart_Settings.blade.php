<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>RubiCart- Back Office</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="ecommerce-page">

<!-- Start: Theme Preview Pane -->
@include('backoffice.templates.skinbar')
        <!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    @include('backoffice.templates.header')
            <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">

            <!-- Start: Topbar-Dropdown -->
            @include('backoffice.templates.top-dropdown')
                    <!-- End: Topbar-Dropdown -->

            <!-- sidebar menu -->
            @include('backoffice.templates.left-sidebar')

        </div>
    </aside>


    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar -->
        @include('backoffice.templates.top-breadcumb')
                <!-- End: Topbar -->
            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p25 va-t posr">

                    <!-- Store Owner Details -->
                    <div class="panel panel-warning panel-border top mt20 mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Owner Details</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Account Name:</label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" value="OwnerAccountName">
                                            <label for="account-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-email" class="field-label col-md-3 text-center">Account Email:</label>
                                    <div class="col-md-9">
                                        <label for="account-email" class="field prepend-icon">
                                            <input type="email" name="account-email" id="account-email" class="gui-input" value="owner@store.com">
                                            <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Account Phone:</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" value="888-888-8888" placeholder="">
                                            <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="store-timezone" class="field-label col-md-3 text-center">Store Timezone:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                            <select id="store-timezone" name="store-timezone">
                                                <option value="0" selected="selected">(GMT-8h) US/Pacific</option>
                                                <option value="1">(GMT-11h) Pacific/Samoa</option>
                                                <option value="2">(GMT-10h) Pacific/Johnston</option>
                                                <option value="3">(GMT-8h) Canada/Pacific</option>
                                                <option value="4">(GMT+10h) Pacific/Truk</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Store Information -->
                    <div class="panel panel-info panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Information</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="business-name" class="field-label col-md-3 text-center">Business Name:</label>
                                    <div class="col-md-9">
                                        <label for="business-name" class="field prepend-icon">
                                            <input type="text" name="business-name" id="business-name" class="gui-input" value="AdminDesigns">
                                            <label for="business-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="business-phone" class="field-label col-md-3 text-center">Business Phone:</label>
                                    <div class="col-md-9">
                                        <label for="business-phone" class="field prepend-icon">
                                            <input type="text" name="business-phone" id="business-phone" class="gui-input" value="888-888-8888">
                                            <label for="business-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>


                                <hr class="short alt">

                                <div class="section">
                                    <label for="lastaddr" class="field prepend-icon">
                                        <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address 2">
                                        <label for="lastaddr" class="field-icon"><i class="fa fa-map-marker"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field select">
                                        <select id="location" name="location">
                                            <option value="">Select country...</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan Republic</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="C2">China Worldwide</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="CD">Democratic Republic of the Congo</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="GA">Gabon Republic</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn Islands</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="CG">Republic of the Congo</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="KN">Saint Kitts and Nevis Anguilla</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SH">St. Helena</option>
                                            <option value="LC">St. Lucia</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican City State</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section row mbn">
                                    <div class="col-md-3">
                                        <label for="zip" class="field prepend-icon">
                                            <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                                            <label for="zip" class="field-icon"><i class="fa fa-certificate"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-4">
                                        <label for="city" class="field prepend-icon">
                                            <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                                            <label for="city" class="field-icon"><i class="fa fa-building-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-5">
                                        <label for="states" class="field select">
                                            <select id="states" name="states">
                                                <option value="">Choose state</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end section row -->

                            </div>
                        </div>
                    </div>

                    <!-- Store Settings -->
                    <div class="panel panel-primary panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Settings</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">

                                <div class="section row mb10">
                                    <label for="names" class="field-label col-md-3 text-center">Store Timezone:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                            <select id="set-location" name="set-location">
                                                <option value="0" selected="selected">(GMT-8h) US/Pacific</option>
                                                <option value="1">(GMT-11h) Pacific/Samoa</option>
                                                <option value="2">(GMT-10h) Pacific/Johnston</option>
                                                <option value="3">(GMT-8h) Canada/Pacific</option>
                                                <option value="4">(GMT+10h) Pacific/Truk</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-md-3 text-center">Store Currency:</label>
                                    <div class="col-md-9">
                                        <label for="store-currency" class="field prepend-icon">
                                            <input type="text" name="store-currency" id="store-currency" class="gui-input" value="" placeholder="United States Dollar">
                                            <label for="store-currency" class="field-icon"><i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-units" class="field-label col-md-3 text-center">Store Unit System:</label>
                                    <div class="col-md-9">
                                        <label for="store-units" class="field prepend-icon">
                                            <input type="text" name="store-units" id="store-units" class="gui-input" value="" placeholder="Metric System">
                                            <label for="store-units" class="field-icon"><i class="fa fa-exchange"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-weight" class="field-label col-md-3 text-center">Store Weight Unit:</label>
                                    <div class="col-md-9">
                                        <label for="store-weight" class="field prepend-icon">
                                            <input type="text" name="store-weight" id="store-weight" class="gui-input" value="" placeholder="Pound(lb)">
                                            <label for="store-weight" class="field-icon"><i class="fa fa-anchor"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-desc" class="field-label col-md-3 text-center">Store Description:</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="store-desc" name="store-desc" placeholder="Store Description and Purposes"></textarea>
                                            <label for="store-desc" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <!-- Store Policies -->
                    <div class="panel panel-success panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Policies</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">


                                <div class="section row mb25">
                                    <label for="refund-policy" class="field-label col-md-3 text-center">Refund Policy</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="refund-policy" name="refund-policy" placeholder="Describe your return policy and conditions here..."></textarea>
                                            <label for="refund-policy" class="field-icon"><i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb25">
                                    <label for="privacy-policy" class="field-label col-md-3 text-center">Privacy Policy</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="privacy-policy" name="privacy-policy" placeholder="Describe the data your store, collect, and handle here..."></textarea>
                                            <label for="privacy-policy" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb15">
                                    <label for="store-tos" class="field-label col-md-3 text-center">Terms of Service</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="store-tos" name="store-tos" placeholder="Describe any business protocols or methodologies here..."></textarea>
                                            <label for="store-tos" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Request Google Analytics -->
                    <div class="panel panel-system panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Google Analytics</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">

                                <h5 class="text-muted fw400 mb10"> Google Analytics account <small>(how do I set this up?)</small></h5>
                                <div class="section mbn">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="google-insert" name="google-insert" placeholder="Paste your code from Google here"></textarea>
                                        <label for="google-insert" class="field-icon"><i class="fa fa-google"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">

                    <!-- menu quick links -->
                    <div class="p20 admin-form">

                        <h4 class="mt5 text-muted fw500"> StoreFront Options</h4>

                        <hr class="short">

                        <h6 class="fw400">Store Name</h6>
                        <div class="section mb15">
                            <label for="store-name" class="field prepend-icon">
                                <input type="text" name="store-name" id="store-name" class="gui-input" value="My Online Store">
                                <label for="store-name" class="field-icon"><i class="fa fa-home"></i>
                                </label>
                            </label>
                        </div>

                        <h6 class="fw400">Store URL</h6>
                        <div class="section mb15">
                            <label for="store-url" class="field prepend-icon">
                                <input type="text" name="store-url" id="store-url" class="gui-input" value="http://myonlinestore.com">
                                <label for="store-url" class="field-icon"><i class="fa fa-globe"></i>
                                </label>
                            </label>
                        </div>

                        <hr class="short alt br-light">

                        <h6 class="fw400 mb15">Store Image</h6>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail mb20">
                                <img data-src="holder.js/100%x120" alt="holder">
                            </div>
                            <span class="btn btn-default light btn-file btn-block ph5">
                                            <span class="fileupload-new">Change</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file">
                            </span>
                        </div>
                    </div>

                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- FileUpload JS -->
    <script type="text/javascript" src="vendor/plugins/fileupload/fileupload.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // grant file-upload preview onclick functionality
            $('.fileupload-preview').on('click', function() {
                $('.btn-file > input').click();
            });

            // select dropdowns - placeholder like creation
            var selectList = $('.admin-form select');
            selectList.each(function(i, e) {
                $(e).on('change', function() {
                    if ($(e).val() == "0") $(e).addClass("empty");
                    else $(e).removeClass("empty")
                });
            });
            selectList.each(function(i, e) {
                $(e).change();
            });


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
