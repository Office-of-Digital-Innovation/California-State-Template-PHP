<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--
California State Template
Version 4.0

Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample -Charts</title>

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
                <li class="active">Lists</li>
            </ol>

         <h1>Charts</h1>
         <!-- TODO: Document how a user can utilize either a csv file moring with x,y columns. Or a custom
               JSON config to take advantage of all Plotly's configurations and features -->
            <div class="group">
                <div class="half">
                    <h2>Bar</h2>
                  <div>
                    <?php include("../sample/modules/chart-bar.php"); ?>
                  </div>
                </div>
                 <div class="half">
                    <h2><label >Source Code:</label></h2>
                    <textarea  class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-bar.php"); ?></textarea>

                </div>
            </div>

            <hr>

            <div class="group">
                <div class="half">
                    <h2>Line</h2>

                  <div >
                    <?php include("../sample/modules/chart-line.php"); ?>
                  </div>
                </div>
                 <div class="half">
                    <h2><label >Source Code:</label></h2>
                    <textarea  class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-line.php"); ?></textarea>

                </div>
            </div>

            <hr>

            <div class="group">
                <div class="half">
                    <h2>Pie</h2>

                  <div >
                    <?php include("../sample/modules/chart-pie.php"); ?>
                  </div>
                </div>
                 <div class="half">
                    <h2><label >Source Code:</label></h2>
                    <textarea  class="form-control" rows="4" cols="80"><?php include("../sample/modules/chart-pie.php"); ?></textarea>
                  
                </div>
            </div>

            <hr>

            <div class="group">
                <div class="half">
                    <h2>Dashboard Arch</h2>

                  <div style="margin:0 auto;">
                    <?php include("../sample/modules/chart-dash-arch.php"); ?>
                  </div>
                </div>
                 <div class="half">
                    <h2><label >Source Code:</label></h2>
                    <textarea  class="form-control" rows="10" cols="80"><?php include("../sample/modules/chart-dash-arch.php"); ?></textarea>
                </div>
            </div>

            <hr>


        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>
