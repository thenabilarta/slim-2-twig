<?php

session_start();

require '../vendor/autoload.php';

$app = new \Slim\Slim([
  'view' => new \Slim\Views\Twig()
]);

$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
  new \Slim\Views\TwigExtension(),
];

require 'routes.php';