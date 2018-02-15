<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<!-- 
California State Template
Version 4.01
  
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>DEV-Your Organization Name</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

<script type="text/javascript">
	var defaultActiveLink = "Examples";
</script>


</head>

<!-- possibly body classes are primary and two-column -->
<body>

<header role="banner" id="header" class="global-header fixed">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
     
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
    
</header>

        <!-- Include Optional Slideshow banner -->
    <?php include("../ssi/header-slideshow-banner.php"); ?>


<div id="main-content" class="main-content">
    <div class="section">
        <main role="main" class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Slideshow Header Banner</li>
            </ol>
            
            <h1>Slideshow Header Banner</h1>
            <p>The slideshow header banner is a  rotating hero banner that appears below the page header and can contain multiple hero images with or without captions and links. To use this banner type add  <code>/ssi/header-slideshow-banner.php</code> using the SSI include method right below the header of the desired page.</p>
          <pre>
&lt;/header&gt; <br>&lt;!-- Include Page Template --&gt;
 &lt;!--#include virtual=&quot;/ssi/<strong>header-slideshow-banner.php</strong>&quot; --&gt;
			</pre> 
            
            <p>To change the slideshow images edit the <strong>header-slideshow-banner.php</strong> include file located in the <strong>ssi </strong>directory. Each slide in the banner containes a background image and an optional caption that functions as a link. The image is set by changing the <code>background</code> property in the style attribute for <code>&lt;div class="slide" style="background-image: url('sample/images/background_1.jpg');"&gt;</code>. The recommended dimensions of the banner images are 1500 by 500 pixels with the resolution of 72dpi.</p>
            
            <p>An optional link with a caption can be added. The caption is contained inside the link in the <code>.slide-text</code> element.</p>
            
            <h2>Source Code:</h2>
            <textarea id="sample-header-slideshow-banner" class="form-control" rows="10" cols="80"> <?php include("../ssi/header-slideshow-banner.php"); ?></textarea>
            <br />
        <p><a href="page-templates.php"><button class="btn btn-secondary">Back to Page Templates</button></a></p> </main>
        
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>