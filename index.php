<?php 


require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACbcb39a6b2b592b65b08480345efe5bc0";
$token  = "9202a46eee6745973144e0e239f8c9fd";
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+16092018648", // to 
                           array( 
                               "from" => "+18635324744",       
                               "body" => "Hello from Sujal Patel CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);