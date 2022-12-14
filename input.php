<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css"/>
    <title>Input</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light">        
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link hov" href="index.php">Parameters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hov" href="">New Test</a>
              </li>
            </ul>
            <a class="navbar-nav nav-link hov disabled" href="login.php" style="padding-right:1%;">Login</a>
            
        </div>
    </nav>

    <?php
        //initializing variables
        $id = "";
        //include databse connection file (db.php)
        include_once __DIR__ . '/include/db.php';
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['tankDate'])) {
            //set values equal to user inputs
            $testDate = ($_REQUEST['tankDate']);
            $testTankName = ($_REQUEST['tankName']);
            $testTemperature = ($_REQUEST['Temperature']);
            $testSpecificGravity = ($_REQUEST['SpecificGravity']);
            $testPh = ($_REQUEST['Ph']);
            $testAlkalinity = ($_REQUEST['Alkalinity']);
            $testCalcium = ($_REQUEST['Calcium']);
            $testPhosphate = ($_REQUEST['Phosphate']);
            $testAmmonia = ($_REQUEST['Ammonia']);
            $testNitrite = ($_REQUEST['Nitrite']);
            $testNitrate = ($_REQUEST['Nitrate']);
            //set insert statement
            $query = "INSERT into param.parameters (tankDate, tankName, Temperature, SpecificGravity, Ph, Alkalinity, Calcium, Phosphate, Ammonia, Nitrite, Nitrate) 
            VALUES ('$testDate', '$testTankName', '$testTemperature', '$testSpecificGravity', '$testPh', '$testAlkalinity', '$testCalcium', '$testPhosphate', '$testAmmonia', '$testNitrite', '$testNitrate')";
            //execute sql statement
            $result = mysqli_query($con, $query);
            //if results = true, display that user added record successfully
            if ($result) 
            {
                Header("Location:index.php");
            }
            //else (if results = false), display add failed
            else 
            {
                Header("Location:index.php");
            }
        } 
        else if (!isset($_REQUEST['tankDate'])){

        
    ?>  

        
    

    <div>

        <!-- form to get user inputs -->
        <form class="form" action="" method="post" >
            <h1 class="title" style="color: white;">New Test</h1> <!-- form title -->
            <label>Tank Name</label>
            <br />
            <input type="text" class="input" placeholder="Ocean" name="tankName" style="text-align:center; width:50%;" required />
            <br />
            <br />

            <label>Date of Test</label>
            <br />
            <input type="date" class="input" name="tankDate" style="text-align:center; width:50%;" required />
            <br />
            <br />

            <label>Water Temperature (Degrees Fahrenheit)</label>
            <br />
            <input type="number" class="input" placeholder="80" step=".1" name="Temperature" style="text-align:center; width:50%;" />
            <br />
            <br />

            <label>Specific Gravity</label>
            <br />
            <input type="number" class="input" value="1.025" step=".001" name="SpecificGravity" style="text-align:center; width:50%;" />
            <br />
            <br />

            <label>Ph</label>
            <br>
            <input type="number" class="input" placeholder="Ph" step=".1" name="Ph" style="text-align:center; width:50%;" />
            <br>
            <br>

            <label>Alkalinity</label>
            <br>
            <input type="number" class="input" placeholder="Alkalinity" step=".1" name="Alkalinity" style="text-align:center; width:50%;" />
            <br>
            <br>

            <label>Calcium</label>
            <br>
            <input type="number" class="input" placeholder="Calcium" step=".1" name="Calcium" style="text-align:center; width:50%;" />
            <br>
            <br>

            <label>Phosphate</label>
            <br>
            <input type="number" class="input" placeholder="Phosphate" step=".01" name="Phosphate" style="text-align:center; width:50%;" />
            <br>
            <br>

            <label>Ammonia</label>
            <br>
            <input type="number" class="input" value="0.0" step=".1" name="Ammonia" style="text-align:center; width:50%;" />
            <br>
            <br>

            <label>Nitrite</label>
            <br>
            <input type="number" class="input" value="0.0" step=".1" name="Nitrite" style="text-align:center; width:50%;" />
            <br>
            <br>
            
            <label>Nitrate</label>
            <br>
            <input type="number" class="input" value="0.0" step=".1" name="Nitrate" style="text-align:center; width:50%;" />
            <br>
            <br>

            <br />

            <input type="submit" name="submit" value="Post Results" class="login-button" />
            <br />
            <br />

            <p><a href="index.php" class="hov">Discard Results</a></p>
        </form>

    </div>
        
               

    <?php
        }
    ?>
    
    
    


    <br />
    <br />

    <!-- Footer -->
    <footer class="foot">
        <p class="cr">&copy 2022 <a class="hov" href="https://github.com/andrewdiclerico">Andrew DiClerico</a></p>
    </footer>

</body>
</html>