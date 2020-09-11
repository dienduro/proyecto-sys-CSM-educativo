<?php
$container->set('db_settings',function(){
    return (object)[
        "DB_HOST" => 'localhost',
        "DB_NAME" => 'dbcsmeducativo',
        "DB_USER" => 'root',
        "DB_PASS" => 'factwu',
        "DB_CHAR" => 'utf8'

    ];

});