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
          <h2 class="title">XSCAPE</h2>
          <h4>Michael Jackson</h4>
          <img src="images\album2.jpg" class="coverimage" alt="Jackson">
          <h4 class="info">$16.99</h4>
            <p class="info"> <strong>Genres:</strong> Pop, Music, R&amp;B/Soul </br>
            <strong>Released:</strong> May 09, 2014 </br>
             &copy;2014 MJJ Productions, Inc.</p>
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
                <td>Love Never Felt So Good</td>
                <td>3:54</td>
                <td>$1.29</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Chicago</td>
                  <td>4:05</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Loving You</td>
                  <td>3:15</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>A Place With No Name</td>
                  <td>5:35</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>5</td>
                  <td>Slave to the Rhytm</td>
                  <td>4:15</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>6</td>
                  <td>Blue Gangsta</td>
                  <td>4:14</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>7</td>
                  <td>Xscape</td>
                  <td>4:04</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>8</td>
                  <td>Do You Know Where</td>
                  <td>3:09</td>
                  <td>$1.29</td>
              </tr>
          </table>
        </div>
      </div>
    </br>
      <h4>REVIEW:</h4>
      <p class="info">The magnitude of Michael Jackson’s talent is evident in every track of his second collection of previously unreleased posthumous material. The roster of hit-making producers involved—including Timbaland, John McClain, Stargate, and Rodney Jerkins—add a dazzlingly modern sheen to Jackson’s original sessions. The album’s most fascinating offering comes with “A Place with No Name,” which is inspired by “A Horse with No Name” by ’70s rock act America.</p>
    </br>
      <h4>BIO:</h4>
      <p class="info"><strong>Born:</strong> August 29, 1958 in Gary, IN </br>
        <strong>Genre:</strong> Pop </br>
        <strong>Years Active:</strong> '60s, '70s, '80s, '90s, '00s</p>
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
