<?php
return [
    'enable' => true,
    "paths" => [
        "migrations" => "database/migrations",
        "seeds" => "database/seeders"
    ],
    "environments" => [
        "default_migration_table" => "phinxlog",
        "default_environment" => "product",
        "product" => [
            "adapter" => "mysql",
            "host" => env("DB_HOST", '127.0.0.1'),
            "name" => env("DB_NAME", ''),
            "user" => env("DB_USER", ''),
            "pass" => env("DB_PASSWORD", ''),
            "port" => env("DB_PORT", '3306'),
            "charset" => "utf8"
        ]
    ]
];
