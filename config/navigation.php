<?php

return [

/*
    |--------------------------------------------------------------------------
    | Navigational Items
    |--------------------------------------------------------------------------
    |
    | Here is where you define the navigational items and their sub items.
    | If you have defined sub-navigational items, then badges will be ignored for this particular item
    |
    */

    'sidebar' => [
    
        [
            'icon'              => 'fa-home', 
            'label'             => 'Menu Item 1', 
            'route'             => '/home',
            'sub-navigation'    => [
                [
                    'sub-icon'  => 'fa-circle-o',
                    'sub-label' => 'Sub Menu Item 1',
                    'sub-route' => '/home',
                ],
                [
                    'sub-icon'  => 'fa-circle-o',
                    'sub-label' => 'Sub Menu Item 2',
                    'sub-route' => '/home',
                ]
            ],
        ],

        [
            'icon'  => 'fa-dashboard', 
            'label' => 'Menu Item 2', 
            'route' => '/home',
            'badge' => [
                'bg_colour_class' => 'bg-green'
            ]
        ],

        [
            'icon'  => 'fa-users', 
            'label' => 'Menu Item 3', 
            'route' => '/home'
        ]

    ]

];