<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str){
  if(is_array($str)){
    echo '<pre>';
    print_r($str);
    echo '</pre>';
    exit;
  }else{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
  }
}

?>