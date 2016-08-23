<?php
  class Users {
  	private static $instancia;
  	private $dbh;
  	private function __construct(){
     	$this->dbh = Conexion::singleton_Conexion();
  	}
  	public static function singleton_Users(){
    	if (!isset(self::$instancia)) {
      	$miclase = __CLASS__;
      	self::$instancia = new $miclase;
    	}
    	return self::$instancia;
  	}
    public function get_Users(){
  	  try {

        $sql = "SELECT * FROM user";
        $query = $this->dbh->prepare($sql);
        $results = $query->execute();
        $this->dbh = null;
        return $query->fetchAll();

      }catch(PDOException $e){
  			print "Error!: " . $e->getMessage();
  		}
  	}

  	public function __clone(){
      trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
  }
?>
