<?php
require __DIR__ . '/vendor/autoload.php'; // load the Twilio PHP library

// set your Twilio account credentials
$sid = 'AC550c425628b9e0e6d7d5aa8052abcae9';
$token = 'fbef7c6731426b3c473ff07777b91869';

// set up a Twilio client object
$client = new Twilio\Rest\Client($sid, $token);

// generate a random 6-digit code for the OTP
$code = rand(100000, 999999);

// set the phone number to receive the OTP
$to = '+1234567890';

// send the OTP via SMS
$message = $client->messages->create(
    $to,
    array(
        'from' => '+14158141829', // your Twilio phone number
        'body' => 'Your OTP is: ' . $code,
    )
);

// save the OTP code to a database or session variable for verification
$_SESSION['otp'] = $code;