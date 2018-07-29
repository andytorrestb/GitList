<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \SLim\App;
$app->get('/', function (Request $request, Response $response, array $args) {
	$content = require_once __DIR__.'/home.php';
    $response->getBody()->write($content);
    return $response;
});

$app->get('/tools', function (Request $request, Response $response, array $args){
    $content = require_once __DIR__.'/tools.php';
    $response->getBody()->write($content);
    return $response;
});

$app->run();