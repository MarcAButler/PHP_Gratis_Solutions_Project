<?php
$id = $_GET['id'];
$name = $_GET['name'];
$manufacturer = $_GET['manufacturer'];
$condition = $_GET['condition'];
$retail_price = $_GET['retail_price'];
$savings_up_to = $_GET['savings_up_to'];
$sales_price = $_GET['sales_price'];
$stock_number = $_GET['stock_number'];
$mileage = $_GET['mileage'];
$image_path = $_GET['image_path'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>gs-vehicle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body class="bg-light">
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

    <?php
    echo "<a class='breadcrumb-item active mx-5' href='/longofathens.php'>Back to Inventory</a>";
    echo "<div class='d-flex justify-content-around'>";
        
        // horizontal div
        echo "<div class='d-flex justify-content-around'>";
            echo "<img class='m-5' src='$image_path' alt='$image_path' width='%30' height='500'/>";
            echo "<div class='m-5' style='background-color: white'>";
                echo "<h4>Pricing Details</h4>";
                echo "<span class='d-flex flex-row justify-content-between m-2'><h5>Retail Price</h5> <h5>$retail_price</h5></span>";
                if (!$savings_up_to == null and !$savings_up_to == '')
                {
                    echo "<span class='d-flex flex-row justify-content-between m-2'><h5>Incentives</h5> <h5 style='color: #49B265'>$savings_up_to</h5></span>";
                }
                echo "<hr>";
                echo "<span class='d-flex flex-row justify-content-between m-2'><h4>Long Price</h4> <h4>$sales_price</h4></span>";
                
                echo "<div class='d-flex flex-column'>";
                echo "<span class='d-flex flex-row justify-content-around m-2'>";
                    echo "<button type='button' class='btn btn-primary m-2'>Calculate Payments</button>";
                    echo "<button type='button' class='btn btn-primary m-2'>Apply for Credit!</button>";
                echo "</span>";
                echo "<span class='d-flex flex-row justify-content-around m-2'>";
                    echo "<button type='button' class='btn btn-primary m-2'>Get ePrice!</button>";
                    echo "<button type='button' class='btn btn-primary m-2'>Concierge</button>";
                    echo "<button type='button' class='btn btn-primary m-2'>Value Your Trade</button>";
                echo "</span>";
                echo "<button class='btn btn-primary d-flex flex-row justify-content-around m-2' type='button'>Get Pre-approved Now</button>";
                echo "</div>";

                echo "<img class='d-flex flex-row justify-content-around m-2' src='/images/carfax.jpg' alt='carfax' width='130'>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    ?>
    <div class="d-flex justify-content-around">
    <div class="justify-content-around w-25 mx-5" style='background-color: white'>
        <h4 class="mx-2">Incentives</h4>
        <div class="mx-2">
            <table class="table table-active">
                <tr>
                    <th>Incentive</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <?php
                    echo "<td>$manufacturer Consumer Cash Program</td>";
                    echo "<td>$savings_up_to</td>";
                    ?>
                </tr>
            </table>
        </div>
        <h4 class="mx-2">You May Also Qualify For These Savings</h4>
        <div class="mx-2">
            <table class="table table-active">
                <tr>
                    <th>Incentive</th>
                    <th>Value</th>
                </tr>
                <?php
                if (!$savings_up_to == null and !$savings_up_to == '')
                {
                    echo "<tr class='table-secondary'>";
                        echo "<td>$manufacturer Consumer Cash Program</td>";
                        echo "<td>$savings_up_to</td>";
                    echo "</tr>";
                }
                ?>
                <tr>
                    <?php
                    echo "<td>Business Partners Private Offer-Associated Builders and Contractors (ABC)</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr class="table-secondary">
                    <?php
                    echo "<td>$manufacturer Select Business/Trade Association Private Offer</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr>
                    <?php
                    echo "<td>$manufacturer College Cash Allowance Program </td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr class="table-secondary">
                    <?php
                    echo "<td>$manufacturer Military Cash Program</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr>
                    <?php
                    echo "<td>$manufacturer Healthcare Professional Cash Allowance Program</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr class="table-secondary">
                    <?php
                    echo "<td>$manufacturer Educator Cash Allowance Program</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr>
                    <?php
                    echo "<td>$manufacturer First Responder Cash Allowance Program</td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
                <tr class="table-secondary">
                    <?php
                    echo "<td>$manufacturer Card Sign Up Bonus Cash Offer </td>";
                    echo "<td>$500.00</td>";
                    ?>
                </tr>
            </table>
        </div>

        <h4 class="mx-2">Options & Features</h4>
        <div class="mx-2">
            <table class="table table-active">
                <tr><td>Power Running Boards</td></tr>
                <tr class="table-secondary"><td>50 State Emissions</td></tr>
                <tr><td>GA0</td></tr>
                <tr class="table-secondary"><td>3.42 Rear Axle Ratio</td></tr>
                <tr><td>JFP</td></tr>
                <tr class="table-secondary"><td>L5P</td></tr>
                <tr><td>MGM</td></tr>
                <tr class="table-secondary"><td>PEC</td></tr>
                <tr><td>RIA</td></tr>
                <tr class="table-secondary"><td>RQA</td></tr>
                <tr><td>ASSIST STEPS: POWER-RETRACTABLE</td></tr>
                <tr class="table-secondary"><td>Customer Dialog Network</td></tr>
                <tr><td>ENGINE BLOCK HEATER</td></tr>
                <tr class="table-secondary"><td>Underseat Storage</td></tr>
                <tr><td>EXHAUST BRAKE</td></tr>
                <tr class="table-secondary"><td>Z6A</td></tr>
                <tr><td>LPO: ALL-WEATHER FLOOR LINER; 1ST AND 2ND ROWS</td></tr>
                <tr class="table-secondary"><td>00Z</td></tr>
                <tr><td>LPO: REAR UNDERSEAT STORAGE; COMPOSITE STORAGE BIN</td></tr>
                <tr class="table-secondary"><td>Sun Ent & Dest Package</td></tr>
                <tr><td>MULTI-COLOR 15" DIAGONAL HEAD-UP DISPLAY</td></tr>
                <tr class="table-secondary"><td>ALTERNATOR: 220 AMPS</td></tr>
                <tr><td>REAR CAMERA MIRROR: INSIDE REARVIEW AUTO-DIMMING WITH FULL CAMERA DISPLAY</td></tr>
            </table>
        </div>
    </div>
    
    <!-- ICONS -->
    <div class="w-25">
        <div class="d-flex justify-content-between my-3">
            <i class="bi bi-speedometer" style="font-size:48px;"></i>
            <div>
                <h6>3.6 liter V6 Cylinder Engine</h6>
                <h6>9-SPEED AUTOMATIC</h6>
                <h6>Sport Utility</h6>
            </div>
        </div>
        <div class="d-flex justify-content-between my-3">
            <i class="bi bi-palette-fill" style="font-size:48px;"></i>
            <div>
                <h6>Exterior Color: Optional</h6>
                <h6>Exterior Color: Black Cherry</h6>
            </div>
        </div>
        <div class="d-flex justify-content-between my-3">
            <i class="bi bi-journal-text" style="font-size:48px;"></i>
            <div>
            <?php
            echo"<h6>Condition: $condition</h6>";
            echo"<h6>Trim: High Country</h6>";
            echo"<h6>Mileage: $mileage</h6>";
            echo"<h6>Stock #: $stock_number</h6>";
            echo"<h6>VIN: ABCDEFGHIJKLMNOP</h6>";
            echo"<h6>Dealer Lot: Long $manufacturer</h6>";
            ?>
            </div>
        </div>
    </div>

    </div>

    </body>
    <script src="" async defer></script>
</html>