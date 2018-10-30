<?php

namespace application\core;

class View{

  public $path;
  public $route;
  public $layout = 'default';
  
  public function __construct($route){
    $this->route = $route;
    $this->path = $route['controller'].'/'.$route['action'];
    //debug($this->path, 0);
  }
  
  public function render($title, $vars=[]){
    extract($vars);
    $path = 'application/views/'.$this->path.'.php';
    if(file_exists($path)){
      ob_start();
      require_once $path;
      $content = ob_get_clean();
      require_once 'application/views/layouts/'.$this->layout.'.php';
    }else{
      echo 'Представление не найдено';
    }
  }

  public function redirect($url){
    header('Location: '.$url);
    exit;
  }
  
  public static function errorCode($code){
    http_response_code($code);
    $path = 'application/views/errors/'.$code.'.php';
    if(file_exists($path)){
      require_once $path;
    }else{
      echo 'Код ошибки '.$code;
    }
    exit;
  }

  public function message($status, $message){
    exit(json_encode(['status' => $status, 'message' => $message]));
  }

  public function location($url){
    exit(json_encode(['url' => $url]));
  }
}

?>