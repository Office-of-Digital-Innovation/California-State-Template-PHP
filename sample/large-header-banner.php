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

<title>Sample - Large Header Banner</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header fixed">
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
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    
    </div> 
    <div class="header-decoration"></div>
</header>

	<!-- Include Page Template -->
    <?php include("../ssi/header-large-banner.php"); ?>


<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Large Header Banner</li>
            </ol>
            
<h1>Large  Hero Banner</h1>
            <p>The large header banner is a full screen hero banner that will dynamically calculate the height of the window and fill it with the chosen image. To use this banner type add  <code>/ssi/header-large-banner.php</code> using the SSI include method right below the header of the desired page.</p>
            <p><span class="label label-info">Note:</span> To have the banner dissapear in a mobile viewport add the <code>.primary</code> class to the <code>&lt;body&gt;</code> element of the page otherwise the banner will remain in all screen sizes.</p>
<pre>
&lt;/header&gt; <br>&lt;!-- Include Page Template --&gt;
 &lt;!--#include virtual=&quot;/ssi/<strong>header-large-banner.php</strong>&quot; --&gt;
</pre> 

			<p>To change the background image edit the <strong>header-large-banner.php</strong> include file located in the <strong>ssi </strong>directory. The image is set by changing the <code>background</code> property in the style attribute for <code>&lt;div class="header-large-banner" style="background-image: url('<strong>/sample/images/background_2.jpg</strong>');"&gt;</code>. The recommended dimensions of the banner images are 1500 by 500 pixels. </p>
            
            <h2>Demonstration </h2>
            <p>Toggle the buttons to add or remove the large hero banner.</p>            
            <button class="toggleBanner btn btn-secondary m-r-sm m-b-sm"> Remove Large Banner													</button>  
        	<a href="page-templates.php"><button class="btn btn-secondary m-r-sm m-b-sm">Back to Page Templates</button></a>    
            
            <h2>Source Code:</h2>
            <textarea id="sample-header-slideshow-banner" class="form-control" rows="10" cols="80"><?php include("../ssi/header-large-banner.php"); ?></textarea>
            <br />
                    
       </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

<script>
// -- DEMONSTRATION ONLY! -- //
$(document).ready(function(){ 
	// Toggle .header-large-banner class
	 $(".toggleBanner").click(function() {
        var btnLabel = $(this);
        // Toggle body class and button text when clicked
        if ($(this).html() == 'Add Large Banner') {
            btnLabel.html('Remove Large Banner');    
			window.scrollTo(0, 0);    
            $(".header-large-banner").removeClass("hide");
			//$(".header-primary-banner").addClass("hide");
        } else {
            btnLabel.html('Add Large Banner');
            $(".header-large-banner").addClass("hide");
			window.scrollTo(0, 0);
			//$(".header-primary-banner").addClass("hide");			
        }
      });
});
</script>

</body>
</html>