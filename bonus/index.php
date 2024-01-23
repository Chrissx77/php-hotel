<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
        ],

    ];


    $parking = $_GET['parking'];

    echo '
    <form>
        <label >Vuoi il parchegghio?!</label>
        <input type="text" name="parking">
    </form>';

    if ($parking === "si" or $parking === "Si" or $parking === "SI") {
        foreach ($hotels as $hotel) {
            // var_dump($hotel["parking"]);
            if ($hotel['parking'] === true) {
                echo "$hotel[name] <br>";
            }
        }
    }


    $stars = $_GET['stars'];

    echo '
    <form>
        <label >Qunate stelle desidera?</label>
        <input type="text" name="stars">
    </form>
    ';

    foreach ($hotels as $hotel) {
        // var_dump($hotel["parking"]);
        if ($hotel['vote'] >= $stars) {
            echo "$hotel[name] <br>";
        }
    }






    ?>

</body>

</html>