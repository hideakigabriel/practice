<html>
     <head>
          <title>Aprendendo a instrução IF...ELSE</title>
          <style>
               .cor1{
                    color: #f00;
               }
               .cor2{
                    color: #00f;
               }
          </style>
     </head>
     <body>
          <?php 
               $a = 5;
               $b = 5;
               if ($a == $b) {
          ?>
               <p class="cor1">A variável $a é igual a variável $b</p>
          <?php
               }
               else {
          ?>
               <p class="cor2">A variável $a é diferente a variável $b</p>
          <?php
               }
          ?>
     </body>
</html>