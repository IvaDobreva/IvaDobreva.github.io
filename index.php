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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik+Mono+One|Righteous|Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="StyleSheets/index.css">
  </head>
  <body>

    <div id="navBar">
      <script type="text/javascript">
        $('#navBar').load('navigation.php');
      </script>
    </div>

    <!-- carousel with pictures -->
    <div id="musicGallery" class="carousel slide" data-ride="carousel">
        <!-- indicators -->
        <ol class="carousel-indicators">
            <li data-target="#musicGallery" data-slide-to="0" class="active"></li>
            <li data-target="#musicGallery" data-slide-to="1"></li>
            <li data-target="#musicGallery" data-slide-to="2"></li>
        </ol>

        <!--wrapper -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/img1.jpg" alt="no preview">
                <div class ="carousel-caption">
                    <h3>The Vibe Guide</h3>
                    <p>Music for every taste</p>
                </div>
            </div>

            <div class="item">
                <img src="images/img2.jpg" alt="no preview">
                <div class="carousel-caption">
                    <h3>This year in Seoul!</h3>
                    <p>Listen to world DJs live</p>
                </div>
            </div>

            <div class="item">
                <img src="images/img3.jpg" alt="no preview">
                <div class="carousel-caption">
                    <h3>Experience a fairytale like festival</h3>
                    <p>Belgium 2017</p>
                </div>
            </div>
        </div>

        <!-- controls -->
        <a class="left carousel-control" href="#musicGallery" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <a class="right carousel-control" href="#musicGallery" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- picture buttons for the festivals -->
    <div class="container text-center">
        <h3><strong>FESTIVALS</strong></h3>
        <p>learn more about famous festivals</p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <h3><strong>Spectrum</strong></h3>
                <img src="images/festival1.jpg" class="img-circle festival" alt="no preview">
                <p>Experience the “NEXT” music paradise with <br>the 60 hottest dance music artists!
                  In the magical space that is only designed for you, YOU are the headliner of these interactive and never-seen shows! </p>
            </div>
            <div class="col-sm-4">
                <h3><strong>World DJ festival</strong></h3>
                <img src="images/festival2.jpg" class="img-circle festival" alt="no preview">
                <p>World DJ Festival, the best & most exciting electronic <br>dance music festival in Korea! The Best Lineup is YOU!!<br>
                  Escape from the ordinary to a festival PARADISE!</p>
            </div>
            <div class="col-sm-4">
                <h3><strong>Tomorrow Land</strong></h3>
                <img src="images/festival3.jpg" class="img-circle festival" alt="no preview">
                <p>Building bridges between Belgium and the rest of the world with a live connection from the Tomorrowland Mainstage,<br> live local and international DJ’s on the UNITE stage and the unique, magical Tomorrowland atmosphere: that is UNITE with Tomorrowland.</p>
            </div>
        </div>
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
      exit; // stop further executing, very important
    }
    ?>

  </body>
</html>
