<?php

class ConnectToDb
{
    protected function getConnection()
    {
        try {
            return  $db = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '');
        } catch (PDOException $ecxeption) {
            echo "Erreur : " . $ecxeption->getMessage() . "<br>";
            die;
        }
    }
}

?>