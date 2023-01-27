<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2results</title>
</head>
<body>

</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if  ($_POST ["email"] == 'test@test.nl' && $_POST ["pwd"] == 'tEst') {
    echo ("je hebt toegang tot de website");
} 
else {
    echo ("U heeft geen toegang tot deze website");
}

?>