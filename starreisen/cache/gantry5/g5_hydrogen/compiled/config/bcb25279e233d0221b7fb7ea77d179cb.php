<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1618174923,
    'checksum' => '87f02ed786adf0da4fb09435a5e44026',
    'files' => [
        'templates/g5_hydrogen/custom/config/12' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/12/index.yaml',
                'modified' => 1617562891
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/12/layout.yaml',
                'modified' => 1617562891
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => 12,
            'timestamp' => 1617562891,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1590928134
            ],
            'positions' => [
                'header-a' => 'Module Position'
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
                    'position-position-5503' => 'Module Position'
                ],
                'module' => [
                    'position-module-5611' => 'Module Instance'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'main' => 'main',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas'
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
            ]
        ]
    ]
];
