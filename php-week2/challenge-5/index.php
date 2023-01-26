<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <h1> Vul dit in.</h1>
</head>


<body>

<form action="form1results.php" method="get">
Voornaam: <input type="text" name="fname" required><br>
Tussenvoegsel: <input type="text" name="tussenv"><br>
Achternaam: <input type="text" name="lname" required><br>
Leeftijd: <input type="number" name="number" required><br>

<select name="colors"  id="color" required>
  <option value="red">Rood</option>
  <option value="orange">Oranje</option>
  <option value="yellow">Geel</option>
  <option value="green">Groen</option>
  <option value="blue">Blauw</option>
  <option value="purple">Paars</option>
</select>
<input type="submit">
</form>


<form action="form2results.php" method="post">
  <input type="email" name="email" required ><br>
  <input type="password" name="pwd" required><br>
  <input type="submit">
</form>
</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$email = " test@test.nl";
$pwd = "tEst"
?>

