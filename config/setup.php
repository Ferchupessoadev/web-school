<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

Dotenv::createImmutable(__DIR__)->load();

$password = password_hash($_ENV['user_password_admin'], PASSWORD_BCRYPT);

$sql_setup = "
    DROP DATABASE IF EXISTS school;
    CREATE DATABASE school;
    USE school;
    CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    );

    INSERT INTO users (name, email, password) VALUES (
        '{$_ENV['user_name_admin']}',
        '{$_ENV['user_email_admin']}',
        '$password'
    );
";

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($conn->multi_query($sql_setup)) {
    echo 'Database created successfully';
} else {
    echo 'Error creating database: ' . $conn->error;
}

$conn->close();
