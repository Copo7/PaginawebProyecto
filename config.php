<?php
ini_set('display_errors','On');
ini_set('error_reporting', E_ALL );
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'contraseña');
define('DB_NAME', 'tabla');
define('DB_PORT', 3308);

define('SMTP_SERVER', 'smtp.gmail.com');    // Servidor SMTP
define('SMTP_PORT', 465);     // Puerto
define('MAIL_USERNAME', 'webapp.copo');  // Nombre completo
define('MAIL_USER', 'correo@g.educaand.es');      // Nombre de usuario
define('MAIL_PASS', '');      // Password
define('SMTP_AUTH', true);
define('SMTP_SECURE', 'ssl');