<?php require_once("clases/persona.php")?>-
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Hola mundo con Ñandú</title>
        </head>
        <body>
            <?php
            $persona=new Persona("César Cancino","yo@cesarcancino.com","35");
            ?>
            <h1> Hola <?php echo $persona->getNombre();?> </h1>
            <?php
            $persona->setNombre("Juan Catalán");
            ?>
            <h1> Hola <?php echo $persona->getNombre();?> </h1>
            <h2> <?php echo Persona::miMetodo(); ?> </h2>
            <h2>El día de hoy es  <?php echo Persona::fecha(date("Y-m-d"))?></h2>
            <h2>El día de hoy es  <?php echo Persona::fecha("1980-05-24")?></h2>
            <h1> Su edad es <?php echo Persona::calculaEdad("1980-05-24")?> </h1>
        </body>
    </html>

