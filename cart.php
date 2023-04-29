<?php
    include 'connection.php';

  session_start();
  $id = $_GET['id'];

  // Check if the product ID is valid
  // ...

  // Get the product details from the database
  $sql = "SELECT * FROM products WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $product = mysqli_fetch_assoc($result);

  // Add the product to the cart
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }
  array_push($_SESSION['cart'], $product);

  // Redirect the user to the gift registry page
  header('Location: gift-registry.php');
?>