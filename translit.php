public static function translitCMU55($value)
{
    /**
     *  Транслітерація українського алфавіту латиницею відповідно до Постанови КМУ від 27 січня 2010 р. N 55
     *  Ukrainian transliteration according to the CMU resolution of January 27, 2010 N 55
     *  Транслитерация украинского алфавита латиницей в соответствии с Постановлением КМУ от 27 января 2010 г. N 55
     *  Source of the rules: https://zakon.rada.gov.ua/laws/show/55-2010-п
     *  Keywords: php; транслит имени на паспорт, українська транслітерація; украинская транслитерация, ukrainian transliteration
     *  Created by Dmytro Novikov
    **/

    $rules = array(

        // specific rules
        "Зг"=>"Zgh",    "зг"=>"zgh",    "'" => '',

        // capital letters
        "А" => "A",     "Б" => "B",     "В" => "V",     "Г" => "H",     "Ґ" => "G",
        "Д" => "D",     "Е" => "E",     "Є" => "Ye",    "Ж" => "Zh",    "З" => "Z",
        "И" => "Y",     "І" => "I",     "Ї" => "Yi",    "Й" => "Y",     "К" => "K",
        "Л" => "L",     "М" => "M",     "Н" => "N",     "О" => "O",     "П" => "P",
        "Р" => "R",     "С" => "S",     "Т" => "T",     "У" => "U",     "Ф" => "F",
        "Х" => "Kh",    "Ц" => "Ts",    "Ч" => "Ch",    "Ш" => "Sh",    "Щ" => "Shch",
        "Ю" => "Yu",    "Я" => "Ya",

        // small letters
        "а" => "a",     "б" => "b",     "в" => "v",     "г" => "h",     "ґ" => "g",
        "д" => "d",     "е" => "e",     "є" => "ie",    "ж" => "zh",    "з" => "z",
        "и" => "y",     "і" => "i",     "ї" => "i",     "й" => "i",     "к" => "k",
        "л" => "l",     "м" => "m",     "н" => "n",     "о" => "o",     "п" => "p",
        "р" => "r",     "с" => "s",     "т" => "t",     "у" => "u",     "ф" => "f",
        "х" => "kh",    "ц" => "ts",    "ч" => "ch",    "ш" => "sh",    "щ" => "shch",
        "ю" => "iu",    "я" => "ia",
    );

    return strtr($value,$rules);

}
