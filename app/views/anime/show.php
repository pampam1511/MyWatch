<?php require_once __DIR__ . "/../layout/header.php"; ?>

<main>
    <h1><?= $anime['title'] ?></h1>

    <?php if(empty($anime)): ?>
        <p>Anime not found.</p>
    <?php else: ?>

        <div class="anime-detail">

            <div class="anime-info">
                <p>
                    <strong>Status:</strong>
                    <?= $anime['status'] ?>
                </p>
                <p>
                    <strong>Rating:</strong>
                    <?= $anime['rating'] ?>/10
                </p>
                <p>
                    <strong>Progress:</strong>
                    <?= $anime['current_episode'] ?>/<?= $anime['total_episodes'] ?> episodes
                </p>
                <p>
                    <strong>Genre:</strong>
                    <?= $anime['genre'] ?>
                </p>
                <p>
                    <strong>Date Added:</strong>
                    <?= $anime['date_added'] ?>
                </p>
            </div>

            <div class="anime-actions">
                <a href="/anime-tracker/index.php?action=edit&id=<?= $anime['id'] ?>">
                    Edit
                </a>
                <a href="/anime-tracker/index.php?action=delete&id=<?= $anime['id'] ?>">
                    Delete
                </a>
                <a href="/anime-tracker">
                    Back to List
                </a>
            </div>

        </div>

    <?php endif; ?>
</main>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>