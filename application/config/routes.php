<?php

return [
/*
  'acount/login' => [
    'controller' => 'acount',
    'action' => 'login',
  ],
  
  Почему то не срабатывает в браузере,
  в отличии от первого варианта
  Одна лишняя 'c' в названии все ломает, нужно разобраться
  
  Не совсем понятно почему хром не воспринимает адрес вида "account/login"
  При переходе на "mvc/account/login" редиректит на главную, если изменить
  хотябы один символ, то все отрабатывает как должно
    
  upgrade-insecure-requests что-то связанное с https
  в браузерах и на серверах
*/
  
  '' => [
    'controller' => 'main',
    'action' => 'index',
  ],
  /*
  'contact' => [
    'controller' => 'main',
    'action' => 'contact',
  ],
  */
  'account/in' => [
    'controller' => 'account',
    'action' => 'login',
  ],
  
  'account/register' => [
    'controller' => 'account',
    'action' => 'register',
  ],
  /*
  'news/show' => [
    'controller' => 'news',
    'action' => 'show',
  ],
  */
];

?>