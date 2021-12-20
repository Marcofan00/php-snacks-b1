<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<h1>
<?php 
    $name = $_GET['name'];

    $email = $_GET['email'];

    $age = $_GET['age'];

    if (strlen($name) > 3  && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age)) {
        echo "Accesso Riuscito";
    } else {
        echo "Accesso Negato";
    }
?>
</h1>
</body>
</html>