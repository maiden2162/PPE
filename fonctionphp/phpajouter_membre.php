<?php
include 'connexion_bdd.php';

if (isset($_POST['valider'])) {
  $nom=mysql_real_escape_string(htmlspecialchars ($_POST["nom"]));
  $prenom=mysql_real_escape_string(htmlspecialchars($_POST["prenom"]));
  $email=mysql_real_escape_string(htmlspecialchars($_POST["email"]));
  $login=mysql_real_escape_string(htmlspecialchars($_POST['login']));
  $password=htmlspecialchars(sha1($_POST["password"]));


  if ($nom&&$prenom&&$email&&$login&&$password) {
    $query = " INSERT INTO UTILISATEUR(uti_fonction,uti_nom,uti_prenom,uti_email,login,passwordd,grp_id)
              VALUES('CLIENT','$nom','$prenom','$email','$login','$password',3)";
              mysql_error();
    mysql_query($query);
    mysql_close();
    header('location:../pages/membre.php');
  }echo "Erreur dans l'insertion des champs, veuillez remplir tout les champs.";
  }


 ?>
