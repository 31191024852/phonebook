<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


if(isset($_POST['action'])&&!empty($_SESSION['ID'])){
    // Your Account SID and Auth Token from twilio.com/console
    $sid = $_POST['sid'];
    $token = $_POST['token'];
    $client = new Client($sid, $token);
    $phone = '+'+$_POST['phone'];
    $myphone = '+'+$_POST['myphone'];
    // Use the client to do fun stuff like send text messages!
    $message = $client->messages->create(
        // the number you'd like to send the message to
        $phone,
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => $myphone,
            // the body of the text message you'd like to send
            'body' => $_POST['message']
        ]
    );
    if($message->id){
        header("Location: ?send=done");
    }else{
        header("Location: ?send=fail");
    }
    
}
    
    
    

