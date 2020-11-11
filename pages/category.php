<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Category</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div>
        <ul class="navList">
            <li class="navListItem"><a class="navListItemAnchor" href="#">Home</a></li>
            <li class="navListItem"><a class="navListItemAnchor" href="product.php">Product List</a></li>
            <li class="navListItem"><a class="navListItemAnchor" href="category.php">Product Categories</a></li>
        </ul>
    </div>
    <!-- End of Navigation Bar -->

    <!-- Action section -->
    <div class="actionArea">
        <h2>Products Cateogries</h2>
        <a class="btn btn-primary" href="createCategory.php">Create New</a>
    </div>
    <!-- End of Action section -->

    <!-- Card Section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../images/phones.jpg" height="250px" class="card-img-top" alt="Mobile Phones Images">
                    <div class="card-body">
                        <h5 class="card-title">Phones</h5>
                        <p class="card-text">Explore our new iPhone 12 Pro with the latest features and colors. Different colors are available ... </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../images/laptops.jpg" height="250px" class="card-img-top" alt="Mobile Phones Images">
                    <div class="card-body">
                        <h5 class="card-title">Laptops</h5>
                        <p class="card-text">Explore our new HP Laptop with the latest features and colors. High Performance and super powerful ... </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../images/tvs.jpg" height="250px" class="card-img-top" alt="Mobile Phones Images">
                    <div class="card-body">
                        <h5 class="card-title">Phones</h5>
                        <p class="card-text">Explore our new iPhone 12 Pro with the latest features and colors. Different colors are available ... </p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Section -->
</body>
</html>