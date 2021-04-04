<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1616605933,
    'checksum' => 'b42a30b20b1d55da19115a5b83c37561',
    'files' => [
        'templates/g5_hydrogen/custom/config/12' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/12/index.yaml',
                'modified' => 1616587321
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/12/layout.yaml',
                'modified' => 1616587321
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1616587321
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1616587321
            ],
            'particles/branding' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/branding.yaml',
                'modified' => 1616587291
            ],
            'particles/content' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/content.yaml',
                'modified' => 1616587291
            ],
            'particles/contentarray' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/contentarray.yaml',
                'modified' => 1616587291
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/copyright.yaml',
                'modified' => 1616587291
            ],
            'particles/custom' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/custom.yaml',
                'modified' => 1616587291
            ],
            'particles/date' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/date.yaml',
                'modified' => 1616587291
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/logo.yaml',
                'modified' => 1616587291
            ],
            'particles/menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/menu.yaml',
                'modified' => 1616587291
            ],
            'particles/messages' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/messages.yaml',
                'modified' => 1616587291
            ],
            'particles/mobile-menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/mobile-menu.yaml',
                'modified' => 1616587291
            ],
            'particles/module' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/module.yaml',
                'modified' => 1616587291
            ],
            'particles/position' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/position.yaml',
                'modified' => 1616587291
            ],
            'particles/sample' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/sample.yaml',
                'modified' => 1616587291
            ],
            'particles/social' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/social.yaml',
                'modified' => 1616587291
            ],
            'particles/spacer' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/spacer.yaml',
                'modified' => 1616587291
            ],
            'particles/totop' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/totop.yaml',
                'modified' => 1616587291
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/styles.yaml',
                'modified' => 1616587266
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1616585335
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'owner' => ''
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => '1',
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo',
                'height' => '',
                'svg' => ''
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => '1',
                'menu' => '',
                'base' => '/',
                'startLevel' => '1',
                'maxLevels' => '0',
                'renderTitles' => '0',
                'hoverExpand' => '1',
                'mobileTarget' => '0',
                'forceTarget' => '0'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both',
                'title' => '',
                'items' => [
                    
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'totop'
                ],
                'icon' => '',
                'content' => '',
                'title' => ''
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => '1'
            ],
            'contentarray' => [
                'enabled' => '1',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => '0'
                        ],
                        'edit' => '0',
                        'title' => [
                            'enabled' => 'show',
                            'limit' => ''
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show',
                            'label' => '',
                            'css' => ''
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ],
                'css' => [
                    'class' => ''
                ],
                'extra' => [
                    
                ]
            ],
            'date' => [
                'enabled' => '1',
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => '1'
            ],
            'module' => [
                'enabled' => '1',
                'chrome' => ''
            ],
            'position' => [
                'enabled' => '1',
                'chrome' => ''
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#bf383a',
                'color-2' => '#757575'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#a61f21',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => '0'
            ],
            'navigation' => [
                'background' => '#bf383a',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#722829',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#722829',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset4'
        ],
        'index' => [
            'name' => 12,
            'timestamp' => 1616587321,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1590928134
            ],
            'positions' => [
                'header' => 'Header',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-header' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'logo' => [
                    'logo-3841' => 'Logo'
                ],
                'menu' => [
                    'menu-4633' => 'Menu'
                ],
                'messages' => [
                    'system-messages-5763' => 'System Messages'
                ],
                'content' => [
                    'system-content-4780' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-5565' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-3578' => 'Spacer'
                ],
                'branding' => [
                    'branding-4442' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-5694' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'main' => 'main',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'position-header' => 'position-header',
                    'logo-3841' => 'logo-3841',
                    'menu-4633' => 'menu-4633',
                    'position-breadcrumbs' => 'position-breadcrumbs',
                    'system-messages-5763' => 'system-messages-5763',
                    'system-content-4780' => 'system-content-4780',
                    'position-footer' => 'position-footer',
                    'copyright-5565' => 'copyright-5565',
                    'spacer-3578' => 'spacer-3578',
                    'branding-4442' => 'branding-4442',
                    'mobile-menu-5694' => 'mobile-menu-5694'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1590928134
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'main' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'enabled' => 0,
                        'key' => 'header'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'enabled' => 0,
                        'key' => 'breadcrumbs'
                    ]
                ],
                'system-messages-5763' => [
                    'attributes' => [
                        'enabled' => 0
                    ]
                ],
                'system-content-4780' => [
                    'attributes' => [
                        'enabled' => 0
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'enabled' => 0,
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
