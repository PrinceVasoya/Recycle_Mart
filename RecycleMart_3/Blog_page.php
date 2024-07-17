<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cards</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-body {
            color: #000;
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        .button {
            background-color: #00a2a7;
        }

        .button:hover {
            background-color: #00dade;
            box-shadow: 0px 0px 3px #000;
        }

        .truncate {
            display: -webkit-box;
            color: #a9a9a9;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <!-- Button to insert new blog -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-left mt-3"> <!-- Updated column size and alignment -->
                <button type="button" class="btn button " onclick="window.location.href = 'index.php';">Back To Home</button>
            </div>
            <div class="col-md-6 text-right mt-3"> <!-- Updated column size and alignment -->
                <button type="button" class="btn button " onclick="window.location.href = 'insert_blog.php';">Insert New Blog</button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center">
            <?php
            // Establishing connection to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mystore";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Checking connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetching data from the blogs table
            $sql = "SELECT * FROM blogs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '
                <div class="col-md-5 mb-4">
                    <div class="card m-2 shadow">
                        <a href="Blog_page_part.php?id=' . $row['id'] . '" class="card-link">
                            <img src="./admin_area/product_images/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['title'] . '</h5>
                                <p class="card-text truncate ">' . $row['description'] . '</p>
                                <p class="card-text"><small class="text-muted">Published by ' . $row['publisher'] . ' on ' . $row['date'] . '</small></p>
                                <p class="card-text ">Contact: ' . $row['contact_no'] . '</p>
                            </div>
                        </a>
                    </div>
                </div>
                ';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>



</html>