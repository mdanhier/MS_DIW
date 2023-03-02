<?php
class Artists
{
    private $connexion;
    private $table = "artist";
    public $artist_id;
    public $artist_name;
    public $artist_url;
    public function __construct($db)
    {
        $this->connexion = $db;
    }
    public function readAll()
    {
        $sql   = "SELECT * FROM " . $this->table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }
    public function readOne($artist_id)
    {
        $sql   = "SELECT * FROM " . $this->table . " WHERE artist.artist_id=" . $artist_id;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }
}
