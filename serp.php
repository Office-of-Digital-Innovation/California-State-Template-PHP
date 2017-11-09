<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Search Results - Organization</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("ssi/head-css-js.php"); ?>
<link rel='stylesheet' href='http://www.google.com/cse/style/look/default.css' type='text/css'/>
    <!--hiding search icons from search results page navigation sinse the search box is already open-->
    <style>
        #nav-item-search, .mobile-controls .toggle-search {
            display:none;
        }
       .mobile-controls .mobile-header-icons  {
            display: block;
            height: 61px;
            width: 100%;
            cursor: default;
       }
    </style>
</head>

<!-- possible body classes are "primary" and "two-column" -->
<body>

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
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("ssi/search.php"); ?>
        </div>
        <!-- Include Navigation -->
        <?php include_once("ssi/navigation.php"); ?>
    </div>

    <div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">

        <main class="main-primary">
            <!--Search include is commented out-->
            <?php include_once("ssi/search-results-standalone.php"); ?>
            
            <!--Search result section-->
            <div class="section-default">
                <div class="container search-results-header">
                    <h1>Search Results</h1>
                    <gcse:searchbox-only resultsUrl="/serp.php" enableAutoComplete="true"></gcse:searchbox-only>

                </div>
            </div>
                <div class="section">
                    <div class="container">

                        <gcse:searchresults-only></gcse:searchresults-only>
                        <!-- <script src='//www.google.com/jsapi' type='text/javascript'></script> -->
                    </div>
                </div>
</main>
    
</div>


<?php include_once("ssi/global-footer.php"); ?>

<?php include_once("ssi/scripts.php"); ?>

</body>
</html>