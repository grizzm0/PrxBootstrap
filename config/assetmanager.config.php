<?php
return [
    'filters' => [
        'css' => [
            ['filter' => 'Lessphp'],
        ],
    ],

    'resolver_configs' => [
        'map' => [
            // CSS
            'asset/css/bootstrap.css' => getcwd() .'/vendor/twitter/bootstrap/less/bootstrap.less',

            // Fonts
            'asset/fonts/glyphicons-halflings-regular.eot'  => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.eot',
            'asset/fonts/glyphicons-halflings-regular.svg'  => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.svg',
            'asset/fonts/glyphicons-halflings-regular.ttf'  => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.ttf',
            'asset/fonts/glyphicons-halflings-regular.woff' => getcwd() .'/vendor/twitter/bootstrap/fonts/glyphicons-halflings-regular.woff',

            // JS
            'asset/js/bootstrap.js' => getcwd() .'/vendor/twitter/bootstrap/dist/js/bootstrap.js',
        ],
    ],
];
