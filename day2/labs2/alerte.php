<link rel="stylesheet" href="styletheo.css" >

<?php



$prenom = htmlspecialchars($_POST["prenom"]) ?? '';
$nom = $_POST["nom"] ?? '';
$email = $_POST["email"] ?? '';
$adresse = $_POST["adresse"] ?? '';
$city = $_POST["city"] ?? '';
$postcode = $_POST["postcode"] ?? '';

if(empty($_POST['prenom'])){
    echo "<script> alert('Veuillez entrer votre prénom')</script>";
}


echo "
<table>
  <tr>
    <td colspan='2'> Vos informations</td>
  </tr>
  <tr>
    <td>Prénom </td>
    <td> $prenom </td>
  </tr>
  <tr>
    <td>Nom </td>
    <td> $nom </td>
  </tr>
  <tr>
    <td>E-mail </td>
    <td> $email </td>
  </tr>
  <tr>
    <td>Adresse </td>
    <td> $adresse </td>
  </tr>
  <tr>
    <td>Ville </td>
    <td> $city </td>
  </tr>
  <tr>
    <td>Code postale </td>
    <td> $postcode </td>
  </tr>
</table>
  ";



?>