<?php 
//a program to display the first 10 prime numbers
function PrimeNbr($num){
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            return false;
        }
    }
    return true;
}
$count=0;
for($i=2;$count<10;$i++){
    if(PrimeNbr($i)){
        echo $i."<br>";
        $count++;
    }
}

?>