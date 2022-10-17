
<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $host="paramsite.c2rppycstunp.us-east-1.rds.amazonaws.com";
    $port=3306;
    $socket="";
    $user="diclericoandrew";
    $password="Parameters!";
    $dbname="param";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

    //$con->close();
?>
