<?php
include("db.php");

$order = "DESC";

if (isset($_GET['sort']) && $_GET['sort'] == "asc") {
    $order = "ASC";
}

$sql = "SELECT * FROM foods ORDER BY rating $order";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>FoodieHub - Food Delivery</title>
    <link rel="stylesheet" href="style.css?v=10">
</head>
<body>

<header class="navbar">
    <div class="logo"></div>

    <nav>
        <a href="#">Home</a>
        <a href="#foods">Foods</a>
        <a href="#">Restaurants</a>
        <a href="#">Offers</a>
    </nav>

    <a href="#foods" class="nav-btn">Order Now</a>
</header>

<section class="hero">
    <div class="hero-content">
        <p class="tagline">Fast Delivery • Fresh Food • Best Ratings</p>
        <h1>Discover the best food near you</h1>
        <p class="hero-text">
            Choose your favourite food and sort items based on customer ratings.
        </p>

        <div class="search-box">
            <input type="text" placeholder="Search for biryani, pizza, burger...">
            <button>Search</button>
        </div>
    </div>
</section>

<section class="stats">
    <div>
        <h2>500+</h2>
        <p>Food Orders</p>
    </div>
    <div>
        <h2>50+</h2>
        <p>Restaurants</p>
    </div>
    <div>
        <h2>4.8★</h2>
        <p>Top Rating</p>
    </div>
</section>

<section class="section-title" id="foods">
    <p>Popular Menu</p>
    <h2>Sort Food Items By Rating</h2>

    <div class="sort-buttons">
        <a href="index.php?sort=desc">Highest Rated</a>
        <a href="index.php?sort=asc">Lowest Rated</a>
    </div>
</section>

<section class="food-grid">

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <div class="food-card">
        <div class="image-box">
            <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['food_name']; ?>">
            <span class="badge">Popular</span>
        </div>

        <div class="card-content">
            <div class="card-title">
                <h3><?php echo $row['food_name']; ?></h3>
                <span class="rating">★ <?php echo $row['rating']; ?></span>
            </div>

            <p class="restaurant"><?php echo $row['restaurant_name']; ?></p>

            <div class="card-bottom">
                <h4>₹<?php echo $row['price']; ?></h4>
                <button>Add Order</button>
            </div>
        </div>
    </div>
<?php
    }
} else {
    echo "<p>No food items found</p>";
}
?>

</section>

<footer>
    <h3>Foodie Hub</h3>
    <p>Food Delivery Rating Sorting System using PHP and MySQL</p>
</footer>

</body>
</html>