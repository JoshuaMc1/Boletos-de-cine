var alertPlaceholder = document.getElementById('msgNotificacion')

$(document).ready(function () { 
    inhabilitar();
    calcular();
});

function validar(){
    if($("#nombre1").val() == ""){
        alerta("Debe ingresar su primer nombre","danger");
        return false;
    }else{
        if($("#nombre2").val() == ""){
            $(".btnClose").click();
            alerta("Debe ingresar su segundo nombre","danger");
            return false;
        }else{
            if($("#apellido").val() == ""){
                $(".btnClose").click();
                alerta("Debe ingresar su apellido","danger");
                return false;
            }else{
                if($("#identidad").val() == ""){
                    $(".btnClose").click();
                    alerta("Debe ingresar su numero de identidad", "danger");
                    return false;
                }else{
                    if($("#silla").val() == ""){
                        $(".btnClose").click();
                        alerta("Dede seleccionar una silla","danger");
                        return false;
                    }else{
                        $(".btnClose").click();
                        var suma = 0;
                        var los_cboxes = document.getElementsByName('opc[]');
                        for (var i = 0, j = los_cboxes.length; i < j; i++) {
                            if (los_cboxes[i].checked == true) {
                                suma++;
                                }
                            }

                        if (suma < 1 || suma > 2) {
                            alerta("Debe seleccionar una pelicula o dos","danger");
                            return false;
                        } else {
                            $(".btnClose").click();
                            return true;
                        }
                    }
                }
            }
        }
    }
}

function inhabilitar(){
    $("#precio").prop('disabled', true);
    $("#impuesto").prop('disabled', true);
    $("#total").prop('disabled', true);
}

function calcular(){
    var impuesto = 100*0.15;
    var total = impuesto + 100;

    $("#precio").val("L. 100.00");
    $("#impuesto").val("L. "+parseFloat(impuesto).toFixed(2));
    $("#total").val("L. "+parseFloat(total).toFixed(2));
}

function alerta(message, type) {
    var wrapper = document.createElement('div')
    wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close btnClose" data-bs-dismiss="alert" aria-label="Close"></button></div>'
    alertPlaceholder.append(wrapper)
}
