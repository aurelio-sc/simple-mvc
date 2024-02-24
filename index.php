<?php

require_once 'vendor/autoload.php';

use Config\Database;
use Controllers\AddUser;

$pdo = Database::connect();

if(isset($_GET['url'])) {

    $url = explode('/', $_GET['url']);
    
    // $controllerParts = explode('-',$url[0]);
    // $controller = '';
    // foreach  ($controllerParts as $part) {
    //     $part = ucfirst($part);
    //     $controller .= $part;
    // }
    
    // $controllerClass = "Controllers\\{$controller}";

    if ($url[0] == 'add-user') {
        AddUser::add();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple MVC</title>
</head>
<body>
    <form action="add-user" method="POST">
        <div class="input-field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="input-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-field">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>        
        <button type="submit">Add user</button>        
    </form>
</body>
</html>