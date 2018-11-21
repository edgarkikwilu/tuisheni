<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'c,r,u,d'
        ],
        'author' => [
            // 'users' => 'c,r,u,d',
            'profile' => 'c,r,u,d'
        ],
        'teacher' => [
            'profile' => 'r,u'
        ],
        'student' => [
            'profile' => 'r,u'
        ],
        'parent' => [
            'profile' => 'r,u'
        ],
        // 'user' => [
        //     'profile' => 'r,u'
        // ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
