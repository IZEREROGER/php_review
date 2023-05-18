<?php 

function acutetriangle($rows)
{
    for ($i=0; $i < $rows; $i++) { 
        for ($j=0; $j < $rows; $j++) { 
          if ($j<=$rows-$i) {
              echo "&nbsp;";
          }
          else{
              echo "*";
          }
      
        }
        echo "<br>";
      }
      
}
$rows=10;
acutetriangle($rows);


?>