<?php
// Establish database connection
$host = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "mystore"; // Your database name

$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if product_id is set in the URL
if (isset($_GET['product_id'])) {
    // Get the product_id from the URL
    $product_id = $_GET['product_id'];

    // Query to fetch product details based on product_id
    $query = "SELECT * FROM products WHERE product_id = $product_id";
    $result = mysqli_query($con, $query);

    // Check if query was successful and if product exists
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $product_title = $row["product_title"];
        $product_description = $row["product_description"];
        $product_price = $row["product_price"];
        $product_contact = $row["contact_no"];
        $product_address = $row["location"];
        $product_image1 = $row["product_image1"];

        // Output product details in HTML
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Product Page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

            <!-- font-awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="your-integrity-value-here" crossorigin="anonymous">

            <style>
                body {
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    margin: 0;
                    padding: 0;
                }

                header {
                    background-color: #00262d;
                    color: white;
                    text-align: center;
                    padding: 10px;
                    text-transform: uppercase;
                }

                main {
                    display: flex;
                    justify-content: space-around;
                    padding: 20px;
                }

                .product-image img {
                    border-radius: 15px 15px;
                    width: 65%;
                    max-width: 100%;
                    margin-top: 7%;
                    margin-left: 15%;
                }

                .product-details {
                    margin-top: 3%;
                    margin-right: 20%;
                    max-width: 300px;
                }
            </style>
        </head>

        <body>

            <header style="display: flex; justify-content: space-between; align-items: center; position: relative; width: 100%;">
                <div style="position: absolute; left: 0;">
                    <button class="btn btn-close-white border border-2 shadow-5"><a style="color:white; text-decoration:none" href="index_temp.php">Home</a></button>
                </div>
                <h1 style="margin: 0; text-align: center; flex-grow: 1;"><?php echo $product_title; ?></h1>
                <div style="width: 10%;">&nbsp;</div> <!-- Placeholder to balance the layout -->
            </header>


            <main>
                <div class="product-image ">
                    <img src="./admin_area/product_images/<?php echo $product_image1; ?>" alt="Product Image">
                </div>

                <div class="product-details ">
                    <h4>Description :</h4>
                    <p style="color: #717171; font-size:18px; padding-left:15px;  padding-right:15px;"><?php echo $product_description; ?></p>
                    <h4>Price :</h4>
                    <p style="color: #717171; font-size:18px; padding-left:15px;  padding-right:15px;">₹<?php echo $product_price; ?></p>
                    <h4>Contact no :</h4>
                    <p style="color: #717171; font-size:18px; padding-left:15px;  padding-right:15px;"><?php echo $product_contact; ?></p>
                    <h4>Address :</h4>
                    <p style="color: #717171; font-size:18px; padding-left:15px;  padding-right:15px;"><?php echo $product_address; ?></p>


                </div>
            </main>
        </body>

        </html>
<?php
    } else {
        // Product not found
        echo "Product not found!";
    }
} else {
    // product_id not set in the URL
    echo "Product ID not provided!";
}
?>