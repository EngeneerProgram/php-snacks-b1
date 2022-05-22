<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
//  Stampare Nome, Cognome e la media dei voti di ogni alunno.


$students=[

    [
        'name' => 'Rosario',
        'cognome' => 'Garufi',
        'voti' => 
        [
            9,8,6,7,4
        ]
    ],
    [
        'name' => 'Gianluca',
        'cognome' => 'Nossolino',
        'voti' => 
        [
            9,10,5,5,8
        ]
    ],
    [
        'name' => 'Giovanni',
        'cognome' => 'Di Raimondo',
        'voti' => 
        [
            9,3,6,5,2
        ]
    ],
    [
        'name' => 'Mirko',
        'cognome' => 'Campagnolo',
        'voti' => 
        [
            9,10,6,10,7
        ]
    ],

    
];

// for($i=0; $i<count($students); $i++){
//     $student = $students[i];
//     $media = number_format(array_sum($student['voti']) / count($student['voti']), 2, '.', '');
//     echo "<h2>$student[name] $student[cognome] <h3>Media: $media</h3></h2>";
// }

for($i = 0; $i<count($students); $i++){
    $student = $students[$i];
    
    //sum number inside the array "voti"
   $sum= array_sum($student['voti']);
   //var_dump($sum);
   //Average
   $average = $sum / count($student['voti']);
   //average of sum / number of number 
   //var_dump($average);
   echo "<h1>Lo Studente $student[name] $student[cognome] Ha la media di :  $average</h1>";
   


}
?>
