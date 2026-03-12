<?php require_once __DIR__ . "/../layout/header.php"; ?>

<main>
    <h1>Add Anime</h1>

    <form method="POST" action="/anime-tracker/index.php?action=store">

        <div>
            <label>Title</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Status</label>
            <select name="status">
                <option value="watching">Watching</option>
                <option value="completed">Completed</option>
                <option value="dropped">Dropped</option>
                <option value="plan_to_watch">Plan to Watch</option>
            </select>
        </div>

        <div>
            <label>Rating (1-10)</label>
            <input type="number" name="rating" min="1" max="10">
        </div>

        <div>
            <label>Current Episode</label>
            <input type="number" name="current_episode" min="0">
        </div>

        <div>
            <label>Total Episodes</label>
            <input type="number" name="total_episodes" min="0">
        </div>

        <div>
            <label>Genre</label>
            <input type="text" name="genre">
        </div>

        <button type="submit">Add Anime</button>

    </form>
</main>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>