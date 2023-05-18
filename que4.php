<?php 
//a program that converts a decimal number to binary
function decimalToBinary($decimal){
    $binary="";

    while ($decimal) {
        $remainder=$decimal % 2;  //in other to get the remainder
        $binary=$remainder.$binary;
        $decimal= intdiv($decimal,2);

    }
    return $binary;
}
$decimal = 16;
echo "The binary number of $decimal is : ".decimalToBinary($decimal)."<br>"."<br>";

function toBinary($decimal2){
    $binary="";

    while ($decimal2) {
        $remainder=$decimal2 % 2;  //in other to get the remainder
        $binary=$remainder.$binary;
        $decimal2= intdiv($decimal2,2);

    }
    return $binary;
}
$decimal2 = 10;
echo "The binary number of $decimal2 is : ".toBinary($decimal2)."<br>"."<br>";


//convert binary number  to decimal
function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);

    for ($i = 0; $i < $length; $i++) {
        $bit = $binary[$length - $i - 1];
        $decimal += $bit * pow(2, $i);
    }

    return $decimal;
}

$binary = "1010";

echo "The decimal representation of $binary is: " . binaryToDecimal($binary);
?>