<!-- Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. -->
<?php

    include __DIR__ . '/data/database.php';

    $avaiable = [];
    foreach ($ads as $publicity) {
        if ($publicity['is_active']) {
            $avaiable[] = $publicity; 
        }
    }
    $active = $avaiable[rand(0, count($avaiable)-1)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 8</title>
</head>
<body>
    <img src="<?php echo $active['image_path']?>" alt="">
</body>
</html>