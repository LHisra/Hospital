<?php
  function Users(){
      $nuevoSingleton = Users::singleton_Users();
      $usuario = $nuevoSingleton->get_Users();
      if(!empty($usuario)){
        foreach ($usuario as $valor) {
          $users[$valor['id']]= array(
            'id' => $valor['id'],
            'cedula' => $valor['cedula'],
            'nombre' => $valor['nombre'],
            'apellido' => $valor['apellido'],
            'usuario' => $valor['usuario'],
            'pass' => $valor['pass'],
            'tipo' => $valor['tipo'],
          );
        }
      }else{
        $users = false;
      }
      return $users;
  }
?>
