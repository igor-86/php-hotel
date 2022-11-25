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
        'distance_to_center' => 50
    ],

];



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
</head>

<body>
    <div class="hotel-list">
        <h2>Con semplice ciclo For</h2>
        <div class="card">
            <?php
            for ($i = 0; $i < count($hotels); $i++) {
                $list_hotel = $hotels[$i];
            ?>
                <div class="title">
                    <h4> <?php echo $list_hotel["name"] ?> </h4>
                    <h5> <?php echo $list_hotel["description"] ?></h5>
                    <h5> <?php echo $list_hotel["parking"] ?></h5>
                    <h5> <?php echo $list_hotel["vote"] ?></h5>
                    <h5> <?php echo $list_hotel["distance_to_center"] ?></h5>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="hotel-list">
        <h2>Ciclo ForEach</h2>
        <div class="card">
            <?php
            foreach ($hotels as $index => $hotel) { ?>
                <h2>Hotels <?php echo $index; ?></h2>
                <?php foreach ($hotel as $key => $inner) { ?>
                    <h4> <?php echo $key; ?></h4>
                    <span> <?php echo $inner; ?></span>

                <?php }; ?>
            <?php }; ?>
        </div>
    </div>
</body>

</html>