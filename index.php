<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
    <!--
        California State Template
        Version 5.0

        Based on Twitter Bootstrap
    -->
    <meta charset="utf-8">
    <title>DEV-Your Organization Name</title>
    <meta name="Author" content="State of California" />
    <meta name="Description" content="State of California" />
    <meta name="Keywords" content="California, government" />
    <?php include_once("ssi/head-css-js.php"); ?>

   
</head>

<!-- possible body classes are "primary" and "two-column" -->
<body class="primary">
    <header role="banner" id="header" class="global-header fixed">
        <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
        
        <!-- Location Bar -->
        <?php include_once("ssi/location-bar.php"); ?>
    
        <!-- Include Utility Header -->
        <?php include_once("ssi/utility-header.php"); ?>
        
        <!-- Settings Bar -->
        <?php include_once("ssi/settings-bar.php"); ?>

        <!-- Include Branding -->
        <?php include_once("ssi/branding.php"); ?>

        <!-- Include Mobile Controls -->
        <?php include_once("ssi/mobile-controls.php"); ?>
    
        <div class="navigation-search">
            <div id="head-search" class="search-container featured-search fade">
                <!-- Include Search -->
                <?php include_once("ssi/search.php"); ?>
            </div>
            <!-- Include Navigation -->
            <?php include_once("ssi/navigation.php"); ?>
        </div>

        <div class="header-decoration"></div>
    </header>



    <!-- Ask Bar -->
    <?php include("ssi/ask-bar.php"); ?>


    <!-- Step 5: Header Images -->
    <!-- Include for optional slideshow banner -->
    <?php include("ssi/header-single-banner.php"); ?>

    <div id="main-content" class="main-content">
        <main class="main-primary">
            <!-- Begin Main Content -->
            <?php include("ssi/section-service-group.php"); ?>
            <?php include("ssi/section-open-data.php"); ?>
            <?php include("ssi/section-green-buildings.php"); ?>
            <?php include("ssi/section-green-stats.php"); ?>
            <?php include("ssi/section-mobile-gallery.php"); ?>
           
                    <?php include("ssi/section-footer2.php"); ?>
                    <!-- End Main Content -->
        </main>
    </div>

 
    <?php include_once("ssi/global-footer.php"); ?>

    <?php include_once("ssi/scripts.php"); ?>


</body>
</html>
