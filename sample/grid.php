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

<title>Sample - Grid</title>

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
        
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php"); ?>
    
    </div>
    
	<div class="header-decoration"></div>
</header>


<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Grid</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Grid System</h1>
                    <p>Grid systems are used for creating page layouts through a series of rows and columns that house your content. This template uses a set of commonly understood fractional units to provide a platform agnostic layout grid. All columns are wrapped in a <code>.group</code> container, all fractional columns are placed directly within the <code>.group</code> container. All fractional columns should equal one whole group. For example two (2) .halfs equal one whole group. Likewise three (3) thirds equal one whole. </p>
                    <ul>
                        <li>A row is identified by the <code>.group</code> class</li>
                        <li>Columns are identified through  fractional notations like <code>.half</code>, <code>.third</code>, <code>.two-thirds</code>, <code>.quarter</code>, and <code>.three-quarters</code> </li>
                        <li>Use <code>.group</code> to create horizontal groups of columns.</li>
                        <li>Content should be placed within fractional layout columns.</li>
                    </ul>
                                        
                    <p><span class="label label-info">NOTE:</span> Grids display a 1px gray border in demo only.</p>
                    
                    <h2>Example:</h2>
                    <?php include("../sample/modules/grid.php"); ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion">Source Code:</label></h2>
                    <textarea id="sample-accordion" class="form-control" rows="10" cols="80"><?php include("../sample/modules/grid.php"); ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>