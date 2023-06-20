<?php
     $bandas1=array("ACDC","Metallica","RHCP");
     $bandas2=array("New Order","Angra","Faith No More");
     function bandas(){
          $GLOBALS['result']=array_merge($GLOBALS['bandas1'],$GLOBALS['bandas2']);
     }
     bandas();
     print_r($result);
?>