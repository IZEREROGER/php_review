<?php 
//a program that ask a user to input marks from the txt box and then classify the score gained on the degree based on marks
if ($_POST) {
    $marks=$_POST['marks'];
    if($marks>=80){
        echo "You have a first class";
    }
    elseif($marks>=70){
        echo "You have a second class upper";
    }
    elseif($marks>=60){
        echo "You have a second class lower";
    }
    elseif($marks>=50){
        echo "You have a pass";
    }
    else{
        echo "You have failed";
    } 
}

?>

<!-- html form to input marks -->
<form action="examq1.php" method="post">
    <input type="text" name="marks" id="marks">
    <input type="submit" value="submit">
</form>
