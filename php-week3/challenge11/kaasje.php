<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// print_r ($_POST);
echo "dit is een print session";
print_r ($_SESSION);
echo "dit is een print session ingelogd";



if (isset($_SESSION["ingelogd"]) && ($_SESSION["ingelogd"])) {
    echo "jij mag erin";
}

else {
echo ("U heeft geen toegang tot deze website");

 echo ('<form action="form2results.php" method="post">
       <input type="email" name="email" required ><br>
       <input type="password" name="pwd" required><br>
       <input type="submit">');

}








?>


<!-- <form action="form2results.php" method="post">
  <input type="email" name="email" required ><br>
  <input type="password" name="pwd" required><br>
  <input type="submit"> -->


  
</form>
</body>
</html>






