<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch games
$sql = "SELECT * FROM games";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Games</h2>
    <a href="add_game.php" class="btn btn-success mb-3">Add New Game</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($game = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $game['id']; ?></td>
                    <td><?php echo $game['name']; ?></td>
                    <td><img src="<?php echo $game['image']; ?>" width="100"></td>
                    <td>
                        <a href="edit_game.php?id=<?php echo $game['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_game.php?id=<?php echo $game['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
