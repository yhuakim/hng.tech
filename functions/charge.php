<?php
require_once('../vendor/autoload.php');


\Stripe\Stripe::setApiKey($stripe_secret_key);
// Get the token from the JS script
$token = $_POST['token']['id'];
$amount = $_POST['price'];
$email = $_POST['token']['email'];


// Create a Customer
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token,
));
// Save the customer id in your own database!
// Charge the Customer instead of the card


$charge = \Stripe\Charge::create(array(
    "amount" => $amount.'00',
    "currency" => "ngn",
    "customer" => $customer->id
    // 'source' => $token
));

if($charge){
    http_response_code(200);
}else{
    http_response_code(500);
}


?>