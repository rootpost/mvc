<?php

namespace application\controllers;
use application\core\Controller;

class AccountController extends Controller{

/* 
  public function before(){
  //  Замена шаблона отображения для всего контроллера
  //  $this->view->layout = 'custom';
  }
*/

  public function loginAction(){
    //$this->view->redirect('/');
    if(!empty($_POST)){
      //$this->view->message('error', 'Текст ошибки');
      $this->view->location('/account/register');
    }
    $this->view->render('Страница входа');
  }
  
  public function registerAction(){
  //  Для замены пути расположения представления
  //  $this->view->path = 'test/test';
  //  Замена шаблона отображения для обработчика
  //  $this->view->layout = 'custom';
    $this->view->render('Страница регистрации');
  }
}

?>