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

<title>Dropdown Navigation</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="primary two-column">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    
    <div class="navigation-search">
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../sample/modules/nav-dropdown.php");?>    
    </div>
    
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Dropdown Navigation</li>
            </ol>
            
        	<h1>Navigation Dropdown</h1>
            <p>This page is using the Dropdown Navigation or Mininav.</p>
            <p>The dropdown menu displays a simple dropdown for sub navigation elements. This style of menu can be set by including the <code>.dropdown</code> class in the <code>&lt;nav&gt;</code> element.</p>
            <p><strong>Example:</strong> <br><code>&lt;nav id="navigation" class="main-navigation dropdown "&gt;</code> .</p> 
            <p>In the template distribution this markup can be found in <code>/ssi/navigation.php</code>.
            
            <h2>More Navigation Samples</h2>
            <ul>
            	<li><a href="navigation-megamenu.php">Megamenu Navigation</a></li>
                <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>
                <li><a href="navigation-single.php">Single Level Navigation</a></li>
                <li><a href="navigation-standard-mobile.php">Non-off-canvas Mobile Navigation</a></li>
            </ul>
        </main>
        
        <div class="main-secondary">
            <?php include_once("../sample/modules/profile-banners.php");?>        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>