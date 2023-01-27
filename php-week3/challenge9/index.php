<?php
// echo readfile("img/files.txt");

$somecontent = "";
$dir = "img";

foreach (glob( "img/.jpg") as $filename){
    //displays all pngs and their name
    echo "<img src='$filename' alt='$filename' height='100px' /><br>";
    echo "<p>$filename</p>";
}

foreach (glob( "img/.jpeg") as $filename){
    //displays alle pngs en hun naam
    echo "<img src='$filename' alt='$filename' height='100px' /><br>";
    echo "<p>$filename</p>";
}

foreach (glob( "img/*.png") as $filename){
    //displays alle pngs en hun naam
    echo "<img src='$filename' alt='$filename' height='100px' /><br>";
    echo "<p>$filename</p>";
}

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file == "." || $file == "..") {
                continue;
            } 

            echo $file . " grootte: ";
            $somecontent .= $file . " ";
            echo filesize($dir . "/" . $file) . "<br>";
            $somecontent .= filesize($dir . "/" . $file) . "\n";
        }
        closedir($dh);
    }
}

$txtfile = fopen("img/files.txt", "w");
echo fwrite($txtfile, $somecontent);
fclose($txtfile);
?>