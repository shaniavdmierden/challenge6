<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">V!st@<em>Cars</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active"><?php echo NAV_HOME; ?></a></li>
                            <li><a href="cars.php"><?php echo NAV_CARS; ?></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo NAV_ABOUT; ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php"><?php echo NAV_ABOUT_US; ?></a>
                                    <a class="dropdown-item" href="faq.php"><?php echo NAV_FAQ; ?></a>
                                    <a class="dropdown-item" href="terms.php"><?php echo NAV_TERMS; ?></a>
                                </div>
                            </li>
                            <li><a href="contact.php"><?php echo NAV_CONTACT; ?></a></li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo NAV_LANG; ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?lang=nl">Nederlands</a>
                                    <a class="dropdown-item" href="?lang=en">English</a>
                                </div>
                            </li>
                            <li><?php include_once("assets/includes/inloguitlog.php");?></li>
                            <li><?php include_once("assets/includes/add.button.php");?></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>