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
    <link rel="stylesheet" href="StyleSheets/about.css">
  </head>

  <body>

    <!-- Article -->
    <article>
      <!-- title -->
      <h3 class="title"> WHO AM I?</h>
      <br>
      <img src="images/profile.jpg" class="img-circle profileimg" style="width:15%; height:auto" alt="not available">

      <table class="content-bio">
          <tr>
              <td>Name</td>
              <td>Iva Dobreva</td>
          </tr>
          <tr>
              <td>Date of birth</td>
              <td>14.05.1995</td>
          </tr>
          <tr>
              <td>Country</td>
              <td>Bulgaria</td>
          </tr>
          <tr>
              <td>e-mail</td>
              <td>iva95dobreva@gmail.com</td>
          </tr>
      </table>
      </br>

      <p>BIO:</p>
      <p class="info"> Originally coming form Bulgaria,
        currently I am student at Yonsei University in Seoul, South Korea, majoring in Computer Science currently 2nd year.
        Before that majored in System Programming at Technological School Electronic Systems - Associated with Technical University Sofia.
        After graduating I have been accepted at Sofia University - Department of Mathematics with major Informatics. In 2015
      I won the Korean Government Scholarship being accepted to several universities around Korea with primary major Computer Science.
    </br>
      My free time is usually spend wih friends or reading books. Music for me was always important part of my life. It is the only way to concentrate
      over what I am doing in the moment.</p>
    </br> </br>
      <p>Favourite quote: "Stay hungry, Stay foolish" - Steve Jobs</p>
    </article>



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
