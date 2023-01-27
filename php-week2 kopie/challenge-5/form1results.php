<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1results</title>
</head>
<body style="background-color: <?php echo ($_GET['colors']);?>">
    


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo  ($_GET["fname"]). " " ;
echo  ($_GET["tussenv"]). " " ;
echo  ($_GET["lname"]). " <br>" ;
echo  ($_GET["number"])*4 ;
?>

</body>
</html>

