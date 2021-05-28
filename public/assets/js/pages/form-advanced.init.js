jQuery(document).ready(function () {
    $(".select2").select2(), $(".select2-limiting").select2({
        maximumSelectionLength: 2
    })
}), $(".vertical-spin").TouchSpin({
    verticalbuttons: !0,
    verticalupclass: "ion-plus-round",
    verticaldownclass: "ion-minus-round"
}), $("input[name='demo1']").TouchSpin({
    min: 0,
    max: 100,
    step: .1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: "%"
}), $("input[name='demo2']").TouchSpin({
    min: -1e9,
    max: 1e9,
    stepinterval: 50,
    maxboostedstep: 1e7,
    prefix: "$"
}), $("input[name='demo3']").TouchSpin(), $("input[name='demo3_21']").TouchSpin({
    initval: 40
}), $("input[name='demo3_22']").TouchSpin({
    initval: 40
}), $("input[name='demo5']").TouchSpin({
    prefix: "pre",
    postfix: "post"
}), $("input[name='demo0']").TouchSpin({}), $('[data-plugin="switchery"]').each(function (a, e) {
    new Switchery($(this)[0], $(this).data())
}), $('[data-toggle="touchspin"]').each(function (a, e) {
    var n = $.extend({}, defaultOptions, $(e).data());
    $(e).TouchSpin(n)
}), $('[data-plugin="multiselect"]').multiSelect($(this).data()), $("#my_multi_select3").multiSelect({
    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
    afterInit: function (a) {
        var e = this,
            n = e.$selectableUl.prev(),
            i = e.$selectionUl.prev(),
            t = "#" + e.$container.attr("id") + " .ms-elem-selectable:not(.ms-selected)",
            o = "#" + e.$container.attr("id") + " .ms-elem-selection.ms-selected";
        e.qs1 = n.quicksearch(t).on("keydown", function (a) {
            if (40 === a.which) return e.$selectableUl.focus(), !1
        }), e.qs2 = i.quicksearch(o).on("keydown", function (a) {
            if (40 == a.which) return e.$selectionUl.focus(), !1
        })
    },
    afterSelect: function () {
        this.qs1.cache(), this.qs2.cache()
    },
    afterDeselect: function () {
        this.qs1.cache(), this.qs2.cache()
    }
}), $("input#defaultconfig").maxlength({
    warningClass: "badge badge-success",
    limitReachedClass: "badge badge-danger"
}), $("input#thresholdconfig").maxlength({
    threshold: 20,
    warningClass: "badge badge-success",
    limitReachedClass: "badge badge-danger"
}), $("input#alloptions").maxlength({
    alwaysShow: !0,
    separator: " out of ",
    preText: "You typed ",
    postText: " chars available.",
    validate: !0,
    warningClass: "badge badge-success",
    limitReachedClass: "badge badge-danger"
}), $("textarea#textarea").maxlength({
    alwaysShow: !0,
    warningClass: "badge badge-success",
    limitReachedClass: "badge badge-danger"
}), $("input#placement").maxlength({
    alwaysShow: !0,
    placement: "top-left",
    warningClass: "badge badge-success",
    limitReachedClass: "badge badge-danger"
}), $(function () {
    "use strict";
    var o = $.map(countries, function (a, e) {
        return {
            value: a,
            data: e
        }
    });
    $.mockjax({
        url: "*",
        responseTime: 2e3,
        response: function (a) {
            var e = a.data.query,
                n = e.toLowerCase(),
                i = new RegExp("\\b" + $.Autocomplete.utils.escapeRegExChars(n), "gi"),
                t = {
                    query: e,
                    suggestions: $.grep(o, function (a) {
                        return i.test(a.value)
                    })
                };
            this.responseText = JSON.stringify(t)
        }
    }), $("#autocomplete-ajax").autocomplete({
        lookup: o,
        lookupFilter: function (a, e, n) {
            return new RegExp("\\b" + $.Autocomplete.utils.escapeRegExChars(n), "gi").test(a.value)
        },
        onSelect: function (a) {
            $("#selction-ajax").html("You selected: " + a.value + ", " + a.data)
        },
        onHint: function (a) {
            $("#autocomplete-ajax-x").val(a)
        },
        onInvalidateSelection: function () {
            $("#selction-ajax").html("You selected: none")
        }
    });
    var a = $.map(["Anaheim Ducks", "Atlanta Thrashers", "Boston Bruins", "Buffalo Sabres", "Calgary Flames", "Carolina Hurricanes", "Chicago Blackhawks", "Colorado Avalanche", "Columbus Blue Jackets", "Dallas Stars", "Detroit Red Wings", "Edmonton OIlers", "Florida Panthers", "Los Angeles Kings", "Minnesota Wild", "Montreal Canadiens", "Nashville Predators", "New Jersey Devils", "New Rork Islanders", "New York Rangers", "Ottawa Senators", "Philadelphia Flyers", "Phoenix Coyotes", "Pittsburgh Penguins", "Saint Louis Blues", "San Jose Sharks", "Tampa Bay Lightning", "Toronto Maple Leafs", "Vancouver Canucks", "Washington Capitals"], function (a) {
            return {
                value: a,
                data: {
                    category: "NHL"
                }
            }
        }),
        e = $.map(["Atlanta Hawks", "Boston Celtics", "Charlotte Bobcats", "Chicago Bulls", "Cleveland Cavaliers", "Dallas Mavericks", "Denver Nuggets", "Detroit Pistons", "Golden State Warriors", "Houston Rockets", "Indiana Pacers", "LA Clippers", "LA Lakers", "Memphis Grizzlies", "Miami Heat", "Milwaukee Bucks", "Minnesota Timberwolves", "New Jersey Nets", "New Orleans Hornets", "New York Knicks", "Oklahoma City Thunder", "Orlando Magic", "Philadelphia Sixers", "Phoenix Suns", "Portland Trail Blazers", "Sacramento Kings", "San Antonio Spurs", "Toronto Raptors", "Utah Jazz", "Washington Wizards"], function (a) {
            return {
                value: a,
                data: {
                    category: "NBA"
                }
            }
        }),
        n = a.concat(e);
    $("#autocomplete").devbridgeAutocomplete({
        lookup: n,
        minChars: 1,
        onSelect: function (a) {
            $("#selection").html("You selected: " + a.value + ", " + a.data.category)
        },
        showNoSuggestionNotice: !0,
        noSuggestionNotice: "Sorry, no matching results",
        groupBy: "category"
    }), $("#autocomplete-custom-append").autocomplete({
        lookup: o,
        appendTo: "#suggestions-container"
    }), $("#autocomplete-dynamic").autocomplete({
        lookup: o
    })
});
var countries = {
    AD: "Andorra",
    A2: "Andorra Test",
    AE: "United Arab Emirates",
    AF: "Afghanistan",
    AG: "Antigua and Barbuda",
    AI: "Anguilla",
    AL: "Albania",
    AM: "Armenia",
    AN: "Netherlands Antilles",
    AO: "Angola",
    AQ: "Antarctica",
    AR: "Argentina",
    AS: "American Samoa",
    AT: "Austria",
    AU: "Australia",
    AW: "Aruba",
    AX: "Åland Islands",
    AZ: "Azerbaijan",
    BA: "Bosnia and Herzegovina",
    BB: "Barbados",
    BD: "Bangladesh",
    BE: "Belgium",
    BF: "Burkina Faso",
    BG: "Bulgaria",
    BH: "Bahrain",
    BI: "Burundi",
    BJ: "Benin",
    BL: "Saint Barthélemy",
    BM: "Bermuda",
    BN: "Brunei",
    BO: "Bolivia",
    BQ: "British Antarctic Territory",
    BR: "Brazil",
    BS: "Bahamas",
    BT: "Bhutan",
    BV: "Bouvet Island",
    BW: "Botswana",
    BY: "Belarus",
    BZ: "Belize",
    CA: "Canada",
    CC: "Cocos [Keeling] Islands",
    CD: "Congo - Kinshasa",
    CF: "Central African Republic",
    CG: "Congo - Brazzaville",
    CH: "Switzerland",
    CI: "Côte d’Ivoire",
    CK: "Cook Islands",
    CL: "Chile",
    CM: "Cameroon",
    CN: "China",
    CO: "Colombia",
    CR: "Costa Rica",
    CS: "Serbia and Montenegro",
    CT: "Canton and Enderbury Islands",
    CU: "Cuba",
    CV: "Cape Verde",
    CX: "Christmas Island",
    CY: "Cyprus",
    CZ: "Czech Republic",
    DD: "East Germany",
    DE: "Germany",
    DJ: "Djibouti",
    DK: "Denmark",
    DM: "Dominica",
    DO: "Dominican Republic",
    DZ: "Algeria",
    EC: "Ecuador",
    EE: "Estonia",
    EG: "Egypt",
    EH: "Western Sahara",
    ER: "Eritrea",
    ES: "Spain",
    ET: "Ethiopia",
    FI: "Finland",
    FJ: "Fiji",
    FK: "Falkland Islands",
    FM: "Micronesia",
    FO: "Faroe Islands",
    FQ: "French Southern and Antarctic Territories",
    FR: "France",
    FX: "Metropolitan France",
    GA: "Gabon",
    GB: "United Kingdom",
    GD: "Grenada",
    GE: "Georgia",
    GF: "French Guiana",
    GG: "Guernsey",
    GH: "Ghana",
    GI: "Gibraltar",
    GL: "Greenland",
    GM: "Gambia",
    GN: "Guinea",
    GP: "Guadeloupe",
    GQ: "Equatorial Guinea",
    GR: "Greece",
    GS: "South Georgia and the South Sandwich Islands",
    GT: "Guatemala",
    GU: "Guam",
    GW: "Guinea-Bissau",
    GY: "Guyana",
    HK: "Hong Kong SAR China",
    HM: "Heard Island and McDonald Islands",
    HN: "Honduras",
    HR: "Croatia",
    HT: "Haiti",
    HU: "Hungary",
    ID: "Indonesia",
    IE: "Ireland",
    IL: "Israel",
    IM: "Isle of Man",
    IN: "India",
    IO: "British Indian Ocean Territory",
    IQ: "Iraq",
    IR: "Iran",
    IS: "Iceland",
    IT: "Italy",
    JE: "Jersey",
    JM: "Jamaica",
    JO: "Jordan",
    JP: "Japan",
    JT: "Johnston Island",
    KE: "Kenya",
    KG: "Kyrgyzstan",
    KH: "Cambodia",
    KI: "Kiribati",
    KM: "Comoros",
    KN: "Saint Kitts and Nevis",
    KP: "North Korea",
    KR: "South Korea",
    KW: "Kuwait",
    KY: "Cayman Islands",
    KZ: "Kazakhstan",
    LA: "Laos",
    LB: "Lebanon",
    LC: "Saint Lucia",
    LI: "Liechtenstein",
    LK: "Sri Lanka",
    LR: "Liberia",
    LS: "Lesotho",
    LT: "Lithuania",
    LU: "Luxembourg",
    LV: "Latvia",
    LY: "Libya",
    MA: "Morocco",
    MC: "Monaco",
    MD: "Moldova",
    ME: "Montenegro",
    MF: "Saint Martin",
    MG: "Madagascar",
    MH: "Marshall Islands",
    MI: "Midway Islands",
    MK: "Macedonia",
    ML: "Mali",
    MM: "Myanmar [Burma]",
    MN: "Mongolia",
    MO: "Macau SAR China",
    MP: "Northern Mariana Islands",
    MQ: "Martinique",
    MR: "Mauritania",
    MS: "Montserrat",
    MT: "Malta",
    MU: "Mauritius",
    MV: "Maldives",
    MW: "Malawi",
    MX: "Mexico",
    MY: "Malaysia",
    MZ: "Mozambique",
    NA: "Namibia",
    NC: "New Caledonia",
    NE: "Niger",
    NF: "Norfolk Island",
    NG: "Nigeria",
    NI: "Nicaragua",
    NL: "Netherlands",
    NO: "Norway",
    NP: "Nepal",
    NQ: "Dronning Maud Land",
    NR: "Nauru",
    NT: "Neutral Zone",
    NU: "Niue",
    NZ: "New Zealand",
    OM: "Oman",
    PA: "Panama",
    PC: "Pacific Islands Trust Territory",
    PE: "Peru",
    PF: "French Polynesia",
    PG: "Papua New Guinea",
    PH: "Philippines",
    PK: "Pakistan",
    PL: "Poland",
    PM: "Saint Pierre and Miquelon",
    PN: "Pitcairn Islands",
    PR: "Puerto Rico",
    PS: "Palestinian Territories",
    PT: "Portugal",
    PU: "U.S. Miscellaneous Pacific Islands",
    PW: "Palau",
    PY: "Paraguay",
    PZ: "Panama Canal Zone",
    QA: "Qatar",
    RE: "Réunion",
    RO: "Romania",
    RS: "Serbia",
    RU: "Russia",
    RW: "Rwanda",
    SA: "Saudi Arabia",
    SB: "Solomon Islands",
    SC: "Seychelles",
    SD: "Sudan",
    SE: "Sweden",
    SG: "Singapore",
    SH: "Saint Helena",
    SI: "Slovenia",
    SJ: "Svalbard and Jan Mayen",
    SK: "Slovakia",
    SL: "Sierra Leone",
    SM: "San Marino",
    SN: "Senegal",
    SO: "Somalia",
    SR: "Suriname",
    ST: "São Tomé and Príncipe",
    SU: "Union of Soviet Socialist Republics",
    SV: "El Salvador",
    SY: "Syria",
    SZ: "Swaziland",
    TC: "Turks and Caicos Islands",
    TD: "Chad",
    TF: "French Southern Territories",
    TG: "Togo",
    TH: "Thailand",
    TJ: "Tajikistan",
    TK: "Tokelau",
    TL: "Timor-Leste",
    TM: "Turkmenistan",
    TN: "Tunisia",
    TO: "Tonga",
    TR: "Turkey",
    TT: "Trinidad and Tobago",
    TV: "Tuvalu",
    TW: "Taiwan",
    TZ: "Tanzania",
    UA: "Ukraine",
    UG: "Uganda",
    UM: "U.S. Minor Outlying Islands",
    US: "United States",
    UY: "Uruguay",
    UZ: "Uzbekistan",
    VA: "Vatican City",
    VC: "Saint Vincent and the Grenadines",
    VD: "North Vietnam",
    VE: "Venezuela",
    VG: "British Virgin Islands",
    VI: "U.S. Virgin Islands",
    VN: "Vietnam",
    VU: "Vanuatu",
    WF: "Wallis and Futuna",
    WK: "Wake Island",
    WS: "Samoa",
    YD: "People's Democratic Republic of Yemen",
    YE: "Yemen",
    YT: "Mayotte",
    ZA: "South Africa",
    ZM: "Zambia",
    ZW: "Zimbabwe",
    ZZ: "Unknown or Invalid Region"
};