<?php
  session_start();
  $try = FALSE;
  $_SESSION["started"] = FALSE;
  $_SESSION["try_count"] = 3;
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Bagasbas, Angelo Dan F. - Workshop 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
  <div class="row align-items-center">
    <div class="offset-md-2 col-sm-8 text-center">
      <div class="jumbotron" style="margin-top:100px;">
          <h1 class="display-3">Make a guess</h1>
            <?php include 'guess_form.php'; ?>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>

  </body>
</html>
