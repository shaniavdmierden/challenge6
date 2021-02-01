<?php session_start();
    include_once("includes/inloguitlog.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>kantine | Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- header -->
    <?php Include("includes/header.php"); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Leeuwlicious</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="menu.php">Menu</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
        
                    
                    </h2>
        
                </div>
                <div class="col-lg-12 text-center">
                
                    <h2>Kantine Form
                        <br>
                        <small></small>
                    </h2>
                    <p>Vul in om een item in het menu toe te voegen.</p>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
               
                <?php
    //gegevens in de database opslaan
    // we maken eerst een formulier van de input van gegevens
    //dan maken we connectie met de database
    //vervolgens slaan we de ingevulde gegevens op in de DB

    // 1. formulier
    // 2. opslaan

    //verbinding maken met DB via MySQLi

    $servername = "localhost";
    $username = "root";
    $password = "";

    //maken verbinding

    $conn = new mysqli($servername, $username, $password);

    //connectie gelukt
    if ($conn->connect_error) {
        die("connectie heeft gefaald error code: " . $conn->connection_error);
    }
    echo("De verbinding is gemaakt met de DB!");
    
    
    
    if(isset($_POST['frmGegevens'])) {
        //opslaan van de gegevens
    
        //print_r($_POST); //developers code!

        include_once("connection.inc.php"); //conntectie DB
        include_once("collect.inc.php");    //gegevens uit formulier verzamelen
        include_once("insert.inc.php");     //opslaan gegevens uit DB
    } else {
        //tonen van formulier
        include_once("form.inc.php");
    }

    include_once("connection.inc.php"); //conntectie DB
    ?>
   
               
               
                </div>
            </div>
        </div>
    </div>
   
    <!-- /.container -->

    <!-- FOOTER -->
    <?php Include("includes/footer.php"); ?>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
