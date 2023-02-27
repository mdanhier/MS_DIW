<?php
abstract class Model
{
    protected $connexion;

    public $table;
    public $id;

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

    public function getAll()
    {
        $sql   = "SELECT * FROM " . $this->table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}