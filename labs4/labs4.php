<?php

$user = array('Théo','Axel','Louis');

$nom = ['Théo' => "Bezin", 'Axel' => "Busine", 'Louis' => "Robert"];
$ville = ['Théo' => "Tokyo", 'Axel' => "Monaco", 'Louis' => "Los Angeles"];
$age = ['Théo' => 19, 'Axel' => 25, 'Louis' => 21];



foreach($user as $prenom){
    echo $prenom." ".$nom[$prenom]." habite à ".$ville[$prenom]." et a ".$age[$prenom]." ans."."<br>";
}


$comptes = [
    'Bezin' => [
        'prenom' => 'Théo',
        'city' => 'Tokyo',
        'age' => 19,
    ],
    'Robert' => [
        'prenom' => 'Louis',
        'city' => 'Los Angeles',
        'age' => 21,
    ],
    'Busine' => [
        'prenom' => 'Axel',
        'city' => 'Monaco',
        'age' => 25,
    ],
];

foreach ($comptes as $name => $compte) {
    echo $name . $compte['city'];
}


?>