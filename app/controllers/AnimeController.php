<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../app/models/Anime.php";

class AnimeController {

    private $db;
    private $anime;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->anime = new Anime($this->db);
    }

    public function index() {
        $animeList = $this->anime->getAll();
        require_once __DIR__ . "/../views/anime/index.php";
    }

    public function show($id) {
        $anime = $this->anime->getOne($id);
        require_once __DIR__ . "/../views/anime/show.php";
    }

    public function create() {
        require_once __DIR__ . "/../views/anime/create.php";
    }

    public function store($data) {
        $this->anime->create($data);
        header("Location: /anime-tracker");
    }

    public function edit($id) {
        $anime = $this->anime->getOne($id);
        require_once __DIR__ . "/../views/anime/edit.php";
    }

    public function update($id, $data) {
        $this->anime->update($id, $data);
        header("Location: /anime-tracker");
    }

    public function destroy($id) {
        $this->anime->delete($id);
        header("Location: /anime-tracker");
    }
}
?>