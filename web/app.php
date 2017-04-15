<?php

use Symfony\Component\HttpFoundation\Request;

$ip = $_SERVER['REMOTE_ADDR'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$datetimenow = date('d.m.Y H:i:s');
$txt = $datetimenow.'|'.$ip.'|'.$actual_link;
$myfile = fopen("log.txt", "a") or die("Error!");
fwrite($myfile, "\n". $txt);
fclose($myfile);


/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
