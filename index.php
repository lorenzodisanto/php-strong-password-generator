<?php 

// composizione password
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$special = '!@#$%^&*()_+-={}[];\,./<>?:"|';

// unisco caratteri in un unica variabile
$chars = $lowercase . $uppercase . $numbers . $special;


// inizializzo password vuota
$password ='';

// funzione genera password 
function genRandomPassword($chars, $password_length, $password){
    while(strlen($password) < $password_length){
        $index = random_int(0, strlen($chars) - 1);
        $password .= $chars[$index];
    }
 return $password;
};



// verifico se il form è stato inviato
$form_sent = !empty($_GET);

// se il form è stato inviato
if($form_sent){
    $password_length = $_GET["password-length"];
    $password_valid = genRandomPassword($chars, $password_length, $password);
    var_dump($password_valid);

    // classe alert
    $alert_class = $password_valid ? "alert-success" : "alert-danger";

    // testo alert
    $alert_text = $password_valid ? "Password generata con successo" : "Ritenta";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3">
        <h1>Strong Password Generator</h1>
        <!-- Form -->
        <form method="GET">           
            <label for="password-length" class="form-label">Inserisci lunghezza password</label>
            <input type="number" class="form-control mb-3" name="password-length" id="password-length" >
            <button class="btn btn-primary">Genera password</button>           
        </form>
        <!-- stampo la password generata -->
        <?php if($form_sent): ?>
            <div class="alert mt-4 <?= $alert_class ?>">
                <h4><?= $alert_text?></h4>
                 <?php echo $password_valid?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>