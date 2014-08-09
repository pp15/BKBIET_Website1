<?php
$variable1 = (isset($_POST["variable1"])) ? $_POST["variable1"] : NULL;
if ($variable1) {
$monfichier = fopen('files/file1.txt', 'a+');
fputs($monfichier, $variable1); // On écrit le nouveau nombre de
fclose($monfichier);
   // echo "OK";
} else {
    echo "FAIL";
}
?>