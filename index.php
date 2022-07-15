<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
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

        <div class="d-flex justify-content-around my-5">
        <div class="w-25">
            <h4>Welcome to Long Chevrolet Buick GMC</h4>
            <p>Welcome to our customer portal.</p>
            <p>Here you are able to view all your vehicle service 
               history and communications with the dealership.
            </p>
        </div>
        <div class="w-25">
        <?php
            if (isset($_SESSION['login_failed']))
            {
                if ($_SESSION['login_failed'])
                {
                    echo "<div class='alert alert-dismissible alert-danger'>";
                        echo "<button type='button' class='btn btn-close' data-bs-dismiss='alert'>Close</button>";
                        echo "<p><strong>Login failed!</strong> Incorrect Password or Email does not exist</p>";
                    echo "</div>";
                }
                $_SESSION['login_failed'] = null;
            }
        ?>
            <form method="POST" action="/longofathens.php" id="login_form">
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1" class="form-label mt-4">Email address</label> -->
                    <input type="email" class="form-control" id="login_email" name="login_email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <!-- <label for="exampleInputPassword1" class="form-label mt-4">Password</label> -->
                    <input type="password" class="form-control" id="login_pass" name="login_pass" placeholder="Password" required>
                </div>
            </form>
            <button class="btn btn-primary w-100" type="submit" form="login_form" value="Submit">Login</button>
            <span class='d-flex flex-row justify-content-between my-2'>
                <button type='button' class='btn w-48' style="background-color: #0B9DF7;">Facebook Login</button>
                <button type='button' class='btn w-48' style="background-color: #E13427;">Google Login</button>
            </span>
            <span class='d-flex flex-row justify-content-between my-2'>
                <button type='button' class='btn btn-outline-primary w-48' href="#" data-bs-toggle="modal" data-bs-target="#registrationModal">Create an account</button>
                <button type='button' class='btn btn-outline-primary w-48'>Forgot Password?</button>
            </span>


            <div class="modal fade w-100" id="registrationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex flex-column">
                            <i class="bi bi-laptop" style="font-size:48px;"></i>
                            <h3>Registration</h3>
                        </div>
                        <form method="POST" action="/longofathens.php">
                        <div class="modal-body">
                                <label for="fname" >First Name</label><br>
                                <input type="text" id="fname" name="fname" placeholder="Enter your first name" class="form-control-plaintext" required><br>
                                <label for="lname">Last Name</label><br>
                                <input type="text" id="lname" name="lname" placeholder="Enter your last name" class="form-control-plaintext" required><br>
                                <label for="email">Email</label><br>
                                <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control-plaintext" required><br>
                                <label for="contact_number">Contact Number</label><br>
                                <input type="text" id="contact_number" name="contact_number" placeholder="Enter your contact number" class="form-control-plaintext" required><br>
                                <label for="password">Password</label><br>
                                <input type="password" id="password" name="password" placeholder="Enter a password"  class="form-control-plaintext" required><br>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-secondary" data-bs-dismiss="modal" value="Close"/>
                            <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="Register"/>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        </div>
        <hr/>
        

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>