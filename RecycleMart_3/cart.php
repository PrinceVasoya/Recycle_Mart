<!-- connect file -->
<?php
include('admin_area/connect.php');
include('functions/common_function.php');



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- css link -->
  <link rel="stylesheet" href="styles.css" />

  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .nav1 {
      background-color: #00262d;
    }

    .navbar {
      padding: 5px 20px;
      /* Padding around the navbar */
      border-radius: 0;
      /* Remove border-radius if not needed */
    }

    .navbar-toggler-icon {
      color: #fff;
      /* Color of the toggler icon */
    }

    .navbar-nav .nav-link {
      margin-right: 10px;
      /* Spacing between nav links */
      font-size: 14px;
      /* Font size of the nav links */
      padding: 2px;
    }

    .navbar-nav .nav-link:hover {
      border-radius: 5px;
      background-color: #00a2a7;
      box-shadow: 0px 0px 7px #000;

    }

    .navbar-brand img {
      width: 50px;
      /* Adjust the width of the logo */
      margin-right: 10px;
      /* Spacing between the logo and nav links */
    }

    .form-inline .form-control {
      border-color: #fff;
      /* Border color of the search input */
      color: #fff;
      /* Text color of the search input */
    }

    .form-inline .btn {
      background-color: #00a2a7;
      /* Background color of the search button */
      border-color: #00a2a7;
      /* Border color of the search button */
      color: #fff;
      /* Text color of the search button */
    }

    .form-inline .btn:hover {
      background-color: #00dade;
      border-color: #00dade;
      color: #000;
    }


    .cart img {
      width: 30px;
      /* Adjust the width of the cart icon */
      margin-left: 15px;

    }

    .item-choose:hover {
      text-decoration: underline;
      color: black;
    }

    .item-choose:focus {
      text-decoration: underline;
      color: #00262d;
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

<body class="bg">
  <!-- first child -->

  <div class="w-full">
    <nav class="navbar nav1 navbar-expand-lg navbar-light sticky-top">
      <img src="./images/r.png" alt="" class="logo" style="height:70px; width:70px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-3 mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white  " href="index.php">
              <h5>Home </h5><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="Blog_page.php">
              <h5>Blogs</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact_us.php">
              <h5>Contact Us</h5>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="requestpage.php">
              <h5>Request</h5>
            </a>
          </li>
          <!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <h5>Login</h5>
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Admin-Login</a>
    <a class="dropdown-item" href="#">User-Login</a>
  </div>
</li> -->

          <!-- <li class="nav-item ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h5>Login</h5>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Admin-Login</a></li>
            <li><a class="dropdown-item" href="#">Use-Login</a></li>
          </ul>
        </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search_products.php" method="get">
          <input class="form-control text-dark mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
          <input type='submit' value='Search' class="  btn  btn-close-white border border-2 shadow-5  " name="search_data_product">
        </form>

        <div class="cart">
          <a href="cart.php"> <!-- Assuming cart.php is the page for viewing the shopping cart -->
            <svg style="color:aliceblue; margin:8px" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
            </svg>
          </a>
        </div>
      </div>
    </nav>
    <!--  -->
    <?php
    cart();
    ?>
    <div class="container-fluid p-3">

      <div class="container">
        <div class="row">
          <form action="" method="post">
            <table class="table table-bordere">
              <thead>
                <tr>
                  <th>product title</th>
                  <th>product image</th>
                  <th>price</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                global $con;
                $get_ip_add = getIPAddress();
                $total_price = 0;
                $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
                $result = mysqli_query($con, $cart_query);

                echo '<form method="POST" action="cart.php">';  // Open the form

                while ($row = mysqli_fetch_array($result)) {
                  $product_id = $row["product_id"];
                  $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
                  $result_products = mysqli_query($con, $select_products);

                  while ($row_product_price = mysqli_fetch_array($result_products)) {
                    $product_price = $row_product_price['product_price'];
                    $product_title = $row_product_price['product_title'];
                    $product_image1 = $row_product_price['product_image1'];
                    $total_price += $product_price;
                ?>
                    <tr>
                      <td><?php echo $product_title ?></td>
                      <td><img width="50%" src="./admin_area/product_images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
                      <td><?php echo $product_price ?></td>
                      <td><a href='buy.php?product_id=<?php echo $product_id ?>' class='button'>Buy</a></td>
                      <td>
                        <input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>">
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
                <tr>
                  <td colspan="5">
                    <input type="submit" value="Remove Selected Items" class="btn btn-danger px-3 py-2 border-0 mx-3" name="remove_cart">
                  </td>
                </tr>
          </form> <!-- Close the form -->

          </tbody>
          </table>
          </form>
        </div>
      </div>

      <!-- function to remove item  -->
      <?php
      function remove_cart_item()
      {
        global $con;
        if (isset($_POST['remove_cart'])) {
          if (isset($_POST['removeitem']) && is_array($_POST['removeitem'])) {
            foreach ($_POST['removeitem'] as $remove_id) {
              $delete_query = "DELETE FROM cart_details WHERE product_id='$remove_id'";
              $run_delete = mysqli_query($con, $delete_query);
              if ($run_delete) {
                echo "<script>window.open('cart.php', '_self')</script>";
              }
            }
          } else {
            echo "No items selected to remove.";
          }
        }
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        remove_cart_item();
      }


      echo $remove_item = remove_cart_item();
      ?>

    </div>
    <!-- last child -->
    <div class="fotter d-flex justify-content-center align-bottom m-3 text-secondary">
      <p>Designed by team RycycleMart-2023</p>
    </div>
  </div>

  <!-- bootstrape js link -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style>
    body {
      overflow-x: hidden;
    }
  </style>
</body>

</html>