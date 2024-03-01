<?php
include ('function.php');
include_once('function.php');
require('function.php');
require_once('function.php');

echo "ciclo for;\n";

for ($i=0; $i < 11; $i++){ 
    echo "valor de i; $i";
}

echo "ciclo while". PHP_EOL;
$a=0;
while ($a <= 10) {
    echo" valor de a; $a";
    $a++;
}

?>