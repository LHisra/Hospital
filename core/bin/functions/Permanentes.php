<?php
  function Permanentes() {
    $Singleton = Permanentes::Singleton();
    $data = $Singleton->Read();
    if(!empty($data)){
      foreach ($data as $valor) {
        $array[$valor['id']]= array(
          'id' => $valor['id'],
          'nombre' => $valor['nombre'],
          'cantidad' => $valor['cantidad'],
          'disponible_s' => $valor['disponible_s'],
        );
      }
    }else{
      $array = false;
    }
    return $array;
  }
?>
