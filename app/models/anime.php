<?php
class Anime{
    private $conn;
    private $table= "anime";

    public $id;
    public $title;
    public $status;
    public $rating;
    public $current_ep;
    public $total_ep;
    public $date_added;

    public function __construct($db)
    {
        $this->conn =$db;
    }

    public function getAll(){
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($id){
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $sql = "INSERT INTO " . $this->table . "
                (title, status, rating, current_episode, total_episodes, genre, date_added)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            $data['title'],
            $data['status'],
            $data['rating'],
            $data['current_episode'],
            $data['total_episodes'],
            $data['genred'],
            date('Y-m-d')
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }

}
?>
