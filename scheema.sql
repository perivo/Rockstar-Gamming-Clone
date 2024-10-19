-- Create Database
CREATE DATABASE rockstar_clone;

-- Use the created database
USE rockstar_clone;

-- Create 'games' Table
CREATE TABLE games (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    release_date DATE NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create 'videos' Table
CREATE TABLE videos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    video_url VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create 'newswire' Table
CREATE TABLE newswire (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image_url VARCHAR(255),
    published_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create 'users' Table
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create 'downloads' Table
CREATE TABLE downloads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Initial Data into 'downloads'
INSERT INTO downloads (name, url) VALUES 
('Game Setup', 'https://example.com/downloads/game_setup.exe'),
('Patch 1.2', 'https://example.com/downloads/patch_1.2.zip');

-- Create 'store' Table (For Rockstar Store items)
CREATE TABLE store (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Initial Data into 'store'
INSERT INTO store (name, image, price, description) VALUES 
('GTA V', 'https://example.com/images/gta_v.jpg', 59.99, 'Grand Theft Auto V - Action/Adventure'),
('Red Dead Redemption 2', 'https://example.com/images/red_dead_redemption_2.jpg', 49.99, 'Red Dead Redemption 2 - Open World'),
('L.A. Noire', 'https://example.com/images/la_noire.jpg', 29.99, 'L.A. Noire - Detective Mystery Game');

-- Insert Initial Data into 'games'
INSERT INTO games (title, description, release_date, image_url) VALUES 
('Grand Theft Auto V', 'Open-world action-adventure game set in the fictional state of San Andreas', '2013-09-17', 'https://example.com/images/gta_v.jpg'),
('Red Dead Redemption 2', 'Open-world action-adventure game set in the late 1800s in the American Wild West', '2018-10-26', 'https://example.com/images/red_dead_redemption_2.jpg'),
('L.A. Noire', 'Detective action-adventure game set in post-World War II Los Angeles', '2011-05-17', 'https://example.com/images/la_noire.jpg');

-- Create 'support' Table
CREATE TABLE support (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Initial Data into 'support'
INSERT INTO support (title, content) VALUES
('How to Reset Password', 'To reset your password, go to settings and click on Reset Password.'),
('How to Contact Support', 'You can contact support by emailing support@rockstarclone.com');

-- Create 'store' Table for downloadable items (optional, already created above)
-- You can use the 'downloads' table for direct downloads
