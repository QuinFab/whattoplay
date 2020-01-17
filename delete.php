<?php
require "php-config.php";

if (isset($_SESSION['user_id']))
    session_destroy();

header("Location: registrieren.php");

