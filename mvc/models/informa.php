<?php
class informa extends DB{
    public function GetUser($id){
        $qr = "SELECT * FROM tbl_users WHERE id_user = $id";
        $querry= mysqli_query($this->con,$qr);
        $item= mysqli_fetch_array($querry);
        return  $item;
    }
    public function updateInfo($id)
    {
        if (isset($_POST['nameU'])) {
            $name= $_POST['nameU'];
            $userName = $_POST['nameUser'];
            $phoneUser = $_POST['phoneNumber'];
            $email = $_POST['Emails'];
            $passwordUser = $_POST['passwordUser'];
            $password = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $rePassword = $_POST['newPassConfirm'];
            $location = $_POST['Location'];
            $SID = $_POST['SID'];
            $token = $_POST['token'];
            if (md5($password) == $passwordUser && $newPass == $rePassword) {
                $qr = "UPDATE tbl_users SET  `username` ='$userName',`company`='$location', `SID` = '$SID' ,`token` = '$token',`number`='$phoneUser',`email`='$email',`password`='$newPass',`name`='$name' WHERE id_user=$id";
                $result = mysqli_query($this->con, $qr);
            } elseif ($password=='' && $newPass==''&& $rePassword=='') {
                $qr = "UPDATE tbl_users SET `username` ='$userName',`company`='$location',`SID` = '$SID' ,`token` = '$token',`number`='$phoneUser',`email`='$email',`name`='$name'  WHERE id_user= $id ";
                $result = mysqli_query($this->con, $qr);
               
            } else{
                $result= false;
            }
            if ($result) {
                echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:	#FF421a; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Cập nhật thành công</h2>
                        </div>  
                    </div>
                </div>
                ";
            } else {
                echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#ff0000; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> Cập nhật không thành công</h2>
                        </div>  
                    </div>
                </div>";
            }
        }
    }

}
?>