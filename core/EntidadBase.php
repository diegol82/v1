<?php
class EntidadBase{
public function __construct($table) {
  $this->table=(string) $table;
  require_once 'conectar.php';
  $this->conectar=new Conectar();
  $his->db=$this->conectar->conexion();
  }

public function getConectar(){
  return $this->conectar;
}

public function db(){
  return $this->db;
}

public function getAll(){
  $query=$this->db->query("SELECT * $this->table Order By id DESC");
}

public getById($id){
  $query=$this->db->query("SELECT * FROM $this->table WHERE id = $id");
  if($row=$query->fetch_object()){
    $resultSet=$row;
  }
  return $resultSet; 
}

public function getBy($column,$value){
  $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
  while($row = $query->fetch_object()) {
    $resultSet[]=$row;
   }
         
   return $resultSet;
}
     
public function deleteById($id){
  $query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
  return $query;
}

public function deleteBy($column,$value){
  $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
  return $query;
}
     
/*
* Aquí podemos montarnos un montón de métodos que nos ayuden
* a hacer operaciones con la base de datos de la entidad
*/
}
