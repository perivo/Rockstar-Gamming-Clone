<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];

    $sql = "INSERT INTO games (name, image) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $image);
    $stmt->execute();

    header('Location: manage_games.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Add New Game</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Game Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Game</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
