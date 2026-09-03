CREATE DATABASE food_delivery;
USE food_delivery;

CREATE TABLE foods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    food_name VARCHAR(100),
    restaurant_name VARCHAR(100),
    rating DECIMAL(2,1),
    price DECIMAL(10,2),
    image VARCHAR(100)
);

INSERT INTO foods (food_name, restaurant_name, rating, price, image) VALUES
('Chicken Biryani', 'A1 Biryani House', 4.8, 180.00, 'biryani.jpg'),
('Veg Fried Rice', 'Spicy Corner', 4.2, 120.00, 'friedrice.jpg'),
('Burger', 'Food Hub', 4.5, 150.00, 'burger.jpg'),
('Pizza', 'Pizza Spot', 4.7, 250.00, 'pizza.jpg'),
('Dosa', 'South Delight', 4.1, 80.00, 'dosa.jpg'),
('Shawarma', 'Grill Zone', 4.6, 140.00, 'shawarma.jpg');
