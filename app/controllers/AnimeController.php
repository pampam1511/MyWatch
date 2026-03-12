<?php
require_once "config/database.php";
require_once "models/anime.php";

class AnimeController{
    private $db;
    private $anime;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->anime = new anime($this->db);
    }

    // Show all anime
    public function index() {
        $animeList = $this->anime->getAll();
        require_once "/../views/anime/index.php";

    }

    // Show one anime
    public function show($id) {
        $anime = $this->anime->getOne($id);
        require_once "/../views/anime/show.php";
    }

    // Show add form
    public function create() {
        require_once  "/../views/anime/create.php";
    }

    // Save new anime
    public function store($data) {
        $this->anime->create($data);
        header("Location: /anime-tracker");
    }

    // Show edit form
    public function edit($id) {
        $anime = $this->anime->getOne($id);
        require_once "/../views/anime/edit.php";
    }

    // Save edited anime
    public function update($id, $data) {
        $this->anime->update($id, $data);
        header("Location: /anime-tracker");
    }

    // Delete anime
    public function destroy($id) {
        $this->anime->delete($id);
        header("Location: /anime-tracker");
    }
}

?>