
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- muestro en que layout estoy -->

<?php
//instancio las variables globales
//global $USER, $SESSION, $CFG, $OUTPUT; 

//$custommenu = $OUTPUT->custom_menu();
$RootDir = "http://social.udc.edu.ar";

?>
<html>    
    <head>
        <meta charset="UTF-8">
        <title>Ayuda al Docente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php echo $RootDir;?>/theme/udcessential/style/nojs.css" />
        </noscript>
        <!-- agrego el Javascript y los CSS agregados -->
        <link rel="stylesheet" type="text/css" href="<?php echo $RootDir;?>/theme/udcessential/style/css_agregadas.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $RootDir;?>/theme/udcessential/style/editor.css" />
        <script type="text/javascript" src="<?php echo $RootDir;?>/theme/udcessential/javascript/funciones_agregadas.js"></script>
        <!-- fin de agregar archivos --> 
    </head>
    <body>
        <div style="width: 100%; height: 50px; background-color: blue; color: white; font-size: 15pt" align="center">
            <br>Aca iria la barra de navegacion de la ayuda a los DOCENTES
        </div>
        <hr>

        <div class="alert alert-success" align="center">
            <br>
                <h2>Este es un ejemplo de lo que sería la página de ayuda para los "usuarios" que ya 
                    están logueados como DOCENTES en al menos 1 curso de Moodle de la UDC.<br>
                    Hay que tener en cuenta que sólo cuando se entre a un curso donde es docente
                    saldrá el botón para la AYUDA AL DOCENTE.
                </h2>
             <br>
        </div>
        <hr>
        <div style="width: 100%; height: 50px; background-color: blue; color: white; font-size: 15pt" align="center">
            <br>Aca iria el footer que presenta el PhpMyFAQ, customizado.
        </div>
        <hr>
        <div style="width: 30%; height: 50px; background-color: black; color: white; font-size: 15pt; margin-left: 33%" align="center">
            <br><a href="<?php echo $RootDir ?>"> Volver a Moodle </a>
        </div>
        
    </body>
</html>
