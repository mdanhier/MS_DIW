<?php
class Disc extends Model
{
    public int $id;
    public function __construct()
    {
        $this->table = "disc";
        $this->getConnection();
    }

    public function getAll()
    {
        $sql   = "SELECT * FROM " . $this->table . " INNER JOIN artist ON (disc.artist_id=artist.artist_id)";
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getById(int $id)
    {
        $sql = "SELECT * FROM " . $this->table . " INNER JOIN artist ON (disc.artist_id=artist.artist_id) AND disc_id=" . $id;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
