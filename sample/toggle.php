<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.3
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Toggle</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header">
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
    
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Toggle</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Generic Toggles</h1>
                    <p>Flexible and generic component that utilizes a handful of classes and data attributes for easy toggle behavior of any content.</p>
                    <p>Click the buttons below to show and hide another element via class changes:</p>

                    <ul>
                        <li><code>.collapse</code> hides content</li>
                        <li><code>.collapsing</code> is applied during transitions</li>
                        <li><code>.collapse.in</code> shows content</li>
                    </ul>
                    
                    <p>You can use a link with the <code>href</code> attribute, or a button with the <code>data-target</code> attribute. In both cases, the <code>data-toggle="collapse"</code> is required.</p>
                    
                    <p>The example uses an optional <code>.toggle-more</code> class. This class is a generic class that toggles a <code>.active</code> class on the clicked element. This can be used as a hook to change icons to show opened and closed states.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/toggle.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-toggle">Source Code:</label></h2>
                    <textarea id="sample-toggle" class="form-control" rows="10" cols="80"><?php include("../sample/modules/toggle.php"); ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>