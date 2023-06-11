<?php
      class Aluno {
        public $nome;
        public $ra;
        public $endereco;

      function Aluno(){
        $this -> DadosAluno();
      }

      function DadosAluno() {
        $this ->nome = "Gabriel";
        $this ->ra = "3432.434.434.454-3443";
        $this ->endereco = "Rua A, 879 apt 03";
      }
    }
?>