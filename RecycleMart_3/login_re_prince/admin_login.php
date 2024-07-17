<?php
include($_SERVER['DOCUMENT_ROOT'] . '/RecycleMart_3/admin_area/connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="your-integrity-value-here" crossorigin="anonymous">
  <style>
    body {
      overflow: hidden;
    }

    .main {

      background-color: white;
    }

    .button {
      background-color: #00a2a7;
    }

    .button:hover {
      background-color: #00dade;
      box-shadow: 0px 0px 3px #000;
    }

    .form-control {
      background-color: #d8d8d8;
    }
  </style>


</head>

<body>
  <div class="container-sm w-full mt-5 ">


    <div class="row d-flex justify-content-sm-evenly">
      <div class="col-lg-6 col-xl-5 ">
        <img src="admin_login.jpg" alt="Admin registration" class="img-thumbnail " style="height: 450px;">
      </div>

      <div class="col-lg-6 col-xl-4 rounded-4 shadow-lg" style="background-color: #00262d ;">
        <div class="d-flex flex-row justify-content-center m-4">
          <h2 class="text-center   fs-3 fw-bold text-white ">Admin login</h2>
          <p class="small fw-bold  m-2 mx-3"> <a href="user_login.php" class="link-danger">User Login</a></p>
        </div>
        <form action="" method="post" class="p-4">
          <div class="form-outline mb-4">
            <label for="username" class="form-label text-white"> <b>Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" require class="form-control">
          </div>

          <div class="form-outline mb-4">
            <label for="password" class="form-label text-white">password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" require class="form-control">
          </div>

          <div class="row d-flex justify-content-center mx-auto">
            <input type="submit" class=" button py-2 px-3 border-1 rounded-3" name="admin_login" value="Login">
          </div>



        </form>
      </div>
    </div>
  </div>


</body>

</html>



<?php
if (isset($_POST["admin_login"])) {
  // Ensure your database connection is properly established and the $con variable is defined
  session_start();
  $admin_username = $_POST['username'];
  $admin_password = $_POST['password'];
  $_SESSION['admin_username'] = $admin_username;

  $select_query = "SELECT * FROM `admin_table` WHERE admin_name='$admin_username'";
  $result = mysqli_query($con, $select_query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row_data = mysqli_fetch_assoc($result);

    // Changed from $row_data['$user_password'] to $row_data['user_password']
    if ($admin_password === $row_data['admin_password']) {
      echo "<script>alert('Login successful')</script>";
      echo "<script>window.open('../admin_area/admin_index.php','_self')</script>";
    } else {
      echo "<script>alert('Invalid Credentials: Incorrect Password')</script>";
    }
  } else {
    echo "<script>alert('Invalid Credentials: User not found')</script>";
  }
}

?>