 <!-- Primeira forma -->

<?php
     $nomes = array('Gabriel', 'Yann', 'Kátia', 'Kledison');
     foreach ($nomes as $valor){
          echo $valor . "<br>";
     }
?>

 <!-- Segunda forma  -->

 <?php
     $nomes = array('Gabriel', 'Yann', 'Kátia', 'Kledison');
     foreach ($nomes as $indice => $valor) {
          echo $indice . " - " . $valor . "<br/>";
     }
?>