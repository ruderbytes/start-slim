<?php
error_reporting(0);
use \Psr\Http\Message\ResponseInterface as Request;
use \Psr\Http\Message\ServerRequestInterface as Response;

require_once './vendor/autoload.php';

function getConnection(){
$dsn = 'mysql:host=127.0.0.1;dbname=mydb;charset=utf8';
$usr = 'root';
$pwd = '';

$pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);

return $pdo;

}

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args){
    $welcome="Hello World!";
    $response->getBody()->write($welcome);
    return $response;
});

$app->run();
