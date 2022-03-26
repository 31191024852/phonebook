<?php
session_start();
define('BASE_URL', "https://localhost/phonebook");
require_once "./mvc/Bridge.php";
$myApp = new App();
?>