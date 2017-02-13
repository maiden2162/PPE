<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" id="jesaispas">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <!--logo de l'entreprise-->
        <a><img alt="Brand" src="images/logo/b.gif"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#" data-toggle="modal" data-target="#myModal">Connexion</a></li>

      </ul>
      </ul>
      <div class="row">
        <div class="nav navbar-nav navbar-center">
            <div class="input-group">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Chercher</button>
                </span>
                <input type="text" class="form-control" placeholder="Chercher...">
            </div>
            <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">produits</a></li>
        <li><a href="pages/contact.php">Contact</a></li>
      </ul><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div>
  </div>
</nav>
  </nav>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://i.ytimg.com/vi/pQAnt7ISqKc/maxresdefault.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://vonguru-1278.kxcdn.com/wp-content/uploads/2014/10/NVIDIA-GeForce-GTX-980-17.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://hdfondsdecran.com/image/201609/143/carte-mere-processeur-gros-plan.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
        <?php include "fonction_html/accueil.php";?>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>PPE &copy; 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

<?php include "fonction_html/modal.php"?>
