<?php

    $url = 'http://localhost/public_html/api';

    $class = '/carros';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    //echo $response;

    //
    //$response = json_decode($response, 1);
    //var_dump($response['data'][1]['id']);