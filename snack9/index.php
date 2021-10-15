<!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
<?php

    include __DIR__ . '/data/database.php';

    if (isset($_GET['parking'])) {
        $filteredHotels = [];
        foreach ($hotels as $hotel) {
            ($hotel['parking'] ? array_push($filteredHotels, $hotel) : null);
        }
    } else if (isset($_GET['stars'])) {
        $stars = $_GET['stars'];
        $filteredHotels = [];
        foreach ($hotels as $hotel) {
            ($hotel['vote'] >= $stars ? array_push($filteredHotels, $hotel) : null);
        }
    } else if (isset($_GET['km'])) {
        $km = $_GET['km'];
        $filteredHotels = [];
        foreach ($hotels as $hotel) {
            ($hotel['distance_to_center'] <= $km ? array_push($filteredHotels, $hotel) : null);
        }
    } else {
        $filteredHotels = $hotels;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9</title>
</head>
<body>
    <ul>
        <?php foreach($filteredHotels as $hotel) { ?>
            <li><?php echo $hotel['name'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>