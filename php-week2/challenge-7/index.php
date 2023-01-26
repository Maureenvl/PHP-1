<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingooo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grid-container">

<?php


$colorCounter = 13;

$colorArray = array('red', 'yellow', 'blue', 'green', 'orange','purple', 'black', 'white', 'grey', 'brown', 'pink', 'darkblue', 'turquoise', 'beige');



$i = 0;

while ($i <= 8){
    $i++;
    $GekozenGetal = rand(0, $colorCounter);

    print "<div style=\"background-color:$colorArray[$GekozenGetal];\"></div>";
    $colorCounter = $colorCounter -1;
    unset($colorArray[$GekozenGetal]); 

    $colorArray = array_values($colorArray);
}


?>
      </div>
</body>
</html>