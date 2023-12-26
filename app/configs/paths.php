<?php

return [
    'system' => [
        'framework' => 'framework',
        'helpers' => [
            'main' => 'framework/src/Helpers',
            'paths' => 'framework/src/Helpers/paths',
            'views' => 'framework/src/Helpers/views',
        ],
    ],

    'public' => [
        'public' => 'public',
        'assets' => [
            'css' => 'public/assets/css',
            'js' => 'public/assets/js',
            'image' => 'public/assets/img',
            'fonts' => 'public/assets/fonts',
        ],
    ],
    
];