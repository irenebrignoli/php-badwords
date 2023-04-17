<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  
<form action="paragraph.php" method="GET">
  <label for="story">Scrivi una storia</label>
  <textarea type="text" name="paragraph" id="story"></textarea>
  <label for="censured">Scrivi una parola da censurare</label>
  <input type="text" name="word" id="censured">
  <button>Send</button>
</form>

</body>

</html>