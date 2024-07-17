<?php
// Include the connection file
include('admin_area/connect.php');

if (isset($_POST['insert_product'])) {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $publisher = $_POST['publisher'];
    $date = $_POST['date'];
    $contact_no = $_POST['contact_no'];

    // Accessing images (make sure to handle file uploads appropriately)
    $product_image1 = $_FILES['image']['name'];
    $temp_image1 = $_FILES['image']['tmp_name'];

    // Check if all fields are filled
    if ($title == '' || $description == '' || $publisher == '' || $date == '' || $product_image1 == '' || $contact_no == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
    } else {
        // Move uploaded image to destination folder
        move_uploaded_file($temp_image1, "./admin_area/product_images/$product_image1");

        // Prepare and execute the insert query
        $insert_products = "INSERT INTO blogs (title, description, image, publisher, date, contact_no) 
                            VALUES ('$title', '$description', '$product_image1', '$publisher', '$date', '$contact_no')";
        $result_query = mysqli_query($con, $insert_products);

        if ($result_query) {
            echo "<script>alert('Successfully inserted product')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            echo "<script>alert('Error inserting product')</script>";
        }
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
            background-color: #00262d;
            width: 50%;
            box-shadow: 0px 0px 7px #000;
            border-radius: 8px;
        }

        .form-lable {
            color: white;
        }

        .form-control {
            background-color: #d8d8d8;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container p-4 my-4">
        <h1 class="text-center text-white"> Insert Blog</h1>
        <!-- starting of form     -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- FOR TITLE -->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_title" class="form-lable"> Blog title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Blog title" autocomplete="off" required="required">
            </div>
            <br>
            <!-- FOR DESCRIPTION -->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_description" class="form-lable"> Blog description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Blog description" autocomplete="off" required="required">
            </div><br>


            <!--FOR  IMAGE-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_image" class="form-lable"> Product image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Enter product image" autocomplete="off" required="required">
            </div><br>



            <!-- FOR PublishedBy-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_price" class="form-lable">Published by</label>
                <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Enter name" autocomplete="off" required="required">
            </div><br>

            <!-- FOR Published Date-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_price" class="form-lable"> Published Date</label>
                <input type="date" name="date" id="date" class="form-control" placeholder="Enter date" autocomplete="off" required="required">
            </div><br>

            <!-- FOR contact number-->
            <div class="form-outline mb-4  m-auto">
                <label for="produc_price" class="form-lable"> Contact No.</label>
                <input type="text" name="contact_no" id="contact_no" class="form-control" placeholder="Enter your contact number" autocomplete="off" required="required">
            </div><br>

            <!-- FOR BUTTON-->
            <div class="form-outline mb-4 d-flex justify-content-center m-auto">
                <INPUT type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Blog">
            </div>
        </form>
    </div>

</body>

</html>