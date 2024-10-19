<?php
include('../db/db.php');
include('../partials/public_header.php');

$game_id = $_GET['id'] ?? '';

$sql = "SELECT * FROM games WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $game_id);
$stmt->execute();
$result = $stmt->get_result();
$game = $result->fetch_assoc();
?>

<div class="container mt-5">
    <h2><?php echo $game['name']; ?></h2>
    <img src="<?php echo $game['image']; ?>" class="img-fluid mb-3" alt="<?php echo $game['name']; ?>">
    <p><?php echo $game['description']; ?></p>
</div>

<?php include('../partials/public_footer.php'); ?>
