function goCreate() {
    var connect, form, response, result, nombre, cantidad, disponible_s, confirmar,mode;
    //llamamos a la funcion de generales.php __() y obtenemos el valor de id requerido
    nombre = __('nombre').value;
    cantidad = __('cantidad').value;
    disponible_s = __('cantidad').value;
    confirmar = __('confirmar').checked ? true : false;
    mode =('create');
    if (confirmar) {
        if (nombre != '' && cantidad != '' && disponible_s != '') {
            form = 'nombre=' + nombre + '&cantidad=' + cantidad + '&disponible_s=' + disponible_s + '&mode=' +mode;
            // instanciar un objeto en javascript
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsft.XMLHTTP');
            //evento cuando se note un cambio en ajax (haya un envio o una respuesta en el servidor)
            connect.onreadystatechange = function() {
                    //acedemos a una propiedad de connect con readyState
                    //1 estado cuando esta activado
                    /*2 ""             ""  enviando los datos
                      3 ""         ""  php recibe los datos
                      4 ""             ""  devuelve los datos a javascript */
                    // Status 404 cuando no se encuentra este "ajax.php?mode=login"
                    // Status 200 cuando se encutra este "ajax.php?mode=login"
                    if (connect.readyState == 4 && connect.status == 200) {
                        if (connect.responseText == 1) {
                            result = '  <div class="alert alert-success alert-dismissible">';
                            result += '      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            result += '      <h4><i class=" fa fa-refresh fa-spin"></i>¡Registro Completado!</h4>';
                            result += '     <strong>Estamos redireccionandote...</strong>';
                            result += ' </div>';
                            /* llamamos a la function que esta en generales.php __() y le ponemos el id = '_CREATE_'
                               para mostrar el mensaje en HTML */
                            __('_CREATE_').innerHTML = result;
                            location.reload();
                        } else {
                            //muestra un error en php, si hay problemas en la sintaxis
                            __('_CREATE_').innerHTML = connect.responseText;
                        }
                        console.log(connect.responseText);
                    } //cuando no exista el estado 4 es que no hemos tenido respuesta del navegador y mostramos un error
                    else if (connect.readyState != 4) {
                        result = '  <div class="alert alert-warning alert-dismissible">';
                        result += '      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                        result += '      <h4><i class=" fa fa-refresh fa-spin"></i>Procesando...</h4>';
                        result += '     <strong>Estamos procesando tu registro.</strong>';
                        result += ' </div>';
                        __('_CREATE_').innerHTML = result;
                    }
                }
                // el Método POST y se lo envia a ajax.php
            connect.open('POST', 'ajax.php?mode=permanentes', true);
            // funciona para mandar el contenido cifrado por el método a través de la URL
            connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            // la variable form es lo que le enviamos a ajax
            connect.send(form);
        } else {
            result = '  <div class="alert alert-danger alert-dismissible">';
            result += '      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            result += '      <h4><i class=" fa fa-close "></i>¡Error!</h4>';
            result += '     <strong>Todos los datos tienen que estar completado</strong>';
            result += ' </div>';
            __('_CREATE_').innerHTML = result;
        }
    } else {
        result = '  <div class="alert alert-danger alert-dismissible">';
        result += '      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        result += '      <h4><i class=" fa fa-close "></i>¡Error!</h4>';
        result += '     <strong>La confirmación tiene que ser aceptada</strong>';
        result += ' </div>';
        __('_CREATE_').innerHTML = result;
    }
}

function runScriptCreate(e) {
    if (e.keyCode == 13) {
        goCreate();
    }
}
