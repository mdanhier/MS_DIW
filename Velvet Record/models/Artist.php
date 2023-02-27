<?php
class Artist extends Model
{
    public function __construct()
    {
        $this->table = "artist";
        $this->getConnection();
    }
    public function findById(int $id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE 'artist_id'='" . $id . "'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
