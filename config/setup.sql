DROP DATABASE IF EXISTS school;
CREATE DATABASE school;

use school;


CREATE TABLE IF NOT EXISTS `users` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`name` varchar(255) NOT NULL,
		`email` varchar(255) NOT NULL,
		`password` varchar(255) NOT NULL,
		PRIMARY KEY (`id`)
);

INSERT INTO users (name, email, password) VALUES (
    'yourname',
    'youremail',
    'yourpassword'
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

