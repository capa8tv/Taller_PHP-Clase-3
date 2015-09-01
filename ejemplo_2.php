<?php require_once("clases/usuarios.php");require_once("clases/persona.php")?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Hola mundo con Ñandú</title>
        </head>
        <body>
            <?php
            $u=new Usuarios();
            $persona=new Persona("César Cancino","yo@cesarcancino.com","35");
            
            $array=array("Chile","Venezuela","Colombia","El Salvador","Perú");
            $a=$u->retornarVarios($array);
            print_r($a);
            ?>
           
        </body>
    </html>

