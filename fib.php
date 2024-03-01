<?php
$limite=10;
$num1=0;
$num2=1;
$sum =1;

echo "$num1";
for ($i=1; $i <$limite ; $i++) {
echo "$sum\n";
$sum=$num1+$num2;
$num1=$num2;
$num2=$sum;   
}

?>
