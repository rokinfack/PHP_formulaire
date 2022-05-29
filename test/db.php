<?php
try{ 
$mydb=new PDO('mysql:host=localhost:81;dbname=db;charset=utf8','root','root');
}
catch(Exception $e)
{
    echo 'impossible de se connecter';
    echo $e->getMessage();
    die();
}
