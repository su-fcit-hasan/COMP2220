-- Create database
CREATE DATABASE IF NOT EXISTS superheros;

-- Switch to superheroes database
USE superheros;

-- Create table
CREATE TABLE IF NOT EXISTS hero (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    powers VARCHAR(100),
    image_link VARCHAR(255)
);

-- Insert sample data
INSERT INTO hero (name, powers, image_link) VALUES
('Superman', 'Flight, Super strength, Heat vision', 'https://superherodb.com/pictures2/portraits/10/100/791.jpg'),
('Spider-Man', 'Wall-crawling, Superhuman strength, Spidey sense', 'https://superherodb.com/pictures2/portraits/10/100/133.jpg'),
('Wonder Woman', 'Super strength, Flight, Invulnerability', 'https://superherodb.com/pictures2/portraits/10/100/807.jpg'),
('Batman', 'Intelligence, Martial arts, Wealth', 'https://superherodb.com/pictures2/portraits/10/100/639.jpg'),
('Captain America', 'Peak human strength, Shield proficiency', 'https://superherodb.com/pictures2/portraits/10/100/274.jpg');
