<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JackNest Collection - Home of Goods</title>

  <!-- 
    bootstrap for the links in the header
   -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="try.css">
  <link rel="stylesheet" href="search.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="try.html" class="logo">
        <img src="./assets/images/jacknest.png" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      
      <div class="search-container">
        <form action="search.php" method="get">
          <input type="text" placeholder="Search for Products" name="query">
          <button type="submit">Search</button>
        </form>
      </div>
      
      
      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="try.html" class="logo">
          <img src="./assets/images/jacknest.png" width="190" height="50" alt="Footcap logo">
        </a>

        

       <ul class="navbar-list"> 

          <li class="navbar-item">
            <a href="try1.php" class="navbar-link">Home</a>
          </li>

          <li class="dropdown">
            <p class="dropdown-p">Product</p>
            <div class="dropdown-content">
              <a href="clothing.php">Clothing</a>
              <a href="electronic.php">Electronics</a>
              <a href="summershoe.php">Summer Shoes</a>
            </div>
          </li>

          <li class="navbar-item">
            <a href="gift-registry.php" class="navbar-link">Gift Registry</a>
          </li>

          <li class="dropdown">
            <p class="dropdown-p">Account</p>
            <div class="dropdown-content">
              <a href="login.php">Login</a>
              <a href="register.php">Register</a>
            </div>
          </li>

        </ul>

      </nav>

    </div>
  </header>
    <section class="section product">
        <div class="container">

          <ul class="product-list">
            <?php
                // Retrieve the search query from the URL parameter
                $query = $_GET['query'];

                // Sanitize and validate the search query
                $query = filter_var($query, FILTER_SANITIZE_STRING);
                if (!$query) {
                die("Invalid search query");
                }

                include 'connection.php';

                // Query the database for items that match the search query
                $sql = "SELECT * FROM products WHERE name LIKE '%$query%' OR category LIKE '%$query%'
                UNION
                SELECT * FROM special WHERE name LIKE '%$query%' OR category LIKE '%$query%'";
                $result = mysqli_query($conn, $sql);

                // Display the search results
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li class="product-item">';
                    echo '<div class="product-card" tabindex="0">';
                    echo '<figure class="card-banner">';
                    echo '<img src="' . $row['image'] . '" width="312" height="350" loading="lazy" alt="' . $row['name'] . '" class="image-contain">';
                    echo '<div class="card-badge">New</div>';
                    echo '</figure>';
                    echo '<div class="card-content">';
                    echo '<div class="card-cat">';
                    echo '<a href="#" class="card-cat-link">'.$row["category"].'</a>';
                    echo '</div>';
                    echo '<h3 class="h3 card-title">';
                    echo '<a href="#">'.$row["name"].'</a>';
                    echo '</h3>';
                    echo '<data class="card-price" value="'.$row["price"].'">$'.$row["price"].'</data>';
                    echo '<a href="cart.php?id='.$row["id"].'">';
                    echo '<button class="cart-btn">Add to Cart</button>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                } else {
                echo "No items found";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
        </ul>
    </div>
</section>