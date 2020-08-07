<?php

return [
    // ...

    'unavailable_audits' => 'No Article Audits available',

    'updated'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] updated this :audit_tags via :audit_url',
        'modified' => [
            'detail'   => 'The :attr has been changed from <strong>:old</strong> to <strong>:new</strong>',
        ],
    ],

    'created'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] created a new :audit_tags via :audit_url',
        'modified' => [
            'detail'   => ':attr of new record is <strong>:new</strong>',
        ],
    ],

    'deleted'            => [
        'metadata' => 'On :audit_created_at, :user_name [:audit_ip_address] deleted this :audit_tags via :audit_url',
        'modified' => [
            'detail'   => 'The :audit_tags <strong>:old</strong> was deleted',
        ],
    ],
    // ...
];