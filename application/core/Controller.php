<?php
namespace application\core;

use application\core\View;

abstract class Controller{

  public $route;
  public $view;
  public $acl;
  //public $model;
  
  public function __construct($route){
    $this->route = $route;
    //$_SESSION['authorize']['id'] = 1;
    if(!$this->checkAcl()){
      View::errorCode(403);
    }
    $this->view = new View($route);
    $this->model = $this->loadModel($route['controller']);
    //debug($this->model,0);
//  Замена шаблона отображения для всего контроллера
//  $this->before();
  }

  public function loadModel($name){
  	$path = 'application\models\\'.ucfirst($name);
  	if (class_exists($path)) {
  		return new $path();
  	}
  }

  public function checkAcl(){
    $this->acl = require_once 'application/acl/'.$this->route['controller'].'.php';
    //debug ($this->acl, 0);
    //debug ($this->route['controller'], 0);
    if($this->isAcl('all')){
      return true;
    }
    elseif(isset($_SESSION['authorize']['id']) and $this->isAcl('authorize')){
      return true;
    }
    elseif(!isset($_SESSION['authorize']['id']) and $this->isAcl('guest')){
      return true;
    }
    elseif(isset($_SESSION['admin']) and $this->isAcl('admin')){
      return true;
    }
    return false;
  }

  public function isAcl($key){
    //debug($this->route['action'], $this->acl[$key]);
    return in_array($this->route['action'], $this->acl[$key]);
  }

}

?>