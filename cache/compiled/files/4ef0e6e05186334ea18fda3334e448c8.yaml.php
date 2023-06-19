<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/bookingSystem/user/config/backups.yaml',
    'modified' => 1562114702,
    'size' => 360,
    'data' => [
        'purge' => [
            'trigger' => 'number',
            'max_backups_count' => 5,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Default Site Backup',
                'root' => '/',
                'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules',
                'schedule' => true,
                'schedule_at' => '0 0,3 * * 7'
            ]
        ]
    ]
];
