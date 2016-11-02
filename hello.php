<?php

//helloと出力

echo "Hello Composser !!";

require "vendor/autoload.php";
 
$log = new Monolog\Logger(basename(__FILE__, ".php"));
$log->pushHandler(new Monolog\Handler\StreamHandler("app.log", Monolog\Logger::DEBUG));
 
$log->addDebug("Program START!");
echo "Hello Composer World!!n";
$log->addDebug("Program END!");

	?>
