<?php
class infor extends Controller{
    function Show(){   
        if(isset($_SESSION['ID'])){
            $id = $_SESSION['ID']; 
            $this->user = $this->model("informa");
      
            $this->view("infor", ["GN"=> $this->user->GetUser($id)],   $this->user->updateInfo($id));
        } 
        else{
            $teo = $this->model("homepage");
            $this->view("home");
        }    
        
    }
}
?>