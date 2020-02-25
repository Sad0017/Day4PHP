<?php
include 'templates/header.php';
?>

<form id="connexion" method="POST">
    <h2>Connexion</h2>
    <img src="https://img.icons8.com/windows/32/000000/user.png">
    <input type="input" name="id" placeholder="Identifiant"> </br>
    <img src="https://img.icons8.com/metro/26/000000/password.png">
    <input type="password" name="password" placeholder="Mot de passe"> </br>
    <input type="submit" name="submit-connexion" value="Se connecter">


</form>



<?php
include 'templates/footer.php';
?>