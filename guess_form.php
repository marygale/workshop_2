<form action="guess.php" method="GET">
<?php if($try): ?>
	<h2> Make a guess again</h2>
<?php endif; ?>
  <div class="form-group">
    <label for="guess">Choose a number between 1-5:</label>
    <input type="text" class="form-control" id="guess" name="guess" placeholder="1,2,3,4,5">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Guess">
    </div>
</form>