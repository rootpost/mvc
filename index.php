<?php
require_once 'application/lib/Dev.php';
/*=================================================================*/
use application\core\Router;

/*=================================================================*/
spl_autoload_register(function($class) {
  $path = str_replace('\\', '/', $class.'.php');
  if(file_exists($path)){
    require_once $path;
  }
});
/*=================================================================*/
session_start();

/*=================================================================*/
echo <<<HEAD
<!DOCUMENT html>
<html>
<head>
  <link rel="stylesheets" type="text/css" href="" />
  <script type="text/javascript" src=""></script>
  <script type="text/javascript">
    
  </script>
</head>
<body style="background-color:#584e43;color:#f6ecd4;">
HEAD;

/*=================================================================*/
$router = new Router;
$router->run();



?>

  <div class=""></div>
</body>
</html>
