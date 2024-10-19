<?php
include('../db/db.php');
include('../partials/public_header.php');

$sql = "SELECT * FROM games";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Games</h2>
    <div class="row">
        <?php while ($game = $result->fetch_assoc()) { ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="<?php echo $game['image']; ?>" class="card-img-top" alt="<?php echo $game['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $game['name']; ?></h5>
                        <a href="game_details.php?id=<?php echo $game['id']; ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('../partials/public_footer.php'); ?>
