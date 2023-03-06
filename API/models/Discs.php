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
        $this->connexion = $db;
    }
    public function readAll()
    {
        $sql   = "SELECT * FROM " . $this->table;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }
    public function readAllByArtistId($artist_id)
    {
        $sql   = "SELECT * FROM " . $this->table . " WHERE artist_id=" . $artist_id;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }
    public function readOne($disc_id)
    {
        $sql   = "SELECT * FROM " . $this->table . " WHERE disc_id=" . $disc_id;
        $query = $this->connexion->prepare($sql);
        $query->execute();
        return $query;
    }
    public function edit()
    {
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
            return true;
        }
        return false;
    }
    public function add()
    {
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
            return true;
        }
        return false;
    }
    public function delete()
    {
        $sql = "DELETE FROM " . $this->table . " WHERE disc_id = :disc_id";
        $query = $this->connexion->prepare($sql);
        $this->disc_id = htmlspecialchars(strip_tags($this->disc_id));
        $query->bindParam(':disc_id', $this->disc_id);
        if ($query->execute()) {
            return true;
        }
        return false;
    }
}
