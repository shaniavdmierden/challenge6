<?php
session_start();


$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = substr($lang, 0,2);

if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

require_once("assets/languages/lang.$lang.php")


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>V!st@ CARS</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include_once("assets/includes/Header.Area.php");?>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <?php echo FORM_TITLE; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        include_once("assets/includes/connection.inc.php"); //conntectie DB
        include_once("assets/includes/collect.inc.php");    //gegevens uit formulier verzamelen
        include_once("assets/includes/insert.inc.php");     //opslaan gegevens uit DB
    } else {
        //tonen van formulier
        include_once("assets/includes/form.inc.php");
    }

    include_once("assets/includes/connection.inc.php"); //conntectie DB
    ?>


    <!-- FOOTER -->
    <?php Include("assets/includes/footer.php"); ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>