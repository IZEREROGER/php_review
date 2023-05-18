<?php 
//a program to display the sum of the first 100 real odd numbers excluding 59 and stop at 98
$sum=0;
for($i=1;$i<=100;$i++){
    if($i==59){
        continue;
    }
    if($i==99){
        break;
    }
    if($i%2!=0){
        $sum+=$i;
    }
}
echo "The sum of the first 100 real odd numbers excluding 59 and stop at 98 is ".$sum;

?>