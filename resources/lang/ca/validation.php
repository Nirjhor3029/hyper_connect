<?php

return [
    'accepted'         => ':attribute ha de ser acceptat.',
    'active_url'       => ':attribute no és una adreça vàlida.',
    'after'            => ':attribute ha de ser una data més recent que :date.',
    'after_or_equal'   => ':attribute ha de ser una data posterior o igual a :date.',
    'alpha'            => ':attribute només pot contenir lletres.',
    'alpha_dash'       => ':attribute només pot contenir lletres, números i guions',
    'alpha_num'        => ':attribute només pot contenir lletres i números',
    'latin'            => ':attribute només pot contenir lletres bàsiques de l\'alfabet llatí ISO.',
    'latin_dash_space' => ':attribute només pot contenir lletres de l\'alfabet llatí bàsic ISO, números, apòstrofs, guions i espais.',
    'array'            => ':attribute ha de ser una matriu',
    'before'           => ':attribute ha  de ser una data anterior a :date',
    'before_or_equal'  => ':attribute ha de ser una data anterior o igual a :date.',
    'between'          => [
        'numeric' => ':attribute ha de tenir un valor entre :min i :max',
        'file'    => ':attribute ha de tenir una mida entre :min i :max kilobytes',
        'string'  => ':attribute ha de tenir entre :min i :max caràcters',
        'array'   => ':attribute ha de tenir entre :min i :max elements',
    ],
    'boolean'          => 'El camp :attribute ha de ser veritat o fals',
    'confirmed'        => 'la confirmació de :attribute no coincideix',
    'current_password' => 'El password és incorrecte',
    'date'             => ':attribute no és una data vàlida',
    'date_equals'      => ':attribute ha de ser una data igual a :date.',
    'date_format'      => ':attribute no coincideix amb el format :format',
    'different'        => ':attribute i :other han de ser diferents',
    'digits'           => ':attribute ha de tenir :digits digits',
    'digits_between'   => ':attribute ha de estar entre :min i :max digits',
    'dimensions'       => 'Les dimensions de la imatge :attribute són invàlides',
    'distinct'         => 'El valor del camp :attribute està duplicat',
    'email'            => ':attribute ha de ser una adreça de correu vàlida',
    'ends_with'        => ':attribute ha d\'acabar amb un dels següents: :values.',
    'exists'           => 'El :attribute seleccionat és invàlid',
    'file'             => ':attribute ha de ser un fitxer',
    'filled'           => 'el camp :attribute es obligatori',
    'gt'               => [
        'numeric' => ':attribute ha de ser més gran que :value.',
        'file'    => ':attribute ha de ser més gran que :value kilobytes.',
        'string'  => ':attribute ha de ser més gran que els caràcters :value.',
        'array'   => ':attribute ha de tenir més de :value elements.',
    ],
    'gte' => [
        'numeric' => ':attribute ha de ser més gran o igual que :value.',
        'file'    => ':attribute ha de ser més gran o igual que :value kilobytes.',
        'string'  => ':attribute ha de ser més gran o igual que els caràcters :value.',
        'array'   => ':attribute ha de tenir elements :value o més.',
    ],
    'image'    => ':attribute ha de ser una imatge',
    'in'       => 'El :attribute seleccionat és invàlid',
    'in_array' => 'El camp :attribute no existeix a :other',
    'integer'  => ':attribute ha de ser un enter',
    'ip'       => ':attribute ha de ser una IP vàlida',
    'ipv4'     => ':attribute ha de ser una adreça IPv4 vàlida.',
    'ipv6'     => ':attribute ha de ser una adreça IPv6 vàlida',
    'json'     => ':attribute ha de ser un JSON vàlid',
    'lt'       => [
        'numeric' => ':attribute ha de ser inferior a :value.',
        'file'    => ':attribute ha de ser inferior a :value kilobytes.',
        'string'  => ':attribute ha de tenir menys de caràcters :value.',
        'array'   => ':attribute ha de tenir menys de :value elements.',
    ],
    'lte' => [
        'numeric' => ':attribute ha de ser menor o igual que :value.',
        'file'    => ':attribute ha de ser menor o igual a :value kilobytes.',
        'string'  => ':attribute ha de ser menor o igual que els  valors :value.',
        'array'   => ':attribute no ha de tenir més de :value elements.',
    ],
    'max' => [
        'numeric' => ':attribute no pot ser més gran que :max',
        'file'    => ':attribute no pot ser més gran de :max kilobytes',
        'string'  => ':attribute no pot tenir més de :max caràcters',
        'array'   => ':attribute no pot tenir més de :max elements',
    ],
    'mimes'     => ':attribute ha de ser un fitxer del tipus :values',
    'mimetypes' => ':attribute ha de ser un fitxer del tipus :values',
    'min'       => [
        'numeric' => ':attribute ha de ser almenys :min',
        'file'    => ':attribute ha de tenir almenys :min kilobytes',
        'string'  => ':attribute ha de tenir almenys :min caràcters',
        'array'   => ':attribute ha de tenir almenys :min elements',
    ],
    'not_in'               => 'El :attribute seleccionat és invàlid',
    'not_regex'            => 'El format de :attribute és invàlid',
    'numeric'              => ':attribute ha de ser un número',
    'password'             => 'La contrasenya és incorrecte',
    'present'              => 'El camp :attribute ha d\'estar present',
    'regex'                => 'El format de :attribute és invàlid',
    'required'             => 'El camp :attribute es requereix',
    'required_if'          => 'El camp :attribute es requereix quan :other és :value',
    'required_unless'      => 'El camp :attribute es rquereix a menys que :other estigui dins :values',
    'required_with'        => 'El camp :attribute es requereix quan :values existeixen',
    'required_with_all'    => 'El camp :attribute es requereix quan :values existeixen',
    'required_without'     => 'El camp :attribute es requereix quan no hi cap dels :values',
    'required_without_all' => 'El camp :attribute es requereix quan cap dels :values està present',
    'same'                 => ':attribute i :other han de coincidir',
    'size'                 => [
        'numeric' => ':attribute ha de ser :size',
        'file'    => ':attribute ha de ser de :size kilobytes',
        'string'  => ':attribute ha de tenir :size caràcters',
        'array'   => ':attribute ha de contenir :size elements',
    ],
    'starts_with' => ':attribute ha de començar amb un dels seguents valors: :values.',
    'string'      => ':attribute ha de ser una cadena',
    'timezone'    => ':attribute ha de ser una zona vàlida',
    'unique'      => ':attribute ja ha estat agafat',
    'uploaded'    => 'Error al pujar :attribute',
    'url'         => 'El format de :attribute és invàlid',
    'uuid'        => ':attribute ha de ser un UUID vàlid.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute conté la paraula reservada',
    'dont_allow_first_letter_number' => 'El camp \":input\" no pot tenir la primera lletra com a número',
    'exceeds_maximum_number'         => ':attribute supera la longitud màxima del model',
    'db_column'                      => ':attribute només pot contenir lletres de l\'alfabet llatí bàsic ISO, números, guions i no pot començar amb un número.',
    'attributes'                     => [],

];
