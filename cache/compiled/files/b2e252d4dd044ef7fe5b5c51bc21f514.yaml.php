<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/bookingSystem/user/config/plugins/email.yaml',
    'modified' => 1577009444,
    'size' => 415,
    'data' => [
        'enabled' => true,
        'from' => 'skigulmarg@skigulmarg.com',
        'to' => 'skigulmarg@skigulmarg.com',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'skigulmarg.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'skigulmarg@skigulmarg.com',
                'password' => 'SkigulmarG!1'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
