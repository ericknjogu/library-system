<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">erick's Bookstore</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
        
               <li><a href="userregister.php"><span class="glyphicon glyphicon-sign-up"></span>&nbsp; sign up</a></li>
                <li><a href="userlogin.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; log in</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "home") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to ericks online bookstore</h1>
        <p class="lead">This online bookstore has the latest books for you to purchase!</p>
        <p>this site has been designed by erick kamau njogu</p>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">