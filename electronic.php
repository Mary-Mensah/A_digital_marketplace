<?php
include 'connection.php';
?>

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
    <link rel="preload" href="hero-banner.png" as="image">

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

            <nav class="navbar" data-navbar>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
            </button>

            <a href="#" class="logo">
            <img src="/./assets/images/jacknest.png" width="190" height="50" alt="Footcap logo">
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
                <a href="#" class="navbar-link">Gift Registry</a>
            </li>

            <li class="dropdown">
                <p class="dropdown-p">Account</p>
                <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Register</a>
                </div>
            </li>

            </ul>
            </nav>

            </div>
        </header>

        <!-- 
    - #HERO
    -->
        <section class="section hero" style="background-image: url('./assets/images/Electronics/electro-banner.jpg')">
            <div class="container">

            <h2 class="h1 hero-title">
                <strong>TECHNOLOGY FOR YOUR CONVENIENCE</strong>
            </h2>

            <p class="hero-text">
                The Home of Durable and Long Lasting Electronics From 
                All Part of the World. Kindly Browse through and get yourself an Appliance for your loved one as a gift.
            </p>

            <button class="btn btn-primary">
                <span>Shop Now</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>

            </div>
        </section>

        <!-- 
    - #SPECIAL
    -->

        <section class="section special">
          <div class="container">
            <div class="special-product">

              <h2 class="h2 section-title">
                <span class="text">ELECTRONICS</span>

                <span class="line"></span>
              </h2>

              <ul class="product-list">
                <?php
                  // Query the products table
                  $sql1 = "SELECT * FROM electronics";
                  $result = mysqli_query($conn, $sql1);

                  // Loop through the results and display each product
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<li class="product-item">';
                      echo '<div class="product-card" tabindex="0">';
                      echo '<figure class="card-banner">';
                      echo '<img src="' . $row['image'] . '" width="312" height="350" loading="lazy" alt="' . $row['name'] . '" class="image-contain">';
                      echo '</figure>';
                      echo '<div class="card-content">';
                      echo '<div class="card-cat">';
                      echo '<a href="#" class="card-cat-link">'.$row["category"].'</a>';
                      echo '</div>';
                      echo '<data class="card-price" value="code">'.$row["code"].'</data';
                      echo '<h3 class="h3 card-title">';
                      echo '<a href="#">'.$row["name"].'</a>';
                      echo '</h3>';
                      echo '<p class="hero-text">'.$row["description"].'</p>';
                      echo '<h3 class="h3 card-title">'.$row["weight"].'</h3>';
                      echo '<data class="card-price" value="'.$row["price"].'">$'.$row["price"].'</data>';
                      echo '<a href="cart.php?id='.$row["id"].'">';
                      echo '<button class="cart-btn">Add to Cart</button>';
                      echo '</a>';
                      echo '</div>';
                      echo '</div>';
                      echo '</li>';
                    }
                  } else {
                    echo "No products found.";
                  }

                  // // Close the database connection
                  // mysqli_close($conn);
                ?>
              </ul>
            </div>
          </div>
        </section>
 
        <!-- 
    - #FOOTER
    -->

    <footer class="footer">

      <div class="footer-top section">
        <div class="container">

          <div class="footer-brand">

            <a href="#" class="logo">
              <img src="./assets/images/logo.png" width="160" height="50" alt="Footcap logo">
            </a>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

            </ul>

          </div>

          <div class="footer-link-box">

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Contact Us</p>
              </li>

              <li>
                <address class="footer-link">
                  <ion-icon name="location"></ion-icon>

                  <span class="footer-link-text">
                    3478 Eusbeth Hotel Rd, Sunyani, Bono Region, GHANA
                  </span>
                </address>
              </li>

              <li>
                <a href="tel:+557343673257" class="footer-link">
                  <ion-icon name="call"></ion-icon>

                  <span class="footer-link-text">+233593255770</span>
                </a>
              </li>

              <li>
                <a href="mailto:footcap@help.com" class="footer-link">
                  <ion-icon name="mail"></ion-icon>

                  <span class="footer-link-text">jacknestcollection.com</span>
                </a>
              </li>

            </ul>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">My Account</p>
              </li>

              <li>
                <a href="#" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>

                  <span class="footer-link-text">My Account</span>
                </a>
              </li>

              <li>
                <a href="gift.html" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>

                  <span class="footer-link-text">Gift Registry</span>
                </a>
              </li>

              <li>
                <a href="electronic.php" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>

                  <span class="footer-link-text">Electronics</span>
                </a>
              </li>

              <li>
                <a href="clothing.php" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>

                  <span class="footer-link-text">Clothes</span>
                </a>
              </li>

              <li>
                <a href="summershoe.php" class="footer-link">
                  <ion-icon name="chevron-forward-outline"></ion-icon>

                  <span class="footer-link-text">Summer Shoes</span>
                </a>
              </li>

            </ul>

            <div class="footer-list">

              <p class="footer-list-title">Opening Time</p>

              <table class="footer-table">
                <tbody>

                  <tr class="table-row">
                    <th class="table-head" scope="row">Mon - Tue:</th>

                    <td class="table-data">8AM - 10PM</td>
                  </tr>

                  <tr class="table-row">
                    <th class="table-head" scope="row">Wed:</th>

                    <td class="table-data">8AM - 7PM</td>
                  </tr>

                  <tr class="table-row">
                    <th class="table-head" scope="row">Fri:</th>

                    <td class="table-data">7AM - 12PM</td>
                  </tr>

                  <tr class="table-row">
                    <th class="table-head" scope="row">Sat:</th>

                    <td class="table-data">9AM - 8PM</td>
                  </tr>

                  <tr class="table-row">
                    <th class="table-head" scope="row">Sun:</th>

                    <td class="table-data">Closed</td>
                  </tr>

                </tbody>
              </table>

            </div>

            <div class="footer-list">

              <p class="footer-list-title">About US</p>

              <p class="newsletter-text">
                JackNest collection is one of the best shopping platform in the world right now. We deal in only three categories of product, which are; Electronic, clothes and Summer shoes.
              </p>

              <form action="" class="newsletter-form">
                <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>

            </div>

          </div>

        </div>
      </div>


      <div class="footer-bottom">
        <div class="container">

          <p class="copyright">
            &copy; 2023 <a href="#" class="copyright-link">JackNestCollection</a>. All Rights Reserved
          </p>

        </div>
      </div>

    </footer>

    <!-- 
    - #GO TO TOP
    -->

    <a href="#top" class="go-top-btn" data-go-top>
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>

    <!-- 
    - custom js link
    -->
    <script src="./assets/js/script.js"></script>

    <!-- 
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>

</html>