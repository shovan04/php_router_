<?php
require_once __DIR__.'./vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$url = $_SERVER['REQUEST_URI'];
// echo $url;

$url = str_replace($_ENV['REPLACE_URL'],'',$url);
$arr = explode('/',$url);

// echo 'router page        ';

// echo($arr[1].'    '.$arr[2]);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >';
include $_ENV['URL_NAV'];
if($url==='/'||$url==='/home'){
    include $_ENV['URL_HOME'];
}
elseif($url==='/user' || preg_match("/user\/[a-zA-Z0-9]/i",$url)){
    include $_ENV['URL_USER'];
}
elseif($url==='/notice'){
    include $_ENV['URL_NOTICE'];
}
elseif($url==='/home-work'){
    include $_ENV['URL_HOME_WORK'];
}
elseif($url==='/reporte'){
    include $_ENV['URL_REPORTE'];
}
else{
    include $_ENV['URL_HOME'];
}
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>';

?>
