<?php
//simple_php_framewor/index.php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

//$request = Request::create('/index.php?name=Fabien');

//$a = $request->getPathInfo();
//$a = $request->server->get('HTTP_HOST');
//$a = $request->cookies->get('PHPSESSID');
//$a = $request->headers->get('host');
//$a = $request->headers->get('content_type');
//$a = $request->getMethod();
//$a = $request->getClientIp();

//var_dump($a);

$input = $request->get('name', 'WTF!');

$response = new Response(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

$response->prepare($request);

$response->send();


