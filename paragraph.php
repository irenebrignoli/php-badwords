<?php
  $text= $_GET['paragraph'];
  $word = $_GET['word'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text</title>
</head>

<body>

  <p><?php echo $text; ?></p>

  <?php echo 'Il testo è lungo: ' . strlen($text); ?>

  <p><?php echo $text; ?></p>

  <?php 
  $censured = '***';
  $word = str_replace($censured);
  ?>

</body>

</html>