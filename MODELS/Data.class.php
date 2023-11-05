<?php
class Data
{
    protected function connect()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=JOBTOPIA;charset=utf8', 'root', 'Voltoche21');
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Exception $e) {
            die(" Erreur de connexion: " . $e->getMessage());
        }
    }
}
