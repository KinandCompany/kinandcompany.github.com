<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/kin-grav/user/themes/kin/blueprints.yaml',
    'modified' => 1472021656,
    'data' => [
        'name' => 'Kin',
        'version' => '0.1.0',
        'description' => 'Kins new theme',
        'icon' => 'favicon',
        'author' => [
            'name' => 'Leigha Dennis',
            'email' => 'devs@getgrav.org'
        ],
        'homepage' => 'https://github.com/leigha-dennis/grav-theme-kin',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/leigha-dennis/grav-theme-kin/issues',
        'readme' => 'https://github.com/leigha-dennis/grav-theme-kin/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
