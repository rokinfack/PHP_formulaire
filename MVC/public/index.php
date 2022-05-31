<?php


require '../core/Router.php';

$router=new Router();
$router->add('',['controller'=>'home','action'=>'index']);
$router->add('posts',['controller'=>'posts','action'=>'index']);
$router->add('posts/new',['controller'=>'posts','action'=>'new']);

$url=$_SERVER['QUERY_STRING'];
echo '<pre>';

if($router->match($url)) {

    print_r($router->getParams());
}else{
    echo 'no router founded!';
}
echo "</pre>";



