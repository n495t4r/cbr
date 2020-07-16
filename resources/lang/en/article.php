<?php

return [
    // ...

    'unavailable_audits' => 'No Article Audits available',

    'updated'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] updated this record via :audit_url',
        'modified' => [
            'name'   => 'The :attr has been modified from <strong>:old</strong> to <strong>:new</strong>',
            'description' => 'The :attr has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],

    'created'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] updated this record via :audit_url',
        'modified' => [
            'name'   => ':attr of new user is <strong>:new</strong>',
            'description' => 'The :attr has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],

    'deleted'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] updated this record via :audit_url',
        'modified' => [
            'name'   => 'The :attr has been deleted from <strong>:old</strong> to <strong>:new</strong>',
            'description' => 'The :attr has been modified from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],
    // ...
];