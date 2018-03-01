<?php 
//estas tres lineas sirven para indicarle a php que muestre todos los
//errores que haya en nuestra aplicacion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php'; 
include_once '../config.php';


$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
/** basename es index.php
 *  al realizar str_replace quitamos el index.php de $baseDir
 *  por lo que nos queda 'http://cursophp.com/blog/public/'*/
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
//define() se usa para definir constantes
define('BASE_URL', $baseUrl);


$route = $_GET['route'] ?? '/';
/**
 * $route = $_GET['route'] ?? '/'; es igual a:
 * $route = $_GET['route'];
 * if ($route == null)
 *  $route = '/';
 */

function render($fileName, $params = []){
    ob_start(); //enciende el buffer interno de php
    extract($params);
    include $fileName;
    return ob_get_clean(); //obtiene el buffer y lo limpia
}

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/', function() use($pdo){
    $query = $pdo->prepare('SELECT * FROM mydb.Blog_posts ORDER BY id DESC');
    $query->execute();

    $blog_posts = $query->fetchAll(PDO::FETCH_ASSOC);
    return render('../views/index.php', ['blog_posts' => $blog_posts]);
}); 

$router->get('/admin', function(){
    //si no paso nada en el segundo parametro se usa el parametro default que es el que aparece en la funcion render
    return render('../views/admin/index.php');
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;