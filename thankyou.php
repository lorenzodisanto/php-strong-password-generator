<?php

session_start();

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
        <!-- stampo la password generata -->      
        <div class="alert mt-4 <?=  $_SESSION['alert_class'] ?>">
          <h4><?= $_SESSION['alert-text'] ?></h4>
          <code class="fs-4"><?php echo $_SESSION ['password']?> </code>            
        </div>       
    </div>
</body>
</html>