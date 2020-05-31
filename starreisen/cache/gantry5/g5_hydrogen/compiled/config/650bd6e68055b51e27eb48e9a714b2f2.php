<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1590928867,
    'checksum' => '4526c0158553b96d1072add6a77e006a',
    'files' => [
        'templates/g5_hydrogen/custom/config/_offline' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/_offline/index.yaml',
                'modified' => 1590928134
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/_offline/layout.yaml',
                'modified' => 1590928134
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '_offline',
            'timestamp' => 1590928134,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1590928134
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'main' => 'Main',
                'footer' => 'Footer'
            ],
            'particles' => [
                'logo' => [
                    'logo-3161' => 'Logo'
                ],
                'spacer' => [
                    'spacer-6423' => 'Spacer',
                    'spacer-7830' => 'Spacer'
                ],
                'messages' => [
                    'system-messages-8875' => 'System Messages'
                ],
                'content' => [
                    'system-content-3675' => 'Page Content'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-5375' => 'Copyright'
                ],
                'branding' => [
                    'branding-3573' => 'Branding'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/offline.png',
                'name' => '_offline',
                'timestamp' => 1590928134
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-3161 30',
                        1 => 'spacer-6423 70'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-8875'
                    ],
                    1 => [
                        0 => 'system-content-3675'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-5375 40',
                        1 => 'spacer-7830 30',
                        2 => 'branding-3573 30'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
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
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
