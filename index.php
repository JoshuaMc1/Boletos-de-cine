<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tarea final del parcial">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6cf319f10f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="src/style/style.css">
    <title>Formulario venta de ticket</title>
</head>

<body>
    <div class="div-body p-lg-5 m-lg-5 p-2 m-2">
        <main>
            <div class="container-fluid bg-dark text-white p-3 p-lg-5 rounded shadow">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" onsubmit="return validar()">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-sm-12 text-center py-2 mb-3">
                                    <h2 class="animated-shadow">Venta de ticket</h2>
                                </div>
                                <div class="col-12 mb-3">
                                    <div id="msgNotificacion"></div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                                    <label class="form-label"><strong>Primer nombre:</strong></label>
                                    <input type="text" class="form-control" id="nombre1" name="nombre1">
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                                    <label class="form-label"><strong>Segundo nombre:</strong></label>
                                    <input type="text" class="form-control" id="nombre2" name="nombre2">
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12 mb-3">
                                    <label class="form-label"><strong>Apellidos:</strong></label>
                                    <input type="text" class="form-control" id="apellido" name="apellido">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label"><strong>Numero de identidad:</strong></label>
                                    <input type="text" class="form-control" id="identidad" name="identidad">
                                </div>
                                <div class="col-lg-8 col-12 mb-3">
                                    <label class="form-label"><strong>Seleccione la pelicula que desea <small class="text-danger">(maximo 2)</small>:</strong></label>
                                    <div class="container-fluid px-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="Terminator">
                                            <label class="form-check-label" for="inlineCheckbox1">Terminator</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="Black Widow">
                                            <label class="form-check-label" for="inlineCheckbox1">Black Widow</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="Black Panter">
                                            <label class="form-check-label" for="inlineCheckbox1">Black Panter</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="Avengers">
                                            <label class="form-check-label" for="inlineCheckbox1">Avengers</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="John Wick 3">
                                            <label class="form-check-label" for="inlineCheckbox1">John Wick 3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="opc[]" value="Venom">
                                            <label class="form-check-label" for="inlineCheckbox1">Venom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <label class="form-label"><strong>Seleccione la silla que desea reservar:</strong></label>
                                    <select class="form-select" aria-label="Default select example" name="silla" id="silla">
                                        <option value="" selected>Seleccione una opción</option>
                                        <?php
                                        for ($i = 0; $i < 20; $i++) {
                                            $cont = $i + 1;
                                            print '<option value="' . $cont . '">Silla ' . $cont . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-3 mt-4">
                                    <label class="form-label"><strong>Precio:</strong></label>
                                    <input type="text" class="form-control" name="precio" id="precio">
                                </div>
                                <div class="col-lg-4 mb-3 mt-4">
                                    <label class="form-label"><strong>Impuesto:</strong></label>
                                    <input type="text" class="form-control" name="impuesto" id="impuesto">
                                </div>
                                <div class="col-lg-4 mb-3 mt-4">
                                    <label class="form-label"><strong>Total:</strong></label>
                                    <input type="text" class="form-control" name="total" id="total">
                                </div>
                            </div>
                            <div class="row mt-5 mb-4">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> GUARDAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Identidad</th>
                                    <th scope="col">Primer nombre</th>
                                    <th scope="col">Segundo nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Peliculas</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require("src/php/connection.php");
                                    $resultado = mysqli_query($conection, "SELECT c.*, des.* FROM compras c INNER JOIN desc_compra des ON c.desc_compra=des.id_desc");
                                    while($datos = mysqli_fetch_array($resultado)){
                                        $concat = $datos['pelicula'].', '.$datos['pelicula2'];
                                        print '
                                            <tr>
                                                <td class="table-info">'.$datos["id_ticket"].'</td>
                                                <td class="table-info">'.$datos["identidad"].'</td>
                                                <td class="table-info">'.$datos["nombre1"].'</td>
                                                <td class="table-info">'.$datos["nombre2"].'</td>
                                                <td class="table-info">'.$datos["apellido"].'</td>
                                                <td class="table-info">'.$concat.'</td>
                                                <td class="table-info">'.$datos["total"].'</td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="src/js/ind.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>