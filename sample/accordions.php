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

<title>Sample - Accordion List</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

		<?php
			include_once("../ssi/head-css-js.php");
			?>


</head>

<body>
    <header role="banner" id="header" class="global-header fixed">
        <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>

        <!-- Settings Bar -->
		<?php
			include_once("../ssi/settings-bar.php");
			?>

        <!-- Alert Banner -->
		<?php
			include_once("../ssi/alert-banner.php");
			?>

        <!-- Include Utility Header -->
		<?php
			include_once("../ssi/utility-header.php");
			?>

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
                <li class="active">Accordions</li>
            </ol>
            
            <div class="group">
                <div class="half">
                    <h1>Accordion</h1>
                    <h2>Example:</h2>
                    <?php
			include("../sample/modules/accordion.php");
                    ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion">Source Code:</label></h2>
                    <textarea id="sample-accordion" class="form-control" rows="10" cols="80"><?php
                                                                                             include("../sample/modules/accordion.php");
                                                                                             ?></textarea>
                </div> 
            </div>
            
            <div class="group">
                <div class="half">
                    <h1>Accordion List</h1>
                    <p>Accordion lists are commonly used for things like FAQ's where the title exposes the description in an expanding menu fashion. Any of the base <a href="lists.php">list styles</a> can be used in conjunction with the <code> .accordion-list</code> class.</p>
                    <h2>Example:</h2>
                    <?php
			include("../sample/modules/accordion-list.php");
                    ?>
                </div>
                 <div class="half">
                    <h2><label for="sample-accordion-list">Source Code:</label></h2>
                    <textarea id="sample-accordion-list" class="form-control" rows="10" cols="80"><?php
                                                                                                  include("../sample/modules/accordion-list.php");
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