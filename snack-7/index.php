<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
//  Stampare Nome, Cognome e la media dei voti di ogni alunno.


$students=[

    [
        'name' => 'rosario',
        'cognome' => 'garufi',
        'voti' => 
        [
            9,8,6,7,4
        ]
    ],
    [
        'name' => 'rosario',
        'cognome' => 'garufi',
        'voti' => 
        [
            9,10,5,5,8
        ]
    ],
    [
        'name' => 'rosario',
        'cognome' => 'garufi',
        'voti' => 
        [
            9,3,6,5,2
        ]
    ],
    [
        'name' => 'rosario',
        'cognome' => 'garufi',
        'voti' => 
        [
            9,10,6,10,7
        ]
    ],

    
];

for($i=0; $i<count($students); $i++){
    $student = $students[i];
    $media = number_format(array_sum($student['voti']) / count($student['voti']), 2, '.', '');
    echo "<h2>$student[name] $student[cosgnome] <h3>Media: $media</h3></h2>";
}
?>
