<?php
  function Users(){
      $Singleton = Users::singleton();
      $usuario = $Singleton->get();
      if(!empty($data)){
        foreach ($data as $valor) {
          $array[$valor['id']]= array(
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
        $array = false;
      }
      return $array;
  }
?>
