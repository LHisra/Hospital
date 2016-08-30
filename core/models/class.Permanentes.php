<?php
  class Permanentes {
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

    public function Create($nombre,$cantidad,$disponible_s){
      $sql = "INSERT INTO permanentes (nombre, cantidad, disponible_s)
      VALUES(:nombre, :cantidad, :disponible_s)";
      $query = $this->dbh->prepare($sql);
      $query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
      $query->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
      $query->bindParam(':disponible_s', $disponible_s, PDO::PARAM_INT);
      $query->execute();
      return 1;
  	}
    public function Read(){
      try {
        $sql = "SELECT * FROM permanentes";
        $query = $this->dbh->prepare($sql);
        $results = $query->execute();
        return $query->fetchAll();
      }catch(PDOException $e){
  			print "Error!: " . $e->getMessage();
  		}
  	}
    public function Update(){
  	}
    public function Delete(){
  	}
    public function __destruct(){
      $this->dbh = null;
    }
  	public function __clone(){
      trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
  }
?>
