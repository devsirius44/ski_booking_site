<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/bookingSystem/user/themes/skigulmarg/blueprints.yaml',
    'modified' => 1543847508,
    'size' => 432,
    'data' => [
        'name' => 'Skigulmarg',
        'version' => '1.0.0',
        'description' => 'Skigulmarg is the theme for skigulmarg.com',
        'icon' => 'empire',
        'author' => [
            'name' => 'Nikita Baranov',
            'email' => 'mykytabaranov@gmail.com'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
