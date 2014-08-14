<?php
//get variable
$variable1 = (isset($_POST["variable1"])) ? $_POST["variable1"] : NULL;
if ($variable1) {
exec("mode com4: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
$fp =fopen("com4", "w");
fwrite($fp, $variable1); //write string to serial
fclose($fp);
} else {
    echo "FAIL";
}
?>