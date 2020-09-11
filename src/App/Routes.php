<?php
use Slim\Routing\RouteCollectorProxy;

$app ->group('/api',function(RouteCollectorProxy $group){
    $group->get('/articles','App\Controllers\ArticlesController:getAll');
});
