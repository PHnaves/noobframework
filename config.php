<?php

return [
    'DB_DRIVER' => $_ENV['DB_DRIVER'] ?? 'mysql',
    'DB_HOST' => $_ENV['DB_HOST'] ?? '127.0.0.1',
    'DB_PORT' => $_ENV['DB_PORT'] ?? '3306',
    'DB_DATABASE' => $_ENV['DB_DATABASE'] ?? 'taskHive',
    'DB_USERNAME' => $_ENV['DB_USERNAME'] ?? 'root',
    'DB_PASSWORD' => $_ENV['DB_PASSWORD'] ?? '',
];
