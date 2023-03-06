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
        try {
            $this->connexion = $db;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function readAll()
    {
        try {
            $sql   = "SELECT * FROM " . $this->table;
            $query = $this->connexion->prepare($sql);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function readOne($artist_id)
    {
        try {
            $sql   = "SELECT * FROM " . $this->table . " WHERE artist.artist_id=" . $artist_id;
            $query = $this->connexion->prepare($sql);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
}
