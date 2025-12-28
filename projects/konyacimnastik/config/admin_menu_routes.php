<?php

return [

    'dashboard' => [
        'title' => 'Dashboard',
        'icon' => 'solar:home-smile-angle-outline',
        'route' => 'admin.dashboard',
        'permission' => 'dashboard.view',
    ],

    'settings' => [
        'title' => 'Settings',
        'icon' => 'icon-park-outline:setting-two',
        'permission' => 'settings.manage',
        'children' => [
            [
                'title' => 'Company',
                'route' => 'admin.company',
                'permission' => 'settings.manage',
            ],
            [
                'title' => 'Theme',
                'route' => 'admin.theme',
                'permission' => 'settings.manage',
            ],
            [
                'title' => 'Menus',
                'route' => 'admin.menus.index',
                'permission' => 'settings.manage',
            ],
        ],
    ],

    'blog' => [
        'title' => 'Blog',
        'icon' => 'ri-news-line',
        'permission' => 'blog.view',
        'children' => [
            [
                'title' => 'Blog List',
                'route' => 'admin.blog',
                'permission' => 'blog.view',
            ],
            [
                'title' => 'Add Blog',
                'route' => 'admin.addBlog',
                'permission' => 'blog.create',
            ],
        ],
    ],

    'users' => [
        'title' => 'Users',
        'icon' => 'flowbite:users-group-outline',
        'permission' => 'users.view',
        'children' => [
            [
                'title' => 'Users List',
                'route' => 'admin.usersList',
                'permission' => 'users.view',
            ],
            [
                'title' => 'Add User',
                'route' => 'admin.addUser',
                'permission' => 'users.manage',
            ],
        ],
    ],

];
