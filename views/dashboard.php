<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>User Systems - Dashboard</title>
</head>

<body>
    <h1>This is the Dashboard page.</h1>

    <?php
    echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "! <a href='/logout'>Logout</a>";
    require_once "menu.php";
    ?>