<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css"/>
    <title>Parameters</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-sm navbar-light">        
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="">Parameters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="input.php">New Test</a>
              </li>
            </ul>
            <a class="navbar-nav nav-link disabled" href="login.php" style="padding-right:1%;">Login</a>
            
        </div>
    </nav>


    <!-- Home page information -->
    <div>
         
        <h1>
            Previous Tests
        </h1>
        
        <br>
        <br>

        <table class="table table-dark center">
            <thead>
                <tr>
                    <td>Tank Name</td>
                    <td>Date of Test</td>
                    <td>Temperature</td>
                    <td>Specific Gravity</td>
                    <td>Ph</td>
                    <td>Alkalinity</td>
                    <td>Calcium</td>
                    <td>Phosphate</td>
                    <td>Ammonia</td>
                    <td>Nitrite</td>
                    <td>Nitrate</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('include/db.php');
                    $sql = "SELECT * FROM parameters;";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>" . $row['tankName'] . "</td>
                            <td>" . $row['tankDate'] . "</td>
                            <td>" . $row['Temperature'] . "</td>
                            <td>" . $row['SpecificGravity'] . "</td>
                            <td>" . $row['Ph'] . "</td>
                            <td>" . $row['Alkalinity'] . "</td>
                            <td>" . $row['Calcium'] . "</td>
                            <td>" . $row['Phosphate'] . "</td>
                            <td>" . $row['Ammonia'] . "</td>
                            <td>" . $row['Nitrite'] . "</td>
                            <td>" . $row['Nitrate'] . "</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

        <br>
        <br>
            
    </div>



    <!-- Footer -->
    <footer class="foot">
        <p class="cr">&copy 2022 <a class="hov" href="https://github.com/andrewdiclerico">Andrew DiClerico</a></p>
    </footer>

</body>
</html>