<?php
class login extends controller{
    function Show(){
        $teo=$this->model("userAccount");
        $teo->login();
        $this->view("loginView",[]);
    }
}
?>