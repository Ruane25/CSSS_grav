<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/csss1/user/themes/mache/blueprints.yaml',
    'modified' => 1691558846,
    'size' => 1898,
    'data' => [
        'name' => 'Mache',
        'description' => 'Grav Theme based on Mache HTML theme by freetemplates.pro, original PSD design by symu.co.',
        'version' => '1.0.8',
        'icon' => 'empire',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'flatfiledeveloper@gmail.com',
            'url' => 'https://flatfiledeveloper.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-mache',
        'demo' => 'https://grav-theme-mache.flatfiledeveloper.com/',
        'keywords' => 'mache, theme, template, responsive, html5, css3, one, single, page, bootstrap',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-mache/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'favicon' => [
                    'type' => 'file',
                    'label' => 'THEME_MACHE.FAVICON',
                    'help' => 'THEME_MACHE.FAVICON_HELP',
                    'destination' => 'user/themes/mache/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'logo' => [
                    'type' => 'file',
                    'label' => 'THEME_MACHE.LOGO',
                    'help' => 'THEME_MACHE.LOGO_HELP',
                    'destination' => 'user/themes/mache/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'left_footer' => [
                    'type' => 'editor',
                    'label' => 'THEME_MACHE.LEFT_FOOTER',
                    'help' => 'THEME_MACHE.LEFT_FOOTER_HELP'
                ],
                'blog_thumbnail_width' => [
                    'type' => 'number',
                    'label' => 'THEME_MACHE.BLOG_THUMBNAIL_WIDTH',
                    'help' => 'THEME_MACHE.BLOG_THUMBNAIL_WIDTH_HELP',
                    'description' => 'THEME_MACHE.BLOG_THUMBNAIL_WIDTH_HELP',
                    'default' => 600,
                    'validate' => [
                        'min' => 300
                    ]
                ],
                'blog_thumbnail_height' => [
                    'type' => 'number',
                    'label' => 'THEME_MACHE.BLOG_THUMBNAIL_HEIGHT',
                    'help' => 'THEME_MACHE.BLOG_THUMBNAIL_HEIGHT_HELP',
                    'description' => 'THEME_MACHE.BLOG_THUMBNAIL_HEIGHT_HELP',
                    'default' => 450,
                    'validate' => [
                        'min' => 300
                    ]
                ],
                'default_background_image' => [
                    'type' => 'file',
                    'label' => 'THEME_MACHE.DEFAULT_BACKGROUND_IMAGE',
                    'help' => 'THEME_MACHE.DEFAULT_BACKGROUND_IMAGE',
                    'destination' => 'user/themes/mache/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ]
        ]
    ]
];
