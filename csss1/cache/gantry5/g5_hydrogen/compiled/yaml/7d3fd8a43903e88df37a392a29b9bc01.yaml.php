<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/themes/g5_hydrogen/gantry/theme.yaml',
    'modified' => 1691559088,
    'data' => [
        'details' => [
            'name' => 'Hydrogen',
            'version' => '5.5.15',
            'icon' => 'paper-plane',
            'date' => 'September  5, 2022',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/hydrogen.yaml'
            ],
            'copyright' => '(C) 2005 - 2022 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Hydrogen Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'g5_hydrogen',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://includes/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'roboto' => [
                    400 => 'gantry-theme://fonts/roboto_regular_macroman/Roboto-Regular-webfont',
                    500 => 'gantry-theme://fonts/roboto_medium_macroman/Roboto-Medium-webfont',
                    700 => 'gantry-theme://fonts/roboto_bold_macroman/Roboto-Bold-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'options' => [
                    'compatibility' => '5.5',
                    'deprecations' => true
                ],
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'hydrogen',
                    1 => 'hydrogen-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'hydrogen',
                    1 => 'hydrogen-grav'
                ],
                'overrides' => [
                    0 => 'custom'
                ]
            ],
            'block-variations' => [
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4'
                ],
                'Effects' => [
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'center' => 'Center',
                    'full-width' => 'Full Width',
                    'equal-height' => 'Equal Height',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.5'
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent'
                ],
                'section' => [
                    0 => 'header',
                    1 => 'navigation',
                    2 => 'showcase',
                    3 => 'feature',
                    4 => 'subfeature',
                    5 => 'main',
                    6 => 'footer'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
