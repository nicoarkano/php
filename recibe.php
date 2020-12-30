<?php
//print_r($_POST);    
if ($_POST){
    $nombre = $_POST['nombre'];
    $year = $_POST['year'];
    $sexo = $_POST['sexo'];
    $terminos = $_POST['terminos'];
    echo 'Hola ' . $nombre . ' Eres un ' . $sexo . ' y naciste en el año ' . $year . "<br>";

    echo 'Tienes ' . (2020 - $year) . ' Años';
} 

else {
    header('location: http://localhost:3000/php');
} 
?>
