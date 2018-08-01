<?php 

require_once(__DIR__.'/vendor/autoload.php'); //this has to go at the top!

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

$app->get('/', function (Request $request, Response $response, array $args) {
	$content = require_once __DIR__.'/home.php';
    $response->write($content);
    return $response;
});

// ROUTE TO GITS
$app->get('/tools', function (Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/tools.php';
    $response->write($content);
    return $response;
});

$app->get('/libraries', function(Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/libraries.php';
    $response->write($content);
    return $response;
});

$app->get('/frameworks', function (Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/frameworks.php';
    $response->write($content);
    return $response;
});

 $app->get('/info', function (Request $request, Response $response, array $args){
     $content = require_once __DIR__.'/info.php';
     $response->write($content);
 });

 $app->get('/diy', function (Request $request, Response $response, array $args){
     $content = require_once __DIR__.'/diy.php';
     return $response->write($content);
 });

 // ROUTE TO TEXT
 $app->get('/docs', function (Request $request, Response $response, array $args) {
	$content = require_once __DIR__.'/docs.php';
    $response->write($content);
    return $response;
});

$app->get('/articles', function (Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/articles.php';
    $response->write($content);
});

$app->get('/tutorials', function (Request $request, Response $response, araay $args){
    $content = require_once __DIR__.'/tutorials.php';
    $response->write($content);
});

$app->get('/books', function (Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/books.php';
    $response->write($content);
});

$app->get('/jargon', function (Request $request, Response $repsonse, array $args){
    $content = require_once __DIR__.'/jargon.php';
    $repsonse->write($content);
});

// ROUTE TO DATA

$app->get('/stats', function (Request $request, Response $response, array $array){
    $content = require_once __DIR__.'/stats.php';
    $repsonse->write($content);
});



$app->run(); 