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

<title>Sample - Featured Search</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="primary">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    
    <div class="navigation-search">
        
        <div id="head-search" class="search-container featured-search">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>    
    </div>
    
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Featured Search</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Featured Search</h1>
                    <p>The header above is an example of the featured search bar. It's location and size make it a prominent feature on this template. The <code>.featured-search</code> class can be added to the <code>#head-search</code> div only within <code>.primary</code> landing page templates. (See <a href="page-templates.php">Page Templates</a> for additional info on <code>.primary</code> templates)</p>
                    
                    <p><span class="label label-info">NOTE:</span> The <code>.featured-search</code> class should not be used on templates that use the <a href="rotating-header-banner.php">Rotating Header Banner</a>.</p>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion">Source Code:</label></h2>
                    <textarea id="sample-accordion" class="form-control" rows="10" cols="80"><?php include_once("../sample/modules/featured-search.php");?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>