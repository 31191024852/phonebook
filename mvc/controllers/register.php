<?php
class register extends controller{
    function Show(){
        $teo=$this->model("userAccount");
        $teo->register();
        $this->view("register",[]);
    }
}
?>