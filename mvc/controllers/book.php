<?php
class Book extends Controller{
    function Show(){
        //call model
        if(isset($_SESSION["ID"])){
            $data = $this->model("bookModel");
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
            
            // Call Views
            $this->view("book",["contacts"=>$list]);
        }else{
            // Call Models
            $teo = $this->model("homepage");
        // Call Views
            $this->view("home");
        }
    }
}
?>