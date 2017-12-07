<form action="guess.php" method="GET">
<?php if($try): ?>
	<h2> Make a guess again</h2>
<?php endif; ?>


  <div class="col-lg-12">
    <p>Make a guess of a number between 1-5:</p>
    <div class="input-group input-group-lg">
      <span class="input-group-addon">#</span>
      <span class="input-group-addon">1-5</span>
      <input type="text" class="form-control" aria-label="Text input with radio button" name="guess">
    </div>
  </div>


<div class="col-lg-12">
    <div class="form-group" style="margin-top:20px;">
        <input type="submit" class="btn btn-lg btn-success btn-block" value="Guess" style="padding:20px 15px;">
    </div>
</div>

</form>