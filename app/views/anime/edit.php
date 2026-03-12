<?php require_once "/../layout/header.php"; ?>

<main>
    <h1>Edit Anime</h1>

    <form method="POST" action="/anime-tracker/index.php?action=update&id=<?= $anime['id'] ?>">

        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?= $anime['title'] ?>" required>
        </div>

        <div>
            <label>Status</label>
            <select name="status">
                <option value="watching" <?= $anime['status'] == 'watching' ? 'selected' : '' ?>>Watching</option>
                <option value="completed" <?= $anime['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                <option value="dropped" <?= $anime['status'] == 'dropped' ? 'selected' : '' ?>>Dropped</option>
                <option value="plan_to_watch" <?= $anime['status'] == 'plan_to_watch' ? 'selected' : '' ?>>Plan to Watch</option>
            </select>
        </div>

        <div>
            <label>Rating (1-10)</label>
            <input type="number" name="rating" min="1" max="10" value="<?= $anime['rating'] ?>">
        </div>

        <div>
            <label>Current Episode</label>
            <input type="number" name="current_episode" min="0" value="<?= $anime['current_episode'] ?>">
        </div>

        <div>
            <label>Total Episodes</label>
            <input type="number" name="total_episodes" min="0" value="<?= $anime['total_episodes'] ?>">
        </div>

        <div>
            <label>Genre</label>
            <input type="text" name="genre" value="<?= $anime['genre'] ?>">
        </div>

        <button type="submit">Save Changes</button>

    </form>
</main>

<?php require_once  "/../layout/footer.php"; ?>