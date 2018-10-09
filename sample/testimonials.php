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

<title>Sample - Testimonials</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

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
                <li class="active">Testimonails</li>
            </ol>
            
            <h1>Testimonials</h1>
            <p>The Testimonial <code>.thumbnail</code> can be positioned within the testimonial to fit various styles. Use classes <code>.thumbnail-left</code>, <code>.thumbnail-right</code> to control the horizontal alignment. Use <code>.thumbnail-middle</code>, <code>.thumbnail-bottom</code> to control it'ts vertical alignment. This is helpful when it's desirable to align the image with the middle or bottom of the testimonial. <code>.thumbnail-top</code> will place the image above the testimonail text and center it within the testimonial panel.</p>
            
            <p>Thumbnail images can also have classes applied to change the look and feel. <code>.img-circle</code> and <code>.img-rounded</code> can be used to round the corders of the image.</p>
            
            <div class="group">
                <div class="half">
                    <h2>Image Left Aligned:</h2>
                    <?php include("../sample/modules/testimonial-default.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion">Source Code:</label></h2>
                    <textarea id="sample-accordion" class="form-control" rows="10" cols="80"><?php include("../sample/modules/testimonial-default.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Thumnail Right Aligned:</h2>
                    <?php include("../sample/modules/testimonial-danger.php"); ?>
                    <p class="text-warning">Note: The source order for <code>.thumbnail</code> and <code>.testimonial-body</code> have been reversed. Source order is important when using this component with this configuration.</p>
                </div>
                 <div class="half">
                    <h2><label for="testimonial-danger">Source Code:</label></h2>
                    <textarea id="testimonial-danger" class="form-control" rows="10" cols="80"><?php include("../sample/modules/testimonial-danger.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Thumbnail Bottom Aligned:</h2>
                    <?php include("../sample/modules/testimonial-standout.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="testimonial-standout">Source Code:</label></h2>
                    <textarea id="testimonial-standout" class="form-control" rows="10" cols="80"><?php include("../sample/modules/testimonial-standout.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Thumbnail Top:</h2>
                    <?php include("../sample/modules/testimonial-top.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="testimonial-stacked">Source Code:</label></h2>
                    <textarea id="testimonial-stacked" class="form-control" rows="10" cols="80"><?php include("../sample/modules/testimonial-top.php"); ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>