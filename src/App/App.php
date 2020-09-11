<?php

/* require __DIR__ . '/../../vendor/autoload.php'; */


/* use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
 */
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$aux = new DI\Container();
AppFactory::setContainer($aux);
$app = AppFactory::create();
$container = $app->getContainer();


require __DIR__ .'/Routes.php';
require __DIR__ .'/Configs.php';
require __DIR__ .'/Dependences.php';
$app->run();