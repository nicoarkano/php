<?php


//Vectores unidimensionales


$semana = array('Lunes','Martes', 'Miercoles', 'Jueves', 'Viernes');
$semana[25] = 'No existe este dia de la semana';
$salto = "\r\n";
echo $semana[0] . "<br>";
echo $semana[1] . "<br>";
echo $semana[2] . "<br>";
echo $semana[3] . "<br>";
echo $semana[4] . "<br>";
echo $semana[5] . "<br>";
echo $semana[6] . "<br>";
echo $semana[25]."<br>";

//Vectores asociativos

$nico =['nombre' => 'Nicolas', 'edad' => 21];

echo $nico[edad] . "<br>";

//Verctores Multidimensionales

$amigos = [

    ['Franco', 23, nota =>['gran persona']], 
    ['Gabi', 20],
    ['Naza', 20],
    ['Astrid', 21]
];


echo $amigos[0][0] . " edad: " . $amigos[0][1] . ' nota: '.$amigos[0][nota][0];

?>