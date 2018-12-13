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

<title>Sample - Buttons</title>

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
                <li class="active">Buttons</li>
            </ol>
            <div class="group">
                <div class="two-thirds">
                     <h1>Buttons</h1>
                     <p>Buttons can be created by adding <code>.btn</code> class to a link or button element. By it's self the <code>.btn</code> class does not do much besides create some basic structure. To apply styles to the button we need to add an extender class like <code>.btn-default</code> or <code>.btn-primary</code></p>
                     <?php include("../sample/modules/buttons.php"); ?>
                </div>
                 <div class="third">
                    <h2><label for="sample-buttons-1">Source Code:</label></h2>
                    <textarea id="sample-buttons-1" class="form-control" rows="10" cols="80"><?php include("../sample/modules/buttons.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="two-thirds">
                     <p>For webmasters needing to add application behavior there are a few additional classes that might be useful. <code>.active</code> will make buttons appear pressed.</p>
                     <?php include("../sample/modules/buttons-active.php"); ?>
                </div>
                 <div class="third">
                    <h2><label for="sample-buttons-2">Source Code:</label></h2>
                    <textarea id="sample-buttons-2" class="form-control" rows="10" cols="80"><?php include("../sample/modules/buttons-active.php"); ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="two-thirds">
                    <p>Add the <code>.disabled</code> class to make buttons appear unclickable by fading them back 50%. Add the <code>disabled="disabled"</code> attribute to <code>&lt;button&gt;</code> buttons instead of the class.</p>
                    <?php include("../sample/modules/buttons-disabled.php"); ?>
                </div>
                 <div class="third">
                    <h2><label for="sample-buttons-3">Source Code:</label></h2>
                    <textarea id="sample-buttons-3" class="form-control" rows="10" cols="80"><?php include("../sample/modules/buttons-disabled.php"); ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>