<?php
class userAccount extends db
{
    public function login(){

        if(isset($_SESSION['username'])){
            header('Location:home.php');
        }
        else{
            if(isset($_POST['submit'])){
                $userName = $_POST['email'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM tbl_users WHERE ((`username` = '$userName' OR `email` ='$email')  AND password = '$password')";
                $result = mysqli_query($this->con, $sql);
                if($result->num_rows>0){
                    $row= mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['ID'] = $row['id_user'];
                    header('Location:home');
                }
                else{
                    echo "<script>alert('Email or Password is Wrong.')</script>";
                }
            }
        }
    }

    
    

    public function register(){
        if(isset($_POST['submit'])){
            $email =$_POST['email'];
            $username = $_POST['name'];
            $password = ($_POST['password']);
            $repassword = ($_POST['repassword']);
            if($password == $repassword){
                $sql = "SELECT * FROM tbl_users WHERE `email`='$email' OR `username` = '$username'";
                $result = mysqli_query($this->con,$sql);
                if(!$result->num_rows >0){
                    $sql = "INSERT INTO tbl_users (`username`,`email`,`password`)
                    VALUES ('$username','$email', '$password')";
                    $result = mysqli_query($this->con,$sql);
                    if($result){
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['repassword'] = "";
                        header("Location: " . BASE_URL . "/login&kq=done");
                    }
                    else{
                        echo "<script>alert('Dang ky that bai.')</script>";
                    }
                }
                else{
                    echo "<script>alert('Email or username Already Exists.')</script>";
                }
            }
            else{
                echo "<script>alert('Password Not Matched.')</script>";
            }
        

        }
    }
    
    public function logout(){
        session_destroy();
        header('Location:home');

    }
}
?>