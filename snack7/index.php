<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php

    include __DIR__ . '/partials/database.php';

    foreach($students as $student) {
        echo 'Nome: ' . $student['name'] . '</br>';
        echo 'Cognome: ' . $student['lastname'] . '</br>';
        echo 'Media voti: ' . mediaVoti($student['votes']) . '</br></br>';
    }

    function mediaVoti($array){
        // $lenght = count($array);
        // $sum = 0;
        // foreach($array as $vote){
        //     $sum += $vote;
        // }
        // $average = $sum / $lenght;
        // return $average;
        return array_sum($array) / count($array);
    }
?>