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

    // se la password è valida
    if($password_valid){
        // Redirect
        header('Location: ./thankyou.php');
        session_start();

        // variabili per la thankyou page
        $_SESSION['alert_class'] = "alert-success";
        $_SESSION['alert-text'] = "Password (abbastanza) sicura generata con successo";
        $_SESSION ['password']= $password_valid;

        // interrompo esecuzione
        exit;

    } 
    // se password non valida
    else{
        $alert_class = "alert-danger";
        $alert_text = "Ritenta";
    }
}
