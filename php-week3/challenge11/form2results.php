<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2results</title>
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

print_r ($_POST);
echo "dit is een print session";
print_r ($_SESSION);
echo "dit is een print session ingelogd";

if ($_POST["email"] == 'test@test.nl' && $_POST["pwd"] == 'tEst') {
    echo ("je hebt toegang tot de website");

    $_SESSION["ingelogd"] = true; 
    $_SESSION["emailadres"] = $_POST["email"];
    
} 
else {
    echo ("U heeft toegang tot deze website");
    
}

?>