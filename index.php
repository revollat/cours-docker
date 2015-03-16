<?php
require 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$foo = $request->query->get('foo', 'World !');

$response = new Response('Hello, ' . $foo, 200, array('content-type' => 'text/html'));

$response->send();
