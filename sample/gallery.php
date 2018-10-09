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

<title>Sample - Gallery</title>

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
      <?php include_once("../ssi/navigation.php"); ?>
      
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
                <li class="active">Gallery</li>
            </ol>
                
            <h1>Image Gallery</h1>
            <p>The default gallery will attempt to place as many photos as it can in a row before wrapping to a new line. For a little added control over layout, add a class of <code>.three-up</code> or <code>.four-up</code> to the <code>.gallery</code> div limit the number of item in a single row.</p>
            <p>Images can be grouped into galleries by adding the <code>data-gallery</code> attribute with a value of the name of the gallery to the image link. For example, any gallery item link to an image with <code>&lt;a data-gallery="gallery1" ... &gt;</code> will group all elements with the value <code>gallery1</code> together. A user can then use arrows on either side of the image popup to navigate through items in the same gallery.</p> 
            <p><strong>NOTE:</strong> For optimum viewing experience, it is recommended that gallery thumbnails be landscape cropped to 210x140 or square cropped to 140x140.</p>
            <?php include("../sample/modules/gallery.php"); ?>
            
            <h2><label for="sample-gallery">Source Code:</label></h2>
            <textarea id="sample-gallery" class="form-control" rows="10" cols="80"><?php include("../sample/modules/gallery.php"); ?></textarea>
            
        </main>
           
        <div class="main-secondary">
        	<h2>Galleries in Sidebar</h2>
            <p>Two gallery styles are available for use in the sidebar. The small gallery uses a class of <code>.gallery-small</code> and the sliding gallery uses a class of <code>.carousel-gallery</code>.
            <div class="panel panel-standout">
                <div class="panel-heading">
                    <h4><span class="ca-gov-icon-info"></span>Small Example</h4>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/gallery-small.php"); ?>
                </div>
            </div>
            <h2><label for="sample-gallery-small">Source Code:</label></h2>
            <textarea id="sample-gallery-small" class="form-control" rows="10" cols="80"><?php include("../sample/modules/gallery-small.php"); ?></textarea>
            <br>
            
            <div class="panel panel-standout">
                <div class="panel-heading">
                    <h4><span class="ca-gov-icon-info"></span>Slider Gallery Example</h4>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/carousel-gallery.php"); ?>
                </div>
            </div>
            <h2><label for="sample-carousel-gallery">Source Code:</label></h2>
            <textarea id="sample-carousel-gallery" class="form-control" rows="10" cols="80"><?php include("../sample/modules/carousel-gallery.php"); ?></textarea>
            <br>
            
            
        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>