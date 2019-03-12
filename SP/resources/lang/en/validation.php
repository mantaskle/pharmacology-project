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

    'accepted' => ':attribute privalo būti priimtas/pažymėtas.',
    'active_url' => ':attribute nėra tinkama nuoroda.',
    'after' => ':attribute privalo būti data po :date.',
    'after_or_equal' => ':attribute privalo būti data po arba lygi datai :date.',
    'alpha' => ':attribute gali susidėti tik iš raidžių.',
    'alpha_dash' => ':attribute gali susidėti tik iš raidžių, skaičių, brūkšnių ir žemųjų brūkšnių.',
    'alpha_num' => ':attribute gali susidėti tik iš skaičių ir raidžių.',
    'array' => ':attribute privalo būti masyvas.',
    'before' => ':attribute privalo būti data prieš :date.',
    'before_or_equal' => ':attribute privalo būti data prieš arba lygi datai :date.',
    'between' => [
        'numeric' => ':attribute privalo būti tarp :min ir :max.',
        'file' => ':attribute privalo būti tarp :min ir :max kilobaitų.',
        'string' => ':attribute privalo būti tarp :min ir :max simbolių.',
        'array' => ':attribute privalo būti tarp :min ir :max elementų.',
    ],
    'boolean' => ':attribute privalo būti tiesa arba melas.',
    'confirmed' => ':attribute pakartojimas nesutampa.',
    'date' => ':attribute nėra tinkama data.',
    'date_equals' => ':attribute privalo būti data arba lygi datai :date.',
    'date_format' => ':attribute neatitinka formato :format.',
    'different' => ':attribute ir :other turi skirtis.',
    'digits' => ':attribute privalo būti :digits skaitmenys.',
    'digits_between' => ':attribute privalo būti tarp :min ir :max skaitmenų.',
    'dimensions' => ':attribute neatitinka leistinų išmatavimų.',
    'distinct' => ':attribute laukas turi kopiją.',
    'email' => ':attribute privalo būti egzistuojantis el-paštas.',
    'exists' => ':attribute nėra tinkamas/a.',
    'file' => ':attribute privalo būti failas.',
    'filled' => ':attribute privalo turėti reikšmę.',
    'gt' => [
        'numeric' => ':attribute privalo būti daugiau už :value.',
        'file' => ':attribute privalo būti daugiau už :value kilobaitus/ų.',
        'string' => ':attribute privalo būti daugiau už :value simbolius/ų.',
        'array' => ':attribute privalo turėti daugiau nei :value elementus/ų.',
    ],
    'gte' => [
        'numeric' => ':attribute privalo būti daugiau arba lygu :value.',
        'file' => ':attribute privalo būti daugiau arba lygu :value kilobaitams/ų.',
        'string' => ':attribute privalo būti daugiau arba lygu :value simboliams/ų.',
        'array' => ':attribute privalo turėti :value elemetus/ų arba daugiau.',
    ],
    'image' => ':attribute privalo būti paveikslėlis.',
    'in' => ':attribute nėra tinkamas/a.',
    'in_array' => ':attribute laukas neegzistuoja tarp :other.',
    'integer' => ':attribute privalo būti sveikas skaičius.',
    'ip' => ':attribute privalo būti tinkamas IP adresas.',
    'ipv4' => ':attribute privalo būti tinkamas IPv4 adresas.',
    'ipv6' => ':attribute privalo būti tinkamas IPvš adresas.',
    'json' => ':attribute privalo būti tinkama JSON eilutė.',
    'lt' => [
        'numeric' => ':attribute privalo būti mažiau už :value.',
        'file' => ':attribute privalo būti mažiau už :value kilobaitus/ų.',
        'string' => ':attribute privalo būti mažiau už :value simbolius/ų.',
        'array' => ':attribute privalo turėti mažiau nei :value elementus/ų.',
    ],
    'lte' => [
        'numeric' => ':attribute privalo būti mažiau arba lygu :value.',
        'file' => ':attribute privalo būti mažiau arba lygu :value kilobaitams/ų.',
        'string' => ':attribute privalo būti mažiau arba lygu :value simboliams/ų.',
        'array' => ':attribute privalo turėti mažiau arba :value elementams/ų.',
    ],
    'max' => [
        'numeric' => ':attribute negali būti daugiau už :max.',
        'file' => ':attribute negali būti daugiau už :max kilobaitus/ų.',
        'string' => ':attribute negali būti daugiau už :max simbolius/ų.',
        'array' => ':attribute negali turėti daugiau nei :max elementus/ų.',
    ],
    'mimes' => ':attribute privalo būti failo tipas: :values.',
    'mimetypes' => ':attribute privalo būti failo tipo: :values.',
    'min' => [
        'numeric' => ':attribute privalo būti bent :min.',
        'file' => ':attribute privalo būti bent :min kilobaitų dydžio.',
        'string' => ':attribute privalo susidėti bent iš :min simbolių.',
        'array' => ':attribute privalo turėti bent :min elementus.',
    ],
    'not_in' => 'Pasirinktas/a :attribute nėra tinkamas/a.',
    'not_regex' => ':attribute yra netinkamo formato.',
    'numeric' => ':attribute privalo būti skaičius.',
    'present' => ':attribute privalo egzistuoti.',
    'regex' => ':attribute yra netinkamo formato.',
    'required' => ':attribute privalomas laukas.',
    'required_if' => ':attribute privalomas laukas kai :other yra :value.',
    'required_unless' => ':attribute privalomas laukas, nebent :other neegzistuoja tarp :values.',
    'required_with' => ':attribute privalomas laukas kai yra :values.',
    'required_with_all' => ':attribute privalomas laukas kai yra bent viena :values.',
    'required_without' => ':attribute privalomas laukas kai nėra :values.',
    'required_without_all' => ':attribute privalomas laukas kai nėra bent vieno iš :values.',
    'same' => ':attribute ir :other privalo sutapti.',
    'size' => [
        'numeric' => ':attribute privalo būti :size.',
        'file' => ':attribute privalo būti :size kilobaitų dydžio.',
        'string' => ':attribute privalo būti iš :size simbolių.',
        'array' => ':attribute privalo turėti :size elementų/us.',
    ],
    'starts_with' => ':attribute privalo prasidėti su viena iš verčių: :values.',
    'string' => ':attribute privalo būti simbolių eilutė.',
    'timezone' => ':attribute privalo būti tinkama zone.',
    'unique' => ':attribute jau pasirinktas/a.',
    'uploaded' => 'Nepavyko įkelti - :attribute.',
    'url' => ':attribute neatitinka formato.',
    'uuid' => ':attribute privalo būti tinkamas UUID.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
