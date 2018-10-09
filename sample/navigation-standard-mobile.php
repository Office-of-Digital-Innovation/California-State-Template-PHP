<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.2
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Standard Mobile Navigation</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>    
        <!-- Location Bar -->        
		<?php include_once("../ssi/location-bar.php"); ?>
        
        <!-- Include Utility Header -->
		<?php include_once("../ssi/utility-header.php"); ?>	
        
        <!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

		<!-- Include Branding -->
		<?php include_once("../ssi/branding.php"); ?>
    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php"); ?>
    
    <div class="navigation-search">
      <!-- Include Navigation -->
      <?php include("../sample/modules/nav-singlelevel-standard-mobile.php"); ?>
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
    
    </div>
    
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Standard Mobile Nav</li>
            </ol>
            
        	<h1>Standard Mobile Navigation</h1>
            <p>This page uses a non-off-canvas mobile menu. To view effect, shrink your browser to a smaller size or preview on a mobile device. To use the non-off-canvas menu, omit the <code>.off-canvas</code> class from the main <code>&lt;nav&gt;</code> element.</p> 
            <p><strong>Example using off-canvas menu for smaller screen sizes:</strong><br>
            <code>&lt;nav id="navigation" class="main-navigation singlelevelnav <strong><em>off-canvas</em></strong>"&gt;</code></p>
            
            <p><strong>Example using non-off-canvas menu for smaller screen sizes (as visible on this page):</strong><br>
            <code>&lt;nav id="navigation" class="main-navigation singlelevelnav"&gt;</code></p>
            
            <h2>More Navigation Samples</h2>
            <ul>
            	<li><a href="navigation-megamenu.php">Megamenu Navigation</a></li>
                <li><a href="navigation-megamenu-original.php">State Template v4 Original Megamenu</a></li>
                <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>
                <li><a href="navigation-single.php">Single Level Navigation</a></li>
                <li><a href="navigation-standard-mobile.php">Non-off-canvas Mobile Navigation</a></li>
            </ul>
        </main>
        
        <div class="main-secondary">
            <?php include("../sample/modules/profile-banners.php"); ?>
        </div>
        
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>