<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/themes/cleantest/blueprints.yaml',
    'modified' => 1691599700,
    'size' => 785,
    'data' => [
        'name' => 'Cleantest',
        'slug' => 'cleantest',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'just testing things out still',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Ruan Erasmus',
            'email' => 'ruane25@gmail.com'
        ],
        'homepage' => 'https://github.com/ruan-erasmus/grav-theme-cleantest',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/ruan-erasmus/grav-theme-cleantest/issues',
        'readme' => 'https://github.com/ruan-erasmus/grav-theme-cleantest/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
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
