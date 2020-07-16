<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mini-Site_Routing</title>
        <body>

        <?php
     if (isset($_GET["page"])){
      if ($_GET["page"]=="1") {
          echo " <h1> Acceuil </h1> " ;
         }
         if ($_GET["page"]=="2") {
             echo "<h1> Page 2 </h1>";
         }
         if ($_GET["page"]=="3"){
             echo"<h1> page 3 </h1>";
         }
         if ($_GET["page"]=="connexion"){
            echo"<h1> connexion </h1>";
        }
        }
        ?>
        <?php

         if(isset($_SESSION['id'])){
             echo "login" . $_SESSION['id'];
         }
         else{
             if(isset($_COOKIE['id']-))
         }
            

       

</body>    
</head>
       </html>