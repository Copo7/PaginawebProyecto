<?php
session_start();
session_destroy();
setcookie("hora_inicio", "", time() - 3600, "/");
header('Location: login.php');
