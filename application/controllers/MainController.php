<?php
namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{
  
  
  public function indexAction(){
    /*$db = new Db;

    $params = [
    	'id' => 1,
    ];

    $data = $db->column('SELECT name FROM test WHERE id = :id', $params);
    
    debug($data, 0);
    */
    $result = $this->model->getNews();
    $vars = [
    	'news' => $result,
    ];
    $this->view->render('Главная страница', $vars);
  }
  /*
  public function contactAction(){ echo 'Контакты'; }
  */
}

?>