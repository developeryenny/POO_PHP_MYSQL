<?php
require "consulta.php";
$paciente = new Pacientes();
$array_pacientes = $paciente->get_pacientes();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consulta datos del Paciente </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    </head>
    <body>
        <div class='container'>
            <br/>
            <?php
            foreach ($array_pacientes as $e_paciente) {
                //echo $e_paciente['nombre_apellidos'] . "<br>";
                //echo $e_paciente['edad'] . "<br>";
                //echo $e_paciente['sexo'] . "<br>";
                //echo $e_paciente['idioma'] ."<br>";
               echo "    
                <div class = 'row justify-content-center'>
                <div class = 'col-12 col-md-10 col-lg-8'>
                <h2 class = 'display-2'> Datos del Paciente</h2>
           <form action = '' method = 'post'>
                <div class = 'form-group'>
                <label for = 'exampleFormControlInput1'>Nombre Apellidos</label>
                <input type = 'text' name = 'name' class = 'form-control' id = 'exampleFormControlInput1'  value ='" . $e_paciente['nombre_apellidos'] . "'> 
                </div>
                <div class = 'form-group'>
                <label for = 'exampleFormControlInput1'>Edad</label>
                <input type = 'number' name = 'edad' min = '18' max = '99' class = 'form-control' id = ''  value ='" . $e_paciente['edad'] . "' >
                </div>
                <div class = 'form-group'>
                <label for = 'exampleFormControlSelect1'>Género</label>
                <select class = 'form-control' id = '' name = 'genero'>
                <option> '" . $e_paciente['sexo'] . "'</option>
                </select>
                </div>
                </select>

                <div class = 'form-group'>
                <label for = 'exampleFormControlSelect2'>Idiomas</label>
                <select multiple class = 'form-control' id = 'exampleFormControlSelect2' name = ''>
                <option value ='" . $e_paciente['idioma'] . "'>";
                echo " '" . $e_paciente['idioma'] . "' </option>
                </select>

                 </div>
      
                </form>
                </div>
                <!--end of col-->
                </div>
                </div>";
            }
            ?>




    </body>
</html> 
