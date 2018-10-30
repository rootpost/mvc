<?php

namespace application\lib;
use PDO;

Class Db {

  protected $db;
  
  public function __construct() {
    //echo '<br>It\'s DATABASES Class';
    $config = require_once 'application/config/db.php';
    //debug($config, 0);
    $this->db = new PDO($config['type'].':host='.$config['host'].';port='.$config['port'].';dbname='.$config['dbname'], $config['username'], $config['password']);
    //debug($this->db);
  }
  
  public function query($sql, $params = []) {
    $stmt = $this->db->prepare($sql);
    if(!empty($params)) {
      foreach($params as $key => $val){
        $stmt->bindValue(':'.$key, $val);
      }
    }
    $stmt->execute();
    return $stmt;
  }
  
  public function row($sql, $params = []) {
    $result = $this->query($sql, $params);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function column($sql, $params = []) {
    $result = $this->query($sql, $params);
    return $result->fetchColumn();
  }
}
?>