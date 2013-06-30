<?php

require_once 'Breeze.php';

get('/', function(){
    display('index');
});

get(';^/v1/Users/(?<id>\d+)$;', function($app, $params) {

    echo "hello user " + $params['id'];
});


run();