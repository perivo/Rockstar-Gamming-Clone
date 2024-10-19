<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM games WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$game = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];

    $sql = "UPDATE games SET name = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $image, $id);
    $stmt->execute();

    header('Location: manage_games.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Edit Game</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Game Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $game['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" class="form-control" value="<?php echo $game['image']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Game</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
