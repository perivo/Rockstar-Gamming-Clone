<?php 
include('../db/db.php');
include('../partials/public_header.php');

// Update the query based on the correct column name
$sql = "SELECT * FROM newswire ORDER BY created_at DESC"; // Assuming the column is 'created_at'
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Latest News</h2>
    <?php while ($news = $result->fetch_assoc()) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $news['title']; ?></h5>
                <p class="card-text"><?php echo $news['content']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<?php include('../partials/public_footer.php'); ?>
