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

<title>Sample - Course Detail (Panel)</title>

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
        <div id="head-search" class="search-container">
          <!-- Include Navigation -->
          <?php include_once("../ssi/navigation.php"); ?>
          
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
                <li class="active">Course Detail (Panel)</li>
            </ol>
            
            <p>This is an alternative layout for the course detail page. See also <a href="course-detail.php">Course Details</a> main page for more information on the usage and options for this module.</p>
            
            <div class="group">
                <div class="two-thirds">
                    <?php include("../sample/modules/course-detail-panel.php"); ?>
                </div>
                 <div class="third">
                    <h2>Source Code:</h2>
                    
                    <div class="tab-group">
                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                            <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="html">
                              <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/course-detail-panel.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="microdata">
                              <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/course-detail-panel-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>