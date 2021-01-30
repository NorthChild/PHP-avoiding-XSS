<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>week 8 - Input Types</title>
  </head>
  <body>

<?php
  $attempt = isset($_POST['inputGuess']) ? $_POST['inputGuess'] : '';
 ?>

 <form method="post">
   <p>Guessing Game</p>
   <p>Input a number: <br>
     <input type="text" name="inputGuess" value="<?= htmlentities($attempt)  ?>"/></p>
     <input type="submit">
 </form>

<br>
<hr>
<br>

<pre>

  $_POST:

  <?= 'User input: ' . $attempt ?>
  <br>
  <?php
  print_r($_POST);
  print_r('<br> input chosen: '.$attempt);
  $convertedAttempt = htmlentities($attempt);
  print_r('<br> converted attempt: '.$convertedAttempt);
  ?>

</pre>


  </body>
</html>
