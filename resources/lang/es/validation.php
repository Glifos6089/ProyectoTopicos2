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

    'accepted' => 'El atributo :debe ser aceptado.',
    'active_url' => 'El atributo :no es una URL válida.',
    'after' => 'El atributo :debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El atributo :debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El atributo :sólo puede contener letras.',
    'alpha_dash' => 'El atributo :sólo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El atributo :sólo puede contener letras y números.',
    'array' => 'El atributo :debe ser un array.',
    'before' => 'El atributo :debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El atributo :debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El atributo :debe estar entre :min y :max.',
        'file' => 'El atributo :debe estar entre :min y :max kilobytes.',
        'string' => 'El atributo :debe estar entre los caracteres :min y :max.',
        'array' => 'El atributo :debe tener entre los elementos :min y :max.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación del atributo :no coincide.',
    'date' => 'El atributo :no es una fecha válida.',
    'date_equals' => 'El atributo :debe ser una fecha igual a :date.',
    'date_format' => 'El atributo :no coincide con el formato :format.',
    'different' => 'El :atributo y el :otro deben ser diferentes.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'El atributo :debe estar entre los dígitos :min y :max.',
    'dimensions' => 'El atributo :tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El atributo :debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El atributo :debe terminar con uno de los siguientes: :valores.',
    'exists' => 'El atributo :seleccionado no es válido.',
    'file' => 'El atributo :debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :atributo debe ser mayor que el :valor.',
        'file' => 'El atributo :debe ser mayor que el valor :kilobytes.',
        'string' => 'El :atributo debe ser mayor que los caracteres del :valor.',
        'array' => 'El atributo :debe tener más elementos de :valor.',
    ],
    'gte' => [
        'numeric' => 'El atributo :debe ser mayor o igual que el valor :de la etiqueta.',
        'file' => 'El atributo :debe ser mayor o igual que el valor :kilobytes.',
        'string' => 'El atributo :debe ser mayor o igual que los caracteres del valor :.',
        'array' => 'El atributo :debe tener elementos :value o más.',
    ],
    'image' => 'El atributo :debe ser una imagen.',
    'in' => 'El atributo :seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El atributo :debe ser un número entero.',
    'ip' => 'El atributo :debe ser una dirección IP válida.',
    'ipv4' => 'El atributo :debe ser una dirección IPv4 válida.',
    'ipv6' => 'El atributo :debe ser una dirección IPv6 válida.',
    'json' => 'El atributo :debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :atributo debe ser menor que el :valor.',
        'file' => 'El atributo :debe ser menor que el valor :kilobytes.',
        'string' => 'El atributo :debe tener menos caracteres que el valor :.',
        'array' => 'El atributo :debe tener menos elementos de :valor.',
    ],
    'lte' => [
        'numeric' => 'El atributo :debe ser menor o igual que el valor :.',
        'file' => 'El atributo :debe ser menor o igual a :valor kilobytes.',
        'string' => 'El atributo :debe ser menor o igual que los caracteres del valor :.',
        'array' => 'El atributo :no debe tener más elementos :value.',
    ],
    'max' => [
        'numeric' => 'El atributo :no puede ser mayor que :max.',
        'file' => 'El atributo :no puede ser mayor que :max kilobytes.',
        'string' => 'El atributo :no puede ser mayor que los caracteres :max.',
        'array' => 'El atributo :no puede tener más elementos que :max.',
    ],
    'mimes' => 'El atributo :debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El atributo :debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El atributo :debe ser al menos :min.',
        'file' => 'El atributo :debe ser de al menos :min kilobytes.',
        'string' => 'El atributo :debe tener un mínimo de caracteres :min.',
        'array' => 'El atributo :debe tener al menos elementos :min.',
    ],
    'multiple_of' => 'El :atributo debe ser un múltiplo de :valor',
    'not_in' => 'El atributo :seleccionado no es válido.',
    'not_regex' => 'El formato del atributo :no es válido.',
    'numeric' => 'El atributo :debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato del atributo :no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es necesario cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es necesario cuando :values está presente.',
    'required_with_all' => 'El campo :atributo es obligatorio cuando hay valores :.',
    'required_without' => 'El campo :attribute es necesario cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando no hay ningún valor :.',
    'same' => 'Los campos :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El atributo :debe ser :size.',
        'file' => 'El atributo :debe ser :size kilobytes.',
        'string' => 'El atributo :debe ser de caracteres de tamaño :',
        'array' => 'El atributo :debe contener elementos :size.',
    ],
    'starts_with' => 'El atributo :debe comenzar con uno de los siguientes: :valores.',
    'string' => 'El atributo :debe ser una cadena.',
    'timezone' => 'El atributo :debe ser una zona válida.',
    'unique' => 'El atributo :ya ha sido tomado',
    'uploaded' => 'El atributo :no se ha podido cargar.',
    'url' => 'El formato del atributo :no es válido.',
    'uuid' => 'El atributo :debe ser un UUID válido.',

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
