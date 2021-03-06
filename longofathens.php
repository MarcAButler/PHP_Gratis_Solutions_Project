<?php
    session_start();
    // connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'sql_auto_wall', 3307);

    // check connection
    if(!$conn)
    {
        die('Connection error: ' . mysqli_connect_error());
    }

    if(!empty($_POST['fname']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // Insert into the user table (used for regsistration)
        $insertUser = "INSERT INTO users(fname, lname, email, contact_number, password_hash)
                       VALUES ('$fname', '$lname', '$email', '$contact_number', '$pass_hash')";
    
        // insert the user
        if (mysqli_query($conn, $insertUser)) {
        // echo "New record created successfully";
        } 
        else {
        //   echo "Error: " . $insertUser . "<br>" . mysqli_error($conn);
        }
    }
    // Handle login otherwise redirect back to login in page on failed login attempt
    else if (!empty($_POST['login_email']) and !empty($_POST['login_pass']))
    {
        $email = $_POST['login_email'];
        // Get the corresponding email's password hash with a query
        $pass_hash_query = "SELECT password_hash FROM users WHERE email = '$email'";

        $pass_hash = mysqli_query($conn, $pass_hash_query);
        $pass_hash = mysqli_fetch_array($pass_hash, MYSQLI_ASSOC);
        $pass_hash = $pass_hash['password_hash'];
        
        // Check if the password hash of the provided email works with the provided password
        $is_correct_password = password_verify($_POST['login_pass'], $pass_hash);
        
        if (!$is_correct_password)
        {
            $_SESSION['login_failed'] = true;

            $login_page = '/';
            // [!] Redirect back to the login page
            header('Location: '. $login_page);
            die();
        }


    }



    // select all query
    $sql = 'SELECT * FROM vehicles';

    // query for results
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gs-vehicle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <p class="nav-link">1234 Some Address Way, USA 54321</p>
            </li>
            <li class="nav-item">
                <p class="nav-link">123-456-7890</p>
            </li>
            <li class="nav-item">
                <p class="nav-link">Today's Hours: Closed</p>
            </li>
            <li class="nav-item">
                <p class="nav-link">Se Habla Espanol</p>
            </li>
        </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="#">Home
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Inventory</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Shop From Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Finance</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">News & Updates</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Parts & Service</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Long Bodyshop</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Login Here</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <div class='d-flex flex-row flex-wrap justify-content-center'>
    <!-- RENDERS THE VEHICLE CARDS -->
    <?php

    foreach ($result as $row)
    {
    $id = $row['id'];
    $name = trim($row['name'], "'");
    $manufacturer = trim($row['manufacturer'], "'");
    $condition = trim($row['condition'], "'");
    $retail_price = trim($row['retail_price'], "'");
    $savings_up_to = trim($row['savings_up_to'], "'");
    $sales_price = trim($row['sales_price'], "'");
    $stock_number = trim($row['stock_number'], "'");
    $mileage = trim($row['mileage'], "'");
    // Get rid of the ' character
    $image_path = '/images/'. trim($row['image_path'], "'");

    echo    "<div class='card mb-3 m-1' style='width: 22%'>";
    echo    "<form action='/vehicle.php' method='GET'>";

    // FIELDS
    echo        "<input type='hidden' name='id' value='$id'>";
    echo        "<input type='hidden' name='name' value='$name'>";
    echo        "<input type='hidden' name='manufacturer' value='$manufacturer'>";
    echo        "<input type='hidden' name='condition' value='$condition'>";
    echo        "<input type='hidden' name='retail_price' value='$retail_price'>";
    echo        "<input type='hidden' name='savings_up_to' value='$savings_up_to'>";
    echo        "<input type='hidden' name='sales_price' value='$sales_price'>";
    echo        "<input type='hidden' name='stock_number' value='$stock_number'>";
    echo        "<input type='hidden' name='mileage' value='$mileage'>";
    echo        "<input type='hidden' name='image_path' value='$image_path'>";

    // UI
    echo        "<button type='submit' style='background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;' class='justify-content-center'><img src='$image_path' alt='$image_path' width='100%' height='200'></button>";
    echo        "<div class='text-white bg-success justify-content-end m-2' style='width=30%'>$sales_price</div>";
    echo        "<h6 class='card-subtitle text-muted mx-2'>$manufacturer</h6>";
    echo        "<button type='submit' style='background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;'><h4 class='card-header'>$name</h4></button>";
    echo        "<span class='d-flex flex-row justify-content-around'><p>Condition:</p><p>$condition</p></span>";
    echo        "<span class='d-flex flex-row justify-content-around'><p>Retail Price:</p><p>$retail_price</p></span>";
    // Do not put savings_up_to field if it is null or empty
    if (!$savings_up_to == null and !$savings_up_to == '')
    {
        echo        "<span class='d-flex flex-row justify-content-around'><p>Savings Up To:</p><p>$savings_up_to</p></span>";
    }
    echo        "<span class='d-flex flex-row justify-content-around'><p>Sales Price:</p><p>$sales_price</p></span>";
    echo        "<span class='d-flex flex-row justify-content-around'><p>Stock #:</p><p>$stock_number</p></span>";
    echo        "<span class='d-flex flex-row justify-content-around'><p>Mileage:</p><p>$mileage</p></span>";
    
    echo        "<button type='button' class='btn btn-outline-primary mx-2'>Calculate Payments ??????</button>";
    echo        "<span class='d-flex flex-row justify-content-around mx-2'>";
    echo        "<button type='button' class='btn btn-outline-primary w-50'>Details ??????</button>";
    echo        "<button type='button' class='btn btn-outline-primary w-50'>Incentives ??????</button>";
    echo        "</span>";
    echo        "<span class='d-flex flex-row justify-content-around mx-2'>";
    echo        "<button type='button' class='btn btn-outline-primary w-50'>Concierge ??????</button>";
    echo        "<button type='button' class='btn btn-outline-primary w-50'>Compare ??????</button>";
    echo        "</span>";
    echo        "<button type='button' class='btn btn-outline-primary mx-2'>Get Pre-approved ??????</button>";

    echo    "</form>";
    echo    "</div>";
    }
    ?>
    </div>
</body>
</html>