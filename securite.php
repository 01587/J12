<?php
var_dump($_POST);?>
<?php
session_start();
?>
<html>
   <p>
    <?php
    if(isset($_POST['password'])){
        if ($_POST['password']=='2020'){
            $_SESSION["id"]=$_POST['login'];
            setcookie("id",$_SESSION["id"]);
            header('connexion.php');
            exit();
        }
        else{
            echo "Mauvais couple identifiant / mot de passe";
        }
        ?>
        </p>
        </html>
        

