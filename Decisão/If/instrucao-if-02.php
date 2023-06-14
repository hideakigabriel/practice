<html>
     <head>
          <title>Aprendendo a instrução IF</title>
          <style>
               .cor1{
                    color: #f00;
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
          ?>
     </body>
</html>