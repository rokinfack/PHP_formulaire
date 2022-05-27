<?php
try{ 
$myDB=new PDO('mysql:host=localhost;dbname=users;charset=utf8','root','root')
}
catch(Exception $e)
{
    die('Erreur':'?$e'->getmessage());
}
?>