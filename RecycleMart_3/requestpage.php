<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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
    </style>
</head>

<body>

    <!-- Button to insert new blog -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 text-left mt-3"> <!-- Updated column size and alignment -->
                <button type="button" class="btn button " onclick="window.location.href = 'index.php';">Back To Home</button>
            </div>
            <div class="col-md-12 text-right mt-3">
                <button type="button" class="btn button" onclick="window.location.href = 'insert_request.php';">Make a Request</button>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
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
            $sql = "SELECT * FROM requests";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '
                <div class="col-md-6 mb-4 " >
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="card-text" style="height: 70px;">' . $row['description'] . '</p>
                            <p class="card-text"><small class="text-muted">Published by ' . $row['name'] . ' on ' . $row['date'] . '</small></p>
                            <p class="card-text text-secondary">Contact : ' . $row['contact_no'] . '</p>
                        </div>
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