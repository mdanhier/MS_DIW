<?php
class Discs
{
    private $connexion;
    private $table = "disc";
    public $disc_id;
    public $disc_title;
    public $disc_year;
    public $disc_picture;
    public $disc_label;
    public $disc_genre;
    public $disc_price;
    public $artist_id;
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
    public function readAllByArtistId($artist_id)
    {
        try {
            $sql   = "SELECT * FROM " . $this->table . " WHERE artist_id=" . $artist_id;
            $query = $this->connexion->prepare($sql);
            if ($query->execute()) {
                return $query;
            }
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function readOne($disc_id)
    {
        try {
            $sql   = "SELECT * FROM " . $this->table . " WHERE disc_id=" . $disc_id;
            $query = $this->connexion->prepare($sql);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function edit()
    {
        try {
            $sql = "UPDATE " . $this->table . " SET disc_title = :disc_title, disc_year = :disc_year, disc_picture = :disc_picture, disc_label = :disc_label, disc_genre = :disc_genre, disc_price = :disc_price, artist_id = :artist_id WHERE disc_id = :disc_id";
            $query = $this->connexion->prepare($sql);
            $this->disc_id = htmlspecialchars(strip_tags($this->disc_id));
            $this->disc_title = htmlspecialchars(strip_tags($this->disc_title));
            $this->disc_year = htmlspecialchars(strip_tags($this->disc_year));
            $this->disc_picture = htmlspecialchars(strip_tags($this->disc_picture));
            $this->disc_label = htmlspecialchars(strip_tags($this->disc_label));
            $this->disc_genre = htmlspecialchars(strip_tags($this->disc_genre));
            $this->disc_price = htmlspecialchars(strip_tags($this->disc_price));
            $this->artist_id = htmlspecialchars(strip_tags($this->artist_id));
            $query->bindParam(':disc_title', $this->disc_title);
            $query->bindParam(':disc_year', $this->disc_year);
            $query->bindParam(':disc_picture', $this->disc_picture);
            $query->bindParam(':disc_label', $this->disc_label);
            $query->bindParam(':disc_genre', $this->disc_genre);
            $query->bindParam(':disc_price', $this->disc_price);
            $query->bindParam(':artist_id', $this->artist_id);
            $query->bindParam(':disc_id', $this->disc_id);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function add()
    {
        try {
            $sql = "INSERT INTO " . $this->table . "(disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:disc_title, :disc_year, :disc_picture, :disc_label, :disc_genre, :disc_price, :artist_id)";
            $query = $this->connexion->prepare($sql);
            $this->disc_title = htmlspecialchars(strip_tags($this->disc_title));
            $this->disc_year = htmlspecialchars(strip_tags($this->disc_year));
            $this->disc_picture = htmlspecialchars(strip_tags($this->disc_picture));
            $this->disc_label = htmlspecialchars(strip_tags($this->disc_label));
            $this->disc_genre = htmlspecialchars(strip_tags($this->disc_genre));
            $this->disc_price = htmlspecialchars(strip_tags($this->disc_price));
            $this->artist_id = htmlspecialchars(strip_tags($this->artist_id));
            $query->bindParam(':disc_title', $this->disc_title);
            $query->bindParam(':disc_year', $this->disc_year);
            $query->bindParam(':disc_picture', $this->disc_picture);
            $query->bindParam(':disc_label', $this->disc_label);
            $query->bindParam(':disc_genre', $this->disc_genre);
            $query->bindParam(':disc_price', $this->disc_price);
            $query->bindParam(':artist_id', $this->artist_id);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
    public function delete()
    {
        try {
            $sql = "DELETE FROM " . $this->table . " WHERE disc_id = :disc_id";
            $query = $this->connexion->prepare($sql);
            $this->disc_id = htmlspecialchars(strip_tags($this->disc_id));
            $query->bindParam(':disc_id', $this->disc_id);
            if ($query->execute()) {
                return $query;
            }
            return false;
        } catch (\Throwable $thr) {
            throw new Exception($thr);
        }
    }
}
