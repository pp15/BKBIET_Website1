<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Index of PP website">
  <meta name="author" content="PP Giannetti">
  <link rel="icon" href="light.ico">

  <title>PP Website</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <div class="site-wrapper">

        <div class="site-wrapper-inner">

          <div class="cover-container">

            <div class="masthead clearfix">
              <div class="inner">
                <?php
// Enregistrons les informations de date dans des variables
                $jour = date('d');
                $mois = date('m');
                $annee = date('Y');
// Maintenant on peut afficher ce qu'on a recueilli
                echo'<h3 class="masthead-brand">'. $jour . '/' . $mois . '/' .
                $annee .'</h3>';
                ?>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="light.php">Lights</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>

            <div class="inner cover">
              <h1 class="cover-heading">Welcome !</h1>
              <p class="lead">You are now on the website <br>
                where you can control the lights of the lab in BKBIET !</p>
                <form action="light.php" method="post" class="form-signin">
                  <input type="text" name="prenom" class="form-control" placeholder="Pseudo">
                  <input type="password" name="pwd" class="form-control" placeholder="Password">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
              </div>

              <div class="mastfoot">
                <div class="inner">
                  <p>Created by Pierre-Paul Giannetti</p>
                </div>
              </div>

            </div>

          </div>

        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
  </html>
