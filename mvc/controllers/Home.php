<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $teo = $this->model("homepage");
        $this->view("home");
    }

    function Show(){        
        // Call Models
        $teo = $this->model("homepage");

        // Call Views
        $this->view("home");
    }
}
?>