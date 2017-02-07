<!-Fin de la balise du menu de navigation->
<center>
  <!-Balise du formulaire d'inscription->
  <form class="form-horizontal">
  <fieldset>
    <legend>Inscription</legend>
    <!-prenom->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputtext" name="prenom" placeholder="Prénom">
      </div>
    </div>
    <!-prenom->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputtext" name="nom" placeholder="Nom">
      </div>
    </div>
    <!-email->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="email" class="form-control" id="inputtext"name="email" placeholder="Email">
      </div><br>
    </div>
    <!-password->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputtext"name="password" placeholder="Password">
      </div>
    </div>

    <legend>addresse</legend>

    <!-pays->
    <div class="form-group">
      <div class="col-lg-10">
        <select class="form-control" id="select" name="pays">
          <?php include '../fonction_html/listepays.html'; ?>
        </select>
      </div>
    </div>

    <!-region->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputtext"name="region" placeholder="Region">
      </div>
    </div>

    <!-region->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputtext"name="region" placeholder="region">
      </div>
    </div>

    <!-numero->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputtext"name="bumero" placeholder="N° de rue">
      </div>
    </div>

    <!-adresse->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputtext"name="adresse" placeholder="adresse">
      </div>
    </div>

    <!-cp->
    <div class="form-group">
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputtext"name="cp" placeholder="Code postal">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<!-Fin de la Balise du formulaire d'inscription->
</center>
