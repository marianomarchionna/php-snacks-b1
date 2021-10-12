<!-- Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.  -->
<?php 

    include __DIR__ . '/partials/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Snack 6</title>
</head>
<body>
    <div class="square gray">
        <?php
            foreach($db as $key => $value){
                if ($key === 'teachers') {
                    foreach($value as $teacher){
                        echo 'Nome: ' . $teacher['name'].'</br>';
                        echo 'Cognome: ' . $teacher['lastname'].'</br>';
                    }
                }
            }
        ?>
    </div>

    <div class="square green">
        <?php
            foreach($db as $key => $value){
                if ($key === 'pm') {
                    foreach($value as $pm){
                        echo 'Nome: ' . $pm['name'].'</br>';
                        echo 'Cognome: ' . $pm['lastname'].'</br>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>