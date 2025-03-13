<?php
session_start();
$titulo="contact";
$vista="contact-us";

require('../vistas/public/plantilla.html.php');
unset($_SESSION['ok']);
unset($_SESSION['ko']);