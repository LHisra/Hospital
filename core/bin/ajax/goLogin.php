<?php
  //if para comprobar de que estemos mandando datos que no esten vacios
  if(!empty($_POST['user']) and !empty($_POST['pass']) ){
    /* Accedemos al método singleton que es quién crea la instancia
    de nuestra clase y así podemos acceder sin necesidad de
    crear nuevas instancias, lo que ahorra consumo de recursos */
    $nuevoSingleton = Login::singleton_Login();
    $data = $_POST['user'];
    $pass = Encrypt($_POST['pass']);
    $session = $_POST['session'];
    // accedemos al método usuarios y los mostramos
    $usuario = $nuevoSingleton->login_Login($data,$pass,$session);
    // si el usuario existe
    if($usuario == TRUE) {
      echo 1;
    }//si las credenciales son incorrectas
    else{
      echo '
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>ERROR:</strong> Las credenciales son incorrectas.
        </div>
      ';
    }
  }// si los datos estan vacios
  else{
    echo '
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>ERROR:</strong> Todos los datos deben estar llenos.
      </div>
    ';
  }
?>
