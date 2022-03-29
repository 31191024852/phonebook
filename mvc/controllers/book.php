<?php

// http://localhost/live/Home/Show/1/2

class Book extends Controller{
    function Show(){
        //call model
        $data = $this->model("bookModel");
        $list = $data->GetBook();
        if(isset($_POST['name'])){
            $iduser = "3";
            $name = $_POST['name'];
            $companyname = $_POST['companyname'];
            $phone = $_POST['number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
           
            $data->AddBook($iduser, $name, $companyname, $phone, $email, $address);
            header("Location: http://localhost/phonebook/book/show");
        }
        if (isset($_POST["friend_id"])) {
            $data->Fetch($_POST["friend_id"]);
            $data->UpdateBook($_POST["friend_id"], $_POST["companyname"], $_POST["name"], $_POST["number"], $_POST["email"], $_POST["address"]);
        }
        if (isset($_POST["delete_id"])) {
            $data->DeleteBook($_POST["delete_id"]);
        }
        // Call Views
        $this->view("book",["contacts"=>$list]);
    }
}
?>