<!DOCTYPE html>
<html>
 <?php include 'body/header.php'; ?>
 <link rel="stylesheet" href="css/main.css">
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="pages/shops.php">Shops</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
        <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Composants <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Carte Mère</a></li>
      <li><a href="#">Carte graphique</a></li>
      <li><a href="#">processeur</a></li>
      <li><a href="#">RAM</a></li>
      <li><a href="#">Alimentation</a></li>
      <li><a href="#">Boitier</a></li>
    </ul>
  </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/connexion.php">Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="my_carousel" class="carousel slide" data-ride="carousel">
<!-- Bulles -->
<ol class="carousel-indicators">
<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
<li data-target="#my_carousel" data-slide-to="1"></li>
<li data-target="#my_carousel" data-slide-to="2"></li>
</ol>
<!-- Slides -->
<div class="carousel-inner">
<!-- Page 1 -->
<div class="item active">
<div class="carousel-page">
<img src="/images/bootstrap.png" class="img-responsive" style="margin:0px auto;" />
</div>
<div class="carousel-caption">Page 1 de présentation</div>
</div>
<!-- Page 2 -->
<div class="item">
<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded"
style="margin:0px auto;"  /></div>
<div class="carousel-caption">Page 2 de présentation</div>
</div>
<!-- Page 3 -->
<div class="item">
<div class="carousel-page">
<img src="/images/tablette.png" class="img-responsive img-rounded"
style="margin:0px auto;max-height:100%;"  />
</div>
<div class="carousel-caption">Page 2 de présentation</div>
</div>
</div>
<!-- Contrôles -->
<a class="left carousel-control" href="#my_carousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#my_carousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</html>
