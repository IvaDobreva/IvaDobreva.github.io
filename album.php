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
          <h2 class="title">DIVIDE</h2>
          <h4>Ed Sheeran</h4>
          <img src="images\album1.jpg" class="coverimage" alt="EdSheeran">
          <h4 class="info">$12.99</h4>
            <p class="info"> <strong>Genres:</strong> Pop, Music, Singer/Songwriter </br>
            <strong>Released:</strong> Mar 03, 2017 </br>
            &copy;2017 Asylum Records UK, a division of Atlantic Records UK, a Warner Music Group company.</p>
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
                <td>Eraser</td>
                <td>3:47</td>
                <td>$1.29</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Castle on the Hill</td>
                  <td>4:21</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Dive</td>
                  <td>3:58</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>Shape of You</td>
                  <td>3:53</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>5</td>
                  <td>Perfect</td>
                  <td>4:23</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>6</td>
                  <td>Gallway Girl</td>
                  <td>2:50</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>7</td>
                  <td>Happier</td>
                  <td>3:27</td>
                  <td>$1.29</td>
              </tr>
              <tr>
                  <td>8</td>
                  <td>New Man</td>
                  <td>3:09</td>
                  <td>$1.29</td>
              </tr>
          </table>
        </div>
      </div>
    </br>
      <h4>REVIEW:</h4>
      <p class="info">On his third full-length, the English dynamo shows the full wealth and range of his powers. ÷ is a ruthlessly melodic run through a
        staggering array of styles, further proof that Sheeran is a singer/songwriter for these musical times: a balladeer who can blur the lines
        between Celtic folk and hip-hop (“Galway Girl”) just as readily as he can summon big, festival-ready sentiments
        (“Castle on the Hill”), impassioned serenades (“Perfect”), and pulse-quickening pop (“Shape of You.”)</p>
      </br>
      <h4>BIO:</h4>
      <p class="info">
        <strong>Born:</strong> Liverpool, England <br>
        <strong>Genre:</strong> Singer/Songwriter <br>
        <strong>Years Active:</strong> '00s
      </p>
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
