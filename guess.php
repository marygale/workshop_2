<?php
    session_start();
    $try = FALSE;
    if(!empty($_GET)){
	$_SESSION["started"] = TRUE;
        $min = 1;
        $max = 5;
        $success = FALSE;
        $match = FALSE;
        $try = TRUE;
        $guess = $_GET['guess'];
        $random_int = 3;
        $high_low = FALSE;

        if((filter_var($guess, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false)){
            $success = FALSE;
        }else{
            $success = TRUE;
        }

        if($success){
            if($guess == $random_int){
                $match = TRUE;
            }else{
                $match = FALSE;
                if($guess > $random_int){
                    $high_low = TRUE;
                }else{
                    $high_low = FALSE;	
                }
            }
        }
	    
	    $_SESSION["try_count"] -= 1; 
	    
    }else{
        header('Location: index.php' , true, 302);
    }
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
    <div class="offset-md-2 col-sm-8 text-center jumbotron" style="margin-top:50px;">
      


<?php if($_SESSION["try_count"] > 0) : ?>


    <div class="row">
    	<div class="col-sm">
    		<p class="lead">Your guess is:  <span class="badge badge-primary"><?php echo $guess; ?></span></p>
    	</div>
    </div>

    <div class="row">
    	<div class="col-sm">


        <?php if($success) : ?>

            <?php include 'match.php'; ?>

        <?php else: ?>

            <div class="alert alert-danger" role="alert">
                    <h1>Invalid Input!</h1>

                    <?php if (!(filter_var($guess, FILTER_VALIDATE_INT))) : ?>
                        <h2>Your guess is not a number</h2>


                    <?php elseif( !(($min <= $guess) && ($guess <= $max)) ) : ?>
                        <h2>Your input must range 1-5</h2>
                    <?php endif; ?>
                    
            </div>

            
        <?php endif;?>
    		
    		
    	</div>
    </div>


    <hr class="my-4">
	  
            <?php include 'guess_form.php'; ?>

	    <?php else: ?>

                <?php include 'match.php'; ?>

            <hr class="my-4">
            <h2>No More Tries</h2>
            <p><a href="try_again.php"><button type="button" class="btn btn-primary btn-lg">Try Again</button></a></p>

        <?php endif; ?>

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
