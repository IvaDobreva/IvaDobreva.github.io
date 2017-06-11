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

    <link rel="stylesheet" href="StyleSheets/navbar.css">

    <style>
    .container {
      font-size: 15px;
      padding: 150px 150px 0 0;
      position: relative;
      padding-bottom: 10%;
    }

    .contact {
      font-size: 30px;
      font-family: 'Righteous', cursive;
    }

    .contact-info {
      font-family: 'Rajdhani', sans-serif;
      font-size: 20px;
    }

    </style>
  </head>

  <body>

    <div class="container">
      <p class="text-center contact">CONTACTS</p>

      <div class="row test">
        <div class="col-md-4">
          <p class="contact-info"><strong>Leave a message</strong></p>
          <p class="contact-info"><span class="glyphicon glyphicon-map-marker"></span>	50, Yonsei-ro, Seodaemun-gu, Seoul </p>
          <p class="contact-info"><span class="glyphicon glyphicon-phone"></span>Phone: 00000000</p>
          <p class="contact-info"><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>

        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>

            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>

          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
          <div class="row">
            <div class="col-md-12 form-group">
            </br>
              <button class="btn pull-right" type="submit">Send</button>
            </div>
          </div>

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
