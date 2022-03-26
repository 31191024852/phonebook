<?php
class logout extends controller{
    function Show(){
        $teo = $this->model("userAccount");
        $teo->logout();
     }     

}
?>