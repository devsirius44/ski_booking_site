<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/bookingSystem/user/plugins/sitemap/blueprints.yaml',
    'modified' => 1655168358,
    'size' => 5770,
    'data' => [
        'name' => 'Sitemap',
        'type' => 'plugin',
        'slug' => 'sitemap',
        'version' => '3.0.2',
        'description' => 'Provide automatically generated **XML sitemaps** with this very useful, but simple to configure, Grav plugin.',
        'icon' => 'map-marker',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-sitemap',
        'keywords' => 'sitemap, plugin, xml, map, index',
        'bugs' => 'https://github.com/getgrav/grav-plugin-sitemap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'multilang_enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.MULTILANG_ENABLED',
                    'help' => 'PLUGIN_SITEMAP.MULTILANG_ENABLED_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'ignore_external' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.IGNORE_EXTERNAL',
                    'help' => 'PLUGIN_SITEMAP.IGNORE_EXTERNAL_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'ignore_protected' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.IGNORE_PROTECTED',
                    'help' => 'PLUGIN_SITEMAP.IGNORE_PROTECTED_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'ignore_redirect' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.IGNORE_REDIRECT',
                    'help' => 'PLUGIN_SITEMAP.IGNORE_REDIRECT_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'ignores' => [
                    'type' => 'array',
                    'label' => 'PLUGIN_SITEMAP.IGNORES',
                    'help' => 'PLUGIN_SITEMAP.IGNORES_HELP',
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_SITEMAP.ROUTE',
                    'placeholder' => '/sitemap',
                    'validate' => [
                        'pattern' => '/([a-z-_]+/?)+'
                    ]
                ],
                'html_support' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.HTML_SUPPORT',
                    'help' => 'PLUGIN_SITEMAP.HTML_SUPPORT_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'urlset' => [
                    'type' => 'text',
                    'default' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
                    'label' => 'PLUGIN_SITEMAP.URLSET',
                    'help' => 'PLUGIN_SITEMAP.URLSET_HELP'
                ],
                'short_date_format' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                    'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'include_changefreq' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.INCLUDE_CHANGEFREQ',
                    'help' => 'PLUGIN_SITEMAP.INCLUDE_CHANGEFREQ_HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'changefreq' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_SITEMAP.CHANGEFREQ',
                    'default' => '',
                    'options' => [
                        '' => 'PLUGIN_SITEMAP.CHANGEFREQ_DEFAULT',
                        'always' => 'PLUGIN_SITEMAP.CHANGEFREQ_ALWAYS',
                        'hourly' => 'PLUGIN_SITEMAP.CHANGEFREQ_HOURLY',
                        'daily' => 'PLUGIN_SITEMAP.CHANGEFREQ_DAILY',
                        'weekly' => 'PLUGIN_SITEMAP.CHANGEFREQ_WEEKLY',
                        'monthly' => 'PLUGIN_SITEMAP.CHANGEFREQ_MONTHLY',
                        'yearly' => 'PLUGIN_SITEMAP.CHANGEFREQ_YEARLY',
                        'never' => 'PLUGIN_SITEMAP.CHANGEFREQ_NEVER'
                    ]
                ],
                'include_priority' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_SITEMAP.INCLUDE_PRIORITY',
                    'help' => 'PLUGIN_SITEMAP.INCLUDE_PRIORITY_HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'priority' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_SITEMAP.PRIORITY',
                    'default' => '',
                    'options' => [
                        '' => 'PLUGIN_SITEMAP.PRIORITY_USE_GLOBAL',
                        '0.1' => 0.1,
                        '0.2' => 0.2,
                        '0.3' => 0.3,
                        '0.4' => 0.4,
                        '0.5' => 0.5,
                        '0.6' => 0.6,
                        '0.7' => 0.7,
                        '0.8' => 0.8,
                        '0.9' => 0.9,
                        '1.0' => 1.0
                    ],
                    'validate' => [
                        'type' => 'float'
                    ]
                ],
                'additions' => [
                    'type' => 'list',
                    'label' => 'PLUGIN_SITEMAP.ADDITIONS',
                    'help' => 'PLUGIN_SITEMAP.ADDITIONS_HELP',
                    'fields' => [
                        '.location' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SITEMAP.LOCATION',
                            'placeholder' => '/not-a-grav-url'
                        ],
                        '.lastmod' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SITEMAP.LASTMOD',
                            'placeholder' => '2017-04-06'
                        ],
                        '.changefreq' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_SITEMAP.CHANGEFREQ',
                            'default' => '',
                            'options' => [
                                '' => 'PLUGIN_SITEMAP.CHANGEFREQ_DEFAULT',
                                'always' => 'PLUGIN_SITEMAP.CHANGEFREQ_ALWAYS',
                                'hourly' => 'PLUGIN_SITEMAP.CHANGEFREQ_HOURLY',
                                'daily' => 'PLUGIN_SITEMAP.CHANGEFREQ_DAILY',
                                'weekly' => 'PLUGIN_SITEMAP.CHANGEFREQ_WEEKLY',
                                'monthly' => 'PLUGIN_SITEMAP.CHANGEFREQ_MONTHLY',
                                'yearly' => 'PLUGIN_SITEMAP.CHANGEFREQ_YEARLY',
                                'never' => 'PLUGIN_SITEMAP.CHANGEFREQ_NEVER'
                            ]
                        ],
                        '.priority' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_SITEMAP.PRIORITY',
                            'default' => '',
                            'options' => [
                                '' => 'PLUGIN_SITEMAP.PRIORITY_USE_GLOBAL',
                                '0.1' => 0.1,
                                '0.2' => 0.2,
                                '0.3' => 0.3,
                                '0.4' => 0.4,
                                '0.5' => 0.5,
                                '0.6' => 0.6,
                                '0.7' => 0.7,
                                '0.8' => 0.8,
                                '0.9' => 0.9,
                                '1.0' => 1.0
                            ],
                            'validate' => [
                                'type' => 'float'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
