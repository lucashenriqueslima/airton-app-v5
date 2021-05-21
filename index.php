<?php 

    session_start();

    require __DIR__."/vendor/autoload.php";

    $router = new Source\Router();

    $router -> run();

    
    