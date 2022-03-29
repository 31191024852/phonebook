<?php 
class BookModel extends DB{
    public function GetBook(){
        $sql = "SELECT * FROM tbl_friends";
        $result = $this->con->query($sql);
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
//add data to tbl_friends
    public function AddBook($iduser, $name, $companyname, $number, $email, $address){
        $sql = "INSERT INTO tbl_friends(id_user, name, company_name, number, email, address) VALUES('$iduser', '$name', '$companyname', '$number', '$email', '$address')";
        $result = $this->con->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    //delete data from tbl_friends
    public function DeleteBook($id){
        $sql = "DELETE FROM tbl_friends WHERE id = $id";
        $result = $this->con->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    //update data from tbl_friends
    public function UpdateBook($id,$companyname, $name, $number, $email, $address)
    {
        $sql = "UPDATE tbl_friends SET name = '$name', company_name ='$companyname',number = '$number', email = '$email', address = '$address' WHERE id = $id";
        $result = $this->con->query($sql);
        if ($result) {
        
            echo "<script> alert('Cập nhật thành công');</script>";
        } else {
            echo "<script> alert('Cập nhật dell thành công');</script>";

            
        }
    }
    public function Fetch($id)
    {
            $query = "SELECT * FROM tbl_friends WHERE id = $id";
            $result = $this->con->query($query);
            $row = mysqli_fetch_array($result);
            echo json_encode($row);
    }
}
?>