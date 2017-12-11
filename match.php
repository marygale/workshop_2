<?php if($match): ?>
    <div class="alert alert-success" role="alert">
        <h1 class="display-7">Congratulations - You are right!</h1>
    </div>
<?php else: ?>

    <div class="alert alert-warning" role="alert">
        <h1 class="display-3">Incorrect Guess</h1>
    </div>

        <?php if (filter_var($guess, FILTER_VALIDATE_INT)) : ?>

        <?php $high_low = ($guess > $random_int) ? TRUE : FALSE; ?>

            <p class="lead">Your guess is too <?= ($high_low) ? "high" : "low" ?></p>
        <?php else: ?>
            <p class="lead">Your guess is not a number</h2>
        <?php endif; ?>



<?php endif;?>