<?php
    $try = FALSE;
    if(!empty($_GET)){
        $min = 1;
        $max = 5;
        $success = FALSE;
        $match = FALSE;
        $try = TRUE;
        $guess = $_GET['guess'];
        $random_int = rand($min,$max);



        if((filter_var($guess, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false)){
            $success = FALSE;
        }else{
            $success = TRUE;
        }

        if($success){
            if($guess == $random_int)
                $match = TRUE;
            else
                $match = FALSE;
        }
    }else{
        header('Location: index.php' , true, 302);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Make a guess</title>
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
      

<div class="row">
	<div class="col-sm">
		<h1>Your guess is: <?php echo $guess; ?></h1>
	</div>
</div>

<div class="row">
	<div class="col-sm">


    <?php if($success) : ?>

        <?php if($match): ?>
            <h1>Yey! Correct Guess!</h1>
        <?php else: ?>
            <h1>Incorrect Guess</h1>
        <?php endif;?>

    <?php else: ?>
        <h1>Invalid Number Input!</h1>
        <h2>Must be a number and ranges 1-5</h2>
    <?php endif;?>



        <h1>My Guess is: <?php echo $random_int; ?></h1>
	</div>
</div>


    <?php include 'guess_form.php'; ?>


    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>