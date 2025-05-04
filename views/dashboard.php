<h1>Dashboard</h1>
<?php
echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "! <a href='/logout'>Logout</a>";
require_once "menu.php";
?>