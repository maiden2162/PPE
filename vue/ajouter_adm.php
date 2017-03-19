<?php
session_start();
 ?>
<!DOCTYPE ht0ml>
<html>
  <?php include '../body/header.php'; ?>
    <title>Filelec</title>
  </head>
  <body class="w3-light-grey">
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i> Menu</button>
  <span class="w3-right"><?php echo 'Bienvenue, '.$_SESSION['login'];?></span>
  <a href="../vue/ajouter_adm.php" class="w3-padding"><i></i>Ajouter utilisateur</a>
</div>
<br>
<br>
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
  <hr>
  <div class="w3-container">
    <h5>Panel administration</h5>
  </div>
  <a href="../pages/admin.php" class="w3-padding"><i class="fa fa-users fa-fw"></i> liste Utilisateurs</a>
  <a href="../pages/admin_liste.php" class="w3-padding"><i class="fa fa-users fa-fw"></i> liste admin</a>
  <a href="../pages/membre_liste.php" class="w3-padding"><i class="fa fa-users fa-fw"></i> liste membre</a>
  <a href="#" class="w3-padding"><i class="fa fa-calendar"></i> Plannings</a>
  <a href="../pages/deconnexion.php" class="w3-padding"><i class="fa fa-power-off"></i> Déconnecter</a>
  <br><br>
</nav>

<center>
<div class="w3-container">
  <br><br>
  <h1>Ajouter un administrateur</h1>
<form class="" action="ajouter_adm.php" method="post">
<table>
  <ul><br><br><br>
    <tr>
      <input type="number" name="id" placeholder="id"><br>
    </tr>
    <tr>
      <input type="text" name="login"placeholder="login"><br>
    </tr>
    <tr>
      <input type="text" name="password"placeholder="password"><br><br>
    </tr>
    <tr>
      <button class="w3-btn w3-round-xxlarge" type="submit" name="submit">Valider</button>
      <?php include '../fonctions/phpajouter_admin.php'; ?>
    </tr>
  </ul>
</table>
</form>
</div>
<center>


  <footer>
    <?php include '../body/footer.php'; ?>
  </footer>
</html>
