<?php
require_once '../../app.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit;
}
$_SESSION[APP_NAME]['menu'] = $_POST;
$menu = new menu();
$menu->insert($_POST);

header('Location: ./');
