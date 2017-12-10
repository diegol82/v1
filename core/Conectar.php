<? php
class Conectar {
private $driver;
private $host,$user,$pass,$database,$chartset;
public function _construct(){
  db_cfg = require_once 'config/database';
  $this->driver=$db_cfg['driver'];
  $this->host=$db_cfg['host'];
  $this->user=$db_cfg['user'];
  $this->pass=$db_cfg['pass'];
  $this->database=$db_cfg['database'];
  $this->charset=$db_cfg['chartset']; 
  }
public conexion(){
  if ($this->driver=="mysql" || $this->driver==null){
    $con=new mysqli($this->host, $this->user,$this->pass.$this->database);
    $con->query("SET NAMES '".$this->charset."'");
  }
  return $con;
}

public function startFluent(){
  require_once "FluentPDO/FluentPDO.php";

  if($this->driver=="mysql" || $this->driver==null){
    $pdo = new PDO($this->driver.":dbname=".$this->database, $this->user, $this->pass);
    $fpdo = new FluentPDO($pdo);
  }
         
  return $fpdo;
  }

}
?>
