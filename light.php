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
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="bootstrap-switch-master/docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-switch-master/docs/css/highlight.css" rel="stylesheet">
    <link href="bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
    <link href="bootstrap-switch-master/docs/css/main.css" rel="stylesheet">

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
     <h3>Device 1</h3>
     <form action="buttonA.php" method="post">
       <button id="buttonA" class="btn btn-lg btn-primary" type="submit"> Device 1 on</button>                
     </form>
     <form action="buttonB.php" method="post">
       <button id="buttonB" class="btn btn-lg btn-primary" type="submit">Device 1 off</button>
     </form>
<div><p><br></p></div>

<h3>Device 2</h3>
     <form action="buttonC.php" method="post">
       <button id="buttonC" class="btn btn-lg btn-primary" type="submit"> Device 2 on</button>                
     </form>
     <form action="buttonD.php" method="post">
       <button id="buttonD" class="btn btn-lg btn-primary" type="submit">Device 2 off</button>
     </form>
<div><p><br></p></div>

<h3>Device 3</h3>
       <input type="checkbox" name="checkbox3">
       <button id="buttonAjax" class="btn btn-lg btn-primary" onClick="testAjax()">Test AJAX</button>           
<div><p><br></p></div>
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
    <script src="oXHR.js"></script>
    <script src="light.js"></script>
    <script src="bootstrap-switch-master/docs/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-switch-master/docs/js/highlight.js"></script>
    <script src="bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>
    <script src="bootstrap-switch-master/docs/js/main.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
  </html>
