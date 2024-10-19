<?php include('../Partials/public_header.php'); ?>

<div class="hero-banner">
    <h1>Welcome to Rockstar Clone</h1>
</div>

<section class="container mt-5">
    <h2 class="section-title">Featured Games</h2>
    <div class="row">
        <?php
        include('../db/db.php');
        $games = $conn->query("SELECT * FROM games ORDER BY release_date DESC LIMIT 4");

        while ($game = $games->fetch_assoc()) {
            echo '
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="' . $game['image_url'] . '" alt="' . $game['title'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $game['title'] . '</h5>
                        <p class="card-text">' . substr($game['description'], 0, 100) . '...</p>
                        <a href="game_details.php?id=' . $game['id'] . '" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</section>

<?php include('../Partials/public_footer.php'); ?>
