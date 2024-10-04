<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

Dotenv::createImmutable(__DIR__ . '/../')->load();

$password = password_hash($_ENV['user_password_admin'], PASSWORD_BCRYPT);

$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Crear la base de datos
$sql_create_db = 'DROP DATABASE IF EXISTS school; CREATE DATABASE school;';

if ($conn->multi_query($sql_create_db)) {
    // Asegurarse de procesar los resultados
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->more_results() && $conn->next_result());

    echo "Database created successfully\n";

    // Conectar a la nueva base de datos
    $conn->select_db('school');

    // Crear tablas y datos
    $sql_setup = "
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

        CREATE TABLE IF NOT EXISTS `news` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `user_id` int(11) NOT NULL,
            `title` varchar(255) NOT NULL,
            `content` text NOT NULL,
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `image_url` varchar(255) NOT NULL,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
        );
    ";

    if ($conn->multi_query($sql_setup)) {
        do {
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->more_results() && $conn->next_result());

        echo 'Tables created successfully';
    } else {
        echo 'Error creating tables: ' . $conn->error;
    }
} else {
    echo 'Error creating database: ' . $conn->error;
}

$conn->close();
?>

