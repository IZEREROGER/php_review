<?php 
// a program to display the stars of the triangle shape
//first triangle
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//example for the second trinangle

for($i=1;$i<=5;$i++){
    for($j=5;$j>=$i;$j--){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//example of the third triangle

for($i=1;$i<=5;$i++){
    for($j=5;$j>=$i;$j--){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
//example of the fourth triangle

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=5;$k>=$i;$k--){
        echo "*";
    }
    echo "<br>";
}

?>