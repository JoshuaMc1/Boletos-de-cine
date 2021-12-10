var alertPlaceholder = document.getElementById('msgNotificacion')

$(document).ready(function () { 
    inhabilitar();
    calcular();
});

function validar(){
    
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
