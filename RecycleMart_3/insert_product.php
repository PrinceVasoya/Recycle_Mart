<?php
// Include the connection file
include('admin_area/connect.php');

if (isset($_POST['insert_product'])) {
    // Get form data
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_contact = $_POST['product_contact'];
    $product_address = $_POST['product_address'];
    $product_status = 'true';

    // Accessing images (make sure to handle file uploads appropriately)
    $product_image1 = $_FILES['product_image']['name'];

    $temp_image1 = $_FILES['product_image']['tmp_name'];

    if ($product_title == '' or $product_description == '' or $product_price == '' or $product_category == '' or $product_image1 == '') {
        echo "<script>alert('please fill all the availabel fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./admin_area/product_images/$product_image1");
    }

    //insert query
    $insert_products = "insert into products (product_title,product_description,category_id,product_image1,product_price,contact_no,location,date,status) values ('$product_title','$product_description','$product_category','$product_image1','$product_price','$product_contact','$product_address',NOW(),'$product_status')";
    $result_query = mysqli_query($con, $insert_products);
    if ($result_query) {
        echo "<script>alert('Successfully inserted products')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container {
            width: 50%;
            top: 20px;
            background-color: #00262d;
            box-shadow: 3px 4px 13px rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .form-control {
            background-color: #d8d8d8;
        }
    </style>
</head>

<body class=" bg-light  mx-auto m-3">
    <div class="container mt-4 p-4  ">
        <h1 class="text-center text-white"> Insert Product</h1>
        <!-- starting of form     -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- FOR TITLE -->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_title" class="form-lable text-white"> Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <br>
            <!-- FOR DESCRIPTION -->
            <div class="form-outline mb-4 m-auto">
                <label for="produc_description" class="form-lable text-white"> Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div><br>

            <!-- FOR CATEGORIES -->
            <div class="form-outline mb-4  m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a category</option>
                    <?php
                    $select_query = "SELECT * FROM categories";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
            </div><br>

            <!--FOR  IMAGE-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_image" class="form-lable text-white"> Product image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Enter product image" autocomplete="off" required="required">
            </div><br>

            <!-- FOR PRICE-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_price" class="form-lable text-white"> Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div><br>

            <!-- FOR CONTACT-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_contact" class="form-lable text-white"> Contact No</label>
                <input type="text" name="product_contact" id="product_contact" class="form-control" placeholder="Enter Contact No" autocomplete="off" required="required">
            </div><br>

            <!-- FOR ADDRESS-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_address" class="form-lable text-white"> Address</label>
                <input type="text" name="product_address" id="product_address" class="form-control" placeholder="Enter Address" autocomplete="off" required="required">
            </div><br>

            <!-- FOR BUTTON-->
            <div class="form-outline d-flex justify-content-center mb-4  m-auto">
                <input type="submit" name="insert_product" class="btn-info btn " value="Insert Products">
            </div>
        </form>
    </div>

</body>

</html>