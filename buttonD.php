<?php
$monfichier = fopen('files/file1.txt', 'a+');
fputs($monfichier, 'd'); // On écrit le nouveau nombre de
fclose($monfichier);
header ('Location: light.php');
?>