<?php
// Include the connection file
include('admin_area/connect.php');

if (isset($_POST['insert_product'])) {
    // Get form data
    $name = $_POST['title']; // Changed from $_POST['name'] to $_POST['title']
    $description = $_POST['description'];
    $date = $_POST['date'];
    $contact_no = $_POST['contact_no'];

    // Check if all fields are filled
    if ($name == '' || $description == '' || $date == '' || $contact_no == '') {
        echo "<script>alert('Please fill all the available fields')</script>";
    } else {
        // Prepare and execute the insert query
        $insert_request = "INSERT INTO requests (name, description, date, contact_no) 
                            VALUES ('$name', '$description','$date', '$contact_no')";
        $result_query = mysqli_query($con, $insert_request);

        if ($result_query) {
            echo "<script>alert('Successfully inserted request')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            echo "<script>alert('Error inserting request')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Request</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .container{
                background-color:  #00262d;
                width: 40%;
                box-shadow: 0px 0px 7px #000;
                border-radius: 8px;
            }
            .form-lable{
                color: white;
            }
            .form-control{
                background-color: #d8d8d8;
            }
            </style>
</head>

<body class="bg-light">
    <div class="container  p-4  mt-4">
        <h1 class="text-center text-white m-3">Make a Request</h1>
        <!-- starting of form -->
        <form action="" method="post" enctype="multipart/form-data">

            <!-- FOR NAME -->
            <div class="form-outline mb-4  m-auto">
                <label for="name" class="form-lable">Name</label>
                <input type="text" name="title" id="name" class="form-control"
                    placeholder="Enter Name" autocomplete="off" required="required">
            </div>
            <br>
            <!-- FOR DESCRIPTION -->
            <div class="form-outline mb-4  m-auto">
                <label for="description" class="form-lable">Description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="Description" autocomplete="off" required="required">
            </div><br>

            <!-- FOR PUBLISHED DATE -->
            <div class="form-outline mb-4 m-auto">
                <label for="date" class="form-lable">Published Date</label>
                <input type="date" name="date" id="date" class="form-control"
                    placeholder="Enter date" autocomplete="off" required="required">
            </div><br>

            <!-- FOR CONTACT NUMBER -->
            <div class="form-outline mb-4  m-auto">
                <label for="contact_no" class="form-lable">Contact No.</label>
                <input type="text" name="contact_no" id="contact_no" class="form-control"
                    placeholder="Enter your contact number" autocomplete="off" required="required">
            </div><br>

            <!-- SUBMIT BUTTON -->
            <div class="form-outline mb-4 d-flex justify-content-center m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Make Request">
            </div>
        </form>
    </div>

</body>

</html>
