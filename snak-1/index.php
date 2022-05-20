<!-- Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di casa e una squadra 
ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le 
partite con questo schema. Olimpia Milano - Cantù | 55-60  -->

<?php
$play_basket = [
    [
        'squadra_casa' => "Milano",
        'squadra_fuori_casa' => "Roma",
        'punti_casa' => '50',
        'punti_fuoricasa' => '30',
    ],

    [
        'squadra_casa' => "Catania",
        'squadra_fuori_casa' => "Messina",
        'punti_casa' => '20',
        'punti_fuoricasa' => '10',
        
    ],

    [
        'squadra_casa' => "Firenza",
        'squadra_fuori_casa' => "Bari",
        'punti_casa' => '30',
        'punti_fuoricasa' => '60',
        
    ],

];

foreach($play_basket as $basket){
    echo "<h1> $basket[squadra_casa] - $basket[squadra_fuori_casa] || $basket[punti_casa] - $basket[puntifuoricasa]";
}





?>

