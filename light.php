<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>PP Website</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="light.css" rel="stylesheet">

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
                <h3 class="masthead-brand">
                  Welcome <?php 
                  if (isset($_POST['prenom'])) {
                    echo $_POST['prenom']; 
                  }
                  else {
                  }
                  ?> !
                </h3>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a href="#">Lights</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <form action="buttonA.php" method="post">
              <button id="buttonA" class="btn btn-lg btn-primary" type="submit">Button A</button>                
            </form>
            <form action="buttonB.php" method="post">
              <button id="buttonB" class="btn btn-lg btn-primary" type="submit">Button B</button>
            </form>
            <div>
              <script type="text/javascript">$("[name='my-checkbox']").bootstrapSwitch();
              </script>
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
    <script src="light.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="dist/js/bootstrap-switch.js"></script>
  </body>
  </html>
