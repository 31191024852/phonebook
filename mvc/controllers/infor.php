<?php
class infor extends Controller{
    function Show($id){        
        $this->user = $this->model("informa");
      
        $this->view("infor", ["GN"=> $this->user->GetUser($id)],   $this->user->updateInfo($id));
    }
}
?>