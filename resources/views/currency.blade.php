<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CURRENCY CONVERTER</title>
    <style>
        body{
            background-color: #d2d2d2;
        }
        form{
            background-color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 pt-5">
            <form action="{{ route('currency')}}" class="border rounded m-5 p-5" method="get">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="row">
                            <h4 class="col-md-7 ps-2 m-0">CURRENCY CONVERTER</h4>
                            <strong class="col-md-5 p-0 m-0 text-end" style="color: #008B8B;"></strong>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <select class="form-select" name='currency_from' aria-label="Default select example" required>
                                    <option value="" @if (Request::get('currency_from') == null) none @endif>Select Currency</option>
                                    <option value="AFN" @if (Request::get('currency_from') == 'AFN')? selected : none @endif>Afghan Afghani</option>
                                    <option value="ALL" @if (Request::get('currency_from') == 'ALL')? selected : none @endif>Albanian Leke</option>
                                    <option value="DZD" @if (Request::get('currency_from') == 'DZD')? selected : none @endif>Algerian Dinar</option>
                                    <option value="AOA" @if (Request::get('currency_from') == 'AQA')? selected : none @endif>Angolan Kwanza</option>
                                    <option value="ARS" @if (Request::get('currency_from') == 'ARS')? selected : none @endif>Argentine Peso</option>
                                    <option value="AMD" @if (Request::get('currency_from') == 'AMD')? selected : none @endif>Armenian Dram</option>
                                    <option value="AWG" @if (Request::get('currency_from') == 'AWG')? selected : none @endif>Aruban Florin</option>
                                    <option value="AUD" @if (Request::get('currency_from') == 'AUD')? selected : none @endif>Australia Dollar</option>
                                    <option value="AZN" @if (Request::get('currency_from') == 'AZN')? selected : none @endif>Azerbaijani Manat</option>
                                    <option value="BSD" @if (Request::get('currency_from') == 'BSD')? selected : none @endif>Bahamian Dollar</option>
                                    <option value="BHD" @if (Request::get('currency_from') == 'BHD')? selected : none @endif>Bahraini Dinar</option>
                                    <option value="BDT" @if (Request::get('currency_from') == 'BDT')? selected : none @endif>Bangladeshi Taka</option>
                                    <option value="BBD" @if (Request::get('currency_from') == 'BBD')? selected : none @endif>Barbadian Dollar</option>
                                    <option value="BYR" @if (Request::get('currency_from') == 'BYR')? selected : none @endif>Belarusian Ruble</option>
                                    <option value="BEF" @if (Request::get('currency_from') == 'BEF')? selected : none @endif>Belgian Franc</option>
                                    <option value="BZD" @if (Request::get('currency_from') == 'BZD')? selected : none @endif>Belize Dollar</option>
                                    <option value="BMD" @if (Request::get('currency_from') == 'BMD')? selected : none @endif>Bermudan Dollar</option>
                                    <option value="BTN" @if (Request::get('currency_from') == 'BTN')? selected : none @endif>Bhutanese Ngultrum</option>
                                    <option value="BTC" @if (Request::get('currency_from') == 'BTC')? selected : none @endif>Bitcoin</option>
                                    <option value="BOB" @if (Request::get('currency_from') == 'BOB')? selected : none @endif>Bolivian Boliviano</option>
                                    <option value="BAM" @if (Request::get('currency_from') == 'BAM')? selected : none @endif>Bosnia-Herzegovina Convertible Mark</option>
                                    <option value="BWP" @if (Request::get('currency_from') == 'BWP')? selected : none @endif>Botswanan Pula</option>
                                    <option value="BRL" @if (Request::get('currency_from') == 'BRL')? selected : none @endif>Brazilian Real</option>
                                    <option value="GBP" @if (Request::get('currency_from') == 'GBP')? selected : none @endif>British Pound Sterling</option>
                                    <option value="BND" @if (Request::get('currency_from') == 'BND')? selected : none @endif>Brunei Dollar</option>
                                    <option value="BGN" @if (Request::get('currency_from') == 'BGN')? selected : none @endif>Bulgarian Lev</option>
                                    <option value="BIF" @if (Request::get('currency_from') == 'BIF')? selected : none @endif>Burundian Franc</option>
                                    <option value="KHR" @if (Request::get('currency_from') == 'KHR')? selected : none @endif>Cambodian Riel</option>
                                    <option value="CAD" @if (Request::get('currency_from') == 'CAD')? selected : none @endif>Canadian Dollar</option>
                                    <option value="CVE" @if (Request::get('currency_from') == 'CVE')? selected : none @endif>Cape Verdean Escudo</option>
                                    <option value="KYD" @if (Request::get('currency_from') == 'KYD')? selected : none @endif>Cayman Islands Dollar</option>
                                    <option value="XOF" @if (Request::get('currency_from') == 'XOF')? selected : none @endif>CFA Franc BCEAO</option>
                                    <option value="XAF" @if (Request::get('currency_from') == 'XAF')? selected : none @endif>CFA Franc BEAC</option>
                                    <option value="XPF" @if (Request::get('currency_from') == 'XPF')? selected : none @endif>CFP Franc</option>
                                    <option value="CLP" @if (Request::get('currency_from') == 'CLP')? selected : none @endif>Chilean Peso</option>
                                    <option value="CNY" @if (Request::get('currency_from') == 'CNY')? selected : none @endif>Chinese Yuan</option>
                                    <option value="COP" @if (Request::get('currency_from') == 'COP')? selected : none @endif>Colombian Peso</option>
                                    <option value="KMF" @if (Request::get('currency_from') == 'KMF')? selected : none @endif>Comorian Franc</option>
                                    <option value="CDF" @if (Request::get('currency_from') == 'CDF')? selected : none @endif>Congolese Franc</option>
                                    <option value="CRC" @if (Request::get('currency_from') == 'CRC')? selected : none @endif>Costa Rican ColÃ³n</option>
                                    <option value="HRK" @if (Request::get('currency_from') == 'HRK')? selected : none @endif>Croatian Kuna</option>
                                    <option value="CUC" @if (Request::get('currency_from') == 'CUC')? selected : none @endif>Cuban Convertible Peso</option>
                                    <option value="CZK" @if (Request::get('currency_from') == 'CZK')? selected : none @endif>Czech Republic Koruna</option>
                                    <option value="DKK" @if (Request::get('currency_from') == 'DKK')? selected : none @endif>Danish Krone</option>
                                    <option value="DJF" @if (Request::get('currency_from') == 'DJF')? selected : none @endif>Djiboutian Franc</option>
                                    <option value="DOP" @if (Request::get('currency_from') == 'DOP')? selected : none @endif>Dominican Peso</option>
                                    <option value="XCD" @if (Request::get('currency_from') == 'XCD')? selected : none @endif>East Caribbean Dollar</option>
                                    <option value="EGP" @if (Request::get('currency_from') == 'EGP')? selected : none @endif>Egyptian Pound</option>
                                    <option value="ERN" @if (Request::get('currency_from') == 'ERN')? selected : none @endif>Eritrean Nakfa</option>
                                    <option value="EEK" @if (Request::get('currency_from') == 'EEK')? selected : none @endif>Estonian Kroon</option>
                                    <option value="ETB" @if (Request::get('currency_from') == 'ETB')? selected : none @endif>Ethiopian Birr</option>
                                    <option value="EUR" @if (Request::get('currency_from') == 'EUR')? selected : none @endif>Euro</option>
                                    <option value="FKP" @if (Request::get('currency_from') == 'FKP')? selected : none @endif>Falkland Islands Pound</option>
                                    <option value="FJD" @if (Request::get('currency_from') == 'FJD')? selected : none @endif>Fijian Dollar</option>
                                    <option value="GMD" @if (Request::get('currency_from') == 'GMD')? selected : none @endif>Gambian Dalasi</option>
                                    <option value="GEL" @if (Request::get('currency_from') == 'GEL')? selected : none @endif>Georgian Lari</option>
                                    <option value="DEM" @if (Request::get('currency_from') == 'DEM')? selected : none @endif>German Mark</option>
                                    <option value="GHS" @if (Request::get('currency_from') == 'GHS')? selected : none @endif>Ghanaian Cedi</option>
                                    <option value="GIP" @if (Request::get('currency_from') == 'GIP')? selected : none @endif>Gibraltar Pound</option>
                                    <option value="GRD" @if (Request::get('currency_from') == 'GRD')? selected : none @endif>Greek Drachma</option>
                                    <option value="GTQ" @if (Request::get('currency_from') == 'GTQ')? selected : none @endif>Guatemalan Quetzal</option>
                                    <option value="GNF" @if (Request::get('currency_from') == 'GNF')? selected : none @endif>Guinean Franc</option>
                                    <option value="GYD" @if (Request::get('currency_from') == 'GYD')? selected : none @endif>Guyanaese Dollar</option>
                                    <option value="HTG" @if (Request::get('currency_from') == 'HTG')? selected : none @endif>Haitian Gourde</option>
                                    <option value="HNL" @if (Request::get('currency_from') == 'HNL')? selected : none @endif>Honduran Lempira</option>
                                    <option value="HKD" @if (Request::get('currency_from') == 'HKD')? selected : none @endif>Hong Kong Dollar</option>
                                    <option value="HUF" @if (Request::get('currency_from') == 'HUF')? selected : none @endif>Hungarian Forint</option>
                                    <option value="ISK" @if (Request::get('currency_from') == 'ISK')? selected : none @endif>Icelandic KrÃ³na</option>
                                    <option value="INR" @if (Request::get('currency_from') == 'INR')? selected : none @endif>Indian Rupee</option>
                                    <option value="IDR" @if (Request::get('currency_from') == 'IDR')? selected : none @endif>Indonesian Rupiah</option>
                                    <option value="IRR" @if (Request::get('currency_from') == 'IRR')? selected : none @endif>Iranian Rial</option>
                                    <option value="IQD" @if (Request::get('currency_from') == 'IQD')? selected : none @endif>Iraqi Dinar</option>
                                    <option value="ILS" @if (Request::get('currency_from') == 'ILS')? selected : none @endif>Israeli New Sheqel</option>
                                    <option value="ITL" @if (Request::get('currency_from') == 'ITL')? selected : none @endif>Italian Lira</option>
                                    <option value="JMD" @if (Request::get('currency_from') == 'JMD')? selected : none @endif>Jamaican Dollar</option>
                                    <option value="JPY" @if (Request::get('currency_from') == 'JPY')? selected : none @endif>Japanese Yen</option>
                                    <option value="JOD" @if (Request::get('currency_from') == 'JOD')? selected : none @endif>Jordanian Dinar</option>
                                    <option value="KZT" @if (Request::get('currency_from') == 'KZT')? selected : none @endif>Kazakhstani Tenge</option>
                                    <option value="KES" @if (Request::get('currency_from') == 'KES')? selected : none @endif>Kenyan Shilling</option>
                                    <option value="KWD" @if (Request::get('currency_from') == 'KWD')? selected : none @endif>Kuwaiti Dinar</option>
                                    <option value="KGS" @if (Request::get('currency_from') == 'KGS')? selected : none @endif>Kyrgystani Som</option>
                                    <option value="LAK" @if (Request::get('currency_from') == 'LAK')? selected : none @endif>Laotian Kip</option>
                                    <option value="LVL" @if (Request::get('currency_from') == 'LVL')? selected : none @endif>Latvian Lats</option>
                                    <option value="LBP" @if (Request::get('currency_from') == 'LBP')? selected : none @endif>Lebanese Pound</option>
                                    <option value="LSL" @if (Request::get('currency_from') == 'LSL')? selected : none @endif>Lesotho Loti</option>
                                    <option value="LRD" @if (Request::get('currency_from') == 'LDR')? selected : none @endif>Liberian Dollar</option>
                                    <option value="LYD" @if (Request::get('currency_from') == 'LYD')? selected : none @endif>Libyan Dinar</option>
                                    <option value="LTL" @if (Request::get('currency_from') == 'LTL')? selected : none @endif>Lithuanian Litas</option>
                                    <option value="MOP" @if (Request::get('currency_from') == 'MOP')? selected : none @endif>Macanese Pataca</option>
                                    <option value="MKD" @if (Request::get('currency_from') == 'MKD')? selected : none @endif>Macedonian Denar</option>
                                    <option value="MGA" @if (Request::get('currency_from') == 'MGA')? selected : none @endif>Malagasy Ariary</option>
                                    <option value="MWK" @if (Request::get('currency_from') == 'MWK')? selected : none @endif>Malawian Kwacha</option>
                                    <option value="MYR" @if (Request::get('currency_from') == 'MYR')? selected : none @endif>Malaysian Ringgit</option>
                                    <option value="MVR" @if (Request::get('currency_from') == 'MVR')? selected : none @endif>Maldivian Rufiyaa</option>
                                    <option value="MRO" @if (Request::get('currency_from') == 'MRO')? selected : none @endif>Mauritanian Ouguiya</option>
                                    <option value="MUR" @if (Request::get('currency_from') == 'MUR')? selected : none @endif>Mauritian Rupee</option>
                                    <option value="MXN" @if (Request::get('currency_from') == 'MXN')? selected : none @endif>Mexican Peso</option>
                                    <option value="MDL" @if (Request::get('currency_from') == 'MDL')? selected : none @endif>Moldovan Leu</option>
                                    <option value="MNT" @if (Request::get('currency_from') == 'MNT')? selected : none @endif>Mongolian Tugrik</option>
                                    <option value="MAD" @if (Request::get('currency_from') == 'MAD')? selected : none @endif>Moroccan Dirham</option>
                                    <option value="MZM" @if (Request::get('currency_from') == 'MZM')? selected : none @endif>Mozambican Metical</option>
                                    <option value="MMK" @if (Request::get('currency_from') == 'MMK')? selected : none @endif>Myanmar Kyat</option>
                                    <option value="NAD" @if (Request::get('currency_from') == 'NAD')? selected : none @endif>Namibian Dollar</option>
                                    <option value="NPR" @if (Request::get('currency_from') == 'NPR')? selected : none @endif>Nepalese Rupee</option>
                                    <option value="ANG" @if (Request::get('currency_from') == 'ANG')? selected : none @endif>Netherlands Antillean Guilder</option>
                                    <option value="TWD" @if (Request::get('currency_from') == 'TWD')? selected : none @endif>New Taiwan Dollar</option>
                                    <option value="NZD" @if (Request::get('currency_from') == 'NZD')? selected : none @endif>New Zealand Dollar</option>
                                    <option value="NIO" @if (Request::get('currency_from') == 'NIO')? selected : none @endif>Nicaraguan CÃ³rdoba</option>
                                    <option value="NGN" @if (Request::get('currency_from') == 'NGN')? selected : none @endif>Nigerian Naira</option>
                                    <option value="KPW" @if (Request::get('currency_from') == 'KPW')? selected : none @endif>North Korean Won</option>
                                    <option value="NOK" @if (Request::get('currency_from') == 'NOK')? selected : none @endif>Norwegian Krone</option>
                                    <option value="OMR" @if (Request::get('currency_from') == 'OMR')? selected : none @endif>Omani Rial</option>
                                    <option value="PKR" @if (Request::get('currency_from') == 'PKR')? selected : none @endif>Pakistani Rupee</option>
                                    <option value="PAB" @if (Request::get('currency_from') == 'PAB')? selected : none @endif>Panamanian Balboa</option>
                                    <option value="PGK" @if (Request::get('currency_from') == 'PGK')? selected : none @endif>Papua New Guinean Kina</option>
                                    <option value="PYG" @if (Request::get('currency_from') == 'PYG')? selected : none @endif>Paraguayan Guarani</option>
                                    <option value="PEN" @if (Request::get('currency_from') == 'PEN')? selected : none @endif>Peruvian Nuevo Sol</option>
                                    <option value="PHP" @if (Request::get('currency_from') == 'PHP')? selected : none @endif>Philippine Peso</option>
                                    <option value="PLN" @if (Request::get('currency_from') == 'PLN')? selected : none @endif>Polish Zloty</option>
                                    <option value="QAR" @if (Request::get('currency_from') == 'QAR')? selected : none @endif>Qatari Rial</option>
                                    <option value="RON" @if (Request::get('currency_from') == 'RON')? selected : none @endif>Romanian Leu</option>
                                    <option value="RUB" @if (Request::get('currency_from') == 'RUB')? selected : none @endif>Russian Ruble</option>
                                    <option value="RWF" @if (Request::get('currency_from') == 'RWF')? selected : none @endif>Rwandan Franc</option>
                                    <option value="SVC" @if (Request::get('currency_from') == 'SVC')? selected : none @endif>Salvadoran ColÃ³n</option>
                                    <option value="WST" @if (Request::get('currency_from') == 'WST')? selected : none @endif>Samoan Tala</option>
                                    <option value="SAR" @if (Request::get('currency_from') == 'SAR')? selected : none @endif>Saudi Riyal</option>
                                    <option value="RSD" @if (Request::get('currency_from') == 'RSD')? selected : none @endif>Serbian Dinar</option>
                                    <option value="SCR" @if (Request::get('currency_from') == 'SRC')? selected : none @endif>Seychellois Rupee</option>
                                    <option value="SLL" @if (Request::get('currency_from') == 'SLL')? selected : none @endif>Sierra Leonean Leone</option>
                                    <option value="SGD" @if (Request::get('currency_from') == 'SGD')? selected : none @endif>Singapore Dollar</option>
                                    <option value="SKK" @if (Request::get('currency_from') == 'SKK')? selected : none @endif>Slovak Koruna</option>
                                    <option value="SBD" @if (Request::get('currency_from') == 'SBD')? selected : none @endif>Solomon Islands Dollar</option>
                                    <option value="SOS" @if (Request::get('currency_from') == 'SOS')? selected : none @endif>Somali Shilling</option>
                                    <option value="ZAR" @if (Request::get('currency_from') == 'ZAR')? selected : none @endif>South African Rand</option>
                                    <option value="KRW" @if (Request::get('currency_from') == 'KRW')? selected : none @endif>South Korean Won</option>
                                    <option value="XDR" @if (Request::get('currency_from') == 'XDR')? selected : none @endif>Special Drawing Rights</option>
                                    <option value="LKR" @if (Request::get('currency_from') == 'LKR')? selected : none @endif>Sri Lankan Rupee</option>
                                    <option value="SHP" @if (Request::get('currency_from') == 'SHP')? selected : none @endif>St. Helena Pound</option>
                                    <option value="SDG" @if (Request::get('currency_from') == 'SDG')? selected : none @endif>Sudanese Pound</option>
                                    <option value="SRD" @if (Request::get('currency_from') == 'SRD')? selected : none @endif>Surinamese Dollar</option>
                                    <option value="SZL" @if (Request::get('currency_from') == 'SZL')? selected : none @endif>Swazi Lilangeni</option>
                                    <option value="SEK" @if (Request::get('currency_from') == 'SEK')? selected : none @endif>Swedish Krona</option>
                                    <option value="CHF" @if (Request::get('currency_from') == 'CHF')? selected : none @endif>Swiss Franc</option>
                                    <option value="SYP" @if (Request::get('currency_from') == 'SYP')? selected : none @endif>Syrian Pound</option>
                                    <option value="STD" @if (Request::get('currency_from') == 'STD')? selected : none @endif>São Tomé and Príncipe Dobra</option>
                                    <option value="TJS" @if (Request::get('currency_from') == 'TJS')? selected : none @endif>Tajikistani Somoni</option>
                                    <option value="TZS" @if (Request::get('currency_from') == 'TZS')? selected : none @endif>Tanzanian Shilling</option>
                                    <option value="THB" @if (Request::get('currency_from') == 'THB')? selected : none @endif>Thai Baht</option>
                                    <option value="TOP" @if (Request::get('currency_from') == 'TOP')? selected : none @endif>Tongan pa'anga</option>
                                    <option value="TTD" @if (Request::get('currency_from') == 'TTD')? selected : none @endif>Trinidad & Tobago Dollar</option>
                                    <option value="TND" @if (Request::get('currency_from') == 'TND')? selected : none @endif>Tunisian Dinar</option>
                                    <option value="TRY" @if (Request::get('currency_from') == 'TRY')? selected : none @endif>Turkey Lira</option>
                                    <option value="TMT" @if (Request::get('currency_from') == 'TMT')? selected : none @endif>Turkmenistani Manat</option>
                                    <option value="UGX" @if (Request::get('currency_from') == 'UGX')? selected : none @endif>Ugandan Shilling</option>
                                    <option value="UAH" @if (Request::get('currency_from') == 'UAH')? selected : none @endif>Ukrainian Hryvnia</option>
                                    <option value="AED" @if (Request::get('currency_from') == 'AED')? selected : none @endif>United Arab Emirates Dirham</option>
                                    <option value="UYU" @if (Request::get('currency_from') == 'UYU')? selected : none @endif>Uruguayan Peso</option>
                                    <option value="USD" @if (Request::get('currency_from') == 'USD')? selected : none @endif>USA Dollar</option>
                                    <option value="UZS" @if (Request::get('currency_from') == 'UZS')? selected : none @endif>Uzbekistan Som</option>
                                    <option value="VUV" @if (Request::get('currency_from') == 'VUV')? selected : none @endif>Vanuatu Vatu</option>
                                    <option value="VEF" @if (Request::get('currency_from') == 'VEF')? selected : none @endif>Venezuelan BolÃ­var</option>
                                    <option value="VND" @if (Request::get('currency_from') == 'VND')? selected : none @endif>Vietnamese Dong</option>
                                    <option value="YER" @if (Request::get('currency_from') == 'YER')? selected : none @endif>Yemeni Rial</option>
                                    <option value="ZMK" @if (Request::get('currency_from') == 'ZMK')? selected : none @endif>Zambian Kwacha</option>

                                </select>
                            </div>
                            <h4 class="col-md-2 text-center m-0 p-0">To</h4>
                            <div class="col-md-5 mb-3">
                                <select class="form-select"  name='currency_to' aria-label="Default select example" required>
                                    <option value="" @if (Request::get('currency_to') == null) none @endif>Select Currency</option>
                                    <option value="AFN" @if (Request::get('currency_to') == 'AFN')? selected : none @endif>Afghan Afghani</option>
                                    <option value="ALL" @if (Request::get('currency_to') == 'ALL')? selected : none @endif>Albanian Leke</option>
                                    <option value="DZD" @if (Request::get('currency_to') == 'DZD')? selected : none @endif>Algerian Dinar</option>
                                    <option value="AOA" @if (Request::get('currency_to') == 'AQA')? selected : none @endif>Angolan Kwanza</option>
                                    <option value="ARS" @if (Request::get('currency_to') == 'ARS')? selected : none @endif>Argentine Peso</option>
                                    <option value="AMD" @if (Request::get('currency_to') == 'AMD')? selected : none @endif>Armenian Dram</option>
                                    <option value="AWG" @if (Request::get('currency_to') == 'AWG')? selected : none @endif>Aruban Florin</option>
                                    <option value="AUD" @if (Request::get('currency_to') == 'AUD')? selected : none @endif>Australia Dollar</option>
                                    <option value="AZN" @if (Request::get('currency_to') == 'AZN')? selected : none @endif>Azerbaijani Manat</option>
                                    <option value="BSD" @if (Request::get('currency_to') == 'BSD')? selected : none @endif>Bahamian Dollar</option>
                                    <option value="BHD" @if (Request::get('currency_to') == 'BHD')? selected : none @endif>Bahraini Dinar</option>
                                    <option value="BDT" @if (Request::get('currency_to') == 'BDT')? selected : none @endif>Bangladeshi Taka</option>
                                    <option value="BBD" @if (Request::get('currency_to') == 'BBD')? selected : none @endif>Barbadian Dollar</option>
                                    <option value="BYR" @if (Request::get('currency_to') == 'BYR')? selected : none @endif>Belarusian Ruble</option>
                                    <option value="BEF" @if (Request::get('currency_to') == 'BEF')? selected : none @endif>Belgian Franc</option>
                                    <option value="BZD" @if (Request::get('currency_to') == 'BZD')? selected : none @endif>Belize Dollar</option>
                                    <option value="BMD" @if (Request::get('currency_to') == 'BMD')? selected : none @endif>Bermudan Dollar</option>
                                    <option value="BTN" @if (Request::get('currency_to') == 'BTN')? selected : none @endif>Bhutanese Ngultrum</option>
                                    <option value="BTC" @if (Request::get('currency_to') == 'BTC')? selected : none @endif>Bitcoin</option>
                                    <option value="BOB" @if (Request::get('currency_to') == 'BOB')? selected : none @endif>Bolivian Boliviano</option>
                                    <option value="BAM" @if (Request::get('currency_to') == 'BAM')? selected : none @endif>Bosnia-Herzegovina Convertible Mark</option>
                                    <option value="BWP" @if (Request::get('currency_to') == 'BWP')? selected : none @endif>Botswanan Pula</option>
                                    <option value="BRL" @if (Request::get('currency_to') == 'BRL')? selected : none @endif>Brazilian Real</option>
                                    <option value="GBP" @if (Request::get('currency_to') == 'GBP')? selected : none @endif>British Pound Sterling</option>
                                    <option value="BND" @if (Request::get('currency_to') == 'BND')? selected : none @endif>Brunei Dollar</option>
                                    <option value="BGN" @if (Request::get('currency_to') == 'BGN')? selected : none @endif>Bulgarian Lev</option>
                                    <option value="BIF" @if (Request::get('currency_to') == 'BIF')? selected : none @endif>Burundian Franc</option>
                                    <option value="KHR" @if (Request::get('currency_to') == 'KHR')? selected : none @endif>Cambodian Riel</option>
                                    <option value="CAD" @if (Request::get('currency_to') == 'CAD')? selected : none @endif>Canadian Dollar</option>
                                    <option value="CVE" @if (Request::get('currency_to') == 'CVE')? selected : none @endif>Cape Verdean Escudo</option>
                                    <option value="KYD" @if (Request::get('currency_to') == 'KYD')? selected : none @endif>Cayman Islands Dollar</option>
                                    <option value="XOF" @if (Request::get('currency_to') == 'XOF')? selected : none @endif>CFA Franc BCEAO</option>
                                    <option value="XAF" @if (Request::get('currency_to') == 'XAF')? selected : none @endif>CFA Franc BEAC</option>
                                    <option value="XPF" @if (Request::get('currency_to') == 'XPF')? selected : none @endif>CFP Franc</option>
                                    <option value="CLP" @if (Request::get('currency_to') == 'CLP')? selected : none @endif>Chilean Peso</option>
                                    <option value="CNY" @if (Request::get('currency_to') == 'CNY')? selected : none @endif>Chinese Yuan</option>
                                    <option value="COP" @if (Request::get('currency_to') == 'COP')? selected : none @endif>Colombian Peso</option>
                                    <option value="KMF" @if (Request::get('currency_to') == 'KMF')? selected : none @endif>Comorian Franc</option>
                                    <option value="CDF" @if (Request::get('currency_to') == 'CDF')? selected : none @endif>Congolese Franc</option>
                                    <option value="CRC" @if (Request::get('currency_to') == 'CRC')? selected : none @endif>Costa Rican ColÃ³n</option>
                                    <option value="HRK" @if (Request::get('currency_to') == 'HRK')? selected : none @endif>Croatian Kuna</option>
                                    <option value="CUC" @if (Request::get('currency_to') == 'CUC')? selected : none @endif>Cuban Convertible Peso</option>
                                    <option value="CZK" @if (Request::get('currency_to') == 'CZK')? selected : none @endif>Czech Republic Koruna</option>
                                    <option value="DKK" @if (Request::get('currency_to') == 'DKK')? selected : none @endif>Danish Krone</option>
                                    <option value="DJF" @if (Request::get('currency_to') == 'DJF')? selected : none @endif>Djiboutian Franc</option>
                                    <option value="DOP" @if (Request::get('currency_to') == 'DOP')? selected : none @endif>Dominican Peso</option>
                                    <option value="XCD" @if (Request::get('currency_to') == 'XCD')? selected : none @endif>East Caribbean Dollar</option>
                                    <option value="EGP" @if (Request::get('currency_to') == 'EGP')? selected : none @endif>Egyptian Pound</option>
                                    <option value="ERN" @if (Request::get('currency_to') == 'ERN')? selected : none @endif>Eritrean Nakfa</option>
                                    <option value="EEK" @if (Request::get('currency_to') == 'EEK')? selected : none @endif>Estonian Kroon</option>
                                    <option value="ETB" @if (Request::get('currency_to') == 'ETB')? selected : none @endif>Ethiopian Birr</option>
                                    <option value="EUR" @if (Request::get('currency_to') == 'EUR')? selected : none @endif>Euro</option>
                                    <option value="FKP" @if (Request::get('currency_to') == 'FKP')? selected : none @endif>Falkland Islands Pound</option>
                                    <option value="FJD" @if (Request::get('currency_to') == 'FJD')? selected : none @endif>Fijian Dollar</option>
                                    <option value="GMD" @if (Request::get('currency_to') == 'GMD')? selected : none @endif>Gambian Dalasi</option>
                                    <option value="GEL" @if (Request::get('currency_to') == 'GEL')? selected : none @endif>Georgian Lari</option>
                                    <option value="DEM" @if (Request::get('currency_to') == 'DEM')? selected : none @endif>German Mark</option>
                                    <option value="GHS" @if (Request::get('currency_to') == 'GHS')? selected : none @endif>Ghanaian Cedi</option>
                                    <option value="GIP" @if (Request::get('currency_to') == 'GIP')? selected : none @endif>Gibraltar Pound</option>
                                    <option value="GRD" @if (Request::get('currency_to') == 'GRD')? selected : none @endif>Greek Drachma</option>
                                    <option value="GTQ" @if (Request::get('currency_to') == 'GTQ')? selected : none @endif>Guatemalan Quetzal</option>
                                    <option value="GNF" @if (Request::get('currency_to') == 'GNF')? selected : none @endif>Guinean Franc</option>
                                    <option value="GYD" @if (Request::get('currency_to') == 'GYD')? selected : none @endif>Guyanaese Dollar</option>
                                    <option value="HTG" @if (Request::get('currency_to') == 'HTG')? selected : none @endif>Haitian Gourde</option>
                                    <option value="HNL" @if (Request::get('currency_to') == 'HNL')? selected : none @endif>Honduran Lempira</option>
                                    <option value="HKD" @if (Request::get('currency_to') == 'HKD')? selected : none @endif>Hong Kong Dollar</option>
                                    <option value="HUF" @if (Request::get('currency_to') == 'HUF')? selected : none @endif>Hungarian Forint</option>
                                    <option value="ISK" @if (Request::get('currency_to') == 'ISK')? selected : none @endif>Icelandic KrÃ³na</option>
                                    <option value="INR" @if (Request::get('currency_to') == 'INR')? selected : none @endif>Indian Rupee</option>
                                    <option value="IDR" @if (Request::get('currency_to') == 'IDR')? selected : none @endif>Indonesian Rupiah</option>
                                    <option value="IRR" @if (Request::get('currency_to') == 'IRR')? selected : none @endif>Iranian Rial</option>
                                    <option value="IQD" @if (Request::get('currency_to') == 'IQD')? selected : none @endif>Iraqi Dinar</option>
                                    <option value="ILS" @if (Request::get('currency_to') == 'ILS')? selected : none @endif>Israeli New Sheqel</option>
                                    <option value="ITL" @if (Request::get('currency_to') == 'ITL')? selected : none @endif>Italian Lira</option>
                                    <option value="JMD" @if (Request::get('currency_to') == 'JMD')? selected : none @endif>Jamaican Dollar</option>
                                    <option value="JPY" @if (Request::get('currency_to') == 'JPY')? selected : none @endif>Japanese Yen</option>
                                    <option value="JOD" @if (Request::get('currency_to') == 'JOD')? selected : none @endif>Jordanian Dinar</option>
                                    <option value="KZT" @if (Request::get('currency_to') == 'KZT')? selected : none @endif>Kazakhstani Tenge</option>
                                    <option value="KES" @if (Request::get('currency_to') == 'KES')? selected : none @endif>Kenyan Shilling</option>
                                    <option value="KWD" @if (Request::get('currency_to') == 'KWD')? selected : none @endif>Kuwaiti Dinar</option>
                                    <option value="KGS" @if (Request::get('currency_to') == 'KGS')? selected : none @endif>Kyrgystani Som</option>
                                    <option value="LAK" @if (Request::get('currency_to') == 'LAK')? selected : none @endif>Laotian Kip</option>
                                    <option value="LVL" @if (Request::get('currency_to') == 'LVL')? selected : none @endif>Latvian Lats</option>
                                    <option value="LBP" @if (Request::get('currency_to') == 'LBP')? selected : none @endif>Lebanese Pound</option>
                                    <option value="LSL" @if (Request::get('currency_to') == 'LSL')? selected : none @endif>Lesotho Loti</option>
                                    <option value="LRD" @if (Request::get('currency_to') == 'LDR')? selected : none @endif>Liberian Dollar</option>
                                    <option value="LYD" @if (Request::get('currency_to') == 'LYD')? selected : none @endif>Libyan Dinar</option>
                                    <option value="LTL" @if (Request::get('currency_to') == 'LTL')? selected : none @endif>Lithuanian Litas</option>
                                    <option value="MOP" @if (Request::get('currency_to') == 'MOP')? selected : none @endif>Macanese Pataca</option>
                                    <option value="MKD" @if (Request::get('currency_to') == 'MKD')? selected : none @endif>Macedonian Denar</option>
                                    <option value="MGA" @if (Request::get('currency_to') == 'MGA')? selected : none @endif>Malagasy Ariary</option>
                                    <option value="MWK" @if (Request::get('currency_to') == 'MWK')? selected : none @endif>Malawian Kwacha</option>
                                    <option value="MYR" @if (Request::get('currency_to') == 'MYR')? selected : none @endif>Malaysian Ringgit</option>
                                    <option value="MVR" @if (Request::get('currency_to') == 'MVR')? selected : none @endif>Maldivian Rufiyaa</option>
                                    <option value="MRO" @if (Request::get('currency_to') == 'MRO')? selected : none @endif>Mauritanian Ouguiya</option>
                                    <option value="MUR" @if (Request::get('currency_to') == 'MUR')? selected : none @endif>Mauritian Rupee</option>
                                    <option value="MXN" @if (Request::get('currency_to') == 'MXN')? selected : none @endif>Mexican Peso</option>
                                    <option value="MDL" @if (Request::get('currency_to') == 'MDL')? selected : none @endif>Moldovan Leu</option>
                                    <option value="MNT" @if (Request::get('currency_to') == 'MNT')? selected : none @endif>Mongolian Tugrik</option>
                                    <option value="MAD" @if (Request::get('currency_to') == 'MAD')? selected : none @endif>Moroccan Dirham</option>
                                    <option value="MZM" @if (Request::get('currency_to') == 'MZM')? selected : none @endif>Mozambican Metical</option>
                                    <option value="MMK" @if (Request::get('currency_to') == 'MMK')? selected : none @endif>Myanmar Kyat</option>
                                    <option value="NAD" @if (Request::get('currency_to') == 'NAD')? selected : none @endif>Namibian Dollar</option>
                                    <option value="NPR" @if (Request::get('currency_to') == 'NPR')? selected : none @endif>Nepalese Rupee</option>
                                    <option value="ANG" @if (Request::get('currency_to') == 'ANG')? selected : none @endif>Netherlands Antillean Guilder</option>
                                    <option value="TWD" @if (Request::get('currency_to') == 'TWD')? selected : none @endif>New Taiwan Dollar</option>
                                    <option value="NZD" @if (Request::get('currency_to') == 'NZD')? selected : none @endif>New Zealand Dollar</option>
                                    <option value="NIO" @if (Request::get('currency_to') == 'NIO')? selected : none @endif>Nicaraguan CÃ³rdoba</option>
                                    <option value="NGN" @if (Request::get('currency_to') == 'NGN')? selected : none @endif>Nigerian Naira</option>
                                    <option value="KPW" @if (Request::get('currency_to') == 'KPW')? selected : none @endif>North Korean Won</option>
                                    <option value="NOK" @if (Request::get('currency_to') == 'NOK')? selected : none @endif>Norwegian Krone</option>
                                    <option value="OMR" @if (Request::get('currency_to') == 'OMR')? selected : none @endif>Omani Rial</option>
                                    <option value="PKR" @if (Request::get('currency_to') == 'PKR')? selected : none @endif>Pakistani Rupee</option>
                                    <option value="PAB" @if (Request::get('currency_to') == 'PAB')? selected : none @endif>Panamanian Balboa</option>
                                    <option value="PGK" @if (Request::get('currency_to') == 'PGK')? selected : none @endif>Papua New Guinean Kina</option>
                                    <option value="PYG" @if (Request::get('currency_to') == 'PYG')? selected : none @endif>Paraguayan Guarani</option>
                                    <option value="PEN" @if (Request::get('currency_to') == 'PEN')? selected : none @endif>Peruvian Nuevo Sol</option>
                                    <option value="PHP" @if (Request::get('currency_to') == 'PHP')? selected : none @endif>Philippine Peso</option>
                                    <option value="PLN" @if (Request::get('currency_to') == 'PLN')? selected : none @endif>Polish Zloty</option>
                                    <option value="QAR" @if (Request::get('currency_to') == 'QAR')? selected : none @endif>Qatari Rial</option>
                                    <option value="RON" @if (Request::get('currency_to') == 'RON')? selected : none @endif>Romanian Leu</option>
                                    <option value="RUB" @if (Request::get('currency_to') == 'RUB')? selected : none @endif>Russian Ruble</option>
                                    <option value="RWF" @if (Request::get('currency_to') == 'RWF')? selected : none @endif>Rwandan Franc</option>
                                    <option value="SVC" @if (Request::get('currency_to') == 'SVC')? selected : none @endif>Salvadoran ColÃ³n</option>
                                    <option value="WST" @if (Request::get('currency_to') == 'WST')? selected : none @endif>Samoan Tala</option>
                                    <option value="SAR" @if (Request::get('currency_to') == 'SAR')? selected : none @endif>Saudi Riyal</option>
                                    <option value="RSD" @if (Request::get('currency_to') == 'RSD')? selected : none @endif>Serbian Dinar</option>
                                    <option value="SCR" @if (Request::get('currency_to') == 'SRC')? selected : none @endif>Seychellois Rupee</option>
                                    <option value="SLL" @if (Request::get('currency_to') == 'SLL')? selected : none @endif>Sierra Leonean Leone</option>
                                    <option value="SGD" @if (Request::get('currency_to') == 'SGD')? selected : none @endif>Singapore Dollar</option>
                                    <option value="SKK" @if (Request::get('currency_to') == 'SKK')? selected : none @endif>Slovak Koruna</option>
                                    <option value="SBD" @if (Request::get('currency_to') == 'SBD')? selected : none @endif>Solomon Islands Dollar</option>
                                    <option value="SOS" @if (Request::get('currency_to') == 'SOS')? selected : none @endif>Somali Shilling</option>
                                    <option value="ZAR" @if (Request::get('currency_to') == 'ZAR')? selected : none @endif>South African Rand</option>
                                    <option value="KRW" @if (Request::get('currency_to') == 'KRW')? selected : none @endif>South Korean Won</option>
                                    <option value="XDR" @if (Request::get('currency_to') == 'XDR')? selected : none @endif>Special Drawing Rights</option>
                                    <option value="LKR" @if (Request::get('currency_to') == 'LKR')? selected : none @endif>Sri Lankan Rupee</option>
                                    <option value="SHP" @if (Request::get('currency_to') == 'SHP')? selected : none @endif>St. Helena Pound</option>
                                    <option value="SDG" @if (Request::get('currency_to') == 'SDG')? selected : none @endif>Sudanese Pound</option>
                                    <option value="SRD" @if (Request::get('currency_to') == 'SRD')? selected : none @endif>Surinamese Dollar</option>
                                    <option value="SZL" @if (Request::get('currency_to') == 'SZL')? selected : none @endif>Swazi Lilangeni</option>
                                    <option value="SEK" @if (Request::get('currency_to') == 'SEK')? selected : none @endif>Swedish Krona</option>
                                    <option value="CHF" @if (Request::get('currency_to') == 'CHF')? selected : none @endif>Swiss Franc</option>
                                    <option value="SYP" @if (Request::get('currency_to') == 'SYP')? selected : none @endif>Syrian Pound</option>
                                    <option value="STD" @if (Request::get('currency_to') == 'STD')? selected : none @endif>São Tomé and Príncipe Dobra</option>
                                    <option value="TJS" @if (Request::get('currency_to') == 'TJS')? selected : none @endif>Tajikistani Somoni</option>
                                    <option value="TZS" @if (Request::get('currency_to') == 'TZS')? selected : none @endif>Tanzanian Shilling</option>
                                    <option value="THB" @if (Request::get('currency_to') == 'THB')? selected : none @endif>Thai Baht</option>
                                    <option value="TOP" @if (Request::get('currency_to') == 'TOP')? selected : none @endif>Tongan pa'anga</option>
                                    <option value="TTD" @if (Request::get('currency_to') == 'TTD')? selected : none @endif>Trinidad & Tobago Dollar</option>
                                    <option value="TND" @if (Request::get('currency_to') == 'TND')? selected : none @endif>Tunisian Dinar</option>
                                    <option value="TRY" @if (Request::get('currency_to') == 'TRY')? selected : none @endif>Turkey Lira</option>
                                    <option value="TMT" @if (Request::get('currency_to') == 'TMT')? selected : none @endif>Turkmenistani Manat</option>
                                    <option value="UGX" @if (Request::get('currency_to') == 'UGX')? selected : none @endif>Ugandan Shilling</option>
                                    <option value="UAH" @if (Request::get('currency_to') == 'UAH')? selected : none @endif>Ukrainian Hryvnia</option>
                                    <option value="AED" @if (Request::get('currency_to') == 'AED')? selected : none @endif>United Arab Emirates Dirham</option>
                                    <option value="UYU" @if (Request::get('currency_to') == 'UYU')? selected : none @endif>Uruguayan Peso</option>
                                    <option value="USD" @if (Request::get('currency_to') == 'USD')? selected : none @endif>USA Dollar</option>
                                    <option value="UZS" @if (Request::get('currency_to') == 'UZS')? selected : none @endif>Uzbekistan Som</option>
                                    <option value="VUV" @if (Request::get('currency_to') == 'VUV')? selected : none @endif>Vanuatu Vatu</option>
                                    <option value="VEF" @if (Request::get('currency_to') == 'VEF')? selected : none @endif>Venezuelan BolÃ­var</option>
                                    <option value="VND" @if (Request::get('currency_to') == 'VND')? selected : none @endif>Vietnamese Dong</option>
                                    <option value="YER" @if (Request::get('currency_to') == 'YER')? selected : none @endif>Yemeni Rial</option>
                                    <option value="ZMK" @if (Request::get('currency_to') == 'ZMK')? selected : none @endif>Zambian Kwacha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" value="{{ Request::get('amount') }}" name="amount" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Converted Amount</label>
                                <input type="number" class="form-control" value="{{ $converted }}" id="amount" name="amount" disabled>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center mt-4">
                            <button type="submit" class="col-3 btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
