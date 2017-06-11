<?php
session_start();
require_once 'loginCheck.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Experience Music</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik+Mono+One|Righteous|Rajdhani" rel="stylesheet">

    <link rel="stylesheet" href="StyleSheets/store.css">
    <link rel="stylesheet" href="StyleSheets/navbar.css">
  </head>

  <body>

    <!-- Products container-->
      <div class="products">
      <p class="section"><strong>ALBUMS</strong></p>
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <a href="album.html">
              <img src="images/album1.jpg" alt="EdSheeran">
            </a> </br>
            <a href="album.html" class="album-title">Ed Sheeran - DIVIDE </br> Price: $16.99</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <a href="jackson.html">
              <img src="images/album2.jpg">
            </a> </br>
            <a href="jackson.html" class="album-title">Michael Jackson - XSCAPE </br> Price: $16.99</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <a href="marshmello.html">
              <img src="images/album3.jpg" alt="no preview">
            </a> </br>
            <a href="marshmello.html" class="album-title">Marshmello - ALONE </br> Price: $1.29</a>
          </div>
        </div>
      </div>

        <p class="section"><strong>FEATURED</strong></p>
        <div class="row">
          <div class="col-sm-4">
            <a href = "https://play.google.com/music/listen" >
              <img src="images/google.png" class="featured" alt="no preview">
            </a>

          </div>
          <div class="col-sm-4">
            <a href="https://www.spotify.com/">
              <img src="images/spotify.jpg" class="featured" alt="no preview">
            </a>
          </div>
          <div class="col-sm-4">
            <a href = "https://www.apple.com/itunes/">
              <img src="images/itunes.png" class="featured" alt="no preview">
            </a>
          </div>
        </div>
        <br>
    </div>

    <!-- footer -->
    <div id="footer">
      <script type="text/javascript">
        $('#footer').load('footer.html');
      </script>
    </div>

    <?php
    if(!isset($_SESSION['login'])){
      popUp();
    //  exit; // stop further executing, very important
    } else {
      echo "<div id=\"navBar\">
        <script type=\"text/javascript\">
          $('#navBar').load('navigation.php');
        </script>
      </div>";
    }
    ?>

  </body>
</html>
