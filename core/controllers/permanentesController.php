<?php
    $Singleton = Permanentes::Singleton();
    switch (isset($_POST['mode']) ? $_POST['mode'] : null) {
      case 'create':
        if($_POST){
          if($_permanentes[1]['nombre']!=''){
            foreach($_permanentes as $valor) {
              if($valor['nombre']==$_POST['nombre']){
                $existe = true;
              }
            }
          }
          if(isset($existe) and $existe){
             echo '
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class=" fa fa-close "></i>¡Error!</h4>
                <strong>Ese Material ya Existe</strong>
              </div>
            ';
          }else{
            $data = $Singleton->Create($_POST['nombre'],$_POST['cantidad'],$_POST['disponible_s']);
            echo 1;
          }
        }else{
          header ('location : ?view=permanentes');
        }
      break;
      case 'update':
        if($_POST){
          foreach($_permanentes as $valor) {
            if($valor['nombre']==$_POST['nombre']){
              $existe = true;
            }
          }
          if(isset($existe) and $existe){
            echo '
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class=" fa fa-close "></i>¡Error!</h4>
                  <strong>Ese Material ya Existe</strong>
                </div>
            ';
          }else{
          }
          // $Singleton->Create();
        }else{
          header ('location : ?view=permanentes');
        }
      break;
      case 'delete':
        if ($isset_id) {
          if ($_POST) {
            $Singleton->Delete();
          }else{
            echo 'confirmar contraseña';
          }
        }else {
          header ('location : ?view=permanentes');
        }
      break;
      default:
        include(HTML_DIR . 'permanentes/all.php');
      break;
    }

?>
