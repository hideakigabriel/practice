<?php 
     $bandas=array("Pearl Jam","Metallica","Nirvana","New Order", "Angra","Faith No More");
     krsort($bandas);
     foreach($bandas as $x=>$x_value){
          echo "Banda[" . $x . "]: " .  $x_value . "<br>";
     }
?>