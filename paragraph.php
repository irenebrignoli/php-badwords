<?php
  $text= $_GET['paragraph'];
  $word = $_GET['word'];
  $censured = '***';
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

  <div><?php echo 'Il testo è lungo: ' . strlen($text); ?></div>

  <p><?php $newText = str_replace($word, $censured, $text); 
  echo $newText; ?></p>

  <div><?php echo 'Il testo censurato è lungo: ' . strlen($newText); ?></div>

</body>

</html>