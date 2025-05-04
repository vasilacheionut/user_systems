<?php
session_start();

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../core/Request.php';

$router = new Router(new Request);

require_once __DIR__ . '/../routes/web.php';

$router->resolve();

/*
Explicație: Acesta este fișierul principal care se încarcă. Creează obiectele și pornește routerul.
Explanation: This is the main file that is loaded. It creates the objects and starts the router.
*/