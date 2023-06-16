<?php 
     $bandas=array ("Pearl Jam","Metallica","Pearl Jam","Faith No More","Nirvana","New Order","Angra","New Order","Faith No More");
     $result=array_unique($bandas);
     foreach($resul as $x=>$x_value){
          echo "Banda[" . $x . "]: " .  $x_value;
          echo "<br>";
     }
?>