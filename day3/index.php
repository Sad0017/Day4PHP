<?php

require_once('database.php');

$seriesQuery = $db->prepare('SELECT * FROM formulairenote');
$seriesQuery->execute([]);
$allSeries = $seriesQuery->fetchAll();

?>


<h2> Quelques avis sur les séries ...</h2>

<?php

foreach ($allSeries as $series){
    echo '<b>'.$series['serie'].'</b>, par   '.'<i>'.$series['name'].'</i>'.' Note donnée :'.$series['mark'].'/20'.'</br>';

}


?>

<a href="index.php">Ajouter un commentaire sur une série.</a>
