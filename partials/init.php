<?php

require_once __DIR__ . "/functions.php";

// composizione password
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$special = '!@#$%^&*';

// unisco caratteri in un unica variabile
$chars = $lowercase . $uppercase . $numbers . $special;


// inizializzo password vuota
$password ='';

// verifico se il form è stato inviato
$form_sent = !empty($_GET);

// se il form è stato inviato
if($form_sent){
    $password_length = $_GET["password-length"];
    $password_valid = genRandomPassword($chars, $password_length, $password);

    // classe alert
    $alert_class = $password_valid ? "alert-success" : "alert-danger";

    // testo alert
    $alert_text = $password_valid ? "Password generata con successo" : "Ritenta";
}
