<?php

declare(strict_types=1);

return [
    'accepted'             => 'שדה :attribute חייב להיות מסומן.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'שדה :attribute הוא לא כתובת אתר תקנית.',
    'after'                => 'שדה :attribute חייב להיות תאריך אחרי :date.',
    'after_or_equal'       => 'שדה :attribute חייב להיות תאריך מאוחר או שווה ל :date.',
    'alpha'                => 'שדה :attribute יכול להכיל אותיות בלבד.',
    'alpha_dash'           => 'שדה :attribute יכול להכיל אותיות, מספרים ומקפים בלבד.',
    'alpha_num'            => 'שדה :attribute יכול להכיל אותיות ומספרים בלבד.',
    'array'                => 'שדה :attribute חייב להיות מערך.',
    'attached'             => 'ה-:attribute הזה כבר מחובר.',
    'before'               => 'שדה :attribute חייב להיות תאריך לפני :date.',
    'before_or_equal'      => 'שדה :attribute חייב להיות תאריך מוקדם או שווה ל :date.',
    'between'              => [
        'array'   => 'שדה :attribute חייב להיות בין :min ל-:max פריטים.',
        'file'    => 'שדה :attribute חייב להיות בין :min ל-:max קילובייטים.',
        'numeric' => 'שדה :attribute חייב להיות בין :min ל-:max.',
        'string'  => 'שדה :attribute חייב להיות בין :min ל-:max תווים.',
    ],
    'boolean'              => 'שדה :attribute חייב להיות אמת או שקר.',
    'confirmed'            => 'שדה האישור של :attribute לא תואם.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'שדה :attribute אינו תאריך תקני.',
    'date_equals'          => 'על ה :attribute להיות תאריך שווה ל- :date.',
    'date_format'          => 'שדה :attribute לא תואם את הפורמט :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'שדה :attribute ושדה :other חייבים להיות שונים.',
    'digits'               => 'שדה :attribute חייב להיות בעל :digits ספרות.',
    'digits_between'       => 'שדה :attribute חייב להיות בין :min ו-:max ספרות.',
    'dimensions'           => 'שדה :attribute מימדי התמונה לא תקינים',
    'distinct'             => 'שדה :attribute קיים ערך כפול.',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => 'שדה :attribute חייב להיות כתובת אימייל תקנית.',
    'ends_with'            => 'שדה :attribute חייב להסתיים באחד מהבאים: :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'בחירת ה-:attribute אינה תקפה.',
    'file'                 => 'שדה :attribute חייב להיות קובץ.',
    'filled'               => 'שדה :attribute הוא חובה.',
    'gt'                   => [
        'array'   => 'על ה :attribute לכלול יותר מ- :value פריטים.',
        'file'    => 'על ה :attribute להיות גדול יותר מ- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות גדול יותר מ- :value.',
        'string'  => 'על ה :attribute להיות גדול יותר מ- :value תווים.',
    ],
    'gte'                  => [
        'array'   => 'ה :attribute חייב לכלול :value פריטים או יותר.',
        'file'    => 'על ה :attribute להיות גדול יותר או שווה ל- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות גדול יותר או שווה ל- :value.',
        'string'  => 'על ה :attribute להיות גדול יותר או שווה ל- :value תווים.',
    ],
    'image'                => 'שדה :attribute חייב להיות תמונה.',
    'in'                   => 'בחירת ה-:attribute אינה תקפה.',
    'in_array'             => 'שדה :attribute לא קיים ב:other.',
    'integer'              => 'שדה :attribute חייב להיות מספר שלם.',
    'ip'                   => 'שדה :attribute חייב להיות כתובת IP תקנית.',
    'ipv4'                 => 'שדה :attribute חייב להיות כתובת IPv4 תקנית.',
    'ipv6'                 => 'שדה :attribute חייב להיות כתובת IPv6 תקנית.',
    'json'                 => 'שדה :attribute חייב להיות מחרוזת JSON תקנית.',
    'lowercase'            => 'The :attribute must be lowercase.',
    'lt'                   => [
        'array'   => 'על ה :attribute לכלול פחות מ- :value פריטים.',
        'file'    => 'על ה :attribute להיות קטן יותר מ- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות נמוך יותר מ- :value.',
        'string'  => 'על ה :attribute להכיל פחות מ- :value תווים.',
    ],
    'lte'                  => [
        'array'   => 'ה :attribute לא יכול לכלול יותר מאשר :value פריטים.',
        'file'    => 'על ה :attribute להיות קטן יותר או שווה ל- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות נמוך או שווה ל- :value.',
        'string'  => 'על ה :attribute להכיל :value תווים או פחות.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'שדה :attribute לא יכול להכיל יותר מ-:max פריטים.',
        'file'    => 'שדה :attribute לא יכול להיות גדול מ-:max קילובייטים.',
        'numeric' => 'שדה :attribute אינו יכול להיות גדול מ-:max.',
        'string'  => 'שדה :attribute לא יכול להיות גדול מ-:max characters.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => 'שדה :attribute צריך להיות קובץ מסוג: :values.',
    'mimetypes'            => 'שדה :attribute צריך להיות קובץ מסוג: :values.',
    'min'                  => [
        'array'   => 'שדה :attribute חייב להיות לפחות :min פריטים.',
        'file'    => 'שדה :attribute חייב להיות לפחות :min קילובייטים.',
        'numeric' => 'שדה :attribute חייב להיות לפחות :min.',
        'string'  => 'שדה :attribute חייב להיות לפחות :min תווים.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => ':Attribute חייב להיות מרובה של :value',
    'not_in'               => 'בחירת ה-:attribute אינה תקפה.',
    'not_regex'            => 'הפורמט של :attribute איננו חוקי.',
    'numeric'              => 'שדה :attribute חייב להיות מספר.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'שדה :attribute חייב להיות קיים.',
    'prohibited'           => 'שדה :attribute אסור.',
    'prohibited_if'        => 'שדה :attribute אסור כאשר :other הוא :value.',
    'prohibited_unless'    => 'שדה :attribute אסור אלא אם כן :other הוא :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'שדה :attribute בעל פורמט שאינו תקין.',
    'relatable'            => 'זה :attribute לא יכול להיות קשור עם משאב זה.',
    'required'             => 'שדה :attribute הוא חובה.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'שדה :attribute נחוץ כאשר :other הוא :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => 'שדה :attribute נחוץ אלא אם כן :other הוא בין :values.',
    'required_with'        => 'שדה :attribute נחוץ כאשר :values נמצא.',
    'required_with_all'    => 'שדה :attribute נחוץ כאשר :values נמצא.',
    'required_without'     => 'שדה :attribute נחוץ כאשר :values לא בנמצא.',
    'required_without_all' => 'שדה :attribute נחוץ כאשר אף אחד מ-:values נמצאים.',
    'same'                 => 'שדה :attribute ו-:other חייבים להיות זהים.',
    'size'                 => [
        'array'   => 'שדה :attribute חייב להכיל :size פריטים.',
        'file'    => 'שדה :attribute חייב להיות :size קילובייטים.',
        'numeric' => 'שדה :attribute חייב להיות :size.',
        'string'  => 'שדה :attribute חייב להיות :size תווים.',
    ],
    'starts_with'          => 'ה :attribute חייב להתחיל עם אחד מהבאים: :values',
    'string'               => 'שדה :attribute חייב להיות מחרוזת.',
    'timezone'             => 'שדה :attribute חייב להיות איזור תקני.',
    'unique'               => 'שדה :attribute כבר תפוס.',
    'uploaded'             => 'שדה :attribute ארעה שגיאה בעת ההעלאה.',
    'uppercase'            => 'The :attribute must be uppercase.',
    'url'                  => 'שדה :attribute בעל פורמט שאינו תקין.',
    'uuid'                 => 'ה :attribute חייב להיות מזהה ייחודי אוניברסלי (UUID) חוקי.',
    'attributes'           => [
        'address'                  => 'address',
        'age'                      => 'age',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'available',
        'birthday'                 => 'birthday',
        'body'                     => 'body',
        'city'                     => 'city',
        'content'                  => 'content',
        'country'                  => 'country',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'date',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'day',
        'deleted_at'               => 'deleted at',
        'description'              => 'description',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'email',
        'excerpt'                  => 'excerpt',
        'filter'                   => 'filter',
        'first_name'               => 'first name',
        'gender'                   => 'gender',
        'group'                    => 'group',
        'hour'                     => 'hour',
        'image'                    => 'image',
        'last_name'                => 'last name',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'message',
        'middle_name'              => 'middle name',
        'minute'                   => 'minute',
        'mobile'                   => 'mobile',
        'month'                    => 'month',
        'name'                     => 'name',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'password',
        'password_confirmation'    => 'password confirmation',
        'phone'                    => 'phone',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'second',
        'sex'                      => 'sex',
        'short_text'               => 'short text',
        'size'                     => 'size',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'subject',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'time',
        'title'                    => 'title',
        'updated_at'               => 'updated at',
        'username'                 => 'username',
        'year'                     => 'year',
    ],
];
