<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. 
Olimpia Milano - Cantù | 55-60 -->
<?php
    $array = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Cantù',
            'puntiCasa' => rand(50, 90),
            'puntiOspite' => rand(50, 90)
        ],
        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraOspite' => 'Varese',
            'puntiCasa' => rand(50, 90),
            'puntiOspite' => rand(50, 90)
        ],
        [
            'squadraCasa' => 'Reyer Venezia',
            'squadraOspite' => 'Treviso',
            'puntiCasa' => rand(50, 90),
            'puntiOspite' => rand(50, 90)
        ],
        [
            'squadraCasa' => 'Dinamo Sassari',
            'squadraOspite' => 'Ginnastica Roma',
            'puntiCasa' => rand(50, 90),
            'puntiOspite' => rand(50, 90)
        ],
        [
            'squadraCasa' => 'V.L. Pesaro',
            'squadraOspite' => 'Fortitudo Bologna',
            'puntiCasa' => rand(50, 90),
            'puntiOspite' => rand(50, 90)
        ]
    ];

    for($i = 0; $i < count($array); $i++){
        echo $array[$i]['squadraCasa'] . ' - ' . $array[$i]['squadraOspite'] . ' | ' . $array[$i]['puntiCasa'] . '-' . $array[$i]['puntiOspite'] . '</br>';
    }
?>