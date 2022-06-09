<?php 
//connection to database
try
{
    $db = new PDO('mysql:host=localhost;dbname=databaseact1-5;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


?>