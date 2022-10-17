<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/


$teamArray = [

    'ht' => [
    [
      'home' => 'Olimpia Milano',
      'ospite' => 'Virtus Bologna',
      'point' => '85 - 86'
    ],
    [
        'home' => 'Orlandina Capo DOrlando',
        'ospite' => 'Lottomatica Roma',
        'point' => '97 - 94'
    ],
    [
        'home'=> 'Fortitudo Bologna',
        'ospite'=> 'Benetton Treviso',
        'point'=> ' - 76'

    ]],



   





?>


<h1>Serie A Basket</h1>



<?php
for ($i=0; $i < count($teamArray); $i++){
    $teamArray = $teamArray[$i];
    ?>
    <div>
        <p><?= $teamArray['home'] ?> vs <?= $match['ospite'] ?> | <?= $match['point'] ?></p>
    </div>
    <?php
}

?>