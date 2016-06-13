<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => "Polje :attribute mora biti prihvaćen.",
    "active_url"           => "Polje :attribute nije valjan URL.",
    "after"                => "Polje :attribute mora biti datum nakon :date.",
    "alpha"                => "Polje :attribute smije samo sadržavati slova.",
    "alpha_dash"           => "Polje :attribute smije samo sadržavati slova, brojeve i crtice.",
    "alpha_num"            => "Polje :attribute smije samo sadržavati slova i brojeve",
    "array"                => "Polje :attribute mora biti niz.",
    "before"               => "Polje :attribute mora biti prije :date.",
    "between"              => [
        "numeric" => "Polje :attribute mora biti između :min i :max.",
        "file"    => "Polje :attribute mora biti između :min i :max kilobytes.",
        "string"  => "Polje :attribute mora biti između :min i :max characters.",
        "array"   => "Polje :attribute mora biti između :min i :max items.",
    ],
    "boolean"              => "Polje :attribute mora biti pravo ili krivo.",
    "confirmed"            => "Polje :attribute nije jednako.",
    "date"                 => "Polje :attribute datum nije valjan.",
    "date_format"          => "Polje :attribute ne odgovara formatu :format.",
    "different"            => "Polje :attribute i :other must be different.",
    "digits"               => "Polje :attribute mora biti :digits digits.",
    "digits_between"       => "Polje :attribute mora biti između :min i :max digits.",
    "email"                => "Polje :attribute mora biti valjana email adresa",
    "filled"               => "Polje :attribute je obavezno.",
    "exjets"               => "Polje :attribute nije valjan.",
    "image"                => "Polje :attribute mora biti slika.",
    "in"                   => "Polje :attribute nije valjan.",
    "integer"              => "Polje :attribute mora biti broj.",
    "ip"                   => "Polje :attribute mora biti valjana IP adresa.",
    "max"                  => [
        "numeric" => "Polje :attribute ne smije sadržavati više od :max.",
        "file"    => "Polje :attribute ne smije sadržavati više od :max kilobajta.",
        "string"  => "Polje :attribute ne smije sadržavati više od :max znakova.",
        "array"   => "Polje :attribute ne smije imati više od :max stavki.",
    ],
    "mimes"                => "Polje :attribute mora biti datoteka type: :values.",
    "min"                  => [
        "numeric" => "Polje :attribute mora biti najmanje :min.",
        "file"    => "Polje :attribute mora biti najmanje :min kilobajta.",
        "string"  => "Polje :attribute mora biti najmanje :min znakova.",
        "array"   => "Polje :attribute must have najmanje :min stavki.",
    ],
    "not_in"               => "selected Polje :attribute je invalid.",
    "numeric"              => "Polje :attribute mora biti a number.",
    "regex"                => "Polje :attribute format nije valjan.",
    "required"             => "Polje :attribute je obavezno.",
    "required_if"          => "Polje :attribute je obavezno kada :other je :value.",
    "required_with"        => "Polje :attribute je obavezno kada :values je predstavljen.",
    "required_with_all"    => "Polje :attribute je obavezno kada :values je predstavljen.",
    "required_without"     => "Polje :attribute je obavezno kada :values je nije predstavljeno.",
    "required_without_all" => "Polje :attribute je obavezno kada su nijedna od :values predstavljena.",
    "same"                 => "Polje :attribute i :other moraju biti identični.",
    "size"                 => [
        "numeric" => "Polje :attribute mora biti :size.",
        "file"    => "Polje :attribute mora biti :size kilobajta.",
        "string"  => "Polje :attribute mora biti :size znakova.",
        "array"   => "Polje :attribute must contain :size stavki.",
    ],
    "unique"               => "Polje :attribute već postoji.",
    "url"                  => "Polje :attribute format nije valjan.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */


    'attributes' => [
        'description' => 'opis',
        'cover_image' => 'cover slika',
        'cover_image' => 'cover slika',
    ],
];




