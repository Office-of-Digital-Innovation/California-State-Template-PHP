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

<title>Sample - Location Widgets</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body class="two-column">

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
                <li class="active">Location Widgets</li>
            </ol>
            
         <h1>Location Widgets</h1>
         
         <p>Location widgets display organizational contact information in a variety of ways. Start with a div with a class of <code>.location</code> each different version extends the default module with an additional class. For example: <code>.contact</code> displays the address with an email icon on the left. <code>.mini</code> is a more compact address format best used as a list. <code>.banner</code> works best as a footer or section divider as it is a full width banner that includes the option for a photo and description in addition to the address.</p>
         
         <?php include("../sample/modules/schema-boilerplate.php"); ?>
         
            <div class="group">
                <div class="half">
                    
                    <h2>Example Contact Location:</h2>
                    <?php include("../sample/modules/location.php"); ?>
                </div>
                 <div class="half">
                    <h2>Source Code:</h2>
                    
                    <div class="tab-group">
                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                            <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="html">
                              <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="microdata">
                              <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Example Mini Location:</h2>
                    <?php include("../sample/modules/location-mini.php"); ?>
                </div>
                 <div class="half">
                    <h2>Source Code:</h2>
                    
                    <div class="tab-group">
                      <ul id="sourceCode2" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#minihtml" role="tab" data-toggle="tab">HTML Markup</a></li>
                            <li><a href="#minimicrodata" role="tab" data-toggle="tab">Microdata</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="minihtml">
                              <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-mini.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="minimicrodata">
                              <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-mini-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <h2>Example Location Banner:</h2>
                <?php include("../sample/modules/location-banner.php"); ?>
                
                <h2>Source Code:</h2>
                    
                <div class="tab-group">
                  <ul id="sourceCode3" class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#bannerhtml" role="tab" data-toggle="tab">HTML Markup</a></li>
                        <li><a href="#bannermicrodata" role="tab" data-toggle="tab">Microdata</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content responsive">
                        <div class="tab-pane active" id="bannerhtml">
                          <textarea aria-label="HTML Markup" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-banner.php"); ?></textarea>
                        </div>
                        <div class="tab-pane" id="bannermicrodata">
                          <textarea aria-label="Microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-banner-schema.php"); ?></textarea>
                        </div>
                    </div>
                </div>
                    
            </div>
        </main>
        
        <div class="main-secondary">
            <?php include("../sample/modules/location.php"); ?>
            
            <div class="panel panel-overstated">
                <div class="panel-heading">
                    <h4><span class="ca-gov-icon-road-pin"></span> Mini Locations</h4>
                </div>
                <div class="panel-body">
                    <?php include("../sample/modules/location-mini.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>