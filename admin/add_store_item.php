<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO store (name, price, image) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $price, $image);
    $stmt->execute();

    header('Location: manage_store.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Add New Store Item</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Item Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Store Item</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
