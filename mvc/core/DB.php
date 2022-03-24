<?php

class DB{

    public $con;
    protected $servername = "phonebookgr2.c7svklteswdd.ap-southeast-1.rds.amazonaws.com";
    protected $username = "admin";
    protected $password = "password";
    protected $dbname = "phonebook";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}

?>