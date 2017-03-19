<?php include 'connexion_bdd.php';

if (isset($_POST['valider'])) {
  $login=mysql_real_escape_string(htmlspecialchars($_POST["login"]));
  $password=htmlspecialchars(htmlspecialchars($_POST["password"]));
  $password=(sha1($_POST["password"]));



  if($login&&$password){
    $query=mysql_query("SELECT * FROM utilisateur WHERE login='$login' AND passwordd='$password'");
    $rows=mysql_num_rows($query);
      if ($rows==1) {
        header('location:../pages/membre.php');
      }else {
        echo "Erreur mot de passe ou login";
      }
  }
}
?>
