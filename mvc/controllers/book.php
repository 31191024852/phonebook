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
        if(isset($_POST['e_id'])){
            $id = $_POST['e_id'];
            $name = $_POST['e_name'];
            $companyname = $_POST['e_companyname'];
            $phone = $_POST['e_number'];
            $email = $_POST['e_email'];
            $address = $_POST['e_address'];
           
            $data->UpdateBook($id, $name, $companyname, $phone, $email, $address);
            header("Location: http://localhost/phonebook/book/show");
        }
        if (isset($_POST["delete_id"])) {
            $data->DeleteBook($_POST["delete_id"]);
        }
        
        // Call Views
        $this->view("book",["contacts"=>$list]);
    }
}
?>