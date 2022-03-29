<?php
session_start();
include_once "../../mvc/core/DB.php";
include_once "../../mvc/models/informa.php";
    $id = isset($_SESSION['ID'])? $_SESSION['ID'] : '';
    $up = new informa();
    echo $id;
    $up-> updateInfo($id);

?>