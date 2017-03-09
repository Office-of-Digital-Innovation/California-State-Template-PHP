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

<title>Sample - Cards</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body>

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
                <li class="active">Card</li>
            </ol>
            <div class="group">
                <div class="half">
                     <h1>Card</h1>
                     <p>A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>
                     <p>Cards require a small amount of markup and classes to provide you with as much control as possible. These classes and markup are flexible though and can typically be remixed and extended with ease. For example, if your card has no flush content like images, feel free to put the <code>.card-block</code> class on the <code>.card element</code> to consolidate your markup.</p>
                     <h2>Example:</h2>
                     <?php include("../sample/modules/card.php");?>                </div>
                 <div class="half">
                    <h2><label for="sample-card">Source Code:</label></h2>
                    <textarea id="sample-card" class="form-control" rows="10" cols="80"><?php include("../sample/modules/card.php");?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                <h2>Card Variations:</h2>
                <p>As with most components, cards can be extended to display with a different style. Apply one of the following supported class names to the <code>.card</code> div:</p>
                <ul>
                    <li><code>.card-default</code> (recommended)</li>
                    <li><code>.card-understated</code></li>
                    <li><code>.card-overstated</code></li>
                    <li><code>.card-standout</code></li>
                    <li><code>.card-primary</code></li>
                    <li><code>.card-danger</code></li>
                    <li><code>.card-inverted</code></li>
                </ul>
                <h3>Example using <code>.card-primary</code></h3>
                <?php include_once("../sample/modules/card-primary.php");?>                </div>
                <div class="half">
                    <h2><label for="sample-primary">Source Code:</label></h2>
                    <textarea id="sample-primary" class="form-control" rows="10" cols="80"><?php include_once("../sample/modules/card-primary.php");?></textarea>
                </div>
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                <h2>Card with Header:</h2>
                <?php include_once("../sample/modules/card-header.php");?>                </div>
                <div class="half">
                    <h2><label for="sample-header">Source Code:</label></h2>
                    <textarea id="sample-header" class="form-control" rows="10" cols="80"><?php include("../sample/modules/card-header.php");?></textarea>
                </div>
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                <h2>Card with footer:</h2>
                <?php include_once("../sample/modules/card-footer.php");?>                </div>
                <div class="half">
                    <h2><label for="sample-footer">Source Code:</label></h2>
                    <textarea id="sample-footer" class="form-control" rows="10" cols="80"><?php include_once("../sample/modules/card-footer.php");?></textarea>
                </div>
            </div>
            
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>