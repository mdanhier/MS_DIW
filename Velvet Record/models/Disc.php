<?php
class Disc extends Model
{
    public function __construct()
    {
        $this->table = "disc";
        $this->getConnection();
    }
    public function findById(int $id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE 'discid'='" . $id . "'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}