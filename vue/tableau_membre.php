<!-resultat tableau utilisateur->
<?php
include '../fonctions/supprimer_user.php';
include '../body/footer.php';
 ?>
<div id="utilisateur">
<h1>Membres</h1>
      <table>
       <thead>
        <tr>
          <th><center>id</center></th>
          <th><center>login</center></th>
          <th><center>password</center></th>
          <th><center>modifier</center></th>
          <th><center>Supprimmer</center></th>
        </tr>
      </thead>
  <?php
  while ($utilisateur = mysql_fetch_array($resultat)): ?>
  <tr>
    <td><center><strong><?=$utilisateur["id"]?></strong></center></td>
    <td><center><strong><?=$utilisateur["login"]?></strong></center></td>
    <td><center><strong><?=$utilisateur["password"]?></strong></center></td>
    <td><center><strong><button type="button" class="fa fa-window-close" data-toggle="modal" data-target="#myModal"></strong></center></td>
    <?="<td><center>".'<a href="../fonctions/supprimer_membre.php?id='.$utilisateur['id'].'" class="fa fa-window-close"></a>'."</center></td>";?>
  </tr>
<?php  endwhile ?>


  </table>
