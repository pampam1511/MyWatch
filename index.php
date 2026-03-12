<?php
require_once "config/database.php";

$database = new Database();
$conn = $database->getConnection();

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Anime watchlist </title>
    </head>
    <body>
        <?php if($conn): ?>
            <h1> Database connection successful! </h1>
        <?php else: ?>
            <h1> Database connection failed! </h1>
        <?php endif; ?>
    </body>
</html>