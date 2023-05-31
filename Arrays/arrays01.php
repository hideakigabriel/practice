<?php
      $alunos = array("TADS" => array("Descrição" => "Tec. em Análise e Desenv. de Sistemas", 
      "Disciplina" => "Programação Web"),
      "TSIN" => array("Descrição" => "Tec. em Análise e Desenv. de Sistemas", "Disciplina" => "Comércio Eletrônico" ),
      "SI" => array("Descrição" => "Sistemas de Informação", "Disciplina" => "Design de Iterface" ));

      echo ("Cursos e Disciplinas ..." .
      "<br><br>".
      "<strong>Sigla:</strong> TADS: " .
      "<br><strong>Descrição: </strong>" .$alunos['TADS']['Descrição'] .
      "<br><strong>Disciplina: </strong>" .$alunos['TADS']['Disciplina'] .
      "<br><br>".
      "<strong>Sigla:</strong> TSIN: " .
      "<br><strong>Descrição: </strong>" .$alunos['TSIN']['Descrição'] .
      "<br><strong>Disciplina: </strong>" .$alunos['TSIN']['Disciplina'] .
      "<br><br>".
      "<strong>Sigla:</strong> SI: " .
      "<br><strong>Descrição: </strong>" .$alunos['SI']['Descrição'] .
      "<br><strong>Disciplina: </strong>" .$alunos['SI']['Disciplina']);
?>