<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1616607871,
    'checksum' => '4889b8990e8af3818d3a631d0d04b730',
    'files' => [
        'templates/g5_hydrogen/custom/config/13' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/index.yaml',
                'modified' => 1616607868
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/layout.yaml',
                'modified' => 1616607868
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/styles.yaml',
                'modified' => 1590969816
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1616607569
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1616607569
            ],
            'particles/branding' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/branding.yaml',
                'modified' => 1616606251
            ],
            'particles/content' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/content.yaml',
                'modified' => 1616606252
            ],
            'particles/contentarray' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/contentarray.yaml',
                'modified' => 1616606251
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/copyright.yaml',
                'modified' => 1616606251
            ],
            'particles/custom' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/custom.yaml',
                'modified' => 1616606251
            ],
            'particles/date' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/date.yaml',
                'modified' => 1616606251
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/logo.yaml',
                'modified' => 1616606251
            ],
            'particles/menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/menu.yaml',
                'modified' => 1616606251
            ],
            'particles/messages' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/messages.yaml',
                'modified' => 1616606252
            ],
            'particles/mobile-menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/mobile-menu.yaml',
                'modified' => 1616606251
            ],
            'particles/module' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/module.yaml',
                'modified' => 1616606252
            ],
            'particles/position' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/position.yaml',
                'modified' => 1616606251
            ],
            'particles/sample' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/sample.yaml',
                'modified' => 1616606251
            ],
            'particles/social' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/social.yaml',
                'modified' => 1616606251
            ],
            'particles/spacer' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/spacer.yaml',
                'modified' => 1616606252
            ],
            'particles/totop' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/totop.yaml',
                'modified' => 1616606251
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
                'background' => '#2b2b2b',
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
                'background' => '#efefef',
                'image' => '',
                'text-color' => '#2b2b2b'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset4'
        ],
        'index' => [
            'name' => '13',
            'timestamp' => 1616607868,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1590928134
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-5959' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-6519' => 'Menu'
                ],
                'module' => [
                    'position-module-7108' => 'Module Instance',
                    'position-module-6880' => 'Module Instance',
                    'position-module-7360' => 'Module Instance'
                ],
                'messages' => [
                    'system-messages-7171' => 'System Messages'
                ],
                'sample' => [
                    'sample-9357' => 'Sample Content',
                    'sample-3' => 'Key Features'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-2844' => 'Copyright'
                ],
                'social' => [
                    'social-2031' => 'Social'
                ],
                'branding' => [
                    'branding-8758' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-7603' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1590928134
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-5959 15',
                        1 => 'menu-6519 85'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'position-module-7108'
                    ],
                    1 => [
                        0 => 'position-module-6880'
                    ],
                    2 => [
                        0 => 'position-module-7360'
                    ]
                ],
                '/showcase/' => [
                    
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-7171'
                    ],
                    1 => [
                        0 => 'sample-9357'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-2844 33.3',
                        1 => 'social-2031 33.3',
                        2 => 'branding-8758 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-7603'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'logo-5959' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'url' => '',
                        'target' => '_self',
                        'image' => 'gantry-media://headers/logo_104x62.png',
                        'height' => '',
                        'svg' => '',
                        'class' => 'star-logo'
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'position-module-7108' => [
                    'title' => 'Module Instance',
                    'attributes' => [
                        'module_id' => '91',
                        'key' => 'module-instance'
                    ]
                ],
                'position-module-6880' => [
                    'title' => 'Module Instance',
                    'attributes' => [
                        'module_id' => '93',
                        'key' => 'module-instance'
                    ]
                ],
                'position-module-7360' => [
                    'title' => 'Module Instance',
                    'attributes' => [
                        'module_id' => '97'
                    ]
                ],
                'sample-9357' => [
                    'title' => 'Sample Content',
                    'attributes' => [
                        'image' => '',
                        'headline' => '',
                        'description' => '<p>
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
</p>',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'enabled' => 0,
                        'image' => '',
                        'headline' => 'Key Features',
                        'description' => '<p>Gantry 5 is packed full of features created to empower the development of designs into fully functional layouts with the absolute minimum effort and fuss</p>',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            0 => [
                                'icon' => 'fa fa-code',
                                'subtitle' => '',
                                'description' => '<p>Gantry 5 leverages the power of <a href="http://twig.sensiolabs.org/">Twig</a> to make creating powerful, dynamic themes quick and easy.</p>',
                                'title' => 'Twig Templating'
                            ],
                            1 => [
                                'icon' => 'fa fa-newspaper-o',
                                'subtitle' => '',
                                'description' => '<p>Drag-and-drop functionality gives you the power to place content blocks, resize them, and configure their unique settings in seconds.</p>',
                                'title' => 'Layout Manager'
                            ],
                            2 => [
                                'icon' => 'fa fa-cubes',
                                'subtitle' => '',
                                'description' => '<p>Create, configure, and manage content blocks as well as special features and functionality with the powerful particle system.</p>',
                                'title' => 'Particles System'
                            ]
                        ]
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'copyright-2844' => [
                    'attributes' => [
                        'owner' => 'Star Reisen'
                    ]
                ],
                'social-2031' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social-items'
                        ],
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'title' => '',
                                'link' => 'http://starreisen.at',
                                'name' => 'Twitter'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'title' => '',
                                'link' => 'http://starreisen.at',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-google',
                                'text' => 'Google',
                                'title' => '',
                                'link' => 'http://starreisen.at',
                                'name' => 'Google'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'branding-8758' => [
                    'attributes' => [
                        'content' => 'Powered by Joomla and <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>'
                    ],
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'mobile-menu-7603' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
