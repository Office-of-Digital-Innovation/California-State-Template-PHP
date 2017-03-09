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

<title>Sample - Breadcrumb</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />
		<?php
			include_once("../ssi/head-css-js.php");
			?>

</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
	<?php
			include_once("../ssi/branding.php");
			?>
    
    <!-- Include Mobile Controls -->
	<?php
			include_once("../ssi/mobile-controls.php");
			?>
    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
			<?php
			include_once("../ssi/search.php");
			?>
        </div>
        
        <!-- Include Navigation -->
		<?php
			include_once("../ssi/navigation.php");
			?>
    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
                        
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Breadcrumb</li>
            </ol>
           
            <div class="group">
                <div class="half">
                     <h1>Breadcrumb</h1>
                     <p>The breadcrumb indicate the current page's location within a navigational hierarchy. It uses an ordered list with a class of <code>.breadcrumb</code> </p>
                     
                     <h2>Example:</h2>
                    <?php
						include ("../sample/modules/breadcrumb.php");
                    ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-media">Source Code:</label></h2>
                    <textarea id="sample-media" class="form-control" rows="10" cols="80"><?php
                                                                                         include ("../sample/modules/breadcrumb.php");
                                                                                         ?></textarea>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                     <h1>Dynamic Breadcrumbs</h1>
                     <p>If you wish to have breadcrumbs generated dynamicaly based on folder structure, add the class <code>.dynamic</code> to the <code>.breadcrumb</code> list.</p>
                     <p><span class="label label-info">NOTE:</span> If using this method, it is recommended that folder names be Title Case and use underbars or dashes in lieu of spaces.</p>
                     
                     <h2>Example:</h2>
					 <?php
			include("../sample/modules/breadcrumb-dynamic.php");
			?>
                </div>
                 <div class="half">
                    <h2><label for="sample-media">Source Code:</label></h2>
                    <textarea id="sample-media" class="form-control" rows="10" cols="80"><?php
                                                                                         include("../sample/modules/breadcrumb-dynamic.php");
                                                                                         ?></textarea>
                </div> 
            </div>
        </main>
    </div>
</div>
<?php
			include_once("../ssi/global-footer.php");
			?>
<?php
			include_once("../ssi/scripts.php");
			?>

</body>
</html>