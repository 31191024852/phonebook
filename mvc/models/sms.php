<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

    // Your Account SID and Auth Token from twilio.com/console
    $sid = 'AC40ac9060b02137d55bf047ac7dd1b6cb';
    $token = 'f82982f694f5e8cb8b8d9b7fd1ac860d';
    $client = new Client($sid, $token);

    // Use the client to do fun stuff like send text messages!
    $client->messages->create(
        // the number you'd like to send the message to
        '+84343756559',
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+19125138704',
            // the body of the text message you'd like to send
            'body' => 'Con cho Tuan an Cut'
        ]
    );
    
    

