<?php

// sessions config
session_name('sessionidschool');  // Nombre de la sesión
session_start();  // Iniciar sesión

ini_set('session.cookie_secure', '1');  // Solo enviar cookies sobre HTTPS
ini_set('session.cookie_httponly', '1');  // No accesible desde JavaScript
ini_set('session.cookie_lifetime', 3600);  // 1 hora de duración
