<?php
abstract class Model
{
    protected $connexion;

    public $table;

    public function getConnection()
    {
        $this->connexion = null;

        try {
            $this->connexion = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBDATABASE, DBUSER, DBPASSWORD);
            $this->connexion->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }
}
