<style>
    input, button{
        display: block;
        max-width: 350px;
        width: 100%;
        padding: 15px;
    }
</style>
<form method="post" action="/register">
    <h2>Register</h2>
    <label for="username">Username</label>
    <input name="username" type="email" placeholder="Email" value="vasilacheorionut@gmail.com" required>
    <input name="password" type="password" placeholder="Password" value="Pogimamoru1@" required>
    <button type="submit">Register</button>
</form>
<p><a href="/login">Login</a></p>
<hr>
<?php
require_once "menu.php";
?>