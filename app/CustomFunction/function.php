<?php
/**
 * Created by Pigeon Soft.
 * User: Ariful Islam
 * Date: 15-Aug-18
 * Time: 4:19 PM
 */
if (!function_exists('en2bn')) {
    function en2bn($number)
    {
        $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        return str_replace($en, $bn, $number);
    }

}
if (!function_exists('txten2bn')) {
    function txten2bn($text)
    {
        $bn = array(
            "আজেরবাইজান",
            "আফগানিস্তান",
            "আল্বেনিয়া",
            "আলজেরিয়া",
            "এ্যান্ডোরা",
            "অ্যান্টিগুয়া ও বার্বুডা",
            "আর্জিণ্টিনা",
            "আরমেনিয়া",
            "আরুবা",
            "অস্ট্রেলিয়া",
            "অস্ট্রিয়া",
            "আজেরবাইজান",
            "বাহামা দ্য",
            "বাহরাইন",
            "বাংলাদেশ",
            "বার্বাডোস",
            "বেলারুশ",
            "বেলজিয়াম",
            "বেনিন",
            "ভুটান",
            "বোলিভিয়া",
            "বসনিয়া ও হার্জেগোভিনা",
            "ব্রাজিল",
            "ব্রুনেই",
            "বুলগেরিয়া",
            "বুর্কিনা ফাসো",
            "কাম্বোজ",
            "ক্যামেরুন",
            "কানাডা",
            "কেম্যান দ্বীপপুঞ্জ",
            "মধ্য আফ্রিকান প্রজাতন্ত্র",
            "মত্স্যবিশেষ",
            "চ্যানেল দ্বীপপুঞ্জ",
            "চিলি",
            "চীন",
            "কলোমবিয়া",
            "কঙ্গো (ব্রাজাভিল)",
            "কঙ্গো (কিনসাসা)",
            "কোস্টারিকা",
            "আইভরি কোস্ট",
            "ক্রোয়েশিয়া",
            "প্রমোদ তরী",
            "কুবা",
            "কুরাসাও",
            "সাইপ্রাসদ্বিপ",
            "চেক প্রজাতন্ত্র",
            "Czechia",
            "ডেন্মার্ক্",
            "জিবুতি",
            "ডোমিনিকান প্রজাতন্ত্র",
            "ইকোয়াডর",
            "মিশর",
            "এল সালভাদর",
            "নিরক্ষীয় গিনি",
            "এস্তোনিয়াদেশ",
            "Eswatini",
            "ইথিওপিয়া",
            "ফারো দ্বীপপুঞ্জ",
            "ফিজি",
            "ফিনল্যাণ্ড",
            "ফ্রান্স",
            "ফরাসি গায়ানা",
            "গাবোনবাদ্যযন্ত্র",
            "গাম্বিয়া দ্য",
            "জর্জিয়া",
            "জার্মানি",
            "ঘানা",
            "জিব্রালটার",
            "গ্রীস",
            "গ্রীনল্যাণ্ড",
            "গুয়াডেলোপ",
            "গুয়াম",
            "গুয়াটেমালা",
            "গেঁজি",
            "গিনি",
            "গায়ানা",
            "সুদৃষ্টিতে দেখ",
            "হন্ডুরাস",
            "হংকং",
            "হংকং এসএআর",
            "হাঙ্গেরি",
            "আইস্ল্যাণ্ড",
            "ভারত",
            "ইন্দোনেশিয়া",
            "ইরান",
            "ইরান (ইসলামি প্রজাতন্ত্র)",
            "ইরাক",
            "আয়ারল্যাণ্ড",
            "ইস্রায়েল",
            "ইতালি",
            "আইভরি কোস্ট",
            "জ্যামাইকা",
            "জাপান",
            "জার্সি",
            "জর্ডন",
            "কাজাকস্থান",
            "কেনিয়া",
            "কোরিয়া দক্ষিণ",
            "কসোভো",
            "কুয়েত",
            "কিরগিজস্তান",
            "ল্যাট্ভিআ",
            "লেবানন",
            "লাইবেরিয়া",
            "লিচেনস্টেইন",
            "লিত্ভা",
            "লাক্সেমবার্গ",
            "ম্যাকাও এসএআর",
            "ম্যাকাও",
            "চীন পটভূমি",
            "মাল্যাশিয়া",
            "মালদ্বীপ",
            "মালটা",
            "মার্টিনিক",
            "মরিতানিয়া",
            "মরিশাস",
            "মায়োত্তে",
            "মক্সিকো",
            "মোল্দাভিয়া",
            "মোনাকো",
            "মঙ্গোলিআ",
            "মন্টিনিগ্রো",
            "মরক্কো",
            "নামিবিয়া",
            "নেপাল",
            "নেদারল্যান্ডস",
            "নিউজিল্যান্ড",
            "নিক্যার্যাগিউআদেশ",
            "নাইজিরিয়াদেশ",
            "উত্তর আয়ারল্যান্ড",
            "উত্তর ম্যাসাডোনিয়া",
            "নরওয়ে",
            "দখলকৃত ফিলিস্তিনি অঞ্চল",
            "ওমান",
            "অন্যান্য",
            "পাকিস্তান",
            "প্যালেস্টাইন",
            "পানামা",
            "প্যারাগুয়ে",
            "পেরু",
            "ফিলিপাইন",
            "পোল্যান্ড",
            "পর্তুগাল",
            "পুয়ের্টোরিকো",
            "কাতার",
            "আয়ারল্যান্ড",
            "দক্ষিণ কোরিয়া",
            "মোল্দাভিয়া প্রজাতন্ত্রের",
            "রিপাবলিক অফ কঙ্গো",
            "পুনর্মিলন",
            "রুমানিয়া",
            "রাশিয়া",
            "রাশিয়ান ফেডারেশন",
            "রুয়ান্ডা",
            "সেইন্ট বার্তলেমি",
            "সেন্ট লুসিয়া",
            "সেন্ট মার্টিন",
            "সেন্ট ভিনসেন্ট ও গ্রেনাডাইন দ্বীপপুঞ্জ",
            "সান মারিনো",
            "সৌদি আরব",
            "সেনেগাল",
            "সার্বিয়া",
            "সিসিলি",
            "সিঙ্গাপুর",
            "শ্লোভাকিয়া",
            "স্লোভানিয়া",
            "সোমালিয়া",
            "দক্ষিন আফ্রিকা",
            "দক্ষিণ কোরিয়া",
            "স্পেন",
            "শ্রীলংকা",
            "সেন্ট মার্টিন",
            "সুদান",
            "সুরিনাম",
            "সুইডেন",
            "সুইজর্লণ্ড",
            "তাইপেই এবং শহরতলি",
            "তাইওয়ান",
            "তাইওয়ান *",
            "তাঞ্জানিয়া",
            "থাইল্যান্ড",
            "বাহামা",
            "গাম্বিয়াদেশ",
            "যাও",
            "ত্রিনিদাদ ও টোবাগো",
            "টিউনিস্",
            "তুরস্ক",
            "যুক্তরাজ্য",
            "ইউক্রেইন্",
            "সংযুক্ত আরব আমিরাত",
            "যুক্তরাজ্য",
            "উরুগুয়ে",
            "আমাদের",
            "উজ্বেকিস্থান",
            "ভ্যাটিকান সিটি",
            "ভেনেজুয়েলা",
            "ভিয়েতনাম",
            "ভিয়েতনাম",
            "জাম্বিয়া",
        );
        $en = array(
            "Azerbaijan",
            "Afghanistan",
            "Albania",
            "Algeria",
            "Andorra",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Aruba",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas The",
            "Bahrain",
            "Bangladesh",
            "Barbados",
            "Belarus",
            "Belgium",
            "Benin",
            "Bhutan",
            "Bolivia",
            "Bosnia and Herzegovina",
            "Brazil",
            "Brunei",
            "Bulgaria",
            "Burkina Faso",
            "Cambodia",
            "Cameroon",
            "Canada",
            "Cayman Islands",
            "Central African Republic",
            "Chad",
            "Channel Islands",
            "Chile",
            "China",
            "Colombia",
            "Congo (Brazzaville)",
            "Congo (Kinshasa)",
            "Costa Rica",
            "Cote d'Ivoire",
            "Croatia",
            "Cruise Ship",
            "Cuba",
            "Curacao",
            "Cyprus",
            "Czech Republic",
            "Czechia",
            "Denmark",
            "Djibouti",
            "Dominican Republic",
            "Ecuador",
            "Egypt",
            "El Salvador",
            "Equatorial Guinea",
            "Estonia",
            "Eswatini",
            "Ethiopia",
            "Faroe Islands",
            "Fiji",
            "Finland",
            "France",
            "French Guiana",
            "Gabon",
            "Gambia The",
            "Georgia",
            "Germany",
            "Ghana",
            "Gibraltar",
            "Greece",
            "Greenland",
            "Guadeloupe",
            "Guam",
            "Guatemala",
            "Guernsey",
            "Guinea",
            "Guyana",
            "Holy See",
            "Honduras",
            "Hong Kong",
            "Hong Kong SAR",
            "Hungary",
            "Iceland",
            "India",
            "Indonesia",
            "Iran",
            "Iran (Islamic Republic of)",
            "Iraq",
            "Ireland",
            "Israel",
            "Italy",
            "Ivory Coast",
            "Jamaica",
            "Japan",
            "Jersey",
            "Jordan",
            "Kazakhstan",
            "Kenya",
            "Korea South",
            "Kosovo",
            "Kuwait",
            "Kyrgyzstan",
            "Latvia",
            "Lebanon",
            "Liberia",
            "Liechtenstein",
            "Lithuania",
            "Luxembourg",
            "Macao SAR",
            "Macau",
            "Mainland China",
            "Malaysia",
            "Maldives",
            "Malta",
            "Martinique",
            "Mauritania",
            "Mauritius",
            "Mayotte",
            "Mexico",
            "Moldova",
            "Monaco",
            "Mongolia",
            "Montenegro",
            "Morocco",
            "Namibia",
            "Nepal",
            "Netherlands",
            "New Zealand",
            "Nicaragua",
            "Nigeria",
            "North Ireland",
            "North Macedonia",
            "Norway",
            "occupied Palestinian territory",
            "Oman",
            "Others",
            "Pakistan",
            "Palestine",
            "Panama",
            "Paraguay",
            "Peru",
            "Philippines",
            "Poland",
            "Portugal",
            "Puerto Rico",
            "Qatar",
            "Republic of Ireland",
            "Republic of Korea",
            "Republic of Moldova",
            "Republic of the Congo",
            "Reunion",
            "Romania",
            "Russia",
            "Russian Federation",
            "Rwanda",
            "Saint Barthelemy",
            "Saint Lucia",
            "Saint Martin",
            "Saint Vincent and the Grenadines",
            "San Marino",
            "Saudi Arabia",
            "Senegal",
            "Serbia",
            "Seychelles",
            "Singapore",
            "Slovakia",
            "Slovenia",
            "Somalia",
            "South Africa",
            "South Korea",
            "Spain",
            "Sri Lanka",
            "St. Martin",
            "Sudan",
            "Suriname",
            "Sweden",
            "Switzerland",
            "Taipei and environs",
            "Taiwan",
            "Taiwan*",
            "Tanzania",
            "Thailand",
            "The Bahamas",
            "The Gambia",
            "Togo",
            "Trinidad and Tobago",
            "Tunisia",
            "Turkey",
            "UK",
            "Ukraine",
            "United Arab Emirates",
            "United Kingdom",
            "Uruguay",
            "US",
            "Uzbekistan",
            "Vatican City",
            "Venezuela",
            "Viet Nam",
            "Vietnam",
            "Zambia",

        );
        return str_replace($en, $bn, $text);
    }

}
