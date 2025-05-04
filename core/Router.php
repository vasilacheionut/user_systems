<?php
class Router
{
    protected $request;
    protected $routes = [
        'get' => [],
        'post' => [],
    ];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }


    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->getPath();

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            http_response_code(404);
            require __DIR__ . '/../views/404.php';
            return;
        }

        echo is_callable($callback) ? call_user_func($callback) : $callback;
    }
}
/*
Explicație: Salvează și apelează funcțiile definite în routes/web.php, în funcție de URL și metodă.
Explanation: Saves and calls the functions defined in routes/web.php, depending on the URL and method.
*/