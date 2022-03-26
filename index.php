<?php
session_start();
define('BASE_URL', "http://localhost/phonebook");
require_once "./mvc/Bridge.php";
$myApp = new App();
?>