# FoodieHub - Food Delivery Rating Sorting System

A simple **Food Delivery web application** built using **PHP, MySQL, HTML, and CSS**.

The project displays food items from a MySQL database and allows users to sort them based on customer ratings.

## Features

* Displays food items dynamically from MySQL
* Sort food items by **Highest Rated**
* Sort food items by **Lowest Rated**
* Shows food name, restaurant name, rating, price, and image
* Responsive food card layout
* Hero section with search UI
* Popular food statistics section
* Simple and attractive food-delivery interface

## Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* XAMPP / Apache

## Project Structure


food_delivery/
├── index.php
├── db.php
├── style.css
└── images/
    ├── biryani.jpg
    ├── burger.jpg
    ├── dosa.jpg
    ├── friedrice.jpg
    ├── pizza.jpg
    └── shawarma.jpg

## Main Files

### index.php

The main page of the application.

It:

* Connects to the database through `db.php`
* Retrieves food items from the `foods` table
* Sorts foods by rating
* Displays food cards dynamically
* Provides Highest Rated and Lowest Rated sorting options

### db.php

Contains the MySQL database connection.

```php
$conn = new mysqli("localhost", "root", "", "food_delivery");
```

### style.css

Contains the styling for:

* Navigation bar
* Hero section
* Search box
* Statistics section
* Sorting buttons
* Food cards
* Footer
* Responsive layout

## Database Setup

Create a database named:

```sql
CREATE DATABASE food_delivery;
```

Select the database:

```sql
USE food_delivery;
```

Create the `foods` table:

```sql
CREATE TABLE foods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    food_name VARCHAR(100) NOT NULL,
    restaurant_name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    rating DECIMAL(2,1) NOT NULL,
    image VARCHAR(255) NOT NULL
);
```

## Sample Data

```sql
INSERT INTO foods
(food_name, restaurant_name, price, rating, image)
VALUES
('Chicken Biryani', 'Biryani House', 250, 4.8, 'biryani.jpg'),
('Burger', 'Burger Point', 150, 4.3, 'burger.jpg'),
('Dosa', 'South Indian Kitchen', 80, 4.5, 'dosa.jpg'),
('Fried Rice', 'Chinese Corner', 180, 4.2, 'friedrice.jpg'),
('Pizza', 'Pizza Hub', 299, 4.7, 'pizza.jpg'),
('Shawarma', 'Arabian Grill', 140, 4.6, 'shawarma.jpg');
```

## Installation

1. Install **XAMPP**.
2. Copy the `food_delivery` folder into the XAMPP `htdocs` directory.
3. Start **Apache** and **MySQL** from XAMPP.
4. Open **phpMyAdmin**.
5. Create the `food_delivery` database.
6. Create the `foods` table.
7. Insert the required food records.
8. Make sure the image filenames in the database match the files inside the `images` folder.

## Run the Project

Open your browser and visit:

```text
http://localhost/food_delivery/
```

## Sorting Function

By default, food items are displayed from highest rating to lowest rating.

```php
$order = "DESC";
```

When the user selects **Lowest Rated**, the order changes to:

```php
$order = "ASC";
```

The SQL query used is:

php
$sql = "SELECT * FROM foods ORDER BY rating $order";


## Application Workflow


Open FoodieHub
      ↓
Load food items from MySQL
      ↓
Display food cards
      ↓
Select sorting option
      ↓
Highest Rated / Lowest Rated
      ↓
Display sorted food items


## Future Enhancements

* Functional food search
* Add to cart
* Place order system
* User login and registration
* Restaurant filtering
* Food category filtering
* Admin dashboard
* Online payment integration
* Order history
* Delivery tracking

## Project Objective

The objective of this project is to demonstrate how **PHP and MySQL** can be used to retrieve, display, and sort food-delivery data dynamically in a web application.

## License

This project is intended for **educational and academic purposes**.
