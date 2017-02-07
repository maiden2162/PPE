<div class="container">
  <h2>Modal Example</h2>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!--Contenu du modal-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Modal Header</h4>
       </div>
       <div class="modal-body">
         <form class="" action="ajouter_uti.php" method="post">
         <table>
           <ul><br><br><br>
             <tr>
               <input type="number" name="id" placeholder="id"><br>
             </tr>
             <tr>
               <input type="text" name="poste"placeholder="poste"><br>
             </tr>
             <tr>
               <input type="text" name="nom"placeholder="Nom"><br>
             </tr>
             <tr>
               <input type="text" name="prenom"placeholder="Prenom"><br>
             </tr>
             <tr>
               <input type="email" name="email"placeholder="mail@.fr"><br><br>
             </tr>
             <tr>
               <select class="" name="grp_id">
                 <option value=1>admin</option>
                 <option value=2>membre</option>
               </select><br><br>
             </tr>
             <tr>
               <button class="w3-btn w3-round-xxlarge" type="submit" name="submit">Valider</button>
               <?php include '../fonctions/phpajouter_utilisateurs.php'; ?>
             </tr>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>s
