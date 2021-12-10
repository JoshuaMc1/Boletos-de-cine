<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tarea final del parcial">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/style.css">
    <title>Formulario venta de ticket</title>
</head>

<body>
    <div class="div-body p-lg-5 m-lg-5 p-2 m-2">
        <main>
            <div class="container-fluid bg-dark text-white p-3 p-lg-5 rounded shadow">
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-sm-12 text-center py-2 mb-3">
                            <h2 class="animated-shadow">Venta de ticket</h2>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 mb-3">
                            <label class="form-label"><strong>Primer nombre:</strong></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 mb-3">
                            <label class="form-label"><strong>Segundo nombre:</strong></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12 mb-3">
                            <label class="form-label"><strong>Apellidos:</strong></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label"><strong>Numero de identidad:</strong></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-8 col-12 mb-3">
                            <label class="form-label"><strong>Seleccione la pelicula que desea <small class="text-danger">(maximo 2)</small>:</strong></label>
                            <div class="container-fluid px-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Terminator</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Black Widow</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Black Panter</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Avengers</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">John Wick 3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Venom</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-3">
                            <label class="form-label"><strong>Seleccione la silla que desea reservar:</strong></label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="" selected>Seleccione una opción</option>
                                <?php
                                    for($i=0; $i<20; $i++){
                                        $cont = $i+1;
                                        print '<option value="'.$cont.'">Silla '.$cont.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>