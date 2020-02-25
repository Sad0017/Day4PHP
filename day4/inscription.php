<?php
include 'templates/header.php';
include 'database.php';
session_start();

if (isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}
if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if(isset($_POST['submit-inscription'])){
        $pseudo = $_POST['pseudo'] ?? null;
        $plainpassword = $_POST['password'] ?? null;
        $verifpassword = $_POST['verifpassword'] ?? null;

        if(empty($pseudo)){
            $valid = false;
            $er_pseudo = ("Veuillez entrer un nom d'utilisateur");
        }else{
            $check_pseudo = $db -> prepare("SELECT pseudo FROM day4 WHERE pseudo = ?");
            $check_pseudo->execute([$pseudo]);

            if($check_pseudo->rowCount() >= 1){
                $valid = false;
                $er_pseudo = "Le pseudo est déja utilisé";
            }
        }

        if(empty($plainpassword)){
            $valid = false;
            $er_pass = "Le mot de passe ne peut pas être vide";

        }elseif($plainpassword != $verifpassword){
            $valid = false;
            $er_pass = "Les mots de passe ne sont pas identiques";

        }
    }

    if($valid){
        $password = password_hash($plainpassword, PASSWORD_DEFAULT);

        $data = [$pseudo, $password];
        $query = $db->prepare('INSERT INTO day4 (pseudo, password) VALUES ( ?, ? )');
        $result = $query->execute( $data );

    }
}



?>

<form id="inscription" method="POST">
    <h2>Inscription</h2>


    <img src="https://img.icons8.com/windows/32/000000/user.png">
        <input type="input" name="pseudo" placeholder="Identifiant" required>
        </br>

    <img src="https://img.icons8.com/metro/26/000000/password.png">
    <input type="password" name="password" placeholder="Mot de passe" required> </br>
    <img src="https://img.icons8.com/metro/26/000000/re-enter-pincode.png">
    <input type="password" name="verifpassword" placeholder="Répéter le mot de passe" required> </br>
    <?php
    if(isset($er_pass)){
        echo '<i>'.'<p>'.$er_pass.'</p>'.'</i>' ;
    }
    ?>
    <?php
    if(isset($er_pseudo)){
        echo '<i>'.'<p>'.$er_pseudo.'</p>'.'</i>' ;
    }
    ?>
    <input type="submit" name="submit-inscription" value="S'inscrire">


</form>

<?php
include 'templates/footer.php';
?>
