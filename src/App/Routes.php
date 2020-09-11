<?php
use Slim\Routing\RouteCollectorProxy;

$app ->group('/api',function(RouteCollectorProxy $group){
    $group->get('/instituciones','App\Controllers\ArticlesController:getAll');
});
