<?php require_once __DIR__ . "/../layout/header.php"; ?>

<main>
    <h1>My Anime List</h1>

    <?php if(empty($animeList)): ?>
        <p>No anime added yet.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Rating</th>
                    <th>Progress</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($animeList as $anime): ?>
                <tr>
                    <td><?= $anime['title'] ?></td>
                    <td><?= $anime['status'] ?></td>
                    <td><?= $anime['rating'] ?>/10</td>
                    <td><?= $anime['current_ep'] ?>/<?= $anime['total_ep'] ?></td>
                    <td><?= $anime['genre'] ?></td>
                    <td>
                         <a href="/anime-tracker/index.php?action=show&id=<?= $anime['id'] ?>">View</a>
                        <a href="/anime-tracker/index.php?action=edit&id=<?= $anime['id'] ?>">Edit</a>
                        <a href="/anime-tracker/index.php?action=delete&id=<?= $anime['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>

<?php require_once __DIR__ . "/../layout/footer.php"; ?>