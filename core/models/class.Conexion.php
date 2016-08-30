
<?php
  class Conexion{
    private static $instancia;
    private $dbh;
    /* Creamos la conexión, siendo este mismo privado que es como lo debemos
    hacer si queremos hacer uso de Sigleton */
    private function __construct(){
      try {
          $this->dbh = new PDO(DB_MOTOR.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
          $this->dbh->exec("SET CHARACTER SET utf8");
      } catch (PDOException $e) {
          echo "Error!: " . $e->getMessage();
          die();
      }
    }
    //funcion prepare, para que la conexión funcione (hay que hacer esto siempre).
    public function prepare($sql){
      return $this->dbh->prepare($sql);
    }
    public static function Singleton(){
      if (!isset(self::$instancia)) {
          $miclase = __CLASS__;
          self::$instancia = new $miclase;
      }
      return self::$instancia;
    }
    public static function Singletonn(){
      if (!isset(self::$instancia)) {
          $miclase = __CLASS__;
          self::$instancia = new $miclase;
      }
      return self::$instancia;
    }
     // Evita que el objeto se pueda clonar
    // public function __clone(){
    //   trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    // }
  }
?>
