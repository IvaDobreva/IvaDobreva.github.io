<?php
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="StyleSheets/loginForm.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik+Mono+One|Righteous|Rajdhani" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="row" id="pwd-container">
          <div class="col-md-4"></div>

          <div class="co-md-4">
              <section class="login-form">
                <form  name="login" method="post" role="login">
                    <div class="title">Experience Music</div>
                    <input type="text" name="Name" placeholder="Username" required class="form-control input-lg"  />
                    <input type="password" class="form-control input-lg" name="Password" placeholder="Password" required="" />

                    <div class="pwstrength_viewport_progress"></div>

                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" >Sign in</button>
                    <div>
                        <a href="newUser.php">Create account</a>
                    </div>
                    <?php include 'login.php'; ?>
                </form>
              </section>
          </div>
      </div>
    </div>

    <!-- footer -->
    <div id="footer">
      <script type="text/javascript">
        $('#footer').load('footer.html');
      </script>
    </div>

  </body>

</html>
