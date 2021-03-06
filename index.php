<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="icon" href="../../favicon.ico"/>

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/custome.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://localhost/blogger2/index.php">Home</a></li>
            <li class="active"><a href="http://localhost/blogger2/index2.php">Home2</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="postingan setail">
              <div class="gambar"><img width="100%" src="img/expo-newsweek.jpg"/></div>
              <div class="judul"><p>Donec id elit non mi porta gravida at eget metus Donec id elit non mi porta gravida at eget metus </p></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="postingan setail">
              <div class="gambar"><img width="100%" src="img/expo-newsweek.jpg"/></div>
              <div class="judul"><p>Donec id elit non mi porta gravida at eget metus Donec id elit non mi porta gravida at eget metus </p></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="postingan setail">
              <div class="gambar"><img width="100%" src="img/expo-newsweek.jpg"/></div>
              <div class="judul"><p>Donec id elit non mi porta gravida at eget metus Donec id elit non mi porta gravida at eget metus </p></div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="postingan setail">
              <div class="gambar"><img width="100%" src="img/expo-newsweek.jpg"/></div>
              <div class="judul"><p>Donec id elit non mi porta gravida at eget metus Donec id elit non mi porta gravida at eget metus </p></div>
            </div>
          </div>

            <?php
              include 'readmore.php';
            ?>
        </div>
        </div>

        <div class="col-md-4">
        
          <?php
            include 'sidebar.php';
          ?>

        </div>


      </div>

      <hr/>

      <footer>
        <p> 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
