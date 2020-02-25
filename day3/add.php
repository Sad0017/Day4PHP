<!DOCTYPE html>
<html>
<head>
    <title>Day 3</title>
</head>
<body>

<div id="form">
    <form method="post" name="formulaire">
        <h1>Série : </h1>
        <select name="serie">
            <option value="Elite">Elite</option>
            <option value="You" selected>You</option>
            <option value="13 Reasons Why" >13 Reasons Why</option>
        </select>
        <h1>Nom : </h1>
        <input type="input" name="name" placeholder="Nom">
        <h1>Note :</h1>
        <input type="input" name="note" placeholder="Votre note"> </br>
        <input type="submit" name="submit-form" value="Valider">

    </form>


</div>

<?php

if(isset($_POST['submit-form'])) {

    require_once('database.php');

    $name = $_POST['name'] ?? null;
    $serie = $_POST['serie'] ?? null;
    $note = $_POST['note'] ?? null;

    if(!($name && $note)) {
        header('Location: '.$_SERVER['REQUEST_URI']);
    }





    $data = [ $name, $serie, $note];

    $query = $db->prepare('INSERT INTO formulairenote (name, serie, mark) VALUES ( ?, ?, ? )');
    $result = $query->execute( $data );

    if($query->rowCount()) {
        header('Location: liste.php' );
    }





}
?>

</body>
</html>