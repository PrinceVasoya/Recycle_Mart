<?php
include("connect.php");

// Check if the form is submitted
if (isset($_POST['add_rating'])) {
    // Get the product ID and new rating value from the form
    $product_id = $_POST['product_id'];
    $new_rating = $_POST['new_rating'];

    // Update the database with the new rating
    $update_query = "UPDATE products SET ratings = $new_rating WHERE product_id = $product_id";
    $run_update = mysqli_query($con, $update_query);

    if ($run_update) {
        echo "<script>alert('Rating updated successfully!')</script>";
    } else {
        echo "<script>alert('Failed to update rating!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .img {
            width: 50px;
            height: 50px;
        }

        table {
            box-shadow: 0px 0px 6px #000;
        }

        .icon {
            color: black;
        }

        .icon:hover {
            color: #2a2a2a;
        }
    </style>
</head>

<body>
    <h3 class="text-center" style="color: #00262d;">All products</h3>
    <table class="table table-bordered mt-5">
        <thead class="text-center" style="background-color: #00262d; color:aliceblue;">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Status</th>
                <th>Ratings</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody style="background-color: #d4d4d4; color:black;">
            <?php
            $select_query = "SELECT * FROM products order by rand()";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row["product_id"];
                $product_title = $row["product_title"];
                $product_description = $row["product_description"];
                $product_image1 = $row["product_image1"];
                $product_price = $row["product_price"];
                $category_id = $row['category_id'];

                // Fetching existing rating from the database
                $existing_rating = $row['ratings'];
            ?>
                <tr class="text-center">
                    <td><?php echo $product_id ?></td>
                    <td><?php echo $product_title ?></td>
                    <td><img src="./product_images/<?php echo $product_image1 ?>" alt="img" class="img"></td>
                    <td><?php echo $product_price ?></td>
                    <td>True</td>
                    <td>
                        <!-- Input field for admin to give rating -->
                        <input type="number" name="rating" id="rating_<?php echo $product_id ?>" min="1" max="5" value="<?php echo $existing_rating ?>" onchange="addRating(<?php echo $product_id ?>)">
                        <!-- Button to add rating -->
                        <!-- <button onclick="addRating(<?php echo $product_id ?>)">Add</button> -->
                    </td>

                    <td><a href='admin_index.php?delete_product=<?php echo $product_id ?>' class='text-light'><i class='icon fa-solid fa-trash'></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        function addRating(productId) {
            // Get the new rating value
            var newRating = document.getElementById('rating_' + productId).value;

            // Send an AJAX request to update the rating
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response
                    alert("Rating Updated Successfully");
                }
            };
            xhr.send("add_rating=1&product_id=" + productId + "&new_rating=" + newRating);
        }
    </script>
</body>

</html>