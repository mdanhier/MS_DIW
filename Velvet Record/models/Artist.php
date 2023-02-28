<?php
class Artist extends Model
{
    public int $id;
    public function __construct()
    {
        $this->table = "artist";
        $this->getConnection();
    }
    public function getById(int $id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE artist_id='" . $id . "'";
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
