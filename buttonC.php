<?php
$monfichier = fopen('files/file1.txt', 'a+');
fputs($monfichier, 'c'); // On écrit le nouveau nombre de
fclose($monfichier);
header ('Location: light.php');
?>