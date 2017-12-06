<?php
$myfile = fopen("lorem.txt", "r+") or die("Unable to open file!");

// Output one line until end-of-file
while(!feof($myfile)) {
   $linha = fgets($myfile);
   
}

fclose($myfile);
