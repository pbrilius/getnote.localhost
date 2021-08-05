<?php

use Psr\Http\Message\ServerRequestInterface;

$responseFactory = new Laminas\Diactoros\ResponseFactory();
$strategy = new League\Route\Strategy\JsonStrategy($responseFactory);

// map a route
$router->group('/index.php/api/v' . $eniac->get('api.version'), function ($router) use ($eniac) {
  $router->map('GET', '/', function (ServerRequestInterface $request) use ($eniac): array {
    return [
      'title'   => $eniac->get('app.label'),
      'version' => $eniac->get('api.version'),
    ];
  });
})->setStrategy($strategy);
