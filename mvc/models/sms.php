<?php
// Required if your environment does not handle autoloading
require_once '../../vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

class sms extends DB{
    public function Send($id_send, $message){
        $qr ="SELECT `number` FROM `tbl_friends` WHERE `id`= ".$id_send;    
        $result = mysqli_query($this->con, $qr);
        if($result->num_rows){
            $data = mysqli_fetch_assoc($result);
            $phone = $data['number'];
            if(isset($_SESSION['ID'])){
                // Your Account SID and Auth Token from twilio.com/console
                $sid = $_SESSION['SID'];
                $token = $_SESSION['token'];
                $client = new Client($sid, $token);
                $myphone = $_SESSION['number'];
                try{
                    // Use the client to do fun stuff like send text messages!
                    $message = $client->messages->create(
                    // the number you'd like to send the message to
                        $phone,
                        [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => $myphone,
                        // the body of the text message you'd like to send
                        'body' => $message
                        ]
                    );
                    
                }catch(Exception $exception){
                    return false;
                }
                if($message){
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }

        
    }
    
}


    
    
    

