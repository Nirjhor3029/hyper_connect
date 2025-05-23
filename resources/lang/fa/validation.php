<?php

return [
    'accepted'         => 'این: باید پذیرفته شود',
    'active_url'       => 'این: ویژگی یک URL معتبر نیست.',
    'after'            => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'   => ':attribute باید تاریخی باشد که بعد از :date یا برابر با آن باشد.',
    'alpha'            => ':attribute فقط می‌تواند حروف را شامل شود.',
    'alpha_dash'       => ':attribute تنها می‌تواند شامل حروف، اعداد و خط فاصله باشد.',
    'alpha_num'        => ':attribute فقط می‌تواند شامل حروف و اعداد باشد.',
    'latin'            => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'latin_dash_space' => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'            => ':attribute باید یک آرایه باشد.',
    'before'           => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal'  => ':attribute باید تاریخی باشد که قبل از :date یا برابر با آن باشد.',
    'between'          => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max نویسه باشد.',
        'array'   => ':attribute باید بین :min و :max مورد داشته باشد.',
    ],
    'boolean'          => 'فیلد :attribute باید درست یا نادرست باشد.',
    'confirmed'        => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'The :attribute is not a valid date.',
    'date_equals'      => 'The :attribute must be a date equal to :date.',
    'date_format'      => 'The :attribute does not match the format :format.',
    'different'        => 'The :attribute and :other must be different.',
    'digits'           => 'The :attribute must be :digits digits.',
    'digits_between'   => 'The :attribute must be between :min and :max digits.',
    'dimensions'       => 'The :attribute has invalid image dimensions.',
    'distinct'         => 'The :attribute field has a duplicate value.',
    'email'            => 'The :attribute must be a valid email address.',
    'ends_with'        => 'The :attribute must end with one of the following: :values.',
    'exists'           => 'The selected :attribute is invalid.',
    'file'             => 'The :attribute must be a file.',
    'filled'           => 'The :attribute field must have a value.',
    'gt'               => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => 'The :attribute must be an image.',
    'in'       => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer'  => 'The :attribute must be an integer.',
    'ip'       => 'The :attribute must be a valid IP address.',
    'ipv4'     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'     => 'The :attribute must be a valid IPv6 address.',
    'json'     => 'The :attribute must be a valid JSON string.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'     => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min'       => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'password'             => 'The password is incorrect.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'قالب :attribute نامعتبر است.',
    'required'             => 'الزامی است :attribute فیلد',
    'required_if'          => 'فیلد :attribute الزامی است زمانی که :other برابر با :value باشد.',
    'required_unless'      => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with'        => 'فیلد :attribute زمانی که :values وجود دارد الزامی است.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute باید :size باشد.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => ':attribute باید :size کاراکتر باشد.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string'      => ':attribute باید یک رشته باشد.',
    'timezone'    => ':attribute باید یک منطقه معتبر باشد.',
    'unique'      => ':attribute قبلاً گرفته شده است.',
    'uploaded'    => 'این فرمت :attribute آپلود نشد.',
    'url'         => 'این فرمت :attribute نا معتبر است.',
    'uuid'        => 'این مقدار :attribute UUID نیست .',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'The :attribute contains reserved word',
    'dont_allow_first_letter_number' => 'The \":input\" field can\'t have first letter as a number',
    'exceeds_maximum_number'         => 'The :attribute exceeds maximum model length',
    'db_column'                      => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dash and cannot start with number.',
    'attributes'                     => [],

];
