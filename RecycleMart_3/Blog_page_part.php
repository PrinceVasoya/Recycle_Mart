<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if blog ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $blog_id = $_GET['id'];

    // Fetch blog details from the database
    $sql = "SELECT * FROM blogs WHERE id = $blog_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the blog
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $description = $row['description'];
        $publisher = $row['publisher'];
        $date = $row['date'];
        $contact_no = $row['contact_no'];
        $image = $row['image'];
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title; ?></title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>
                .button {
                    background-color: #00a2a7;
                }

                .button:hover {
                    background-color: #00dade;
                    box-shadow: 0px 0px 3px #000;
                }
            </style>
        </head>


        <body>

            <div class="container m-3 mx-auto w-75">
                <div class="card ">
                    <img style="height:500px;" src="./admin_area/product_images/<?php echo $image; ?>" class="card-img-top mx-auto px-4 py-2" alt="<?php echo $title; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <p class="card-text"><?php echo $description; ?></p>
                        <p class="card-text"><small class="text-muted">Published by <?php echo $publisher; ?> on <?php echo $date; ?></small></p>
                        <p class="card-text">Contact : <?php echo $contact_no; ?></p>
                        <a href="Blog_page.php" class="btn button">Back to Blogs</a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </body>

        </html>
<?php
    } else {
        echo "Blog not found.";
    }
} else {
    echo "Invalid blog ID.";
}

$conn->close();
?>