<?php

// Hotel Array
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
    <title>PHP Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="p-5">
    <form action="index.php" method="get" class="mb-3">
        <!-- Get all results -->
        <div class="all-results">
            <input type="radio" name="parking" value="no" id="parking-no">
            <label for="parking-no">Trova tutti i risultati</label>
        </div>
        <!-- // Get all results -->

        <!-- Get only results with a parking -->
        <div class="only-parking">
            <input type="radio" name="parking" value="yes" id="parking-yes">
            <label for="parking-yes">Trova solo i risultati con un parcheggio</label>
        </div>
        <!-- // Get only results with a parking -->

        <button type="submit">Filtra</button>
    </form>

    <!-- Change $only_parking value -->
    <?php $only_parking = ($_GET['parking'] == 'yes') ? true : false;
    var_dump($_GET['parking']);
    var_dump($only_parking); ?>
    <!-- // Change $only_parking value -->

    <!-- Hotels Table -->
    <table class="table table-light table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro città</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php for ($i = 0; $i < count($hotels); $i++) {
                $hotel = $hotels[$i];
                $parking_yes = [];

                if ($hotel['parking'] == true) {
                    $parking_yes = $hotel;
                }
            ?>
                <tr>
                    <th scope="row">
                        <?php echo $hotel['name']; ?>
                    </th>
                    <td>
                        <?php echo $hotel['description']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['parking'] ? 'Sì' : 'No'; ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center'] . ' km'; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- // Hotels Table -->
</body>

</html>