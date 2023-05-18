<?php 
//recursive function to dispay the factorial of any given number
function factorial($num){
    if($num==0){
        return 1;
    }
    else{
        return $num*factorial($num-1);
    }
}
echo "The factorial of 5 is ".factorial(5);
echo "<br>";
echo "The factorial of 10 is ".factorial(10);
echo "<br>";
echo "The factorial of 15 is ".factorial(15);
echo "<br>";
?>