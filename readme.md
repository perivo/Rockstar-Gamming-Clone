# Rockstar Clone

## Overview

**Rockstar Clone** is a web application designed to replicate the user interface and experience of Rockstar Games' official website. This clone features sections for games, news, videos, store items, downloads, and support. Users can search games, view details, watch related videos, and explore downloadable content. Admins have access to manage these sections efficiently through the backend.

The project is built using **PHP**, **MySQL**, and **Bootstrap** for the front-end design. It also integrates security features like password encryption for user authentication.

## Features

- **Search Functionality**: Allows users to search for games by title.
- **Game Library**: View a collection of games with images, descriptions, and release dates.
- **News Section**: Stay updated with the latest news in Rockstar gaming.
- **Video Section**: Watch promotional and gameplay videos.
- **Downloads**: Access game setups and patches.
- **Store**: Purchase Rockstar Games through an integrated store section.
- **Support**: Access FAQs and customer support information.

## Project Structure

```plaintext
rockstar-clone/
│
├── public/                 # Publicly accessible files (index, game details, etc.)
│   ├── assets/             # Static assets (CSS, JS, images)
│   ├── css/                # CSS styles
│   ├── js/                 # JavaScript files
│   ├── images/             # Images for games, store items, etc.
│   ├── index.php           # Home page of the site
│   ├── search.php          # Search functionality
│   ├── game_details.php    # Individual game details page
│   └── support.php         # Support page
│
├── db/                     # Database connection and setup
│   └── db.php              # Database connection configuration
│
├── admin/                  # Admin panel for game and content management
│   ├── dashboard.php       # Admin dashboard
│   ├── manage_games.php    # Manage games (add/edit/delete)
│   └── manage_store.php    # Manage store (add/edit/delete)
│
├── partials/               # Header and Footer includes
│   ├── public_header.php    # Public header for all pages
│   └── public_footer.php    # Footer for all pages
│
├── assets/                 # Additional assets like fonts, icons
│
├── .gitignore              # Ignore files and folders for Git
├── README.md               # Project documentation (this file)
└── composer.json           # Composer dependencies (if applicable)
```

## Setup Instructions

### Prerequisites

- **PHP 7.4+** or newer
- **MySQL 5.7+** or newer
- **Composer** (Optional, for dependency management)
- A local development environment such as **XAMPP** or **MAMP** for running PHP and MySQL together

### 1. Clone the Repository

```bash
git clone https://github.com/perivo/rockstar-clone.git
```

### 2. Setup the Database

1. Navigate to your MySQL client (e.g., **phpMyAdmin**) and create a new database:

    ```sql
    CREATE DATABASE rockstar_clone;
    ```

2. Run the SQL script provided in the project to create tables:

    ```sql
    -- Copy the schema from the schema.sql file and execute it in your MySQL client
    SOURCE path/to/schema.sql;
    ```

### 3. Configure Database Connection

Open the `db/db.php` file and configure your MySQL connection parameters:

```php
<?php
$servername = "localhost";
$username = "root";         // MySQL username
$password = "";             // MySQL password (usually empty for XAMPP)
$database = "rockstar_clone";  // The database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### 4. Start the Web Server

You can use **XAMPP** or **MAMP** to start Apache and MySQL services.

### 5. Visit the Application

Once your server is running, navigate to `http://localhost/rockstar-clone/public/` in your web browser to view the site.

### 6. Admin Access (Optional)

You can access the admin panel at `http://localhost/rockstar-clone/admin/` to manage games, store items, and other content. The admin login credentials are:

- **Username**: `admin`
- **Password**: `admin123` (You can change this in the database under the `users` table)

### 7. Adding New Data

You can add new games, videos, news, and store items by visiting the corresponding sections in the admin panel. Alternatively, you can insert data directly into the database via SQL.

## Authors

- **Ivo Pereira**  
  [GitHub Profile](https://github.com/perivo)  
  Email: [ivopereiraix3@gmail.com](mailto:ivopereiraix3@gmail.com)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
"# Rockstar-Gamming-Clone" 
