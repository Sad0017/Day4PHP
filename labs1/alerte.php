<link rel="stylesheet" href="style-alerte.css">

<div id="alerte">

<?php


$age = $_POST["age"];
$genre = $_POST["genre"];

if(empty($_POST['age'])){
        echo "Vous devez rentrer un âge valide";
}
elseif($age>=31 and $age<=51){
  echo "Vous êtes dans la tranche d'âge<br/>";
}else{
  echo "Non mais oh !<br/>";
}

if($genre == "male"){
  echo "Vous êtes un homme";

}elseif($genre == "female"){
  echo "Vous êtes une femme";
}

?>



<div id="bouton">
  <a href="index.php"><input type="button" value="Réessayer" ></a>
</div>

</div>