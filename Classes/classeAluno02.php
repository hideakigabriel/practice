<?php
      class Aluno {
        public $nome;
        public $ra;
        public $endereco;

        function DadosAluno() {
          $this ->nome = "Yann";
          $this ->ra = "3432.434.434.454-368";
          $this ->endereco = "Rua B, 978 apt 06";
        }
      }
      $aluno = new Aluno();
      echo "Nome: " . $aluno -> nome;
      echo "<br>";
      echo "RA: "; . $aluno -> ra;
      echo "<br>";
      echo "Endereço: "; . $aluno -> endereco;
?>