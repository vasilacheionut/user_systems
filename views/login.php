<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>User Systems - Login</title>
</head>

<body>
    <h1>This is the Login page.</h1>
<style>
    input, button{
        display: block;
        max-width: 350px;
        width: 100%;
        padding: 15px;
    }
</style>
<form method="post" action="/login">
    <h2>Login</h2>
    <label for="username">Username</label>
    <input name="username" type="email" placeholder="Email" value="vasilacheorionut@gmail.com" required>
    <input name="password" type="password" placeholder="Password" value="Pogimamoru1@" required>
    <button type="submit">Login</button>
</form>
<p><a href="/register">Register</a></p>
<hr>
<?php
require_once "menu.php";
?>