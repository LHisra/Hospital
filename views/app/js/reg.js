function goReg(){
  var connect, form, response, result, user, pass, email, tyc, pass_2;
  //llamamos a la funcion de generales.php __() y obtenemos el valor de id requerido
  user = __('user_reg').value;
  pass = __('pass_reg').value;
  email = __('email_reg').value;
  tyc = __('tyc_reg').checked ? true : false;
  if(tyc){
    if(user != '' && pass != '' && email != '' && pass_2 != ''){
      if(pass == pass_2){
        form = 'user='+ user + '&pass=' + pass + '&email=' + email;
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
          if(connect.readyState == 4 && connect.status == 200){
            if(connect.responseText == 1){
              result = '<div class="alert alert-dismissible alert-success">';
              result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result +='<h4>Registro Completado</h4>';
              result +='<p><strong>Estamos redireccionandote...</strong></p>';
              result +='</div>;'
              /* llamamos a la function que esta en generales.php __() y le ponemos el id = '_AJAX_REG_'
                 para mostrar el mensaje en HTML */
              __('_AJAX_REG_').innerHTML = result;
              location.reload();
            }else{
              //muestra un error en php, si hay problemas en la sintaxis
              __('_AJAX_REG_').innerHTML = connect.responseText;
            }
            console.log(connect.responseText);
          }//cuando no exista el estado 4 es que no hemos tenido respuesta del navegador y mostramos un error
          else if(connect.readyState != 4){
            result = '<div class="alert alert-dismissible alert-warning">';
            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
            result +='<h4>Procesando...</h4>';
            result +='<p><strong>Estamos procesando tu registro.</strong></p>';
            result +='</div>;'
            __('_AJAX_REG_').innerHTML = result;
          }
        }
        // el Método POST y se lo envia a ajax.php
        connect.open('POST', 'ajax.php?mode=reg', true);
        // funciona para mandar el contenido cifrado por el método a través de la URL
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        // la variable form es lo que le enviamos a ajax
        connect.send(form);
      }else{
        result = '<div class="alert alert-dismissible alert-danger">';
        result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result +='<h4>¡Error!</h4>';
        result +='<p><strong>Las contraseñas no coinciden</strong></p>';
        result +='</div>;'
        __('_AJAX_REG_').innerHTML = result;
      }
    }else{
      result = '<div class="alert alert-dismissible alert-danger">';
      result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result +='<h4>¡Error!</h4>';
      result +='<p><strong>Todos los datos tienen que estar completado</strong></p>';
      result +='</div>;'
      __('_AJAX_REG_').innerHTML = result;
    }
  }else{
    result = '<div class="alert alert-dismissible alert-danger">';
    result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result +='<h4>¡Error!</h4>';
    result +='<p><strong>La confirmación tiene que ser aceptada</strong></p>';
    result +='</div>;'
    __('_AJAX_REG_').innerHTML = result;
  }
}
function runScriptReg(e) {
  if(e.keyCode == 13) {
    goReg();
  }
}
