<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<div>
<?php 
    $matches = [
        [
            'home' => 'Olimpia Milano',
            'guests' => 'Cantù',
            'pointsHome' => '55',
            'pointsGuests' => '60'
        ],

        [
            'home' => 'Bari',
            'guests' => 'Capurso',
            'pointsHome' => '75',
            'pointsGuests' => '54'
        ],

        [
            'home' => 'Foggia',
            'guests' => 'Monopoli',
            'pointsHome' => '87',
            'pointsGuests' => '56'
        ],

        [
            'home' => 'Bergamo',
            'guests' => 'Turris',
            'pointsHome' => '62',
            'pointsGuests' => '48'
        ],

        [
            'home' => 'Venezia',
            'guests' => 'Palermo',
            'pointsHome' => '96',
            'pointsGuests' => '86'
        ],

        [
            'home' => 'Napoli',
            'guests' => 'Roma',
            'pointsHome' => '50',
            'pointsGuests' => '68'
        ]
    ];

    for($i = 0; $i < count($matches); $i++){
        echo $matches[$i]['home'] . ' - ' . $matches[$i]['guests']. ' | ' . $matches[$i]['pointsHome'] . ' - ' . $matches[$i]['pointsGuests'] . "<br>";
    }
?>

</div>
</body>
</html>