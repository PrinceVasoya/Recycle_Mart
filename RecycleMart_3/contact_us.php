<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
     <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <!-- font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
     integrity="your-integrity-value-here" crossorigin="anonymous">
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 40%;
            top: 20px;
            background-color: #00262d;
            box-shadow: 0px 0px 7px #000;
        }

        h1 {
            text-align: center;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
            color:white;
        }
        .form-control{
                background-color: #d8d8d8;
            }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 120px;
        }
        

        button {
            background-color:#00a2a7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover{
            transform: scale(1.04);
            background-color: #00dade ;
            box-shadow: 0px 0px 3px #000;
        }
    </style>
</head>

<body>
    <div class="container mx-auto m-3 p-3 py-4 rounded-3 ">
        
        <h1 >Contact Us</h1>
        <form>
            <div class="form-group ">
                <label for="name ">Name:</label>
                <input type="text" id="name" name="name"class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email ">Email:</label>
                <input type="email" id="email" name="email"  class="form-control"required>
            </div>
            <div class="form-group">
                <label for="phone ">Phone Number:</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="fw-bold">Send Message</button>
            </div>
        </form>
    </div>
</body>

</html>