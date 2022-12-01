<?php

declare(strict_types=1);

return [
    'accepted'             => 'باید ومنل شی :attribute.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute یو باوري لینک نه دی.',
    'after'                => 'باید:attribute تر نن ورځې نیټې پورې :date.',
    'after_or_equal'       => ':Attribute باید وروستی نیټه وي یا د نیټې سره سمون ولري :date.',
    'alpha'                => 'دا باید شامل نه وي :attribute یوازې په حرفو کې.',
    'alpha_dash'           => 'دا باید شامل نه وي :attribute یوازې په حرفو کې، شمیرې او متره.',
    'alpha_num'            => 'شمیرې او متره :attribute یوازې خطونه او شمیرې.',
    'array'                => 'دا باید وي :attribute ًمیټرکس.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => 'باید:attribute د تاریخ پخوا تاریخ وټاکئ :date.',
    'before_or_equal'      => ':Attribute دا باید وي د تیر نیټې یا نیټې سره سمون خوري :date.',
    'between'              => [
        'array'   => 'شمیرې او متره :attribute د عناصرو په منځ کې :min او :max.',
        'file'    => 'د دوتنې اندازه باید وي:attribute ما بين:min او :max كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute ما بين:min او :max.',
        'string'  => 'د متن حروف باید باید وي :attribute ما بين:min او :max.',
    ],
    'boolean'              => 'دا باید ارزښت وي :attribute او یا هم true یا false .',
    'confirmed'            => 'د تایید ساحه د ساحې سره سمون نه لري:attribute.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute نېټه اعتبار نلري .',
    'date_equals'          => 'دا باید وي :attribute د نیټې سره سم:date.',
    'date_format'          => 'مطابقت نلري :attribute د شکل سره:format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'ساحې باید وي :attribute و :other مختلف.',
    'digits'               => 'شمیرې او متره :attribute په :digits شمېر / شمېرې.',
    'digits_between'       => 'شمیرې او متره :attribute ما بين:min و :max شمېر / شمېرې .',
    'dimensions'           => 'د :attribute د ناباوره انځور اړخونه لري.',
    'distinct'             => 'د ساحې څخه :attribute د نقل ارزښت .',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => 'دا باید وي :attribute یو باوري بریښلیک پته جوړښت.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'مشخص ارزښت :attribute شتون نلري.',
    'file'                 => 'د :attribute دا باید یوه فایل وي.',
    'filled'               => ':Attribute لازمه ده.',
    'gt'                   => [
        'array'   => 'شمیرې او متره :attribute له زیاتو څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute په پرتله ډیر :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute په پرتله ډیر :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute څخه زیات :value توري/توري.',
    ],
    'gte'                  => [
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :value عنصر / عناصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :value توري/توري.',
    ],
    'image'                => 'دا باید وي :attribute انځور.',
    'in'                   => ':Attribute غير موجود.',
    'in_array'             => ':Attribute غير موجود في :other.',
    'integer'              => 'دا باید وي:attribute هو عدد صحيح.',
    'ip'                   => 'دا باید وي:attribute عنوان IP ریښتیا.',
    'ipv4'                 => 'دا باید وي:attribute عنوان IPv4 ریښتیا.',
    'ipv6'                 => 'دا باید وي:attribute عنوان IPv6 ریښتیا.',
    'json'                 => 'دا باید وي:attribute د اوریدلو ډول JSON.',
    'lowercase'            => 'The :attribute must be lowercase.',
    'lt'                   => [
        'array'   => 'شمیرې او متره :attribute له کم څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږ :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute لږ :value.',
        'string'  => 'د متن اوږدوالی باید وي :attribute له کم څخه :value توري/توري.',
    ],
    'lte'                  => [
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :value عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته نه وي :attribute :value كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :value.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :value توري/توري.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'دا باید شامل نه وي :attribute له زیاتو څخه :max عناصر/عنصر.',
        'file'    => 'د دوتنې اندازه باید له حد نه زیاته وي :attribute :max كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute نسبت برابر یا کوچنی :max.',
        'string'  => 'د متن اوږدوالی باید له زیاتوالی نه وي:attribute :max توري/توري.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => 'دا باید د ډول دوسیه وي : :values.',
    'mimetypes'            => 'دا باید یوه فایل وي: :values.',
    'min'                  => [
        'array'   => 'شمیرې او متره :attribute لږ تر لږه :min عنصر / عناصر.',
        'file'    => 'د دوتنې اندازه باید وي:attribute لږترلږه :min كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute مساوی یا زیات :min.',
        'string'  => 'د متن اوږدوالی باید وي :attribute لږترلږه :min توري/توري.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => 'The :attribute must be a multiple of :value.',
    'not_in'               => ':Attribute موجود.',
    'not_regex'            => 'فورمول :attribute غلط.',
    'numeric'              => 'باید:attribute یو شمېره.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'باید چمتو شی :attribute.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'فورمول :attribute .غير صحيح.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ':Attribute اړینه ده.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':Attribute که چیرې د اړتیا په صورت کې اړتیا وي:other مساو :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => ':Attribute که نه :other مساو :values.',
    'required_with'        => ':Attribute که اړتیا وي شتون لري :values.',
    'required_with_all'    => ':Attribute که اړتیا وي شتون لري :values.',
    'required_without'     => ':Attribute د اړتیا پرته :values.',
    'required_without_all' => ':Attribute که اړتیا شتون نلري :values.',
    'same'                 => 'اړینه ده :attribute سره :other.',
    'size'                 => [
        'array'   => 'شمیرې او متره :attribute په :size عنصر/عناصر په سمه توګه.',
        'file'    => 'د دوتنې اندازه باید وي:attribute :size كيلوبايت.',
        'numeric' => 'دا باید ارزښت وي :attribute سره برابر :size.',
        'string'  => 'شمیرې او متره متن :attribute په :size توري/توري په سمه توګه.',
    ],
    'starts_with'          => 'دا باید پیل شي :attribute د لاندې ارزښتونو څخه یو: :values',
    'string'               => 'دا باید وي:attribute متن.',
    'timezone'             => 'دا باید وي:attribute یو باوري نیټه.',
    'unique'               => 'ارزښتونه :attribute کارول شوی.',
    'uploaded'             => 'د پورته کولو توان نلري :attribute.',
    'uppercase'            => 'The :attribute must be uppercase.',
    'url'                  => 'د لینک بڼه :attribute غلط.',
    'uuid'                 => ':Attribute دا باید غیر رسمي وي UUID غږ.',
    'attributes'           => [
        'address'                  => 'د استوګنې پته',
        'age'                      => 'عمر',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'شته',
        'birthday'                 => 'birthday',
        'body'                     => 'body',
        'city'                     => 'ښار',
        'content'                  => 'منځپانګې',
        'country'                  => 'هېواد',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'نېټه',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'ورځ',
        'deleted_at'               => 'deleted at',
        'description'              => 'تشریح',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'برېښلیک',
        'excerpt'                  => 'لنډیز',
        'filter'                   => 'filter',
        'first_name'               => 'لومړی نوم',
        'gender'                   => 'جنس',
        'group'                    => 'group',
        'hour'                     => 'ساعت',
        'image'                    => 'image',
        'last_name'                => 'وروستۍ نوم',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'message',
        'middle_name'              => 'middle name',
        'minute'                   => 'دقیقې',
        'mobile'                   => 'ګرځنده',
        'month'                    => 'میاشت',
        'name'                     => 'نوم',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'پاسورډ',
        'password_confirmation'    => 'پاسورډ تایید کړه',
        'phone'                    => 'تلیفون',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'ثانوي',
        'sex'                      => 'جنس',
        'short_text'               => 'short text',
        'size'                     => 'اندازه',
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
        'time'                     => 'وخت',
        'title'                    => 'سرلیک',
        'updated_at'               => 'updated at',
        'username'                 => 'د کارن نوم',
        'year'                     => 'کال',
    ],
];
