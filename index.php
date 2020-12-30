<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeFi Lab</title>
    <link rel = 'Stylesheet' href='style.css'>
</head>
<body>


    <h1 id ="h1" > defilab </h1>

    <div id ="body">
    <form action="" method="post">
        <input type="text" placeholder="Nombre:" name="nombre"> 
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="Mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
        </select>
        <label for="terminos"> ¿Aceptas los terminos y condiciones?</label>
        <input type="checkbox" name="terminos" id="terminos" value="true">
        <input type="submit" value="enviar" >
    </form>

    <?php
    $nombre = $_POST['nombre'];
    echo 'nombre: '. $nombre;
    ?>

    </div>
    
</body>
</html>