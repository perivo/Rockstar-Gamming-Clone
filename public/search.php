<?php
include('../db/db.php');
include('../partials/public_header.php');

// Initialize $search_query as an empty string
$search_query = '';

// Check if the search query is set in the URL
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $search_query = $_GET['q'];
    $sql = "SELECT * FROM games WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_query_param = "%" . $search_query . "%";  // For SQL LIKE query
    $stmt->bind_param('s', $search_query_param);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no search query, get all games
    $sql = "SELECT * FROM games";
    $result = $conn->query($sql);
}
?>

<div class="container mt-5">
    <!-- Search Bar -->
    <form class="d-flex mb-4" action="search.php" method="get">
        <input class="form-control me-2" type="search" name="q" placeholder="Search games..." value="<?php echo htmlspecialchars($search_query); ?>" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <h2>Games</h2>
    
    <!-- Check if there are results and display them -->
    <?php if (isset($result) && $result->num_rows > 0) { ?>
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
    <?php } else { ?>
        <p>No results found for '<?php echo htmlspecialchars($search_query); ?>'.</p>
    <?php } ?>
</div>

<?php include('../partials/public_footer.php'); ?>
