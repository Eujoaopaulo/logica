<?php

//$boletim = array(
 //   'joaozinho' => array(
       // 'matematica' => array(7, 8, 9, 10),
      //  'fisica quantica' => array(5, 6, 7, 8),
       // 'calculo' => array(3, 4, 5, 6),
       // 'algoritmios' => array(10, 10, 10, 10),
 //   ),
  //  'mariazinha' => array(
    //    'matematica' => array(7, 8, 9, 10),
    //    'fisica quantica' => array(4, 9, 7, 5),
     //   'calculo' => array(1, 4, 5, 8),
      //  'algoritmos' => array(10, 10, 4, 6),
 //   ),
   //     'carlinhos' => array(
   //         'matematica' => array(5, 9, 3, 6),
   //         'fisica quantica' => array(5, 7, 8, 10),
    //        'calculo' => arrays(1, 5, 8, 9),
   //         'algoritmos' => arrays(10, 10, 8, 8),
     //   ),
    //    'zezinho' => array(
     //       'matematica' => array(7, 5, 9, 10),
     //       'fisica quantica' => array(5,3,6,5),
      //      'calculo' => array(7,8,5,8),
      //      'algoritmos' => array(10, 8, 7,10),
      //  ),
      //  'joaninha' => array(
     //       'matematica' => array(7, 7, 4, 7),
    //        'fisica quantica' => array(7, 9, 7, 7),
      //      'calculo' => array(7, 9, 7, 7),
      //      'algoritmos' => array(7, 7, 3, 7),
     //   ),
     //   );
    //
      //  foreach ($boletim as $aluno => $materias) {
      //      echo "<h2>Boletim de $aluno</h2>";
       //     foreach ($materias as $materia => $notas) {
       //         $media = array_sum($notas) / count($notas);
       //        echo "<strong>$materia:</strong> ";
       //         foreach ($notas as $bimestre => $nota) {
       //             echo "Bimestre " . ($bimestre + 1) . ": $nota ";
       //         }
    //            echo "<br>Média: $media<br><br>";
      //      }
     //   }


     $boletim = array(
        'joaozinho' => array(
            'matematica' => array(2, 4, 7, 9),
            'fisica quantica' => array(6, 7, 8, 7),
            'historia' => array(9, 5, 7, 10),
            'geografia' => array(8, 3, 6, 5),
            'calculo 2' => array(10, 9, 8, 7),
        ),
        'mariazinha' => array(
            'matematica' => array(5, 6, 8, 8),
            'fisica quantica' => array(7, 8, 6, 7),
            'historia' => array(1, 5, 9, 8),
            'geografia' => array(10, 9, 8, 7),
            'calculo 2' => array(5, 7, 3, 5),
        ),
        'carlinhos' => array(
            'matematica' => array(9, 8, 8, 6),
            'fisica quantica' => array(8, 5, 6, 9),
            'historia' => array(7, 6, 2, 9),
            'geografia' => array(3, 9, 8, 7),
            'calculo 2' => array(1, 7, 5, 10),
        ),
        'sandrinho' => array(
            'matematica' => array(7, 7, 8, 9),
            'fisica quantica' => array(7, 3, 9, 6),
            'historia' => array(8, 9, 6, 6),
            'geografia' => array(1, 9, 8, 7),
            'calculo 2' => array(10, 10, 10, 9),
        ),
        'zezinho' => array(
            'matematica' => array(8, 8, 6, 9),
            'fisica quantica' => array(9, 8, 7, 6),
            'historia' => array(9, 7, 4, 9),
            'geografia' => array(10, 8, 8, 8),
            'calculo 2' => array(7, 8, 7, 7.5),
        ),
    );
    
    foreach ($boletim as $aluno => $materias) {
        echo "<h2>Boletim de $aluno</h2>";
        foreach ($materias as $materia => $notas) {
            $media = array_sum($notas) / count($notas);
            echo "<strong>$materia:</strong> ";
            foreach ($notas as $bimestre => $nota) {
                echo "Bimestre " . ($bimestre + 1) . ": $nota ";
            }
            echo "<br>Média: $media<br><br>";
        }
    }
    
        
