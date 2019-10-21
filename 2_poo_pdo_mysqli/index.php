<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buscar datos del Paciente </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    </head>
    <body>
        <div class='container'>
            <br/>
            <div class = 'row justify-content-center'>
                <div class = 'col-12 col-md-10 col-lg-8'>
                    <h2 class = 'display-2'> Datos del Paciente</h2>
                    <form action = 'index2.php' method = 'post'>

                        <div class = 'form-group'>
                            <label for = 'exampleFormControlSelect1'>Género</label>
                            <select class = 'form-control' id = '' name = 'genero'>
                                <option value="H">H</option>
                                <option value="M">M</option>
                            </select>
                        </div>
                        </select>
                        <!--end of col-->
                        <div class='col-auto'>
                            <button class='btn btn-lg btn-success' type='submit'>Search</button>
                        </div>
                        <!--end of col-->


                    </form>
                </div>
                <!--end of col-->
            </div>
        </div>
    </body>
</html> 

