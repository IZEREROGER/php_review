<?php 
//a program that displays a multiplication table up to 10

function multiplicationTable($num){
    for($i=1;$i<=10;$i++){
        echo $num." * ".$i." = ".$num*$i."<br>";
    }
}
multiplicationTable(1);
echo "<br>";
multiplicationTable(2);
echo "<br>";
multiplicationTable(3);
echo "<br>";
multiplicationTable(4);
echo "<br>";
multiplicationTable(5);
echo "<br>";
multiplicationTable(6);
echo "<br>";
multiplicationTable(7);
echo "<br>";
multiplicationTable(8);
echo "<br>";
multiplicationTable(9);
echo "<br>";
multiplicationTable(10);




?>