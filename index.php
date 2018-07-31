<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

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

$app->get('/docs', function ($request, $response, $args) {
	$content = require_once(__DIR__.'/docs.php');
    return $response->write($content);
});


$app->run();