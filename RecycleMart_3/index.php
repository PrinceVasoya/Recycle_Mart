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
                        <a class="nav-link text-white  " href="index_temp.php">
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

                <div>
                    <a href="login_re_prince/user_login.php"><button class="btn btn-info mx-3">Login</button></a>
                </div>



            </div>
        </nav>
        <!--  -->
        <!-- <?php
                // cart();


                ?> -->



        <!-- second child -->
        <!-- <div class="bg-secondary text-light text-center"> -->
        <!-- <h4>store</h4> -->
        <!-- <p>Recycle to Reimagine: Turning Trash into Treasure!</p> -->
        <!-- <button href="" type="button" class="btn btn-primary"> <a href="insert_product.php" class="link-danger">Login</a></button> -->
        <!-- </div> -->


        <div class="pt-1 bg-secondary  rounded-4 d-flex  ">
            <ul class="gap-3 list-unstyled d-flex flex-grow-1 ">
                <li class="nav-item ">
                    <a href="#" class="nav-link text-light ">

                        <h4>Categories</h4>

                    </a>
                </li>



                <?php
                $Select_categories = "SELECT * FROM categories";
                $result_categories = mysqli_query($con, $Select_categories);
                while ($row_data = mysqli_fetch_assoc($result_categories)) {
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_id'];
                    echo "<li class='nav-item p-1'>
    <a href='index.php?category=$category_id' class='item-choose nav-link text-light '>$category_title</a></li>";
                }
                ?>
                <button href="" type="button" class="btn btn-dark"> <a href="insert_product.php" class="link-danger px-">Sell</a></button>
            </ul>

            <!-- <div >
      
      </div> -->


        </div>

    </div>

    <!-- third child -->
    <div class="row p-5 bg">
        <div class="col-md-12">
            <!-- products -->
            <div class="row">
                <!-- fetching products -->

                <?php
                getproducts();
                get_unique_categories();
                // $ip = getIPAddress();
                // echo 'User Real IP Address - ' . $ip;
                ?>




            </div>

        </div>

    </div>

    <!-- last child -->
    <div class="bg-light text-center mb- ms-5 p-3 ">
        <p>Designed by team RycycleMart-2023</p>
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