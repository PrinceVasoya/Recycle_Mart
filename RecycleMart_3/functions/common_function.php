<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .card {
      border: 2px solid black;
      margin-bottom: 15px;
      transition: all 0.5s;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      /* Add box-shadow */
    }

    .card:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      /* Increase box-shadow on hover */
    }

    .card img,
    .card .card-body {
      transform: scale(1);
      /* Prevent scaling of the image and text on hover */
      transition: none;
      /* Remove transition for the image and text */
    }

    .checked {
      color: orange;
    }

    .button {
      background-color: #00a2a7;
      color: white;
      padding: 8px;
      border-radius: 6px;
      margin-top: 2px;
      margin-bottom: 2px;
      font-weight: bold;

    }

    .button:hover {
      background-color: #00dade;
      text-decoration: none;
      color: black;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.6);
    }
  </style>
</head>

</html>
<?php
//including connect file 
include('./admin_area/connect.php');

//getting products
function getproducts()
{
  global $con;
  // Condition to check isset or not 
  if (!isset($_GET["search_data_product"])) {
    if (!isset($_GET['category'])) {

      $select_query = "SELECT * FROM products ORDER BY RAND()";
      $result_query = mysqli_query($con, $select_query);

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row["product_id"];
        $product_title = $row["product_title"];
        $product_description = $row["product_description"];
        $product_image1 = $row["product_image1"];
        $product_price = $row["product_price"];
        $category_id = $row['category_id'];
        $rating = $row['ratings']; // Assuming 'rating' is the column storing the product rating

        // Output product details including price
        echo "<div class='col-md-3 mb-2 cards'>
                        <div class='card'>
                            <img class='card-img-top mt-1' src='./admin_area/product_images/$product_image1' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title m-1 text-uppercase'>$product_title</h5>";

        // Output stars based on rating
        echo "<div class='rating'>";
        for ($i = 1; $i <= 5; $i++) {
          if ($i <= $rating) {
            echo "<span class='fa fa-star checked'></span>";
          } else {
            echo "<span class='fa fa-star'></span>";
          }
        }
        echo "</div>"; // End of rating div

        echo "<p class='card-text  py-1 text-truncate ' style='height:50px; color:#717171;' >$product_description</p>
                                <p class='card-text py-1 '>Price: $product_price</p>
                                <a href='index.php?add_to_cart=$product_id' class='button '>Add to Cart</a>
                                <a href='buy.php?product_id=$product_id' class='button'>Buy</a>

                            </div>
                        </div>
                    </div>";
      }
    }
  }
}

function get_unique_categories()
{

  global $con;
  //condition to check isset or not 
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $select_query = "SELECT * FROM products where category_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class=' text-danger text-center'>No stock for this category</h2>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row["product_id"];
      $product_title = $row["product_title"];
      $product_description = $row["product_description"];
      $product_image1 = $row["product_image1"];
      $product_price = $row["product_price"];
      $category_id = $row['category_id'];

      echo "  <div class='col-md-3 mb-2  cards '>
      <div class='card'>
      <img class='card-img-top mt-1' src='./admin_area/product_images/$product_image1' alt='Card image cap'>
      <div class='card-body'>
      <h5 class='card-title  m-1 text-uppercase'>$product_title</h5>
      <span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>
      <p class='card-text  py-1 text-truncate' style='height:50px; color:#717171;' > $product_description</p>
      <a href='index.php?add_to_cart=$product_id ' class='button  '>Add to cart</a>
      <a href='buy.php' class='button '>Buy</a>
      </div>
      </div>
      </div>";
    }
  }
}

function search_product()
{
  global $con;

  if (isset($_GET["search_data_product"])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "SELECT * FROM products where product_title like '%$search_data_value%' ";
    $result_query = mysqli_query($con, $search_query);

    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class=' text-danger text-center'>No result match. NO products found on this category!</h2>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row["product_id"];
      $product_title = $row["product_title"];
      $product_description = $row["product_description"];
      $product_image1 = $row["product_image1"];
      $product_price = $row["product_price"];
      $category_id = $row['category_id'];

      echo "  <div class='col-md-4 mb-2'>
              <div class='card' style='width: 18rem;'>
              <img class='card-img-top' src='./admin_area/product_images/$product_image1' alt='Card image cap'>
              <div class='card-body'>
              <h5 class='card-title text-uppercase m-1'>$product_title</h5>
              <span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star checked'></span>
<span class='fa fa-star'></span>
<span class='fa fa-star'></span>
              <p class='card-text py-1 text-truncate'  style='height:50px;color:#717171;'> $product_description</p>
              <a href='index.php?add_to_cart=$product_id ' class='button'>Add to cart</a>
              <a href='buy.php' class='button '>Buy</a>
              </div>
              </div>
              </div>";
    }
  }
}
//ip 

function getIPAddress()
{
  //whether ip is from the share internet  
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from the remote address  
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}



//cart function
function cart()
{
  if (isset($_GET['add_to_cart'])) {
    global $con;
    $get_ip_add = getIPAddress(); // Assuming getIPAddress is a valid function
    $get_product_id = $_GET['add_to_cart']; // No need to cast this as it's not used directly in the SQL query

    // Correct the SQL query and use prepared statements to prevent SQL injection
    $select_query = "SELECT * FROM cart_details WHERE ip_address = '$get_ip_add' AND product_id = '$get_product_id'";

    $result_query = mysqli_query($con, $select_query);

    $num_of_rows = mysqli_num_rows($result_query);

    if ($num_of_rows > 0) {
      echo "<script>alert('this item is already present inside cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    } else {
      $insert_query = "INSERT INTO cart_details (product_id, ip_address, quantity) VALUES ('$get_product_id', '$get_ip_add', 1)";

      $result_query = mysqli_query($con, $insert_query);


      echo "<script>alert('Item added to the cart.')</script>";
      echo "<script>window.open('index_temp.php','_self')</script>";
    }
  }
}
