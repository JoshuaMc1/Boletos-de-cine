<?php
require("../connection.php");
if(isset($_POST['nombre1'],$_POST['nombre2'],$_POST['apellido'],$_POST['identidad'],$_POST['opc'],$_POST['silla'],$_POST['impuesto'],$_POST['total'])){
    $silla = $_POST['silla'];
    if(siExiste("SELECT * FROM compras WHERE silla='$silla'") == true){
        echo '<script>alert("La silla ya esta ocupada, seleccione otra");history.go(-1);</script>';
    }else{
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido = $_POST['apellido'];
        $identidad = $_POST['identidad'];
        $impuesto = $_POST['impuesto'];
        $total = $_POST['total'];
        $pels = $_POST['opc'];
        mysqli_query($conection,"INSERT INTO compras (nombre1, nombre2, apellido, identidad, silla, pel1, pel2, impuesto, total) VALUES ('$nombre1','$nombre2','$apellido','$identidad','$silla','".$pels[0]."','".$pels[1]."','$impuesto','$total')") or die("Error: ".mysqli_error($conection));
        echo '<script>alert("Datos guardados exitosamente");window.location="../../../index.php";</script>';
    }
}else{
    require("../close_conection.php");
    echo '<script>alert("Al parecer a sucesido un error");window.location="../../../index.php"</script>';
}

function siExiste($sql){
    require("../connection.php");
    $resultado = mysqli_query($conection,$sql);
    if(mysqli_num_rows($resultado) > 0)return true;
    else return false;
    require("../close_conection.php");
}