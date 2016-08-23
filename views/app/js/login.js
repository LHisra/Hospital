function goLogin(){
  var connect, form, response, result, user, pass, session;
  //llamamos a la funcion de generales.php __() y obtenemos el valor de id requerido
  user = __('user_login').value;
  pass = __('pass_login').value;
  session = __('session_login').checked ? true : false;
  form = 'user='+ user + '&pass=' + pass + '&session=' + session;
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
      if(connect.responseText== 1){
        result = '<div class="alert alert-dismissible alert-success">';
        result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result +='<h4>¡Conectado!</h4>';
        result +='<p><strong>Estamos redireccionandote...</strong></p>';
        result +='</div>;'
        /* llamamos a la function que esta en generales.php __() y le ponemos el id = '_AJAX_LOGIN_'
           para mostrar el mensaje en HTML */
        __('_AJAX_LOGIN_').innerHTML = result;
        location.reload();
      }else{
        //muestra un error en php, si hay problemas en la sintaxis
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
      console.log(connect.responseText);
    }//cuando no exista el estado 4 es que no hemos tenido respuesta del navegador y mostramos un error
    else if(connect.readyState != 4){
      result = '<div class="alert alert-dismissible alert-warning">';
      result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result +='<h4>Procesando...</h4>';
      result +='<p><strong>Estamos intentando Logearte.</strong></p>';
      result +='</div>;'
      __('_AJAX_LOGIN_').innerHTML = result;
    }

  }
  // el Método POST y se lo envia a ajax.php
  connect.open('POST', 'ajax.php?mode=login', true);
  // funciona para mandar el contenido cifrado por el método a través de la URL
  connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  // la variable form es lo que le enviamos a ajax
  connect.send(form);
}

function runScriptLogin(e) {
  if(e.keyCode == 13) {
    goLogin();
  }
}
