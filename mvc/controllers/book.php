<?php

// http://localhost/live/Home/Show/1/2

class Book extends Controller{
    function Show(){
        if(isset($_SESSION['ID'])){
            //call model
        $data = $this->model("bookModel");
        $list = $data->GetBook();
        if(isset($_POST['name'])){
            $iduser = $_SESSION['ID'];
            $name = $_POST['name'];
            $companyname = $_POST['companyname'];
            $phone = $_POST['number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
           
            $data->AddBook($iduser, $name, $companyname, $phone, $email, $address);
            header("Location: book");
        }
        if(isset($_POST['e_id'])){
            $id = $_POST['e_id'];
            $name = $_POST['e_name'];
            $companyname = $_POST['e_companyname'];
            $phone = $_POST['e_number'];
            $email = $_POST['e_email'];
            $address = $_POST['e_address'];
           
            $data->UpdateBook($id, $name, $companyname, $phone, $email, $address);
            header("Location: book");
        }
        if (isset($_POST["delete_id"])) {
            $data->DeleteBook($_POST["delete_id"]);
            header("Location: book");
        }
        if( isset($_POST["s_id"])){
            $data2 = $this->model('sms');
            if($data2->Send($_POST["s_id"],$_POST["s_message"])){
                header("Location: ".BASE_URL."/book&send=done");
            }else{
                header("Location: ".BASE_URL."/book&send=fail");
            }
        }
        if( isset($_POST["g_id"])){
            $data3 = $this->model('email');
            if($data3->sendEmail($_POST["g_id"],$_POST["g_subject"],$_POST["g_message"])){
                header("Location: ".BASE_URL."/book&send=done");
            }else{
                header("Location: ".BASE_URL."/book&send=fail");
            }
        }
        
        // Call Views
        $this->view("book",["contacts"=>$list]);
        }else{
            $teo = $this->model("homepage");
            $this->view("home");
        }
    }
}
