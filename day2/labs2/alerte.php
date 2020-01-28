<link rel="stylesheet" href="styletheo.css" >

<?php



$prenom = $_POST["prenom"] ?? '';
$nom = $_POST["nom"] ?? '';
$email = $_POST["email"] ?? '';
$adresse = $_POST["adresse"] ?? '';
$city = $_POST["city"] ?? '';
$postcode = $_POST["postcode"] ?? '';




echo "
<table>
  <tr>
    <td colspan='2' id='titre'> Vos informations</td>
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
  <tr >
    <td colspan='2' id='retour' ><a  href=\"index.php\"> Retour </a></td>
</tr>
</table>

  ";



?>


