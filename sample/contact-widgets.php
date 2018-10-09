<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.2
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Contact Us Widgets</title>

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
        <article class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Contact Us Widgets</li>
            </ol>
            <h1>Contact Widgets</h1>
            <div class="group">
                <div class="half">
                    <h2>Example Within Panel:</h2>
                    <?php include("../sample/modules/contact-panel.php"); ?>
                </div>
                 <div class="half">
                    <h2>Source Code:</h2>
                    
                     <div class="tab-group">
                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                          <li class="active">
                            <a href="#panelhtml" role="tab" data-toggle="tab">
                              <label for="within-panel-html">HTML Markup</label>
                            </a>
                          </li>
                          <li>
                            <a href="#panelmicrodata" role="tab" data-toggle="tab">
                              <label for="within-panel-microdata">Microdata</label>
                            </a>
                          </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="panelhtml">
                              <textarea id="within-panel-html" class="form-control" rows="10" cols="80"><?php include("../sample/modules/contact-panel.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="panelmicrodata">
                              <textarea id="within-panel-microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/contact-panel-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
            <hr>
            
            <div class="group">
                <div class="half">
                    <h2>Example Without Panel:</h2>
                    <?php include("../sample/modules/contact.php"); ?>
                </div>
                 <div class="half">
                    <h2>Source Code:</h2>
                     <div class="tab-group">
                       <ul id="sourceCode2" class="nav nav-tabs" role="tablist">
                         <li class="active">
                           <a href="#html" role="tab" data-toggle="tab">
                             <label for="without-panel-html">HTML Markup</label>
                           </a>
                         </li>
                         <li>
                           <a href="#microdata" role="tab" data-toggle="tab">
                             <label for="without-panel-microdata">Microdata</label>
                           </a>
                         </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="html">
                              <textarea id="without-panel-html" class="form-control" rows="10" cols="80"><?php include("../sample/modules/contact.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="microdata">
                              <textarea id="without-panel-microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/contact-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                     
                </div> 
            </div>
        </article>
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>