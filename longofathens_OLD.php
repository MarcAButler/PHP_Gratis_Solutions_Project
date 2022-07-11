<?php
    // connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'sql_auto_wall', 3307);

    // check connection
    if(!$conn)
    {
        die('Connection error: ' . mysqli_connect_error());
    }

    // select all query
    $sql = 'SELECT * FROM vehicles';

    // query for results
    $result = mysqli_query($conn, $sql);


    foreach ($result as $row)
    {
        print_r($row);
    }


    // turn the records as an array
    //$vehicles = mysqli_fetch_all($result);

    //print_r($vehicles);
    //print_r($vehicles);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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


    <!-- RENDERS THE VEHICLE CARDS -->
    <?php
    echo "<div>";
    echo    "<div class='card mb-3'>";
    echo        "<svg xmlns='http://www.w3.org/2000/svg' class='d-block user-select-none' width='100%' height='200' aria-label='Placeholder: Image cap' focusable='false' role='img' preserveAspectRatio='xMidYMid slice' viewBox='0 0 318 180' style='font-size:1.125rem;text-anchor:middle'>";
    echo            "<rect width='100%' height='100%' fill='#868e96'></rect>";
    echo            "<text x='50%' y='50%' fill='#dee2e6' dy='.3em'>Image cap</text>";
    echo        "</svg>";
    echo        "<h3 class='card-header'>Card header</h3>";
    echo        "<div class='card-body'>";
    echo            "<h5 class='card-title'>Special title treatment</h5>";
    echo            "<h6 class='card-subtitle text-muted'>Support card subtitle</h6>";
    echo        "</div>";
    echo        "<div class='card-body'>";
    echo            "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
    echo        "</div>";
    echo        "<ul class='list-group list-group-flush'>";
    echo            "<li class='list-group-item'>Cras justo odio</li>";
    echo            "<li class='list-group-item'>Dapibus ac facilisis in</li>";
    echo            "<li class='list-group-item'>Vestibulum at eros</li>";
    echo        "</ul>";
    echo        "<div class='card-body'>";
    echo            "<a href='#' class='card-link'>Card link</a>";
    echo            "<a href='#' class='card-link'>Another link</a>";
    echo        "</div>";
    echo        "</div>";
    echo        "<div class='card'>";
    echo        "<div class='card-body'>";
    echo            "<h4 class='card-title'>Card title</h4>";
    echo            "<h6 class='card-subtitle mb-2 text-muted'>Card subtitle</h6>";
    echo            "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
    echo            "<a href='#' class='card-link'>Card link</a>";
    echo            "<a href='#' class='card-link'>Another link</a>";
    echo        "</div>";
    echo    "</div>";

    echo "</div>";
    ?>

</body>
</html>