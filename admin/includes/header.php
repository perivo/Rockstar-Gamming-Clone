<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Check if user is logged in -->
                <?php if (isset($_SESSION['admin'])): ?>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_games.php">Manage Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_newswire.php">Manage Newswire</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_videos.php">Manage Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_downloads.php">Manage Downloads</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_store.php">Manage Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_support.php">Manage Support</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Main Content of Admin Panel -->
    <div class="container mt-5">
        <h2 class="text-center">Welcome to the Admin Panel</h2>
    </div>

</body>
</html>
