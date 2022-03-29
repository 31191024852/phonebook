<?php
require_once("../../mvc/models/bookModel.php");

if(isset($_SESSION["ID"])){
    $data = new BookModel();
    $list = $data->GetBook();
    if(isset($_POST['name'])){
        $iduser = $_SESSION["ID"];
        $name = $_POST['name'];
        $companyname = $_POST['companyname'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
    
        $data->AddBook($iduser, $name, $companyname, $phone, $email, $address);
        header("Location: book");
    }
    if (isset($_POST["friend_id"])) {
        $data->UpdateBook($_POST["friend_id"], $_POST["companyname"], $_POST["name"], $_POST["number"], $_POST["email"], $_POST["address"]);
    }
    if (isset($_POST["delete_id"])) {
        $data->DeleteBook($_POST["delete_id"]);
    }
}