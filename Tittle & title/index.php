<!-- router -->
<?php
session_start();
require 'config.php';
require 'connectDB.php';

$c = $_GET['c'] ?? 'home';
$a = $_GET['a'] ?? 'index';

$strController = ucfirst($c) . 'Controller';
require "controller/$strController.php";

$controller = new $strController();
$controller->$a();
?>
