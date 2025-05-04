<?php

$router->get('/', function () {
    require __DIR__ . '/../views/welcome.php';
});

$router->get('/about', function () {
    require __DIR__ . '/../views/about.php';
});

/*
Explicație: Definim două rute simple — una pentru / și una pentru /about.
Explanation: We define two simple routes — one for / and one for /about.
*/


require_once __DIR__ . '/../core/users.php';

$router->get('/login', function () {
    require __DIR__ . '/../views/login.php';
});

$router->post('/login', function () use ($users) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    echo "<pre>";
    var_dump($users);
    var_dump($username, $password);
    echo "</pre> <hr>";

    if (isset($username) && ($username == $users['username']) && $users['password'] === $password) {
        $_SESSION['user'] = $username;
        header('Location: /dashboard');
        exit;
    } else {
        echo "<pre>";
        var_dump($users);
        var_dump($username, $password);
        echo "</pre>";
    
        echo "Login failed! <a href='/login'>Try again</a>";
    }
});

$router->get('/register', function () {
    require __DIR__ . '/../views/register.php';
});

$router->post('/register', function () {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $users['username'] =  $username;
    $users['password'] = $password;

    echo "<pre>";
    var_dump($users);
    var_dump($username, $password);
    echo "</pre>";

    echo "User <strong>$username</strong> would be registered here (simulat).<br>";
    echo "<a href='/login'>Go to Login</a>";
});

$router->get('/dashboard', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }

    require __DIR__ . '/../views/dashboard.php';
});

$router->get('/logout', function () {
    session_destroy();
    header('Location: /login');
});
