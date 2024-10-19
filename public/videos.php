<?php
include('../db/db.php');
include('../partials/public_header.php');

// Assuming the correct column name is 'created_at'
$sql = "SELECT * FROM videos ORDER BY created_at DESC"; // Adjust 'created_at' based on your database column
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Videos</h2>
    <?php while ($video = $result->fetch_assoc()) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $video['title']; ?></h5>
                <a href="<?php echo $video['url']; ?>" class="btn btn-primary">Watch Video</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include('../partials/public_footer.php'); ?>
