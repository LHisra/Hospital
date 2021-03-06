<?php
  class Users {
  	private static $instancia;
  	private $dbh;
  	private function __construct(){
     	$this->dbh = Conexion::Singleton();
  	}
  	public static function Singleton(){
    	if (!isset(self::$instancia)) {
      	$miclase = __CLASS__;
      	self::$instancia = new $miclase;
    	}
    	return self::$instancia;
  	}
    public function get(){
  	  try {
        $sql = "SELECT * FROM user";
        $query = $this->dbh->prepare($sql);
        $results = $query->execute();
        return $query->fetchAll();
      }catch(PDOException $e){
  			print "Error!: " . $e->getMessage();
  		}
  	}
    public function login($data,$pass,$session){
      try {
  				$sql = "SELECT id FROM user WHERE (usuario = '$data' OR cedula = '$data') AND pass = '$pass'";
  				$query = $this->dbh->prepare($sql);
  				$query->bindParam(1,$data);
  				$query->bindParam(2,$pass);
          $query->bindParam(3,$session);
  				$query->execute();
  				//si existe el usuario
  				if($query->rowCount() == 1){
  					$fila = $query->fetch();
  					$_SESSION['app_id'] = $fila['id'];
            // ini_set le da el tiempo de vida al usuario para estar logeado (60*60*24 = 24 horas)
            if($session) { ini_set('session.cookie_lifetime', time() + (60*60*24)); }
  				 	return TRUE;
  				}else{
  					return FALSE;
  				}
          $this->dbh = null;
      }catch(PDOException $e){
  			print "Error!: " . $e->getMessage();
  		}
  	}
  	public function __clone(){
      trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
    public function __destruct(){
      $this->dbh = null;
    }
  }
?>
