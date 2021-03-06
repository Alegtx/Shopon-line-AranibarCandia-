$(document).ready(function() {

    /*Envio del formulario con Ajax para eliminar producto*/
    $('#del-prod-form form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#del-prod-form form').serialize();
         var metodo = $('#del-prod-form form').attr('method');
         var peticion = $('#del-prod-form form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-prod").html('Eliminando producto <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-prod").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-prod").html(data);
            }
        });
        return false;
    });

    /*Actualizar producto con ajax*/
    $('.button-UPR').click(function() {
    var myId = $(this).val();
        $('#update-product form#' + myId).submit(function(e) {
             e.preventDefault();
             var informacion = $('#update-product form#'+myId).serialize();
             var metodo = $('#update-product form#'+myId).attr('method');
             var peticion = $('#update-product form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#" + myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#" + myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#" + myId).html(data);
                }
            });
            return false;
        });
    });
    
    /*Envio del formulario con Ajax para añadir categoria*/
    $('#add-categori form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#add-categori form').serialize();
         var metodo = $('#add-categori form').attr('method');
         var peticion = $('#add-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-categori").html('Añadiendo categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-add-categori").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-categori").html(data);
            }
        });
        return false;
    });

    /*Envio del formulario con Ajax para eliminar categoria*/
    $('#del-categori form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#del-categori form').serialize();
         var metodo = $('#del-categori form').attr('method');
         var peticion = $('#del-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-cat").html('Eliminando categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-cat").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-cat").html(data);
            }
        });
        return false;
    });
    
    /*Actualizar categoria con ajax*/
    $('.button-UC').click(function() {
	var myId = $(this).val();
        $('#update-category form#' + myId).submit(function(e) {
             e.preventDefault();
             var informacion = $('#update-category form#' + myId).serialize();
             var metodo = $('#update-category form#' + myId).attr('method');
             var peticion = $('#update-category form#' + myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#" + myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#" + myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#" + myId).html(data);
                }
            });
            return false;
        });
    });
     
    /*Envio del formulario con Ajax para agregar administrador*/
    $('#add-admin form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#add-admin form').serialize();
         var metodo = $('#add-admin form').attr('method');
         var peticion = $('#add-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-admin").html('Agregando Administrador...<br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-add-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-admin").html(data);
            }
        });
        return false;
    });
    
    /*Envio del formulario con Ajax para eliminar administrador*/
    $('#del-admin form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#del-admin form').serialize();
         var metodo = $('#del-admin form').attr('method');
         var peticion = $('#del-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-admin").html('Eliminando Administrador<br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-admin").html(data);
            }
        });
        return false;
    });
    
    /*Actualizar pedido con ajax*/
    $('.button-UPPE').click(function() {
	var myId = $(this).val();
        $('#update-pedido form#' + myId).submit(function(e) {
             e.preventDefault();
             var informacion = $('#update-pedido form#' + myId).serialize();
             var metodo = $('#update-pedido form#' + myId).attr('method');
             var peticion = $('#update-pedido form#' + myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#" + myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#" + myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#" + myId).html(data);
                }
            });
            return false;
        });
    });
    
    /*Envio del formulario con Ajax para eliminar pedido*/
    $('#del-pedido form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#del-pedido form').serialize();
         var metodo = $('#del-pedido form').attr('method');
         var peticion = $('#del-pedido form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-pedido").html('Eliminando Pedido...<br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-pedido").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-pedido").html(data);
            }
        });
        return false;
    });

    /*Envio del formulario con Ajax para canceler categoria*/
    $('#cancel-pedido form').submit(function(e) {
         e.preventDefault();
         var informacion = $('#cancel-pedido form').serialize();
         var metodo = $('#cancel-pedido form').attr('method');
         var peticion = $('#cancel-pedido form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-cancel-pedido").html('Cancelando pedido... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-cancel-pedido").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-cancel-pedido").html(data);
            }
        });
        return false;
    });

});

function updateImagenProducto(codigo, nombre){
    var options = {
            codigo: true,
            nombre: true,
            height:300,
            width:600
        };
    // Realiza la consulta al fichero php para obtener información de la BD.
    $('#modal-imagen').modal({show:true});   
    $('#codigo-nombre').html("<b>Codigo: </b>"+codigo+"<br><b>Nombre: </b>"+nombre);
    $('#cod-prod-img').val(codigo);
}