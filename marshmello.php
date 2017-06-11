<?php
session_start();
require_once 'loginCheck.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <?php session_start(); ?>
    <title> Experience Music</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik+Mono+One|Righteous|Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="StyleSheets/album1.css">
    <link rel="stylesheet" href="StyleSheets/navbar.css">
    <link rel="stylesheet" href="StyleSheets/footer.css">
  </head>

  <body>
    <!-- navbar -->
    <div id="result">
      <script type="text/javascript">
      $('#result').load('navigation.html');
      </script>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="title">ALONE</h2>
          <h4>Marshmello</h4>
          <img src="images\album3.jpg" class="coverimage" alt="Jackson">
          <h4 class="info">$1.29</h4>
            <p class="info"> <strong>Genres:</strong> Dance, Music, Electronic </br>
            <strong>Released:</strong> May 13, 2016 </br>
             &copy;2016 Monstercat</p>
        </div>
      </br>
        <div class="col-sm-6">
          <table class="table table-responsive table-hover">
              <tr>
                <th></th>
                <th>Name</th>
                <th>Time</th>
                <th>Price</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Alone</td>
                <td>4:33</td>
                <td>$1.29</td>
              </tr>
          </table>
        </div>
      </div>
    </br>
      <h4>REVIEW:</h4>
      <p class="info">
          Enigmatic masked DJ/producer Marshmello makes groove-oriented, synth- and bass-heavy electronic dance music. In the spirit of other masked DJs like Deadmau5 and Daft Punk, Marshmello (whose real identity remains a mystery) appears wearing a full-head-covering marshmallow mask. Despite the anonymity, Marshmello's career blew up in 2015 when he began releasing tracks online, including remixes of Zedd's "Beautiful Now," Jack Ü's "Where Are U Now," and others.
      </p>
    </br>
      <h4>BIO:</h4>
      <p class="info"><strong>Born:</strong> xxxx </br>
        <strong>Genre:</strong> Dance </br>
        <strong>Years Active:</strong> '10s</p>
    </div>
  </br>

    <!-- footer -->
    <footer class="text-center footer">
      <br>
      <p class="footer-text">Made by Iva <br>
      &copy; 2017 All rights reserved</p>
    </footer>
    <?php include "sessionCheck.php"; ?>
  </body>

</html>
